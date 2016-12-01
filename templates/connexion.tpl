{extends file="masterPage.tpl"} 

{block name="title"}
<title>Connexion - TalentSharer</title>
{/block}

{block name="body"}
<div class="col-md-4 col-md-offset-4">
    <div class="login-panel panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Authentification à TalentSharer</h3>
        </div>
        <div class="panel-body">
            <form role="form" method="post" action="?page=profil&action=signup">
                <fieldset>
                    {include file='alert.tpl'}
                    <div class="form-group">
                        <input class="form-control" placeholder="E-mail" name="input_connexion_email" type="email" autofocus>
                    </div>
                    <div class="form-group">
                        <input class="form-control" placeholder="Mot de passe" name="input_connexion_password" type="password">
                    </div>
                    <div class="form-group">
        				<input type="submit" class="btn btn-lg btn-info btn-block" value="Se connecter">
            		</div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
{/block}

{block name=scripts}
<script type="text/javascript" src="js/connexion_form.js"></script>
{/block}