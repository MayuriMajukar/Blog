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

<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>
<?php
if(isset($_SESSION['success'])) : ?>

	<div>		
		<h3>			
			<?php
			
			echo $_SESSION['success'];
			unset($_SESSION['success']);
			
			 ?>
		</h3>
	</div>
<?php endif ?>


<div class="container-fluid">
  <div class="row">
    <div class="col-sm-4 	">
  
<img src="images/m.jpg" class="rounded-circle" alt="Cinque Terre">

<?php if(isset($_SESSION['username'])):  ?>
<h3>ID:<?php echo $_SESSION['id']; ?></h3><br>

<h3><?php echo $_SESSION['username']; ?></h3><br>
<h5>email:<?php echo $_SESSION['email']; ?></h5>

<?php endif ?>

    </div>
    <div class="col-sm-7 ">
      <div class="form-group">
  <h2>Type your blog here.....</h2>
  <form action="server.php" method="POST">

<input type="hidden" name="id" value="<?php echo $_SESSION['id']; ?>">
<input type="hidden" name="name" value="aaron">

  	<input type="text" class="form-control" name="title" placeholder="Title" >
  <textarea class="form-control" rows="10" name="description" placeholder="Content"></textarea>
  <button type="submit" class="btn btn-success" name="post_blog" >Success</button>
  </form>

   
</div>






    </div>
  </div>
</div>





	



<?php include 'footer.php'; ?>
