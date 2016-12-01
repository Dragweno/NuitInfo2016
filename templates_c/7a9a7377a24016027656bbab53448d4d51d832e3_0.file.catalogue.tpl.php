<?php /* Smarty version 3.1.27, created on 2016-01-13 23:48:08
         compiled from "templates/catalogue.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:16722828265696e238e74403_63883189%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a9a7377a24016027656bbab53448d4d51d832e3' => 
    array (
      0 => 'templates/catalogue.tpl',
      1 => 1452696273,
      2 => 'file',
    ),
    '04ed89cfa6346d8208b07422c959916fa0a8f519' => 
    array (
      0 => 'templates/masterPage.tpl',
      1 => 1452435349,
      2 => 'file',
    ),
    '56fe0a8ae9fc26438418084fcc7b308f063f4045' => 
    array (
      0 => '56fe0a8ae9fc26438418084fcc7b308f063f4045',
      1 => 0,
      2 => 'string',
    ),
    '4c2483b178c89ef10c78d753a482706cf8b31b18' => 
    array (
      0 => '4c2483b178c89ef10c78d753a482706cf8b31b18',
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
  'nocache_hash' => '16722828265696e238e74403_63883189',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5696e239247e21_84586027',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5696e239247e21_84586027')) {
function content_5696e239247e21_84586027 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once '/home/ubuntu/workspace/vendor/smarty/smarty/libs/plugins/modifier.truncate.php';

$_smarty_tpl->properties['nocache_hash'] = '16722828265696e238e74403_63883189';
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
$_smarty_tpl->properties['nocache_hash'] = '16722828265696e238e74403_63883189';
?>

<title>Catalogue - TalentSharer</title>


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
$_smarty_tpl->properties['nocache_hash'] = '16722828265696e238e74403_63883189';
?>

<h1 class="page-header">Catalogue</h1>
<div class="col-md-9 col-md-offset-1">
    
    <?php /*  Call merged included template "alert.tpl" */
echo $_smarty_tpl->getInlineSubTemplate('alert.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '5688300435696e2390aaf95_33089724', 'content_5696e2390a9e25_82449044');
/*  End of included template "alert.tpl" */?>

    
    <h2>Les dernières arrivées <strong><?php echo $_GET['category'];?>
</strong></h2>
    
    <!-- Carousel of New Work -->
    <div class="row carousel-holder">
        <div class="col-md-12">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                </ol>
                <div class="carousel-inner">
                    <?php
$_from = $_smarty_tpl->tpl_vars['recentworks']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['recentwork'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['recentwork']->_loop = false;
$_smarty_tpl->tpl_vars['__foreach_foo'] = new Smarty_Variable(array('iteration' => 0));
foreach ($_from as $_smarty_tpl->tpl_vars['recentwork']->value) {
$_smarty_tpl->tpl_vars['recentwork']->_loop = true;
$_smarty_tpl->tpl_vars['__foreach_foo']->value['iteration']++;
$_smarty_tpl->tpl_vars['__foreach_foo']->value['first'] = $_smarty_tpl->tpl_vars['__foreach_foo']->value['iteration'] == 1;
$foreach_recentwork_Sav = $_smarty_tpl->tpl_vars['recentwork'];
?>
                        <div class="item <?php if ((isset($_smarty_tpl->tpl_vars['__foreach_foo']->value['first']) ? $_smarty_tpl->tpl_vars['__foreach_foo']->value['first'] : null)) {?> active <?php }?>">
                            <a href="?page=fiche_produit&id_produit=<?php echo $_smarty_tpl->tpl_vars['recentwork']->value['Id'];?>
">
                                <img class="img-responsive center-block" src="../img/produits/<?php echo $_smarty_tpl->tpl_vars['recentwork']->value['Filename'];?>
" alt="" height="400" width="800">
                            </a>
                            <div class="carousel-caption">
                                <p><?php echo $_smarty_tpl->tpl_vars['recentwork']->value['Title'];?>
</p>
                            </div>
                        </div>
                    <?php
$_smarty_tpl->tpl_vars['recentwork'] = $foreach_recentwork_Sav;
}
?>
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
        </div>
    </div>
    <!-- ./Carousel -->
    
    <?php if (isset($_smarty_tpl->tpl_vars['category']->value)) {?>
        <div class="jumbotron jmbotron-warning">
          <em><?php echo $_smarty_tpl->tpl_vars['category']->value['Description'];?>
</em>
        </div>
    <?php }?>
    
    <h2>Les oeuvres <strong><?php echo $_GET['category'];?>
</strong></h2>
    
    <div class="row">
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
            <div class="col-sm-4 col-lg-4 col-md-4 reduct">
                <div class="thumbnail">
                    <img class="img-responsive" src="../img/produits/<?php echo $_smarty_tpl->tpl_vars['work']->value['Filename'];?>
" alt="" height="150" width="320">
                    <div class="caption">
                        <h4 class="pull-right">€<?php echo $_smarty_tpl->tpl_vars['work']->value['Price'];?>
</h4>
                        <h4><a href="?page=fiche_produit&id_produit=<?php echo $_smarty_tpl->tpl_vars['work']->value['Id'];?>
"><?php echo $_smarty_tpl->tpl_vars['work']->value['Title'];?>
</a>
                        </h4>
                        <p><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['work']->value['Description'],110,"...",true);?>
</p>
                    </div>
                    <div class="ratings">
                        <p class="pull-right"><?php echo $_smarty_tpl->tpl_vars['work']->value['Stock'];?>
 disponible(s)</p>
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
                        </p>
                    </div>
                </div>
            </div>
        <?php
$_smarty_tpl->tpl_vars['work'] = $foreach_work_Sav;
}
?>
    </div>
    
    <center>
        <nav>
            <ul class="pagination">
               <?php if ($_GET['pagenumber'] > 1) {?>
                    <li>
                        <a href="?page=catalogue<?php if (isset($_GET['category'])) {?>&&category=<?php echo $_GET['category'];
}
if (isset($_GET['search'])) {?>&search=<?php echo $_GET['search'];
}?>&pagenumber=<?php echo $_GET['pagenumber']-1;?>
" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                <?php }?>
                <?php $_smarty_tpl->tpl_vars['cpt'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['cpt']->step = 1;$_smarty_tpl->tpl_vars['cpt']->total = (int) ceil(($_smarty_tpl->tpl_vars['cpt']->step > 0 ? $_smarty_tpl->tpl_vars['nbPages']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['nbPages']->value)+1)/abs($_smarty_tpl->tpl_vars['cpt']->step));
