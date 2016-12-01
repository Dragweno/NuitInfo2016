<?php /* Smarty version 3.1.27, created on 2016-01-13 21:05:31
         compiled from "templates/navbar.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:17304171025696bc1b483725_71064935%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '45dc082165a588f83992e73d04b8b9a220e80820' => 
    array (
      0 => 'templates/navbar.tpl',
      1 => 1452719128,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17304171025696bc1b483725_71064935',
  'variables' => 
  array (
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5696bc1b4cbbd0_44648657',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5696bc1b4cbbd0_44648657')) {
function content_5696bc1b4cbbd0_44648657 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '17304171025696bc1b483725_71064935';
?>
<!-- Navbar header -->
<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="?page=accueil">
		<img alt="Brand" src="../img/brand.png">
	</a>
</div>
<!-- /.navbar-header -->

<!-- Navbar Top -->
<ul class="nav navbar-top-links navbar-right">

    <!-- Cart group -->
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <i class="fa fa-shopping-cart fa-fw"></i>
			<span class="badge" id="badge"><?php echo $_SESSION['nbproduits'];?>
</span>
			<i class="fa fa-caret-down"></i>
        </a>
        <ul class="dropdown-menu dropdown-alerts">
            <?php
$_from = $_SESSION['produit'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_item_Sav = $_smarty_tpl->tpl_vars['item'];
?>
                <li>
                    <a href="?page=fiche_produit&id_produit=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                        <div>
                            <i class="fa fa-paint-brush fa-fw"></i> <?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>

                            <span class="pull-right text-muted small">x <?php echo $_smarty_tpl->tpl_vars['item']->value['quantity'];?>
</span>
                        </div>
                    </a>
                </li>
                <li class="divider"></li>
            <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>
            <li>
                <a href="?page=mon_panier&action=print_basket" class="text-center">
                    <strong>Voir le panier</strong>
                    <i class="fa fa-angle-right"></i>
                </a>
            </li>
        </ul>
    </li>
	<!-- /.Cart group -->

    <!-- Profil group -->
    <?php if (isset($_SESSION['id'])) {?>
    	<li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i> <?php echo $_SESSION['name'];?>
 <?php echo $_SESSION['firstname'];?>
 <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="?page=profil&action=edit_profil"><i class="fa fa-gear fa-fw"></i> Modifier profil</a></li>
				<li><a href="?page=commandes"><i class="fa fa-list-alt fa-fw"></i> Historique des commandes</a></li>
                <li class="divider"></li>
                <li><a href="?page=profil&action=signout"><i class="fa fa-sign-out fa-fw"></i> Déconnexion</a></li>
            </ul>
        </li>
    <?php } else { ?>
        <div class="btn-group" role="group">
            <a href="?page=profil&action=signup" class="btn btn-info">Connexion</a>
            <a href="?page=inscription" class="btn btn-primary">Inscription</a>
    	</div>
    <?php }?>
    <!-- /.Profil group -->
		
</ul>
<!-- /.Navbar Top -->
<?php }
}
?>