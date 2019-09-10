<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
 <h1>Example static page</h1>   
 <style>
     label {
         display: block;
     }
 </style>

    <form action="lesson4-deploy.php" method="POST">
        <label for="name">Name: <input type="text" name="name" id="name" value="<?php echo $_POST['name'] ?>"></label>
        <label>Email: <input type="email" name="email" id="email"></label>
        <button type="submit" name="submittingFrom">Submit form</button>
    </form>
    <?php 


echo "php works again adn again <br/>".$_POST['name'];


    ?>
</body>
</html>