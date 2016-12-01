{extends file="masterPage.tpl"} 

{block name="title"}
<title>Mes commandes - TalentSharer</title>
{/block}

{block name="body"}

<div class="col-lg-12">
   
   <h1 class="page-header">Votre historique de commande</h1>
   
   <div class="col-md-9 col-md-offset-1">

   {include file='alert.tpl'}
   
       <div class="panel panel-info">
         
         <div class="panel-heading"><h4>Liste de vos transaction sur TalentSharer</h4></div>
      
            <!-- Basket content -->
            <ul class="list-group">
                {foreach from=$history item=item}
                    <li class="list-group-item">
                        <p>n° de transaction : <strong>{$item.WorkId}</strong></p>
                        <p>Total payé : <strong>{$item.TotalPrice}</strong></p>
                        <p>Nombre de produit : <strong>{$item.NbWork}</strong></p>
                        <p>Date paiement : <strong>{$item.DatePayement}</strong></p>
                    </li>
                {/foreach}
            </u>
        
   </div>

</div>

{/block}