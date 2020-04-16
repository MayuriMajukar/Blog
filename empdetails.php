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
<?php include("navbar1.php");?>

<?php
   $sql="SELECT * FROM user"; 
     $res=mysqli_query($db,$sql);
    ?>
    <table class="table table-bordered" style="width:40%">
  <tr>
  	<th>Name</th>
    <th>userid</th>
    <th>password</th>
  </tr>
  while($row=$res->fetch_assoc()):?>
  <tr>
  	<td><?php echo $row['id'];?> </td>
  	<td><a href="list.php?id=<?php echo $row['id'];?>"><?php echo $row['Name'];?></a></td>
  </tr>
  <?php endwhile;?>
  </table>
</center>
<?php include("footer.php");?>	  
