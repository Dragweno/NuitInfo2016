<?php /* Smarty version 3.1.27, created on 2016-12-01 21:08:21
         compiled from "templates/connexion.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1507294558408335496849_43958161%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3fa98a1f48b7c10f871aa889e62689a20ee7d974' => 
    array (
      0 => 'templates/connexion.tpl',
      1 => 1480611318,
      2 => 'file',
    ),
    '04ed89cfa6346d8208b07422c959916fa0a8f519' => 
    array (
      0 => 'templates/masterPage.tpl',
      1 => 1480611318,
      2 => 'file',
    ),
    '5449fadf4c0112e62c06d4508ec4f21c8e79511b' => 
    array (
      0 => '5449fadf4c0112e62c06d4508ec4f21c8e79511b',
      1 => 0,
      2 => 'string',
    ),
    '26f948ac244b182457d6aec7c518efd0c6b6eb35' => 
    array (
      0 => '26f948ac244b182457d6aec7c518efd0c6b6eb35',
      1 => 0,
      2 => 'string',
    ),
    '57b487ac78e327000a2f696f06890dfad585bf9e' => 
    array (
      0 => 'templates/alert.tpl',
      1 => 1480611318,
      2 => 'file',
    ),
    '63b127541394770776db04c188f6df08e43b9544' => 
    array (
      0 => '63b127541394770776db04c188f6df08e43b9544',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '1507294558408335496849_43958161',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5840833568b5e8_00679931',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5840833568b5e8_00679931')) {
function content_5840833568b5e8_00679931 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1507294558408335496849_43958161';
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
$_smarty_tpl->properties['nocache_hash'] = '1507294558408335496849_43958161';
?>

<title>Connexion - TalentSharer</title>


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
$_smarty_tpl->properties['nocache_hash'] = '1507294558408335496849_43958161';
?>

<div class="col-md-4 col-md-offset-4">
    <div class="login-panel panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Authentification à TalentSharer</h3>
        </div>
        <div class="panel-body">
            <form role="form" method="post" action="?page=profil&action=signup">
                <fieldset>
                    <?php /*  Call merged included template "alert.tpl" */
echo $_smarty_tpl->getInlineSubTemplate('alert.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '7003540315840833564db07_74528685', 'content_5840833564d5f5_54082704');
/*  End of included template "alert.tpl" */?>

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
$_smarty_tpl->properties['nocache_hash'] = '1507294558408335496849_43958161';
?>

<?php echo '<script'; ?>
 type="text/javascript" src="js/connexion_form.js"><?php echo '</script'; ?>
>


</body>

</html><?php }
}
?><?php
/*%%SmartyHeaderCode:7003540315840833564db07_74528685%%*/
if ($_valid && !is_callable('content_5840833564d5f5_54082704')) {
function content_5840833564d5f5_54082704 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '7003540315840833564db07_74528685';
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
/*/%%SmartyNocache:7003540315840833564db07_74528685%%*/
}
}
?>