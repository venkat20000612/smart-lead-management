<?php

require_once "config.php";

$search = trim($_GET["search"] ?? "");

$status = $_GET["status"] ?? "";
$priority = $_GET["priority"] ?? "";
$source = $_GET["source"] ?? "";

$page = max(1, (int) ($_GET["page"] ?? 1));

$limit = 10;
$offset = ($page - 1)* $limit;

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Lead Management</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="container">
        <h1>Smart Lead Management</h1>

        <form method="GET">
            <input type="search" name="search" placeholder="Search name, email or company" 
            value="<?= htmlspecialchars($search) ?>"
            >

            <select name="status">
                <option value="">All Statuses</option>
                <option value="New">New</option>
                <option value="Contacted">Contacted</option>
                <option value="Qualifed">Qualified</option>
                <option value="Lost">Lost</option>
            </select>

            <button type="submit">Search</button>
            <a href="create.php">Add Lead</a>
        </form>
    </main>
</body>
</html>