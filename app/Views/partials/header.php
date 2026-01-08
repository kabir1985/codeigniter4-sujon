<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="fixit">
    <meta name="keywords" content="fixit">
    <meta name="author" content="fixit">

    <title>Fixit - Provider App</title>

    <!-- PWA / Manifest -->
    <link rel="manifest" href="<?= base_url('manifest.json') ?>">
    <link rel="icon" href="<?= base_url('assets/images/logo/favicon.png') ?>" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?= base_url('assets/images/logo/favicon.png') ?>">

    <meta name="theme-color" content="#00162E">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="fixit">
    <meta name="msapplication-TileImage" content="<?= base_url('assets/images/logo/favicon.png') ?>">
    <meta name="msapplication-TileColor" content="#FFFFFF">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,100..1000;1,100..1000&display=swap" rel="stylesheet">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Iconsax CSS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/vendors/iconsax.css') ?>">

    <!-- Local Bootstrap CSS (if you need overrides) -->
    <link rel="stylesheet" id="rtl-link" type="text/css" href="<?= base_url('assets/css/vendors/bootstrap.css') ?>">

    <!-- Theme CSS -->
    <link rel="stylesheet" id="change-link" type="text/css" href="<?= base_url('assets/css/style.css') ?>">

    <!-- JS Bundle at bottom OR defer to avoid blocking -->
    <script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>" defer></script>

</head>
