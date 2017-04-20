<div class="places view">
<h2><?php echo __('Place'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($place['Place']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Orgs Id'); ?></dt>
		<dd>
			<?php echo h($place['Place']['orgs_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Places Id'); ?></dt>
		<dd>
			<?php echo h($place['Place']['places_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Auth Groups Id'); ?></dt>
		<dd>
			<?php echo h($place['Place']['auth_groups_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('No In Org'); ?></dt>
		<dd>
			<?php echo h($place['Place']['no_in_org']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Users Id Created'); ?></dt>
		<dd>
			<?php echo h($place['Place']['users_id_created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($place['Place']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Users Id Modified'); ?></dt>
		<dd>
			<?php echo h($place['Place']['users_id_modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($place['Place']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Disp Order'); ?></dt>
		<dd>
			<?php echo h($place['Place']['disp_order']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Deleted'); ?></dt>
		<dd>
			<?php echo h($place['Place']['is_deleted']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Remarks'); ?></dt>
		<dd>
			<?php echo h($place['Place']['remarks']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Attribute Id'); ?></dt>
		<dd>
			<?php echo h($place['Place']['attribute_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($place['Place']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Furigana'); ?></dt>
		<dd>
			<?php echo h($place['Place']['furigana']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Postal Code'); ?></dt>
		<dd>
			<?php echo h($place['Place']['postal_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Prefecture Id'); ?></dt>
		<dd>
			<?php echo h($place['Place']['prefecture_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($place['Place']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tel'); ?></dt>
		<dd>
			<?php echo h($place['Place']['tel']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fax'); ?></dt>
		<dd>
			<?php echo h($place['Place']['fax']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rep Name'); ?></dt>
		<dd>
			<?php echo h($place['Place']['rep_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Staff Name'); ?></dt>
		<dd>
			<?php echo h($place['Place']['staff_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Staff Postal Code'); ?></dt>
		<dd>
			<?php echo h($place['Place']['staff_postal_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Staff Tel'); ?></dt>
		<dd>
			<?php echo h($place['Place']['staff_tel']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Staff Ext Tel'); ?></dt>
		<dd>
			<?php echo h($place['Place']['staff_ext_tel']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Staff Mobile'); ?></dt>
		<dd>
			<?php echo h($place['Place']['staff_mobile']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Staff Fax'); ?></dt>
		<dd>
			<?php echo h($place['Place']['staff_fax']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Staff Email'); ?></dt>
		<dd>
			<?php echo h($place['Place']['staff_email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Text1'); ?></dt>
		<dd>
			<?php echo h($place['Place']['text1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Text2'); ?></dt>
		<dd>
			<?php echo h($place['Place']['text2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Text3'); ?></dt>
		<dd>
			<?php echo h($place['Place']['text3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Text4'); ?></dt>
		<dd>
			<?php echo h($place['Place']['text4']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Text5'); ?></dt>
		<dd>
			<?php echo h($place['Place']['text5']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Place'), array('action' => 'edit', $place['Place']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Place'), array('action' => 'delete', $place['Place']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $place['Place']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Places'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Place'), array('action' => 'add')); ?> </li>
	</ul>
</div>
