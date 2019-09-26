<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
.todo{
    background: yellow;
    color:red;
}
</style>

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

echo "<pre> test somethi";


echo '\''.!empty($A['yourdata']).'\'';

echo "</pre>";



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
        echo "<br/>\n";
    }
    function nl(){
        echo "\n" ;
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


<h1>Utility functions</h1>
<p>Dates with php</p>
<?php
$today = date("D, M d Y");
echo $today;
echo " (".date('d/m/Y').")";
/*
d - day of the month; two digits, leading zeros (01 or 31)
D - day of the week in text as an abbreviation (Mon to Sun)
m - month in numbers with leading zeros (01 or 12)
M - month in text, abbreviated (Jan to Dec)
y - year in two digits (08 or 14)
Y - year in four digits (2008 or 2014)
*/
br();
echo "The time is: ".date('h:i:s A');
/*
h - hour in 12-hour format with leading zeros (01 to 12)
H - hour in in 24-hour format with leading zeros (00 to 23)
i - minutes, leading zeros (00 to 59)
s - seconds, leading zeros (00 to 59)
a - (am or pm)
A - (AM or PM)
*/
?>
<p>String functions. More details at: <a href="https://www.php.net/manual/en/ref.strings.php">https://www.php.net/manual/en/ref.strings.php</a>
</p>
<pre>
<?php
echo '['.chop("     chop removes spaces at the end   ").']';
nl();
echo "[".rtrim("  one  ").",".ltrim("  one  ").",".trim("  one  ").']';
echo chr(75);
nl();
echo htmlspecialchars("<script>alert('will call function to crash the server');</script>");
nl();
echo htmlspecialchars_decode("&lt;span style='color:green'&gt;this span is styled&lt;/span&gt;");
nl();
echo "PHP and php strcasecmp:".strcasecmp("PHP","php");
nl();
echo " but php1 and php: ".strcasecmp('php1','php');
echo "  or php and php1: ".strcasecmp("php", "php1");
nl();
echo "strcmp: ". strcmp("stringone", "stringOne");
nl();
echo "length of hello is ".strlen('hello');
nl();
echo "md5 hash of hello is: ".md5("hello");
nl();

$cities=["Copenhagen", "New York", "Bor"];
echo str_pad($cities[0], 20, "_", STR_PAD_LEFT); nl();    
echo str_pad($cities[1], 20, "_", STR_PAD_LEFT); nl();    
echo "[".str_pad($cities[2], 20)."]"; nl();   
echo str_pad($cities[2], 20, "_", STR_PAD_BOTH); nl();    


$citiArray = explode(",","New York, London, Athenes,Chisinau");
echo "<pre>";
print_r($citiArray);
echo "<pre>";
var_dump($citiArray);

nl();

/* join or implode: */
echo "Let's sometime visit: ".implode($citiArray, " and ");
nl();


echo strtolower("TO LOWERCASES")." and ".strtoupper("to upper cases");
nl();

$newstring = 'abcdef abcdef';
$pos = strpos($newstring, 'a', 1); 
echo "strpos: ".$pos;// $pos = 7, not 0
nl();


$res = substr("abcdef",2);
echo "substr from position 2 is: ".$res;nl();
$res = substr("abcdef", -3, 2);
echo "substr with negative: $res";


?>
</pre>
<div class="todo">Write similar examples for: stripos, strnatcasecmp, strrchr , strrev, strstr, printf </div>



<h1>Objects in PHP</h1>
<?php
    interface Media {
        public function getPrice();
    }
    interface Electronic extends Media{
        public function getFileSize();
    }
    interface Physical extends Media{
        public function getWeight();
    }

    class Book implements Media{
        private $title, $price;
        
        public function __construct($title, $price=0){
            $this->title = $title;
            $this->price = $price;
        }
    
        
        public function getTitle(){
            return $this->title;
        }

        public function getPrice(){
            return $this->price;
        }

        //static methods
        public static function calculate_sale_tax($book){
            return $book->price * 0.07;
        }
        //what's the difference between private, public and protected?


    }
    //Class can extend one other class but multiple interfaces
    class Paperback extends Book{


    }


    function printObject($obj){
        echo "<pre>\n";
        print_r($obj);
        echo "</pre>\n";
    }
    $mobi_dick = new Book("Mobi Dick", 32);
    echo "Book title is: ".$mobi_dick->getTitle()."\n<br/>";
    printObject($mobi_dick);
    echo "Sales tax on ".$mobi_dick->getTitle()." is: $".Book::calculate_sale_tax($mobi_dick);

?>


<h1>Working with exceptions</h1>
<?php
class Inventory {
    private $availability = array();
    public function addBook($book){
        if(isset($this->availability[$book->getTitle()])){
            $this->availability[$book->getTitle()] += 1;
        }else{
            $this->availability[$book->getTitle()]=1;
        }
        echo("Added book ".$book->getTitle()." inventory: ".$this->availability[$book->getTitle()]."<br/>");
        
    }
    public function sendBook($title, $address){
        $available = ($this->availability)[$title];
        if(!$available){
            throw new Exception("There are no '$title' books in the inventory <br/>\n");
        }else{
            $this->availability[$title] -= 1;
            echo "$title is being sent, there are ".$this->availability[$title]." books left.<br/>\n";
        }

    }
}

$inv = new Inventory();
$inv->addBook($mobi_dick);
$inv->addBook($mobi_dick);

try{
$inv->sendBook("Mobi Dick", "12 main st, Des Moines, IA, 50309");
$inv->sendBook("Mobi Dick", "12 main st, Des Moines, IA, 50309");
$inv->sendBook("Mobi Dick", "12 main st, Des Moines, IA, 50309");
}catch(Exception $e){
    echo "Could not send some books:".$e->getMessage();
}

//You can also have custom exceptions that extends Exception base class. More details: https://www.w3schools.com/php/php_exception.asp

?>



<h1>
File upload example:
</h1>
<form action="" method="post" enctype="multipart/form-data" >
    <p>Select a file:<input type="file" name="uploadFileName"></p>
    <input type="hidden" name="one" value="two">
    <p><input type="submit" name="submit_file" value="Submit file"></p>
</form>

<?php

if( isset($_POST['submit_file'] )  ) {
    $target_dir = "uploads/";
    $filepath = $target_dir . basename($_FILES["uploadFileName"]["name"]);
    
    echo "You are uploading file to: ".$filepath;
    br();
    echo "<pre>";
    print_r($_FILES['uploadFileName']);
    echo "</pre>";

    $success = 1;
    $fileType = strtolower(pathinfo($filepath,PATHINFO_EXTENSION));
    if(!empty($fileType) 
      && $fileType!="php" 
      && strcasecmp($fileType, "pdf")!=0 ){
        echo "This file type is not allowed";
    }

    

    if(file_exists($filepath)){
        echo "This file already exists";
        $success = 0;
    }

    if($success===1){
        if(move_uploaded_file($_FILES["uploadFileName"]["tmp_name"], $filepath)){
            echo "The file ". basename( $_FILES["uploadFileName"]["name"]). " has been uploaded.";
        }else{
            echo "There was an error uploading the file";
        }
    }
    
}
?>
<div class="todo">Make file size limited to 400 KB</div>






</body>
</html>
