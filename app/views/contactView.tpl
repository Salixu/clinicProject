{extends file ="navbar.tpl"}
{block name=content}
<div class="container">
    <form  method="POST" action="{$conf->action_url}CreateAccount">
      <div class="container">
        <div class="row">
          <div class="col-sm">
              <div class="row">
                  <div class="col-md-0">
                  </div>
                  <div class="col-md-12">
                      <hr>
                      <b>Dane Kontakowe:</b>
                      <hr>
                  </div>
              </div>
              <thead>
                <tr>
                  <th scope="col"><b>Email: </b></th>
                </tr>
              </thead>
              <tbody>
                {foreach $records as $r}
                {strip}
                <tr>
                  <td>{$r["email"]}</td>
                </tr>
                {/strip}
                {/foreach}
              </tbody>
              <div class="row">
                  <div class="col-md-0">
                  </div>
                  <div class="col-md-12">
                      <hr>
                  </div>
              </div>
              <thead>
                <tr>
                  <th scope="col"><b>Adress: </b></th>
                </tr>
              </thead>
              <tbody>
                {foreach $records as $r}
                {strip}
                <tr>
                  <td>{$r["adress"]}</td>
                </tr>
                {/strip}
                {/foreach}
              </tbody>
              <div class="row">
                  <div class="col-md-0">
                  </div>
                  <div class="col-md-12">
                      <hr>
                  </div>
              </div>
              <thead>
                <tr>
                  <th scope="col"><b>Phone number: </b></th>
                </tr>
              </thead>
              <tbody>
                {foreach $records as $r}
                {strip}
                <tr>
                  <td>{$r["phone_number"]}</td>
                </tr>
                {/strip}
                {/foreach}
              </tbody>
          </div>
          <div class="col-sm">
          </div>
          <div class="col-sm">
            <div class="row">
                <div class="col-md-0"></div>
                <div class="col-md-12">
                    <hr>
                </div>
            </div>
            <b>Formularz Kontaktowy: </b>
            <div class="row">
                <div class="col-md-0"></div>
                <div class="col-md-12">
                    <hr>
                </div>
            </div>
            <form class="form-horizontal" method="POST" action="{$conf->action_url}CreateAccount">
              <div class="row">
                  <div class="col-sm">
                      <label for="name">Imię: </label>
                  </div>
                      <div>
                          <div>
                              <input type="text" name="name" class="form-control" id="name"
                                     placeholder="Imie" required autofocus>
                          </div>
                      </div>
              </div>
              <div class="row">
                  <div class="col-md-0"></div>
                  <div class="col-md-12">
                      <hr>
                  </div>
              </div>
              <div class="row">
                  <div class="col-sm">
                      <label for="name">Adres email: </label>
                  </div>
                      <div>
                          <div>
                              <input type="text" name="email" class="form-control" id="name"
                                     placeholder="adres email" required autofocus>
                          </div>
                      </div>
              </div>
              <div class="row">
                  <div class="col-md-0"></div>
                  <div class="col-md-12">
                      <hr>
                  </div>
              </div>
              <div class="row">
                  <div class="col-sm">
                      <label for="name">Temat: </label>
                  </div>
                      <div>
                          <div>
                              <input type="text" name="topic" class="form-control" id="name"
                                     placeholder="Temat" required autofocus>
                          </div>
                      </div>
              </div>
              <div class="row">
                  <div class="col-md-0"></div>
                  <div class="col-md-12">
                      <hr>
                  </div>
              </div>
              Napisz do nas!<div class="md-form">
                <textarea id="form7" class="lg-textarea form-control" name="message" rows="2"></textarea>
              </div><br>
                <div class="row">
                    <div class="col-md-0"></div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-success"><i class="fas fa-envelope"></i> Wyślij</button>
                    </div>
                </div>
            </form>
          </div>
        </div>
      </div>
    </form>
</div>
{/block}
