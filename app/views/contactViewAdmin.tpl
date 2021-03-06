{extends file ="loggednavbar.tpl"}
{block name=content}
      <div class="container">
        <form action="{$conf->action_root}contactSave" method="POST">
          <div class="col-sm">
              <div class="row">
                  <div class="col-md-0"></div>
                  <div class="col-md-12">
                      <hr>
                  </div>
              </div>
              <div class="form-group row">
                <label for="email" class="col-2 col-form-label">Email</label>
                <div class="col-10">
                  <input class="form-control" name="email" type="text" value="{$form->email}" id="email"></input>
                </div>
              </div>
              <div class="row">
                  <div class="col-md-1"></div>
                  <div class="col-md-12">
                      <hr>
                  </div>
              </div>
              <div class="form-group row">
                <label for="adress" class="col-2 col-form-label">Adress</label>
                <div class="col-10">
                  <input class="form-control" name="adress" type="text" value="{$form->adress}" id="adress"></input>
                </div>
              </div>
              <div class="row">
                  <div class="col-md-1"></div>
                  <div class="col-md-12">
                      <hr>
                  </div>
              </div>
              <div class="form-group row">
                <label for="phone_number" class="col-2 col-form-label">Phone number</label>
                <div class="col-10">
                  <input class="form-control" type="text" name="phone_number" value="{$form->phone_number}" id="phone_number"></input>
                  <div class="row">
                      <div class="col-md-1"></div>
                      <div class="col-md-12">
                          <hr>
                      </div>
                  </div>
                  <button type="submit" class="btn btn-success"> Save</button>
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
