<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>

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
            width: 100%;
            background-image: url("img/box.gif");
            background-blend-mode: luminosity;
            background-position: center;
            background-size: cover;
        }

        header {
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
            display: flex;
            align-items: center;
            padding: 20px 10%;
        }

        .container {
            width: 55%;
        }

        .container h1 {
            font-size: 46px;
            font-weight: 800;
        }

        .container h3 {
            font-size: 25px;
            font-weight: 800;
            color: #3c86e1;
        }

        .container p {
            font-size: 16px;
            font-weight: 600;
        }

        #side {
            height: 100%;
            width: 45%;
            margin-left: 13%;
            padding-bottom: 5%;
            display: inline-block;
        }

        .sidebar {
            padding: 25px;
            height: 62%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            gap: 30px;
        }

        .sidebar img {
            height: 280px;
            width: 70%;
            border-radius: 20px;
        }

        .sidebar h1 {
            text-align: center;
            font-size: 45px;
            font-weight: 700;
        }

        .about {
            margin-top: 30px;
            width: 70%;
            border-bottom: 1px solid white;
            border-radius: 30px 0;
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

    <section id="home">
        <div class="container">
            <h1>Hi! I'm Philip Arland Alili</h1>
            <h3>I'm struggling to learn web design</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid ducimus doloremque totam, voluptatibus
                reiciendis labore ipsam rem obcaecati quis fugit! Sed odio modi voluptate saepe, explicabo nihil natus
                sequi libero! Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, aperiam rem? Reiciendis illum
                eius laudantium rem est, sit non voluptates eveniet animi dolore fugiat, officia magni magnam,
                recusandae atque quia!</p>
        </div>

        <aside id="side">
            <div class="sidebar">
                <h1></h1>
                <img src="img/profile.jpg" alt="">
                <p><em>"If they can do it, make them do it ..."</em></p>
                <div class="about">
                    <h2>About Me</h2>
                    <p><em>Address: </em>Libis, San Pedro PPC</p>
                    <p><em>Contact Number: </em>09121640128</p>
                    <p><em>Email: </em>202080139@psu.palawan.edu.ph</p>
                </div>
            </div>
        </aside>
    </section>


</body>

</html>