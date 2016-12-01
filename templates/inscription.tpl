{extends file="masterPage.tpl"} 

{block name="title"}
<title>Inscription - TalentSharer</title>
{/block}

{block name="body"}
<div class="col-lg-12">
    <h1 class="page-header">Formulaire d'inscription</h1>
    
    {include file='alert.tpl'}
    
	<!-- Form subscribe -->
	<form class="form-horizontal" method="POST" action="?page=profil&action=signin">
		<input type="hidden" name="page" value=""/>
		
		<div class="form-group">
			<label class="col-sm-2 control-label">
				Civilité:
			</label>
			<div class="col-sm-10">
				<select type="text" class="form-control" id="input_register_civility" name="input_register_civility">
					<option>Mlle.</option>
					<option>Mme.</option>
					<option>M.</option>
				</select>
			</div>
		</div>
		
		<div class="form-group">
			<label class="col-sm-2 control-label" for="input_register_name">
				Nom:
			</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" placeholder="Entrez ici votre nom." pattern= "[a-Z]" id="input_register_name" name="input_register_name" aria-describedby="help-name">
				<span id="help-name" class="help-block">Le nom ne doit contenir que des lettres.</span>
			</div>
		</div>
		
		<div class="form-group">	
			<label class="col-sm-2 control-label" for="input_register_firstname">
				Prénom:
			</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" placeholder="Entrez ici votre prénom." pattern= "[a-Z]" id="input_register_firstname" name="input_register_firstname" aria-describedby="help-firstname">
				<span id="help-firstname" class="help-block">Le prénom ne doit contenir que des lettres.</span>
			</div>
		</div>
		
		<div class="form-group">
			<label class="col-sm-2 control-label" for="input_register_email">
				E-mail:
			</label>
			<div class="col-sm-10">
				<input type="email" class="form-control" placeholder="Entrez ici votre adresse mail." id="input_register_email" name="input_register_email" aria-describedby="help-email">
				<span id="help-email" class="help-block">Veuillez entrer une adresse valide : xxxxxxx@yyyyy.zz</span>
			</div>
		</div>
		
		<div class="form-group">
			<label class="col-sm-2 control-label" for="input_register_password">
				Mot de passe:
			</label>
			<div class="col-sm-10">
				<input type="password" class="form-control" placeholder="Entrez à nouveau votre mot de passe." id="input_register_password" name="input_register_password" aria-describedby="help-password">
				<span id="help-password" class="help-block">Le mot de passe doit contenir au minimum 8 caractères, au moins une majuscule et un chiffre.</span>
			</div>
		</div>
		
    	<div class="form-group">
        	<label class="col-sm-2 control-label" for="input_register_passwordconfirm">
				Confirmation de mot de passe:
			</label>
			<div class="col-sm-10">
				<input type="password" class="form-control" placeholder="Confirmer votre mot de passe." id="input_register_passwordconfirm" name="input_register_passwordconfirm" aria-describedby="help-passwordconfirm">
				<span id="help-passwordconfirm" class="help-block">Le mot de passe et sa confirmation ne correspondent pas.</span>
			</div>
		</div>
		
		<div class="form-group">
			<label class="col-sm-2 control-label" for="input_register_address">
				Adresse:
			</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" placeholder="Entrez ici votre adresse." pattern= "^[0-9a-zA-Z ]+$" id="input_register_address" name="input_register_address" aria-describedby="help-address">
				<span id="help-address" class="help-block">L'adresse ne peut contenir que des chiffres, lettres et espace.</span>
			</div>
		</div>
		
		<div class="form-group">
			<label class="col-sm-2 control-label" for="input_register_postalcode">
				Code Postal:
			</label>
			<div class="col-sm-10">
			    <input type="text" class="form-control" placeholder="Entrez ici votre code postal." id="input_register_postalcode" name="input_register_postalcode" aria-describedby="help-postalcode">
				<span id="help-postalcode" class="help-block">Le code postal doit être composé de 5 chiffres.</span>
			</div>
		</div>
		
		<div class="form-group">
			<label class="col-sm-2 control-label" for="input_register_city">
				Ville:
			</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" placeholder="Entrez ici votre ville." pattern= "[a-Z]" id="input_register_city" name="input_register_city" aria-describedby="help-city">
				<span id="help-city" class="help-block">La ville ne peut comprendre que des lettres.</span>
			</div>
		</div>
		
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<input type="submit" class="btn btn-primary" value="Valider">
			</div>
		</div>
							
	</form>
	<!-- /.Form subscribe -->
	
</div>
{/block}

{block name=scripts}
<script type="text/javascript" src="js/subscrib_form.js"></script>
{/block}