<?php

session_start();
error_reporting(0);
session_destroy();

echo "You've been logged out. <a href='index.php'>Click here</a> to return.";

?>