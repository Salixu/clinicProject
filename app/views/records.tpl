
{if $szym == dupa}
<div class="col-sm">
  <table class="table table-borderless">
<thead>
  <tr>
    <th scope="col">godzina</th>
  </tr>
</thead>
<br>
<tbody>
  {foreach $record as $r}
  {strip}
  <tr>
    <th scope="row"></th>
    <td><b>{$r}</b></td>
    <td><button type="submit" class="btn btn-outline-info btn-lg">Zapisz</button></td>
  </tr>
  {/strip}
  {/foreach}
</tbody>
</table>
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