if ($_smarty_tpl->tpl_vars['cpt']->total > 0) {
for ($_smarty_tpl->tpl_vars['cpt']->value = 1, $_smarty_tpl->tpl_vars['cpt']->iteration = 1;$_smarty_tpl->tpl_vars['cpt']->iteration <= $_smarty_tpl->tpl_vars['cpt']->total;$_smarty_tpl->tpl_vars['cpt']->value += $_smarty_tpl->tpl_vars['cpt']->step, $_smarty_tpl->tpl_vars['cpt']->iteration++) {
$_smarty_tpl->tpl_vars['cpt']->first = $_smarty_tpl->tpl_vars['cpt']->iteration == 1;$_smarty_tpl->tpl_vars['cpt']->last = $_smarty_tpl->tpl_vars['cpt']->iteration == $_smarty_tpl->tpl_vars['cpt']->total;?>
                    <li><a href="?page=catalogue<?php if (isset($_GET['category'])) {?>&category=<?php echo $_GET['category'];
}
if (isset($_GET['search'])) {?>&search=<?php echo $_GET['search'];
}?>&pagenumber=<?php echo $_smarty_tpl->tpl_vars['cpt']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['cpt']->value;?>
</a></li>
                <?php }} ?>
                <?php if ($_GET['pagenumber'] < $_smarty_tpl->tpl_vars['nbPages']->value) {?>
                    <li>
                        <a href="?page=catalogue<?php if (isset($_GET['category'])) {?>&category=<?php echo $_GET['category'];
}
if (isset($_GET['search'])) {?>&search=<?php echo $_GET['search'];
}?>&pagenumber=<?php echo $_GET['pagenumber']+1;?>
" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                <?php }?>
            </ul>
        </nav>
    </center>
        
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
/*%%SmartyHeaderCode:5688300435696e2390aaf95_33089724%%*/
if ($_valid && !is_callable('content_5696e2390a9e25_82449044')) {
function content_5696e2390a9e25_82449044 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '5688300435696e2390aaf95_33089724';
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
/*/%%SmartyNocache:5688300435696e2390aaf95_33089724%%*/
}
}
?>