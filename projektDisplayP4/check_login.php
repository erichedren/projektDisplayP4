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
        include('main.php');
    }