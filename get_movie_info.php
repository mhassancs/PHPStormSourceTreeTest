<!DOCTYPE html>
<html>
<head><title>DB Test</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
.jumbotron-billboard .img {
    margin-bottom: 0px;
    opacity: 0.2;
    color: #ddd;
    background: #000 url("http://cdn26.us1.fansshare.com/photo/oblivion/official-oblivion-movie-poster-1545891908.jpg") center center;
    width: 100%;
    height: 100%;
    background-size: cover;
    overflow: hidden;


  position:absolute;
  top:0;left:0;
  z-index:1;
}
.jumbotron {position:relative;padding:50px;}
.jumbotron .container {z-index:2;
 position:relative;
  z-index:2;
}
TABLE {
    border-collapse: collapse;
    width: 95%;
    margin-left: 2.5%;
}

TH, TD {
    text-align: left;
    padding: 8px;
}
TR:nth-child(odd){background-color: #FFFFE0}
</style>
</head>
<body>
<div class="jumbotron jumbotron-billboard text-center" style="height: 1500px"\>
  <div class="img"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
  <form method="post" action="">
    <input type="Query" name="something" value="" class="panel-primary" style="height: 30px;padding:0"/>
    <input type="submit" value="Search" name="submit" class="btn btn-primary"/>
  </form>
<div class="container">
<?php
$sqlHost = 'localhost';
$sqlUser = 'user';
$sqlPass = 'CSCI330';
$dbName = 'Movies';
$db =  new mysqli($sqlHost, $sqlUser, $sqlPass, $dbName) ;
if($db->connect_errno){
    printf("Connect failed: %s\n", $db->connect_error);
    exit();
}
$filmTitle=$_POST['something'];
if(isset($_POST['submit']))  {
  echo '<TR>';
  echo '<TD>'."Query: ", htmlspecialchars($filmTitle).'</TD>';
  echo '</TR>';
  $result = $db->query("SELECT film.*, film_list.category FROM film JOIN film_list ON film.film_id=film_list.FID WHERE film.title LIKE '%$filmTitle%'")
  or trigger_error($db->error);
}
?>
</div>
</div>
</div>
</div>
<p></p>
<p></p>
<TABLE>
<TR>
<TH>Film Id</TH>
<TH>Title</TH>
<TH>Release Year</TH>
<TH>Rating</TH>
<TH>Genre</TH>
</TR>
<?php
$array = array('film_id', 'title', 'release_year', 'rating', 'category');
while($row = $result->fetch_array()) {
    // Less DRY ways to display for testing
    //echo var_dump($row);
    //echo $row['film_id'].": ".$row['title']." (".$row['release_year'].", ".$row['rating']. ", ".$row['genre'].")";
    //echo "<BR>";
    echo "<TR>";
    foreach($array as $field) {
        echo "<TD>".$row[$field]."</TD>";
    }
    echo "</TR>";
}
$db->close();
?>
</TABLE>
 </body>
</html>
