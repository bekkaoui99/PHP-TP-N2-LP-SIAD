<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php


// Exercice 2 - 1
// 1. Afficher la note minimale, maximale et la moyenne de la classe.
$note = array(
    "hamza"=>19,
    "aziz"=>15,
    "khalid"=>20,
    "younes"=>12,
    "walid"=>10,
    "oussama"=>9,
    "youssef"=>7
);


$min = 20;
$max = 0;
$sum = 0;

foreach($note as $key => $value){

    if($min >= $value){
      $min = $value;
    }
    if($max <= $value){
        $max = $value;
    }
    $sum += $value;

    


}

echo "la note minimale est : " . $min . "<br>";

echo "la note maximale est : " . $max . "<br>";

echo "la note moyenne est : " . number_format($sum/count($note),2) . "<br>";

// the end  


// Exercice 2 - 2
echo"<br>";
echo "<h1>les noms des étudiants dont la note est supérieure à la moyenne de la classe.</h1>";

foreach($note as $key => $value){

    if($value > number_format($sum/count($note),2)){
        echo "<h2> $key </h2>";
    }

}
// the end






// Exercice 3 
$web_site = array(
    "L’économiste"=> "https://www.leconomiste.com/",
    "L’opinion" => "https://www.lopinion.ma/",
    "Aujourd’hui le Maroc"=> "https://aujourdhui.ma/"

);
// the end






echo "<ul>";
foreach($web_site as $key => $value){
 echo  " <li><a href='$value' target=\"_blank\">$key</a></li>";
    }

echo "</ul>";
// the end






// Exercice 4 - 1 
$tab=array(10,2,22,12,65,1,89,18);
$len = count($tab);
$v=0;

for ($i=0; $i <$len ; $i++) { 
    # code...
    for($j=$len-1 ; $j >$i ;$j-- ){


        if($tab[$j]<$tab[$j-1]){
             
            $v = $tab[$j];
            $tab[$j] = $tab[$j-1];
            $tab[$j-1]=$v;
        }

    }



}

echo"<pre>";
print_r($tab);
echo"</pre>";

// the end






// Exercice 4 - 2
function sort_array($array){
$len = count($array);
    for ($i=0; $i <$len ; $i++) { 
        # code...
        for($j=$len-1 ; $j >$i ;$j-- ){
    
    
            if($array[$j]<$array[$j-1]){
                 
                $v = $array[$j];
                $array[$j] = $array[$j-1];
                $array[$j-1]=$v;
            }
    
        }
    
    
    
    }
    return $array;


}

$test=array(12,1,34,10,9,80);
$newArray = sort_array($test);

echo"<pre>";
print_r($test);
echo"</pre>";

echo"<pre>";
print_r($newArray);
echo"</pre>";


// the end




?>








</body>
</html>