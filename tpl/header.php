<?php
	//Стартуємо сесію
	session_start();
	include ("dbconnect.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pizza</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/index.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=El+Messiri&display=swap" rel="stylesheet">
  <script src="js/jquery-2.1.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>

<body>
  <section id="header" class="cd-secondary-nav">
    <div class="container">
      <div class="row">
				<?php include_once('tpl/nav.php'); ?>
      </div>
    </div>
  </section>