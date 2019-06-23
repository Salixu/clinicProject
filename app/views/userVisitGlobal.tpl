{extends file ="loggednavbar.tpl"}
{block name=content}

<div class="container">
  <div class="row">
    <form action="{$conf->action_root}upcomingVisits" method="POST">
    <div class="col-sm visitsAllign">
      <hr class="featurette-divider">
      <button type="submit" class="btn btn-warning">Nadchodzące wizyty</button>
    </div>
  </form>
  <div class="col-sm">

  </div>
  <form action="{$conf->action_root}doneVisits" method="POST">
    <div class="col-sm visitsAllign">
      <hr class="featurette-divider">
      <button type="submit" class="btn btn-success">Zakończone wizyty</button>
    </div>
    </form>
  </div>
</div>
{/block}
