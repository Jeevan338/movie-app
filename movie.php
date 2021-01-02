<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="POST">
<div class="container"></div>
<div class="row"></div>
<div class="col col-12 col-sm-2"></div>
<div class="col col-12 col-sm-8"></div>
<table class="table table-borderless">
<tr>
    <td>MovieName</td>
    <td><input class="form-control" name= "mname" type="text"></td>
</tr>
<tr>
    <td>Actor</td>
    <td><input class="form-control" name= "actor" type="text"></td>
</tr>
<tr>
    <td>Actress</td>
    <td><input class="form-control" name= "actress" type="text"></td>
</tr>
<tr>
    <td>Director</td>
    <td><input class="form-control" name= "director" type="text"></td>
</tr>
<tr>
    <td>Year Of Release</td>
    <td><input class="form-control" name= "yor" type="text"></td>
</tr>
<tr>
    <td></td>
    <td><button class="btn btn-success" name="btn">SUBMIT</button></td>
</tr>
<div class="col col-12 col-sm-8"></div>
</table>
</body>
</html>
<?php
if(isset($_POST["btn"]))
{
     $moviename= $_POST["mname"];
     $actor= $_POST["actor"];
     $actress= $_POST["actress"];
     $director= $_POST["director"];
     $yor= $_POST["yor"];
   // echo $mn;
   // echo $actor;
   // echo $actress;
   // echo $director;
   // echo $yor;
   $connection = new mysqli("localhost","root","","movienow");
   $sql = "INSERT INTO `movies`(`moviename`, `actor`, `actress`, `director`, `year of release`) VALUES ('$moviename','$actor','$actress','$director','$yor')";
   $result = $connection->query($sql);
   if($result === true)
   {
    echo "SUCCESS";

}
else
{
    echo "NOT SUCCESS";
}
}
?>