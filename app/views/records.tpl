
{if $szym != null}
<div class="col-sm">
  <table class="table table-hover">
<thead>
  <tr>
    <th scope="col">godzina</th>
  </tr>
</thead>
<tbody>
  {foreach $record as $r}
  {strip}
  <tr>
    <th scope="row"></th>
    <td>{$r["time"]}</td>
  </tr>
  {/strip}
  {/foreach}
</tbody>
</table>
</div>
{/if}
