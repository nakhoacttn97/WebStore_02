<?php $this->showErrors() ?>
<form method="post" enctype="multipart/form-data">
	<div>
		<label>Parent</label>
		<select name="parent">
			<option value="">--Select Parent--</option>
			<?php foreach ($arr as $v): ?>
				<option value="<?=$v['CategoryId']?>"><?=$v['CategoryName']?></option>
			<?php endforeach ?>
		</select>
	</div>
	<div>
		<label>Image</label>
		<input type="file" name="f" accept="image/*">
	</div>
	<div>
		<label>Name</label>
		<input type="text" name="name">
	</div>
	<div>
		<button>Save Changes</button>
	</div>
</form>