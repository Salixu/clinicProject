{extends file ="loggednavbar.tpl"}
{block name=content}
      <div class="container">
        <form action="{$conf->action_root}userprofileUpdate" method="POST">
          <div class="col-sm">
              <div class="row">
                  <div class="col-md-0"></div>
                  <div class="col-md-12">
                      <hr>
                  </div>
              </div>
              <div class="form-group row">
                <label for="email" class="col-2 col-form-label">Imie</label>
                <div class="col-10">
                  <input class="form-control" name="name" type="text" value="{$form->name}" id="name"></input>
                </div>
              </div>
              <div class="row">
                  <div class="col-md-1"></div>
                  <div class="col-md-12">
                      <hr>
                  </div>
              </div>
              <div class="form-group row">
                <label for="adress" class="col-2 col-form-label">Email</label>
                <div class="col-10">
                  <input class="form-control" name="email" type="text" value="{$form->email}" id="email" readonly></input>
                </div>
              </div>
              <div class="row">
                  <div class="col-md-1"></div>
                  <div class="col-md-12">
                      <hr>
                  </div>
              </div>
              <div class="form-group row">
                <label for="asddsa" class="col-2 col-form-label">Numer telefonu</label>
                <div class="col-10">
                  <input class="form-control" type="text" name="phone_number" value="{$form->phone_number}" id="phone_number"></input>
                  <div class="row">
                      <div class="col-md-1"></div>
                      <div class="col-md-12">
                          <hr>
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
                  <button type="submit" class="btn btn-success"> Zapisz</button>
                </div>
              </div>
          </div>
          <div class="col-sm">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-12">
                    <hr>
                </div>
            </div>
          </div>
          </form>
        </div>
{/block}
