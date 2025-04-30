<?php
if(!isset($_SESSION)) { 
    session_start(); 
} 
session_destroy();
header("Location: /LKS-CLOUDBABEL2024-main/index.php");
exit;
?>