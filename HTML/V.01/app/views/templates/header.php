<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Factorio<?php if (!empty($page['title'])) echo ' - ' . e($page['title']); ?></title>

        <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/app.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="<?php echo BASE_URL; ?>/js/kickstart.js"></script> <!-- KICKSTART -->
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/kickstart.css" media="all" /> <!-- KICKSTART -->
    </head>
    <body style="background-image:url(<?php echo BASE_URL; ?>/images/MetalBg.jpg)">
        <img src="<?php echo BASE_URL; ?>/images/Factorio-logo.png" />
 
            <?php require VIEW_ROOT . '/templates/menu.php'; ?>
        
        <div class="grid">
            <h1><?php if (!empty($page['title'])) e($page['title']); else echo 'HOME'; ?></h1>