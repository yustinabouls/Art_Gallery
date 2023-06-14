<?php

session_start();

include("connections.php");
include("functions.php");

$u_dat = check_log($cxn);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Art Gallery</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="style.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>

<body>
  <div id="MainBody">
  <div id="home"></home>
    <div class="header">
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="#home"><i class="fa fa-fw fa-home"></i>Home</a>
            <a href="#footer"><i class="fa fa-fw fa-envelope"></i>Contact</a>
            <a href="TicketBooth.php">Ticket Booth</a>
            <a href="#gallery">Collections</a>
            <a href="#event">Event Schedule</a>
            <a href="calendar_index.php">Event Calendar</a>
            <a href="#address">Locations</a>
            <?php
            if ($u_dat)
            {
                echo '<a href="moduser.php" style="margin: auto;">Account Details</a>';
                echo '<a href="logout.php" style="margin: auto;">Sign Out of ' .$u_dat['FN'] . '\'s Account</a>';
            }
            else
            {
                echo '<a href="login.php" style="margin: auto;">Sign In</a>';
                echo '<button type="button" style="text-align:center;"><a href="newuser.php">Sign Up</a></button>';
            }
            ?>
          </div>
          <!-- Use any element to open the sidenav -->
          
          <span onclick="openNav()"><h2 style="font-size:75px; padding-left: 15px;">≡</h2></span>
          <img src="logo.jpg" alt="logo" class="center" width=" 330px" height="275px">
          
          <!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
          <div id="main">
            <main tabindex ="-1" role="main" id="main-content" class="dnfkjs" style="scroll-margin-top: 152px;">
                <div class="HomeCover_center" style="--ratio:1.17;">
                <video autoplay muted loop class="HomeCover_video cover HomeCover_Video HomeCover_Video_playing" aria-hidden="true" tabindex="-1" preload="auto" autoplay loop playsinline>
                  <source src="https://cdn.mediatheque.epmoo.fr/link/smr18gfs3959n5s.webm4" type="video/webm" >
               
                </video>
                </div>
              </div>
              </main>
              <div id="gallery">
                <h1><em>FEATURING ARTISTS</em></h1>
                <h2><em>CLAUDE MONET <date>(1840-1926)</em></date></h2>
                <br><br>
                <marquee behavior = "scroll" direction = "right to left" scrollamount="3">  
                    <img src ="https://okuryazarim.com/wp-content/uploads/2022/09/claude-monet.jpg" alt = "Artist" width = 900px height = 600px>
                    <img src = "https://upload.wikimedia.org/wikipedia/commons/thumb/8/89/Claude_Monet_-_Monet%27s_garden_at_V%C3%A9theuil_%281880%29.jpg/800px-Claude_Monet_-_Monet%27s_garden_at_V%C3%A9theuil_%281880%29.jpg" alt = "Garden " width = 500px  height = 450px>
                    <img src ="https://smarthistory.org/wp-content/uploads/2019/04/Monet-Camille.jpg" alt = "Knitting" width = 450px height = 326px>
                    <img src ="https://assets.rawpixel.com/image_1300/Y29sbGVjdGlvbi9jb3Zlci84ZmJjYTViYWUwYTE1MTZjNTU0ZGIyYjRhNjU0YWJlNl9jb3Zlci5qcGc.jpg?s=T3Td6n4F0afgpXr3rbaeir9ghmBwk6ts8EK6zcPaU7Y" alt = "The Lunch" width = 519.5px height= 507.5px> 
                    <img src ="https://media.tate.org.uk/art/images/work/N/N04/N04103_10.jpg" alt="Painting" width=300px height=275px> 
                    <img src ="https://upload.wikimedia.org/wikipedia/commons/thumb/9/95/Claude_Monet_024.jpg/1200px-Claude_Monet_024.jpg" alt="Women in the garden" width=400px height=700px>
                    <img src ="https://dia.org/sites/default/files/styles/exhibition_hero_image/public/2022-07/Monet.jpg.webp?itok=B5Xx6zMv" alt="happy" width=650px height=200px>
                </marquee>
                <br><br>
                <h2><em>MICHELANGELO  <date>(1475-1564)</em></date> </h2>
                <br><br> 
                <marquee behavior = "scroll" direction = "left to right" scrollamount="3">  
                    <img src ="https://upload.wikimedia.org/wikipedia/commons/0/02/Michelangelo_Daniele_da_Volterra_%28dettaglio%29.jpg" alt = "Artist" width = 650px height = 800px>
                    <img src = "https://d1inegp6v2yuxm.cloudfront.net/royal-academy/image/upload/c_limit,cs_tinysrgb,dn_72,f_auto,fl_progressive.keep_iptc,w_1200/y52v4tsskzulbbtjpevp.jpeg" alt = "Drawing1" width = 450px  height = 700px>
                    <img src ="http://lovefromtuscany.com/wp-content/uploads/2019/05/IMG_0852-1024x781.jpg" alt = "Sculp1" width = 650px height = 500px>
                    <img src ="https://image-cdn.hypb.st/https%3A%2F%2Fhypebeast.com%2Fimage%2F2022%2F04%2Fmichelangelo-rare-drawing-christies-auction-1.jpg?q=90&w=1400&cbr=1&fit=max" alt = "Draw2" width = 645px height= 507.5px> 
                    <img src ="https://www.italian-renaissance-art.com/images/Michelangelo-Cleopatra.jpg" alt="culp" width=400px height=500px> 
                    <img src ="https://mymodernmet.com/wp/wp-content/uploads/2017/06/michelangelo-david-1.jpg" alt="Women" width=400px height=700px>
                    <img src ="https://d7hftxdivxxvm.cloudfront.net/?resize_to=width&src=https%3A%2F%2Fartsy-media-uploads.s3.amazonaws.com%2Fmmpkyak_9NPSOhAqCTeSOg%252FMichelangelo%2527s_Pieta%25CC%2580%252C_St_Peter%2527s_Basilica_%25281498%25E2%2580%259399%2529.jpg&width=1820&quality=80" alt="happy" width=650px height=400px>
                </marquee>

            </div>
                <h2><em>THINGS TO SEE</em></h2>
                <br><br>
                <div class="slideshow-container">
                  <div class="mySlides fade">
                    <div class="numbertext">1 / 5</div>
                    <img src="https://images.adsttc.com/media/images/5954/08c4/b22e/38a8/8b00/03ef/large_jpg/9-bourse-1.jpg?1498679482" style="width:100%">
                    <div class="text">Exhibition A</div>
                  </div>
              
                  <div class="mySlides fade">
                    <div class="numbertext">2 / 5</div>
                    <img src="https://notleyhawkins.com/wp-content/uploads/2019/09/SON4862_low_opt_highpass.jpg" style="width:100%">
                    <div class="text">Exhibition B</div>
                  </div>
              
                  <div class="mySlides fade">
                    <div class="numbertext">3 / 5</div>
                    <img src="https://resourcemagonline.com/wp-content/uploads/2017/12/visitors-viewing-photographs-by-kenro-izu-in-the-exhibition-sacred-places-at-the-detroit-institute-of-arts-2008-photograph-by-eric-wheeler-for-the-detroit-institute-of-arts.jpg" style="width:100%">
                    <div class="text">Exhibition C</div>
                  </div>
                  <div class="mySlides fade">
                    <div class="numbertext">4 / 5</div>
                    <img src="https://www.exhibitionhub.com/wp-content/uploads/2019/10/DSC_4911.jpg" style="width:100%">
                    <div class="text">Exhibition D</div>
                  </div>
                  <div class="mySlides fade">
                    <div class="numbertext">5 / 5</div>
                    <img src="https://offloadmedia.feverup.com/secretvancouver.co/wp-content/uploads/2021/10/05050408/sistinechapel-1024x819.jpeg" style="width:100%">
                    <div class="text">Exhibition E</div>
                  </div>
                  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                  <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
                <br>
                <div style="text-align:center">
                  <span class="dot" onclick="currentSlide(1)"></span>
                  <span class="dot" onclick="currentSlide(2)"></span>
                  <span class="dot" onclick="currentSlide(3)"></span>
                  <span class="dot" onclick="currentSlide(4)"></span>
                  <span class="dot" onclick="currentSlide(5)"></span>
                </div>
                <script>
                  let slideIndex = 1;
                showSlides(slideIndex);
              
                function plusSlides(n) {
                  showSlides(slideIndex += n);
                }
              
                function currentSlide(n) {
                  showSlides(slideIndex = n);
                }
              
                function showSlides(n) {
                  let i;
                  let slides = document.getElementsByClassName("mySlides");
                  let dots = document.getElementsByClassName("dot");
                  if (n > slides.length) {slideIndex = 1}
                  if (n < 1) {slideIndex = slides.length}
                  for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                  }
                  for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace("active", "");
                  }
                  slides[slideIndex-1].style.display = "block";
                  dots[slideIndex-1].className += "active";
                }
                </script>  
          </div>
          <script>
            /* Set the width of the side navigation to 250px and the left margin of the page content to 250px */
            function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
            }

            /* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
            function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
            }
          </script>
      </div>
      <br><br>
      <div id="event"></div>
      <div class="event-container">
            <h3 class="year" style="color: goldenrod;"><em>~EVENTS~</em></h3><br>
            <div class="event">
                <a href="#">
                <div class="event-left">
                <div class="date">5</div>
                <div class="month">Nov</div></a>

                </div>
                <div class="event-right">
                   <div><h3 class="event-title">WORKSHOP:<br>Contemporary Art Analysis</h3></div>
                    
                    <div class="event-description">
                    </br>
                        <p style="text-align:right">Workshop to provide help to those who intellectual or developmental disabilities understand and appreciate new age contemporary art. Hosted by David Davidson.</p>
                    
                    </div>
                </div>
            </div>
            <div class="event">
                <a href="#">
                <div class="event-left">
                <div class="date">9</div>
                <div class="month">Nov</div></a>

                </div>
                <div class="event-right">
                   <div><h3 class="event-title">Artist Showcase:<br>Hilary Pecis</h3></div>
                    
                    <div class="event-description">
                    </br>
                        <p style="text-align:right">Showcasing Hilary Pecis's still life and landscape paintings inspired by the vibrant storybook quality, incarnating domestic vignettes and week markets in characterful frame.  </p>
                    
                    </div>
                </div>
            </div>
            <div class="event">
                <a href="#">
                <div class="event-left">
                <div class="date">14</div>
                <div class="month">Nov</div></a>

                </div>
                <div class="event-right">
                   <div><h3 class="event-title">WORKSHOP:<br>Introduction to Drawing</h3></div>
                    
                    <div class="event-description">
                    </br>
                        <p style="text-align:right">We will be running a workshop that introduces students to a range of media and techniques in drawing, as well as different application methods to develop an awareness of line, volume and form.</p>
                    
                    </div>
                </div>
            </div>
            <div class="event">
                <a href="#">
                <div class="event-left">
                <div class="date">22</div>
                <div class="month">Nov</div></a>

                </div>
                <div class="event-right">
                   <div><h3 class="event-title">ARTIST SHOWCASE:<br>Leonardo Da Vinci</h3></div>
                    
                    <div class="event-description">
                    </br>
                        <p style="text-align:right">Leonardo Da Vinci was Renaissance painter, sculptor, architect, inventor, military engineer and draftsmans. In light of this event, Al Sole will resurrect Leonardo in order to study his great work.</p>
                    
                    </div>
                </div>
            </div>
            <div class="event">
                <a href="#">
                <div class="event-left">
                <div class="date">6</div>
                <div class="month">Dec</div></a>

                </div>
                <div class="event-right">
                   <div><h3 class="event-title">ARTIST SHOWCASE:<br>Shara Hughes</h3></div>
                    
                    <div class="event-description">
                    </br>
                        <p style="text-align:right">Shara Hughes's brushstrokes freewheel across the canvas in smorgaboard of colour. She is a New York-based artist; that has a bold signature that riffs on dramatic tones and dreamlike manifestations.</p>
                    
                    </div>
                </div>
            </div>
            <div class="event">
                <a href="#">
                <div class="event-left">
                <div class="date">16</div>
                <div class="month">Dec</div></a>

                </div>
                <div class="event-right">
                   <div><h3 class="event-title">WORKSHOP:<br>Sculpting</h3></div>
                    
                    <div class="event-description">
                    </br>
                        <p style="text-align:right">Create your own abstract steel sculpture wil basic tig welding knowledge.</p>
                    
                    </div>
                </div>
            </div>
            <div class="event">
                <a href="#">
                <div class="event-left">
                <div class="date">18</div><br>
                <div class="month"><br>Dec</div>
                </a>
                </div>
                <div class="event-right">
                   <div><h3 class="event-title">ARTIST SHOWCASE:<br>Issy Wood</h3></div>
                    
                    <div class="event-description">
                    </br>
                        <p style="text-align:right">Issy Wood's kafkaesque paintings put people and everyday objects in macabre avatars. We are excited to announce that Issy Wood will be showcasing for three days to show some of her most inspiring pieces. </p>
                    
                    </div>
                </div>
            </div>
            <div class="event">
                <a href="#">
                <div class="event-left">
                <div class="date">31</div>
                <div class="month">Dec</div>
            </a>
                </div>
                <div class="event-right">
                    <h3 class="event-title">WORKSHOP:<br>Introduction to Painting</h3>
                    <div class="event-description">
                        <p style="text-align:right">This workshop introduces students to a variety of ranges for painting techniques through exercises designed to develope a awareness of line, volume, form and colour. </p>
                    
                    </div>
                </div>
                
            </div>
            <h3 class="year">2023</h3>
            <div class="event">
                <a href="#">
                <div class="event-left">
                <div class="date">13</div>
                <div class="month">Jan</div></a>
                </div>
                <div class="event-right">
                    <h3 class="event-title">ARTIST SHOWCASE:<br>Tomokazu Matsuyma</h3>
                    <div class="event-description">
                     <p style="text-align:right">The New York-based artist has a psychedelic samural and outlandish cowboys style, his center of inspiration is based around pop art and manga. Come join us for a three day live painting session with Tomokazu Matsuyama. </p>
                    </div>
    
                </div>
            </div>
            <div class="event">
                <div class="event-left">
                <a href="#">
                <div class="date">23</div>
                <div class="month">Jan</div>
                </a>
                </div>
                <div class="event-right">
                    <h3 class="event-title">WORKSHOP:<br> Introduction to Photography </h3>
                    <div class="event-description">
                    <p style="text-align:right"> Hosted by Robert Down a master photographer. He will be teaching you the basic concept of photography like Aperture, shutter speed, ISO speed, exposure.</p>
                    
                    </div>
                </div>
            </div>
          <a href="calendar_index.php">Event Calendar</a>
          <br>
          <a href="TicketBooth.php">Ticket Booth</a>
          <br>
        </div>
      <div class="map">
        <h2><em>LOCATION</em></h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2872.7733932563638!2d-78.8971547850135!3d43.943363241637755!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d51b90070d3bcf%3A0x7b25cbd2c2e58660!2sOntario%20Tech%20University%2FDurham%20College!5e0!3m2!1sen!2sca!4v1669694921174!5m2!1sen!2sca" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      <div id="address">
        <h2><em>Address: 2000 Simcoe St N, Oshawa, ON L1G 0C5 </em></h2>
        <ul>
            <ol><h1> GALLERY HOURS </h1></ol>
            <ol><p><em>SUNDAY:</em>     CLOSED</p></ol>
            <ol><p><em>MONDAY:</em>   10:30 AM-5:30 PM</p></ol>
            <ol><p><em>TUESDAY:</em>    10:30 AM-5:00 PM</p></ol>
            <ol><p><em>WEDNESDAY:</em>  10:30 AM-8:00 PM</p></ol>
            <ol><p><em>THURSDAY:</em>   10:30 AM-5:00 PM</p></ol>
            <ol><p><em>FRIDAY:</em>     10:30 AM-8:00 PM</p></ol>
            <ol><p><em>SATURDAY:</em>   10:30 AM-5:30 PM</p></ol>
            
        </ul>
    </div>
      
      </div>
      
<div id="footer"></div>
      <div class="footer">
        <img src="logo.jpg" alt="logo" class="right"  width=" 100px" height="100px">
        <p>Thank You for Visiting Al Sole!</p>
        
        <div class= "contact">
        <footer>
        <h1><em>CONTACT INFO<em></h1>
        <p><em>Alveena.Shrestha@ontariotechu.net</em></p>
        <p><em>Verina.Bouls@ontariotechu.net</em></p>
        <p><em>Cameron.Edwards@ontariotechu.net</em></p>
        <p><em>Noah.Toma@ontariotechu.net</em></p>
        <p><em>Phone Number: </em>1-800-801-8181</p></footer>
        </div>

        <div class="T"><footer><p>Copyright &copy 2022 SOFE2800U <br> Al SOLE Production <br> All Rights Reserved</p></footer></div>
      </div>
      </div>
    
</body>

</html>