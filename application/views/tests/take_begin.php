<?php echo validation_errors(); ?>

<?php echo form_open('tests/take_begin'); ?>

<a href="<?php echo site_url('/tests/take/'.$test_id.'/0'); ?>" class="btn btn-default">Start Test</a>

<?php echo form_close(); ?>