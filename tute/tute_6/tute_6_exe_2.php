<?php define("GREETING", "Welcome to IWT Module!", true);
echo "greeeting";
?>



<?php
 $animal = array("Lion","Wolf","Dog","lepord","Tiger");

 foreach($animal as $value){
    echo "$value <br>";
 }
echo "<br>";

 if(count($animal)>4){
    echo "Pass <br>" ;
    echo count($animal);
}

// lecture one -- not working 
if($animal .length >4){
    echo "Pass <br>" ;
    echo count($animal);
}


?>