<?php
include '../includes/config.php';

// Check if admin is logged in
if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: login.php');
    exit;
}

// Logout functionality
if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: login.php');
    exit;
}

// Fetch all contact messages
$stmt = $pdo->query("SELECT * FROM contact_messages ORDER BY date_sent DESC");
$messages = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body class="admin-dashboard">
    <header class="admin-header">
        <div class="container">
            <h1>Admin Dashboard</h1>
            <div class="admin-actions">
                <span>Welcome, <?php echo $_SESSION['admin_username']; ?></span>
                <a href="?logout=true" class="btn btn-logout">Logout</a>
            </div>
        </div>
    </header>

    <main class="container">
        <section class="messages-section">
            <h2>Contact Messages</h2>
            
            <?php if (empty($messages)): ?>
                <p>No messages found.</p>
            <?php else: ?>
                <div class="messages-table">
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Message</th>
                                <th>Date Sent</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($messages as $message): ?>
                                <tr>
                                    <td><?php echo $message['id']; ?></td>
                                    <td><?php echo htmlspecialchars($message['name']); ?></td>
                                    <td><?php echo htmlspecialchars($message['email']); ?></td>
                                    <td><?php echo htmlspecialchars($message['message']); ?></td>
                                    <td><?php echo date('M j, Y g:i A', strtotime($message['date_sent'])); ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            <?php endif; ?>
        </section>
    </main>
</body>
</html>