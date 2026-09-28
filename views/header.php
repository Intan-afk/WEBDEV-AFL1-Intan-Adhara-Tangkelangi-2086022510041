<?php function e($v): string { return htmlspecialchars((string)$v, ENT_QUOTES, 'UTF-8'); } ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= e($title ?? '') ?></title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
    <nav class="navbar">
        <a href="viewEmployee.php">Employee</a> <span>|</span>
        <a href="viewOffice.php">Office</a> <span>|</span>
        <a href="viewRelation.php">Office-Employees</a>
    </nav>
    <div class="content">
