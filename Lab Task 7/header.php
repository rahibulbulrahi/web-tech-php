<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewpoint" content="width=device-width, initial-scale=1.8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="style/headerstyle.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet"> 
    </head>

    <body>
        <nav>
            <div class="logo">
                <h4>The Project</h4>
            </div>

            <ul class="nav-link">
                <li><a href="home.php">Home</a></li>
                <li><a href="#section-tour">Top Tour</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
            <div class="corner">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
        </nav>
        <script>
            const navslide = () => 
            {
                const corner = document.querySelector('.corner');
                const nav = document.querySelector('.nav-link');
                const navLink = document.querySelectorAll('.nav-link li');

                corner.addEventListener('click',() => 
                {
                    nav.classList.toggle('nav-active');

                    navLink.forEach((link, header) => 
                    {
                        if(link.style.animation)
                        {
                            link.style.animation = '';
                        }
                        else
                        {
                            link.style.animation = `navlinkFade 0.5s ease forwards ${header / 7 + 1}s`;
                        }
                    });
                });

               
            }
            navslide();
        </script>
    </body>
</html>