<?php include("connect.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative&family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Shippori+Mincho:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <h1 class="storeName">All Booked</h1>
      
    <div id="navbar">
  <a href="index.php">Home</a>
  <a href="newReleases.php">New Releases</a>
  <a href="catalog.php">Catalog</a>
</div>

<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
      
     <center><p> <div class="a"><div class="content"> 
         New Releases
       </p> </center>
       
       <p>  <div class="a"><div class="content"> 
       <left>Small Duck in the Big Bathtub
         <br> By:James Hopper</br></left>
       <br> This is a story about a Rubber Duck named Brian who fell into the bathtub, and is now floating for his life in the little water left in the tub while being chased by bugs and insects who are trying to consume him and his rubber body.</br>
       </p>
       
        <p>
       <left>A Mutually Assured Attachment
         <br> By:Nikolai Khruschev</br></left>
       <br> Everyday Alexandra asks her boyfriend if he loves her. His answer is, "do you?" Will they ever know...</br>
      </p>

        <p>
       <left>Let's Out-pizza the Hutt
         <br> By: Jabba the Hutt</br></left>
       <br> Bacon ipsum dolor amet pancetta brisket tail jerky sausage beef. Buffalo pastrami sirloin landjaeger ground round, flank capicola t-bone spare ribs beef kielbasa swine chislic shankle.</br>
      </p>

      <p>
      <left> Poison Lead Pencil
        <br> By: Dan Timpy</br></left>
       <br> Turducken porchetta tri-tip, pastrami filet mignon pork chop tenderloin corned beef kielbasa chuck cupim venison burgdoggen pig. Kevin pork belly bresaola salami.</br>
      </p>

      <p>
       <left>Trapped in the Closet
         <br> By: R Kelly</br></left>
       <br> Shoulder spare ribs bacon capicola, doner corned beef ball tip short ribs biltong.</br>
      </p></div>
  <br>
  <br>
  <br>
      </body>
      </html>