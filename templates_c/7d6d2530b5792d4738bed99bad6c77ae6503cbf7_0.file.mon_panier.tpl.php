<?php /* Smarty version 3.1.27, created on 2016-12-01 21:08:25
         compiled from "templates/mon_panier.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1573798815840833956b050_75335586%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d6d2530b5792d4738bed99bad6c77ae6503cbf7' => 
    array (
      0 => 'templates/mon_panier.tpl',
      1 => 1480611318,
      2 => 'file',
    ),
    '04ed89cfa6346d8208b07422c959916fa0a8f519' => 
    array (
      0 => 'templates/masterPage.tpl',
      1 => 1480611318,
      2 => 'file',
    ),
    '27a886b2a58505b6c07580b7476a8a8a65f76d38' => 
    array (
      0 => '27a886b2a58505b6c07580b7476a8a8a65f76d38',
      1 => 0,
      2 => 'string',
    ),
    'e72348a9431417ebda790326399b35120abfe869' => 
    array (
      0 => 'e72348a9431417ebda790326399b35120abfe869',
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
  'nocache_hash' => '1573798815840833956b050_75335586',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58408339a2ca52_15343776',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58408339a2ca52_15343776')) {
function content_58408339a2ca52_15343776 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1573798815840833956b050_75335586';
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
$_smarty_tpl->properties['nocache_hash'] = '1573798815840833956b050_75335586';
?>

<title>Panier - TalentSharer</title>


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
$_smarty_tpl->properties['nocache_hash'] = '1573798815840833956b050_75335586';
?>

<div class="col-lg-12">
   
   <h1 class="page-header">Votre panier</h1>
   
   <div class="col-md-9 col-md-offset-1">
   
      <?php /*  Call merged included template "alert.tpl" */
echo $_smarty_tpl->getInlineSubTemplate('alert.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '1411875030584083396a3b80_22765711', 'content_584083396a35a1_60149042');
/*  End of included template "alert.tpl" */?>

      
      <div class="panel panel-info">
         
         <div class="panel-heading"><h4>Oeuvre(s) <div class="pull-right">Quantité(s) - Supprimé</div></h4></div>
      
         <!-- Basket content -->
         <ul class="list-group">
            <?php
$_from = $_smarty_tpl->tpl_vars['works']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['work'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['work']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['work']->value) {
$_smarty_tpl->tpl_vars['work']->_loop = true;
$foreach_work_Sav = $_smarty_tpl->tpl_vars['work'];
?>
               <li class="list-group-item">
                  <div class ="col-md-3 pull-right">
                     <div class="btn-group" role="group" aria-label="...">
                        <div class="btn-group" role="group">
                           <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              modifier nb. exemplaire(s)
                              <span class="caret"></span>
                           </button>
                           <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                              <?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['work']->value['Stock']+1 - (1) : 1-($_smarty_tpl->tpl_vars['work']->value['Stock'])+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
                                 <a href="?page=mon_panier&action=edit_quantity&id_produit=<?php echo $_smarty_tpl->tpl_vars['work']->value['Id'];?>
&quantity=<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
"><li <?php if ($_smarty_tpl->tpl_vars['foo']->value == $_smarty_tpl->tpl_vars['work']->value['Quantity']) {?> selected="selected" <?php }?>><center><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</center></li></a>
                              <?php }} ?>
                           </ul>
                        </div>
                        <button type="button" class="btn btn-danger"><a href="?page=mon_panier&action=delete_product&id_produit=<?php echo $_smarty_tpl->tpl_vars['work']->value['Id'];?>
"><i class="fa fa-times"></i></button></a>
                     </div>
                  </div>
                  <p><strong><?php echo $_smarty_tpl->tpl_vars['work']->value['Title'];?>
 <?php echo $_smarty_tpl->tpl_vars['work']->value['Quantity'];?>
</strong></p>
                  <p><em><?php echo $_smarty_tpl->tpl_vars['work']->value['Price'];?>
€</em></p>
               </li>
            <?php
$_smarty_tpl->tpl_vars['work'] = $foreach_work_Sav;
}
?>
         </ul>
         <!-- ./Basket Content -->
         
         <div class="panel-body">
            <div class="btn-group pull-right" role="group" aria-label="...">
               <?php if ($_SESSION['nbproduits'] > 0) {?>
                  <a href="?page=mon_panier&action=buy_basket"><button type="button" class="btn btn-success">Valider la commande et procèder au paiement</button></a>
                  <div class="btn-group " role="group">
                     <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Vider le panier</button>
                     <ul class="dropdown-menu">
                        <li><a href="#">Non</a></li>
                        <li><a href="?page=mon_panier&action=empty_basket">Oui</a></li>
                     </ul>
                  </div>
               <?php }?>
            </div>
            <p>Total de la transaction : <strong><?php echo $_smarty_tpl->tpl_vars['total_price']->value;?>
€</strong> pour <strong><?php echo $_SESSION['nbproduits'];?>
</strong> oeuvre(s)</p>
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
/*%%SmartyHeaderCode:1411875030584083396a3b80_22765711%%*/
if ($_valid && !is_callable('content_584083396a35a1_60149042')) {
function content_584083396a35a1_60149042 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '1411875030584083396a3b80_22765711';
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
/*/%%SmartyNocache:1411875030584083396a3b80_22765711%%*/
}
}
?>