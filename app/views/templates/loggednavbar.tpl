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
<script type="text/javascript" src="{$conf->app_url}/js/functions.js"></script>
    <title>{$page_title|default:"Tytuł domyślny"}</title>
  </head>
  <body class = "backgroundImage">
        <nav class="navbar sticky-top navbar-expand-lg navbar-light navbar-transparent backgroundcolor">
          <img src="{$conf->app_url}/img/tooth.png" width="45" height="45" class="d-inline-block align-top" alt="">
          <a class="navbar-brand" href="#"><span class = "test">RemediumDente</span></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          {if $res == user}
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto navbarFontSize">
              <li class="nav-item paddingRight">
                <a class="nav-link" href="{$conf->action_root}showVisit"><b>Ustal wizytę</b></a>
              </li>
              <li class="nav-item paddingRight">
                <a class="nav-link" href="{$conf->action_root}logout"><b>Wyświetl wizyty</b></a>
              </li>
              <li class="nav-item paddingRightLogout">
                <a class="nav-link" href="{$conf->action_root}userprofileShow"><b>Edytuj profil</b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{$conf->action_root}logout"><b>Wyloguj</b></a>
              </li>
            </ul>
          </div>

          {else if $res == recep}
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto navbarFontSize">
              <li class="nav-item">
                <a class="nav-link" href="{$conf->action_root}logout"><b>recep</b></a>
              </li>
            </ul>
          </div>
          {else if $res == doctor}
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto navbarFontSize">
              <li class="nav-item">
                <a class="nav-link" href="{$conf->action_root}logout"><b>doc</b></a>
              </li>
            </ul>
          </div>
          {else if $res == admin}
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto navbarFontSize">
              <li class="nav-item">
                <a class="nav-link" href="{$conf->action_root}logout"><b>admin</b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{$conf->action_root}editcontactpage"><b>kontakt</b></a>
              </li>
            </ul>
          </div>
          {/if}
        </nav>
    <div class = "container">
      {block name=content}Domyslna tresc zawartosci {/block}
    </div>
  </body>
</html>
