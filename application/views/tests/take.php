<?php echo validation_errors(); ?>

<?php echo form_open('tests/take'); ?>


<?php foreach($questions as $question) : ?>
	<?php echo "<div class='questions'> $question->question_text</div>"; ?>
<?php endforeach; ?>
<?php foreach($question->answers as $answer) : ?>
	<li class="list-group-item">
		<?php echo "<div><input name='answers' type='radio'> $answer->answer_text</div>"; ?>
	</li>
<?php endforeach; ?>
	
	

<a href="<?php echo site_url('/tests/take/'.$test_id.'/'.($question_offset+1)); ?>" class="btn btn-default">Next Question</a>
<?php echo form_close(); ?>






