<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>User Profile</title>
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <style>

/* user-side-bar css
*/
			@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
			*{
				margin: 0;
				padding: 0;
				box-sizing: border-box;
				font-family: "Poppins" , sans-serif;
			}
			.sidebar2{
				position: fixed;
				left: 0;
				top: 0;
				height: 100%;
				width: 78px;
				background: #11101D;
				padding: 6px 14px;
				z-index: 99;
				transition: all 0.5s ease;
			}
			.sidebar2.open{
				width: 250px;
			}
			.sidebar2 .logo-details{
				height: 60px;
				display: flex;
				align-items: center;
				position: relative;
			}
			.sidebar2 .logo-details .icon{
				opacity: 0;
				transition: all 0.5s ease;
			}
			.sidebar2 .logo-details .logo_name{
				color: #fff;
				font-size: 20px;
				font-weight: 600;
				opacity: 0;
				transition: all 0.5s ease;
			}
			.sidebar2.open .logo-details .icon,
			.sidebar2.open .logo-details .logo_name{
				opacity: 1;
			}
			.sidebar2 .logo-details #btn{
				position: absolute;
				top: 50%;
				right: 0;
				transform: translateY(-50%);
				font-size: 22px;
				transition: all 0.4s ease;
				font-size: 23px;
				text-align: center;
				cursor: pointer;
				transition: all 0.5s ease;
			}
			.sidebar2.open .logo-details #btn{
				text-align: right;
			}
			.sidebar2 i{
				color: #fff;
				height: 60px;
				min-width: 50px;
				font-size: 28px;
				text-align: center;
				line-height: 60px;
			}
			.sidebar2 .nav-list{
				margin-top: 20px;
				height: 100%;
			}
			.sidebar2 li{
				position: relative;
				margin: 8px 0;
				list-style: none;
			}
			.sidebar2 li .tooltip{
				position: absolute;
				top: -20px;
				left: calc(100% + 15px);
				z-index: 3;
				background: #fff;
				box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
				padding: 6px 12px;
				border-radius: 4px;
				font-size: 15px;
				font-weight: 400;
				opacity: 0;
				white-space: nowrap;
				pointer-events: none;
				transition: 0s;
			}
			.sidebar2 li:hover .tooltip{
				opacity: 1;
				pointer-events: auto;
				transition: all 0.4s ease;
				top: 50%;
				transform: translateY(-50%);
			}
			.sidebar2.open li .tooltip{
				display: none;
			}
			.sidebar2 input{
				font-size: 15px;
				color: #FFF;
				font-weight: 400;
				outline: none;
				height: 50px;
				width: 100%;
				width: 50px;
				border: none;
				border-radius: 12px;
				transition: all 0.5s ease;
				background: #1d1b31;
			}
			.sidebar2.open input{
				padding: 0 20px 0 50px;
				width: 100%;
			}
			.sidebar2 .bx-search{
				position: absolute;
				top: 50%;
				left: 0;
				transform: translateY(-50%);
				font-size: 22px;
				background: #1d1b31;
				color: #FFF;
			}
			.sidebar2.open .bx-search:hover{
				background: #1d1b31;
				color: #FFF;
			}
			.sidebar2 .bx-search:hover{
				background: #FFF;
				color: #11101d;
			}
			.sidebar2 li a{
				display: flex;
				height: 100%;
				width: 100%;
				border-radius: 12px;
				align-items: center;
				text-decoration: none;
				transition: all 0.4s ease;
				background: #11101D;
			}
			.sidebar2 li a:hover{
				background: #FFF;
			}
			.sidebar2 li a .links_name{
				color: #fff;
				font-size: 15px;
				font-weight: 400;
				white-space: nowrap;
				opacity: 0;
				pointer-events: none;
				transition: 0.4s;
			}
			.sidebar2.open li a .links_name{
				opacity: 1;
				pointer-events: auto;
			}
			.sidebar2 li a:hover .links_name,
			.sidebar2 li a:hover i{
				transition: all 0.5s ease;
				color: #11101D;
			}
			.sidebar2 li i{
				height: 50px;
				line-height: 50px;
				font-size: 18px;
				border-radius: 12px;
			}
			.sidebar2 li.profile{
				position: fixed;
				height: 60px;
				width: 78px;
				left: 0;
				bottom: -8px;
				padding: 10px 14px;
				background: #1d1b31;
				transition: all 0.5s ease;
				overflow: hidden;
			}
			.sidebar2.open li.profile{
				width: 250px;
			}
			.sidebar2 li .profile-details{
				display: flex;
				align-items: center;
				flex-wrap: nowrap;
			}
			.sidebar2 li img{
				height: 45px;
				width: 45px;
				object-fit: cover;
				border-radius: 6px;
				margin-right: 10px;
			}
			.sidebar2 li.profile .name,
			.sidebar2 li.profile .job{
				font-size: 15px;
				font-weight: 400;
				color: #fff;
				white-space: nowrap;
			}
			.sidebar2 li.profile .job{
				font-size: 12px;
			}
			.sidebar2 .profile #log_out{
				position: absolute;
				top: 50%;
				right: 0;
				transform: translateY(-50%);
				background: #1d1b31;
				width: 100%;
				height: 60px;
				line-height: 60px;
				border-radius: 0px;
				transition: all 0.5s ease;
			}
			.sidebar.open .profile #log_out{
				width: 50px;
				background: none;
			}
			.home-section{
				position: relative;
				min-height: 100vh;
				top: 0;
				left: 78px;
				width: calc(100% - 78px);
				transition: all 0.5s ease;
				z-index: 2;
			}
			.sidebar2.open ~ .home-section{
				left: 250px;
				width: calc(100% - 250px);
			}
			.home-section .text{
				display: inline-block;
				color: #11101d;
				font-size: 25px;
				font-weight: 500;
				margin: 18px
			}
			@media (max-width: 420px) {
				.sidebar2 li .tooltip{
					display: none;
				}
			}
