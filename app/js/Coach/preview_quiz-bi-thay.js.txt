$(document).ready(function () {
    function load_data() {
        $.ajax({
            url: "/previewquiz",
            method: "POST",
            dataType: 'json',
            data: { 'arr': arr, },
            success: function (data) {
                console.log(data);
                data.forEach(function (obj) {
                    prepareQuestion(obj.id, obj.question, obj.filter, obj.A, obj.B, obj.C, obj.D);
                })
            }
        })
    };
    load_data();


    function prepareQuestion(id, question, filter, A, B, C, D) {
        var k_question = katex.renderToString(question);
        var k_A = katex.renderToString(A);
        var k_B = katex.renderToString(B);
        var k_C = katex.renderToString(C);
        var k_D = katex.renderToString(D);
        var item = `
                    <li class="q-item" style="padding-left: 10px;">           
                        <div id="filter">
                            <h4 style="display: inline-block">` + filter + `</h4>
                        </div>
                        <div class="qtion">
                            <h5>Câu hỏi: </h5><p>` + k_question + `</p>                           
                        </div>
                        
                        <div id="option-a">
                            <p>A: `+ k_A + `</p>
                        </div>
                        <div id="option-b">
                            <p>B: `+ k_B + `</p>
                        </div>
                        <div id="option-c">
                            <p>C: `+ k_C + `</p>
                        </div>
                        <div id="option-d">
                            <p>D: `+ k_D + `</p>
                        </div>
                      </li>

        `;
        $('#question').append(item);
    }
}); 