<html>
<head>
<title>Database example</title>
</head>
<body>
    <h1>Connecting to the database - 3 methods</h1>
    <p>MySQLi is the MySQL improved extension. You can use it in object oriented or procedural way. </p>
    <p>PDO stands for Php Data Objects and will work on 12 different database systems, whereas MySQLi will only work with MySQL databases.</p>

<?php
include_once('credentials.php');

//Connecting using mysqli procedural:
$conn = mysqli_connect(DBHOST, DBUSER, DBUSERPASSWORD, "lesson8");

// Check connection
if (!$conn) {
    die("The cnnection failed: " . mysqli_connect_error());
}
echo "Procedural: Connected successfully <br/>\n";
mysqli_close($conn);





// Connect using MySqli Object-Oriented
$conn = new mysqli(DBHOST, DBUSER, DBUSERPASSWORD, "lesson8");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_eorror);
}
echo "Object Oriented: Connected successfully<br/>\n";
$conn->close();



try {
    $conn = new PDO("mysql:host=".DBHOST.";dbname="."lesson8", DBUSER, DBUSERPASSWORD);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "PDO: Connected successfully";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
    $conn = null;

?>


<?php
echo "Creating a connection for this session.<br/>";
$conn = new mysqli(DBHOST, DBUSER, DBUSERPASSWORD, "lesson8");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

exit(0);

?>

<h1>Create tables and insert data</h1>
<form action="" method="POST"><button name="createTable" value="create" type="submit">Create Table</button></form>
<?php
if(isset($_POST['createTable'])){
    echo "Object Oriented: Connected successfully<br/>\n";
    $sql = "CREATE TABLE Inventory (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        bookname VARCHAR(40) NOT NULL,
        date_added DATE,
        available INT(4) UNSIGNED
        )";
    if($conn->query($sql)){
        echo "Table MyGuests created successfully";
    }else{
        echo "Error creating table: " . $conn->error;
    }



}

?>
<p>Test queries</p>
<form action="" method="POST">
    <p><input type="text" name="book_name" id=""></p>
    <input type="hidden" name="currentForm" value="testQueryForm">
    <p><button type="submit" name="testMyCoolQuery" style="background-color:#832229;">Test query</button></p>
</form>

<div style="background-color:yellow;">
<?php
if(isset($_POST['currentForm']) && $_POST['currentForm']==='testQueryForm' ){
    $bookname= $_POST['book_name'];
    
    $bookname = "Mobi Dick";
    // THIS IS BAD! DANGEROUS! NEVER WRITE QUERIES THIS WAY!
    // This allows your users to execute sql injection attacks: 
    //  https://www.php.net/manual/en/security.database.sql-injection.php
    //  https://en.wikipedia.org/wiki/SQL_injection
    $result = $conn -> query("select * from inventory where bookname='$bookname' ");

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $id = $row['id'];               $title = $row['bookname'];
            $available = $row['available']; $added = $row['date_added'];
            echo "<p>[$id] $title - $available items available. Added on: $added </p>";
        }
    }
}
?>
</div>

<p>Add books to inventory (prepared statement)</p>
<form action="" method="POST">
    <p><input type="text" name="bookname" placeholder="Book Name"></p>
    <p><input type="text" name="available" placeholder="Quantity"></p>
    <p><button type="submit" name="addBook">Add to inventory</button></p>
</form>
<?php

if(isset($_POST['addBook'])){

    $title = htmlspecialchars($_POST['bookname']);
    $available = htmlspecialchars($_POST['available']);
    // prepare and bind

    $stmt = $conn->prepare("INSERT INTO Inventory (bookname,  available, date_added) VALUES (?, ?, CURDATE() )");
    $stmt->bind_param("si", $title, $available);
    $stmt->execute();

    $last_id = $conn->insert_id;

    echo "Book inserted with id: [$last_id]";
    $stmt->close();

}

?>
<p>See curent inventory for Mobi Dick</p>
<?php

$title = "Mobi Dick";
$stmt = $conn->prepare("SELECT * FROM Inventory WHERE bookname = ?");
$stmt->bind_param("s", $title);
$stmt->execute();
$result = $stmt->get_result();
if($result->num_rows === 0) exit('No rows');
while($row = $result->fetch_assoc()) {
  $id = $row['id'];
  $title = $row['bookname'];
  $available = $row['available'];
  $added = $row['date_added'];
  echo "<p>[$id] $title - $available items available. Added on: $added </p>";
}
$stmt->close();
?>
<p>See curent inventory for all books</p>
<?php
    $result = $conn->query("SELECT * FROM Inventory ");
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $id = $row['id'];               $title = $row['bookname'];
            $available = $row['available']; $added = $row['date_added'];
            echo "<p>[$id] $title - $available items available. Added on: $added </p>";
        }
    }


?>




<?php

echo "closing the connection";
$conn->close();
?>

<div>Hello</div>

</body>
</html>

<?php



?>