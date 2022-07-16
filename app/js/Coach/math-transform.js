$(document).ready(function () {
    $('#question').change(function () {
        var data = $('#question').val();
        previewQuestion(data);
    });
    $('#a-option').change(function () {
        var data = $('#a-option').val();
        previewAOption(data);
    });
    $('#b-option').change(function () {
        var data = $('#b-option').val();
        previewBOption(data);
    });
    $('#c-option').change(function () {
        var data = $('#c-option').val();
        previewCOption(data);
    });
    $('#d-option').change(function () {
        var data = $('#d-option').val();
        previewDOption(data);
    });
});

function previewQuestion(data) {
    /*  alert('previewMath...'); */

    htmlData = katex.renderToString(data);

    $('.preview-question').html(htmlData);
};

function previewAOption(data) {
    /* alert('previewMath...'); */

    htmlData = katex.renderToString(data);

    $('.preview-a-option').html(htmlData);
};
function previewBOption(data) {
    /* alert('previewMath...'); */

    htmlData = katex.renderToString(data);

    $('.preview-b-option').html(htmlData);
};
function previewCOption(data) {
    /* alert('previewMath...'); */

    htmlData = katex.renderToString(data);

    $('.preview-c-option').html(htmlData);
};
function previewDOption(data) {
    /* alert('previewMath...'); */

    htmlData = katex.renderToString(data);

    $('.preview-d-option').html(htmlData);
};