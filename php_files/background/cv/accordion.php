<link rel="stylesheet" href="/styles/cv.css">

<main class="cv">
   
  <!-- The sidebar -->
  <div class="sidebar">
    <button class="accordion personal_profile_b"><h2 title="Personal Profile">Personal Profile</h2></button>
      <div class="panel" id="personal_profile">
        <?php include "personal_profile.php" ?> </div>
    <button class="accordion skills_b"><h2 title="Skills"> Skills</h2></button>
      <div class="panel" id="skill">
        <?php include "skills.php" ?> </div>
    <button class="accordion education_b"><h2 title="Education">Education</h2></button>
      <div class="panel" id="education">
        <?php include "education.php" ?> </div>
    <button class="accordion work_exp_b"> <h2 title="Work Experience"> Work Experience</h2></button>
      <div class="panel" id="work_exp">
        <?php include "work_exp.php" ?> </div>
  </div>

  <div class="text_panel">
    <!-- this will displau the "panel"-->
  </div>

</main>
<script></script>
