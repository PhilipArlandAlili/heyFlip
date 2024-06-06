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
            background-image: url("img/box.gif");
            background-blend-mode: luminosity;
            background-position: center;
            background-size: cover;
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

        .container1 {
            height: 100%;
            display: inline-block;
            border: 5px solid #B4B8BB;
            border-radius: 40px;
            text-align: center;
        }

        .container1  img {
            height: 42%;
            margin: 15px 25px;
        }

        .container2 {
            height: 100%;
            display: inline-block;
            border: 5px solid #EBCD5F;
            border-radius: 40px;
            text-align: center;
        }

        .container2 img {
            height: 42%;
            margin: 15px 25px;
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
            <a href="login.php">Log Out</a>
        </nav>
    </header>

    <article id="home">
        <div class="container1">
            <h1>Pokemon Gallery</h1>
            <img src="img/Charizard.jpg" alt="">
            <img src="img/Blastoise.jpg" alt="">
            <img src="img/Venusaur.jpg" alt="">
            <img src="img/Gyrados.jpg" alt="">
            <img src="img/Chansey.jpg" alt="">
            <img src="img/Alakazam.jpg" alt="">
        </div>

        <div class="container2">
            <h1>Trainer Gallery</h1>
            <img src="img/Trainer1.jpg" alt="">
            <img src="img/Trainer2.jpg" alt="">
            <img src="img/Trainer3.jpg" alt="">
            <img src="img/Trainer4.jpg" alt="">
            <img src="img/Trainer5.jpg" alt="">
            <img src="img/Trainer6.jpg" alt="">
        </div>
    </article>


</body>

</html>