</div>
<div id="response">

    <div id="place_for_question">
        <label for="questions" style="display: none">intitulé question quizz</label><input name="question"
                                                                                           id="questions"
                                                                                           type="text"
                                                                                           placeholder="Entrez votre question!">
        <div id="toto">
            <p><input class="rep" id="option1" name="option1" type="text"></p>
            <p><input class="rep" id="option2" name="option2" type="text"></p>
            <p><input style="display: none" id="option3" class="rep" name="option3" type="text"></p>
            <p><input style="display: none" class="rep" id="option4" name="option4" type="text"></p>
            <p><input style="display: none" class="rep" id="option5" name="option5" type="text"></p>

        </div>
        <div id="answer">
            <p>Choisir la ou les réponses correctes</p>
            <ul>
                <li id="li1" style="display: none"></li>
                <li id="li2" style="display: none"></li>
                <li id="li3" style="display: none"></li>
                <li id="li4" style="display: none"></li>
                <li id="li5" style="display: none"></li>
            </ul>

        </div>
        <button name="send" id="send">Envoyer</button>


        <div id="clickAdd"></div>
        <div id="clickDel"></div>

        <div id="comptage"></div>

    </div>
    <audio id="audioPlayer">
        <source src="button-28.mp3">
    </audio>

    <script src="../assets/javascript/homePage.js"></script>


