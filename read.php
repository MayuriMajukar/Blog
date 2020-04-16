<?php include 'header.php'; ?>

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
<?php include 'navbar.php'; ?>



<?php include 'footer.php'; ?>