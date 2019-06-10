{extends file ="loggednavbar.tpl"}
{block name=content}
<div class="container">
  <div class="col-sm">

    <div class="col-sm">
      <table class="table table-hover">
    <thead>
    <tr>
      <th scope="col">Zabieg</th>
      <th scope="col">Data</th>
      <th scope="col">Godzina</th>
      <th scope="col"> ID kurwa usera</th>
      <th scope="col"> ID zalogowanego kurwa usera</th>
      <th scope="col"> totalitems</th>

    </tr>
    </thead>
    <tbody>
    {foreach $record as $r}
    {strip}
    <tr>
      <th scope="row">{$r["treatment"]}</th>
      <td>{$r["dateVisit"]}</td>
      <td>{$r['time']}</td>
      <td>{$r['id_user']}</td>
      <td>{$id}</td>
      <td>{$total}</td>
    </tr>
    {/strip}
    {/foreach}
    </tbody>
    </table>

                    <div class="col-sm">
                      <div class="pagination">
                        <a class="{if $paginator.prev == disbaled}disabled{/if}" href="{$conf->app_url}/ctrl.php?action=showUserVisits&page={$paginator.prev}">&laquo;</a>
                        {foreach from=$paginator.steps item=$i}
                        <a class="{if $paginator.active == {$i}}active{/if}" href="{$conf->app_url}/ctrl.php?action=showUserVisits&page={$i}">{$i}</a>
                        {/foreach}
                        <a class="{if $paginator.next == disabled}disabled{/if}"  href="{$conf->app_url}/ctrl.php?action=showUserVisits&page={$paginator.next}">&raquo;</a>
                      </div>
                  </div>
                </div>
            </div>
      </div>
    </div>
{/block}
