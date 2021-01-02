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
        <td>Movie Name</td>
        <td><input class="form-control"  name="mname" type="text"></td>
    </tr><tr>
        <td></td>
       <td><button class="btn btn-success" name="btn">SEARCH</button></td>
    </tr></table>
    <div class="col col-12 col-sm-4  "></div>
</form>
</body>
</html>
<?php
if(isset($_POST['btn']))
{
    $moviename=$_POST['mname'];
     $connection=new mysqli("localhost","root","","movienow");
     $sql="SELECT `id`, `actor`, `actress`, `director`, 'yor' FROM `movies` WHERE `title`='$movienow'";
     $result=$connection->query($sql);

     if($result->num_rows>0)
     {
       while($row=$result->fetch_assoc())
       {      
        $getactor=$row['actor'];
        $getactress=$row['actress'];
        $getdirector=$row['director'];
        $getyor=$row['yor'];
          echo" <form method='POST'> <table class='table'><tr>
          <td></td>
          <td> <input name='id' type='hidden' value='$getid' class='form-control'></td>
      </tr><tr>
              <td>Author</td>
              <td> <input type='text' value='$getauthor' class='form-control'></td>
          </tr>
          <tr>
              <td>Actress</td>
              <td>  <input type='text' value='$getactress' class='form-control'></td>
          </tr>
          <tr>
              <td>Director</td>
              <td> <input type='text' value='$getdirector' class='form-control'></td>
          </tr>
          <tr>
              <td>Year Of Release</td>
              <td>  <input type='text' value='$getyor' class='form-control'></td>
          </tr>
          <tr>
        <td></td>
       <td><button name='delbtn' class='btn btn-danger'>DELETE</button></td>
    </tr></table> </form>";
       }
     }
     else
     {
         echo"No book has found";
     }
}

if(isset($_POST['delbtn']))
{
    $newid=$_POST['id'];
    $connection=new mysqli("localhost","root","","movienow");
   $sql="DELETE FROM `movies` WHERE `id`=$newid"; 

   $result=$connection->query($sql);
   if($result===true)
   {
       echo"Deleted Successfully";
   }
   else
   {
    echo"Something wrong";
   }
   
}
?>