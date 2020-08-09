<!DOCTYPE html>
<html>
    <style>
        *
        {
            box-sizing: border-box;
            font-family: 'Poppins' sans-serif;
        }
        body
        {
            margin: 0px;
            font-family: Calibri;
            font-weight: 400;
        }
        header
        {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: 0.6s;
            padding: 40px 100px;
        }
        header .logo
        {
            position: relative;
            font-weight: 700;
            color: #fff;
            text-decoration: none;
            font-size: 2em;
            text-transform: uppercase;
            letter-spacing: 2px;
            transition: 0.6s;
        }
        header ul
        {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        header ul li
        {
            position: relative;
            list-style: none;
        }
        header ul li a
        {
            position: relative;
            margin: 0 15px;
            text-decoration: none;
            color: #fff;
        }
    </style>
    <bodY>
        <header>
            <a href="home.php" class="logo">
            Logo
            </a>
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="tour.php">Top tours</a></li>
                    <li><a href="guide.php">Guides</a></li>
                    <li><a href="register.php">Register</a></li>
                </ul>
        </header>
    </bodY>
</html>