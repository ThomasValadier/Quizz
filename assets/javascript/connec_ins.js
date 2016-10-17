$(function () {
    var comptlog = 0
    var comptpass = 0
    var comptemail = 0
    var comptConLog = 0
    var comptConPass = 0

    $('#boutConIns').click(function () {
        comptlog = 0
        comptpass = 0
        comptemail = 0
        comptConLog = 0
        comptConPass = 0
        $('#errConLog').remove()
        $('#errConPass').remove()
        $('#noValidate').remove()
        $('#validate').remove()
        $("#comptinex").remove()
        $('#log').val('')
        $('#pass').val('')
        $('#password').val('');
        $('#login').val('');
        $('#email').val('');
    })
    $('#insForm').click(function () {
        comptlog = 0
        comptpass = 0
        comptemail = 0
        $("#erlog").remove()
        $("#erpass").remove()
        $("#ermail").remove()
    })


    $('#log, #pass').keyup(function(){
        $('#connect #comptinex').remove()
        comptIn = 0
        $('#noValidate').remove()
        noVal = 0
        val = 0
        $('#validate').remove()

    })
    $('#login').keyup(function () {
        var log = $('#login').val()
        if (log == '' && comptlog == 0) {
            $("#login").after('<p style="color: red" id="erlog">remplir un login !</p>')
            comptlog = 1
        }
        if (log != '') {
            comptlog = 0
            $("#erlog").remove()
        }
    })
    $('#password').keyup(function () {
        var pass = $('#password').val()
        if (pass == '' && comptpass == 0) {
            $("#password").after('<p style="color: red" id="erpass">remplir un password !</p>')
            comptpass = 1
        }
        if (pass != '') {
            comptpass = 0
            $("#erpass").remove()
        }
    })
    $('#email').keyup(function () {
        var email = $('#email').val()
        if (email == '' && comptemail == 0) {
            $("#email").after('<p style="color: red" id="ermail">remplir un email !</p>')
            comptemail = 1
        }
        if (email != '') {
            comptemail = 0
            $("#ermail").remove()
        }

    })
    $('#log').keyup(function () {
        var logval = $('#connect #log').val()
        if (logval == "" && comptConLog == 0) {
            $('#connect #log').after("<p style='color: red;' id='errConLog'>remplir le login...</p>")
            comptConLog = 1
       }
        if (logval != '') {
            $('#errConLog').remove()
            comptConLog = 0
        }
    })
    $('#pass').keyup(function () {
        var passval = $('#connect #pass').val()
        if (passval == "" && comptConPass == 0) {
            $('#connect #pass').after('<p style="color: red;" id="errConPass">remplir le password...</p>')
            comptConPass = 1
            }
        if (passval != "") {
            $('#errConPass').remove()
            comptConPass = 0
        }
    })

    $('#inscrip').click(function toto() {
        var log = $('#login').val()
        var pass = $('#password').val()
        var email = $('#email').val()

        if (log == '' && comptlog == 0) {
            $("#login").after('<p style="color: red" id="erlog">remplir un login !</p>')
            comptlog = 1
        }
        if (log != '') {
            comptlog = 0
            $("#erlog").remove()
        }

        if (pass == '' && comptpass == 0) {
            $("#password").after('<p style="color: red" id="erpass">remplir un password !</p>')
            comptpass = 1
        }
        if (pass != '') {
            comptpass = 0
            $("#erpass").remove()
        }
        if (email == '' && comptemail == 0) {
            $("#email").after('<p style="color: red" id="ermail">remplir un email !</p>')
            comptemail = 1
        }
        if (email != '') {
            comptemail = 0
            $("#ermail").remove()
        }
        if (log != '' && pass != '' && email != '') {
            $.ajax({
                url: 'headerV.php',
                type: 'POST',
                data: 'login=' + log + '&password=' + pass + '&email=' + email
            })

            $('#inscript .form-group').remove()
            $('#inscrip').replaceWith("<button type=\"button\" id='close' class=\"btn btn-danger\" data-dismiss=\"modal\">OK</button>")
            $('#inscript .modal-body').html("<p>Un mail vous à été envoyé pour activer votre compte</p>")

        }

    })
    var comptIn = 0
    var noVal = 0
    var val = 0
    $("#connect #connexion").click(function () {
        var logval = $('#connect #log').val()
        var passval = $('#connect #pass').val()
        if (logval == "" && comptConLog == 0) {
            $('#connect #log').after("<p style='color: red;' id='errConLog'>remplir le login...</p>")
            comptConLog = 1
           }
        if (logval != '') {
            $('#errConLog').remove()
            comptConLog = 0
        }
        if (passval == "" && comptConPass == 0) {
            $('#connect #pass').after('<p style="color: red;" id="errConPass">remplir le password...</p>')
            comptConPass = 1
        }
        if (passval != "") {
            $('#errConPass').remove()
            comptConPass = 0
        }

        if (logval != '' && passval != '') {
            $.ajax({
                url: 'index.php',
                type: 'GET',
                dataType: 'html',
                data: 'login=' + logval + '&password=' + passval,
                success: function (code_html) {
                    if (code_html == 'comptinex' && comptIn == 0) {
                        $('#pass').after("<p style='color: red;' id='comptinex'>Le compte n'existe pas</p>")
                        comptIn = 1
                    }
                    if (code_html != 'comptinex') {
                        $('#comptinex').remove()
                        comptIn = 0
                    }
                    if (code_html == 'noValidate' && noVal == 0) {
                        $('#pass').after('<p style="color: red;" id="noValidate">Va valider ton compte avant</p>')
                        noVal = 1
                    }
                    if (code_html != 'noValidate') {
                        $('#noValidate').remove()
                        noVal = 0
                    }
                    if (code_html == 'validate' && val == 0) {
                        $('#pass').after('<p id="validate">tu peux entrer</p>')
                        val = 1
                    }

                    if (code_html != 'validate') {
                        $('#validate').remove()
                        val = 0
                    }
                }
            })

        }
        $('#connect #comptinex').remove()
        comptIn = 0
        $('#noValidate').remove()
        noVal = 0
        val = 0
        $('#validate').remove()
    })

})