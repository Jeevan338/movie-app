<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="container"><div class="row">

<div class="col col-12 col-sm-4  "></div>
<div class="col col-12 col-sm-4  "></div>
<form method="POST">
    <table class="table table-borderless"><tr>
        <td>Movie name</td>
        <td><input class="form-control"  name="mname" type="text"></td>
    </tr><tr>
        <td></td>
       <td><button class="btn btn-success" name="btn">SEARCH</button></td>
    </tr>
    </table>
    <div class="col col-12 col-sm-4  "></div>
</form>
</body>
</html>
<?php
if(isset($_POST["btn"]))
{
     $moviename=$_POST['mname'];
     $connection=new mysqli("localhost","root","","moviesnow");
     $sql="SELECT `id`, `actor`, `actress`, `director`, 'year of release' FROM `movies` WHERE `title`='$moviesnow'";
     $result=$connection->query($sql);

     if($result->num_rows>0)
     {
       while($row=$result->fetch_assoc())
       {
            $getactor=$row['actor'];
           $getactress=$row['actress'];
           $getdirector=$row['director'];
           $getyor=$row['yor'];
          echo" <table><tr>
              <td>Author</td>
              <td> $getauthor</td>
          </tr>
          <tr>
              <td>Actress</td>
              <td> $getactress</td>
          </tr>

          <tr>
              <td>Direcor</td>
              <td> $getdirector</td>
          </tr>
          <tr>
              <td>Year Of Release</td>
              <td> $getyor</td>
          </tr>
          </table>";
       }
     }
     else
     {
         echo"No book has found";
     }
}
?>