<!DOCTYPE html>
<html>
<head>
<title>amiibo gameseries</title> 
<!-- CSS -->

</head>
<body>
<?php
//define CURL and intilize the session
$curl = curl_init();
curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);

if(isset($_GET['character'])){
    $character = urlencode($_GET['character']);
}
else{
    $character = "Mario";

}
if(isset($_GET['tail'])){
    $tail = urlencode($_GET['tail']);
}
else{
    $tail = "00000002";

}
//print "<div class='container'>
//<div class='row'>";
//echo $gameseries;
$url = "https://amiiboapi.com/api/amiibo/?character=".$character."&tail=".$tail;
curl_setopt($curl,CURLOPT_URL,$url);
$result = json_decode(curl_Exec($curl));
foreach($result->amiibo as $amiibos){
    echo "<center><img src='".$amiibos->image."' width='50%'></center> ";
    echo "<h5>$amiibos->name</h5>";
    echo "<h5>$amiibos->amiiboSeries</h5>";
    echo "<h5>$amiibos->type</h5>";
    echo "<h5>$amiibos->head</h5>";
    echo "<h5>$amiibos->tail</h5>";
    echo "<h5>".$amiibos->release->au." </h5>";
    echo "<h5>".$amiibos->release->eu." </h5>";
    echo "<h5>".$amiibos->release->jp." </h5>";
    echo "<h5>".$amiibos->release->na." </h5>"; 
};
//print "</div>
//</div>"
   


?>
</body>
</html>