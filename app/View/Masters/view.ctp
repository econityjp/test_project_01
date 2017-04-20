<div class="makers view">
<h2><?php echo __('Maker'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($maker['Maker']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Orgs Id'); ?></dt>
		<dd>
			<?php echo h($maker['Maker']['orgs_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Places Id'); ?></dt>
		<dd>
			<?php echo h($maker['Maker']['places_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Auth Groups Id'); ?></dt>
		<dd>
			<?php echo h($maker['Maker']['auth_groups_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('No In Org'); ?></dt>
		<dd>
			<?php echo h($maker['Maker']['no_in_org']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Users Id Created'); ?></dt>
		<dd>
			<?php echo h($maker['Maker']['users_id_created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($maker['Maker']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Users Id Modified'); ?></dt>
		<dd>
			<?php echo h($maker['Maker']['users_id_modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($maker['Maker']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Disp Order'); ?></dt>
		<dd>
			<?php echo h($maker['Maker']['disp_order']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Deleted'); ?></dt>
		<dd>
			<?php echo h($maker['Maker']['is_deleted']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Remarks'); ?></dt>
		<dd>
			<?php echo h($maker['Maker']['remarks']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Attribute Id'); ?></dt>
		<dd>
			<?php echo h($maker['Maker']['attribute_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($maker['Maker']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Furigana'); ?></dt>
		<dd>
			<?php echo h($maker['Maker']['furigana']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Text1'); ?></dt>
		<dd>
			<?php echo h($maker['Maker']['text1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Text2'); ?></dt>
		<dd>
			<?php echo h($maker['Maker']['text2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Text3'); ?></dt>
		<dd>
			<?php echo h($maker['Maker']['text3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Text4'); ?></dt>
		<dd>
			<?php echo h($maker['Maker']['text4']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Text5'); ?></dt>
		<dd>
			<?php echo h($maker['Maker']['text5']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Text6'); ?></dt>
		<dd>
			<?php echo h($maker['Maker']['text6']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Text7'); ?></dt>
		<dd>
			<?php echo h($maker['Maker']['text7']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Text8'); ?></dt>
		<dd>
			<?php echo h($maker['Maker']['text8']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Text9'); ?></dt>
		<dd>
			<?php echo h($maker['Maker']['text9']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Text10'); ?></dt>
		<dd>
			<?php echo h($maker['Maker']['text10']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Maker'), array('action' => 'edit', $maker['Maker']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Maker'), array('action' => 'delete', $maker['Maker']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $maker['Maker']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Makers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Maker'), array('action' => 'add')); ?> </li>
	</ul>
</div>
