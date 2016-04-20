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
            echo 'wrong username or password';
        }
    }
    else
    {
        echo '<div class="col-8">';
        include include projektDisplay_VIEWS.'header.php';
		echo '</div>';
		echo '<div class="col-8">';
        include include projektDisplay_VIEWS.'main.php';
		echo '</div>';
		echo '<div class="col-8">';
        include include projektDisplay_VIEWS.'footer.php';
		echo '</div>';
    }