<?php include("connect.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    

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
    <h1 class="storeName">All Booked<h1>
      
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
      <div class="content">
<center>
<?php
mysqli_select_db($mySQLI, "cchs_mmutter");

$result = mysqli_query($mySQLI, "SELECT * FROM books");

echo "<table>
<tr>
<th>Books</th>
</tr>

<tr>
<th>Title</th>
<th>Author</th>
<th>Genre</th>
<th>Price</th>
</tr>";

while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
  {
  echo "<tr>";
  echo "<td>" . $row['book_title'] . "</td>";
  echo "<td>" . $row['author'] . "</td>";
  echo "<td>" . $row['genre'] . "</td>";
  echo "<td>" . $row['price'] . "</td>";
  echo "</tr>";
  }

echo "</table>";


echo('<br>');


$result_movies = mysqli_query($mySQLI, "SELECT * FROM movies");

echo "<table>
<tr>
<th>Movies</th>
</tr>

<tr>
<th>Title</th>
<th>Genre</th>
<th>Price</th>
</tr>";

while($row_movies = mysqli_fetch_array($result_movies, MYSQLI_ASSOC))
  {
  echo "<tr>";
  echo "<td>" . $row_movies['movie_title'] . "</td>";
  echo "<td>" . $row_movies['movie_genre'] . "</td>";
  echo "<td>" . $row_movies['movie_price'] . "</td>";
  echo "</tr>";
  }

echo "</table>";

echo('<br>');


$result_tres = mysqli_query($mySQLI, "SELECT * FROM games");

echo "<table>
<tr>
<th>Games</th>
</tr>

<tr>
<th>Name</th>
<th>Creator</th>
<th>Genre</th>
<th>Price</th>
</tr>";

while($row_tres = mysqli_fetch_array($result_tres, MYSQLI_ASSOC))
  {
  echo "<tr>";
  echo "<td>" . $row_tres['game_title'] . "</td>";
  echo "<td>" . $row_tres['creator'] . "</td>";
  echo "<td>" . $row_tres['game_genre'] . "</td>";
  echo "<td>" . $row_tres['game_price'] . "</td>";
  echo "</tr>";
  }

echo "</table>";


echo('<br>');


$result_cuatro = mysqli_query($mySQLI, "SELECT * FROM music");

echo "<table>
<tr>
<th>Music</th>
</tr>

<tr>
<th>Album</th>
<th>Artist</th>
<th>Genre</th>
<th>Price</th>
</tr>";

while($row_cuatro = mysqli_fetch_array($result_cuatro, MYSQLI_ASSOC))
  {
  echo "<tr>";
  echo "<td>" . $row_cuatro['album_name'] . "</td>";
  echo "<td>" . $row_cuatro['artist'] . "</td>";
  echo "<td>" . $row_cuatro['album_genre'] . "</td>";
  echo "<td>" . $row_cuatro['album_price'] . "</td>";
  echo "</tr>";
  }

echo "</table>";


echo('<br>');


$result_cinco = mysqli_query($mySQLI, "SELECT * FROM misc");

echo "<table>
<tr>
<th>Misc.</th>
</tr>

<tr>
<th>Product</th>
<th>Type</th>
<th>Price</th>
</tr>";

while($row_cinco = mysqli_fetch_array($result_cinco, MYSQLI_ASSOC))
  {
  echo "<tr>";
  echo "<td>" . $row_cinco['product_name'] . "</td>";
  echo "<td>" . $row_cinco['product_type'] . "</td>";
  echo "<td>" . $row_cinco['product_price'] . "</td>";
  echo "</tr>";
  }

echo "</table>";

mysqli_close($mySQLI);
?>

      </div>
      </body>
      </html>


<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative&family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Shippori+Mincho:wght@500&display=swap" rel="stylesheet">
</head>

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
    <h1 class="storeName">All Booked<h1>
      
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
      <div class="content">
<center>
<?php
mysqli_select_db($mySQLI, "cchs_mmutter");

$result = mysqli_query($mySQLI, "SELECT * FROM books");

echo "<table>
<tr>
<th>Books</th>
</tr>

<tr>
<th>Title</th>
<th>Author</th>
<th>Genre</th>
<th>Price</th>
</tr>";

while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
  {
  echo "<tr>";
  echo "<td>" . $row['book_title'] . "</td>";
  echo "<td>" . $row['author'] . "</td>";
  echo "<td>" . $row['genre'] . "</td>";
  echo "<td>" . $row['price'] . "</td>";
  echo "</tr>";
  }

echo "</table>";


echo('<br>');


$result_movies = mysqli_query($mySQLI, "SELECT * FROM movies");

echo "<table>
<tr>
<th>Movies</th>
</tr>

<tr>
<th>Title</th>
<th>Genre</th>
<th>Price</th>
</tr>";

while($row_movies = mysqli_fetch_array($result_movies, MYSQLI_ASSOC))
  {
  echo "<tr>";
  echo "<td>" . $row_movies['movie_title'] . "</td>";
  echo "<td>" . $row_movies['movie_genre'] . "</td>";
  echo "<td>" . $row_movies['movie_price'] . "</td>";
  echo "</tr>";
  }

echo "</table>";

echo('<br>');


$result_tres = mysqli_query($mySQLI, "SELECT * FROM games");

echo "<table>
<tr>
<th>Games</th>
</tr>

<tr>
<th>Name</th>
<th>Creator</th>
<th>Genre</th>
<th>Price</th>
</tr>";

while($row_tres = mysqli_fetch_array($result_tres, MYSQLI_ASSOC))
  {
  echo "<tr>";
  echo "<td>" . $row_tres['game_title'] . "</td>";
  echo "<td>" . $row_tres['creator'] . "</td>";
  echo "<td>" . $row_tres['game_genre'] . "</td>";
  echo "<td>" . $row_tres['game_price'] . "</td>";
  echo "</tr>";
  }

echo "</table>";


echo('<br>');


$result_cuatro = mysqli_query($mySQLI, "SELECT * FROM music");

echo "<table>
<tr>
<th>Music</th>
</tr>

<tr>
<th>Album</th>
<th>Artist</th>
<th>Genre</th>
<th>Price</th>
</tr>";

while($row_cuatro = mysqli_fetch_array($result_cuatro, MYSQLI_ASSOC))
  {
  echo "<tr>";
  echo "<td>" . $row_cuatro['album_name'] . "</td>";
  echo "<td>" . $row_cuatro['artist'] . "</td>";
  echo "<td>" . $row_cuatro['album_genre'] . "</td>";
  echo "<td>" . $row_cuatro['album_price'] . "</td>";
  echo "</tr>";
  }

echo "</table>";


echo('<br>');


$result_cinco = mysqli_query($mySQLI, "SELECT * FROM misc");

echo "<table>
<tr>
<th>Misc.</th>
</tr>

<tr>
<th>Product</th>
<th>Type</th>
<th>Price</th>
</tr>";

while($row_cinco = mysqli_fetch_array($result_cinco, MYSQLI_ASSOC))
  {
  echo "<tr>";
  echo "<td>" . $row_cinco['product_name'] . "</td>";
  echo "<td>" . $row_cinco['product_type'] . "</td>";
  echo "<td>" . $row_cinco['product_price'] . "</td>";
  echo "</tr>";
  }

echo "</table>";

mysqli_close($mySQLI);
?>

      </div>
      </body>
      </html>


<body>
    <h1 class="storeName">All Booked<h1>
      
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
      <div class="content">
<center>
<?php
mysqli_select_db($mySQLI, "cchs_mmutter");

$result = mysqli_query($mySQLI, "SELECT * FROM books");

echo "<table>
<tr>
<th>Books</th>
</tr>

<tr>
<th>Title</th>
<th>Author</th>
<th>Genre</th>
<th>Price</th>
</tr>";

while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
  {
  echo "<tr>";
  echo "<td>" . $row['book_title'] . "</td>";
  echo "<td>" . $row['author'] . "</td>";
  echo "<td>" . $row['genre'] . "</td>";
  echo "<td>" . $row['price'] . "</td>";
  echo "</tr>";
  }

echo "</table>";


echo('<br>');


$result_movies = mysqli_query($mySQLI, "SELECT * FROM movies");

echo "<table>
<tr>
<th>Movies</th>
</tr>

<tr>
<th>Title</th>
<th>Genre</th>
<th>Price</th>
</tr>";

while($row_movies = mysqli_fetch_array($result_movies, MYSQLI_ASSOC))
  {
  echo "<tr>";
  echo "<td>" . $row_movies['movie_title'] . "</td>";
  echo "<td>" . $row_movies['movie_genre'] . "</td>";
  echo "<td>" . $row_movies['movie_price'] . "</td>";
  echo "</tr>";
  }

echo "</table>";

echo('<br>');


$result_tres = mysqli_query($mySQLI, "SELECT * FROM games");

echo "<table>
<tr>
<th>Games</th>
</tr>

<tr>
<th>Name</th>
<th>Creator</th>
<th>Genre</th>
<th>Price</th>
</tr>";

while($row_tres = mysqli_fetch_array($result_tres, MYSQLI_ASSOC))
  {
  echo "<tr>";
  echo "<td>" . $row_tres['game_title'] . "</td>";
  echo "<td>" . $row_tres['creator'] . "</td>";
  echo "<td>" . $row_tres['game_genre'] . "</td>";
  echo "<td>" . $row_tres['game_price'] . "</td>";
  echo "</tr>";
  }

echo "</table>";


echo('<br>');


$result_cuatro = mysqli_query($mySQLI, "SELECT * FROM music");

echo "<table>
<tr>
<th>Music</th>
</tr>

<tr>
<th>Album</th>
<th>Artist</th>
<th>Genre</th>
<th>Price</th>
</tr>";

while($row_cuatro = mysqli_fetch_array($result_cuatro, MYSQLI_ASSOC))
  {
  echo "<tr>";
  echo "<td>" . $row_cuatro['album_name'] . "</td>";
  echo "<td>" . $row_cuatro['artist'] . "</td>";
  echo "<td>" . $row_cuatro['album_genre'] . "</td>";
  echo "<td>" . $row_cuatro['album_price'] . "</td>";
  echo "</tr>";
  }

echo "</table>";


echo('<br>');


$result_cinco = mysqli_query($mySQLI, "SELECT * FROM misc");

echo "<table>
<tr>
<th>Misc.</th>
</tr>

<tr>
<th>Product</th>
<th>Type</th>
<th>Price</th>
</tr>";

while($row_cinco = mysqli_fetch_array($result_cinco, MYSQLI_ASSOC))
  {
  echo "<tr>";
  echo "<td>" . $row_cinco['product_name'] . "</td>";
  echo "<td>" . $row_cinco['product_type'] . "</td>";
  echo "<td>" . $row_cinco['product_price'] . "</td>";
  echo "</tr>";
  }

echo "</table>";

mysqli_close($mySQLI);
?>

      </div>
      </body>
      </html>