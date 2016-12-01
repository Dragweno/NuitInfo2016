<?php /* Smarty version 3.1.27, created on 2015-11-17 13:15:36
         compiled from "/home/ubuntu/workspace/templates/navbar.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1635660208564b2878a7a214_78962260%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6dc8cf970bb47441353bbf4f858dba974b2a6311' => 
    array (
      0 => '/home/ubuntu/workspace/templates/navbar.tpl',
      1 => 1447343710,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1635660208564b2878a7a214_78962260',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_564b2878a834d4_30984370',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_564b2878a834d4_30984370')) {
function content_564b2878a834d4_30984370 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1635660208564b2878a7a214_78962260';
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
			<span class="badge">4</span>
			<i class="fa fa-caret-down"></i>
        </a>
        <ul class="dropdown-menu dropdown-alerts">
            <li>
                <a href="#">
                    <div>
                        <i class="fa fa-paint-brush fa-fw"></i> Salvator Dali - Rêve causé par le vol d'une abeille autour d'une grenade une seconde avant l'éveil
                        <span class="pull-right text-muted small">x 1</span>
                    </div>
                </a>
            </li>
            <li class="divider"></li>
            <li>
                <a href="#">
                    <div>
                        <i class="fa fa-camera fa-fw"></i> Robert Capa - Sous la rôche d'hiver
                        <span class="pull-right text-muted small">x 3</span>
                    </div>
                </a>
            </li>
            <li class="divider"></li>
            <li>
                <a href="?page=panier" class="text-center">
                    <strong>Voir le panier</strong>
                    <i class="fa fa-angle-right"></i>
                </a>
            </li>
        </ul>
    </li>
	<!-- /.Cart group -->

    <!-- Profil group -->				
	<div class="btn-group" role="group">
        <a href="?page=connexion" class="btn btn-info">Connexion</a>
        <a href="?page=inscription" class="btn btn-primary">Inscription</a>
	</div>
    <!-- /.Profil group -->
		
</ul>
<!-- /.Navbar Top -->
<?php }
}
?>