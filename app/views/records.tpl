
{if $szym == dupa}
<form class="form-horizontal" method="POST" action="{$conf->action_url}bookingVisit">
<div class="col-sm">
  <div class="form-group">
    <label id="time" for="time"><b>Wybierz godzinę:</b></label>
    <select name="time">
      <option value="10-11" {if $booked10 == 0} disabled {/if}>10-11 {if $booked10 == 0} WYBIERZ INNĄ GODZINĘ {/if}</option>
      <option value="11-12" {if $booked11 == 0} disabled {/if}>11-12 {if $booked11 == 0} WYBIERZ INNĄ GODZINĘ {/if}</option>
      <option value="12-13" {if $booked12 == 0} disabled {/if}>12-13 {if $booked12 == 0} WYBIERZ INNĄ GODZINĘ {/if}</option>
      <option value="13-14" {if $booked13 == 0} disabled {/if}>13-14 {if $booked13 == 0} WYBIERZ INNĄ GODZINĘ {/if}</option>
      <option value="14-15" {if $booked14 == 0} disabled {/if}>14-15 {if $booked14 == 0} WYBIERZ INNĄ GODZINĘ {/if}</option>
      <option value="15-16" {if $booked15 == 0} disabled {/if}>15-16 {if $booked15 == 0} WYBIERZ INNĄ GODZINĘ {/if}</option>
      <option value="16-17" {if $booked16 == 0} disabled {/if}>16-17 {if $booked16 == 0} WYBIERZ INNĄ GODZINĘ {/if}</option>
      <option value="17-18" {if $booked17 == 0} disabled {/if}>17-18 {if $booked17 == 0} WYBIERZ INNĄ GODZINĘ {/if}</option>
    </select>
  </div>
    <button type="submit" class="btn btn-success"> Zapisz</button>
</div>
</form>

</div>
<div>
  {else if $szym == lol}
  {if $msgs->isError()}
    <ul>
    {foreach  $msgs->getErrors() as $err}
    {strip}
      <li><span class="redText">{$err}</span></li>
    {/strip}
    {/foreach}
  </ul>
</div>
  {/if}
{/if}
