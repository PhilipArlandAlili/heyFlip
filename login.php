<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <style>
        body {
            background-color: #0e1037fc;
            color: #ededed;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        article {
            height: 97vh;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .container {
            position: absolute;
            height: 500px;
            width: 500px;
            background-color: #0e1037fc;
            border-radius: 40px 20px 40px 10px;
        }

        .bgcont {
            height: 520px;
            width: 500px;
            margin-top: 5px;
            margin-left: 20px;
            background-color: #a37114;
            border-radius: 699px 5px 40px 10px;
        }

        .circles {
            position: fixed;
            z-index: -1;
            height: 650px;
            width: 400px;
            background-color: #ededed;
            border-radius: 70px 133px 42px 211px;
            margin-right: 400px;
            opacity: 80%;
        }

        .tops {
            height: 15%;
            display: flex;
            text-align: center;
            border-bottom: 1px solid #ededed;
            padding-bottom: 10px;
            margin: 0 10% 0 10%;
        }

        .tops h2 {
            font-size: 30px;
            font-weight: 900;
            text-decoration: underline;
        }

        .body {
            height: 84%;
            margin: 5%;
        }

        .logs {
            margin-top: 10px;
            text-align: center;
            font-size: 28px;
            font-weight: 1000;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .logs h1 {
            padding-top: 2%;
            margin: 0%;
        }

        .ems {
            padding: 0 30px;
        }

        .ems h4 {
            margin-bottom: 5px;
            font-size: 24px;
            font-weight: 800;
        }

        .ems input {
            height: 28px;
            width: 90%;
        }

        .pass {
            padding: 2px 30px;
            margin-top: 10px;
        }

        .pass h4 {
            margin-bottom: 5px;
            font-size: 24px;
        }

        .pass input {
            height: 28px;
            width: 90%;
        }

        .buts {
            padding: 0 30px;
            margin-top: 10px;
        }

        .buts input {
            height: 35px;
            width: 96%;
            padding: 2px 30px;
            margin-top: 8px;
            background-color: #2c7bd5;
            border-radius: 10px;
            color: #ededed;
            font-size: 18px;
            font-weight: 800;
        }

        .buts input:hover {
            background-color: green;
            transition: 1s;
        }

        #hey {
            padding-left: 15px;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <?php
    session_start();
    
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "heyflip_db";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $enteredUsername = $_POST["username"];
        $enteredPassword = $_POST["password"];

        $sql = "SELECT * FROM register WHERE username = '$enteredUsername' AND password = '$enteredPassword'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $_SESSION["username"] = $enteredUsername;
            header("Location: home.php");
            exit();
        } else {
            echo "Invalid username or password.";
        }
    }
    $conn->close();
    ?>

    <article>
        <div class="container">
            <div class="tops">
                <h2>heyFlip</h2>
            </div>

            <div class="logs">
                <h1>Welcome!</h1>
            </div>

            <form action="login.php" method="post">
                <div class="body">
                    <div class="ems">
                        <h4>Username:</h4>
                        <input type="text" name="username" id="hey" placeholder="Enter Username">
                    </div>
                    <div class="pass">
                        <h4>Password:</h4>
                        <input type="password" name="password" id="hey" placeholder="Enter Password">
                    </div>

                    <div class="buts">
                        <form action="home.php">
                            <input type="submit" value="Login">
                        </form>
                        <form action="register.php">
                            <input type="submit" value="Register Account">
                        </form>
                    </div>
                </div>
            </form>
        </div>
        <div class="circles"></div>
        <div class="bgcont"></div>
        <div class="bgcont2"></div>
    </article>
</body>

</html>