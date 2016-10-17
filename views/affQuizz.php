<div class="table-responsive col-md-offset-1 col-md-10">
    <table class="table table-bordered table-hover ">
        <thead>
        <tr>
            <th>Tous les quizz. Les grisés sont inactifs</th>

        </tr>
        </thead>
        <tbody>
        <?php foreach ($result as $data): ?>
        <tr class="">

            <th scope="row">
                <a href="seeQuestion.php?id=<?= $data->id_quizz ?>"><?= $data->titre ?></a><br>
            </th>
            <?php endforeach ?>
        </tr>


        </tbody>
    </table>
</div>
<script type="text/javascript" src="../assets/javascript/connec_ins.js"></script>