{extends file="masterPage.tpl"} 

{block name="title"}
<title>Catalogue - TalentSharer</title>
{/block}

{block name="body"}
<h1 class="page-header">Catalogue</h1>
<div class="col-md-9 col-md-offset-1">
    
    {include file='alert.tpl'}
    
    <h2>Les dernières arrivées <strong>{$smarty.get.category}</strong></h2>
    
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
                    {foreach from=$recentworks item=recentwork name=foo}
                        <div class="item {if $smarty.foreach.foo.first} active {/if}">
                            <a href="?page=fiche_produit&id_produit={$recentwork.Id}">
                                <img class="img-responsive center-block" src="../img/produits/{$recentwork.Filename}" alt="" height="400" width="800">
                            </a>
                            <div class="carousel-caption">
                                <p>{$recentwork.Title}</p>
                            </div>
                        </div>
                    {/foreach}
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
    
    {if isset($category)}
        <div class="jumbotron jmbotron-warning">
          <em>{$category.Description}</em>
        </div>
    {/if}
    
    <h2>Les oeuvres <strong>{$smarty.get.category}</strong></h2>
    
    <div class="row">
        {foreach from=$works item=work}
            <div class="col-sm-4 col-lg-4 col-md-4 reduct">
                <div class="thumbnail">
                    <img class="img-responsive" src="../img/produits/{$work.Filename}" alt="" height="150" width="320">
                    <div class="caption">
                        <h4 class="pull-right">€{$work.Price}</h4>
                        <h4><a href="?page=fiche_produit&id_produit={$work.Id}">{$work.Title}</a>
                        </h4>
                        <p>{$work.Description|truncate:110:"...":true}</p>
                    </div>
                    <div class="ratings">
                        <p class="pull-right">{$work.Stock} disponible(s)</p>
                        <p>
                            {for $foo=1 to 5}
                                {if $foo <= $work.Rate}
                                    <span class="fa fa-star"></span>
                                {else}
                                    <span class="fa fa-star-o"></span>
                                {/if}
                            {/for}
                        </p>
                    </div>
                </div>
            </div>
        {/foreach}
    </div>
    
    <center>
        <nav>
            <ul class="pagination">
               {if $smarty.get.pagenumber gt 1}
                    <li>
                        <a href="?page=catalogue{if isset($smarty.get.category)}&&category={$smarty.get.category}{/if}{if isset($smarty.get.search)}&search={$smarty.get.search}{/if}&pagenumber={$smarty.get.pagenumber-1}" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                {/if}
                {for $cpt=1 to $nbPages}
                    <li><a href="?page=catalogue{if isset($smarty.get.category)}&category={$smarty.get.category}{/if}{if isset($smarty.get.search)}&search={$smarty.get.search}{/if}&pagenumber={$cpt}">{$cpt}</a></li>
                {/for}
                {if $smarty.get.pagenumber lt $nbPages}
                    <li>
                        <a href="?page=catalogue{if isset($smarty.get.category)}&category={$smarty.get.category}{/if}{if isset($smarty.get.search)}&search={$smarty.get.search}{/if}&pagenumber={$smarty.get.pagenumber+1}" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                {/if}
            </ul>
        </nav>
    </center>
        
</div>
{/block}