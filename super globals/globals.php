<?php
echo '<pre>';
$xyz=20;
$abc=30;
print_r($GLOBALS);
session_start();
print_r($_SESSION['name']);
echo '<br>';
print_r($_COOKIE);