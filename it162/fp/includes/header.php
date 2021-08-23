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
<link rel="stylesheet" href="css/tables.css" />
</head>

<body>
  <header>
<div class="grid-container-nav">
  <div class="grid-item-1">
      <a href="template.php"><img src="https://www.ebrink.online/it162/fp/images/cafe.jpg" class="logo"></a>
      <a href="template.php"><img src="https://www.ebrink.online/it162/fp/images/che-pup.jpg" class="mobile-logo"></a>
  </div>

  <div class="grid-item-2"><nav><ul class="topnav" id="myTopnav">
  <?=makeLinks($nav1)?>

    <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>  
    </ul>
  </nav>
</div>
</div>
<!-- <h2 class="pageID"><?=$PageID?></h2> -->
</header>



<div class="wrapper">
<div class="mobile-header"><h1>CAFE CHE CHE </h1></div><h2 class="pageID"><?=$PageID?></h2>
<!-- END HEADER  -->