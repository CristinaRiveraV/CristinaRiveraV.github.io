<!DOCTYPE html>
<html lang="en">

<?php include "background/main_style.php" ?>
<link rel="stylesheet" href="/styles/contact.css">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="portfolio - my first webpage">
  <meta name="keywords" content="HTML, CSS, JavaScript">
  <meta name="author" content="Cristina Rivera">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
  <title>Cristina's portfolio - contact information</title>
  <script src="https://kit.fontawesome.com/982a230181.js" crossorigin="anonymous"></script>
  
</head>

<body class="contact">

  <?php include "background/header.php" ?>

 <?php 
    include "background/nav_menu.php";
 ?>

  <main>
    <!---
    <section >
      <div class="contactform">
      <form ><!-still need to add action="" and method="" 
        <br>
        <label for="formname" >*Full Name:</label>
        <input type="text" name="formname" required placeholder="* Full Name"><br>
        <label for="femail">*Email:</label>
        <input type="text" name="femail" required placeholder="* Email"><br>
        <label for="fmessage">*Message:</label> 
        <textarea name="fmessage" rows="10" cols="40" required placeholder="* Message"></textarea>  <br>
        <input type="submit" value="Send"><br>
        <p>* items are required.</p>
      </form>
      </div>
    </section>--->
    <section class="contactdetails">
      <article class="contact github">
        <article class="contact mobile">
          <p title="Mobile"><i class="fas fa-phone-alt"></i>Mobile: 07759405300</p>
        </article> 
        <a href="https://github.com/CristinaRiveraV" target="_blank" title="My Github"> <i class="fab fa-github fa-5x"></i></a>
        <a href="https://github.com/clr3" target="_blank" title="Old Github"><i class="fab fa-github-square fa-5x"></i></a>
      </article> 
      <article class="contact linkedin">
        <a href="https://www.linkedin.com/in/cristina-rivera-valdez/" target="_blank" title="Linkedin"> <i class="fab fa-linkedin fa-5x"></i></a>
      </article>      
      
       
     
    </section>
    
  </main>
  
  <?php  include "background/footer.php"; ?>  

</body>