<?php
/**
 * Created by PhpStorm.
 * User: Steph
 * Date: 10/08/2016
 * Time: 18:22
 */

require_once __DIR__ . '/../../CVWebsite/templates/header.inc.php';

?>

<div id = "column_container">
    <section>
        <div class = "flex_left">
            <ul>
                <li><a href = "/../CVWebsite/templates/lecturerHome.php">Lecturer</a></li>
                <ul>
                    <div class = "sub_list">
                        <li><a href = "/../CVWebsite/templates/lecturerEdit.php" class = "current">Edit</a></li>
                    </div>
                </ul>
                <li><a href = "/../CVWebsite/templates/studentHome.php">Student</a></li>
                <li><a href = "/../CVWebsite/templates/employerHome.php">Employer</a></li>
            </ul>
        </div>

        <div class= "flex1">

            <p>Please enter reviews for students here</p>

            <form id="reviewBox" method="get" action="/../CVWebsite/templates/lecturerEdited.php" onsubmit="return validateForm()">
                Student Name:
                <br>
                <textarea name="student" cols="30" wrap="hard" id="studentReviewName"> -- student name -- </textarea>
                <br>
                Add Review:
                <br>
                <textarea name="review" rows="4" cols="30" wrap="hard" id="studentReview"> -- enter review -- </textarea>
                <br><br>
                <input type="submit">
            </form>

        </div>

    </section>
</div>

