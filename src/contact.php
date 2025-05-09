<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // check missing value in form
    if (!isset($_POST['name'], $_POST['email'], $_POST['subject'], $_POST['message'])) {
        exit('Missing form fields.');
    }
    // Get data from POST and sanitize
    $contact_name = $_POST["name"];
    $contact_email = $_POST["email"];
    $contact_subject = $_POST["subject"];
    $contact_message = $_POST["message"];

    // Connect to database
    try {
        $hostDB = "127.0.0.1";        // or "127.0.0.1"
        $usernameDB = "root";         // your MySQL username
        $passwordDB = "Posterd68#";             // your MySQL password (set in MySQL Workbench)
        $database = "diagnoLabDB";       // the database name you created in Workbench

        // Create connection
        $conn = new PDO("mysql:host=$hostDB;port=3306; dbname=$database", $usernameDB, $passwordDB);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        // Inject data to database using prepared statements
        $sql = $conn->prepare("INSERT INTO contactus(contact_name,contact_email, contact_subject, contact_message) VALUES(:names,:email,:subjects, :messages)");
        $sql->bindParam(":names", $contact_name);
        $sql->bindParam(":email", $contact_email);
        $sql->bindParam(":subjects",  $contact_subject);
        $sql->bindParam(":messages", $contact_message);

        $sql->execute();

        header("Location: ../home.html");
        exit;

        echo "New Record Successfully added";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    echo "Invalid request method.";
}
