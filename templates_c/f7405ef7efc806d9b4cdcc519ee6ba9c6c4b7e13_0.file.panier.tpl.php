<?php /* Smarty version 3.1.27, created on 2016-01-13 19:46:08
         compiled from "templates/panier.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:10196717715696a980d94423_40635381%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7405ef7efc806d9b4cdcc519ee6ba9c6c4b7e13' => 
    array (
      0 => 'templates/panier.tpl',
      1 => 1452714364,
      2 => 'file',
    ),
    '04ed89cfa6346d8208b07422c959916fa0a8f519' => 
    array (
      0 => 'templates/masterPage.tpl',
      1 => 1452435349,
      2 => 'file',
    ),
    '58907d833f5fa6980da93f925644cf6f5684b63a' => 
    array (
      0 => '58907d833f5fa6980da93f925644cf6f5684b63a',
      1 => 0,
      2 => 'string',
    ),
    '76b0c1d9c5e6457e398dc1eda13dc5a0c782468b' => 
    array (
      0 => '76b0c1d9c5e6457e398dc1eda13dc5a0c782468b',
      1 => 0,
      2 => 'string',
    ),
    '57b487ac78e327000a2f696f06890dfad585bf9e' => 
    array (
      0 => 'templates/alert.tpl',
      1 => 1451995883,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10196717715696a980d94423_40635381',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5696a980eb8cb6_19689193',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5696a980eb8cb6_19689193')) {
function content_5696a980eb8cb6_19689193 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '10196717715696a980d94423_40635381';
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
$_smarty_tpl->properties['nocache_hash'] = '10196717715696a980d94423_40635381';
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
$_smarty_tpl->properties['nocache_hash'] = '10196717715696a980d94423_40635381';
?>

<div class="col-lg-12">
   
   <h1 class="page-header">Votre panier</h1>
   
   <div class="col-md-9 col-md-offset-1">
   
      <?php /*  Call merged included template "alert.tpl" */
echo $_smarty_tpl->getInlineSubTemplate('alert.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '7232314195696a980de7441_10047839', 'content_5696a980de64b7_38521425');
/*  End of included template "alert.tpl" */?>

      
      <div class="panel panel-info">
         
         <div class="panel-heading"><h4>Oeuvre(s) <div class="pull-right">Quantité(s) - Supprimé</div></h4></div>
      
         <!-- Basket content -->
         <ul class="list-group">
            <li class="list-group-item">
               <div class ="col-md-2 pull-right ">
                  <div class="input-group">
                     <select class="form-control ">
                         <option>1</option>
                         <option>2</option>
                         <option>3</option>
                         <option>4</option>
                         <option>5</option>
                     </select>
                     <span class="input-group-btn">
                        <button type="button" class="btn btn-danger"><i class="fa fa-times"></i></button>
                     </span>
                  </div>
               </div>
               <p><strong>Salad mozard - La truite au fond du vin</strong></p>
               <p><em>135.0€</em></p>
            </li>
         </ul>
         <!-- ./Basket Content -->
         
         <div class="panel-body">
            <div class="btn-group pull-right" role="group" aria-label="...">
               <button type="button" class="btn btn-success">Valider la commande et procèder au paiement</button>
               <div class="btn-group " role="group">
                  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Vider le panier</button>
                  <ul class="dropdown-menu">
                     <li><a href="#">Non</a></li>
                     <li><a href="#">Oui</a></li>
                  </ul>
               </div>
            </div>
            <p>Total de la transaction : <strong>135.0€</strong> pour <strong>1</strong> oeuvre(s)</p>
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
/*%%SmartyHeaderCode:7232314195696a980de7441_10047839%%*/
if ($_valid && !is_callable('content_5696a980de64b7_38521425')) {
function content_5696a980de64b7_38521425 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '7232314195696a980de7441_10047839';
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
    <p><?php echo $_SESSION['alerttext'];?>
</p>
</div>
<?php }?>
<?php
/*/%%SmartyNocache:7232314195696a980de7441_10047839%%*/
}
}
?>