<div class="orgs form">
<?php echo $this->Form->create('Org'); ?>
	<fieldset>
		<legend><?php echo __('Add Org'); ?></legend>
	<?php
		echo $this->Form->input('users_id_created');
		echo $this->Form->input('users_id_modified');
		echo $this->Form->input('disp_order');
		echo $this->Form->input('is_deleted');
		echo $this->Form->input('remarks');
		echo $this->Form->input('name');
		echo $this->Form->input('furigana');
		echo $this->Form->input('postal_code');
		echo $this->Form->input('prefecture_id');
		echo $this->Form->input('address');
		echo $this->Form->input('tel');
		echo $this->Form->input('fax');
		echo $this->Form->input('rep_name');
		echo $this->Form->input('staff_name');
		echo $this->Form->input('staff_postal_code');
		echo $this->Form->input('staff_tel');
		echo $this->Form->input('staff_ext_tel');
		echo $this->Form->input('staff_mobile');
		echo $this->Form->input('staff_fax');
		echo $this->Form->input('staff_email');
		echo $this->Form->input('contract_code');
		echo $this->Form->input('accounting_code');
		echo $this->Form->input('contract_kind');
		echo $this->Form->input('payment_method');
		echo $this->Form->input('text1');
		echo $this->Form->input('text2');
		echo $this->Form->input('text3');
		echo $this->Form->input('text4');
		echo $this->Form->input('text5');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Orgs'), array('action' => 'index')); ?></li>
	</ul>
</div>
