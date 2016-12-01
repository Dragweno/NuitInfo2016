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
			<span class="badge" id="badge">{$smarty.session.nbproduits}</span>
			<i class="fa fa-caret-down"></i>
        </a>
        <ul class="dropdown-menu dropdown-alerts">
            {foreach from=$smarty.session.produit item=item}
                <li>
                    <a href="?page=fiche_produit&id_produit={$item.id}">
                        <div>
                            <i class="fa fa-paint-brush fa-fw"></i> {$item.title}
                            <span class="pull-right text-muted small">x {$item.quantity}</span>
                        </div>
                    </a>
                </li>
                <li class="divider"></li>
            {/foreach}
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
    {if isset($smarty.session.id)}
    	<li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i> {$smarty.session.name} {$smarty.session.firstname} <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="?page=profil&action=edit_profil"><i class="fa fa-gear fa-fw"></i> Modifier profil</a></li>
				<li><a href="?page=commandes"><i class="fa fa-list-alt fa-fw"></i> Historique des commandes</a></li>
                <li class="divider"></li>
                <li><a href="?page=profil&action=signout"><i class="fa fa-sign-out fa-fw"></i> Déconnexion</a></li>
            </ul>
        </li>
    {else}
        <div class="btn-group" role="group">
            <a href="?page=profil&action=signup" class="btn btn-info">Connexion</a>
            <a href="?page=inscription" class="btn btn-primary">Inscription</a>
    	</div>
    {/if}
    <!-- /.Profil group -->
		
</ul>
<!-- /.Navbar Top -->
