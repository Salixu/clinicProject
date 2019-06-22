
<div class="container">
      <table class="table table-hover">
    <thead>
    <tr>
      <th scope="col">Data</th>
      <th scope="col">Zabieg</th>
      <th scope="col">Godzina</th>
      <th scope="col">Specjalista</th>
    </tr>
    </thead>
    <tbody>
    {foreach $record as $r}
    {strip}
    <tr>
      <th>{$r["dateVisit"]}</th>
      <td>{$r["treatment"]}</td>
      <td>{$r['time']}</td>
      <td>{$r['id_doctor']}</td>
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
                        <a class="{if $paginator.prev == disbaled}disabled{/if}" href="{$conf->app_url}/ctrl.php?action=showUserVisits&page={$paginator.prev}"><span style="font-size:0.9rem;"><i class="fa fa-arrow-left"></i></span></a>
                        {foreach from=$paginator.steps item=$i}
                        <a class="{if $paginator.active == {$i}}active{/if}" href="{$conf->app_url}/ctrl.php?action=showUserVisits&page={$i}"><span style="font-size:1.4rem;">{$i}</span></a>
                        {/foreach}
                        <a class="{if $paginator.next == disabled}disabled{/if}"  href="{$conf->app_url}/ctrl.php?action=showUserVisits&page={$paginator.next}"><span style="font-size:0.9rem;"><i class="fa fa-arrow-right"></i></span></a>
                      </div>
                    </div>
                      <div class="col">
                      </div>
                    </div>
                  </div>
