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
    alert(e);
    
    // var fname = document.getElementById('fnameInput').value;
    // var lname = document.getElementById('lnameInput').value;
    // var email = document.getElementById('emailInput').value;
    // var xmlhttp;

    // if (window.XMLHttpRequest) {
    //         // code for IE7+, Firefox, Chrome, Opera, Safari
    //         xmlhttp = new XMLHttpRequest();
    // } else {
    //         // code for IE6, IE5
    //         xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    // }
    // xmlhttp.onreadystatechange = function() {
    //     if (this.readyState == 4 && this.status == 200) {
    //         document.getElementById("add_contact_result").innerHTML = this.responseText;
    //     }
    // };
    // xmlhttp.open("GET","add_contact_ajax.php?action=register_user&fname="+fname+"&lname="+lname+"&email="+email,true);
    // xmlhttp.send();

    return false;
}

</script>






</body>
</html>