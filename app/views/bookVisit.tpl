{extends file ="loggednavbar.tpl"}
{block name=content}
<div class="container">
      <form id="search-form" class="form-horizontal" onsubmit="ajaxPostForm('search-form','{$conf->action_url}bookVisit','records'); return false;">
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
                <div class="form-group">
                  <label for="date"><b>Wybierz specjaliste:</b></label>
                </div>
                <div> &nbsp <img src="{$conf->app_url}/img/SzymonOleksy.jpg" alt="Paris" style="width:150px"> &nbsp &nbsp &nbsp
                <img src="{$conf->app_url}/img/JaroslawOgórek.jpg" alt="Paris" style="width:150px"> &nbsp &nbsp &nbsp
                <img src="{$conf->app_url}/img/KalinaTrautzel.jpg" alt="Paris" style="width:150px">
              &nbsp <input type="checkbox" name="Jaroslaw"> Dr Jaroslaw Ogórek &nbsp &nbsp  <input type="checkbox" name="Szymon"> Dr Szymon Oleksy &nbsp &nbsp &nbsp &nbsp <input type="checkbox" name="Kalina" value="Bike"> Dr Kalina Trautzel
            </div>
            </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="name"></label>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <button type="submit" class="btn btn-success"><i class="fa fa-search"></i> Wyświetl możliwe terminy</button>
            </div>
        </div>
        </form>
        <div id="records">
          {include file = "records.tpl"}
        </div>
{/block}
