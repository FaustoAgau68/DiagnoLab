<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // check missing value in form
    if (!isset($_POST['email'], $_POST['password'])) {
        exit('Missing form fields.');
    }
    // Get data from POST
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

    // Connect to database
    try {
        $hostDB = "127.0.0.1";        // or "127.0.0.1"
        $usernameDB = "root";         // your MySQL username
        $passwordDB = "##########";             // your MySQL password (set in MySQL Workbench)
        $database = "diagnoLabDB";       // the database name you created in Workbench

        // Create connection
        $conn = new PDO("mysql:host=$hostDB;port=3306; dbname=$database", $usernameDB, $passwordDB);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        // Inject data to database using prepared statements
        // Cek data user di database
        $sql = "SELECT * FROM users WHERE user_email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);


        if ($user && $password == $user['user_password']) {
            header("Location: ../login.html?login=success");
            exit;
        } else {
            header("Location: ../login.html?error=invalid");
            exit;
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    echo "Invalid request method.";
}
