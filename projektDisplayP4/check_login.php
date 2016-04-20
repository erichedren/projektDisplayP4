<?php
    if(!isset($_SESSION['username']))
    {
        if(!isset($_SESSION['logFlag']))
        {
            include projektDisplay_VIEWS.'login_form.php';
        }
        else
        {
            include projektDisplay_VIEWS.'login_form.php';
            echo 'wrong username or password please try again';
        }
    }
    else
    {
        echo '<div class="col-12">';
        include projektDisplay_FRAGMENTS.'header.php';
		echo '</div>';
		echo '<div class="col-12">';
        include 'main.php';
		echo '</div>';
		echo '<div class="col-12">';
        include projektDisplay_FRAGMENTS.'footer.php';
		echo '</div>';
    }