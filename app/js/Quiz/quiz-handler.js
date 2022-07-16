$(document).ready(function () {
    
    TimeHandler();
    NavigationQuestion();
});

function TimeHandler() {
    var timeLeft = 60;
    var counter = 0;
    var timer = $("#timer");

    timer.html(timeLeft - counter);

    function timeIT() {
        counter++;
        timer.html(timeLeft - counter);
    }

    setInterval(timeIT, 1000);
}


//    OptList.forEach(function(){
//        var c = ` <div class="num" id="quest1"><p>1</p></div>`;
//    });


function NavigationQuestion() {
    $('.num').click(function () {
        var QuestionID = $(this).attr('id');
        console.log(QuestionID);

        a = ['hoainhan', 'ngocthuy', 'vanthuc'];
        loadQuestion(QuestionID, a);
        loadOption(QuestionID);
        loadChoosenAnswer(QuestionID);

    })
}


// SUPPORT FUNCTION

function loadSideBar(Duration, QuestNum) {
    for (var i = 1; i <= QuestNum; i++) {
        $('.quiz-num').append(
            `
                <div class="num" id="">
                    <p></p>
                </div>
            `
        );
    }
}

function loadQuestion(quesID, quesContent) {
    $('.quiz-question').html(
        `   
            <h1>` + questID + `</h1>
        `
    );
}

function loadOption(questID, ...questOpt) {
    
}

function loadChoosenAnswer() {

}
