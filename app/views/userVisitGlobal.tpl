{extends file ="loggednavbar.tpl"}
{block name=content}

<div class="container">
  <div class="row">
    <form action="{$conf->action_root}upcomingVisits" method="POST">
    <div class="col visitsAllign">
      <hr class="featurette-divider">
      <button type="submit" class="btn btn-warning">Nadchodzące wizyty</button>
    </div>
  </form>
    <div class="col visitsAllign">
      <form action="{$conf->action_root}doneVisits" method="POST">
      <hr class="featurette-divider">
      <button type="button" class="btn btn-success">Zakończone wizyty</button>
    </form>
    </div>
  </div>
</div>
{/block}
