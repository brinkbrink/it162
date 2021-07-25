<?php include 'portal-config.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?=$title?></title>
<meta name="viewport" content="width=device-width" />
<meta name="robots" content="noindex,nofollow" />
<meta charset="utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<script src="https://kit.fontawesome.com/8a12320bd7.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/nav.css" />
<link rel="stylesheet" href="css/portal.css" />
<link rel="stylesheet" href="css/forms.css" />
</head>

<body>
<!-- START WRAPPER -->

<header>
  <h1><a href="index.php"><i class="logo fa <?=$logo?>"<?=$logo_color?>></i> E Brink's SCC IT162 Portal</a></h1>
  <nav><ul class="topnav" id="myTopnav">
  <?=makeLinks($nav1)?>
  <!--
       <a href="index.php" class="selected">  Home  </a> 
       <a href="big/index.php">  Big  </a> 
       <a href="aia.php">  AIA  </a> 
       <a href="flowchart.php">  Flowchart/Layout  </a> 
       <a href="fp/index.php">  Final Project  </a>
      <a href="contactme.php">  Contact  </a>
      !-->
      <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>  
    </ul>
  </nav>
</header>

<h2 class="pageID"><?=$PageID?></h2>

<div class="wrapper">
<!-- END HEADER  -->