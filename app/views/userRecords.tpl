{if $filtr == 0}
<div class="container">
      <table class="table table-hover">
    <thead>
    <tr>
      <th scope="col">ID użytkownika</th>
      <th scope="col">Imie</th>
      <th scope="col">Email</th>
      <th scope="col">Rola</th>
      <th scope="col">Status Konta</th>
      <th scope="col">Ostatnio Edytowane</th>
    </tr>
    </thead>
    <tbody>
    {foreach $record as $r}
    {strip}
    <tr>
      <th>{$r["id_user"]}</th>
      <td>{$r["name"]}</td>
      <td>{$r['email']}</td>
      <td>{$r['role']}</td>
      <td>{$r['statusAccount']}</td>
      <td>{$r['lastUpdate']}</td>
    </tr>
    {/strip}
    {/foreach}
    </tbody>
    </table>

                      <div class="row">
                        <div class="col">
                        </div>
                      <div class="pagination">
                      <div class="col">
                        <a class="{if $paginator.prev == disbaled}disabled{/if}" href="{$conf->app_url}/ctrl.php?action=generateViewUsers&page={$paginator.prev}"><span style="font-size:0.9rem;"><i class="fa fa-arrow-left"></i></span></a>
                        {foreach from=$paginator.steps item=$i}
                        <a class="{if $paginator.active == {$i}}active{/if}" href="{$conf->app_url}/ctrl.php?action=generateViewUsers&page={$i}"><span style="font-size:1.4rem;">{$i}</span></a>
                        {/foreach}
                        <a class="{if $paginator.next == disabled}disabled{/if}"  href="{$conf->app_url}/ctrl.php?action=generateViewUsers&page={$paginator.next}"><span style="font-size:0.9rem;"><i class="fa fa-arrow-right"></i></span></a>
                      </div>
                    </div>
                      <div class="col">
                      </div>
                    </div>
</div>
{else if $filtr == 1}
<div class="container">
      <table class="table table-hover">
    <thead>
    <tr>
      <th scope="col">ID użytkownika</th>
      <th scope="col">Imie</th>
      <th scope="col">Email</th>
      <th scope="col">Rola</th>
      <th scope="col">Status Konta</th>
      <th scope="col">Ostatnio Edytowane</th>
    </tr>
    </thead>
    <tbody>
    {foreach $record as $r}
    {strip}
    <tr>
      <th>{$r["id_user"]}</th>
      <td>{$r["name"]}</td>
      <td>{$r['email']}</td>
      <td>{$r['role']}</td>
      <td>{$r['statusAccount']}</td>
      <td>{$r['lastUpdate']}</td>
    </tr>
    {/strip}
    {/foreach}
    </tbody>
    </table>
</div>
{/if}
