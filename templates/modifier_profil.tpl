{extends file="masterPage.tpl"} 

{block name="title"}
<title>Modifier profil - TalentSharer</title>
{/block}

{block name="body"}
<div class="col-lg-12">
    <h1 class="page-header">Modifier mes informations</h1>
    
    {include file='alert.tpl'}

	<!-- Form subscribe -->
	<form class="form-horizontal" method="POST" action="?page=profil&action=edit_profil">
		
		<div class="form-group">
			<label class="col-sm-2 control-label">
				Civilité:
			</label>
			<div class="col-sm-10">
				<select type="text" class="form-control" id="input_edit_civility" name="input_edit_civility">
					<option {if ($user.Civility eq 'Mlle.')} selected {/if} >Mlle.</option>
					<option {if ($user.Civility eq 'Mme.')} selected {/if} >Mme.</option>
					<option {if ($user.Civility eq 'M.')} selected {/if} >M.</option>
				</select>
			</div>
		</div>
		
		<div class="form-group">
			<label class="col-sm-2 control-label" for="input_edit_name">
				Nom:
			</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" placeholder="Entrez ici votre nom." pattern="[a-Z]" id="input_edit_name" name="input_edit_name" aria-describedby="help-name" value="{$user.Name}">
				<span id="help-name" class="help-block">Le nom ne doit contenir que des lettres.</span>
			</div>
		</div>
		
		<div class="form-group" for="input_edit_firstname">	
			<label class="col-sm-2 control-label" for="input_edit_firstname">
				Prénom:
			</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" placeholder="Entrez ici votre prénom." pattern= "[a-Z]" id="input_edit_firstname" name="input_edit_firstname" aria-describedby="help-firstname" value="{$user.Firstname}">
				<span id="help-firstname" class="help-block">Le prénom ne doit contenir que des lettres.</span>
			</div>
		</div>
		
		<div class="form-group" for="input_edit_email">
			<label class="col-sm-2 control-label">
				E-mail:
			</label>
			<div class="col-sm-10">
				<input type="email" class="form-control" placeholder="Entrez ici votre adresse mail." id="input_edit_email" name="input_edit_email" aria-describedby="help-email" value="{$user.Email}">
				<span id="help-email" class="help-block">Veuillez entrer une adresse valide : xxxxxxx@yyyyy.zz</span>
			</div>
		</div>
		
		<div class="form-group">
			<label class="col-sm-2 control-label" for="input_edit_address">
				Adresse:
			</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" placeholder="Entrez ici votre adresse." id="input_edit_address" name="input_edit_address" aria-describedby="help-address" value="{$user.Address}">
				<span id="help-address" class="help-block">L'adresse ne peut contenir que des chiffres, lettres et espace.</span>
			</div>
		</div>
		
		<div class="form-group">
			<label class="col-sm-2 control-label" for="input_edit_postalcode">
				Code Postal:
			</label>
			<div class="col-sm-10">
			    <input type="text" class="form-control" placeholder="Entrez ici votre code postal." id="input_edit_postalcode" name="input_edit_postalcode" aria-describedby="help-postalcode" value="{$user.PostalCode}">
			    <span id="help-postalcode" class="help-block">Le code postal doit être composé de 5 chiffres.</span>
			</div>
		</div>
		
		<div class="form-group">
			<label class="col-sm-2 control-label" for="input_edit_city">
				Ville:
			</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" placeholder="Entrez ici votre ville."  id="input_edit_city" name="input_edit_city" aria-describedby="help-city" value="{$user.City}">
				<span id="help-city" class="help-block">La ville ne peut comprendre que des lettres.</span>
			</div>
		</div>
		
		<div class="panel panel-default">
            <div class="panel-heading">Changer de mot de passe</div>
            <ul class="list-group">
                <li class="list-group-item">
                    <div class="form-group">
            			<label class="col-sm-2 control-label" for="input_edit_old_password">
            				Ancien mot de passe:
            			</label>
            			<div class="col-sm-10">
            				<input type="password" class="form-control" placeholder="Entrez votre ancien mot de passe." id="input_edit_old_password" name="input_edit_old_password" aria-describedby="help-old-password">
            				<span id="help-old-password" class="help-block">Le mot de passe saisi n'est pas le bon.</span>
            			</div>
            		</div>
                </li>
                <li class="list-group-item">
                    <div class="form-group">
            			<label class="col-sm-2 control-label" for="input_edit_password">
            				Nouveau mot de passe:
            			</label>
            			<div class="col-sm-10">
            				<input type="password" class="form-control" placeholder="Entrez votre nouveau mot de passe." id="input_edit_password" name="input_edit_password" aria-describedby="help-password">
            				<span id="help-password" class="help-block">Le mot de passe doit contenir au minimum 8 caractères, au moins une majuscule et un chiffre.</span>
            			</div>
            		</div>
                	<div class="form-group">
                    	<label class="col-sm-2 control-label" for="input_edit_passwordconfirm">
            				Confirmation mot de passe:
            			</label>
            			<div class="col-sm-10">
            				<input type="password" class="form-control" placeholder="Confirmer votre nouveau mot de passe." id="input_edit_passwordconfirm" name="input_edit_passwordconfirm" aria-describedby="help-passwordconfirm">
            				<span id="help-passwordconfirm" class="help-block">Le mot de passe et sa confirmation ne correspondent pas.</span>
            			</div>
            		</div>
                </li>
            </ul>
        </div>
		
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<input type="submit" class="btn btn-primary" value="Sauvegarder les changements">
			</div>
		</div>
							
	</form>
	<!-- /.Form subscribe -->
	
</div>
{/block}
                    
{block name=scripts}
<script type="text/javascript" src="js/edit_profil_form.js"></script>
{/block}