<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Application/Revision</title>
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
       <a href="New-applicant-form.php">
        <i class='bx bxs-book-open'></i>
         <span class="links_name">New Applicant</span>
       </a>
       <span class="tooltip">New Applicant</span>
     </li>
     <li>
       <a href="#">
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
  <form class="form-style-9">
    <div class="form-style-heading">
      <center>
      <h3>MY APPLICATION</h3>
    </center>
    </div>
    
    <table>
          <thead>
              <tr>
                  <th>Course Code</th>
                  <th> Course Name</th>
                  <th>University Name</th>
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
    </tbody>
      </table>
 
    <table><br>
      <div>
        <center>
          <h3 class="form-style-heading">MY STATUS</h3>
        </center>
      </div>
     
      <thead>
              <tr>
                  <th>Date</th>
                  <th> Status</th>
                  <th>Placed</th>
              </tr>
          </thead>
          <tbody>
          <?php
                $cert_Number=$_SESSION['id'];
            include "connect.php";
            $sql= "SELECT Application_Date, Status, Alocation FROM applications 
            where cert_no='".$cert_Number."'";  
            $row = mysqli_query($conn,$sql);
            
                   foreach($row as $rows)
                  { 
                ?>
                <tr >
                    <td><?php echo $rows['Application_Date'];?></td>
                    <td><?php echo $rows['Status']; ?></td>
                    <td><?php echo $rows['Alocation']; ?></td>
          
                </tr>
               
                <?php } ?>
            </tbody>
      </table>
 
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