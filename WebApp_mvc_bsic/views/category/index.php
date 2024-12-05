<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
<style>
body {
	font-family: Arial, Helvetica, sans-serif;
}
table {
	font-size: 1em;
}
.ui-draggable, .ui-droppable {
	background-position: top;
}
.ui-autocomplete-loading {
	background: white url("/img/loading.gif") right center no-repeat;
}
</style>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<a href="/">Back Home</a>
<a href="/category/tree">Tree</a>
<a href="/category/add">Add</a>
<div class="row">
	<div class="col-5">
		<ul>
			<?php foreach ($arr as $v): ?>
				<li>
					<a href="/category/parent/"><?=$v->name?></a>
					<?php if (isset($v->children)): ?>
						<ul>
						<?php foreach ($v->children as $u): ?>
							<li>
								<a href="/category/child/"><?=$u->name?></a>
								<?php if (isset($u->children)): ?>
									<ul>
										<?php foreach ($u->children as $c): ?>
											<li><a href="/category/"><?=$c->name?></a></li>
										<?php endforeach ?>
									</ul>
								<?php endif ?>
							</li>
						<?php endforeach ?>
						</ul>
					<?php endif ?>
				</li>
			<?php endforeach ?>
		</ul>
	</div>
	<div class="col-7">
		<div class="ui-widget">
			<label for="birds">Birds: </label>
			<input id="birds">
		</div>
		<div class="ui-widget" style="margin-top:2em; font-family:Arial">
			Result:
			<div id="log" style="height: 200px; width: 300px; overflow: auto;" class="ui-widget-content"></div>
		</div>				
	</div>
</div>
<script>
$( function() {
	function log( message ) {
		$("<div>").text( message ).prependTo( "#log" );
		$("#log").scrollTop( 0 );
	}
	$("#birds").autocomplete({
		source: "/category/search",
		minLength: 2,
		select: function( event, ui ) {
			log( "Selected: " + ui.item.value + " aka " + ui.item.id );
		}
	});
});
</script>