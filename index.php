<?php
// Retrieve basic container/pod environment details
$podName = gethostname();
$serverIP = $_SERVER['SERVER_ADDR'] ?? 'Unavailable';
$phpVersion = phpversion();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to OpenShift</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
            background-color: #f4f6f8;
            color: #151515;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .card {
            background: #ffffff;
            padding: 2.5rem;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            border-top: 6px solid #ee0000;
            max-width: 480px;
            width: 90%;
            text-align: center;
        }
        h1 {
            margin-top: 0;
            color: #ee0000;
        }
        .info {
            background-color: #f0f0f0;
            padding: 1rem;
            border-radius: 4px;
            margin-top: 1.5rem;
            text-align: left;
            font-size: 0.95rem;
            line-height: 1.6;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>Welcome to OpenShift</h1>
        <p>Your PHP application is successfully running on Red Hat OpenShift.</p>
        
        <div class="info">
            <strong>Pod / Hostname:</strong> <?php echo htmlspecialchars($podName, ENT_QUOTES, 'UTF-8'); ?><br>
            <strong>Container IP:</strong> <?php echo htmlspecialchars($serverIP, ENT_QUOTES, 'UTF-8'); ?><br>
            <strong>PHP Version:</strong> <?php echo htmlspecialchars($phpVersion, ENT_QUOTES, 'UTF-8'); ?>
        </div>
    </div>
</body>
</html>
