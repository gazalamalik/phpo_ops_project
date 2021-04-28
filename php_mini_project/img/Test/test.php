<?php
include 'dbConnection.php';
$db = new  DB ();
$url ='https://raw.githubusercontent.com/khkwan0/countryCityStateJson/master/lib/compiledCities.json';

$readJsonFile =file_get_contents($url);

$array = json_decode($readJsonFile, TRUE);
foreach($array as $key=>$value){

    $key;
    $name= $value['name'];
    $native= $value['native'];
    $phone = $value['phone'];
    $continent= $value['continent'];
    $capital= $value['capital'];
    $currency = $value['currency '];
    $languages = $value['languages '];
    $emoji = $value['emoji'];
    
    $emojiU= $value['emojiU'];
    
   //$sql = "INSERT INTO country (country_id,name,native,phone,continent,capital,currency,languages,emoji,emojiU) values ($country_id'$key',' $name','$native','$phone','$continent','$capital',' $currency',' $languages ',' $emoji ','$emojiU')";
   echo "SQL result is :";
   $ret = $db->query($sql);
    
    

}



 

?>