{extends file="masterPage.tpl"} 

{block name="title"}
<title>Fiche produit - TalentSharer</title>
{/block}

{block name="body"}
<div class="col-lg-12 adapt">
    <h1 class="page-header">Fiche produit</h1>
    
    <div class="col-md-9 col-md-offset-1 adapt">
        
        {include file='alert.tpl'}
        
        <div class="thumbnail">
            <img class="img-responsive" src="../img/produits/{$work.Filename}" alt="" height="400" width="800">
            <div class="caption-full">
                <h3 class="pull-right">€{$work.Price}</h3>
                <h3>{$work.Title}</h3>
                <p>Création de <strong>{$artist.Pseudo}</strong> en {$work.Width}x{$work.Height} cm</p>
                <p>{$work.Description}</p>
                <p><em>{$artist.Description}</em></p>
            </div>
            <div class="ratings">
                <p>
                    {for $foo=1 to 5}
                        {if $foo <= $work.Rate}
                            <span class="fa fa-star"></span>
                        {else}
                            <span class="fa fa-star-o"></span>
                        {/if}
                    {/for}
                    {$work.Rate} étoiles
                </p>
            </div>
        </div>
        <div class="input-group">
            <select type="text" class="form-control" id="quantity_product" name="quantity_product" {if $work.Stock eq 0} disabled="disabled" {/if}>
                {if $work.Stock eq 0}
                    <option>Cet oeuvre n'est plus disponible</option>
                {else}
                    {for $foo=1 to $work.Stock}
                        <option>{$foo}</option>
                    {/for}
                {/if}
        	</select>
        	<span class="input-group-btn adapt">
                <button onclick ="ajouterPanier({$work.Id})" class="btn btn-success" {if $work.Stock eq 0} disabled="disabled" {/if}><i class="fa fa-plus fw"></i> Ajouter au panier</a></button>
            </span>

        </div>
    </div>
    
</div>
{/block}