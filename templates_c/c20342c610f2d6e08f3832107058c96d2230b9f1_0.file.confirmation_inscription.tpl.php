<?php /* Smarty version 3.1.27, created on 2016-01-14 10:32:01
         compiled from "templates/confirmation_inscription.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3943553356977921acec26_07720698%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c20342c610f2d6e08f3832107058c96d2230b9f1' => 
    array (
      0 => 'templates/confirmation_inscription.tpl',
      1 => 1452007306,
      2 => 'file',
    ),
    '04ed89cfa6346d8208b07422c959916fa0a8f519' => 
    array (
      0 => 'templates/masterPage.tpl',
      1 => 1452435349,
      2 => 'file',
    ),
    'ed9a694a26ca5d941d852bf9f749c9ac15780995' => 
    array (
      0 => 'ed9a694a26ca5d941d852bf9f749c9ac15780995',
      1 => 0,
      2 => 'string',
    ),
    '30c276844f7b21a9458c30b5f686fd813e6f423c' => 
    array (
      0 => '30c276844f7b21a9458c30b5f686fd813e6f423c',
      1 => 0,
      2 => 'string',
    ),
    '57b487ac78e327000a2f696f06890dfad585bf9e' => 
    array (
      0 => 'templates/alert.tpl',
      1 => 1452728881,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3943553356977921acec26_07720698',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56977921d2b9c5_00979030',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56977921d2b9c5_00979030')) {
function content_56977921d2b9c5_00979030 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3943553356977921acec26_07720698';
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
$_smarty_tpl->properties['nocache_hash'] = '3943553356977921acec26_07720698';
?>

<title>Confirmation d'inscription - TalentSharer</title>


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
$_smarty_tpl->properties['nocache_hash'] = '3943553356977921acec26_07720698';
?>

<h1 class="page-header">Confirmation d'inscription</h1>
<div class="col-md-9 col-md-offset-1">
    
    <?php /*  Call merged included template "alert.tpl" */
echo $_smarty_tpl->getInlineSubTemplate('alert.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '60378027856977921c8d6d5_59444488', 'content_56977921c8c732_24617616');
/*  End of included template "alert.tpl" */?>

    
    <form class="form-horizontal" method="POST" action="?page=accueil">
        <div class="form-group">
            <label class="col-sm-3 control-label">
                Votre civilité:
            </label>
            <div class="col-sm-7 has-warning">
                <input class="form-control" type="text" placeholder=<?php echo $_POST['input_register_civility'];?>
 disabled>
            </div>
        </div>
        
        <div class="form-group">
            <label class="col-sm-3 control-label">
                Votre nom: 
            </label>
            <div class="col-sm-7 has-warning">
                <input class="form-control" type="text" placeholder=<?php echo $_POST['input_register_name'];?>
 disabled>
            </div>
        </div>
        
        <div class="form-group">
            <label class="col-sm-3 control-label">
                Votre prénom: 
            </label>
            <div class="col-sm-7 has-warning">
                <input class="form-control" type="text" placeholder=<?php echo $_POST['input_register_firstname'];?>
 disabled>
            </div>
        </div>
        
        <div class="form-group">
            <label class="col-sm-3 control-label">
                Votre adresse mail: 
            </label>
            <div class="col-sm-7 has-warning">
                <input class="form-control" type="text" placeholder=<?php echo $_POST['input_register_email'];?>
 disabled>
            </div>
        </div>
        
        <div class="form-group">
            <label class="col-sm-3 control-label">
                Votre adresse: 
            </label>
            <div class="col-sm-7 has-warning">
                <input class="form-control" type="text" placeholder=<?php echo $_POST['input_register_address'];?>
 disabled>
            </div>
        </div>
        
        <div class="form-group">
            <label class="col-sm-3 control-label">
                Votre code postal: 
            </label>
            <div class="col-sm-7 has-warning">
                <input class="form-control" type="text" placeholder=<?php echo $_POST['input_register_postalcode'];?>
 disabled>
            </div>
        </div>
        
        <div class="form-group">
            <label class="col-sm-3 control-label">
                Votre ville: 
            </label>
            <div class="col-sm-7 has-warning">
                <input class="form-control" type="text" placeholder=<?php echo $_POST['input_register_city'];?>
 disabled>
            </div>
        </div>
        
        <div class="form-group">
			<div class="col-sm-offset-3 col-sm-10">
				<input type="submit" class="btn btn-primary" value="Commencer l'expérience TalentSharer">
			</div>
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
    

</body>

</html><?php }
}
?><?php
/*%%SmartyHeaderCode:60378027856977921c8d6d5_59444488%%*/
if ($_valid && !is_callable('content_56977921c8c732_24617616')) {
function content_56977921c8c732_24617616 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '60378027856977921c8d6d5_59444488';
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
/*/%%SmartyNocache:60378027856977921c8d6d5_59444488%%*/
}
}
?>