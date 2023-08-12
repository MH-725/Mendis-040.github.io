
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="ÜTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portfolio Website</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/e9146536d7.js" crossorigin="anonymous"></script>
</head>
<body>
<div id="header">
    <div class="container">
        <nav>
            <img src="logo.png" class="logo">
            <ul id="sidemenu">
                <li><a href="#header">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#contact">Contact</a></li>
                <i class="fas fa-xmark" onclick="closemenu()"></i>
            </ul>
            <i class="fas fa-bars" onclick="openmenu()"></i>
        </nav>
        <div class="header-text">
            <p>Website Designer</p>
            <h1>Hi,I'm <span>Malshi Mendis</span><br>from Sri Lanka</h1>
        </div>
    </div>
</div>
<!---------About---------->
<div id="about">
    <div class="container">
        <div class="row">
            <div class="about-col-1">
                <img src="user.jpg">
            </div>
            <div class="about-col-2">
                <h1 class="sub-title">About Me</h1>
                <p>I'm Malshi Mendis student in Department of Physical Science, Faculty of Applied Sciences in Rajarata University of Sri Lanka.
                    I would like to pursue further education in mathematics,IT during and after my university life.
                    And in the future, I hope to be a good citizen and expertise in my field.I have 2+ years experience that keep customers coming for about services make best effort.</p>

                <div class="tab-titles">
                    <p class="tab-links active-link" onclick="opentab('skills')">Skills</p>
                    <p class="tab-links" onclick="opentab('experience')">Experience</p>
                    <p class="tab-links" onclick="opentab('education')">Education</p>
                </div>
                <div class="tab-contents active-tab" id="skills">
                    <ul>
                        <li><span>UI/UX</span><br>Designing Web/App interfaces</li>
                        <li><span>Web Development</span><br>Web app Development</li>
                        <li><span>App Development</span><br>Building Android/ios apps</li>
                    </ul>
                </div>
                <div class="tab-contents" id="experience">
                    <ul>
                        <li><span>2021 - Current</span><br>Web Design Training at IJSE Institute</li>
                        <li><span>2019 - 2021</span><br>Team lead at StarApp LLC.</li>
                        <li><span>2017 - 2019</span><br>UT/UX Design Executive at M&N Digital Ltd.</li>
                    </ul>
                </div>
                <div class="tab-contents" id="education">
                    <ul>
                        <li><span>2022</span><br>Undergraduate of Rajarata University of Sri Lanka</li>
                        <li><span>2021</span><br>Web Design Training at IJSE Institute</li>
                        <li><span>2019</span><br>Dip. in IT at Esoft Metro Campus</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!---Services--->
<div id="services">
    <div class="container">
        <h1 class="sub-title">My Services</h1>
        <div class="services-list">
            <div>
                <i class="fa-solid fa-code"></i>
                <h2>Web Design</h2>
                <p>Web Hosting(the most popular additional upsell ), Domain Names(Selling the domain names with a marginal service charge on top is always a viable upsell for web designers), Logo Design, Photography, Written Creation, Social Media Management(If the client doesn't have any social media platforms, a social media management plan would often start by creating these accounts of popular platforms including Facebook, Twitter and LinkedIn.)</p>
                <a href="#">Learn more</a>
            </div>
            <div>
                <i class="fa-solid fa-crop-simple"></i>
                <h2>UI/UX Design</h2>
                <p>As a user experience (UX) designer, works on a team to create products that provide meaningful and enjoyable experiences for users. We are concerned with the entire process of product design, from branding to design to useability. As a UI (user interface) designer, we build interfaces in software or other computerized devices.</p>
                <a href="#">Learn more</a>
            </div>
            <div>
                <i class="fa-brands fa-app-store"></i>
                <h2>App Design</h2>
                <p>Mobile designers have many names and some of them are app designers, iOS app designers, Android app designers, and so on. As a app designer, we usually have track records of working closely with user-experience (UX) designers and user-interface (UI) designers to apply our design to mobile interfaces.</p>
                <a href="#">Learn more</a>
            </div>
        </div>
    </div>
</div>
<!----portfolio---->
<div id="portfolio">
    <div class="container">
        <h1 class="sub-title">My Work</h1>
        <div class="work-list">
            <div class="work">
                <img src="work1.jpg" >
                <div class="layer">
                    <h3>Social Media App</h3>
                    <p>The app connects you the talented people around the world. Download it from play store.</p>
                    <a href="#"><i class="fa-solid fa-up-right-from-square"></i></a>
                </div>
            </div>
            <div class="work">
                <img src="work2.jpg" >
                <div class="layer">
                    <h3>Music App</h3>
                    <p>The app connects you the talented people around the world. Download it from play store.</p>
                    <a href="#"><i class="fa-solid fa-up-right-from-square"></i></a>
                </div>
            </div>
            <div class="work">
                <img src="work3.jpg" >
                <div class="layer">
                    <h3>Online Shopping App</h3>
                    <p>The app connects you the talented people around the world. Download it from play store.</p>
                    <a href="#"><i class="fa-solid fa-up-right-from-square"></i></a>
                </div>
            </div>
        </div>
        <a href="#" class="btn">See more</a>
    </div>
</div>
<!----contact---->
<div id="contact">
    <div class="container">
        <div class="row">
            <div class="contact-left">
                <h1 class="sub-title">Contact Me</h1>
                <p><i class="fa-solid fa-paper-plane"></i> contact@example.com</p>
                <p><i class="fa-solid fa-square-phone"></i> 0774534123</p>
                <div class="social-icons">
                    <a href="https://facebook.com/"><i class="fa-brands fa-facebook"></i></a>
                    <a href=""><i class="fa-brands fa-twitter"></i></a>
                    <a href=""><i class="fa-brands fa-instagram"></i></a>
                    <a href=""><i class="fa-brands fa-linkedin"></i></a>
                </div>
                <a href="my cv.pdf" download class="btn btn2">Download CV</a>
            </div>
            <div class="contact-right">
                <form action="connect.php" method="POST">
                    <input type="text" name="Name" placeholder="Your Name" required>
                    <input type="email" name="Email" placeholder="Your Email" required>
                    <textarea name="Message" rows="6" placeholder="Your Message"></textarea>
                    <button type="submit" class="btn btn2">Submit</button>
                </form>
                <span id="msg"></span>
            </div>
        </div>
    </div>
    <div class="copyright">
        <p>Copyright @ Malshi<i class="fa-solid fa-heart"></i></p>
    </div>
</div>

<script>
            var tablinks = document.getElementsByClassName("tab-links");
            var tabcontents = document.getElementsByClassName("tab-contents");

            function opentab(tabname){
                for(tablink of tablinks){
                    tablink.classList.remove("active-link");
                }
                for(tabcontent of tabcontents){
                    tabcontent.classList.remove("active-tab");
                }
                event.currentTarget.classList.add("active-link");
                document.getElementById(tabname).classList.add("active-tab");
            }
        </script>
<script>
            var sidemenu = document.getElementById("sidemenu");

            function openmenu(){
                sidemenu.style.right = "0";
            }
            function closemenu(){
                sidemenu.style.right = "-200px";
            }
        </script>
</body>
</html>
    