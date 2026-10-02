<?php
// includes/header.php
// Every page sets $pageTitle and $currentPage BEFORE including this file.
$pageTitle   = $pageTitle   ?? 'Welcome';
$currentPage = $currentPage ?? '';

// key => [file, text shown in the menu]
$links = [
    'index'      => ['index.php',      'Home'],
    'about'      => ['about.php',      'Our School'],
    'academics'  => ['academic.php',   'Academics'],
    'activities' => ['activities.php', 'Activities'],
    'news'       => ['news.php',       'Updates'],
    'contact'    => ['contact.php',    'Contact'],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="GS KIGEME -A- — official school website with academics, activities, updates and school life.">
    <title><?= htmlspecialchars($pageTitle) ?> | GS KIGEME -A-</title>
    <link rel="icon" href="images/favicon.png">
    <link rel="stylesheet" href="in.css">
</head>
<body>

<header class="navbar">
    <div class="logo">
        <div class="logo-circle">G</div>
        <div>
            <h2>GS KIGEME -A-</h2>
            <span>all about our school</span>
        </div>
    </div>

    <nav id="main-nav">
        <?php foreach ($links as $key => [$file, $label]): ?>
            <a href="<?= $file ?>"<?= $key === $currentPage ? ' class="active"' : '' ?>><?= $label ?></a>
        <?php endforeach; ?>
    </nav>

    <button class="menu-btn" onclick="toggleMenu()" aria-label="Toggle navigation menu" aria-expanded="false">☰</button>
</header>
