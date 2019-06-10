{extends file ="loggednavbar.tpl"}
{block name=content}
      <div class="container">
        <div class="row right-align">
                    <ul class="pagination">
                        <li class="{if $paginator.prev eq 'disabled'}disabled{else}waves-effect{/if}">
                            <a href="{if $paginator.prev eq 'disabled'}#{else}{$conf->app_url}/client?page={$paginator.prev}{/if}">
                                <i class="material-icons">chevron_left</i>
                            </a>
                        </li>

                        {if $paginator.first neq 'disabled' }
                        <li class="waves-effect paginatorEdge">
                            <a href="{$conf->app_url}/client?page={$paginator.first}">{$paginator.first}</a>
                        </li>
                        {/if} {foreach from=$paginator.steps item=$i}
                        <li class="{if $i == $paginator.active}active{else}waves-effect{/if}">
                            <a href="{$conf->app_url}/client?page={$i}">{$i}</a>
                        </li>

                        {/foreach} {if $paginator.last neq 'disabled' }
                        <li class="waves-effect paginatorEdge">
                            <a href="{$conf->app_url}/client?page={$paginator.last}">{$paginator.last}
                                </a>
                        </li>
                        {/if}


                        <li class="{if $paginator.next eq 'disabled'}disabled{else}waves-effect{/if}">
                            <a href="{if $paginator.next eq 'disabled'}#{else}{$conf->app_url}/client?page={$paginator.next}{/if}">
                                <i class="material-icons">chevron_right</i>
                            </a>
                        </li>
                    </ul>
                </div>
        </div>
{/block}
