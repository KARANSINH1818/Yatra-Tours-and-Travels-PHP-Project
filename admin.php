<?php include "admin-home.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        .header {
            background-color: #4CAF50;
            color: white;
            padding: 15px;
            text-align: center;
        }
        .sidebar {
            margin: 0;
            padding: 0;
            width: 200px;
            background-color: #333;
            position: fixed;
            height: 100%;
            overflow: auto;
        }
        .sidebar a {
            display: block;
            color: white;
            padding: 16px;
            text-decoration: none;
        }
        .sidebar a:hover {
            background-color: #575757;
        }
        .main-content {
            margin-left: 220px;
            padding: 20px;
        }
        .card {
            background-color: white;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>

<div class="header">
    <h1>Admin Dashboard</h1>
</div>

<div class="sidebar">
    <a href="#dashboard">Dashboard</a>
    <a href="#users">Manage Users</a>
    <a href="#settings">Settings</a>
    <a href="#logout">Logout</a>
</div>

<div class="main-content">
    <div class="card">
        <h2>Dashboard</h2>
        <p>Welcome, Admin!</p>
    </div>
    <div class="card">
        <h2>Manage Users</h2>
        <p>List of users and management options will go here.</p>
    </div>
    <div class="card">
        <h2>Settings</h2>
        <p>Settings options will go here.</p>
    </div>
</div>

</body>
</html>
