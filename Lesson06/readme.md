## Date: 9/17/2019

# Content

## PHP
php basics and connection to server.
phpinfo()
Setting up an DNS A record to your server's IP address.
PHP: syntax, echo, types, loops, objects, inheritance, string funtions, $_GET, $_POST, $_REQUEST; etc.

We'll try to go over https://www.w3schools.com/php all the way to forms




Install git extension pack for VSCode: Git Extension Pack
Install markdown editor extension: Markdown All in One
you can read more on version control integration: https://code.visualstudio.com/docs/editor/versioncontrol
Othe extensions:
PHP Debug
PHP IntelliSense
To install PHP with debugging in your local using XAMPP

If you install XAMPP locally, your root directory will be: 
`C:\xampp\htdocs`
You can change it to something else if you edit htdocs.conf: 
* On XAMPP control panel click Config button for Apache.
* Choose Apache(httpd.conf).  
* find the line DocumentRoot "C:/xampp/htdocs"  and replace this and next line with something like this:

Before: 
```
DocumentRoot "C:/xampp/htdocs"
<Directory "C:/xampp/htdocs">
```
After:
```
#DocumentRoot "C:/xampp/htdocs"
#<Directory "C:/xampp/htdocs">
DocumentRoot "C:/Users/Eugen-hp/Desktop/grandview/GrandviewClass2019"
<Directory "C:/Users/Eugen-hp/Desktop/grandview/GrandviewClass2019">
```
Now when you access `http://localhost` your files will be serverd out of the same directory where your GrandviewClass2019 folder is. You can access e.g. lesson6 index.php just like this:
http://localhost/Lesson6/index.php



Practice: 
* https://www.w3schools.com/php/default.asp  from HOME and Intro all through Form Complete
* Do the exercises



### Practice and Extra credit towards the quizes!
Max 5 points to quizes. To get any credit you must earn at least 3 points and the form should be functioning correctly (i.e. selecting one radio button unselects the other, checkboxes work, lables select the radio/checkbox )

Point 1:
```
Create a php webpage (* means required) that has:
have a form with the following elements: 
Name * 
Email *,
phone, 
Ocupation: a select box with a few categories and --select-- default, 
Gender - radiobuttons
How are you feeling today? []Happy []... []... - these are checkboxes
[Submit] - button to submit form.
```
Point 2:
``` Submit the form via POST and perform validation for required fields. 
Display a message that required fields need to be completted.
```

Point 3: 
``` 
Fields that are not completed need to come back highlighted in red. Use CSS styling for that. 
```

Point 4:
``` 
If everything is successful display a green success message:
Submitted successfully: Name, email@email.com, 515-322-3322, ...
```
Point 5
``` 
If a non-required field is not entered it should not display it in the success message AND
Entered data will still display in the form. 
```

