<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title><?php echo $title; ?></title>

    <style>
        html, body{
            background-color: black;
            margin: 0;
            width:100%;
            overflow-x: hidden;
        }

        /* Whole Block */
        .whole-block{
            display:flex;
            flex-direction: column;
            height: 100%;
        }

        /* Header */
        /* Logo */
        .logo{
            display: flex;
            align-items: center;
            position: absolute;
            left: 15%;
            width:100px;
            height:100px
        }
        /* Top Bar Animations */
        @keyframes scroll-out {
            from {
                transform: translateY(0);
            }
            to {
                transform: translateY(-300px);
            }

        }
        .animated {
            transform: translateY(-300px);
        }

        /* Top Bar */
        .tab-bar{
            display:flex;
            flex-direction: row;
            justify-content: center;
            background-color: black;
            height: 125px;
            align-items: center;
            position: sticky;
            top: 0;
            left: 0;
            right: 0;
            z-index:1;
            transition: all ease-out 0.3s;
        }
        /* Tabs */
        .tabs {
            display:flex;
            color: white;
            background-color: black;
            padding: 2px;
            text-decoration: none;
            font-weight: bold;
            border-block: 2px solid white;
            align-items: center;
            justify-content: space-evenly;
            height: 50px;
            width: 100px;
            margin-inline: 10px;

        }
        .tabs:hover {
            background-color: white;
            color: black;

        }
        .tabs:active {
            background-color: black;
            color: white;
        }

        /* Phone Link */
        .phone-link{
            display: flex;
            align-items: center;
            position: absolute;
            right: 15%;
            color: white;
            text-decoration: none;
        }

        /* Hamburger Button */
        .hamburger-animate{
            position:fixed;
            top:15px;
            left:-35px
        }
        .hamburger-div{
            display:none;
        }

        .hamburger-btn{
            display:flex;
            cursor:pointer;
            border:solid white 2px;
            background: none;
            height: 50px;
            width:50px;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        .bar{
            display:block;
            width: 25px;
            height: 3px;
            margin: 5px 0;
            background-color:white;
            transition: 0.3s;
        }

        /* Hamburger Tabs */
        .hamburger-tabs {
            display:flex;
            color: white;
            background-color: black;
            padding: 2px;
            text-decoration: none;
            font-weight: bold;
            border-block: 2px solid white;
            align-items: center;
            justify-content: space-evenly;
            height: 50px;
            width: 100px;
            margin-inline: 10px;

        }
        .hamburger-tabs:hover {
            background-color: white;
            color: black;

        }
        .hamburger-tabs:active {
            background-color: black;
            color: white;
        }

        /* Side bar */
        .hamburger-sidebar {
            display:block;
            flex-direction: column;
            position: fixed;
            width: 0%;
            overflow-x: hidden;
            height: 100%;
            transition: ease 0.5s;
            background-color: dimgray;
            opacity: 0.98;
            z-index: 1;
            top:0;
            border-right: 6px solid black;
        }



        /* Main Block */
        .main-block {
            display: flex;
            flex-direction: column;
            background-attachment: scroll;
            justify-content: center;
            color: white;
            padding-bottom: 59px
        }

        /* Footer */
        .footer-block{
            display:flex;
            flex-direction: column;
            background-color: black;
            width: 100%;
            height: 150px;
            justify-content: center;
            align-items: center;
            color: white;
            text-decoration: white;
            border-top: 1px solid white;
            margin-top: 25px;

        }

        .footer-block a{
            color: white;
        }

        .footer-block div{
            display:flex;
            flex-direction: row;
            justify-content: space-between;
            width: 15%
        }
        .footer-block p{
            margin-top: 0px;
            margin-bottom: 0px;
        }
        .fb-img{
            width:25px; 
            height:25px;
        }
        
        /* Laptop adjustment */
        @media screen and (max-width: 1330px){
            .logo {
                left: 5%;
            }
            .phone-link{
                right:5%;
            }
        }

        /* Tablet adjustment */
        @media screen and (max-width: 772px){
            .logo,
            .phone-link,
            .tabs {
                display:none
            }
            .hamburger-div{
                display:block;
                margin-left:50px;
            }
            .tab-bar{
                justify-content: flex-start;
            }
            .footer{
                height:300px;
                font-size:x-large;
                gap:28px
            }
            .footer-block div{
                width:25%
            }
        }

        @media screen and (max-width:500px) {
            .footer-block div{
                width:50%
            }
            .fb-img{
                width:35px;
                height: 35px;
            }

            
        }



    </style>
    <?php if (file_exists($styles)){include($styles);} ?>

</head>
<body>
    <!-- Whole Block -->
    <div class="whole-block">
        <!-- Header -->
        <header class="tab-bar" id="header">
            <!-- Logo -->
            <a class="logo" href="/">
                <img src="templates/static/logo.jpg" style="width:100px;height:100px; clip-path:circle(46% at 50% 51%)">
            </a>

            <!-- Main Tabs -->
            <a class="tabs" href="/index.php?page=home">Home</a>
            <a class="tabs" href="/index.php?page=about-us">About us</a>
            <a class="tabs" href="/index.php?page=contact-us">Contact us</a>
            <a class="tabs" href="/index.php?page=hiring">Hiring</a>
            <a class="tabs" href="/index.php?page=projects">Projects</a>

            <!-- Phone Link -->
            <a class="phone-link" href="tel:2566279818">
                <img src="templates/static/icons/Phone.png">
                <h2>Call Us!</h2>
            </a>

            <!-- Hamburger Button -->
            <div class="hamburger-div" id='btn-move'>
                <button class="hamburger-btn" aria-label="Toggle menu" aria-expanded="false" aria-controls="nav-menu" onclick="toggleMenu(this)">
                    <span class='bar'></span>
                    <span class='bar'></span>
                    <span class='bar'></span>
                </button>
            </div>

        </header>

        <!-- Main Block -->
        <!-- Side Pannel -->
        <nav id="nav-menu" class="hamburger-sidebar">
            <!-- Hamburger Button -->
            <div class="hamburger-div" style="margin-block:15px; margin-left:15px">
                <button class="hamburger-btn" style="border-color:black;" aria-label="Toggle menu" aria-expanded="false" aria-controls="nav-menu" onclick="toggleMenu(this)">
                    <span class='bar' style="background-color:black"></span>
                    <span class='bar' style="background-color:black"></span>
                    <span class='bar' style="background-color:black"></span>
                </button>
            </div>
            <div style="display:flex;align-items:center;flex-direction:column">
                <a class="hamburger-tabs" href="/index.php?page=home">Home</a>
                <a class="hamburger-tabs" href="/index.php?page=about-us">About us</a>
                <a class="hamburger-tabs" href="/index.php?page=contact-us">Contact us</a>
                <a class="hamburger-tabs" href="/index.php?page=hiring">Hiring</a>
                <a class="hamburger-tabs" href="/index.php?page=projects">Projects</a></li>
                </ul>
            </div>
        </nav>
        <main class="main-block">
            <?php if (file_exists($content)){include($content);} ?>
        </main>

        <!-- Footer -->
        <footer class="footer-block">
            <!-- About us -->
            <div>
                <a href="/">About us</a>
                <a href="/">Contact us</a>
            </div>
            <!-- Social -->
            <a href="https://www.facebook.com/BluffCreekElectric"><img src="templates/static/icons/social/FaceBook.png" class="fb-img"></a>
            <!-- Build -->
            <p>© 2025 Bluff Creek Electric. All rights reserved</p>
            <p>Website by <a href="https://www.StevenNewbern.com">Steven Newbern</a></p>
        </footer>
    </div>
    
    <!-- Scroll Affect -->
    <script>
        // Setting LastScroll to 0 to start off with
        let LastScroll = 0;

        // Getting Header
        const header = document.getElementById("header");

        // Waiting for Scroll
        window.addEventListener("scroll", () =>{
            // Current Scroll
            const CurrentScroll = window.scrollY;
            // Checking to see if Scroll is Greater than the last scroll & more than 50px worth if not shows the header
            if (CurrentScroll > LastScroll && CurrentScroll > 50) {
                header.classList.add("animated");
            }
            else{
                header.classList.remove("animated");
            }
            // Setting LastScroll as the Current Scroll
            LastScroll = CurrentScroll;
        })
    </script>
    <!-- Side Panel -->
    <script>
        function toggleMenu(button) {
          button.classList.toggle('active');
          const menu = document.getElementById('nav-menu');
          let maxWidth = window.screen.width;

          let targetWidth = (maxWidth < 500) ? "75%" : "35%";

          if (menu.style.width === targetWidth) {
            menu.style.width = "0%"
            document.getElementById("btn-move").classList.remove("hamburger-animate");
            button.setAttribute('aria-expanded', 'false');
          } else {
            menu.style.width = targetWidth
            document.getElementById("btn-move").classList.add("hamburger-animate");
            button.setAttribute('aria-expanded', 'true');
          }
        }
    </script>
    

    <!-- JavaScript -->
    <?php if (file_exists($JavaScript)){include($JavaScript);} ?>
</body>
</html>