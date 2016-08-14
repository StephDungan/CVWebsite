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
        <div class= "flex1">
            <fieldset>
                <legend> LOGIN </legend>
                    <form action="/../CVWebsite/public/index.php?action=processLogin" method="post">
                        <p>USERNAME: <input type="text" name="username"></p>
                        <p>PASSWORD: <input type="password" name="password"></p>
                        <input type="submit" value="LOGIN">
                    </form>
            </fieldset>
        </div>

    </section>
</div>


