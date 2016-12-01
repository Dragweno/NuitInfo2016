<?php /* Smarty version 3.1.27, created on 2015-11-17 13:15:36
         compiled from "/home/ubuntu/workspace/templates/menuLeft.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1202057166564b2878a86f04_12634397%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e308c61dc4182df317f777cc6fa359775dd27735' => 
    array (
      0 => '/home/ubuntu/workspace/templates/menuLeft.tpl',
      1 => 1447341953,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1202057166564b2878a86f04_12634397',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_564b2878a93fd9_24380654',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_564b2878a93fd9_24380654')) {
function content_564b2878a93fd9_24380654 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1202057166564b2878a86f04_12634397';
?>
<!-- Menubar left -->
<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
			<!-- Search Bar -->
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Rechercher une oeuvre ...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
            </li>
			<!-- /.Search Bar -->
			<!-- Menubar item -->
            <li>
                <a href="?page=catalogue"><i class="fa fa-book fa-fw"></i> Catalogue complet</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-pencil fa-fw"></i> Dessin<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="?page=catalogue&category=crayons">Crayons</a>
                    </li>
                    <li>
                        <a href="?page=catalogue&category=feutres">Feutres</a>
                    </li>
					<li>
                        <a href="?page=catalogue&category=fusains">Fusains</a>
                    </li>
                </ul>
            </li>
			<li>
                <a href="#"><i class="fa fa-laptop fa-fw"></i> Infographie<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="?page=catalogue&category=artwork">Artwork</a>
                    </li>
                    <li>
                        <a href="?page=catalogue&category=design">Design 3D</a>
                    </li>
                </ul>
            </li>
			<li>
                <a href="#"><i class="fa fa-paint-brush fa-fw"></i> Peinture<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="?page=catalogue&category=aquarelles">Aquarelles</a>
                    </li>
                    <li>
                        <a href="?page=catalogue&category=pastels">Pastels</a>
                    </li>
					<li>
                        <a href="?page=catalogue&category=acryliques">Acryliques</a>
                    </li>
                </ul>
            </li>
			<li>
                <a href="#"><i class="fa fa-camera fa-fw"></i> Photographie<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="?page=catalogue&category=natures">Natures</a>
                    </li>
                    <li>
                        <a href="?page=catalogue&category=portraits">Portraits</a>
                    </li>
                </ul>
            </li>
			<li>
                <a href="#"><i class="fa fa-comment fa-fw"></i> Bande dessinée<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="?page=catalogue&category=comics">Comics</a>
                    </li>
                    <li>
                        <a href="?page=catalogue&category=manga">Manga</a>
                    </li>
					<li>
                        <a href="?page=catalogue&category=cartoon">Cartoon</a>
                    </li>
                </ul>
            </li>
			<!-- /.Menubar item -->
        </ul>
    </div>
</div>
<!-- /.Menubar left -->
<?php }
}
?>