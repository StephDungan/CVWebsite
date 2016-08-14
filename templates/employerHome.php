<?php

require_once __DIR__ . '/header.inc.php';

?>

<div id = "column_container">
    <section>
        <div class = "flex_left">
            <ul>
                <li><a href = "/../CVWebsite/templates/lecturerHome.php">Lecturer</a></li>
                <li><a href = "/../CVWebsite/templates/studentHome.php">Student</a></li>
                <li><a href = "/../CVWebsite/templates/employerHome.php" class = "current">Employer</a></li>
            </ul>
        </div>

        <div class= "flex1">

            <h3> Welcome Back</h3>
            <h4>Please find a list of students below </h4>
            <p id="students"></p>

            <script src="/../CVWebsite/js/students.js"></script>

            <p>Download CV</p>
            <a href="/../CVWebsite/CV.docx" download><button >Download</button></a>

        </div>

    </section>
</div>

