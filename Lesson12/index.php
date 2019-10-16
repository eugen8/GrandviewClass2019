<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php 
if( isset($_REQUEST['submitForm']) && isset($_REQUEST['year']) ){
    echo "Displaying form <br/>";
    $year= $_REQUEST['year'];
    echo "user selects: ";
    foreach($year as $yearEl){
        echo $yearEl." ";
    }
}

?>

<form action="index.php">
    
   <p> <input type="checkbox" onclick="oneSelected(event)" +
    name="year[]" value="1" id="ch1"><label for="ch1">One</label></p>++//////////////////////////////
   <p>
       <label ><input type="checkbox" name="year[]" value="2" id="ch2">Two</label>
    
    </p>

   <p>
       <button type="submit" id="submtt" style="display:none">Submit</button>
       <div  ondrop="drop(event)" ondragover="allowDrop(event)"  id="button1" type="submit"
       name="submitForm" value="Submitting">Submit form</div>
    </p>
</form>

<div style="width:30px; height:30px;" draggable="true" ondragstart="drag(event)" > 


nothing here...


</div>
<script>

function oneSelected(event){
    if(document.getElementById('submtt').style.display == "block"){
        document.getElementById('submtt').style.display='none';
    }else{
        document.getElementById('submtt').style.display='block';
    }

}

    function clickOnSubmit(ev1){
        alert('I am here');
    }
    function dblClickOnButton(ev){
        alert ('you double clicked');
    }
    function drag(ev){
        ev.preventDefault();
        console.log('you\'re dragging over here');
        return false;
    }

    

    document.getElementById('button1').addEventListener('dblclick', dblClickOnButton);
    document.getElementById('button1').addEventListener('drag', dragging);
    document.getElementById('button1').addEventListener('drop', drop);

function allowDrop(ev) {
  ev.preventDefault();
}


function drop(ev) {
  ev.preventDefault();
  console.log('ev.dataTransfer', ev.dataTransfer);
  alert('drop happened');
  
}

</script>

    


</body>
</html>