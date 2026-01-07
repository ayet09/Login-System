<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: code.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Ayet Login System</title>
<style>
body { font-family: Arial; background: #f4f4f4; }
.box { width: 400px; background: lightgray; padding: 20px; margin: 80px auto; border-radius: 5px; }
h2 { text-align: center;  }
</style>
</head>
<body>

<div class="box">
<h2>Welcome, <?php echo htmlspecialchars($_SESSION["user"]); ?>!</h2>
<p>You are logged in.</p>
<a href="logout.php">Logout</a>
</div>

</body>
</html>
