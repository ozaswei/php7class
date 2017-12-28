<?php
//to work with session the session must be started first
//session value can be deleted by using session_destroy()
session_start();
$_SESSION['name'] = 'bzen';
$_SESSION['age'] = 22;