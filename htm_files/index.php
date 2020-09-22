<!DOCTYPE html>
<html lang="en">

<link rel="stylesheet" href="/styles/myfirststyle.css">
<link href="https://fonts.googleapis.com/css2?family=Bangers&family=Russo+One&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
<script src="myscript.js"></script>

<head>
  <meta charset="UTF-8">
  <meta name="description" content="portfolio - my first webpage">
  <meta name="keywords" content="HTML, CSS, JavaScript">
  <meta name="author" content="Cristina Rivera">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
  <title>Cristina's portfolio - Welcome</title>
</head>

<body >
  
  <header>
    Cristina Rivera
  </header>
  <!-- Creating a naveegation menu for the webpage-->
  
<?php 
  include "nav_menu.php";
?>

  
  <main class="home_page">
    <div class="introduction_text">
      <h1 title="Hello!"><samp> Hello World!</samp></h1>
      
      <h2 title="I'm a tooltip! :D"> Welcome to my <del>first</del> website &#129409;</h2>
      
      </div>
  </main>

  <footer >
    <ul>
      <li class="contact" id="email"><p>Email me at: cristina.rivera.valdez@gmail.com </p></li>
      <!--<li class="contact" id="mobile"><p>Mobile: 07759405300</p></li>-->
    </ul>
  </footer>

</body>
</html>