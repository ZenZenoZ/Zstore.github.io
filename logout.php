<?php 
session_start();

session_unset();
session_destroy();

header("Location: txt1.html");