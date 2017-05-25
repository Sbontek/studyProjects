<h2><?= $title; ?></h2>
<ul class="list-group">
<?php foreach($tests as $test) : ?>
	<li class="list-group-item">
		<a href="<?php echo site_url('/tests'.$test['test_id']); ?>"><?php echo $test['test_name'] ?></a>
		<?php if($this->session->userdata('user_id') == $test['user_id']) : ?>
			<form class="test-delete" action="tests/delete/<?php echo $test['test_id']; ?>" method="POST">
				<input type="submit" class="btn-link text-danger" value="[X]">
			</form>
		<?php endif; ?>
	</li>
<?php endforeach; ?>
</ul>