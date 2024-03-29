<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <title>Medical Application System</title>
        <meta name="description" content="Modern effects and styles for off-canvas navigation with CSS transitions and SVG animations using Snap.svg" />
        <meta name="keywords" content="sidebar, off-canvas, menu, navigation, effect, inspiration, css transition, SVG, morphing, animation" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico">
        <link rel="stylesheet" type="text/css" href="css/normalize.css" />
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
        <link rel="stylesheet" type="text/css" href="css/menu_elastic.css" />
        <script src="js/snap.svg-min.js"></script>
        <!--[if IE]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="container">
            <div class="menu-wrap">
                <nav class="menu">
                    <div class="icon-list">
                        <a href="home.php"><i class="fa fa-fw fa-comment-o"></i><span>Home</span></a>
                        <a href="newPatient.php"><i class="fa fa-fw fa-star-o"></i><span>Add Patient</span></a>
                        <a href="newPhysician.php"><i class="fa fa-fw fa-bell-o"></i><span>Add Physician</span></a>
                        <a href="index.php"><i class="fa fa-fw fa-bell-o"></i><span>Log Out</span></a>
                    </div>
                </nav>
                <button class="close-button" id="close-button">Close Menu</button>
                <div class="morph-shape" id="morph-shape" data-morph-open="M-1,0h101c0,0,0-1,0,395c0,404,0,405,0,405H-1V0z">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 100 800" preserveAspectRatio="none">
                    <path d="M-1,0h101c0,0-97.833,153.603-97.833,396.167C2.167,627.579,100,800,100,800H-1V0z"/>
                    </svg>
                </div>
            </div>
            <button class="menu-button" id="open-button">Open Menu</button>
            <div class="content-wrap">
                <div class="content">
                    <header class="codrops-header" style="background-image: url(img/header-bg.jpg); height: 300px;">
                        <h1>Medical Application System <span>Home</span></h1>
                    </header>
                    <!-- Related demos -->
                    <section class="related">
                        <p>We welcome to this hospital web application.</p>
                    </section>
                </div>
            </div><!-- /content-wrap -->
        </div><!-- /container -->
        <script src="js/classie.js"></script>
        <script src="js/main3.js"></script>
    </body>
</html>
