<?php
require_once "./app/controllers/StatusController.php";
$status = new StatusController();
?>
<!DOCTYPE html>
<html lang="sk">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Page Title -->
  <title>Status | SamoSadlaker's Portfolio</title>

  <!-- Import Boxicons  -->
  <link rel="stylesheet" href="assets/css/boxicons.min.css">

  <!-- Import Custom CSS -->
  <link rel="stylesheet" href="assets/css/style.min.css">

</head>
<body>

  <main>
    <header>
      <img src="assets/img/logo.svg" alt="Logo">
      <h1>Status page</h1>
    </header>
    
    <div class="content">
      <div class="line">
        <h5>Website</h5>
        <?= $status->getStatus("samosadlaker.eu", "80") ? '<span class="operative"><i class="bx bxs-check-circle"></i> Operative</span>' : '<span class="inoperative"><i class="bx bxs-error" ></i> Inoperative</span>' ?>
      </div>
      <div class="line">
        <h5>Dashboard</h5>
        <?= $status->getStatus("dashboard.samosadlaker.eu", "80") ? '<span class="operative"><i class="bx bxs-check-circle"></i> Operative</span>' : '<span class="inoperative"><i class="bx bxs-error" ></i> Inoperative</span>' ?>
      </div>
      <div class="line">
        <h5>Webmail</h5>
        <?= $status->getStatus("mail.samosadlaker.eu", "80") ? '<span class="operative"><i class="bx bxs-check-circle"></i> Operative</span>' : '<span class="inoperative"><i class="bx bxs-error" ></i> Inoperative</span>' ?>
      </div>
    </div>

    <footer>
      <a href="portfolio.samo"><i class='bx bxs-home'></i> Back to home.</a>
    </footer>
  </main>
  
</body>
</html>