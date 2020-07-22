<!DOCTYPE html>
<html>
    <style>
        body
        {
            margin: 0px;
            font-family: Calibri;
            font-weight: 300;
        }
        div.a
        {
            width: 80%;
            margin: 0 auto;
            
        }
        header
        {
            background: #cccccc;
        }
        header::after
        {
            content: '';
            display: table;
            clear:both;
        }
        .logo
        {
            float: left;
        }
        nav
        {
            float: right;
        }
        nav ul
        {
            margin: 0;
            padding: 0;
            list-style: none;
        }
        nav li
        {
            display: inline-block;
        }
    </style>
    <bodY>
        <header>
        <div class ="a">
            <a href="home.php">
            <img src="logo/world.png" alt="logo" width="35px" height="35px" class="logo">
            </a>
            <nav>
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="registration.php">Registration</a></li>
                </ul>
            </nav>
            </div>
        </header>
    </bodY>
</html>