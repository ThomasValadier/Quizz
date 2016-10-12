$(function () {
    var comptlog = 0
    var comptpass = 0
    var comptemail = 0
    $('#insForm').click(function () {
        $("#erlog").remove()
        $("#erpass").remove()
        $("#ermail").remove()
    })

    $('#inscrip').click(function () {
        var log = $('#login').val();
        var pass = $('#password').val();
        var email = $('#email').val();

        if (log == '' && comptlog == 0) {
            $("#login").after('<p id="erlog">remplir un login !</p>')
            comptlog = 1
        }
        else if (log != '') {
            comptlog = 0
            $("#erlog").remove()
        }

        if (pass == '' && comptpass == 0) {
            $("#password").after('<p id="erpass">remplir un password !</p>')
            comptpass = 1
        }
        else if (pass != '') {
            comptpass = 0
            $("#erpass").remove()
        }
        if (email == '' && comptemail == 0) {
            $("#email").after('<p id="ermail">remplir un email !</p>')
            comptemail = 1
        }
        else if (email != '') {
            comptemail = 0
            $("#ermail").remove()
        }
        if (log != '' && pass != '' && email != '') {
            $.ajax({
                url: 'insertUser.php',
                type: 'POST',
                data: 'login=' + log + '&password=' + pass + '&email=' + email
            })
        }

    })
})