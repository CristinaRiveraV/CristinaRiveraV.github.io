<link rel="stylesheet" href="/styles/cv.css">

<main class="cv">
   
  <!-- The sidebar -->
  <div class="sidebar">
    <button class="accordion active" id="personal_profile_b" onclick="changeToActive(this)"><h2 title="Personal Profile">Personal Profile</h2></button>
    
    <button class="accordion" id="skills_b" onclick="changeToActive(this)"><h2 title="Skills"> Skills</h2></button>
      
    <button class="accordion" id="education_b" onclick="changeToActive(this)"><h2 title="Education">Education</h2></button>
      
    <button class="accordion" id="work_exp_b" onclick="changeToActive(this)"> <h2 title="Work Experience"> Work Experience</h2></button>

  </div>

  <!--<div class="text_panel">
    <!- this will display the "panel" ->
  </div>-->
  <div class="panel text_panel" id="personal_profile">
    <?php include "personal_profile.php" ?> </div>
  <div class="panel" id="skill">
    <?php include "skills.php" ?> </div>
  <div class="panel" id="education">
    <?php include "education.php" ?> </div>
  <div class="panel" id="work_exp">
    <?php include "work_exp.php" ?> </div>
</main>

<script>

  //Change button css when clicked
  function changeToActive( button_clicked){
    var buttonscontent,tabcontent;
    // make all buttons incative
    buttonscontent = document.getElementsByClassName("accordion");
    for (i = 0; i <  buttonscontent.length; i++) {
      buttonscontent[i].className = "accordion";
    }
    //makee all panels inactive
    tabcontent = document.getElementsByClassName("panel");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].className = "panel";
      //make panel activee if it matches
      if(button_clicked.id.includes(tabcontent[i].id)){
        tabcontent[i].className += " text_panel";
      }
    }
    //make this button active
    button_clicked.className += " active";
  }
 
    
/*
var i;
for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  });
} */
</script>
