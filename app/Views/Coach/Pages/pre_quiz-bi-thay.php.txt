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
                <div class="col-sm-12 text-right" style="display:flex;justify-content:space-between">
                    <div class="title">
                        <label for="title" style="">Nhập title</label>
                        <input type="text" id="title" placeholder="Nhập title">
                    </div>
                    <div class="description">
                        <label for="title">Nhập description</label>
                        <input type="text" id="description" placeholder="Nhập description">
                    </div>
                    <div class="time">
                        <label for="time">Nhập thời gian</label>
                        <input type="number" id="time" placeholder="Nhập thời gian">
                    </div>
                </div>
                <button style="margin-top:20px; margin-bottom: 20px;margin-left: 45%" id="btn_add" class="btn btn-success"><a style="text-decoration:none;color: red;">Xác nhận</a></button>
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
            var description = $('description').val();
            var time = $('time').val();
            var total = arr.length;
        })
    </script>
</body>

</html>