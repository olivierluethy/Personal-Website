<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/favicon-icon.png">
    <meta name="author" content="Olivier Luethy">

    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@900&display=swap" rel="stylesheet">

    <meta name="description" content="On this website you can find a lot of beautiful pictures you'll like.">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <script src="https://kit.fontawesome.com/ebfafc2eb8.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="home.css">
    <title>ÇOK GÜZEL IMAGES</title>
</head>

<body>
    <!--====== Header Section Start ======-->
    <header>
        <div class="header-btn animated bounceIn">
            <a href="#contact"><span>Projects</span></a>
        </div>


        <!-- Home, About Us, Projects,  -->

        <!-- ==== Intro Section Start ==== -->
        <div class="intro-section" id="home">
            <div class="bg-img"></div>
            <div class="intro-content">
                <h1>Here you can find beautiful pictures from Olivier Lüthy & Mathieu Rogger.</h1>
                <h6>Amateur photographers from Meggen</h6>

                <p class="tagline">
                    <span class="change-container">
                        <span class="changing">Beautiful Pictures</span>
                        <span class="changing">Amateur Photos</span>
                        <span class="changing">Easy To Download</span>
                    </span>
                </p>

                <!-- Search Box -->

                <div class="searchbox animated zoomIn">
                    <form method="get">
                        <input oninput="triggercross(this.value)" type="text" placeholder="Search here a nice picture from ..." id="search" name="search" class="search"><i class="fas fa-search"></i>
                        <button onclick="close1()" id="closeid" type="reset" class="close">
                            <i class="fas fa-times"></i>
                            <p id="demo"></p>
                        </button>
                    </form>

                </div>

                <div class="hero_footer_item">
                    <a data-photo-modal="3965534" href="#i" data-photo-modal-initialized="true">A photo made from Schloss Meggenhorn<br>
                        Meggen, Lucerne
                    </a>
                </div>

            </div>
        </div>

    </header>

    <div class="Second-Nav">
        <div id="wrapper">
            <ul>
                <li class="different-active"><a class="active" href="">Home</a></li>
                <li class="different"><a href="">Made by the Drone</a></li>
                <li class="different"><a href="">Made with the camera</a></li>
                <li class="different"><a href="">Our best Images</a></li>
                <li class="different"><a href="">Videos</a></li>
            </ul>
        </div>
    </div>
    <hr>


    <svg class="flag flag-switzerland" width="100px" height="100px">
        <rect width="100%" height="100%" fill="red" />
        <rect x="40%" y="15%" width="20%" height="70%" fill="white" />
        <rect x="15%" y="40%" width="70%" height="20%" fill="white" />
    </svg>


    <svg class="flagi flag-germany" width="100px" height="100px">
        <rect width="100%" height="100%" fill="blue" />
        <rect width="100%" height="50%" fill="white" x="0" y="0" />
    </svg>

    <!-- Main Section -->
    <div class="mainTitle">
        <h1>Our first pictures</h1>
    </div>

    <div class="responsive">
        <div class="gallery">
            <a target="_blank" href="images/DSC06483.jpg">
                <img src="images/DSC06483.jpg" alt="Cinque Terre" width="600" height="400">
            </a>
            <div class="desc">Add a description of the image here</div>
        </div>
    </div>


    <div class="responsive">
        <div class="gallery">
            <a target="_blank" href="images/DSC06484.jpg">
                <img src="images/DSC06484.jpg" alt="Forest" width="600" height="400">
            </a>
            <div class="desc">Add a description of the image here</div>
        </div>
    </div>

    <div class="responsive">
        <div class="gallery">
            <a target="_blank" href="images/DSC06494.jpg">
                <img src="images/DSC06494.jpg" alt="Northern Lights" width="600" height="400">
            </a>
            <div class="desc">Add a description of the image here</div>
        </div>
    </div>

    <div class="responsive">
        <div class="gallery">
            <a target="_blank" href="images/DSC06486.jpg">
                <img src="images/DSC06486.jpg" alt="Mountains" width="600" height="400">
            </a>
            <div class="desc">Add a description of the image here</div>
        </div>
    </div>

    <!-- Second Table -->

    <div class="responsive">
        <div class="gallery">
            <a target="_blank" href="images/DSC06483.jpg">
                <img src="images/DSC06483.jpg" alt="Cinque Terre" width="600" height="400">
            </a>
            <div class="desc">Add a description of the image here</div>
        </div>
    </div>


    <div class="responsive">
        <div class="gallery">
            <a target="_blank" href="images/DSC06484.jpg">
                <img src="images/DSC06484.jpg" alt="Forest" width="600" height="400">
            </a>
            <div class="desc">Add a description of the image here</div>
        </div>
    </div>

    <div class="responsive">
        <div class="gallery">
            <a target="_blank" href="images/DSC06494.jpg">
                <img src="images/DSC06494.jpg" alt="Northern Lights" width="600" height="400">
            </a>
            <div class="desc">Add a description of the image here</div>
        </div>
    </div>

    <div class="responsive">
        <div class="gallery">
            <a target="_blank" href="images/DSC06486.jpg">
                <img src="images/DSC06486.jpg" alt="Mountains" width="600" height="400">
            </a>
            <div class="desc">Add a description of the image here</div>
        </div>
    </div>

    <div class="clearfix"></div><br><br>

    <div id="footer">
        <p>&copy;<span id="year"></span>
            2020 ÇOK GÜZEL IMAGES. All rights Reserved.<p>
    </div>



    <script src="home.js"></script>
</body>

</html>