<?php
    global $companyName;
    global $yourEmail;
    $companyName = "Franklin's Fine Dining";
    $yourEmail = "tvink11.sabotazh@gmail.com";
    include 'includes/arrays.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo TITLE; ?></title>
    <link href="style.css" rel="stylesheet">
</head>
<body id="final-example">
<div class="wrapper">
    <div id="banner">
        <a href="/" title="Return to Home">
            <img src="img/banner.png" alt="Franklin's Fine Dining">
        </a>
    </div>
    <div id="nav">
        <?php include 'includes/nav.php'; ?>
    </div>
    <div class="content">
