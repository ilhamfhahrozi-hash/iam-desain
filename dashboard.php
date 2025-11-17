<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: admin/login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - IAM DESAIN</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background: #f5f5f5;
        }
        
        .dashboard {
            display: flex;
            min-height: 100vh;
        }
        
        .sidebar {
            width: 250px;
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            color: white;
            padding: 20px;
        }
        
        .sidebar h2 {
            margin-bottom: 30px;
            text-align: center;
        }
        
        .sidebar ul {
            list-style: none;
        }
        
        .sidebar ul li {
            margin-bottom: 10px;
        }
        
        .sidebar ul li a {
            color: white;
            text-decoration: none;
            padding: 10px;
            display: block;
            border-radius: 5px;
        }
        
        .sidebar ul li a:hover {
            background: rgba(255, 255, 255, 0.1);
        }
        
        .main-content {
            flex: 1;
            padding: 30px;
        }
        
        .header {
            background: white;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 30px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }
        
        .stat-card {
            background: white;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        
        .stat-card h3 {
            font-size: 2rem;
            color: #6a11cb;
            margin-bottom: 10px;
        }
        
        .btn-logout {
            background: #ff6b6b;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            float: right;
        }
    </style>
</head>
<body>
    <div class="dashboard">
        <div class="sidebar">
            <h2>IAM DESAIN</h2>
            <ul>
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Projects</a></li>
                <li><a href="#">Clients</a></li>
                <li><a href="#">Messages</a></li>
                <li><a href="#">Settings</a></li>
            </ul>
        </div>
        
        <div class="main-content">
            <div class="header">
                <h1>Dashboard Admin</h1>
                <form method="POST" action="logout.php" style="display: inline;">
                    <button type="submit" class="btn-logout">Logout</button>
                </form>
            </div>
            
            <div class="stats-grid">
                <div class="stat-card">
                    <h3>12</h3>
                    <p>Active Projects</p>
                </div>
                <div class="stat-card">
                    <h3>8</h3>
                    <p>Completed</p>
                </div>
                <div class="stat-card">
                    <h3>5</h3>
                    <p>Pending</p>
                </div>
                <div class="stat-card">
                    <h3>25</h3>
                    <p>Total Clients</p>
                </div>
            </div>
            
            <div style="background: white; padding: 20px; border-radius: 10px;">
                <h2>Recent Projects</h2>
                <p>Dashboard content here...</p>
            </div>
        </div>
    </div>
</body>
</html>