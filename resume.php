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
    <h2>Experience</h2>
    <article class="experience">
      <h3>
        <span class="company">Drizly</span>
        <span class="location">Boston, MA (Remote)</span>
        <span class="dates">Apr 2022 – Present</span>
        <span class="role">Engineering Manager — Retailer Store Availability</span>
      </h3>
      <ul>
        <li>Supervised roadmapping and execution of security remediations for Stores
          Team to meet pending SOC 2 Type 2 audit</li>
        <li>Participated in Engineering Center of Excellence</li>
        <li>
          <ul>
            <li>Surveyed multiple teams to source and develop opportunities to improve
              developer experience and save engineering time and resources</li>
            <li>Collaborated with engineering managers to develop business cases for
              various projects to present to executive management</li>
          </ul>
        <li>Mentored a direct report toward promotion to a Technical Product Mgr. role</li>
        <li>Created Jira/Slack Automations to Improve Team Operations building
          efficiency in team workflow, and adapting communication to team needs</li>
        <li>Kept team stable through a period of shifting business requirements</li>
        <li>Managed/Developed/Executed team roadmap</li>
        <li>Managed a second fully remote team with 5 reports for 3 months to support
          another manager during their parental leave</li>
      </ul>
    </article>
    <article class="experience">
      <h3>
        <span class="company">ManiMe</span>
        <span class="location">Santa Monica, CA (Hybrid)</span>
        <span class="dates">Jul 2020 – Apr 2022</span>
        <span class="role">Director of Technology</span>
      </h3>
      <ul>
        <li>Migrated content management from Tech to Marketing</li>
        <li>
          <ul>
            <li>Reduced engineering time spent by an average of 15 hours per week</li>
            <li>Evaluated multiple content management systems (CMS) based on
              business/engineering needs</li>
            <li>Implemented Builder in our React site, reducing engineering workload</li>
            <li>Built Shopify-enabled components for use within Builder</li>
          </ul>
        <li>Integrated AirTable as a data management system (DMS) alongside Builder
          for site organization</li>
        <ul>
          <li>Product releases required no effort from engineering</li>
          <li>Product release frequency was doubled</li>
        </ul>
        <li>Designed and implemented a Jenkins pipeline for creating and executing
          dockerized test environments, eliminating developer contention over test
          environments, and reducing time for us to release site features</li>
        <li>Acted as Technical Product Manager for Machine Learning and
          Photogrammetry projects with staff and outside contractors; managed
          deliverables, requirements, and timelines</li>
        <li>Scaled staff and contract resources based on priorities and budget</li>
        <li>Implemented static site rendering and Incremental Static Regeneration
          using Next.js to help with site performance and reduce API calls</li>
        <li>Reduced code in website and admin management website by roughly 25%
          through code refactoring, isolating business logic/rules</li>
      </ul>
    </article>
    <article class="experience">
      <h3>
        <span class="company">Zwift</span>
        <span class="location">Long Beach, CA (Onsite+Remote)</span>
        <span class="dates">Sep 2018 – Mar 2020</span>
        <span class="role">Software Engineering Manager — E-Commerce</span>
      </h3>
      <ul>
        <li>Worked with project management and to plan and execute i18n for the
          zwift.com shop - initially to Canada; subsequently in the UK and EU</li>
        <li>Developed and refined requirements — performed triage and roadmapping
          of deliverable features</li>
        <li>Developed and managed Jira templates for epics, stories, tasks, and bugs</li>
        <li>Staffed and managed two engineering teams</li>
        <ul>
          <li>Onsite and remote; staff and contractors</li>
        </ul>
        <li>Staff lifecycle/hiring/performance reviews</li>
        <li>Managed the development of middleware services for transaction integration</li>
        <li>Assisted with selection of SME business consulting firms</li>
        <li>Refined our recruitment process question banks</li>
      </ul>
    </article>
    <article class="experience">
      <h3>
        <span class="company">NBCUniversal</span>
        <span class="location">Universal City, CA (Onsite+Remote)</span>
        <span class="dates">2014–2018</span>
        <span class="role">Software Engineering Manager — API Services</span>
      </h3>
      <ul>
        <li>Managed three engineering teams (with two manager reports) producing API
          Services for CMS support and Identity Management</li>
        <li>Oversaw the replatforming of Identity services from Python to Java</li>
        <ul>
          <li>Retrained staff to better fit with new tech stack</li>
          <li>Developed an offboarding plan for those who chose not to migrate</li>
          <li>Backfilled positions with new hires and contracted staff augmentation</li>
        </ul>
        <li>Built API Services for Identity Management for NBC properties, allowing
          them to use common services, while maintaining separate brand identity</li>
      </ul>
    </article>
    <article class="experience">
      <h3>
        <span class="company">NBCUniversal</span>
        <span class="location">Universal City, CA (Hybrid)</span>
        <span class="dates">2005–2014</span>
        <span class="role">Senior Software Engineer</span>
      </h3>
      <ul>
        <li>Led engineering efforts for the production of identity management services
          (Python), a registration management platform (PHP/JavaScript), and an API
          execution test environment (not unlike POSTMAN) (PHP/JavaScript)</li>
        <li>Built a recommendation engine (PHP) for the CMS for AccessHollywood.com
          using data scraping of stories, keyword matching, and editorial hinting</li>
        <li>Built a content management system for AccessHollywood.com (PHP/JavaScript)</li>
        <li>Built a publishing system for AccessHollywood.com (PHP/JavaScript)</li>
        <li>Wrote a 100-page technical requirements and functional design document
          for AccessHollywood.com as part of a project to migrate to Vignette</li>
      </ul>
    </article>
    <article class="experience">
      <h3>
        <span class="company">Berlin Technologies</span>
        <span class="location">Los Angeles, CA</span>
        <span class="dates">1999–2018</span>
        <span class="role">Co-owner, VP, Engineering</span>
      </h3>
      <ul>
        <li>Engaged with clients to determine technical requirements, design
          preferences, budgetary constraints, project scoping</li>
        <li>Produced and developed websites and web applications using PHP,
          JavaScript, Drupal, WordPress, hand-coded HTML, CSS, CakePHP, yii</li>
        <li>Deployed sites to online hosting</li>
        <li>Managed physical hosting servers</li>
        <li>Migrated to managed hosting solutions</li>
        <li>General Systems Administration</li>
        <li>Automated business processes using PHP, sed, awk, perl, integrating with
          existing business systems</li>
        <li>Email marketing design and execution</li>
        <li>Created custom reports and forms to aid with business system management
          for multiple clients, interfacing with mortgage underwriting and small hotel
          reservation management systems, Crystal Reports and other software</li>
        <li>Provided general technical support</li>
        <ul>
          <li>Email setup and configuration</li>
          <li>Graphic Design</li>
          <li>Proofreading/copyediting</li>
          <li>Software training and tutoring</li>
        </ul>
      </ul>
    </article>
    <h2>PROJECTS</h2>
    <article class="experience">
      <h3>
        <span class="company">Two Nil</span>
        <span class="location">Remote</span>
        <span class="dates">May 2020 – Aug 2020</span>
        <span class="role">Technology Management Consultant</span>
      </h3>
      <ul>
        <li>Reviewed application systems architecture</li>
        <ul>
          <li>Offered guidance on systems administration concerns such as a roadmap
            toward implementing SSO for their customer portal and internal
            management tools</li>
          <li>Reviewed AWS service utilization</li>
          <li>Recommended AWS resource reductions and optimizations</li>
          <li>Reviewed and recommended AWS cost savings plans</li>
        </ul>
        <li>Developed job description for IT Manager Role</li>
        <li>Conducted interviews for IT Manager</li>
        <li>Presented a short list of preferred candidates to Executive Management</li>
      </ul>
    </article>
  </main>
  <?php include(DOCROOT . '/footer.inc.php'); ?>