<?php
/*
 * calls the appropriate functions for the options selected in the nav bar
 * */
if (empty($indexLinkStyle)){
    $indexLinkStyle = '';
}

if (empty($loginLinkStyle)){
    $loginLinkStyle = '';
}

?>

<!-- nav list used to provide link options to other pages -->
<nav>
    <ul>
        <li>
            <a href="/../CVWebsite/templates/index.php" class="<?= $indexLinkStyle ?>">Home</a>
        </li>
        <li>
            <a href="/../CVWebsite/templates/lecturerHome.php" class="<?= $lecturerHomeLinkStyle ?>">Lecturer</a>
        </li>
        <li>
            <a href="/../CVWebsite/templates/studentHome.php" class="<?= $studentHomeLinkStyle ?>">Student</a>
        </li>
        <li>
            <a href="/../CVWebsite/templates/employerHome.php" class="<?= $employerHomeLinkStyle ?>">Employer</a>
        </li>
        <li>
            <a href="/../CVWebsite/templates/login.php" class="<?= $loginLinkStyle ?>">Login</a>
        </li>
    </ul>
</nav>
