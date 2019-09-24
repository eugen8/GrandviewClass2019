<!DOCTYPE html>
<html lang="en">
<head>
    <title>Adding contact with Mailchimp</title>
</head>
<body>
    
<form action="" onsubmit="return sumbmitFormAjax(event)">
    <p><input type="text" name="fname" id="fnameInput" placeholder="First Name"></p>
    <p><input type="text" name="lname" id="lnameInput" placeholder="Last Name"></p>
    <p><input type="text" name="email" id="emailInput" placeholder="Email"></p>
    <p><input type="Submit" name="submitContact" id="" ></p>
</form>

<div id="add_contact_result" style="background-color: green; text-color:red; font-weight:bold;"></div>

<script>

function sumbmitFormAjax(e){
    e.preventDefault();
    
    var fname = document.getElementById('fnameInput').value;
    var lname = document.getElementById('lnameInput').value;
    var email = document.getElementById('emailInput').value;
    var xmlhttp;

    if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
    } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("add_contact_result").innerHTML = this.responseText;
        }
    };
    xmlhttp.open("GET","add_contact_ajax.php?action=register_user&fname="+fname+"&lname="+lname+"&email="+email,true);
    xmlhttp.send();

    return false;
}

</script>



<?php


include_once('credentials.php');


$data = [
    'email'     => 'eugen8@gmail.com',
    'status'    => 'subscribed',
    'firstname' => 'Eugen',
    'lastname'  => 'Burianov'
];

syncMailchimp($data);



function syncMailchimp($data) {
    $apiKey = MAILCHIMP_APIKEY_DEFAULT;
    $listId = MAILCHIMP_AUDIENCE_ID;

    $memberId = md5(strtolower($data['email']));
    $dataCenter = substr($apiKey,strpos($apiKey,'-')+1);
    $url = 'https://' . $dataCenter . '.api.mailchimp.com/3.0/lists/' . $listId . '/members/' . $memberId;

    if(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip_address = $_SERVER['REMOTE_ADDR'];
    }


    $json = json_encode([
        'email_address' => $data['email'],
        'status'        => $data['status'], // "subscribed","unsubscribed","cleaned","pending"
        'ip_signup'     => $ip_address,
        'merge_fields'  => [
            'FNAME'     => $data['firstname'],
            'LNAME'     => $data['lastname']
        ]
    ]);

    $httpCode = null;
    printRequestInfo($url, $json);
    // $httpCode = executeRequest($url, $json); echo("<pre>Result: ");print_r($httpCode);echo("</pre>");
    


    return $httpCode;
}

 function executeRequest($url, $json){

    $ch = curl_init($url);

    curl_setopt($ch, CURLOPT_USERPWD, 'user:' . MAILCHIMP_APIKEY_DEFAULT);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');//https://mailchimp.com/developer/guides/get-started-with-mailchimp-api-3/#Actions
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $json);                                                                                                                 

    $result = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    return $httpCode;
 }
 function printRequestInfo($url, $json){
    echo "<pre>";
    print_r($url);
    echo "</pre>";

    echo "<br/>\n";
    echo "<pre>";
    print_r($json);
    echo "</pre>"; 
}

?>



</body>
</html>