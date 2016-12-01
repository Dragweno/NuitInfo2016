{extends file="masterPage.tpl"} 

{block name="title"}
<title>Panier - TalentSharer</title>
{/block}

{block name="body"}
<div class="col-lg-12">
   
   <h1 class="page-header">Votre panier</h1>
   
   <div class="col-md-9 col-md-offset-1">
   
      {include file='alert.tpl'}
      
      <div class="panel panel-info">
         
         <div class="panel-heading"><h4>Oeuvre(s) <div class="pull-right">Quantité(s) - Supprimé</div></h4></div>
      
         <!-- Basket content -->
         <ul class="list-group">
            {foreach from=$works item=work}
               <li class="list-group-item">
                  <div class ="col-md-3 pull-right">
                     <div class="btn-group" role="group" aria-label="...">
                        <div class="btn-group" role="group">
                           <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              modifier nb. exemplaire(s)
                              <span class="caret"></span>
                           </button>
                           <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                              {for $foo=1 to $work.Stock}
                                 <a href="?page=mon_panier&action=edit_quantity&id_produit={$work.Id}&quantity={$foo}"><li {if $foo eq $work.Quantity} selected="selected" {/if}><center>{$foo}</center></li></a>
                              {/for}
                           </ul>
                        </div>
                        <button type="button" class="btn btn-danger"><a href="?page=mon_panier&action=delete_product&id_produit={$work.Id}"><i class="fa fa-times"></i></button></a>
                     </div>
                  </div>
                  <p><strong>{$work.Title} {$work.Quantity}</strong></p>
                  <p><em>{$work.Price}€</em></p>
               </li>
            {/foreach}
         </ul>
         <!-- ./Basket Content -->
         
         <div class="panel-body">
            <div class="btn-group pull-right" role="group" aria-label="...">
               {if $smarty.session.nbproduits gt 0}
                  <a href="?page=mon_panier&action=buy_basket"><button type="button" class="btn btn-success">Valider la commande et procèder au paiement</button></a>
                  <div class="btn-group " role="group">
                     <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Vider le panier</button>
                     <ul class="dropdown-menu">
                        <li><a href="#">Non</a></li>
                        <li><a href="?page=mon_panier&action=empty_basket">Oui</a></li>
                     </ul>
                  </div>
               {/if}
            </div>
            <p>Total de la transaction : <strong>{$total_price}€</strong> pour <strong>{$smarty.session.nbproduits}</strong> oeuvre(s)</p>
         </div>
         
      </div>
   
   </div>

</div>
{/block}