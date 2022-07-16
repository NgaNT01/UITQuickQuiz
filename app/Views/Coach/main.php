<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<!-- <html lang="en" dir="ltr"></html> -->
<html>

<head>
    <meta charset="UTF-8" />
    <title><?= "QuickQuiz | " . $PageTitle ?></title>
    <!--<title> Drop Down Sidebar Menu | CodingLab </title>-->
    <link rel="stylesheet" href="<?= base_url() . "/app/css/Coach/" . $PageCSS . ".css" ?>" />
    <!-- Boxiocns CDN Link -->
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/public/Bootstrap/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/katex@0.15.1/dist/katex.css" integrity="sha384-WsHMgfkABRyG494OmuiNmkAOk8nhO1qE+Y6wns6v+EoNoTNxrWxYpl5ZYWFOLPCM" crossorigin="anonymous">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/katex@0.15.1/dist/katex.js" integrity="sha384-lhN3C1JSmmvbT89RGOy6nC8qFBS8X/PLsBWIqiNdD4WGNsYOWpS2Il0x4TBrK8E2" crossorigin="anonymous"></script>
</head>

<body style="background-color: #eee;">
    <div class="sidebar close">
        <div class="logo-details">
            <i class="bx bx-chevrons-right"></i>
            <span class="logo_name">QuickQuiz</span>
        </div>
        <ul class="nav-links">
            <!-- <li>
                <a href="personal">
                    <i class="bx bxs-layout"></i>
                    <span class="link_name">Kênh cá nhân</span>
                </a>
            </li> -->
            <li>
                <div class="iocn-link">
                    <a href="bank">
                        <i class="bx bxs-buildings"></i>
                        <span class="link_name">Câu hỏi</span>
                    </a>
                    <!-- <i class="bx bxs-chevron-down arrow"></i> -->
                </div>
                <!-- <ul class="sub-menu">
                    <li><a class="link_name" href="#">Category</a></li>
                    <li><a href="#">Chuyên đề logarit</a></li>
                    <li><a href="#">Chuyên đề hình học</a></li>
                    <li><a href="#">Chuyên đề số phức</a></li>
                </ul> -->
            </li>
            <li>
                <div class="iocn-link">
                    <a href="quizgenerator">
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
            <!-- <li>
                <a href="<?= base_url() ?>/app/Views/Coach/discussion.php">
                    <i class="bx bxl-telegram"></i>
                    <span class="link_name">Thảo luận</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Analytics</a></li>
                </ul>
            </li> -->
            <!-- <li>
                <a href="<?= base_url() ?>/app/Views/Coach/analyst.php">
                    <i class="bx bx-bar-chart"></i>
                    <span class="link_name">Phân tích</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Analytics</a></li>
                </ul>
            </li> -->
            <!-- <li>
                <a>
                    <i class="bx bxs-user-circle"></i>
                    <span class="link_name">Tài khoản</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Cài đặt</a></li>
                </ul>
            </li> -->
            <li>
                <div class="profile-details">
                    <div class="profile-content">
                        <!--<img src="image/profile.jpg" alt="profileImg">-->
                    </div>
                    <div class="name-job">
                        <div class="profile_name">Ngô Bảo Châu</div>
                        <div class="job"></div>
                    </div>
                    <i class="bx bx-log-out" onclick="logout()"></i>
                </div>
            </li>
        </ul>
    </div>

    <?php echo $PageContent ?>

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