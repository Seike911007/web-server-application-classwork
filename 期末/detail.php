<!DOCTYPE html>
<html>
<head>
<title>amiibo gameseries</title> 
<!-- CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
<?php include 'nav.php';?>
<?php
//define CURL and intilize the session
$curl = curl_init();
curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);

if(isset($_GET['gameseries'])){
    $gameseries = urlencode($_GET['gameseries']);
}
else{
    $gameseries = "pokemon";

}
print "<div class='container'>
<div class='row'>";
//echo $gameseries;
$url = "https://amiiboapi.com/api/amiibo/?gameseries=".$gameseries;
curl_setopt($curl,CURLOPT_URL,$url);
$result = json_decode(curl_Exec($curl));
foreach($result->amiibo as $amiibos){
    echo "
    <div class='col-lg-3 col-md-4 col-sm-6 col-xs-12  text-xs-center'>
		      <div class='service-box'>
             <center><img src='".$amiibos->image."' height='200px' width='100%'></center>
             <h5><center>$amiibos->character</center></h5>
             <h5><center>$amiibos->tail</center></h5>
             <a href='detail2.php?tail=".$amiibos->tail."&character=".$amiibos->character."'class='btn btn-success btn-block'>Detail</a>
             </div>
             </div>
   
    ";
    //echo "<h5>$amiibos->name</h5>";
    
};
print "</div>
</div>
   "


?>
</body>
</html>