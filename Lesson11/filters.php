<!DOCTYPE html>
<html>
<head>
    <title>Some filters example</title>
</head>
<body>
    <h1></h1>    
    <div>

<?php


// filter_var($x, )
// var_dump($_SERVER);
// print_r($_SERVER);
// $x = var_export($_SERVER, true);
// print_r($_SERVER);
// var_dump($x);
// var_dump($_SERVER);
if(strcasecmp('POST', $_SERVER['REQUEST_METHOD']) == 0){
    $age = filter_var($_REQUEST['age'], FILTER_SANITIZE_NUMBER_INT);
    echo "user entered age='$age'";

    $how = filter_var($_POST['how_hear'], FILTER_SANITIZE_SPECIAL_CHARS);
    $howUnsafe = $_POST['how_hear'];
    $how_with_string_utilities = "";
    if(isset($_POST['how_hear'])){
        $how2 = $_POST['how_hear'];
        echo"<br/>\n htmlentities".htmlentities($how2);
        echo"<br/>\n htmlspecialchars".htmlspecialchars($how2);
        echo "<br/>\n strip_tags: ".strip_tags($how2);
        echo "<br/>\n".filter_var($_POST['how_hear'], FILTER_SANITIZE_SPECIAL_CHARS);
        echo "<br/>\n".filter_var($_POST['how_hear'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        echo "<br/>\n".filter_var($_POST['how_hear'], FILTER_SANITIZE_STRING);
        echo "<br/>\n".filter_var($_POST['how_hear'], FILTER_SANITIZE_STRIPPED);
        echo "<br/>\n URL: ".filter_var($_POST['how_hear'].'http://hello.com?alfa=one and one + 3', FILTER_SANITIZE_URL);
        echo "\n <br/>";
        // entities: https://www.freeformatter.com/html-entities.html
        

    }
    
    echo "<br/>How hear: $how";
    echo "<br/>How unsafe hear: $howUnsafe";
    
}


?>

        <form action="" method="post" class="hello-form">
          
        <p><input type="text" name="Name" value="" placeholder="Your name"></p>
        <p><input type="text" name="age" value="" placeholder="Age"></p>
        <p><input type="text" name="how_hear" value="" placeholder="How did you hear about us?" style="width:300px;"></p>
        <p>Try for example:   &lt;div style=&quot;background:pink;&quot;&gt;$%and@&amp;&quot; ' &lt;/div&gt;</p>

        <input type="submit" value="Sumbit form" name="submitFilters">

        </form>
    </div>


<div>
<p>read more: <a href="https://www.w3schools.com/php/php_ref_filter.asp">https://www.w3schools.com/php/php_ref_filter.asp</a></p>
<p>or better read: <a href="https://www.php.net/manual/en/filter.filters.sanitize.php">https://www.php.net/manual/en/filter.filters.sanitize.php</a>  </p>

</div>
</body>
</html>
