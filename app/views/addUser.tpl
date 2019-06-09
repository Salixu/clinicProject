{extends file ="loggednavbar.tpl"}
{block name=content}
<div class="container">
    <form class="form-horizontal" method="POST" action="{$conf->action_url}addUser">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="name">Imie</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-user"></i></div>
                        <input type="text" name="name" class="form-control" id="name"
                               placeholder="Imie" required autofocus>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="surname">Nazwisko</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-user"></i></div>
                        <input type="text" name="surname" class="form-control" id="surname"
                               placeholder="Naziwsko" required autofocus>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <!-- Put name validation error messages here -->
                        </span>
                </div>
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
                <label for="pass">Haslo</label>
            </div>
            <div class="col-md-6">
                <div class="form-group has-danger">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-key"></i></div>
                        <input type="password" name="pass" minlength ="8"class="form-control" id="pass"
                               placeholder="Haslo" required>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <!--<i class="fa fa-close"> </i>-->
                        </span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="password">Potwierdz haslo</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem">
                            <i class="fa fa-repeat"></i>
                        </div>
                        <input type="password" name="passConfirm" class="form-control"
                               id="passConfirm" placeholder="Haslo" required>
                    </div>
                </div>

                {if $msgs->isError()}
                  <ul>
                  {foreach  $msgs->getErrors() as $err}
                  {strip}
                    <li><span class="redText">{$err}</span></li>
                  {/strip}
                  {/foreach}
                </ul>
                {/if}

                {if $msgs->isInfo()}
                  <ul>
                  {foreach  $msgs->getInfos() as $info}
                  {strip}
                    <li><b><span class="greenText">{$info}</span></b></li>
                  {/strip}
                  {/foreach}
                </ul>
                {/if}

            </div>
        </div>
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="surname">Rola </label>
            </div>
            <div class="col-md-8">
                <div class="form-group">
                  <select name="role">
                      <option value="admin">admin</option>
                      <option value="doctor">doktor</option>
                      <option value="recep">recepcjonista</option>
                  </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <button type="submit" class="btn btn-success"><i class="fa fa-user-plus"></i> Dodaj</button>
            </div>
        </div>
    </form>
</div>
{/block}
