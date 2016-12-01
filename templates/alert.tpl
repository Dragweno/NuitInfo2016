{if isset($smarty.session.alerttype)}
<div class="alert alert-dismissable alert-{$smarty.session.alerttype}">
    <button data-dismiss="alert" class="close" type="button">×</button>
    <h4>
    {if ($smarty.session.alerttype eq 'success')}
        Well done!
    {elseif ($smarty.session.alerttype eq 'info')}
        Heads up!
    {elseif ($smarty.session.alerttype eq 'warning')}
        Warning!
    {elseif ($smarty.session.alerttype eq 'danger')}
        Oh snap!
    {/if}
    </h4>
    <p id="alert_content">{$smarty.session.alerttext}</p>
</div>
{/if}
