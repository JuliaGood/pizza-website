<nav class="navbar navbar-default">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#dropdown-thumbnail-preview">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="/index.php"><img src="../images/pizza-logo.png" alt="abc"><span class="logo-txt">PIZZA</span></a>
  </div>
  <div class="collapse navbar-collapse" id="dropdown-thumbnail-preview">
    <ul class="nav navbar-nav">
      <li><a href="/index.php" class="hvr-underline-from-center">Home</a></li>
      <li><a href="/about.php" class="hvr-underline-from-center">About</a></li>

      <?php if (empty($_SESSION['login']) or empty($_SESSION['id'])) { ?>
        <li><a href="/login.php" class="hvr-underline-from-center">Login</a></li>
        <li><a href="/register.php" class="hvr-underline-from-center">Register</a></li>
      <?php } else { ?>
        <li><a href="/logout.php" class="hvr-underline-from-center">Logout</a></li>
      <?php } ?>
    </ul>
  </div>
</nav>
