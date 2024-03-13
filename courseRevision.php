<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Course Revision</title>
    <link rel="stylesheet" href="style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
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
  <form action="revision.php" method="post" class="form-style-9" id="applicationForm">
    <div class="form-style-heading">
      <h3>Application Revision</h3>
    </div>
    <ul>
      <table class="">
        <div>
          <center>
            <h3 class="form-style-heading">Your Choices</h3>
          </center>
        </div>
       
            <thead>
                <tr>
                    <th>Course Code</th>
                    <th>Course Name</th>
                    <th>University Code</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $cert_Number=$_SESSION['id'];
            include "connect.php";
            $sql= "SELECT universityOption1, universityOption2, universityOption3, courseOption1, 
            courseOption2, courseOption3 FROM applications where cert_no='".$cert_Number."'";  
            $row = mysqli_query($conn,$sql);
            
                   foreach($row as $rows)
                  { 
                ?>
                <tr >
                    <td><?php echo "code"; ?></td>
                    <td><?php echo $rows['courseOption1']; ?></td>
                    <td><?php echo $rows['universityOption1']; ?></td>
          
                </tr>
                <tr >
                    <td><?php echo "code"; ?></td>
                    <td><?php echo $rows['courseOption2']; ?></td>
                    <td><?php echo $rows['universityOption2']; ?></td>
          
                </tr>
                <tr >
                    <td><?php echo "code"; ?></td>
                    <td><?php echo $rows['courseOption3']; ?></td>
                    <td><?php echo $rows['universityOption3']; ?></td>
          
                </tr>
                <?php } ?>
            </tbody>
        </table><br>

   <h3 class="select-university-header">Select University and a course for the options below:</h3>

    <div class="align-left">
      <span class="details">Option1::.</span>
      <select id="university1" name="university1" class="col-75" onchange="showCourseSelection('university1', 'course1')">
      <option value="">Revise University</option>
       <?php
       include "get_University.php"
       ?>
       </select><br><br>
      <span class="details">Option2::.</span>
      <select id="university2" name="university2" class="col-75" onchange="showCourseSelection('university2', 'course2')">
      <option value="">Revise University</option>
      <?php
       include "get_University.php"
       ?>
     </select><br><br>
      <span class="details">Option2::.</span>
      <select id="university3" name="university3" class="col-75" onchange="showCourseSelection('university3', 'course3')">
      <option value="">Revise University</option>
      <?php
       include "get_University.php"
       ?>
    </select>
    </div>
<?php
include "action.php";
?>
    <div class="align-right">
      <span class="details"></span>
      <select id="course1" name="course1" class="col-75" style="display:none;">
        <option value="">Revise Courses</option>
        <?php echo $options; ?>
      </select><br><br>

        <span class="details"></span>
        <select id="course2" name="course2" class="col-75" style="display:none;">
        <option value="">Revise Courses</option>
        <?php echo $options; ?>
       </select><br><br>
    
        <span class="details"></span>
        <select id="course3" name="course3" class="col-75" style="display:none;">
        <option value="">Revise Courses</option>
        <?php echo $options; ?>
       </select>
  </div><br><br><br><br><br><br><br><br><br><br><br><br><br>

    <li>
    <input type="submit" value="Submit" />
    <input type="submit" value="Reset" />
    </li>
    </ul>
  
    </form>
    
    <script>
      function showCourseSelection(universityId, courseId) {
        var universitySelect = document.getElementById(universityId);
        var courseSelect = document.getElementById(courseId);
        
        if (universitySelect.value !== "") {
          courseSelect.style.display = 'block';
        } else {
          courseSelect.style.display = 'none';
        }
      }
    </script>
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