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
            <div class="form-group row" style="margin-top: 20px;">
                <label for="question" class="col-4 col-form-label">Title</label>
                <div class="col-8">
                    <textarea id="title" name="question" cols="40" rows="1" class="form-control"></textarea>
                </div>
            </div>
            <div class="form-group row" style="margin-top: 20px;">
                <label for="description" class="col-4 col-form-label">Description</label>
                <div class="col-8">
                    <textarea id="description" name="question" cols="40" rows="3" class="form-control"></textarea>
                </div>
            </div>
            <div class="form-group row" style="margin-top: 20px;">
                <label for="A" class="col-4 col-form-label">Rating</label>
                <div class="col-8">
                    <input type="number" id="rating" name="quantity" min="1" max="300">
                </div>
            </div>
            <div class="form-group row" style="margin-top: 20px;">
                <label for="B" class="col-4 col-form-label">Time</label>
                <div class="col-8">
                    <input type="number" id="time" name="quantity" min="0" max="300">
                </div>
            </div>
            <div class="form-group row" style="margin-top: 20px;">
                <label for="c-option" class="col-4 col-form-label">Total</label>
                <div class="col-8">
                    <input type="number" id="total" name="quantity" min="0" max="100">
                </div>
            </div>
            <div class="form-group row" style="margin-top: 20px;">
                <label for="d-option" class="col-4 col-form-label">Status</label>
                <div class="col-8">
                    <input type="number" id="status" name="quantity" min="0" max="100">
                </div>
            </div>
            <div class="form-group row" style="margin-top: 20px;">
                <label for="answer" class="col-4 col-form-label">Participant</label>
                <div class="col-8">
                    <input type="number" id="participant" name="quantity" min="0" max="100">
                </div>
            </div>
            <div class="form-group row" style="margin-top: 20px;margin-bottom: 20px;">
                <div class="offset-4 col-8">
                    <div id="confirm" class="btn btn-primary">Thêm</div>
                </div>
            </div>
        </form>
    </div>
</body>
<script>
    $('#confirm').click(function() {
        var start = new Date();
        var title = $('#title').val();
        var description = $('#description').val();
        var rating = $('#rating').val();
        var time = $('#time').val();
        var total = $('#total').val();
        var status = $('#status').val();
        var participant = $('#participant').val();
        var a = start.getDate();
        var b = start.getMonth();
        var c = start.getFullYear();
        var createDate = c + '-' + (b + 1) + '-' + a;
        $.ajax({
            url: "/coach/addquiz",
            method: "POST",
            data: {
                title: title,
                description: description,
                rating: rating,
                time: time,
                total: total,
                status: status,
                participant: participant,
                createDate: createDate
            },
            success: function(data) {
                window.alert('Thêm thành công');
                window.location = 'quizgenerator';
            }
        })
    })
</script>

</html>