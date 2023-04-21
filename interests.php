<?php
define('DOCROOT', $_SERVER['DOCUMENT_ROOT'] != '/Library/WebServer/Documents' ? $_SERVER['DOCUMENT_ROOT'] : '/Volumes/Stuff/Sites/alex-lindsay.com');
define('WEBROOT', $_SERVER['DOCUMENT_ROOT'] != '/Library/WebServer/Documents' ? '' : '/Stuff/Sites/alex-lindsay.com');
$title = "Alex Lindsay - Interests";
$filename = basename(__FILE__);
$pageclass = 'interests';
?>
<?php include(DOCROOT . '/header.inc.php'); ?>

<body class="interests">
  <?php include(DOCROOT . '/topmenu.inc.php'); ?>
  <main>
    <h1>Alex Lindsay — Interests</h1>
    <h2 id="linguistics">Linguistics and Languages</h2>
    <article class="interest">
      <p>I was fortunate to grow up in a household with two writers as parents. I learned at a young age that how we use words is an art, and can be powerful. However, as a kid, when asked "What do I want to be when I grow up", my answer was "a mathematician". Believe it or not.</p>
      <p>This love for math and appreciation for language drew me to grammar. I confess to having loved diagramming sentences.</p>
      <p>Over the years, I've studied a number of languages, some briefly, some more consistently. I've taken courses in Linguistics, even considered pursuing a Master's in it. </p>
      <p>To this day, I routinely spend no small part of my free time reading on matters of language and follow more language podcasts than any other topic at this time.</p>
    </article>
    <h2 id="digital-art">Digital Art</h2>
    <h2 id="photography">Photography</h2>
    <h2 id="architecture">Architecture</h2>
    <h2 id="geography">Geography</h2>
    <h2 id="urban-planning">Urban Planning</h2>
    <h2 id="mathematics">Mathematics</h2>
    <h2 id="puzzles">Puzzles</h2>
    <h2 id="reading">Reading</h2>
  </main>
</body>