<?php

include("MenuBar.php");

$outmssg = "Purchase Ticket";
$moremssg = "More Information";
$totalRet = 0;
?>

<!DOCTYPE html>




<html>
<head>
    <title>Ticket booth</title>
    <link rel="stylesheet" href="tbc.css">
   
</head>
<script src="TicketBooth.js" async></script>
<body>
  
  

  <h1 id="title">Ticket Booth!</h1>
  <video id="background-video" autoplay loop muted poster="https://cdn.mediatheque.epmoo.fr/link/smr18gfs3959n5s.webm4">
    <source src="https://cdn.mediatheque.epmoo.fr/link/smr18gfs3959n5s.webm4" type="video/mp4">
    </video>
  <video autoplay loop muted plays-inline>
    <source src="https://www.youtube.com/watch?v=JxpyYJEVITg">
  </video>
    <div class="ContentForEvents">
    
  <div id="ContentForEvents">
    <hr>
    <p>Scroll for more exciting events!</p>


    <!--EVENT 1-->
    <div class="event-row" id="event1">
    <h2>Artist Showcase</h2>
    <p>  Hilary Pecis’s still life and landscape paintings inspire a vibrant storybook quality, <br> 
      incarnating domestic vignettes and weekend markets in characterful frames, bright colours <br> 
      and Fauvist flourishes. <br>
         Featuring recognisable objects, her art breathes an air à la Matisse, romanticising the <br>
         quotidian and enveloping the observer in a familiar aura. <br> </p>
        <span class="event-price">$300</span>
        <!--link page to the event calender here-->
        <br><a href="">EVENT CALENDAR</a> <br> <br>

            <strong>Purchase a ticket?</strong> <br>
            <button onclick="ev1+=addEvent(1)" class="add_event" type="button">Add Event 1</button> <br>
            <script> var ev1 = 0;  </script>
            
         

    </div>
        
       
    </p>
    <hr> <hr>
    
     <!--EVENT 2-->
     <div class="event-row" id="event1">
      <h2>Artist Showcase</h2>
      <p> Leonardo da Vinci was a Renaissance painter, sculptor, architect, inventor, <br>
        military engineer and draftsman — the epitome of a true Renaissance man. <br>
          Gifted with a curious mind and a brilliant intellect, da Vinci studied the laws of science and nature, <br>
           which greatly informed his work. <br>
          <span class="event-price">$500</span>
          <!--link page to the event calender here-->
          <br><a href="">EVENT CALENDER</a> <br> <br>
  
              <strong>Purchase a ticket?</strong> <br>
              <button onclick="ev1+=addEvent(2)" class="add_event" type="button">Add Event 2</button> <br>
              
              
           
  
      </div>
          
         
      </p>
      <hr> <hr>


      <!--EVENT 3-->
      <div class="event-row" id="event1">
        <h2>Artist Showcase</h2>
        <p>  Noted for her kaleidoscopic abstractions of floating moons, <br>
          knobbly trees and effulgent sunlight, Shara Hughes's brushstrokes freewheel <br>
          across the canvas in a smorgasbord of colour.The New York-based artist, who earned  <br>
          a BFA from the Rhode Island School of Design in 2004 and attended the Skowhegan School <br>
           of Painting and Sculpture in 2011, has a bold signature that riffs on dramatic tones and dreamlike manifestations. <br></p>
            <span class="event-price">$300</span>
            <!--link page to the event calender here-->
            <br><a href="">EVENT CALENDER</a> <br> <br>
    
                <strong>Purchase a ticket?</strong> <br>
               
                <button onclick="ev1+=addEvent(3)" class="add_event" type="button">Add Event 3</button> <br>
             
    
        </div>
            
           
        </p>
        <hr> <hr>


    <!--EVENT 4-->
    <div class="event-row" id="event1">
      <h2>Artist Showcase</h2>
      <p>  Issy Wood's Kafkaesque paintings put people and everyday objects in macabre avatars. <br>
           The American-born artist, whose style alludes to surrealism, finds inspiration in a <br>
           gallimaufry of items bequeathed to her by her maternal grandmother–including auction <br>
           catalogues of decades past. <br>
          <span class="event-price">$300</span>
          <!--link page to the event calender here-->
          <br><a href="">EVENT CALENDER</a> <br> <br>
  
              <strong>Purchase a ticket?</strong> <br>
              
              <button onclick="ev1+=addEvent(4)" class="add_event" type="button">Add Event 4</button> <br>
           
  
      </div>
          
         
      </p>
      <hr> <hr>

    <!--EVENT 5-->
    <div class="event-row" id="event1">
      <h2>Artist Showcase</h2>
      <p> 
      Psychedelic samurai and outlandish cowboys, Pop art and manga, Abstract Expressionism <br>
      and the Meiji era, and graffiti and woodblock printing are but a few of the influences that <br>
      characterise Tomokazu Matsuyama’s otherworldly canvases. The New York-based artist, who spent <br>
      his childhood between Japan and the United States, and received an MFA from New York's Pratt <br>
      Institute in 2004, doffs his hat to Eastern and Western art history and pop culture,<br>
