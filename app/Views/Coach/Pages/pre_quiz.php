<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>QuickQuiz | Preview bài trắc nghiệm </title>
    <!--<title> Drop Down Sidebar Menu | CodingLab </title>-->
    <link rel="stylesheet" href="<?= base_url('/app/css/Coach/pre_quiz.css') ?>">
    <!-- Boxiocns CDN Link -->
    <link href=" https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/public/Bootstrap/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/katex@0.15.1/dist/katex.css" integrity="sha384-WsHMgfkABRyG494OmuiNmkAOk8nhO1qE+Y6wns6v+EoNoTNxrWxYpl5ZYWFOLPCM" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/katex@0.15.1/dist/katex.js" integrity="sha384-lhN3C1JSmmvbT89RGOy6nC8qFBS8X/PLsBWIqiNdD4WGNsYOWpS2Il0x4TBrK8E2" crossorigin="anonymous"></script>
</head>

<body>
    <section class="home-section">
        <div class="hs__content">
            <h3 style="text-align: center;">Preview bài trắc nghiệm</h3>
            <div class="content-question exam-content">
                <ul id="question">
                </ul>
            </div>
            <div class="loading">
            </div>
            <div class="preview-quiz row">
                <div style="display:flex;justify-content: space-around">
                    <div class="title">
                        <label for="title">Nhập title</label>
                        <input type="text" id="title" placeholder="Nhập title">
                    </div>
                    <div class="description">
                        <label for="description">Nhập description</label>
                        <input type="text" id="description" placeholder="Nhập description">
                    </div>
                    <div class="filter1">
                        <label for="filter1">Nhập filter</label>
                        <select class="filter-content" id="selected_filter_item" name="filters">
                            <optgroup label="Lớp 10">
                                <option value="toan10">Toán 10</option>
                                <option value="vatly10">Vật lý 10</option>
                                <option value="hoahoc10">Hóa học 10</option>
                                <option value="sinhoc10">Sinh học 10</option>
                                <option value="anhvan10">Anh văn 10</option>
                                <option value="gdcd">Giáo dục công dân 10</option>
                                <option value="dialy">Địa lý 10</option>
                                <option value="lichsu">Lịch sử 10</option>
                            </optgroup>
                            <optgroup label="Lớp 11">
                                <option value="toan10">Toán 11</option>
                                <option value="vatly10">Vật lý 11</option>
                                <option value="hoahoc10">Hóa học 11</option>
                                <option value="sinhoc10">Sinh học 11</option>
                                <option value="anhvan10">Anh văn 11</option>
                                <option value="gdcd">Giáo dục công dân 11</option>
                                <option value="dialy">Địa lý 11</option>
                                <option value="lichsu">Lịch sử 11</option>
                            </optgroup>
                            <optgroup label="Lớp 12">
                                <option value="toan10">Toán 12</option>
                                <option value="vatly10">Vật lý 12</option>
                                <option value="hoahoc10">Hóa học 12</option>
                                <option value="sinhoc10">Sinh học 12</option>
                                <option value="anhvan10">Anh văn 12</option>
                                <option value="gdcd">Giáo dục công dân 12</option>
                                <option value="dialy12">Địa lý 12</option>
                                <option value="lichsu12">Lịch sử 12</option>
                            </optgroup>
                            <optgroup label="Ôn thi THPT">
                                <option value="toanthpt">Toán</option>
                                <option value="vatlythpt">Vật lý</option>
                                <option value="hoahocthpt">Hóa học</option>
                                <option value="sinhocthpt">Sinh học</option>
                                <option value="anhvanthpt">Anh văn</option>
                                <option value="gdcdthpt">Giáo dục công dân</option>
                                <option value="dialythpt">Địa lý</option>
                                <option value="lichsuthpt">Lịch sử</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="time">
                        <label for="time">Nhập thời gian</label>
                        <input type="number" id="time" placeholder="Nhập thời gian">
                    </div>
                </div>
                <div style="margin-top:20px; margin-bottom: 20px;margin-left: 45%" id="btn_add" class="btn btn-success"><a style="text-decoration:none;color: red;">Xác nhận</a></div>
            </div>

            <!-- Lên đầu trang -->
            <div class="back-to-top"><i class="fa fa-angle-up"><span style="font-size: 10;"></span></i></div>
        </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>/app/js/Coach/preview_quiz.js"></script>
    <script>
        var arr = localStorage.getItem('storeID');
        arr = JSON.parse(arr);

        $(".back-to-top").addClass("hidden-top");
        $(window).scroll(function() {
            if ($(this).scrollTop() === 0) {
                $(".back-to-top").addClass("hidden-top")
            } else {
                $(".back-to-top").removeClass("hidden-top")
            }
        });

        $('.back-to-top').click(function() {
            $('body,html').animate({
                scrollTop: 0
            }, 1200);
            return false;
        });

        $('#btn_add').click(function() {
            var title = $('#title').val();
            var description = $('#description').val();
            var filter = $('#selected_filter_item').val();
            var time = $('#time').val();
            var total = arr.length;
            var start = new Date();
            var a = start.getDate();
            var b = start.getMonth();
            var c = start.getFullYear();
            var createDate = c + '-' + (b + 1) + '-' + a;
            var userID = localStorage.getItem('currentID');

            $.ajax({
                url: "/coach/add__quiz",
                method: "POST",
                dataType: 'json',
                data: {
                    title: title,
                    description: description,
                    filter: filter,
                    time: time,
                    total: total,
                    createDate: createDate,
                    arr: arr
                },
                success: function(data) {
                    window.alert('Thêm thành công');
                    window.location = 'quizgenerator';
                }
            })
        })
    </script>
</body>

</html>