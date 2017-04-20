<div class="orgs view">
<h2><?php echo __('Org'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($org['Org']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Users Id Created'); ?></dt>
		<dd>
			<?php echo h($org['Org']['users_id_created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($org['Org']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Users Id Modified'); ?></dt>
		<dd>
			<?php echo h($org['Org']['users_id_modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($org['Org']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Disp Order'); ?></dt>
		<dd>
			<?php echo h($org['Org']['disp_order']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Deleted'); ?></dt>
		<dd>
			<?php echo h($org['Org']['is_deleted']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Remarks'); ?></dt>
		<dd>
			<?php echo h($org['Org']['remarks']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($org['Org']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Furigana'); ?></dt>
		<dd>
			<?php echo h($org['Org']['furigana']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Postal Code'); ?></dt>
		<dd>
			<?php echo h($org['Org']['postal_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Prefecture Id'); ?></dt>
		<dd>
			<?php echo h($org['Org']['prefecture_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($org['Org']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tel'); ?></dt>
		<dd>
			<?php echo h($org['Org']['tel']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fax'); ?></dt>
		<dd>
			<?php echo h($org['Org']['fax']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rep Name'); ?></dt>
		<dd>
			<?php echo h($org['Org']['rep_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Staff Name'); ?></dt>
		<dd>
			<?php echo h($org['Org']['staff_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Staff Postal Code'); ?></dt>
		<dd>
			<?php echo h($org['Org']['staff_postal_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Staff Tel'); ?></dt>
		<dd>
			<?php echo h($org['Org']['staff_tel']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Staff Ext Tel'); ?></dt>
		<dd>
			<?php echo h($org['Org']['staff_ext_tel']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Staff Mobile'); ?></dt>
		<dd>
			<?php echo h($org['Org']['staff_mobile']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Staff Fax'); ?></dt>
		<dd>
			<?php echo h($org['Org']['staff_fax']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Staff Email'); ?></dt>
		<dd>
			<?php echo h($org['Org']['staff_email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contract Code'); ?></dt>
		<dd>
			<?php echo h($org['Org']['contract_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Accounting Code'); ?></dt>
		<dd>
			<?php echo h($org['Org']['accounting_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contract Kind'); ?></dt>
		<dd>
			<?php echo h($org['Org']['contract_kind']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Payment Method'); ?></dt>
		<dd>
			<?php echo h($org['Org']['payment_method']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Text1'); ?></dt>
		<dd>
			<?php echo h($org['Org']['text1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Text2'); ?></dt>
		<dd>
			<?php echo h($org['Org']['text2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Text3'); ?></dt>
		<dd>
			<?php echo h($org['Org']['text3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Text4'); ?></dt>
		<dd>
			<?php echo h($org['Org']['text4']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Text5'); ?></dt>
		<dd>
			<?php echo h($org['Org']['text5']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Org'), array('action' => 'edit', $org['Org']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Org'), array('action' => 'delete', $org['Org']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $org['Org']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Orgs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Org'), array('action' => 'add')); ?> </li>
	</ul>
</div>