</p>
          <span class="event-price">$400</span>
          <!--link page to the event calender here-->
          <br><a href="">EVENT CALENDER</a> <br> <br>
  
              <strong>Purchase a ticket?</strong> <br>
              
              <button onclick="ev1+=addEvent(5)" class="add_event" type="button">Add Event 5</button> <br>
           
  
      </div>
          
         
      </p>
      <hr> <hr>
    <!--EVENT 6-->
    <div class="event-row" id="event1">
      <h2>Workshop</h2>
      <p> 
      On November 5th we will be hosting a workshop to help those who have intellectual or <br> 
      devolopmental disabilities understand and appreciate new age contemporary art. <br>
      The workshop will be hosted by David Davidson and he will be discussing the importance <br>
      of visual analysis in art analysis. <br>
      </p>
          <span class="event-price">$80</span>
          <!--link page to the event calender here-->
          <br><a href="">EVENT CALENDER</a> <br> <br>
  
              <strong>Purchase a ticket?</strong> <br>
              <button onclick="ev1+=addEvent(6)" class="add_event" type="button">Add Event 6</button> <br>
           
  
      </div>
          
         
      </p>
      <hr> <hr>
    
     <!--EVENT 7-->
     <div class="event-row" id="event1">
      <h2>Introduction to Drawing</h2>
      <p> 
      On November 14th we will be running a workshop that introduces <br>
      students to a range of media and techniques in drawing, as well <br>
      as different application methods to develop an awareness of line, volume and form. <br>
      </p>
          <span class="event-price">$100</span>
          <!--link page to the event calender here-->
          <br><a href="">EVENT CALENDER</a> <br> <br>
  
              <strong>Purchase a ticket?</strong> <br>
              
              <button onclick="ev1+=addEvent(7)" class="add_event" type="button">Add Event 7</button> <br>
           
  
      </div>
          
         
      </p>
      <hr> <hr>


      <!--EVENT 8-->
      <div class="event-row" id="event1">
        <h2>Workshop: Sculpting</h2>
        <p> On December 16th Learn how to create your own abstract steel sculpture, <br>
          with basic tig welding knowledge. The Workshop will also consist of cutting, <br>
           forming, grinding and input on designing. <br></p>
            <span class="event-price">$100</span>
            <!--link page to the event calender here-->
            <br><a href="">EVENT CALENDER</a> <br> <br>
    
                <strong>Purchase a ticket?</strong> <br>
                
                <button onclick="ev1+=addEvent(8)" class="add_event" type="button">Add Event 8</button> <br>
             
    
        </div>
            
           
        </p>
        <hr> <hr>

    <!--EVENT 9-->
    <div class="event-row" id="event1">
      <h2>Introduction to Painting</h2>
      <p> On Decemeber 31st we will be hosting our intro to painting workshop. This course introduces <br>
        students to a range of painting techniques through exercises designed to develop an awareness <br>
        of line, volume, form and colour. Students will engage with a variety of projects while exploring <br>
        monochromatic painting, complimentary colors, and complementary contrast. <br></p>
          <span class="event-price">$100</span>
          <!--link page to the event calender here-->
          <br><a href="">EVENT CALENDER</a> <br> <br>
  
              <strong>Purchase a ticket?</strong> <br>
              
              <button onclick="ev1+=addEvent(9)" class="add_event" type="button">Add Event 9</button> <br>
           
  
      </div>

         
      </p>
      <hr> <hr>


    <!--EVENT 10-->
    <div class="event-row" id="event1">
      <h2>Introduction to Photography</h2>
      <p> This workshop will be hosted on January 23rd to 25th by Robert Dawn a master photographer. <br>
         He will be teaching you the basic concepts of photography like Aperture, shutter speed, ISO speed, <br>
         exposure. If you are interested in improving your photography skills or learning a new hobby be sure <br>
         to buy a ticket for our workshop. <br></p>
          <span class="event-price">$100</span>
          <!--link page to the event calender here-->
          <br><a href="">EVENT CALENDAR</a> <br> <br>
  
              <strong>Purchase a ticket?</strong> <br>
             
              
           
  
      </div>
          
         
      </p>
      <hr> <hr>
      <strong>Find total price?</strong> <br>
      <button onclick= "alert('Your total is $' + ev1)" class="add_event" type="button">Calculate Total</button> <br> <br>
      <strong>proceed with the payment?</strong> <br>
      
      <button onclick= "location.href = 'newuser.php';" type="button">YES!</button> <br>
      
    </div>
    </div>
       
        <hr>
        </div>
    </p>
    
  </div> 
</body>
</html> 
