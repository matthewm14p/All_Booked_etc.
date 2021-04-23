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
       <left>~Small Duck in the Big Bathtub~
         <br> By: James Hopper</br></left>
       <br> This is a story about a Rubber Duck named Brian who fell into the bathtub, and is now floating for his life in the little water left in the tub while being chased by bugs and insects who are trying to consume him and his rubber body.</br>
       </p>
       
        <p>
       <left>~A Mutually Assured Attachment~
         <br> By: Victor Nikiforov</br></left>
       <br> The story of two friends, just friends. They are nothing more, barely friends really. More so of a familiar face. They rarely talk outside of the approprate amount. The two are simply very quiet. Neither craves friendship, but for group projects, they know their best chance is one another. One could almost say that they are just using one another to save time with things like projects. You could possibly say that these two not-friends have a mutually assured attachment. Funny how that works. </br>
      </p>

        <p>
       <left>~Let's Out-pizza the Hutt~
         <br> By: Jabba the Hutt</br></left>
       <br> A classic Halmark plot really.</br>
      </p>

      <p>
      <left> ~Poison Lead Pencil~
        <br> By: Dan Timpy</br></left>
       <br> People in the town of Salem have been dropping like flies. When a wanna be Sherlock comes to town, the deaths increase... </br>
      </p>

      <p>
       <left>~Trapped in the Closet~
         <br> By: R Kelly</br></left>
       <br> Just the story of a girl, trapped in a closet. Yeah that's it. No mythical worlds here. No adventure. Just a girl in a dark closet playing mincraft and her pet dog just died.</br>
      </p></div>
  <br>
  <br>
  <br>
      </body>
      </html>
