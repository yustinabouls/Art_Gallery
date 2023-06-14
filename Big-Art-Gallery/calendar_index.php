<?php 

 include("MenuBar.php");

?>
<html>

<head>
    <title>Gallery Events-Calendar</title>
    <link rel="stylesheet" href="calendar_style.css">
    <link rel="stylesheet" href="evo-calendar.min.css">
    <link rel="stylesheet" href="evo-calendar.midnight-blue.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
</head>
<body>

<div class ="hero">

<div id = "calendar"></div>

</div>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
<script src="evo-calendar.min.js"></script>

<script>

$(document).ready(function() { //initializes the calendar once the pages DOM is ready
    $('#calendar').evoCalendar({

        theme: "Midnight Blue",
        calendarEvents: [
      {
        id: 'event', // Event's ID (required)
        name: "Relaxed Visits", // Event name (required)
        date: "November/3/2022", // Event date (required)
        description:"This is a time for neurodiverse visitors with sensory and communication disorders, people with learning disabilities, or those who simply want a more relaxed experience to visit",
        type: "event", // Event type (required)
        color: "#808080"
      },{
        id: 'event', // Event's ID (required)
        name: "Relaxed Visits", // Event name (required)
        date: "November/10/2022", // Event date (required)
        description:"This is a time for neurodiverse visitors with sensory and communication disorders, people with learning disabilities, or those who simply want a more relaxed experience to visit",
        type: "event", // Event type (required)
        color: "#808080"
      },{
        id: 'event', // Event's ID (required)
        name: "Relaxed Visits", // Event name (required)
        date: "November/17/2022", // Event date (required)
        description:"This is a time for neurodiverse visitors with sensory and communication disorders, people with learning disabilities, or those who simply want a more relaxed experience to visit",
        type: "event", // Event type (required)
        color: "#808080"
      },{
        id: 'event', // Event's ID (required)
        name: "Relaxed Visits", // Event name (required)
        date: "November/24/2022", // Event date (required)
        description:"This is a time for neurodiverse visitors with sensory and communication disorders, people with learning disabilities, or those who simply want a more relaxed experience to visit",
        type: "event", // Event type (required)
        color: "#808080"
      },{
        id: 'event', // Event's ID (required)
        name: "Relaxed Visits", // Event name (required)
        date: "December/1/2022", // Event date (required)
        description:"This is a time for neurodiverse visitors with sensory and communication disorders, people with learning disabilities, or those who simply want a more relaxed experience to visit",
        type: "event", // Event type (required)
        color: "#808080"
      },{
        id: 'event', // Event's ID (required)
        name: "Relaxed Visits", // Event name (required)
        date: "December/8/2022", // Event date (required)
        description:"This is a time for neurodiverse visitors with sensory and communication disorders, people with learning disabilities, or those who simply want a more relaxed experience to visit",
        type: "event", // Event type (required)
        color: "#808080"
      },{
        id: 'event', // Event's ID (required)
        name: "Relaxed Visits", // Event name (required)
        date: "December/15/2022", // Event date (required)
        description:"This is a time for neurodiverse visitors with sensory and communication disorders, people with learning disabilities, or those who simply want a more relaxed experience to visit",
        type: "event", // Event type (required)
        color: "#808080"
      },{
        id: 'event', // Event's ID (required)
        name: "Relaxed Visits", // Event name (required)
        date: "December/22/2022", // Event date (required)
        description:"This is a time for neurodiverse visitors with sensory and communication disorders, people with learning disabilities, or those who simply want a more relaxed experience to visit",
        type: "event", // Event type (required)
        color: "#808080"
      },{
        id: 'event', // Event's ID (required)
        name: "Relaxed Visits", // Event name (required)
        date: "December/29/2022", // Event date (required)
        description:"This is a time for neurodiverse visitors with sensory and communication disorders, people with learning disabilities, or those who simply want a more relaxed experience to visit",
        type: "event", // Event type (required)
        color: "#808080"
      },{
        id: 'event', // Event's ID (required)
        name: "Relaxed Visits", // Event name (required)
        date: "January/5/2023", // Event date (required)
        description:"This is a time for neurodiverse visitors with sensory and communication disorders, people with learning disabilities, or those who simply want a more relaxed experience to visit",
        type: "event", // Event type (required)
        color: "#808080"
      },{
        id: 'event', // Event's ID (required)
        name: "Relaxed Visits", // Event name (required)
        date: "January/12/2023", // Event date (required)
        description:"This is a time for neurodiverse visitors with sensory and communication disorders, people with learning disabilities, or those who simply want a more relaxed experience to visit",
        type: "event", // Event type (required)
        color: "#808080"
      },{
        id: 'event', // Event's ID (required)
        name: "Relaxed Visits", // Event name (required)
        date: "January/19/2023", // Event date (required)
        description:"This is a time for neurodiverse visitors with sensory and communication disorders, people with learning disabilities, or those who simply want a more relaxed experience to visit",
        type: "event", // Event type (required)
        color: "#808080"
      },{
        id: 'event', // Event's ID (required)
        name: "Relaxed Visits", // Event name (required)
        date: "January/26/2023", // Event date (required)
        description:"This is a time for neurodiverse visitors with sensory and communication disorders, people with learning disabilities, or those who simply want a more relaxed experience to visit",
        type: "event", // Event type (required)
        color: "#808080"
      },{
        id: 'event1', // Event's ID (required)
        name: "Artist Showcase", // Event name (required)
        date: "November/9/2022", // Event date (required)
        description:"Upcoming Artist Hilary Pecis will be giving an engaging talk about her art and her inspiration as well as a live painting session where she will be showing off her ground-breaking techniques.",
        type: "event", // Event type (required)
        color: "#F5F5DC"
      },
      {
        id: 'event2', // Event's ID (required)
        name: "Artist Showcase", // Event name (required)
        date: "November/22/2022", // Event date (required)
        description:"For this special event we have resurrected Leonardo da Vinci and he is coming to our gallery to discuss some of his most famous works and finally explain his genius in person for all those lucky enough to get a ticket",
        type: "event", // Event type (required)
        color: "#F5F5DC"
      },{
        id: 'event3', // Event's ID (required)
        name: "Artist Showcase", // Event name (required)
        date: "December/6/2022", // Event date (required)
        description:"Breakout Artist Shara Hughes known for her bright and inspiring abstract paintings will be coming to our gallery to give a sneak peak at some of her unrealesed work as well as sign autographs, be sure to get your tickets",
        type: "event", // Event type (required)
        color: "#F5F5DC"
      },{
        id: 'event4', // Event's ID (required)
        badge: "11/18 - 11/20", // Event badge (optional)
        name: "Artist Showcase", // Event name (required)
        date: ["December/18/2022", "December/20/2022"], // Event date (required)
        description:"Issy Woods surrealist paintings will change your life forever, be sure you see her when she stops by for a showcase of her most famous peices as well as her seminar on what makes art surreal",
        type: "event", // Event type (required)
        color: "#F5F5DC"
      }, {
        id: 'event5',
        name: "Artist Showcase",
        badge: "01/13 - 01/15", // Event badge (optional)
        date: ["January/13/2023", "January/15/2023"], // Date range
        description: "Tomokazu Matsuyama is a Japanese contemporary visual artist who will be coming to our gallery for 3 days to showcase a new project of his. He will be doing a 3 day live painting session to test his abilities. For more information check his event below.", // Event description (optional)
        type: "event",
        color: "#F5F5DC"
      },
      {
        id: 'event6', // Event's ID (required)
        name: "Workshops", // Event name (required)
        date: "November/5/2022", // Event date (required)
        description:"Contemporary Art Analysis: This workshop series supports participants who identify as having intellectual and developmental disabilities. In this session, we’ll delve into the sometimes playful, sometimes hard-hitting world of contemporary art. We’ll explore how certain artists move beyond traditional painting, drawing or sculpting techniques and use unique materials to share important ideas with the public. ",
        type: "event", // Event type (required)
        color: "#FFD700"
      },{
        id: 'event7', // Event's ID (required)
        name: "Workshops", // Event name (required)
        date: "November/14/2022", // Event date (required)
        description:"Introduction to Drawing: This course introduces students to a range of drawing techniques through exercises designed to develop an awareness of line, volume, form and colour. Working with pencil, graphite, and charcoal.",
        type: "event", // Event type (required)
        color: "#FFD700"
      },{
        id: 'event8', // Event's ID (required)
        name: "Workshops", // Event name (required)
        date: "December/16/2022", // Event date (required)
        description:"Sculpture Explorations: In this course, students will work with wire and polymer clay or steel to study of the human form. They will develop skills of observation and proportion, while working with a life model. In addition to skill development, contemporary and historical approaches to figurative sculpture will be discussed.",
        type: "event", // Event type (required)
        color: "#FFD700"
      },{
        id: 'event9', // Event's ID (required)
        name: "Workshops", // Event name (required)
        date: "December/31/2022", // Event date (required)
        description:"Introduction to Painting: Learn new painting techniques and experiment with unconventional materials while being inspired by contemporary artists and works in our collection that stretch the boundaries of the medium. ",
        type: "event", // Event type (required)
        color: "#FFD700"
      },{
        id: 'event10', // Event's ID (required)
        name: "Workshops", // Event name (required)
        badge: "01/23 - 01/25", // Event badge (optional)
        date: ["January/23/2023", "January/25/2023"],
        description:"Introduction to Photography: Learn to become a creative genius with a camera in this introductory course to digital photography. Students will learn how to make strong compositions, shoot in challenging lighting situations and correct exposure. Students are required to bring their own DSLR cameras for each class, along with their camera manuals for instructional assistance. This class is suitable for beginners. ",
        type: "event", // Event type (required)
        color: "#FFD700"
      }
    ] 
    })
})
</script>
<div id="bottomtext">
<h1 style="color: #F5F5DC">Artist Showcases</h1>
<p>
  <a href="event1" target="_blank">Event 1: Hilary Pecis</a> <br>
  <a href="event2" target="_blank">Event 2: Leonardo da Vinci</a> <br>
  <a href="event3" target="_blank">Event 3: Shara Hughes</a> <br>
  <a href="event4" target="_blank">Event 4: Issy Wood</a> <br>
  <a href="event5" target="_blank">Event 5: Tomokazu Matsuyama</a> <br>
  <br>
</p>
<h1 style="color:#FFD700">Workshops</h1>
<p>
  <a href="event6" target="_blank">Event 6: Contemporary Art Analysis Workshop</a> <br>
  <a href="event7" target="_blank">Event 7: Introduction to Drawing Workshops</a> <br>
  <a href="event8" target="_blank">Event 8: Introduction to Sculpting Workshop</a> <br>
  <a href="event9" target="_blank">Event 9: Introduction to Painting Workshop</a> <br>
  <a href="event10" target="_blank">Event 10: Introcution to Photography</a> <br>
  <br>
</p>
<h1 style="color:#006300">Event Shopping</h1>
<p><a href="TicketBooth.php" target="_blank">Ticket Booth</a><br><br></p>
</div>
</body>
</html>