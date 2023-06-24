<?php 
 include("MenuBar.php");

 $ticketid = rand(00000001, 99999999);
 ?>

<hml lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket</title>
    <link rel="stylesheet" href="FinalTicketcss.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <script src="TicketBooth.js"></script>
</head>
<body>
   
 <div class="ticket">
    <div class="left">
      <div class="image">
        <p class = "event1">
            <span>AL SOLE</span>
            <span>AL SOLE</span>
            <span>AL SOLE</span>
        </p>
    </div>
        <div class="ticket-number">
            <p>#<?php
            echo $ticketid;
            ?></p>
            <div class="ticket-info">
                <p class = "date">
                    <?php
                    date_default_timezone_set("America/Toronto");
                    echo date("l, y/m/d - h:i:s a");
                    ?>
                </p>
                <div class="show-name" style="margin-left: 50px; text-align: left;">
                    <h1>A.S. Exclusive Event</h1>
                    
                </div>
                <div class="time">
                    <p>8:00 PM<span> - </span>11:00 PM</p>
                    <p>DOORS <span>@</span>7:50 PM</p>
                </div>
                <p class="location">
                    <span>2000 Simcoe St N, Oshawa, ON L1G 0C5</span>
                </p>
            </div>
        </div>
        
        <div class="right">
        <p class = "event1">
            <span>AL SOLE</span>
            <span>AL SOLE</span>
            <span>AL SOLE</span>
            
        </p>
        <div class="right-info-container">
            <div class="showname">
                <br><br><br><br>
                <h1>AL SOLE - EVENT</h1>
            </div>
            <div class="time" style="font-size: small;">
                <p>8:00 PM<span>-</span>11:00 PM</p>
                <P>DOORS @7:50 PM</P>
                <p>#<?php
                    echo $ticketid;
                    ?>
                </p>
            </div>
            <div class="barcode">
                <img src= "https://blog.hubspot.com/hs-fs/hubfs/Google%20Drive%20Integration/DRAFT%20how%20to%20get%20a%20qr%20code-Nov-16-2022-06-26-37-4642-PM.jpeg?width=381&height=378&name=DRAFT%20how%20to%20get%20a%20qr%20code-Nov-16-2022-06-26-37-4642-PM.jpeg" alt="QR code">
                 
            </div>
        
        </div>
      </div>  
    </div>  
</body>
</div>

</html>
<footer>
    
    <div class="print">
        <h1>Print Ticket?</h1>
        <button onclick="window.print()">Print</button>
    </div>
</footer>