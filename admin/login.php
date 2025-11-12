<?php
// Tiyakin na ang session ay nakasara at ang config ay kasama.
session_start(); 
include '../includes/config.php';

// === START OF BROWSER CACHE PREVENTION HEADERS ===
header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
header("Pragma: no-cache"); // HTTP 1.0.
header("Expires: 0"); // Proxies.
// === END OF BROWSER CACHE PREVENTION HEADERS ===

// Check if admin is already logged in
if (isset($_SESSION['admin_logged_in'])) {
    header('Location: dashboard.php');
    exit;
}

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    
    if (!empty($username) && !empty($password)) {
        // SECURITY: Using prepared statements to prevent SQL Injection
        $stmt = $pdo->prepare("SELECT * FROM admin_users WHERE username = ?");
        $stmt->execute([$username]);
        $admin = $stmt->fetch();
        
        // SECURITY: Using password_verify for secure password checking (assuming password_hash was used for storage)
        if ($admin && password_verify($password, $admin['password'])) {
            // Success: Set session variables
            $_SESSION['admin_logged_in'] = true;
            $_SESSION['admin_username'] = htmlspecialchars($username); // Sanitize username before storing in session
            header('Location: dashboard.php');
            exit;
        } else {
            $error = "Invalid username or password!";
        }
    } else {
        $error = "Please enter both username and password!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        .sr-only {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            border: 0;
        }
    </style>
</head>
<body class="admin-login">
    <div class="login-container">
        <h1><i class="fas fa-user-shield"></i> Admin Login</h1>
        
        <?php if ($error): ?>
            <div class="alert error"><?php echo htmlspecialchars($error); ?></div>
        <?php endif; ?>
        
        <form method="POST" class="login-form">
            
            <div class="form-group input-with-icon">
                <label for="username" class="sr-only">Username:</label> 
                
                <input 
                    type="text" 
                    id="username" 
                    name="username" 
                    placeholder="Username" 
                    required 
                    autocomplete="username"
                    aria-label="Username"
                >
                <i class="fas fa-user"></i>
            </div>
            
            <div class="form-group input-with-icon">
                <label for="password" class="sr-only">Password:</label> 
                
                <input 
                    type="password" 
                    id="password" 
                    name="password" 
                    placeholder="Password" 
                    required 
                    autocomplete="current-password"
                    aria-label="Password"
                >
                <i class="fas fa-lock"></i>
            </div>
            
            <button type="submit" class="btn btn-primary btn-full">
    <i class="fas fa-sign-in-alt"></i> Log In
</button>
        </form>
        
        <div class="back-link">
            <a href="../index.php"><i class="fas fa-arrow-left"></i> Back to Home Page</a>
        </div>
    </div>
</body>
</html>