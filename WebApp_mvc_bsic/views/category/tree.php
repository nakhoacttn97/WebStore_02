<a href="/">Back Home</a>
<ul>
	<?php foreach ($arr as $v): ?>
		<li>
			<a href="/category/parent/"><?=$v->CategoryName?></a>
			<?php if (isset($v->children)): ?>
				<ul>
				<?php foreach ($v->children as $u): ?>
					<li>
						<a href="/category/child/"><?=$u->CategoryName?></a>
						<?php if (isset($u->children)): ?>
							<ul>
								<?php foreach ($u->children as $c): ?>
									<li><a href="/category/"><?=$c->CategoryName?></a></li>
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