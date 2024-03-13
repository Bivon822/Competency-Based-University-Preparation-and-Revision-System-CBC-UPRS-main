<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Application/Revision</title>
    <link rel="stylesheet" href="style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <style>
    
     </style>
   </head>
<body>
<div class="sidebar2">
    <div class="logo-details">
      <i class='bx bx-food-menu'></i>
        <div class="logo_name">Main Menu</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <li>
          <i class='bx bx-search' ></i>
         <input type="text" placeholder="Search...">
         <span class="tooltip">Search</span>
      </li>
      <li>
        <a href="Dashboard.php">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
         <span class="tooltip">Dashboard</span>
      </li>
     <li>
       <a href="user-profile.php">
        <i class='bx bx-user' ></i>
         <span class="links_name">Profile</span>
       </a>
       <span class="tooltip">Profile</span>
     </li>
     <li>
       <a href="Application.php">
        <i class='bx bxs-graduation'></i>
         <span class="links_name">Application/Revision</span>
       </a>
       <span class="tooltip">Application/Revision</span>
     </li>
     <li>
       <a href="courseRevision.php">
        <i class='bx bx-book-reader'></i>
         <span class="links_name">Course Revision</span>
       </a>
       <span class="tooltip">Course Revision</span>
     </li>
     <li>
       <a href="New-appllicant-form.php">
        <i class='bx bxs-book-open'></i>
         <span class="links_name">New Applicant</span>
       </a>
       <span class="tooltip">New Applicant</span>
     </li>
     <li>
       <a href="retrive_knec_data.php">
         <i class='bx bx-cog' ></i>
         <span class="links_name">Setting</span>
       </a>
       <span class="tooltip">Setting</span>
     </li>
     <li>
      <a href="#">
        <i class='bx bx-log-out' id="log_out" ></i>
        <span class="links_name">Logout</span>
      </a>
      <span class="tooltip">Logout</span>
    </li>
    </ul>
  </div>
  <section class="home-section">
  <form class="form-style-9" method="post" action="application_table.php">
    <div class="form-style-heading">
      <h3>Application Area</h3>
    </div>
    <ul>
    <li>
      <label for="" >Enter certificate S/N.:</label>
        <input type="text" name="cert_no" class="field-style field-split align-left" placeholder="Certificate S/N" required />
    </li>
    <li>
      <label for="">ID NO.</label>
        <input type="text" name="id_no" class="field-style field-split align-left" placeholder="Enter ID NO" />
    </li>
    <li>
      <label for="">First Name</label>
      <input type="text" name="first_name" class="field-style field-split align-left" placeholder="Enter first name" required />
    </li>
    <li>
      <label for="">Middle Name</label>
      <input type="text" name="middle_name" class="field-style field-split align-left" placeholder="Enter middle name" />
    </li>
    <li>
      <label for="">Last Name</label>
      <input type="text" name="last_name" class="field-style field-split align-left" placeholder="Enter last name" required/>
    </li>
    <li>
      <label for="">Email Address</label>
      <input type="email" name="email" class="field-style field-split align-left" placeholder="Enter email" required/>
    </li>
    <li>
      <label for="">Phone NO:</label>
      <input type="phone" name="phone" class="field-style field-split align-left" placeholder="Enter phone No." required maxlength="10" pattern="\d{10}" title="Must be 10 characters long"/>
    </li>
   <h3 class="select-university-header">Select University and a course for the options below:</h3>
  

 
   <div class="align-left">
    <span class="details">Option1:</span>
    <select id="sess1" name="sess1" class="col-75">
        <option value="">Select University</option>
        <?php
   include 'get_University.php';
   ?>
    </select><br><br>

    <span class="details">Option2:</span>
    <select id="sess2" name="sess2" class="col-75">
        <option value="">Select University</option>
           <?php
   include 'get_University.php';
   ?>
    </select><br><br>

    <span class="details">Option3:</span>
    <select id="sess3" name="sess3" class="col-75">
        <option value="">Select University</option>
          <?php
   include 'get_University.php';
   ?>
    </select>
</div>

<?php
include "action.php";
?>
<div class="align-right">
    <span class="details">Course 1:</span>
    <select id="course1" name="course1" class="col-75">
        <option value="">Select Course</option>
        <?php echo $options; ?>
    </select><br><br>

    <span class="details">Course 2:</span>
    <select id="course2" name="course2" class="col-75">
        <option value="">Select Course</option>
       <option value="">Select Course</option>
        <?php echo $options; ?>
    </select><br><br>

    <span class="details">Course 3:</span>
    <select id="course3" name="course3" class="col-75">
        <option value="">Select Course</option>
        <option value="">Select Course</option>
        <?php echo $options; ?>
    </select>
</div>

  </div><br><br><br><br><br><br><br><br>

    <li>
    <input type="submit"  name="submit"/>
    </li>
    </ul>

    </form>
  </section>
  <script>
  let sidebar = document.querySelector(".sidebar2");
  let closeBtn = document.querySelector("#btn");
  let searchBtn = document.querySelector(".bx-search");

  closeBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("open");
    menuBtnChange();//calling the function(optional)
  });

  searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
    sidebar.classList.toggle("open");
    menuBtnChange(); //calling the function(optional)
  });

  // following are the code to change sidebar button(optional)
  function menuBtnChange() {
   if(sidebar.classList.contains("open")){
     closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
   }else {
     closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
   }
  }
  </script>
</body>
</html>