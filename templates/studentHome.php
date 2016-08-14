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
                <li><a href = "/../CVWebsite/templates/lecturerHome.php">Lecturer</a></li>
                <li><a href = "/../CVWebsite/templates/studentHome.php" class = "current">Student</a></li>
                <ul>
                    <div class = "sub_list">
                        <li><a href = "/../CVWebsite/templates/studentEdit.php">Edit</a></li>
                    </div>
                </ul>
                <li><a href = "/../CVWebsite/templates/employerHome.php">Employer</a></li>
            </ul>
        </div>

        <div class= "flex1">

            <h3> Welcome Back</h3>
            <dl>
                <dt>STUDENT:</dt>
                <dd><span id="studentName"></span></dd>
                <dt>STATUS:</dt>
                <dd id="studentStatus"></dd>
            </dl>

            <script src="/../CVWebsite/js/studentStatus1.js"></script>

        </div>

    </section>
</div>

