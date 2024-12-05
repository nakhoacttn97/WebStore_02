<a href="/category">Category</a>

<ul>
<?php foreach ($categories as $v): ?>
	<li><a href="/home/category/<?=$v['id']?>"><?=$v['name']?></a></li>
<?php endforeach ?>
</ul>