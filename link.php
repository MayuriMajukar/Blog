<?php include("header.php");?>
<?php 
session_start();
if(!isset($_SESSION['username'])){

	$_SESSION['msg']= "you must login first ";
	header("location: index.php");

}
if(isset($_GET['logout'])){
	session_destroy();
	unset($_SESSION['username']);
	header("location: index.php");
}
?>
<?php include("navbar.php");?>
      
<center>    
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  margin: 75px;
 
}
th, td {
  padding: 20px;
  text-align: center;
}
th{
	background-color: powderblue;
}

</style>
<?php include 'db.php'; ?>
   <?php
     //$bloger_id=$_GET['id'];
     
     $sql="SELECT * FROM blogs"; 
     $res=mysqli_query($db,$sql);
     //$row= mysqli_fetch_array($res);
     
     ?>  


<table class="table table-bordered" style="width:40%">
  <tr>
  	<th>Postid</th>
    <th>Title</th>
  </tr>
  <?php
  while($row=$res->fetch_assoc()):?>
  <tr>
  	<td><?php echo $row['id'];?> </td>
  	<td><a href="read.php?id=<?php echo $row['id'];?>"><?php echo $row['title'];?></a></td>
  </tr>
  <?php endwhile;?>	
</table>
</center>
<?php include("footer.php");?>