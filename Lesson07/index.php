<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Lesson7</h1>
<?php
include_once("util.inc.php");

include("util.inc.php");
include("util.inc.php");
include("util.inc.php");

$name = "";
$nameExists = true;

$m = "";


if($_SERVER['REQUEST_METHOD']=='POST'){
    $name = $_POST["name"];
    if( empty(  trim($name)  ) ){
        $nameExists = false;
    }
}

?>
<br/>
Form



<form action="index.php" method="POST">
    <p><input name="name" type="text" placeholder="first name" style="background-color:<?php  echo $nameExists?"white":"red";  ?>" value="<?php echo $name ?>">   </p>
    <p><input name="last_name" type="text" placeholder="last name"></p>
    <p><Button type="submit">Submit</Button></p>
    
</form>



</body>
</html>