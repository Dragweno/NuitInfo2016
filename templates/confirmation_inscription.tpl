{extends file="masterPage.tpl"} 

{block name="title"}
<title>Confirmation d'inscription - TalentSharer</title>
{/block}

{block name="body"}
<h1 class="page-header">Confirmation d'inscription</h1>
<div class="col-md-9 col-md-offset-1">
    
    {include file='alert.tpl'}
    
    <form class="form-horizontal" method="POST" action="?page=accueil">
        <div class="form-group">
            <label class="col-sm-3 control-label">
                Votre civilité:
            </label>
            <div class="col-sm-7 has-warning">
                <input class="form-control" type="text" placeholder={$smarty.post.input_register_civility} disabled>
            </div>
        </div>
        
        <div class="form-group">
            <label class="col-sm-3 control-label">
                Votre nom: 
            </label>
            <div class="col-sm-7 has-warning">
                <input class="form-control" type="text" placeholder={$smarty.post.input_register_name} disabled>
            </div>
        </div>
        
        <div class="form-group">
            <label class="col-sm-3 control-label">
                Votre prénom: 
            </label>
            <div class="col-sm-7 has-warning">
                <input class="form-control" type="text" placeholder={$smarty.post.input_register_firstname} disabled>
            </div>
        </div>
        
        <div class="form-group">
            <label class="col-sm-3 control-label">
                Votre adresse mail: 
            </label>
            <div class="col-sm-7 has-warning">
                <input class="form-control" type="text" placeholder={$smarty.post.input_register_email} disabled>
            </div>
        </div>
        
        <div class="form-group">
            <label class="col-sm-3 control-label">
                Votre adresse: 
            </label>
            <div class="col-sm-7 has-warning">
                <input class="form-control" type="text" placeholder={$smarty.post.input_register_address} disabled>
            </div>
        </div>
        
        <div class="form-group">
            <label class="col-sm-3 control-label">
                Votre code postal: 
            </label>
            <div class="col-sm-7 has-warning">
                <input class="form-control" type="text" placeholder={$smarty.post.input_register_postalcode} disabled>
            </div>
        </div>
        
        <div class="form-group">
            <label class="col-sm-3 control-label">
                Votre ville: 
            </label>
            <div class="col-sm-7 has-warning">
                <input class="form-control" type="text" placeholder={$smarty.post.input_register_city} disabled>
            </div>
        </div>
        
        <div class="form-group">
			<div class="col-sm-offset-3 col-sm-10">
				<input type="submit" class="btn btn-primary" value="Commencer l'expérience TalentSharer">
			</div>
		</div>
    </div>
    
</div>
{/block}