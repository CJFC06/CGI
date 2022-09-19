<!doctype html>
<?php include "session.php";
?>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <link rel="shortcut icon" type="image/x-icon" href="images/CGILogo.png" />

</head>
<body>
  <header>
    <nav>
      <ul class="nav_links">
        <li><a href="home.php">HOME</a></li>
        <li><a href="career.php">career objective</a></li>
        <li>
          <form class="" action="logout.php" method="post">
          <input type="submit" name="logout" value="LOGOUT"></input>
          </form>
        </li>
      </ul>
    </nav>
  </header>
<div class="container">
    <div class="left_Side">
        <div class="profileText">
            <div class="imgBx">
                <img class="photo" src="images/DP.jpg">
            </div>
            <br>
            <h2>Rowell Esguerra <br><span>BSIT</span> </h2>
        </div>
<!-- CONTACT -->
        <div class="contactInfo">
            <h3 class="title">Contact Info</h3>
            <ul>
                <li>
                    <span class="icon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                    <span class="text">09665896169</span>
                </li>
                <li>
                    <span class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                    <span class="text">wel.esguerra@gmail.com</span>
                </li>
                <!-- <li>
                    <span class="icon"><i class="fa fa-globe" aria-hidden="true"></i></span>
                    <span class="text">www.mywebsite.com</span>
                </li> -->
                <li>
                    <span class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                    <span class="text">Makati, Philippines</span>
                </li>
            </ul>
        </div>
<!-- EDUCATION               -->
        <div class="contactInfo education">
            <h3 class="title">Education</h3>
            <ul>
                <li>
                    <h5>2017 - 2022</h5>
                    <h4>Bachelor Degree in Information Technology</h4>
                    <h4>University Of Makati</h4>
                </li>
                <li>
                    <h5>2013 - 2014</h5>
                    <h4>Vocation Degree Electro-Mechanical Technology</h4>
                    <h4>Don Bosco Technical Institute Makati</h4>
                </li>
            </ul>
        </div>
<!-- LANGUAGES         -->
        <div class="contactInfo language">
            <h3 class="title">Languages</h3>
            <ul>
                <li>
                    <span class="text">English</span>
                    <!-- <span class="percent">
                        <div data-language="english"></div>
                    </span> -->
                </li>
            </ul>
            <ul>
                <li>
                    <span class="text">Filipino</span>
                    <!-- <span class="percent">
                        <div data-language="filipino"></div>
                    </span> -->
                </li>
            </ul>
        </div>
    </div>
    <div class="right_Side">
<!-- PROFILE -->
        <div class="about">
            <h2 class="title2">Profile</h2>
            <p>IT graduate major in service management with a background in Java, HTML, CSS, Python, PHP, MySQL and JavaScript.
              Highly analytical, motivated and skilled at solving programming problems. Can work well both independently and in a team.
        </div>
<!-- EXPERIENCE         -->
        <div class="about">
            <h2 class="title2">Experience</h2>
            <div class="box">
                <div class="year_company">
                    <h5>Jan-Mar 2022</h5>
                    <h5>FPOSI</h5>
                </div>
                <div class="text">
                    <h4>Data Encoder</h4>
                    <p>Input/process client's delivery information.</p>
                </div>
            </div>
            <div class="box">
                <div class="year_company">
                    <h5>2014 - 2017</h5>
                    <h5>Concepcion Otis Philippines</h5>
                </div>
                <div class="text">
                    <h4>Elevator and Esclator Technician</h4>
                    <p>Preventive maintenance and repair of elevators and escalators around metro manila and other out of town.</p>
                </div>
            </div>
            <div class="box">
                <div class="year_company">
                    <h5>2013 - 2014</h5>
                    <h5>Jollibee Corp.</h5>
                </div>
                <div class="text">
                    <h4>Crew</h4>
                    <p>Kitchen staff</p>
                </div>
            </div>
        </div>
<!-- SKILLS -->
        <div class="about skills">
            <h2 class="title2">Skills</h2>
            <div class="box">
                <h4>JAVA</h4>
                <h4>CSS</h4>
                <h4>JavaScript</h4>
                <h4>PHP</h4>
                <h4>C#</h4>
                <h4>HTML</h4>
                <h4>MySql </h4>
            </div>
<!-- OTHER SKILLS             -->
            <h2 class="title2">Other Skills</h2>
            <div class="box2">
                <h4>Game Development using Unity cross-platform game engine</h4>
                <h4>Knowledge in mobile app development using Android Studio</h4>
                <h4>Bootstrap</h4>
                <h4>Git</h4>
                <h4>Knowledge in Web hosting via GoDaddy</h4>
                <h4>Microsoft office tools</h4>
                <h4>Arduino Programming</h4>
                <h4>computer troubleshooting(hardware and software)</h4>
                <h4>Knowledge and experience in electrical, electronic and mechanical works</h4>
                <h4>Installation of Hardware Equipment(cabling, cctv, etc.)</h4>
                <h4>Software Installation (Operating System/application)</h4>
                <h4>Knowledge in Building Wiring Installation</h4>
                <h4>Knowledge in Motors & Controls and PLC(programmable logic controller)</h4>
            </div>
        </div>
<!-- PROJECTS -->
        <div class="about projects">
          <h2 class="title2">Projects</h2>
          <ul>
            <li>RadPenguin Android Game. A Quiz Game for RadTech students of University of Makati</li>
            <li>English Learning Web Application for 2 to 4 yrs old </li>
          </ul>
        </div>
<!-- CERTIFICATIONS -->
        <div class="about interest">
            <h2 class="title2">Certifications</h2>
            <ul>
                <li>Microsoft Technology Associate: HTML5 Application Development Fundamentals</li>
                <li>Microsoft Technology Associate: Database Fundamentals</li>
                <li>Certificate of Recognition: 2nd Runner-Up in .NET PROGRAMMING USING C# During InfoTechOlympics 2018</li>
                <li>Mechatronics Servicing NCII</li>
                <li>Certificate of Achievement: Handling Difficult Clients in Guthrie Jensen</li>
            </ul>
        </div>


    </div>
</div>
</body>
</html>
