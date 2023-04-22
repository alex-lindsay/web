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
    <div class="about">
      <img class="portrait" src="assets/img/Headshot 2023.jpeg" alt="Portrait of Alex Lindsay" title="Portrait of Alex Lindsay" />
      <h2 class="header-about">About Me</h2>
      <div class="about">
        <p>I'm a software engineering chameleon, constantly evolving and adapting to new challenges and environments. Just like this site, I'm a work in progress, always striving to improve and grow.</p>
        <p>I've been in the software engineering game since before the world feared the Millennium Bug, and I've had the privilege of working in a variety of roles - from individual contributor to manager to business owner - across a range of industries, including software business systems, food manufacturing, entertainment, and health & beauty.</p>
        <p>At every turn, I've used my expertise to engineer software that makes work easier, facilitates building new things, and helps businesses grow. I'm passionate about finding innovative solutions to complex problems and making life more enjoyable for everyone involved. Let's work together to build something great!</p>
      </div>
    </div>
    <h2 class="header-skills">Skills</h2>
    <ul class="skills">
      <li>Team Management<br />(onsite and remote)</li>
      <li>Coaching/Mentoring</li>
      <li>Career Development</li>
      <li>Customer Engagement</li>
      <li>Conflict Resolution</li>
      <li>Budget Management</li>
      <li>Roadmap Management</li>
      <li>Agile/Scrum/Kanban</li>
      <li>JavaScript, Python, React,<br />PHP, Node.js, Ruby, Java</li>
      <li>MySQL, Postgres, MongoDB, Redis</li>
      <li>Content Management Systems</li>
      <li>Publishing Systems</li>
      <li>Data Management Systems</li>
      <li>E-Commerce</li>
      <li>Docker</li>
      <li>Jenkins</li>
      <li>AWS Service Management</li>
      <li>AWS Cost Management</li>
      <li>Full-stack Engineering</li>
      <li>Front-end Engineering</li>
      <li>Back-end Engineering</li>
      <li>API Service Engineering</li>
      <li>REST/GraphQL Services</li>
      <li>System Integration</li>
      <li>Process Automation</li>
    </ul>
    <h2 class="header-experience">Experience</h2>
    <h3 class="experience">
      <span class="company">Drizly</span>
      <span class="location">Boston, MA (Remote)</span>
      <span class="dates">Apr 2022 – Present</span>
      <span class="role">Engineering Manager — Retailer Store Availability</span>
    </h3>
    <h3 class="experience">
      <span class="company">ManiMe</span>
      <span class="location">Santa Monica, CA (Hybrid)</span>
      <span class="dates">Jul 2020 – Apr 2022</span>
      <span class="role">Director of Technology</span>
    </h3>
    <h3 class="experience">
      <span class="company">Two Nil</span>
      <span class="location">Remote</span>
      <span class="dates">May 2020 – Aug 2020</span>
      <span class="role">Technology Management Consultant</span>
    </h3>
    <h3 class="experience">
      <span class="company">Zwift</span>
      <span class="location">Long Beach, CA (Hybrid)</span>
      <span class="dates">Sep 2018 – Mar 2020</span>
      <span class="role">Software Engineering Manager — E-Commerce</span>
    </h3>
    <h3 class="experience">
      <span class="company">NBCUniversal</span>
      <span class="location">Universal City, CA (Hybrid)</span>
      <span class="dates">2014–2018</span>
      <span class="role">Software Engineering Manager — API Services</span>
    </h3>
    <h3 class="experience">
      <span class="company">NBCUniversal</span>
      <span class="location">Universal City, CA (Hybrid)</span>
      <span class="dates">2005–2014</span>
      <span class="role">Senior Software Engineer</span>
    </h3>
    <h3 class="experience">
      <span class="company">Berlin Technologies</span>
      <span class="location">Los Angeles, CA</span>
      <span class="dates">1999–2018</span>
      <span class="role">Co-owner, VP, Engineering</span>
    </h3>

    <h2 class="header-interests">Interests</h2>
    <ul class="interests">
      <li><a href="interests.php#linguistics">Linguistics and Languages</a></li>
      <li>Digital Art</li>
      <li>Photography</li>
      <li>Architecture</li>
      <li>Typography</li>
      <li>Geography</li>
      <li>Urban Planning</li>
      <li>Mathematics</li>
      <li>Puzzles</li>
      <li>Reading</li>
    </ul>
  </main>
  <?php include(DOCROOT . '/footer.inc.php'); ?>
