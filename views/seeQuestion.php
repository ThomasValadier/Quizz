<?= $res ?><br>
<button><?= $reponse->option1; ?></button><br>
<button><?= $reponse->option2; ?></button><br>
<?php if ($reponse->option3 != "")
    echo "<button> $reponse->option3 </button><br>";
if ($reponse->option4 != "")
    echo "<button>$reponse->option4</button><br>";
if ($reponse->option5 != "")
    echo "<button> $reponse->option4</button><br>" ?>

<button id="questSuiv"></button><!-- bouton pour faire l'équivalent de la ligne commenté du dessous en ajax-->
<!--<a href="seeQuestion.php?id_quest=<?= // $result + 1  ?>&id=<?= //$id  ?>">Suivant</a>-->
<script type="text/javascript" src="../assets/javascript/connec_ins.js"></script>

