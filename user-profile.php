<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>User Profile</title>
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
  <div class="container4">
    <div class="title"></div>
    <div class="content">
      <form action="" method="POST">
      <h5>CONTACT INFORMATION</h5>
        <div class="user-details">
          <div class="input-box">
            <span class="details">Your Email</span>
            <input type="email" id="" name="" placeholder=" Enter Your Email" required>
          </div>
        
          <div class="input-box">
            <span class="details">Guardian/Parent Email</span>
            <input type="email" id="" name="" placeholder=" Enter Guardian/Parent Email" required>
          </div>

          <div class="input-box">
            <span class="details">Your Phone</span>
            <input type="number" id="" name="" placeholder=" Enter Your Phone" required>
          </div>

          <div class="input-box">
            <span class="details">Guardian/Parent Phone</span>
            <input type="number" id="" name="" placeholder=" Enter Your Guardian/Parent phone " required>
          </div>
          <div class="input-box">
            <span class="details">County</span>
            <select id="" name="" class="col-75">
            <option value="">Enter Your County</option>
                <option value="">Kisii</option>
                <option value="">Nairobi</option>
                <option value="">Kisumu</option>
            </select>
          </div>

          <div class="input-box">
            <span class="details">Constituency</span>
            <select id="" name="" class="col-75">
            <option value="">Enter Your Constituency</option>
                <option value="">Embakasi West</option>
                <option value="">Embakasi East</option>
                <option value="">Kitutu Chache South</option>
                <option value="">Kitutu Chache North</option>
            </select>
          </div>
        </div>
    
       <center><div class="button">
          <input type="submit" value="Submit">
        </div>
      </center> 
      </form>
    </div>
  </div>
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