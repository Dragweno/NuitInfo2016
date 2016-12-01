<?php /* Smarty version 3.1.27, created on 2016-01-14 10:22:30
         compiled from "templates/commandes.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1000711039569776e61862d9_75817784%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3cbf0d20708a0abac403e30f1eaf33ff8a64ef5' => 
    array (
      0 => 'templates/commandes.tpl',
      1 => 1452766946,
      2 => 'file',
    ),
    '04ed89cfa6346d8208b07422c959916fa0a8f519' => 
    array (
      0 => 'templates/masterPage.tpl',
      1 => 1452435349,
      2 => 'file',
    ),
    'e802d3815963a1b84d9a815d27e3617d7471b289' => 
    array (
      0 => 'e802d3815963a1b84d9a815d27e3617d7471b289',
      1 => 0,
      2 => 'string',
    ),
    'e09678143013ee5522c44168970840c9f8af3903' => 
    array (
      0 => 'e09678143013ee5522c44168970840c9f8af3903',
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
  'nocache_hash' => '1000711039569776e61862d9_75817784',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_569776e640e7b4_90180700',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_569776e640e7b4_90180700')) {
function content_569776e640e7b4_90180700 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1000711039569776e61862d9_75817784';
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
$_smarty_tpl->properties['nocache_hash'] = '1000711039569776e61862d9_75817784';
?>

<title>Mes commandes - TalentSharer</title>


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
$_smarty_tpl->properties['nocache_hash'] = '1000711039569776e61862d9_75817784';
?>


<div class="col-lg-12">
   
   <h1 class="page-header">Votre historique de commande</h1>
   
   <div class="col-md-9 col-md-offset-1">

   <?php /*  Call merged included template "alert.tpl" */
echo $_smarty_tpl->getInlineSubTemplate('alert.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '831818484569776e6381514_44045235', 'content_569776e63805a2_05972269');
/*  End of included template "alert.tpl" */?>

   
       <div class="panel panel-info">
         
         <div class="panel-heading"><h4>Liste de vos transaction sur TalentSharer</h4></div>
      
            <!-- Basket content -->
            <ul class="list-group">
                <?php
$_from = $_smarty_tpl->tpl_vars['history']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_item_Sav = $_smarty_tpl->tpl_vars['item'];
?>
                    <li class="list-group-item">
                        <p>n° de transaction : <strong><?php echo $_smarty_tpl->tpl_vars['item']->value['WorkId'];?>
</strong></p>
                        <p>Total payé : <strong><?php echo $_smarty_tpl->tpl_vars['item']->value['TotalPrice'];?>
</strong></p>
                        <p>Nombre de produit : <strong><?php echo $_smarty_tpl->tpl_vars['item']->value['NbWork'];?>
</strong></p>
                        <p>Date paiement : <strong><?php echo $_smarty_tpl->tpl_vars['item']->value['DatePayement'];?>
</strong></p>
                    </li>
                <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>
            </u>
        
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
/*%%SmartyHeaderCode:831818484569776e6381514_44045235%%*/
if ($_valid && !is_callable('content_569776e63805a2_05972269')) {
function content_569776e63805a2_05972269 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '831818484569776e6381514_44045235';
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
/*/%%SmartyNocache:831818484569776e6381514_44045235%%*/
}
}
?>