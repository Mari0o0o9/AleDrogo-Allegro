<?php
session_start();
$conn = new mysqli("localhost", "root", "", "aledrogo");
if ($conn -> connect_error) {
    die("Connection failed: " . $conn -> connect_error);
}

function Regiaster() {
    global $conn;

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $name = $_POST["name"];
        $secondName = $_POST["secondName"];
        $email = $_POST["email"];
        $phoneNumber = $_POST["phoneNumber"];
        $password1 = $_POST["password1"];
        $password2 = $_POST["password2"];

        if (!empty($name) && !empty($secondName) && !empty($email) && !empty($phoneNumber) && !empty($password1) && !empty($password2)) {
            $sqlEmial = "SELECT email
                        FROM user
                        WHERE email = '$email'";
            $sqlEmialQuery = $conn -> query($sqlEmial);

            if ($sqlEmialQuery -> num_rows > 0) {
                echo "Taki email juz istnieje";
            } else {
                if ($password1 === $password2) {
                    $hash_password = password_hash($password1, PASSWORD_DEFAULT);
                    
                    $sqlUser = "INSERT INTO user (name, secondName, email, phoneNumber, password) 
                                VALUES ('$name', '$secondName', '$email', '$phoneNumber', '$hash_password')";
                    if ($conn -> query($sqlUser) === TRUE) {
                        header("Refresh: 3; url=index.php");
                        echo "rejsetracja zakończona";

                        $_SESSION['name'] = $name;
                        $_SESSION['secondName'] = $secondName;
                        $_SESSION['email'] = $email;
                        $_SESSION['phoneNumber'] = $phoneNumber;
                    }
                } else {
                    echo "Hasła nie są takie same";
                }
            }  
        } else {
            echo "Wszystkie dane są wymagane";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <form action="#" method="post">
            <div>
                <label for="name">Name</label>
                <input type="text" name="name" id="" require>
            </div>
            <div>
                 <label for="secondName">Second name</label>
                <input type="text" name="secondName" id="" require>
            </div>
            <div>
                <label for="email">email</label>
                <input type="email" name="email" id="" require>
            </div>
            <div>
                <label for="phoneNumber">phone number</label>
                <input type="number" name="phoneNumber" id="" require>
            </div>
            <div>
                <label for="password1">password</label>
                <input type="password" name="password1" id="" require>
            </div>
            <div>
                <label for="password2">repeat password</label>
                <input type="password" name="password2" id="" require>
            </div>
            <input type="submit" value="Sing in">
            <div>
                <?= Regiaster() ?>
            </div>
        </form>
    </main>
</body>
</html>