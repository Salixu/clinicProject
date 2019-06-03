{extends file ="loggednavbar.tpl"}
{block name=content}
  {if $res == user}

  <hr class="featurette-divider">
    <div class="container">
      <h1 class="display-4"><span class ="test2"><b>Panel użytkownika</b></span></h1>
  <b>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
  Aliquam sed tellus sed eros lobortis sollicitudin ac vel sapien.
  </b></div>
  <hr class="featurette-divider">
    <div class="container marketing">
      <div class="row">
        <div class="col-lg-4">
          <img  src="{$conf->app_url}/img/form.png" alt="Generic placeholder image" width="70" height="70">
          <h2>Ustal wizytę</h2>
          <p><a class="btn btn-secondary buttony" href="{$conf->action_root}showVisit" role="button">Wypelnij formularz &raquo;</a></p>
        </div>
        <div class="col-lg-4">
        </div>
        <div class="col-lg-4">
          <img src="{$conf->app_url}/img/appointment.svg" alt="Generic placeholder image" width="70" height="70">
          <h2>Twoje wizyty</h2>
          <p><a class="btn btn-secondary buttony" href="https://www.mynextmove.org/profile/ext/cert/29-1021.00" target="_blank" role="button">Sprawdź! &raquo;</a></p>
        </div>
      </div>
    </div>
    <hr class="featurette-divider">
      <div class="container marketing">
        <div class="row">
          <div class="col-lg-4">
            <img  src="{$conf->app_url}/img/gear.svg" alt="Generic placeholder image" width="70" height="70">
            <h2>Edytuj profil</h2>
            <p><a class="btn btn-secondary buttony" href="{$conf->action_root}profileUpdate" role="button">Edytuj &raquo;</a></p>
          </div>
          <div class="col-lg-4">
          </div>
        </div>
      </div>
        <hr class="featurette-divider">
  <footer class="container">
  <p class="float-right"></p>
  <p>&copy; <b>2019 Bartosz Glanowski</b></p>

{else if $res == recep}

<hr class="featurette-divider">
  <div class="container">
    <h1 class="display-4"><span class ="test2"><b>Panel administratora</b></span></h1>
<b>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
Aliquam sed tellus sed eros lobortis sollicitudin ac vel sapien.
</b></div>
  </div>
<hr class="featurette-divider">
  <div class="container marketing">
    <div class="row">
      <div class="col-lg-4">
        <img  src="{$conf->app_url}/img/form.png" alt="Generic placeholder image" width="70" height="70">
        <h2>Zostań naszym pacjentem</h2>
        <p>Stwórz konto poprzez wypelnienie formularza rejestracji, magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
        <p><a class="btn btn-secondary buttony" href="{$conf->action_root}registrationShow" role="button">Wypelnij formularz &raquo;</a></p>
      </div>
      <div class="col-lg-4">
      </div>
      <div class="col-lg-4">
        <img src="{$conf->app_url}/img/certificate1.png" alt="Generic placeholder image" width="70" height="70">
        <h2>Certyfikaty</h2>
        <p>W naszej klinice pracują specjalisci posiadający certyfikaty, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <p><a class="btn btn-secondary buttony" href="https://www.mynextmove.org/profile/ext/cert/29-1021.00" target="_blank" role="button">Sprawdź! &raquo;</a></p>
      </div>
    </div>
    <hr class="featurette-divider">
</div>
<footer class="container">
<p class="float-right"></p>
<p>&copy; <b>2019 Bartosz Glanowski</b></p>

{else if $res == doctor}

<hr class="featurette-divider">
  <div class="container">
    <h1 class="display-4"><span class ="test2"><b>Panel administratora</b></span></h1>
<b>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
Aliquam sed tellus sed eros lobortis sollicitudin ac vel sapien.
</b></div>
  </div>
<hr class="featurette-divider">
  <div class="container marketing">
    <div class="row">
      <div class="col-lg-4">
        <img  src="{$conf->app_url}/img/form.png" alt="Generic placeholder image" width="70" height="70">
        <h2>Zostań naszym pacjentem</h2>
        <p>Stwórz konto poprzez wypelnienie formularza rejestracji, magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
        <p><a class="btn btn-secondary buttony" href="{$conf->action_root}registrationShow" role="button">Wypelnij formularz &raquo;</a></p>
      </div>
      <div class="col-lg-4">
      </div>
      <div class="col-lg-4">
        <img src="{$conf->app_url}/img/certificate1.png" alt="Generic placeholder image" width="70" height="70">
        <h2>Certyfikaty</h2>
        <p>W naszej klinice pracują specjalisci posiadający certyfikaty, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <p><a class="btn btn-secondary buttony" href="https://www.mynextmove.org/profile/ext/cert/29-1021.00" target="_blank" role="button">Sprawdź! &raquo;</a></p>
      </div>
    </div>
    <hr class="featurette-divider">
</div>
<footer class="container">
<p class="float-right"></p>
<p>&copy; <b>2019 Bartosz Glanowski</b></p>

{else if $res == admin}

<hr class="featurette-divider">
  <div class="container">
    <h1 class="display-4"><span class ="test2"><b>Panel administratora</b></span></h1>
<b>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
Aliquam sed tellus sed eros lobortis sollicitudin ac vel sapien.
</b></div>
  </div>
<hr class="featurette-divider">
  <div class="container marketing">
    <div class="row">
      <div class="col-lg-4">
        <img  src="{$conf->app_url}/img/form.png" alt="Generic placeholder image" width="70" height="70">
        <h2>Zostań naszym pacjentem</h2>
        <p>Stwórz konto poprzez wypelnienie formularza rejestracji, magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
        <p><a class="btn btn-secondary buttony" href="{$conf->action_root}registrationShow" role="button">Wypelnij formularz &raquo;</a></p>
      </div>
      <div class="col-lg-4">
      </div>
      <div class="col-lg-4">
        <img src="{$conf->app_url}/img/certificate1.png" alt="Generic placeholder image" width="70" height="70">
        <h2>Certyfikaty</h2>
        <p>W naszej klinice pracują specjalisci posiadający certyfikaty, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <p><a class="btn btn-secondary buttony" href="https://www.mynextmove.org/profile/ext/cert/29-1021.00" target="_blank" role="button">Sprawdź! &raquo;</a></p>
      </div>
    </div>
    <hr class="featurette-divider">
</div>
<footer class="container">
<p class="float-right"></p>
<p>&copy; <b>2019 Bartosz Glanowski</b></p>

{/if}
{/block}
