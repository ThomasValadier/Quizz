$(function () {
    var comptlog = 0
    var comptpass = 0
    var comptemail = 0
    var comptConLog = 0
    var comptConPass = 0

    $('#boutConIns').click(function () {
        $('#errConLog').remove()
        $('#errConPass').remove()
    })
    $('#insForm').click(function () {
        $("#erlog").remove()
        $("#erpass").remove()
        $("#ermail").remove()
    })

    $('#inscrip').click(function toto() {
        var log = $('#login').val();
        var pass = $('#password').val();
        var email = $('#email').val();

        if (log == '' && comptlog == 0) {
            $("#login").after('<p style="color: red" id="erlog">remplir un login !</p>')
            comptlog = 1
        }
        else if (log != '') {
            comptlog = 0
            $("#erlog").remove()
        }

        if (pass == '' && comptpass == 0) {
            $("#password").after('<p style="color: red" id="erpass">remplir un password !</p>')
            comptpass = 1
        }
        else if (pass != '') {
            comptpass = 0
            $("#erpass").remove()
        }
        if (email == '' && comptemail == 0) {
            $("#email").after('<p style="color: red" id="ermail">remplir un email !</p>')
            comptemail = 1
        }
        else if (email != '') {
            comptemail = 0
            $("#ermail").remove()
        }
        if (log != '' && pass != '' && email != '') {
            $.ajax({
                url: 'headerV.php',
                type: 'POST',
                data: 'login=' + log + '&password=' + pass + '&email=' + email
            })
            $('#password').val('');
            $('#login').val('');
            $('#email').val('');
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
            /* $("#validate").remove()
             $("#noValidate").remove()
             $("#comptinex").remove()*/

        }
        else if (logval != '') {
            $('#errConLog').remove()
            comptConLog = 0
        }
        if (passval == "" && comptConPass == 0) {
            // $("#noValidate").hide()
            // $("#comptinex").remove()
            $('#connect #pass').after('<p style="color: red;" id="errConPass">remplir le password...</p>')
            comptConPass = 1
            //  $("#validate").remove()

            //  $("#comptinex").remove()
        }
        else if (passval != "") {
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
                    /*   if (code_html == 'existe')
                     // alert(code_html)
                     // $('#petitgar').css("display", "inline")
                     // else if (code_html == 'toto')
                     $('#petitgar').css("display", "inline")*/
                    if (code_html == 'comptinex' && comptIn == 0) {
                        $('#pass').after("<p style='color: red;' id='comptinex'>Le compte n'existe pas</p>")
                        comptIn = 1
                    }
                    else if (code_html != 'comptinex') {
                        $('#comptinex').remove()
                        comptIn = 0
                    }
                    if (code_html == 'noValidate' && noVal == 0) {
                        $('#pass').after('<p style="color: red;" id="noValidate">Va valider ton compte avant</p>')
                        noVal = 1
                    }
                    else if (code_html != 'noValidate') {
                        $('#noValidate').remove()
                        noVal = 0
                    }
                    if (code_html == 'validate' && val == 0) {
                        $('#pass').after('<p id="validate">tu peux entrer</p>')
                        val = 1
                    }

                    else if (code_html != 'validate') {
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
        // $('#petitgar').css("display", "none")
        //   $('#petitgr').css("display", "none")
    })

})