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
      <a href="https://en.wikipedia.org/wiki/Schwa" title="Link to Schwa page on Wikipedia"><p style="float: left; font-weight: bold; font-size: 8rem; margin: 0 1rem 1rem 0">&#601;</p></a>
      <p>I was fortunate to grow up in a household with two writers as parents. I learned at a young age that how we use words is an art, and can be powerful. However, as a kid, when asked "What do I want to be when I grow up", my answer was "a mathematician". Believe it or not.</p>
      <p>This love for math and appreciation for language drew me to grammar. I confess to having loved diagramming sentences.</p>
      <p>Over the years, I've studied a number of languages, some briefly, some more consistently. I've taken courses in Linguistics, even considered pursuing a Master's in it. </p>
      <p>To this day, I routinely spend no small part of my free time reading on matters of language and follow more language podcasts than any other topic at this time.</p>
    </article>
    <h2 id="digital-art">Digital Art</h2>
    <article class="interest">
      <a href="assets/img/art/flow 1.jpg" title="Link to larger copy of 'Flow 1' by Alex Lindsay"><img style="float: left; height: 16rem; margin: 1rem 1rem 1rem 0" src="assets/img/art/flow 1.jpg" title="Flow 1 by Alex Lindsay"/></a>
      <p>A number of years ago, when I first transitioned from being a hands-on manager to being a hands-off one, focusing on team development and project success, I found myself itching to do some coding.</p>
      <p>I would work on coding puzzles, and some personal projects, but I was feeling a different sort of challenge facing me as well.</p>
      <p>As I mention elsewhere, I come from parents who were writers. But, my father was also a painter. My aunt, a painter and sculptor as well. My grandfather, a talented calligrapher. Throughout my family there were (and are) a variety of talented artists. I felt challenged to create.</p>
      <p>I ran across <a href="https://processing.org">processing.org</a> and quickly found myself engaged in algorithmic art.</p>
    </article>
    <h2 id="photography">Photography</h2>
    <article class="interest">
      <a href="assets/img/art/BarcelonaPavilionWithDave-signed.jpeg" title="Link to larger copy of 'Barcelona Pavilion with Dave' by Alex Lindsay"><img style="float: left; height: 18rem; margin: 1rem 1rem 1rem 0" src="assets/img/art/BarcelonaPavilionWithDave-signed.jpeg" title="Barcelona Pavilion with Dave by Alex Lindsay"/></a>
      <p>I have had an interest and engagement with photography throughout my life. Starting with my first film SLR camera, which I still have, through the arrival of digital SLRs, pocket digital cameras, through to the marvel that is the collection of cameras we have available to us on our contemporary phones.</p>
      <p>I think there were two factors that came into play for me here: differentiating my creativity from others in my family, and an attraction to the intersection of art and technology.</p>
      <p>Early on, I took photos of cars and landmarks, and some people here and there, but I found myself drawn to shooting architecture.</p>
      <p>For me there is an intersection that lives here among many of my interests. I love to find geometry in my subjects, the buildings, the cities, the world in which we live. I aim to find contrast between the man-made and the natural, creating a harmony between positive space and negative space.</p>
      <p>I also love to find pattern and structure in the world around us, often located in the grooves of tiles, or the reflections light from windows on a facing building.</p>
    </article>
    <h2 id="architecture">Architecture</h2>
    <h2 id="typography">Typography</h2>
    <h2 id="geography">Geography</h2>
    <h2 id="urban-planning">Urban Planning</h2>
    <h2 id="mathematics">Mathematics</h2>
    <h2 id="puzzles">Puzzles</h2>
    <h2 id="reading">Reading</h2>
  </main>
</body>