/* End of user-side-bar css
*/

    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
			background: #f2f2f2;
    }

    .container {
      max-width: 1200px;
      margin: 20px auto;
      padding: 0 20px;
    }

    .box {
      width: 30%;
      background-color: white;
      padding: 20px;
      margin-right: 20px;
      display: inline-block;
      vertical-align: top;
      box-sizing: border-box;
      border-radius: 5px;
    }

    .box:last-child {
      margin-right: 0;
    }

    .table-container {
      margin-top: 20px;
      overflow-x: auto;
    }

    table {
      width: 94%;
      border-collapse: collapse;
    }

    th, td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    th {
      background-color: ;
    }

    @media (max-width: 768px) {
      .box {
        width: 100%;
        margin-right: 0;
        margin-bottom: 20px;
      }
    }
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
  <div class="container">
    <div class="box">
      <h2>Welcome</h2>
      <p>Kevin Odogu</p>
    </div>
    <div class="box">
      <h2>Status</h2>
      <p>Pending/Approved</p>
    </div>
    <div class="box">
      <h2>Placement</h2>
      <p>Congratulations! <br> You have been selected to join Kaimosi Friends University</p>
      <p>Barchelor of Science in Information Technology</p>
    </div>

    <div class="table-container">
      <table>
        <h2>University and Courses Applied</h2>
        <thead>
          <tr>
            <th>Choices</th>
            <th>Programme Code</th>
            <th>Programme Name</th>
            <th>Institution</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1a</td>
            <td>11114</td>
            <td>Barchelor Of Science In Nursing</td>
            <td>UON</td>
          </tr>
          <tr>
            <td>1b</td>
            <td>1123</td>
            <td>Barchelor Of Science In Information Technology</td>
            <td>KAFU</td>
          </tr>
          <tr>
            <td>1c</td>
            <td>11237</td>
            <td>Barchelor Of Science Pharmancy</td>
            <td>UOE</td>
          </tr>
          <tr>
            <td>2</td>
            <td>11237</td>
            <td>Barchelor Of Education Science</td>
            <td>KSU</td>
          </tr>
          <tr>
            <td>3</td>
            <td>12378</td>
            <td>Barchelor Of Education Arts </td>
            <td>MMUST</td>
          </tr>
          <tr>
            <td>4</td>
            <td>12345</td>
            <td>Barchelor Of Education Arts </td>
            <td>KIBU</td>
          </tr>
        </tbody>
      </table>
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