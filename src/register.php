<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // check missing value in form
    if (!isset($_POST['username'], $_POST['email'], $_POST['password'])) {
        exit('Missing form fields.');
    }
    // Get data from POST and sanitize
    $username = trim($_POST["username"]);
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

    // Connect to database
    try {
        $hostDB = "127.0.0.1";        // or "127.0.0.1"
        $usernameDB = "root";         // your MySQL username
        $passwordDB = "########";             // your MySQL password (set in MySQL Workbench)
        $database = "diagnoLabDB";       // the database name you created in Workbench

        // Create connection
        $conn = new PDO("mysql:host=$hostDB;port=3306; dbname=$database", $usernameDB, $passwordDB);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        // Inject data to database using prepared statements
        $sql = $conn->prepare("INSERT INTO users(user_name, user_email, user_password) VALUES(:user_name,:user_email,:user_password )");
        $sql->bindParam(":user_name", $username);
        $sql->bindParam(":user_email", $email);
        $sql->bindParam(":user_password", $password);
        $sql->execute();

        header("Location: ../login.html?registered=success");
        exit;

        echo "New Record Successfully added";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    echo "Invalid request method.";
}
