<link rel="stylesheet" href="/styles/nav_menu.css">

<nav class="menu_bar">
  <ul>
    <li id="home" class="menu_item"><a href="home.php">Home</a></li>
    <!--<li id="menu_item_projects" class="menu_item"><a href="htm_files/projects.html">Projects</a></li>-->
    <li id="cv" class="menu_item"><a href="/php_files/cv.php">My CV</a></li>
    <li id="contact" class="menu_item"><a href="/php_files/contact.php">Contact Me</a></li>
  </ul>
</nav>

<script>

  function activeTab(){
    var  allBtns, tab ,tab_id;
    tab = document.getElementsByTagName("body");
    tab_id = tab[0].className;
    // check all buttons 
    allBtns = document.getElementsByClassName("menu_item");
    for (i = 0; i <  allBtns.length; i++) {
        if(tab_id == allBtns[i].id){
          allBtns[i].className += " active";
      }
    }
  }
  //activate this tab
  activeTab();
</script>
