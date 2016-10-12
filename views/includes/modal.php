<!-- Modal -->
<div id="connect" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <input class="form-control" required="required" autofocus placeholder="login" type="text">
                </div>
                <div class="form-group">
                    <input class="form-control" required="required" class="sign-up-input" placeholder="password"
                           type="text">
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="sign-up-button btn btn-info">Connexion</button>
                <!-- Trigger the modal with a button -->
                <button id="insForm" type="submit" class="btn btn-info" data-dismiss="modal" data-toggle="modal"
                        data-target="#inscript">
                    Inscription
                </button>
            </div>
        </div>

    </div>
</div>
<!-- Modal -->
<div id="inscript" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <input class="form-control" id="login" name="log_ins" placeholder="login" type="text">
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" id="password" name="pass_ins" placeholder="password"
                           type="text">
                </div>
                <div class="form-group">
                    <input class="form-control" id="email" name="email_ins" placeholder="email">
                </div>
            </div>
            <div class="modal-footer">
                <button name="inscrip" id="inscrip" type=""
                        class="glyphicon glyphicon-ok btn btn-success"></button>
            </div>

        </div>

    </div>
</div>