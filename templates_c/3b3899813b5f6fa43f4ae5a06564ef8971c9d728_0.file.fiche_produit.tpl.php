<?php /* Smarty version 3.1.27, created on 2016-01-14 00:17:24
         compiled from "templates/fiche_produit.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:9071265675696e9146e44c4_66128550%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b3899813b5f6fa43f4ae5a06564ef8971c9d728' => 
    array (
      0 => 'templates/fiche_produit.tpl',
      1 => 1452730640,
      2 => 'file',
    ),
    '04ed89cfa6346d8208b07422c959916fa0a8f519' => 
    array (
      0 => 'templates/masterPage.tpl',
      1 => 1452435349,
      2 => 'file',
    ),
    '4541a2132e3eb95cb35b929fd228cb9e1d9fd302' => 
    array (
      0 => '4541a2132e3eb95cb35b929fd228cb9e1d9fd302',
      1 => 0,
      2 => 'string',
    ),
    '6b9d60ec241f6f7fc147a08d48cb4e039df7e62d' => 
    array (
      0 => '6b9d60ec241f6f7fc147a08d48cb4e039df7e62d',
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
  'nocache_hash' => '9071265675696e9146e44c4_66128550',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5696e914821323_59574930',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5696e914821323_59574930')) {
function content_5696e914821323_59574930 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '9071265675696e9146e44c4_66128550';
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
$_smarty_tpl->properties['nocache_hash'] = '9071265675696e9146e44c4_66128550';
?>

<title>Fiche produit - TalentSharer</title>


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
$_smarty_tpl->properties['nocache_hash'] = '9071265675696e9146e44c4_66128550';
?>

<div class="col-lg-12 adapt">
    <h1 class="page-header">Fiche produit</h1>
    
    <div class="col-md-9 col-md-offset-1 adapt">
        
        <?php /*  Call merged included template "alert.tpl" */
echo $_smarty_tpl->getInlineSubTemplate('alert.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '1963564065696e914742958_43075726', 'content_5696e914741c11_63786772');
/*  End of included template "alert.tpl" */?>

        
        <div class="thumbnail">
            <img class="img-responsive" src="../img/produits/<?php echo $_smarty_tpl->tpl_vars['work']->value['Filename'];?>
" alt="" height="400" width="800">
            <div class="caption-full">
                <h3 class="pull-right">€<?php echo $_smarty_tpl->tpl_vars['work']->value['Price'];?>
</h3>
                <h3><?php echo $_smarty_tpl->tpl_vars['work']->value['Title'];?>
</h3>
                <p>Création de <strong><?php echo $_smarty_tpl->tpl_vars['artist']->value['Pseudo'];?>
</strong> en <?php echo $_smarty_tpl->tpl_vars['work']->value['Width'];?>
x<?php echo $_smarty_tpl->tpl_vars['work']->value['Height'];?>
 cm</p>
                <p><?php echo $_smarty_tpl->tpl_vars['work']->value['Description'];?>
</p>
                <p><em><?php echo $_smarty_tpl->tpl_vars['artist']->value['Description'];?>
</em></p>
            </div>
            <div class="ratings">
                <p>
                    <?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? 5+1 - (1) : 1-(5)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
                        <?php if ($_smarty_tpl->tpl_vars['foo']->value <= $_smarty_tpl->tpl_vars['work']->value['Rate']) {?>
                            <span class="fa fa-star"></span>
                        <?php } else { ?>
                            <span class="fa fa-star-o"></span>
                        <?php }?>
                    <?php }} ?>
                    <?php echo $_smarty_tpl->tpl_vars['work']->value['Rate'];?>
 étoiles
                </p>
            </div>
        </div>
        <div class="input-group">
            <select type="text" class="form-control" id="quantity_product" name="quantity_product" <?php if ($_smarty_tpl->tpl_vars['work']->value['Stock'] == 0) {?> disabled="disabled" <?php }?>>
                <?php if ($_smarty_tpl->tpl_vars['work']->value['Stock'] == 0) {?>
                    <option>Cet oeuvre n'est plus disponible</option>
                <?php } else { ?>
                    <?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['work']->value['Stock']+1 - (1) : 1-($_smarty_tpl->tpl_vars['work']->value['Stock'])+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
                        <option><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</option>
                    <?php }} ?>
                <?php }?>
        	</select>
        	<span class="input-group-btn adapt">
                <button onclick ="ajouterPanier(<?php echo $_smarty_tpl->tpl_vars['work']->value['Id'];?>
)" class="btn btn-success" <?php if ($_smarty_tpl->tpl_vars['work']->value['Stock'] == 0) {?> disabled="disabled" <?php }?>><i class="fa fa-plus fw"></i> Ajouter au panier</a></button>
            </span>

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
/*%%SmartyHeaderCode:1963564065696e914742958_43075726%%*/
if ($_valid && !is_callable('content_5696e914741c11_63786772')) {
function content_5696e914741c11_63786772 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '1963564065696e914742958_43075726';
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
/*/%%SmartyNocache:1963564065696e914742958_43075726%%*/
}
}
?>