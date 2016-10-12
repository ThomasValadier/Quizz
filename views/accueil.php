</div>
<p id="quizz" hidden><?= $_GET['quizz'] ?></p>
<h3 style="text-align: center" id="comptage"></h3>
<div id="response">

    <div id="place_for_question">
        <div class="row">
            <div class="form-group form-group-lg col-md-offset-1 col-md-10">
                <label for="questions" style="display: none">intitulé question quizz</label>
                <input name="question" class="form-control input-lg" id="questions" type="text"
                       placeholder="Entrez votre question!">
            </div>
        </div>
        <p style="text-align: center"><span id="err"
                                            style="display: none; color: red;">Veuillez remplir une question</span></p>


        <div class="row">
            <div class="form-group col-md-offset-1 col-md-10">
                <input class="form-control rep" id="option1" name="option1"
                       type="text" placeholder="... et les réponses, une correct et jusqu'à quatre fausses">
            </div>
            <span id="clickAdd"></span>
            <span id="clickDel"></span>
        </div>
        <div class="row">
            <div class="form-group col-md-offset-1 col-md-10">
                <input class="form-control  rep " id="option2" name="option2" type="text">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-offset-1 col-md-10 "><input style="display: none" id="option3"
                                                                      class="rep form-control "
                                                                      name="option3" type="text">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-offset-1 col-md-10"><input style="display: none"
                                                                     class="rep form-control"
                                                                     id="option4" name="option4" type="text"></div>
        </div>
        <div class="row">
            <div class="form-group col-md-offset-1 col-md-10"><input style="display: none"
                                                                     class="rep form-control"
                                                                     id="option5" name="option5" type="text"></div>
        </div>
        <p style="text-align: center"><span id="err1" style="display: none; text-align: center; color: red">
           Veuillez prévoir au moins deux réponses</span></p>


        <div id="answer">
            <h4 style="text-align: center">Choisir la réponse correcte</h4>
            <ul>
                <div style="text-align: center">
                    <li id="li1" style="display: none"></li>
                </div>
                <br>
                <div style="text-align: center">
                    <li id="li2" style="display: none"></li>
                </div>
                <br>
                <div style="text-align: center">
                    <li id="li3" style="display: none"></li>
                </div>
                <br>
                <div style="text-align: center">
                    <li id="li4" style="display: none"></li>
                </div>
                <br>
                <div style="text-align: center">
                    <li id="li5" style="display: none"></li>
                </div>
            </ul>

        </div>
        <p style="text-align: center"><span id="err2"
                                            style="display: none; color: red">Choisissez une bonne réponse!</span></p>
        <br>
        <button name="send" class="btn btn-success glyphicon glyphicon-check col-md-offset-4 col-md-4"
                style="color:black; font-size: 20px"
                id="send"></button>


    </div>
    <audio id="audioPlayer">
        <source src="button-28.mp3">
    </audio>

    <script src="../assets/javascript/homePage.js"></script>


    <script type="text/javascript" src="../assets/javascript/connec_ins.js"></script>
