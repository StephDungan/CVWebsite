<?php
/**
 * Created by PhpStorm.
 * User: Steph
 * Date: 10/08/2016
 * Time: 18:22
 */

require_once __DIR__ . '/header.inc.php';

?>

<div id = "column_container">
    <section>
        <div class = "flex_left">
            <ul>
                <li><a href = "/../CVWebsite/templates/lecturerHome.php" class = "current">Lecturer</a></li>
                <ul>
                    <div class = "sub_list">
                        <li><a href = "/../CVWebsite/templates/lecturerEdit.php">Edit</a></li>
                    </div>
                </ul>
                <li><a href = "/../CVWebsite/templates/studentHome.php">Student</a></li>
                <li><a href = "/../CVWebsite/templates/employerHome.php">Employer</a></li>
            </ul>
        </div>

        <div class= "flex1">

            <h3> Welcome Back</h3>
            <p>Please find a list of students below </p>
            <p id="students"></p>

            <script src="/../CVWebsite/js/students.js"></script>

            

        </div>

    </section>
</div>

