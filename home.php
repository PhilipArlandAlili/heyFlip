<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <style>
        * {
            margin: 0%;
            padding: 0%;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            background-color: #0e1037fc;
            color: #ededed;
            height: 100vh;
            background-image: url("img/bg1.gif");
            background-position: center;
            background-size: cover;
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
            height: 85vh;
            padding: 3%;
            display: flex;
            flex-direction: column;
            text-align: center;
            justify-content: center;
            gap: 25%;
        }

        .welcs {
            margin: 0%;
            padding: 0;
            height: 50%;

        }

        .welcs h1 {
            margin-top: 20px;
            font-size: 100px;
            font-weight: bolder;
        }

        .container {
            height: 100%;
            width: 100%;
        }

        .homes {
            height: 100%;
            width: 100%;
            border-top: 1px solid #ededed;
            display: inline-flex;
            flex-direction: row;
            justify-content: space-evenly;

        }

        .homes h1 {
            height: 100%;
            width: 100%;
            font-size: 120px;
            padding-top: 2%;
        }

        .h11,
        .h22,
        .h33 {
            height: 100%;
            width: 20%;
            border-radius: 1rem;
            transition: width .75s ease;
        }

        .h11:hover {
            width: 50%;
            transition: 1s;
        }

        .h22:hover {
            width: 50%;
            transition: 1s;
        }

        .h33:hover {
            width: 50%;
            transition: 1s;
        }

    </style>
</head>

<body>
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

    <article id="home">
        <div class="welcs">
            <h1>Hello World!</h1>
        </div>

        <div class="container">
            <div class="homes">
                <div class="h11">
                    <h1>This</h1>
                </div>
                <div class="h22">
                    <h1>Is</h1>
                </div>
                <div class="h33">
                    <h1>Home</h1>
                </div>
            </div>
        </div>
    </article>

</body>

</html>