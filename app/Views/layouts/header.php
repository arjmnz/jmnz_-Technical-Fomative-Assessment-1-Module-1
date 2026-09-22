<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= esc($title) ?> | Simple POS</title>
</head>
<body>
    <header class="site-header">
        <div class="wrapper navigation">
            <a class="brand" href="<?= base_url('/') ?>">Simple POS</a>
            <nav aria-label="Main navigation">
                <a href="<?= base_url('/') ?>">Home</a>
                <a href="<?= base_url('about') ?>">About</a>
                <a href="<?= base_url('customers') ?>">Customers</a>
                <a href="<?= base_url('users') ?>">Users</a>
            </nav>
        </div>
    </header>
    <main class="wrapper">
