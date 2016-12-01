<?php /* Smarty version 3.1.27, created on 2015-10-29 15:26:44
         compiled from "templates/client.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:133735077556323ab4083977_94691802%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '715e52caf3470a1814d7bd1fc8ee4194bf8053be' => 
    array (
      0 => 'templates/client.tpl',
      1 => 1446131879,
      2 => 'file',
    ),
    '04ed89cfa6346d8208b07422c959916fa0a8f519' => 
    array (
      0 => 'templates/masterPage.tpl',
      1 => 1446131879,
      2 => 'file',
    ),
    '4e514a3c0fdebd47855d085d50926894cb1dd174' => 
    array (
      0 => '4e514a3c0fdebd47855d085d50926894cb1dd174',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '133735077556323ab4083977_94691802',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56323ab40b8635_87577698',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56323ab40b8635_87577698')) {
function content_56323ab40b8635_87577698 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '133735077556323ab4083977_94691802';
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<?php echo '<script'; ?>
 src="js/cnam.js"><?php echo '</script'; ?>
> 
	<?php echo '<script'; ?>
 src="js/jquery.js"><?php echo '</script'; ?>
> 
	<link href="css/styles.css" type="text/css" rel="stylesheet" >   
</head>
<body>
	<div id="logo">LOGO</div>
	<div id="header">HEADER</div>
	<div id="totem">NAVIGATION <br/>
		<ul>
			<li/><a href="index.php?page=accueil">Accueil</a>
		<br/>
			<li/><a href="index.php?page=client">Client</a>
		</ul>
	</div>
	</div>
	<div id="body"><?php
$_smarty_tpl->properties['nocache_hash'] = '133735077556323ab4083977_94691802';
?>

Formulaire Client 

</div>
	<div id="info">PANIER  <span id="nbPanier"></span></div>
	<div id="footer">FOOTER</div>

</body>
<?php }
}
?>