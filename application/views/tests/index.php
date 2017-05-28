<h2><?= $title; ?></h2>
<ul class="list-group">
<?php foreach($tests as $test) : ?>
	<li class="list-group-item">
		<a href="<?php echo site_url('/tests'.$test['test_id']); ?>"><?php echo $test['test_name'] ?></a>

	</li>
<?php endforeach; ?>
</ul>