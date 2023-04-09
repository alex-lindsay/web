<?php
	define('DOCROOT', $_SERVER['DOCUMENT_ROOT'] != '/Library/WebServer/Documents' ? $_SERVER['DOCUMENT_ROOT'] : '/Volumes/Stuff/Sites/alex-lindsay.com');
	define('WEBROOT', $_SERVER['DOCUMENT_ROOT'] != '/Library/WebServer/Documents' ? '' : '/Stuff/Sites/alex-lindsay.com');
	$title = "Alex Lindsay - Home Page";
	$filename = basename(__FILE__);
  $pageclass = 'index';
?>
<?php include(DOCROOT . '/header.inc.php'); ?>
<body class="index">
<?php include(DOCROOT . '/topmenu.inc.php'); ?>

  <main>
    <h2>About Me</h2>
    <img class="portrait" src="img/IMG_0936.jpeg" alt="Portrait of Alex Lindsay" title="Portrait of Alex Lindsay" />
    <p>I'm a software engineering chameleon, constantly evolving and adapting to new challenges and environments. Just like this site, I'm a work in progress, always striving to improve and grow.</p>
    <p>I've been in the software engineering game since before the world feared the Millennium Bug, and I've had the privilege of working in a variety of roles - from individual contributor to manager to business owner - across a range of industries, including software business systems, food manufacturing, entertainment, and health & beauty.</p>  
    <p>At every turn, I've used my expertise to engineer software that makes work easier, facilitates building new things, and helps businesses grow. I'm passionate about finding innovative solutions to complex problems and making life more enjoyable for everyone involved. Let's work together to build something great!</p>
    <h2>Skills</h2>
    <p></p>
    <h2>Experience</h2>
    <h2>Interests</h2>
  </main>
  <footer>
    <p>&copy; 2023 Alex Lindsay. All rights reserved.</p>
  </footer>

</body>
</html>