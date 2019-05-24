{extends file ="navbar.tpl"}
{block name=content}
<div class="container">
    <form  method="POST" action="{$conf->action_url}CreateAccount">
      <div class="container">
        <div class="row">
          <div class="col-sm">
          One of three columns
          </div>
          <div class="col-sm">
          </div>
          <div class="col-sm">
          One of three columns
          </div>
        </div>
      </div>
    </form>
</div>
{/block}
