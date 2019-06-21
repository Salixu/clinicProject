{extends file ="loggednavbar.tpl"}
{block name=content}
<div class="container">
      <table class="table table-hover">
    <thead>
    <tr>
      <th scope="col">Zabieg</th>
      <th scope="col">Data</th>
      <th scope="col">Godzina</th>
      <th scope="col">Specjalista</th>
    </tr>
    </thead>
    <tbody>
    {foreach $record as $r}
    {strip}
    <tr>
      <th>{$r["treatment"]}</th>
      <td>{$r["dateVisit"]}</td>
      <td>{$r['time']}</td>
      <td>{$r['id_user']}</td>
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
                        <a class="{if $paginator.prev == disbaled}disabled{/if}" href="{$conf->app_url}/ctrl.php?action=showUserVisits&page={$paginator.prev}"><i class="fa fa-arrow-left"></i></a>
                        {foreach from=$paginator.steps item=$i}
                        <a class="{if $paginator.active == {$i}}active{/if}" href="{$conf->app_url}/ctrl.php?action=showUserVisits&page={$i}"><span style="font-size:140%;">{$i}</span></a>
                        {/foreach}
                        <a class="{if $paginator.next == disabled}disabled{/if}"  href="{$conf->app_url}/ctrl.php?action=showUserVisits&page={$paginator.next}"><i class="fa fa-arrow-right"></i></a>
                      </div>
                    </div>
                      <div class="col">
                      </div>
                    </div>
                  </div>
{/block}
