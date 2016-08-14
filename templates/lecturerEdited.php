<?php
/**
 * Created by PhpStorm.
 * User: Steph
 * Date: 10/08/2016
 * Time: 18:22
 */

$review = filter_input(INPUT_GET, "review");
$student = filter_input(INPUT_GET, "student");

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

            <h3>Review</h3>

            <p>
                <strong>Student:</strong>
                <br/>
                <?php echo $student; ?>
                <br/>
                <strong>Review:</strong>
                <br/>
                <?php echo $review; ?>
            </p>

        </div>

    </section>
</div>

