<?php
define('DOCROOT', $_SERVER['DOCUMENT_ROOT'] != '/Library/WebServer/Documents' ? $_SERVER['DOCUMENT_ROOT'] : '/Volumes/Stuff/Sites/alex-lindsay.com');
define('WEBROOT', $_SERVER['DOCUMENT_ROOT'] != '/Library/WebServer/Documents' ? '' : '/Stuff/Sites/alex-lindsay.com');
$title = "Alex Lindsay - Resume";
$filename = basename(__FILE__);
$pageclass = 'resume';
?>
<?php include(DOCROOT . '/header.inc.php'); ?>

<body class="resume">
  <?php include(DOCROOT . '/topmenu.inc.php'); ?>
  <main>
    <h1>Alex Lindsay — Resume <a href="/assets/file/Resume 2023 — Mgr_Dir.pdf" target="_blank"><i class="fa-solid fa-file-pdf" style="color: #007;"></i></a></h1>
  </main>
<?php include(DOCROOT . '/footer.inc.php'); ?>
