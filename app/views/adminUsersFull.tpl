{extends file ="loggednavbar.tpl"}
{block name=content}
<br>
<hr>
<div class="container">
<form id="search-form" class="pure-form pure-form-stacked" onsubmit="ajaxPostForm('search-form','{$conf->action_url}searchUser','userRecords'); return false;">
	<div class="row">
			<div class="col-md-6">
					<div class="form-group">
							<div class="input-group mb-2 mr-sm-2 mb-sm-0">
									<div class="input-group-addon" style="width: 2.6rem"></div>
									<input type="text" name="name" class="form-control" id="name" required autofocus>
							</div>
					</div>
			</div>
			<div class="col-md-3">
				<button type="onsubmit" class="btn btn-success"> Wyszukaj</button>
			</div>
	</div>
	</form>
<br>
</div>

<div id="userRecords">
{include file="userRecords.tpl"}
</div>

{/block}
