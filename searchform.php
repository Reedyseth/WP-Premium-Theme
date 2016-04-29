<div class="searchform">
	<form method="get" id="searchform" class="form-inline" action="<?php bloginfo('url'); ?>">
		<div class="form-group">
			<div class="input-group">
				<label class="sr-only" for="search">Search on this blog</label>
				<input id="search" type="text" value="Search on this blog..." name="s" class="form-control" onfocus="if (this.value == 'Search on this blog...') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Search on this blog...';}">
				<span class="input-group-btn">
					<input class="btn btn-success" type="submit" value="Go!" />
				</span>
			</div>
		</div>
	</form>
</div>
