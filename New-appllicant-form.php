<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Application/Revision</title>
    <link rel="stylesheet" href="style.css">
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
  <form class="form-style-8" id="newApplicantForm" onsubmit="return validateForm()">
    <div class="form-style-heading">
      <h3>NEW APPLICANTS ONLY</h3>
    </div>
    <ul>
    <li>
      <label for="centerCode">Enter Center Code Number</label>
        <input type="number" name="centerCode" id="centerCode" class="field-style field-split align-left" placeholder="ENTER CENTER CODE" required min="3" pattern="\d{3,}" />
        <div id="centerCodeError" class="error-message"></div>
    </li>
    <li>
      <label for="indexNo">Enter Index No.</label>
        <input type="number" name="indexNo" id="indexNo" class="field-style field-split align-left" placeholder="ENTER INDEX NO" required min="8" pattern="\d{8,}" title="Must be 3 digits or more"/>
    </li>
    <li>
      <label for="birthCertificate">Enter Birth Certificate S/N.:</label>
      <input type="number" name="birthCertificate" id="birthCertificate" class="field-style field-split align-left" placeholder="ENTER BIRTH CERTIFICATE NO" required maxlength="10" pattern="\d{10}" title="Must be 10 digits long"/>
    </li>
   
    <li>
    <input type="submit" value="Submit" />
    <input type="reset" value="Reset" />
    </li>
    </ul>
  </form>

  <script>
    function validateForm() {
      var centerCodeInput = document.getElementById("centerCode");
      var centerCode = centerCodeInput.value.trim();
      var centerCodeError = document.getElementById("centerCodeError");

      // Validate Center Code: Must not be empty and must contain only numbers
      if (centerCode === "") {
        centerCodeError.textContent = "Center Code is required";
        centerCodeInput.focus();
        return false;
      } else if (!/^\d+$/.test(centerCode)) {
        centerCodeError.textContent = "Center Code must contain only numbers";
        centerCodeInput.focus();
        return false;
      } else {
        centerCodeError.textContent = "";
      }

      return true; // Form submission allowed
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