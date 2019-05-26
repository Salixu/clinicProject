<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
<link rel="stylesheet" type = "text/css" href = "{$conf->app_url}/css/bootstrap.css">
<link rel="stylesheet" type = "text/css" href = "{$conf->app_url}/css/css.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <title>{$page_title|default:"Tytuł domyślny"}</title>
  </head>
  <body>
        <nav class="navbar sticky-top navbar-expand-lg navbar-light navbar-transparent backgroundcolor">
          <img src="{$conf->app_url}/img/tooth.png" width="45" height="45" class="d-inline-block align-top" alt="">
          <a class="navbar-brand" href="{$conf->action_root}mainPageshow"><span class = "test">RemediumDente</span></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto navbarFontSize">
              <li class="nav-item paddingRight">
                <a class="nav-link" href="{$conf->action_root}loginShow"><b>Zaloguj się</b></a>
              </li>
              <li class="nav-item paddingRight">
                <a class="nav-link" href="{$conf->action_root}registrationShow"><b>Zarejestruj się</b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{$conf->action_root}contactpageShow"><b>Kontakt</b></a>
              </li>
            </ul>
          </div>
        </nav>
    <div class = "container">
      {block name=content}Domyslna tresc zawartosci {/block}
    </div>
    <script>
      $(document).ready(function(){
        $('select').formSelect();
      });
    </script>
  </body>
</html>
