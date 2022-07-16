<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<!-- <html lang="en" dir="ltr"></html> -->
<html>

<head>
    <meta charset="UTF-8" />
    <title>QuickQuiz</title>
    <!--<title> Drop Down Sidebar Menu | CodingLab </title>-->
    <link rel="stylesheet" href="<?= base_url() ?>/app/css/Coach/personal.css">
    <!-- Boxiocns CDN Link -->
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/public/Bootstrap/css/bootstrap.min.css">
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
                <a href="#">
                    <i class="bx bxs-layout"></i>
                    <span class="link_name">Kênh cá nhân</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Category</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="#">
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
                    <a href="#">
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
                <a href="#">
                    <i class="bx bxl-telegram"></i>
                    <span class="link_name">Thảo luận</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Analytics</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
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
        <div class="box">
            <img src="https://i.pinimg.com/564x/06/67/2a/06672acf29b3b5050e37c93c0d286e88.jpg" alt="" class="box-img">
            <h1>
                Coach's Name</h1>
            <h5>Coach's Information</h5>
            <div class="infor">
                <div class="col-7">
                    <div class="row">
                        <label for="FullName" class="col-sm-7 col-form-label"><strong>Họ và tên:</strong></label>
                        <div class="col-sm-5">
                            <input id="FullName" type="text" readonly class="form-control FullName" name="FullName" value="Họ và tên">

                        </div>
                    </div>
                    <div class="row">
                        <label for="FullName" class="col-sm-7 col-form-label"><strong>Ngày sinh:</strong></label>
                        <div class="col-sm-5">
                            <input id="FullName" type="text" readonly class="form-control FullName" name="FullName" value="Ngày sinh">

                        </div>
                    </div>

                    <div class="row">
                        <label for="Email" class="col-sm-7 col-form-label"><strong>Upvote:</strong></label>
                        <div class="col-sm-5">
                            <input id="Email" type="text" readonly class="form-control Email" name="Email" value="Upvote">
                        </div>
                    </div>

                    <div class="row">
                        <label for="Phone" class="col-sm-7 col-form-label"><strong>Greentick:</strong></label>
                        <div class="col-sm-5">
                            <input id="Phone" type="text" readonly class="form-control Phone" name="Phone" value="Greentick">

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Address" class="col-sm-7 col-form-label"><strong>Ngày đăng kí:</strong></label>
                        <div class="col-sm-5">
                            <input id="Address" type="text" readonly class="form-control Address" name="Address" value="Ngày đăng kí">
                        </div>
                    </div>

                    <!-- <div class="form-group row">
                        <label for="City" class="col-sm-7 col-form-label"><strong>Tỉnh/Thành phố:</strong></label>
                        <div class="col-sm-5">
                            <input id="City" type="text" readonly class="form-control City" name="City"
                                value="Tỉnh/Thành Phố">
                        </div>
                    </div> -->
                    <!-- 
                    <div class="form-group row">
                        <label for="Province" class="col-sm-7 col-form-label"><strong>Quận/Huyện:</strong></label>
                        <div class="col-sm-5">
                            <input id="Province" type="text" readonly class="form-control Province" name="Province"
                                value="Quận/Huyện">

                        </div>
                    </div> -->

                </div>
            </div>
            <ul>
                <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
            </ul>
        </div>
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