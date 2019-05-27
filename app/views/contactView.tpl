{extends file ="navbar.tpl"}
{block name=content}
<div class="container">
    <form  method="POST" action="{$conf->action_url}CreateAccount">
      <div class="container">
        <div class="row">
          <div class="col-sm">
            <form class="form-horizontal" role="form" method="POST" action="{$conf->action_url}logged">
              <div class="row">
                  <div class="col-md-0"></div>
                  <div class="col-md-12">
                      <hr>
                  </div>
              </div>
              one of three columns
              </form>
          </div>
          <div class="col-sm">
          </div>
          <div class="col-sm">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-12">
                    <hr>
                </div>
            </div>
          One of three columns
          </div>
        </div>
      </div>
    </form>
</div>
{/block}
