$(function () {
    var compteur1 = 0
    var compteur2 = 0
    var compteur3 = 0
    var compteur4 = 0
    var compteur5 = 0
    var nbReponse = 1
    var li1
    var max = $('.rep').length


    function test() {
        $('#comptage').html(nbReponse + "/20")
        var compt = 0
        for (i = 0; i < max + 1; i++) {
            if ($('input[name ="option' + i + '"]').is(':visible'))
                compt++
        }
        var how = compt
        var insert_how = how + 1
        if (how <= 5) {
            $('#clickAdd').html('<button id="click_add">Ajouter reponse</button>')
            $('#click_add').click(function () {

                var elem_affich = $("input[name = 'option" + insert_how + "']")
                elem_affich.css('display', 'inline')

                test();
            })
            if (how > 2) {
                $('#clickDel').html('<button id="click_del">Supprimer réponse</button>')
                $('#click_del').click(function () {
                    $("input[name = 'option" + how + "']").val('').css('display', 'none')
                    li1 = null
                    var background = $("#li" + how).css("background-color")
                    // alert(background)
                    for (i = 1; i < insert_how; i++) {
                        $('#li' + i).css('background-color', 'inherit')
                    }
                    // if (background === "rgb(211, 211, 211)")
                    //  alert('toto')
                    compteur1 = 0
                    compteur2 = 0
                    compteur3 = 0
                    compteur4 = 0
                    //compteur + "" = 0
                    //  $("#li" + how).css("background-color", "inherit")
                    $('#li' + how).hide()
                    $("#click_add").show()
                    test()
                })

            }
            if (how == 2) {
                $('#click_del').hide();
            }
            $('#clickAdd').show()
        }
        if (how == 5) {
            $('#clickAdd').hide()
        }
    }


    $("input[name = 'option1']").keyup(function () {

        var value = $(this).val()
        $('#li1').html(value)
        $('#li1').css({
            display: 'inline'
        })
        $('#li1').attr('class', "btn btn-default")
        if (value == "")
            $('#li1').attr('class', "inherit")


    })
    $("input[name = 'option2']").keyup(function () {

        var value = $(this).val()
        $('#li2').html(value)
        $('#li2').css('display', 'inline')
        $('#li2').attr('class', "btn btn-default")
        if (value == "")
            $('#li2').attr('class', "inherit")

    })

    $("input[name = 'option3']").keyup(function () {
        var value = $(this).val()
        $('#li3').html(value)
        $('#li3').css('display', 'inline')
        $('#li3').attr('class', "btn btn-default")
        if (value == "")
            $('#li3').attr('class', "inherit")
    })
    $("input[name = 'option4']").keyup(function () {
        var value = $(this).val()
        $('#li4').html(value)
        $('#li4').css('display', 'inline')
        $('#li4').attr('class', "btn btn-default")
        if (value == "")
            $('#li4').attr('class', "inherit")
    })
    $("input[name = 'option5']").keyup(function () {
        var value = $(this).val()
        $('#li5').html(value)
        $('#li5').css('display', 'inline')
        $('#li5').attr('class', "btn btn-default")
        if (value == "")
            $('#li5').attr('class', "inherit")
    })
    test()

    $('#li1').click(function () {
        if (compteur2 == 0 && compteur3 == 0 && compteur4 == 0 && compteur5 == 0) {
            if (compteur1 == 0) {
                $(this).css("background-color", "lightgrey")
                compteur1++
                li1 = $(this).html()
            }
            else {
                $(this).css("background-color", "inherit")
                compteur1 = 0
                li1 = null
            }
        }
        else {
            var player = document.querySelector('#audioPlayer');
            player.play();
        }
    })
    $('#li2').click(function () {
        if (compteur1 == 0 && compteur3 == 0 && compteur4 == 0 && compteur5 == 0) {
            if (compteur2 == 0) {
                $(this).css("background-color", "lightgrey")
                compteur2++
                li1 = $(this).html()
            }
            else {
                $(this).css("background-color", "inherit")
                compteur2 = 0
                li1 = null
            }
        }
        else {
            var player = document.querySelector('#audioPlayer');
            player.play();
        }
    })
    $('#li3').click(function () {
        if (compteur1 == 0 && compteur2 == 0 && compteur4 == 0 && compteur5 == 0) {
            if (compteur3 == 0) {
                $(this).css("background-color", "lightgrey")
                compteur3++
                li1 = $(this).html()
            }
            else {
                $(this).css("background-color", "inherit")
                compteur3 = 0
                li1 = null
            }
        }
        else {
            var player = document.querySelector('#audioPlayer');
            player.play();
        }
    })
    $('#li4').click(function () {
        if (compteur1 == 0 && compteur3 == 0 && compteur2 == 0 && compteur5 == 0) {
            if (compteur4 == 0) {
                $(this).css("background-color", "lightgrey")
                compteur4++
                li1 = $(this).html()
            }
            else {
                $(this).css("background-color", "inherit")
                compteur4 = 0
                li1 = null
            }
        }
        else {
            var player = document.querySelector('#audioPlayer');
            player.play();
        }
    })
    $('#li5').click(function () {
        if (compteur1 == 0 && compteur3 == 0 && compteur4 == 0 && compteur2 == 0) {
            if (compteur5 == 0) {
                $(this).css("background-color", "lightgrey")
                compteur5++
                li1 = $(this).html()
            }
            else {
                $(this).css("background-color", "inherit")
                compteur5 = 0
                li1 = null
            }
        } else {
            var player = document.querySelector('#audioPlayer');
            player.play();
        }
    })

    $('#send').click(function () {
        var ques = $('#questions').val()
        var op1 = $('#option1').val()
        var op2 = $('#option2').val()
        var op3 = $('#option3').val()
        var op4 = $('#option4').val()
        var op5 = $('#option5').val()
        if (ques == "") {
            alert("Sans question...")
        }
            else if (op1 =="" || op2 ==""){
            alert("Sans reponse...")
        }
            else if (li1 == null){
            alert("Sans bonne réponse..")
        }
        else {
            $.ajax({
                url: 'accueil.php',
                type: 'GET',
                data: 'reponse=' + li1 + '&option1=' + op1 + '&option2=' + op2 + '&question=' + ques + '&option3=' + op3 +
                '&option4=' + op4 + '&option5=' + op5,
                success: function () {
                    if (nbReponse < 3) {
                        $("input").val('')
                        li1 = null

                        $("#place_for_question li").css('background-color', 'inherit')
                        $("#place_for_question li").hide();
                        $('#option3').css('display', 'none')
                        $('#option4').css('display', 'none')
                        $('#option5').css('display', 'none')
                        compteur1 = 0
                        compteur2 = 0
                        compteur3 = 0
                        compteur4 = 0
                        compteur5 = 0
                        nbReponse++
                        test()

                    }
                    else
                        alert("fini")
                }
            })
        }
    })
})
