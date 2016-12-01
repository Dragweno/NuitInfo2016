<?php /* Smarty version 3.1.27, created on 2016-01-14 10:32:10
         compiled from "templates/modifier_profil.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:12936001485697792a024239_85038086%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b0863bb2cd131e38792d0faf4e3fdaa5512b3125' => 
    array (
      0 => 'templates/modifier_profil.tpl',
      1 => 1451993329,
      2 => 'file',
    ),
    '04ed89cfa6346d8208b07422c959916fa0a8f519' => 
    array (
      0 => 'templates/masterPage.tpl',
      1 => 1452435349,
      2 => 'file',
    ),
    '1d78d80589a24bacb05404201996e271d8fbc0be' => 
    array (
      0 => '1d78d80589a24bacb05404201996e271d8fbc0be',
      1 => 0,
      2 => 'string',
    ),
    'cb377e87a6e17fd3440e529d8d0c10e30cc31c31' => 
    array (
      0 => 'cb377e87a6e17fd3440e529d8d0c10e30cc31c31',
      1 => 0,
      2 => 'string',
    ),
    '57b487ac78e327000a2f696f06890dfad585bf9e' => 
    array (
      0 => 'templates/alert.tpl',
      1 => 1452728881,
      2 => 'file',
    ),
    'f5b53bee7b0ffe4665a6fbf3263c8a169a9ed750' => 
    array (
      0 => 'f5b53bee7b0ffe4665a6fbf3263c8a169a9ed750',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '12936001485697792a024239_85038086',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5697792a19e5c5_30022382',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5697792a19e5c5_30022382')) {
function content_5697792a19e5c5_30022382 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '12936001485697792a024239_85038086';
?>
<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Tavernier - Henry">
    
    <link rel="icon" href="../img/favicon.ico" />

    <?php
$_smarty_tpl->properties['nocache_hash'] = '12936001485697792a024239_85038086';
?>

<title>Modifier profil - TalentSharer</title>


    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../css/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top navbar-static-top" role="navigation">

			<?php echo $_smarty_tpl->getSubTemplate ('navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

			
			<?php echo $_smarty_tpl->getSubTemplate ('menuLeft.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

			
        </nav>
		<!-- /.Navigation -->

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row"><br><br>
                    
                    <?php
$_smarty_tpl->properties['nocache_hash'] = '12936001485697792a024239_85038086';
?>

<div class="col-lg-12">
    <h1 class="page-header">Modifier mes informations</h1>
    
    <?php /*  Call merged included template "alert.tpl" */
