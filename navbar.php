<nav class="navbar navbar-light bg-light justify-content-between">
  <a class="navbar-brand">Bloggers Corner</a>
  <form class="form-inline">
<button class="btn btn-outline-success my-2 my-sm-0" type="submit"><a href="read.php"> Read</a></button>
  	<?php if(isset($_SESSION['username'])):  ?>
<h3><?php echo $_SESSION['username']; ?></h3> &nbsp &nbsp &nbsp

<button class="btn btn-outline-success my-2 my-sm-0" type="submit"><a href="auth.php?logout='1'">logout</a></button>
<?php endif ?>
    
    
  </form>
</nav>