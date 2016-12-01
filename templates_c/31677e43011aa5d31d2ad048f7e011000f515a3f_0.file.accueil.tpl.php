<?php /* Smarty version 3.1.27, created on 2016-12-01 19:32:16
         compiled from "templates/accueil.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:101897044358406cb0eb3003_21083753%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31677e43011aa5d31d2ad048f7e011000f515a3f' => 
    array (
      0 => 'templates/accueil.tpl',
      1 => 1480611318,
      2 => 'file',
    ),
    '04ed89cfa6346d8208b07422c959916fa0a8f519' => 
    array (
      0 => 'templates/masterPage.tpl',
      1 => 1480611318,
      2 => 'file',
    ),
    '8c8ed6c76fa8b7746d346b713466b6ee399cf70c' => 
    array (
      0 => '8c8ed6c76fa8b7746d346b713466b6ee399cf70c',
      1 => 0,
      2 => 'string',
    ),
    '0b81dfb66f0b668df99d1a518affbef966d1e256' => 
    array (
      0 => '0b81dfb66f0b668df99d1a518affbef966d1e256',
      1 => 0,
      2 => 'string',
    ),
    '57b487ac78e327000a2f696f06890dfad585bf9e' => 
    array (
      0 => 'templates/alert.tpl',
      1 => 1480611318,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '101897044358406cb0eb3003_21083753',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58406cb1106bf2_71529119',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58406cb1106bf2_71529119')) {
function content_58406cb1106bf2_71529119 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '101897044358406cb0eb3003_21083753';
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
$_smarty_tpl->properties['nocache_hash'] = '101897044358406cb0eb3003_21083753';
?>

<title>Accueil - TalentSharer</title>


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
$_smarty_tpl->properties['nocache_hash'] = '101897044358406cb0eb3003_21083753';
?>

<div class="col-lg-12">
    <center>
        <h1 class="page-header">Bienvenue sur</h1>
    	<img alt="Brand" src="../img/logo.png">
    	
    	<?php /*  Call merged included template "alert.tpl" */
echo $_smarty_tpl->getInlineSubTemplate('alert.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '22770362058406cb10b40d6_94149119', 'content_58406cb10b3b52_04669483');
/*  End of included template "alert.tpl" */?>

    	
	</center>
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
/*%%SmartyHeaderCode:22770362058406cb10b40d6_94149119%%*/
if ($_valid && !is_callable('content_58406cb10b3b52_04669483')) {
function content_58406cb10b3b52_04669483 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '22770362058406cb10b40d6_94149119';
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
/*/%%SmartyNocache:22770362058406cb10b40d6_94149119%%*/
}
}
?>