echo $_smarty_tpl->getInlineSubTemplate('alert.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '14649948755697792a0ddec2_51505383', 'content_5697792a0dd371_88053697');
/*  End of included template "alert.tpl" */?>


	<!-- Form subscribe -->
	<form class="form-horizontal" method="POST" action="?page=profil&action=edit_profil">
		
		<div class="form-group">
			<label class="col-sm-2 control-label">
				Civilité:
			</label>
			<div class="col-sm-10">
				<select type="text" class="form-control" id="input_edit_civility" name="input_edit_civility">
					<option <?php if (($_smarty_tpl->tpl_vars['user']->value['Civility'] == 'Mlle.')) {?> selected <?php }?> >Mlle.</option>
					<option <?php if (($_smarty_tpl->tpl_vars['user']->value['Civility'] == 'Mme.')) {?> selected <?php }?> >Mme.</option>
					<option <?php if (($_smarty_tpl->tpl_vars['user']->value['Civility'] == 'M.')) {?> selected <?php }?> >M.</option>
				</select>
			</div>
		</div>
		
		<div class="form-group">
			<label class="col-sm-2 control-label" for="input_edit_name">
				Nom:
			</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" placeholder="Entrez ici votre nom." pattern="[a-Z]" id="input_edit_name" name="input_edit_name" aria-describedby="help-name" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['Name'];?>
">
				<span id="help-name" class="help-block">Le nom ne doit contenir que des lettres.</span>
			</div>
		</div>
		
		<div class="form-group" for="input_edit_firstname">	
			<label class="col-sm-2 control-label" for="input_edit_firstname">
				Prénom:
			</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" placeholder="Entrez ici votre prénom." pattern= "[a-Z]" id="input_edit_firstname" name="input_edit_firstname" aria-describedby="help-firstname" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['Firstname'];?>
">
				<span id="help-firstname" class="help-block">Le prénom ne doit contenir que des lettres.</span>
			</div>
		</div>
		
		<div class="form-group" for="input_edit_email">
			<label class="col-sm-2 control-label">
				E-mail:
			</label>
			<div class="col-sm-10">
				<input type="email" class="form-control" placeholder="Entrez ici votre adresse mail." id="input_edit_email" name="input_edit_email" aria-describedby="help-email" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['Email'];?>
">
				<span id="help-email" class="help-block">Veuillez entrer une adresse valide : xxxxxxx@yyyyy.zz</span>
			</div>
		</div>
		
		<div class="form-group">
			<label class="col-sm-2 control-label" for="input_edit_address">
				Adresse:
			</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" placeholder="Entrez ici votre adresse." id="input_edit_address" name="input_edit_address" aria-describedby="help-address" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['Address'];?>
">
				<span id="help-address" class="help-block">L'adresse ne peut contenir que des chiffres, lettres et espace.</span>
			</div>
		</div>
		
		<div class="form-group">
			<label class="col-sm-2 control-label" for="input_edit_postalcode">
				Code Postal:
			</label>
			<div class="col-sm-10">
			    <input type="text" class="form-control" placeholder="Entrez ici votre code postal." id="input_edit_postalcode" name="input_edit_postalcode" aria-describedby="help-postalcode" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['PostalCode'];?>
">
			    <span id="help-postalcode" class="help-block">Le code postal doit être composé de 5 chiffres.</span>
			</div>
		</div>
		
		<div class="form-group">
			<label class="col-sm-2 control-label" for="input_edit_city">
				Ville:
			</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" placeholder="Entrez ici votre ville."  id="input_edit_city" name="input_edit_city" aria-describedby="help-city" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['City'];?>
">
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

                    
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.Page Content -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <?php echo '<script'; ?>
 src="../js/jquery.min.js"><?php echo '</script'; ?>
>

    <!-- Bootstrap Core JavaScript -->
    <?php echo '<script'; ?>
 src="../js/bootstrap.min.js"><?php echo '</script'; ?>
>

    <!-- Metis Menu Plugin JavaScript -->
    <?php echo '<script'; ?>
 src="../js/metisMenu.min.js"><?php echo '</script'; ?>
>

    <!-- Custom Theme JavaScript -->
    <?php echo '<script'; ?>
 src="../js/sb-admin-2.js"><?php echo '</script'; ?>
>
    
    <!-- Tools Script -->
    <?php echo '<script'; ?>
 src="../js/cnam.js"><?php echo '</script'; ?>
>
    
    <!-- Tpl Javascript -->
    <?php
$_smarty_tpl->properties['nocache_hash'] = '12936001485697792a024239_85038086';
?>

<?php echo '<script'; ?>
 type="text/javascript" src="js/edit_profil_form.js"><?php echo '</script'; ?>
>


</body>

</html><?php }
}
?><?php
/*%%SmartyHeaderCode:14649948755697792a0ddec2_51505383%%*/
if ($_valid && !is_callable('content_5697792a0dd371_88053697')) {
function content_5697792a0dd371_88053697 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '14649948755697792a0ddec2_51505383';
if (isset($_SESSION['alerttype'])) {?>
<div class="alert alert-dismissable alert-<?php echo $_SESSION['alerttype'];?>
">
    <button data-dismiss="alert" class="close" type="button">×</button>
    <h4>
    <?php if (($_SESSION['alerttype'] == 'success')) {?>
        Well done!
    <?php } elseif (($_SESSION['alerttype'] == 'info')) {?>
        Heads up!
    <?php } elseif (($_SESSION['alerttype'] == 'warning')) {?>
        Warning!
    <?php } elseif (($_SESSION['alerttype'] == 'danger')) {?>
        Oh snap!
    <?php }?>
    </h4>
    <p id="alert_content"><?php echo $_SESSION['alerttext'];?>
</p>
</div>
<?php }?>
<?php
/*/%%SmartyNocache:14649948755697792a0ddec2_51505383%%*/
}
}
?>