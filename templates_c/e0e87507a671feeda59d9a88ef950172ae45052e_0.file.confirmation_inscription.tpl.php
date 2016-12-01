<?php /* Smarty version 3.1.27, created on 2015-11-17 13:34:56
         compiled from "/home/ubuntu/workspace/templates/confirmation_inscription.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:258515752564b2d00232dd0_80583509%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0e87507a671feeda59d9a88ef950172ae45052e' => 
    array (
      0 => '/home/ubuntu/workspace/templates/confirmation_inscription.tpl',
      1 => 1447767266,
      2 => 'file',
    ),
    '67d5cb689db21bb7695e175d794f4b89851c7b8e' => 
    array (
      0 => '/home/ubuntu/workspace/templates/masterPage.tpl',
      1 => 1447342840,
      2 => 'file',
    ),
    'af451593c46f245b2c04dc1d874b4cae2e711eec' => 
    array (
      0 => 'af451593c46f245b2c04dc1d874b4cae2e711eec',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '258515752564b2d00232dd0_80583509',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_564b2d0026cce8_18078875',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_564b2d0026cce8_18078875')) {
function content_564b2d0026cce8_18078875 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '258515752564b2d00232dd0_80583509';
?>
<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Tavernier - Henry">

    <title>TalentSharer - Accueil</title>

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
        <nav class="navbar navbar-default navbar-static-top" role="navigation">

			<?php echo $_smarty_tpl->getSubTemplate ('navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

			
			<?php echo $_smarty_tpl->getSubTemplate ('menuLeft.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

			
        </nav>
		<!-- /.Navigation -->

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <?php
$_smarty_tpl->properties['nocache_hash'] = '258515752564b2d00232dd0_80583509';
?>


<h1>Confirmation Inscription</h1>
<p> <?php echo $_POST['input_register_civility'];?>
 et <?php echo $_POST['input_register_name'];?>
 </br> Touo</p>

                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

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

</body>

</html><?php }
}
?>