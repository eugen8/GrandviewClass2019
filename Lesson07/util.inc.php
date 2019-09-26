<?php




$a = array('name'=>"Garry", 
           'last_name'=>'Smith',
           
)
           

           ;
foreach( $a as $v ){

    echo "key=  and value = ${v} " . "<br/>";
}
echo "<br/>";

if(isset($a['rabbit'])){
    echo "I have a rabbit";
}else{
    echo ("I don't have a rabbit");
}


$a1 = array("one", "    ");
foreach( $a1 as $k => $v ){
    echo "index: ${k} and value $v ";
}
echo "<br/>".$a1[1] . "   ".  (3+8) ;

