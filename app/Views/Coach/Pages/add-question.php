<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>QuickQuiz</title>
    <!--<title> Drop Down Sidebar Menu | CodingLab </title>-->
    <link rel="stylesheet" href="<?= base_url() ?>/app/css/Coach/question_bank.css">
    <link rel="stylesheet" href="<?= base_url() ?>/app/css/Coach/add_question.css">
    <!-- Boxiocns CDN Link -->
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/public/Bootstrap/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/katex@0.15.1/dist/katex.css" integrity="sha384-WsHMgfkABRyG494OmuiNmkAOk8nhO1qE+Y6wns6v+EoNoTNxrWxYpl5ZYWFOLPCM" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/katex@0.15.1/dist/katex.js" integrity="sha384-lhN3C1JSmmvbT89RGOy6nC8qFBS8X/PLsBWIqiNdD4WGNsYOWpS2Il0x4TBrK8E2" crossorigin="anonymous"></script>
    <script src="<?= base_url() ?>/app/js/Coach/math-transform.js"></script>
    <!-- <script scr="/public/ckeditor/plugins/ckeditor_wiris/integration/WIRISplugins.js?viewer=image"></script> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" />
</head>

<body style="background-color: bisque;">
    <div class="success"></div>
    <div class="container">
        <form>
            <!-- <div class="form-group row" style="margin-top: 20px;">
                <label for="filter" class="col-4 col-form-label">Filter</label>
                <div class="col-8">
                    <input id="filter" name="filter" placeholder="Nhập filter" type="text" class="form-control">
                </div>
            </div> -->
            <!-- <div class="form-group row" style="margin-top: 20px;">
                <label for="tag" class="col-4 col-form-label">Tag</label>
                <div class="col-8">
                    <input id="filter" name="filter" placeholder="Nhập tag" type="text" class="form-control">
                </div>
            </div> -->
            <div class="form-group row" style="margin-top: 20px;">
                <label for="question" class="col-4 col-form-label">Nội dung câu hỏi</label>
                <div class="col-8">
                    <textarea id="question" name="question" cols="40" rows="3" class="form-control"></textarea>
                </div>
            </div>
            <div class="form-group row" style="margin-top: 20px;">
                <label for="question" class="col-4 col-form-label"></label>
                <div class="col-8 preview-question" style="background-color: white;height: 86px;width: 740px;margin-left: 12px;">
                </div>
            </div>
           
            <div class="form-group row" style="margin-top: 20px;">
                <label for="A" class="col-4 col-form-label">A</label>
                <div class="col-8">
                    <textarea id="a-option" name="A" cols="40" rows="3" class="form-control"></textarea>
                </div>
            </div>
            <div class="form-group row" style="margin-top: 20px;">
                <label for="A" class="col-4 col-form-label"></label>
                <div class="col-8 preview-a-option" style="background-color: white;height: 86px;width: 740px;margin-left: 12px;">
                </div>
            </div>
            <div class="form-group row" style="margin-top: 20px;">
                <label for="B" class="col-4 col-form-label">B</label>
                <div class="col-8">
                    <textarea id="b-option" name="B" cols="40" rows="3" class="form-control"></textarea>
                </div>
            </div>
            <div class="form-group row" style="margin-top: 20px;">
                <label for="a-option" class="col-4 col-form-label"></label>
                <div class="col-8 preview-b-option" style="background-color: white;height: 86px;width: 740px;margin-left: 12px;">
                </div>
            </div>
            <div class="form-group row" style="margin-top: 20px;">
                <label for="c-option" class="col-4 col-form-label">C</label>
                <div class="col-8">
                    <textarea id="c-option" name="C" cols="40" rows="3" class="form-control"></textarea>
                </div>
            </div>
            <div class="form-group row" style="margin-top: 20px;">
                <label for="a-option" class="col-4 col-form-label"></label>
                <div class="col-8 preview-c-option" style="background-color: white;height: 86px;width: 740px;margin-left: 12px;">
                </div>
            </div>
            <div class="form-group row" style="margin-top: 20px;">
                <label for="d-option" class="col-4 col-form-label">D</label>
                <div class="col-8">
                    <textarea id="d-option" name="D" cols="40" rows="3" class="form-control"></textarea>
                </div>
            </div>
            <div class="form-group row" style="margin-top: 20px;">
                <label for="a-option" class="col-4 col-form-label"></label>
                <div class="col-8 preview-d-option" style="background-color: white;height: 86px;width: 740px;margin-left: 12px;">
                </div>
            </div>
            <div class="form-group row" style="margin-top: 20px;">
                <label for="answer" class="col-4 col-form-label">Đáp án</label>
                <div class="col-8">
                   <!--  <input id="answer" name="answer" placeholder="Nhập đáp án" type="text" class="form-control"> -->
                   <select name="answer" id="answer" class="form-control">
                       <option value="A">A</option>
                       <option value="B">B</option>
                       <option value="C">C</option>
                       <option value="D">D</option>
                   </select>
                </div>
            </div>
            <div class="form-group row" style="margin-top: 20px; display: none;">
                <label for="uid" class="col-4 col-form-label">User id</label>
                <div class="col-8">
                    <input id="uid" name="uid" placeholder="Nhập user id" type="text" class="form-control">
                </div>
            </div>
            <div style="display: flex; gap: 30px; width: 100%; justify-content: center">
            <div class="form-group row" style="margin-top: 20px;margin-bottom: 20px;">
                <div class="offset-4 col-8">
                    <div id="confirm" class="btn btn-primary">Confirm</div>
                </div>
            </div>

            <div class="form-group row" style="margin-top: 20px;margin-bottom: 20px;">
                <div class="offset-4 col-8">
                    <div id="cancel-button" class="btn btn-primary" style="background-color: tomato; border: 0;">Thoát</div>
                </div>
            </div>
            </div>
        </form>
    </div>
</body>
<script>
    $('#cancel-button').click(function(){
        console.log('thoát');
        location.href = 'bank';
    })

    $('#confirm').click(function() {
        var question = $('#question').val().replace(/\\/g, "\\\\");
        var opta = $('#a-option').val().replace(/\\/g, "\\\\");
        var optb = $('#b-option').val().replace(/\\/g, "\\\\");
        var optc = $('#c-option').val().replace(/\\/g, "\\\\");
        var optd = $('#d-option').val().replace(/\\/g, "\\\\");
        var answer = $('#answer').val().replace(/\\/g, "\\\\");
        var uid = localStorage.getItem('currentUID');

        if(question == '' || opta == '' || optb == '' || answer == ''){
            alert('Bạn không thể thêm câu hỏi nếu trống các trường');
        }
        else{
            $.ajax({
            url: "/coach/add",
            method: "POST",
            data: {
                question: question,
                opta: opta,
                optb: optb,
                optc: optc,
                optd: optd,
                answer: answer,
                uid: uid
            },
            success: function(data) {
                window.alert('Thêm thành công');
                window.location = 'bank';
            }
        })
        }
    })
</script>

</html>