<?php
function hashPassword($password) {
    $hashedPassword = md5($password);
    
    return $hashedPassword;
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = htmlspecialchars($_POST["user"]);
    $mail = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $pass = $_POST["passwd"];
    $hashedPassword = hashPassword($pass);
    $dsn = "mysql:host=127.0.0.1;dbname=animebook;charset=utf8mb4";
    $username = "root";
    $password = ""; 

    try {
        $pdo = new PDO($dsn, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO users (uname, passwd, email) VALUES (?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$user, $hashedPassword, $mail]);

        if ($stmt->rowCount() > 0) {
            header("Location: signin.html");
            exit();
        } else {
            header("Location: signup.html");
            exit();
        }
    } catch (PDOException $e) {
        echo "<p style=\"color: red;\">Error: " . $e->getMessage() . "</p>";
    } finally {
        $pdo = null;
    }
}

?>
