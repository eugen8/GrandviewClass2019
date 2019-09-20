<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Lesson8</h1>

<p>A simple form:</p>

<form action="">
    <p><input type="text" name="yourname" id="" placeholder="name"  value=""></p>
    <p><input type="text" name="youremail" id="" placeholder="email"  value=""></p>
    <p><button type="submit">Send form</button></p>
</form>



<div>
<p> Walkthrough isset and empty on arrays </p>
    <?php
    $A=array();
    $A["yourname"] = "John";
    $A["yourphone"]="";
    $A["youremail"]="   ";
    $A["yourdata"] = "  I say hello   ";
    echo 'isset: '.isset($A['yourname']).", ".isset($A['yourphone']).", ".isset($A['youremail']).", ".isset($A['yourdata'])."<br/>";
    echo 'isset of somethingelse: '.isset($A['somethingelse'])."<br/>";
    echo 'empty: '.empty($A['yourname']).", ".empty($A['yourphone']).", ".empty($A['youremail']).", ".empty($A['yourdata'])."<br/>";
    echo 'empty of somethingelse: '.empty($A['somethingelse'])."<br/>";
    // echo 'empty of trim: '.empty(trim($A['somethingelse']))."<br/>"; -- this will throw an exception
    echo "Checking for empty of trim should be done like this: ".  
       ( isset($A['somethignelse']) && !empty(trim($A['somethingelse'])) )  ."<br/>";
    ?>


<p>Walk through the same when the array is $_GET</p>
    <?php
    
    function br(){
        echo '<br/>';
    }

    if(isset($_GET['yourname'])){
        echo "0. name isset and it is: [".$_GET['yourname']."]";
    /* note what these will output:
        $_GET['yourname']==false
        true
        $_GET['yourname']===false
        false
    */
    }
    br();
    if( !empty($_GET['yourname']) ){
        echo "1. name is: ".$_GET['yourname'];
    }
    br();
    //this is somewhat equivalent to doing :
    if( isset($_GET['yourname']) && $_GET['yourname']!=false ){
        echo '2. name is: '.$_GET['yourname'];
    }
    br();
    //if you want to check for whitespaces:
    if(isset($_GET['yourname'])  && !empty(trim($_GET['yourname'])) ){
        echo "3. name is not empty string and it is: ".$_GET['yourname'];
    }
    br();
    //Prior to PHP 5.5, empty() only supports variables, so this expression had to be written something like below:
    $nameStr = isset($_GET['yourname']) ? trim($_GET['yourname']) : "";
    if( !empty($nameStr) ){
        echo "4. name is not empty string and it is: ".$nameStr;
    }
    br();
    if(!empty($_GET['yourname']) ){
        echo "5. name is: ".$_GET['yourname'];
    }
    br();
    //if you want to check for whitespaces:
    if(isset($_GET['yourname'])  && !empty(trim($_GET['yourname'])) ){
        echo "6. name is not empty string and it is: ".$_GET['yourname'];
    }
    br();
    //Prior to PHP 5.5, empty() only supports variables, so this expression had to be written something like below:
    $nameStr = isset($_GET['yourname']) ? trim($_GET['yourname']) : "";
    if( !empty($nameStr) ){
        echo "7. name is not empty string and it is: ".$nameStr;
    }
    br();



    ?>

<p><?php  echo "form submitted via: ".$_SERVER['REQUEST_METHOD'] ?></p>
</div>



</body>
</html>
