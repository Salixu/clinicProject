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
                  </div>
              </div>
              <thead>
                <tr>
                  <th scope="col"><b>email: </b></th>
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
                  <th scope="col"><b>adress: </b></th>
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
