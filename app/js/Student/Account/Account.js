$(document).ready(function () {
    var currentName = localStorage.getItem('name');

    // var name = $('#user-name').val(currentName);
    var newpass = $('#newpass').val();
    var repass = $('#repass').val();

    $('#user-name').val(currentName);

    $('#btn_update').click(function () {
        console.log( $('#user-name').attr('value'))
        var check = validatePass(newpass, repass);
        if (check == 0) {
            alert('Mật khẩu không khớp');
        } else {
            console.log('2 pass hợp lệ');
            // updateInfo();
        }
    })
})

function updateInfo() {
    var userID = localStorage.getItem('currentUID');
    $.ajax({
        url: "getuserinfo",
        method: "POST",
        dataType: 'json',
        data: { userID: userID },
        success: function (data) {

        }
    })
}

function validatePass(pass1, pass2) {
    var re = new RegExp("^\d{8,12}$");

    if (re.test(pass1) && pass1 == pass2) {
        console.log("Valid");
        return 1;
    } else {
        console.log("Invalid " + pass1 + ' ' + pass2);
        return 0;
    }
}