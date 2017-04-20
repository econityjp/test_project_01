<div class="makers form">
<?php echo $this->Form->create('Maker'); ?>
	<fieldset>
		<legend><?php echo __('Add Maker'); ?></legend>
	<?php
		echo $this->Form->input('orgs_id');
		echo $this->Form->input('places_id');
		echo $this->Form->input('auth_groups_id');
		echo $this->Form->input('no_in_org');
		echo $this->Form->input('users_id_created');
		echo $this->Form->input('users_id_modified');
		echo $this->Form->input('disp_order');
		echo $this->Form->input('is_deleted');
		echo $this->Form->input('remarks');
		echo $this->Form->input('attribute_id');
		echo $this->Form->input('name');
		echo $this->Form->input('furigana');
		echo $this->Form->input('text1');
		echo $this->Form->input('text2');
		echo $this->Form->input('text3');
		echo $this->Form->input('text4');
		echo $this->Form->input('text5');
		echo $this->Form->input('text6');
		echo $this->Form->input('text7');
		echo $this->Form->input('text8');
		echo $this->Form->input('text9');
		echo $this->Form->input('text10');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Makers'), array('action' => 'index')); ?></li>
	</ul>
</div>
