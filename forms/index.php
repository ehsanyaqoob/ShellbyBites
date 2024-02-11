<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    
    <!-- Add your CSS styles here -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        h1 {
            color: #333;
        }

        p {
            color: #555;
            margin-bottom: 15px;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Home</h1>

        <?php if (isset($user)): ?>
            <p>Hello <?= htmlspecialchars($user["name"]) ?></p>
            <p><a href="logout.php">Log out</a></p>
        <?php else: ?>
            <p><a href="signIn.php">Sign In</a> or <a href="signup.html">Sign Up</a></p>
        <?php endif; ?>
    </div>
</body>
</html>
