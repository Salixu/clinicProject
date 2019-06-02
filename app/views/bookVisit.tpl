{extends file ="loggednavbar.tpl"}
{block name=content}
<div class="container">
    <form class="form-horizontal" method="POST" action="{$conf->action_url}CreateAccount">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="name"></label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                  <label for="date"><b>Wybierz dzień spotkania:</b></label>
                  <input id="date" type="date" name="date" value="date">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="name"></label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                  <label for="party"><b>Wybierz specjaliste: &nbsp &nbsp &nbsp &nbsp &nbsp</b></label>
                  <select>
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    <option value="opel">Opel</option>
                    <option value="audi">Audi</option>
                  </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <button type="submit" class="btn btn-success"><i class="fa fa-search"></i> Wyświetl możliwe terminy</button>
            </div>
        </div>
    </form>
</div>
{/block}
