<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>

    <style>
        * {
            margin: 0%;
            padding: 0%;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #0e1037fc;
            color: #ededed;
            height: 100vh;
        }

        #header {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 20px 10%;
            margin-bottom: 25px;
        }

        .logo {
            font-size: 48px;
            font-weight: 900;
            text-decoration: underline;
        }

        #navbar {
            font-size: 24px;
            font-weight: 500;
        }

        a {
            color: #ededed;
            text-decoration: none;
            padding-left: 20px;
        }

        #navbar a:hover {
            color: #3c86e1;
            transition: 1s;
        }

        #home {
            height: 85vh;
            display: flex;
            gap: 20px;
        }

        .container {
            height: 80%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #555;
        }

        .container2 {
            height: 60%;
            width: 50%;
            background-image: url("img/bg.jpg");
            background-position: center;
            background-attachment: fixed;
            background-size: 50%;
            border-radius: 20px;
        }

        .contact-form {
            padding: 20px;
            border-radius: 8px;
            height: 100%;
            width: 50%;
            margin-right: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            margin-top: 10px;
        }

        input,
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "heyflip_db";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $sql = "INSERT INTO contact (name, email, message) VALUES ('$name', '$email', '$message')";

        if ($conn->query($sql) === TRUE) {
            echo "Data inserted successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    $conn->close();
    ?>

    <header id="header">
        <div class="logo">
            <a href="">heyFlip</a>
        </div>

        <nav id="navbar">
            <a href="home.php">Home</a>
            <a href="profile.php">Profile</a>
            <a href="gallery.php">Gallery</a>
            <a href="contact.php">Contact Us</a>
            <a href="register.php">Register</a>
            <a href="login.php">Login</a>
        </nav>
    </header>

    <div class="container">
        <div class="container2">
            <form action="contact.php" method="post">
                <div class="contact-form">
                    <h2>Contact Us!</h2>
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>

                    <label for="message">Message:</label>
                    <textarea id="message" name="message" rows="4" required></textarea>

                    <button type="submit">Submit</button>
                </div>
            </form>
            <div class="side">
                <img src="img/bg.png" alt="">
            </div>
        </div>
    </div>
</body>

</html>