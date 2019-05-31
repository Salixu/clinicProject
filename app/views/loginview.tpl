{extends file ="navbar.tpl"}
{block name=content}
<div class="container">
    <form class="form-horizontal" role="form" method="POST" action="{$conf->action_url}logged">
      <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-6">
              <hr>
          </div>
      </div>
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="email">Adres email</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-at"></i></div>
                        <input type="text" name="email" class="form-control" id="email"
                               placeholder="jankowalski@mail.com" required autofocus>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="password">Haslo</label>
            </div>
            <div class="col-md-6">
                <div class="form-group has-danger">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-key"></i></div>
                        <input type="password" name="pass" minlength ="8"class="form-control" id="pass"
                               placeholder="Haslo" required autofocus>
                    </div>
                  </div>
                    {if $msgs->isError()}
                      <ul>
                      {foreach  $msgs->getErrors() as $err}
                      {strip}
                        <li><span>{$err}</span></li>
                      {/strip}
                      {/foreach}
                    </ul>
                    {/if}
            </div>
          </div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <button type="submit" class="btn btn-success"><i class="fas fa-sign-in-alt"></i> Zaloguj</button>
            </div>
        </div>
    </form>
</div>
{/block}
