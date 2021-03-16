<?php
require_once "./app/controllers/StatusController.php";
$status = new StatusController();
?>
<!DOCTYPE html>
<html lang="sk">
<head>
  <meta charset="UTF-8">
  <meta name="title" content="Status | SamoSadlaker's Portfolio">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="My name is SamoSadlaker, I am a web developer. This is my portfolio where you can find information about me and my projects.">
  <meta name="keywords" content="Portfolio, Web Development, Frontend, Backend, PHP, HTML, CSS, Java, Spigot, Developer, SamoSadlaker">
  <meta name="author" content="SamoSadlaker">
  <meta name="robots" content="noindex">

  <!-- Open Graph Meta Tags -->
  <meta property="og:title" content="SamoSadlaker's Portfolio" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://www.samosadlaker.eu/" />
  <meta property="og:image" content="https://samosadlaker.eu/assets/img/logo.svg" />
  <meta property="og:description" content="My name is SamoSadlaker, I am a web developer. This is my portfolio where you can find information about me and my projects." />
  <meta property="og:site_name" content="Portfolio, SamoSadlaker" />

  <!-- Twitter Meta Tags -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="https://samosadlaker.eu/">
  <meta property="twitter:title" content="SamoSadlaker's Portfolio">
  <meta property="twitter:description" content="My name is SamoSadlaker, I am a web developer. This is my portfolio where you can find information about me and my projects.">
  <meta property="twitter:image" content="https://samosadlaker.eu/assets/img/logo.svg">

  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
  <link rel="manifest" href="assets/img/favicons/site.webmanifest">
  <link rel="mask-icon" href="assets/img/favicons/safari-pinned-tab.svg" color="#008bf8">
  <link rel="shortcut icon" href="assets/img/favicons/favicon.ico">
  <meta name="msapplication-TileColor" content="#151515">
  <meta name="msapplication-config" content="assets/img/favicons/browserconfig.xml">
  <meta name="theme-color" content="#151515">

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
        <h5>Database</h5>
        <?= $status->getDatabase("localhost", "mmp", "root", "") ? '<span class="operative"><i class="bx bxs-check-circle"></i> Operative</span>' : '<span class="inoperative"><i class="bx bxs-error" ></i> Inoperative</span>' ?>
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