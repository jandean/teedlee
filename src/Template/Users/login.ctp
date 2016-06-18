<div class="users form large-9 medium-8 columns content">
	<h3>Login</h3>
	<?= $this->Form->create(); ?>
	<?= $this->Form->input('username'); ?>
	<?= $this->Form->input('password'); ?>
	<?= $this->Form->button(__('Submit')) ?>
	<?= $this->Form->end(); ?>
</div>