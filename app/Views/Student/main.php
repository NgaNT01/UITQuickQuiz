<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<!-- <html lang="en" dir="ltr"></html> -->
<html>

<head>
  <meta charset="UTF-8" />
  <title><?= "QuickQuiz | " . $PageTitle ?></title>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <!--<title> Drop Down Sidebar Menu | CodingLab </title>-->
  <link rel="stylesheet" href="<?= base_url() . "/app/css/Student/" . $PageCSS . ".css" ?>" />
  <!-- Boxiocns CDN Link -->
  <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body style="background-color: #eee;">
  <!-- Load the Sidebar that is static and was used by all pages -->
  <div class="sidebar close">
    <div class="logo-details">
      <i class="bx bx-chevrons-right"></i>
      <span class="logo_name">QuickQuiz</span>
    </div>
    <ul class="nav-links">
      <li class="navigation-item" id="Home">
        <a href="home">
          <i class="bx bxs-home"></i>
          <span class="link_name">Trang chủ</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Category</a></li>
        </ul>
      </li>
      <!-- <li class="navigation-item" id="Discussion">
        <div class="iocn-link">
          <a href="discussion">
            <i class="bx bxl-telegram"></i>
            <span class="link_name">Thảo luận</span>
          </a>
          <i class="bx bxs-chevron-down arrow"></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Category</a></li>
          <li><a href="#">Toan10 - Đa thức</a></li>
          <li><a href="#">VatLy10 - Con lắc</a></li>
          <li><a href="#">HoaHoc10 - Chất béo</a></li>
        </ul>
      </li> -->
      <!-- <li class="navigation-item" id="Analysis">
        <div class="iocn-link">
          <a>
            <i class="bx bx-pie-chart-alt-2"></i>
            <span class="link_name">Thống kê</span>
          </a> -->
          <!-- <i class="bx bxs-chevron-down arrow"></i> -->
        <!-- </div> -->
        <!-- <ul class="sub-menu">
            <li><a class="link_name" href="#">Theo dõi</a></li>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Login Form</a></li>
            <li><a href="#">Card Design</a></li>
          </ul> -->
      <!-- </li> -->
      <li class="navigation-item" id="Bookmark">
        <a href="bookmark">
          <i class="bx bxs-bookmarks"></i>
          <span class="link_name">Đánh dấu</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Analytics</a></li>
        </ul>
      </li>
      <!-- <li class="navigation-item" id="Account">
        <a href="account">
          <i class="bx bxs-user-circle"></i>
          <span class="link_name">Tài khoản</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Cài đặt</a></li>
        </ul>
      </li> -->
      <!-- <li>
          <div class="iocn-link">
            <a href="#">
              <i class="bx bx-plug"></i>
              <span class="link_name">Plugins</span>
            </a>
            <i class="bx bxs-chevron-down arrow"></i>
          </div>
          <ul class="sub-menu">
            <li><a class="link_name" href="#">Plugins</a></li>
            <li><a href="#">UI Face</a></li>
            <li><a href="#">Pigments</a></li>
            <li><a href="#">Box Icons</a></li>
          </ul>
        </li>
        <li>
          <a href="#">
            <i class="bx bx-compass"></i>
            <span class="link_name">Explore</span>
          </a>
          <ul class="sub-menu blank">
            <li><a class="link_name" href="#">Explore</a></li>
          </ul>
        </li>
        <li>
          <a href="#">
            <i class="bx bx-history"></i>
            <span class="link_name">History</span>
          </a>
          <ul class="sub-menu blank">
            <li><a class="link_name" href="#">History</a></li>
          </ul>
        </li>
        <li>
          <a href="#">
            <i class="bx bx-cog"></i>
            <span class="link_name">Setting</span>
          </a>
          <ul class="sub-menu blank">
            <li><a class="link_name" href="#">Setting</a></li>
          </ul>
        </li> -->
      <li>
        <div class="profile-details">
          <div class="profile-content">
            <!--<img src="image/profile.jpg" alt="profileImg">-->
          </div>
          <div class="name-job">
            <div class="profile_name">Nguyễn Tấn Ngà</div>
            <div class="job"></div>
          </div>
          <i class="bx bx-log-out" onclick="logout()"></i>
        </div>
      </li>
    </ul>
  </div>

  <!-- Load the content of the page that dynamic -->
  <?php echo $PageContent ?>

  <!-- Load the script that is static and was used by all pages -->
  <script>
    let arrow = document.querySelectorAll(".arrow");
    for (var i = 0; i < arrow.length; i++) {
      arrow[i].addEventListener("click", (e) => {
        let arrowParent = e.target.parentElement.parentElement; //selecting main parent of arrow
        arrowParent.classList.toggle("showMenu");
      });
    }
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".bx-chevrons-right");
    console.log(sidebarBtn);
    sidebarBtn.addEventListener("click", () => {
      sidebar.classList.toggle("close");
    });

    function logout(){
            localStorage.removeItem('name');
            localStorage.removeItem('currentUID');
            localStorage.removeItem('isCoach');
            location.href = '/';
        }

    $(document).ready(function(){
            $('.profile_name').text(localStorage.getItem('name'));
        })
  </script>
</body>

</html>