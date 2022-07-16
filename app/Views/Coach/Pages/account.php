<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<!-- <html lang="en" dir="ltr"></html> -->
<html>

<head>
    <meta charset="UTF-8" />
    <title>QuickQuiz</title>
    <!--<title> Drop Down Sidebar Menu | CodingLab </title>-->
    <link rel="stylesheet" href="/Public/css/Coach/account.css">
    <!-- Boxiocns CDN Link -->
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/Bootstrap/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <div class="sidebar close">
        <div class="logo-details">
            <i class="bx bx-chevrons-right"></i>
            <span class="logo_name">QuickQuiz</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="/Views/Coach/personal.html">
                    <i class="bx bxs-layout"></i>
                    <span class="link_name">Kênh cá nhân</span>
                </a>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="/Views/Coach/question_bank.html">
                        <i class="bx bxs-buildings"></i>
                        <span class="link_name">Ngân hàng câu hỏi</span>
                    </a>
                    <i class="bx bxs-chevron-down arrow"></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Category</a></li>
                    <li><a href="#">Chuyên đề logarit</a></li>
                    <li><a href="#">Chuyên đề hình học</a></li>
                    <li><a href="#">Chuyên đề số phức</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="/Views/Coach/quiz_generator.html">
                        <i class="bx bx-book-open"></i>
                        <span class="link_name">Bài trắc nghiệm</span>
                    </a>
                    <!-- <i class="bx bxs-chevron-down arrow"></i> -->
                </div>
                <!-- <ul class="sub-menu">
            <li><a class="link_name" href="#">Theo dõi</a></li>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Login Form</a></li>
            <li><a href="#">Card Design</a></li>
          </ul> -->
            </li>
            <li>
                <a href="/Views/Coach/discussion.html">
                    <i class="bx bxl-telegram"></i>
                    <span class="link_name">Thảo luận</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Analytics</a></li>
                </ul>
            </li>
            <li>
                <a href="/Views/Coach/analyst.html">
                    <i class="bx bx-bar-chart"></i>
                    <span class="link_name">Phân tích</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Analytics</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="bx bxs-user-circle"></i>
                    <span class="link_name">Tài khoản</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Cài đặt</a></li>
                </ul>
            </li>
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
                        <div class="profile_name">Ngô Bảo Châu</div>
                        <div class="job">Giáo sư toán</div>
                    </div>
                    <i class="bx bx-log-out"></i>
                </div>
            </li>
        </ul>
    </div>
    <section class="home-section">
        <h1 style="text-align: center;">Welcome To QuickQuiz</h1>
    </section>
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
    </script>
</body>

</html>