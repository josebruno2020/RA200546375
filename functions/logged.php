<?php

function logged() {
    if(!isset($_SESSION['logged']) && empty($_SESSION['logged'])) {
        $_GET['p'] = 'login';
        header("Location: ?p=login");
    }
}