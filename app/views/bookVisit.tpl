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
            </div>
            </div>
        </div>
        <hr class="featurette-divider">
        <div class="row">
          <div class="col-lg-4">
            <img src="{$conf->app_url}/img/JaroslawOgórek.jpg" alt="Generic placeholder image" width="140" height="160">
            <h2>Certyfikaty</h2>
            <p>W naszej klinice pracują specjalisci posiadający certyfikaty, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-secondary buttony" href="https://www.mynextmove.org/profile/ext/cert/29-1021.00" target="_blank" role="button">Sprawdź! &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
              <img src="{$conf->app_url}/img/KalinaTrautzel.jpg" alt="Generic placeholder image" width="140" height="160">
              <h2>Certyfikaty</h2>
              <p>W naszej klinice pracują specjalisci posiadający certyfikaty, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
              <p><a class="btn btn-secondary buttony" href="https://www.mynextmove.org/profile/ext/cert/29-1021.00" target="_blank" role="button">Sprawdź! &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img src="{$conf->app_url}/img/SzymonOleksy.jpg" alt="Generic placeholder image" width="140" height="160">
            <h2>Certyfikaty</h2>
            <p>W naszej klinice pracują specjalisci posiadający certyfikaty, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-secondary buttony" href="https://www.mynextmove.org/profile/ext/cert/29-1021.00" target="_blank" role="button">Sprawdź! &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
        </form>
        <div id="records">
          {include file = "records.tpl"}
        </div>
{/block}
