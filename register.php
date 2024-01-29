<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

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
            height: 85vh;
        }

        #header {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 20px 10%;
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
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .container {
            background-color: #0e1037fc;
            border: 3px solid #04051766;
            border-radius: 30px 20px 10px 20px;
            height: 80%;
            width: 600px;
            align-items: center;
            position: absolute;
        }

        .contener {
            border: 2px solid #0e1037fc;
            background-color: #d1a11cfc;
            height: 96%;
            width: 600px;
            align-items: center;
            padding-bottom: 400px;
            margin-left: 15px;
            border-radius: 599px 20px 10px 20px;
        }

        .tops {
            height: 14%;
            display: flex;
            text-align: center;
            border-bottom: 1px solid #ededed79;
            border-radius: 40px 90px 100px 40px;
            padding-top: 20px;
            padding-left: 30px;
        }

        .tops form{
            margin-left: 200px;
        }

        .tops h2 {
            font-size: 32px;
            font-weight: 900;
            text-decoration: underline;
        }

        .regs {
            padding-top: 10px;
            padding-bottom: 10px;
            height: 8%;
            text-align: center;
        }

        .regs h1 {
            margin-top: 6px;
            font-size: 36px;
        }

        .cont2 {
            height: 79%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .card1 {
            height: 58%;
            width: 92%;
            display: flex;
            align-items: center;
            margin-top: 15px;
        }

        .card2 {
            background-color: #8085dc25;
            height: 30%;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 120px 20px 120px 20px;
            position: relative;
            top: 20px;
            border-top: 1px solid white;
        }

        .sect1,
        .sect2 {
            height: 100%;
            width: 100%;
            display: flex;
            flex-direction: column;
        }

        .sect3 {
            display: flex;
            align-items: center;
            justify-content: space-around;
            height: 100%;
            width: 100%;
        }

        #sect1,
        #sect2,
        #sect3,
        #sect4,
        #sect5,
        #sect7,
        #sect8 {
            height: 50%;
            width: 100%;
            display: flex;
            flex-direction: column;
        }


        #sect6 {
            display: block;
            align-items: center;
            justify-content: centers;
            position: relative;

        }

        #sect1 h3,
        #sect2 h3,
        #sect3 h3,
        #sect4 h3,
        #sect5 h3,
        #sect7 h3,
        #sect8 h3 {
            font-size: 16px;
            margin-bottom: 10px;

        }

        #sect1 input,
        #sect2 input {
            border: 1px solid #0e1037fc;
            height: 33px;
            width: 90%;
            border-radius: 10px 0 0 10px;
        }

        #sect3 input,
        #sect4 input {
            border: 1px solid #0e1037fc;
            height: 33px;
            width: 90%;
            border-radius: 0 10px 10px 0;
        }

        #sect5 input {
            height: 33px;
            width: 90%;
            border-radius: 10px 0 0 10px;
        }

        #sect7 select {
            height: 33px;
            width: 90%;
            border-radius: 0 10px 10px 0;
        }

        #sect8 {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        #sect8 input {
            height: 30px;
            width: 150px;
            background-color: #2144cefc;
            color: #ededed;
            font-size: 14px;
            font-weight: 600;
            border-radius: 20px;
            margin-top: 15px;
        }

        #sect8 input:hover {
            background-color: #0dd542fc;
            transition: .16s;
        }

        #sect6 label {
            font-size: 15px;
            font-weight: 600;
        }

        #hey {
            padding-left: 15px;
        }

        form {
            height: 90%;
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-between;
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
        $username = $_POST["username"];
        $age = $_POST["age"];
        $email = $_POST["email"];
        $gender = $_POST["gender"];
        $password = $_POST["password"];
        $confirmPassword = $_POST["confirmPassword"];

        if ($password !== $confirmPassword) {
            echo "Error: Passwords do not match!";
            exit();
        }

        $sql = "INSERT INTO register (username, age, email, gender, password) VALUES ('$username', $age, '$email', '$gender', '$password')";

        if ($conn->query($sql) === TRUE) {
            echo "Registration successful!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    $conn->close();
    ?>

    <header id="header">
    </header>

    <section id="home">
        <div class="container">
            <div class="tops">
                <h2>heyFlip</h2>
                <form action="login.php" id="sect8">
                    <input type="submit" value="Back">
                </form>
            </div>

            <div class="regs">
                <h1>Register Now!</h1>
            </div>

            <div class="cont2">
                <form action="register.php" method="post">

                    <div class="card1">
                        <div class="sect1">
                            <section id="sect1">
                                <h3>Username:</h3>
                                <input type="text" name="username" id="hey" placeholder="Enter Username" required>
                            </section>
                            <section id="sect2">
                                <h3>Age:</h3>
                                <input type="number" name="age" id="hey" placeholder="Enter Age" required>
                            </section>
                            <section id="sect5">
                                <h3>Password:</h3>
                                <input type="password" name="password" id="hey" placeholder="Enter Password" required>
                            </section>
                        </div>


                        <div class="sect2">
                            <section id="sect3">
                                <h3>Email Address:</h3>
                                <input type="email" name="email" id="hey" placeholder="Enter Email" required>
                            </section>
                            <section id="sect7">
                                <h3>Gender:</h3>
                                <select name="gender" id="hey">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Others">Others</option>
                                </select>
                            </section>
                            <section id="sect3">
                                <h3>Re-Enter Password:</h3>
                                <input type="password" name="confirmPassword" id="hey" placeholder="Re-Enter Password" required>
                            </section>
                        </div>
                    </div>

                    <div class="card2">
                        <div class="sect3">
                            <section id="sect6">
                                <label>Terms and Agreement</label>
                                <input type="checkbox" name="" id="check">
                                <section id="sect8">
                                    <input type="submit" value="Register">
                                </section>
                            </section>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="contener"></div>
    </section>
</body>

</html>