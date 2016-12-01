<?php /* Smarty version 3.1.27, created on 2016-01-13 12:52:02
         compiled from "templates/menuLeft.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:100808940856964872d28845_34663415%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e652bdf78aabe460eb17d190da314c6e07aceafa' => 
    array (
      0 => 'templates/menuLeft.tpl',
      1 => 1452689502,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '100808940856964872d28845_34663415',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56964872d45da7_37584889',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56964872d45da7_37584889')) {
function content_56964872d45da7_37584889 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '100808940856964872d28845_34663415';
?>
<!-- Menubar left -->
<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            
			<!-- Search Bar -->
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" maxlength="255" id="searchTxt" placeholder="Rechercher une oeuvre ..." />
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button" onclick="search()">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
            </li>
			<!-- /.Search Bar -->
			
			<!-- Menubar item -->
            <li>
                <a href="?page=catalogue&pagenumber=1"><i class="fa fa-book fa-fw"></i> Catalogue complet</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-pencil fa-fw"></i> Dessin<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="?page=catalogue&category=crayon&pagenumber=1">Crayons</a>
                    </li>
                    <li>
                        <a href="?page=catalogue&category=feutre&pagenumber=1">Feutres</a>
                    </li>
					<li>
                        <a href="?page=catalogue&category=fusain&pagenumber=1">Fusains</a>
                    </li>
                </ul>
            </li>
			<li>
                <a href="#"><i class="fa fa-laptop fa-fw"></i> Infographie<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="?page=catalogue&category=artwork&pagenumber=1">Artwork</a>
                    </li>
                    <li>
                        <a href="?page=catalogue&category=design&pagenumber=1">Design 3D</a>
                    </li>
                </ul>
            </li>
			<li>
                <a href="#"><i class="fa fa-paint-brush fa-fw"></i> Peinture<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="?page=catalogue&category=aquarelle&pagenumber=1">Aquarelles</a>
                    </li>
                    <li>
                        <a href="?page=catalogue&category=pastel&pagenumber=1">Pastels</a>
                    </li>
					<li>
                        <a href="?page=catalogue&category=acrylique&pagenumber=1">Acryliques</a>
                    </li>
                </ul>
            </li>
			<li>
                <a href="#"><i class="fa fa-camera fa-fw"></i> Photographie<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="?page=catalogue&category=nature&pagenumber=1">Natures</a>
                    </li>
                    <li>
                        <a href="?page=catalogue&category=portrait&pagenumber=1">Portraits</a>
                    </li>
                </ul>
            </li>
			<li>
                <a href="#"><i class="fa fa-comment fa-fw"></i> Bande dessinée<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="?page=catalogue&category=comics&pagenumber=1">Comics</a>
                    </li>
                    <li>
                        <a href="?page=catalogue&category=manga&pagenumber=1">Manga</a>
                    </li>
					<li>
                        <a href="?page=catalogue&category=cartoon&pagenumber=1">Cartoon</a>
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