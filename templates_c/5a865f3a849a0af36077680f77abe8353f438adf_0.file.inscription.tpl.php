<?php /* Smarty version 3.1.27, created on 2016-01-14 10:30:52
         compiled from "templates/inscription.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:52994543569778dc0c9871_53915963%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a865f3a849a0af36077680f77abe8353f438adf' => 
    array (
      0 => 'templates/inscription.tpl',
      1 => 1451987717,
      2 => 'file',
    ),
    '04ed89cfa6346d8208b07422c959916fa0a8f519' => 
    array (
      0 => 'templates/masterPage.tpl',
      1 => 1452435349,
      2 => 'file',
    ),
    '716cb1bf8db617656d4c710c13a97252a654484e' => 
    array (
      0 => '716cb1bf8db617656d4c710c13a97252a654484e',
      1 => 0,
      2 => 'string',
    ),
    'f44de428237ce4ee0551d5bc88e102f5640b6e78' => 
    array (
      0 => 'f44de428237ce4ee0551d5bc88e102f5640b6e78',
      1 => 0,
      2 => 'string',
    ),
    '57b487ac78e327000a2f696f06890dfad585bf9e' => 
    array (
      0 => 'templates/alert.tpl',
      1 => 1452728881,
      2 => 'file',
    ),
    'ae48a1527cd74d9477c240f2e2145dd70207be3c' => 
    array (
      0 => 'ae48a1527cd74d9477c240f2e2145dd70207be3c',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '52994543569778dc0c9871_53915963',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_569778dc1c2011_08115991',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_569778dc1c2011_08115991')) {
function content_569778dc1c2011_08115991 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '52994543569778dc0c9871_53915963';
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
$_smarty_tpl->properties['nocache_hash'] = '52994543569778dc0c9871_53915963';
?>

<title>Inscription - TalentSharer</title>


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
$_smarty_tpl->properties['nocache_hash'] = '52994543569778dc0c9871_53915963';
?>

<div class="col-lg-12">
    <h1 class="page-header">Formulaire d'inscription</h1>
    
    <?php /*  Call merged included template "alert.tpl" */
echo $_smarty_tpl->getInlineSubTemplate('alert.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '1321853118569778dc140484_05953811', 'content_569778dc13fc03_22100179');
/*  End of included template "alert.tpl" */?>

    
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
$_smarty_tpl->properties['nocache_hash'] = '52994543569778dc0c9871_53915963';
?>

<?php echo '<script'; ?>
 type="text/javascript" src="js/subscrib_form.js"><?php echo '</script'; ?>
>


</body>

</html><?php }
}
?><?php
/*%%SmartyHeaderCode:1321853118569778dc140484_05953811%%*/
if ($_valid && !is_callable('content_569778dc13fc03_22100179')) {
function content_569778dc13fc03_22100179 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '1321853118569778dc140484_05953811';
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
/*/%%SmartyNocache:1321853118569778dc140484_05953811%%*/
}
}
?>