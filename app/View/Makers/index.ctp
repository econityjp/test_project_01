<div class="makers index">
	<h2><?php echo __('Makers'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('orgs_id'); ?></th>
			<th><?php echo $this->Paginator->sort('places_id'); ?></th>
			<th><?php echo $this->Paginator->sort('auth_groups_id'); ?></th>
			<th><?php echo $this->Paginator->sort('no_in_org'); ?></th>
			<th><?php echo $this->Paginator->sort('users_id_created'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('users_id_modified'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('disp_order'); ?></th>
			<th><?php echo $this->Paginator->sort('is_deleted'); ?></th>
			<th><?php echo $this->Paginator->sort('remarks'); ?></th>
			<th><?php echo $this->Paginator->sort('attribute_id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('furigana'); ?></th>
			<th><?php echo $this->Paginator->sort('text1'); ?></th>
			<th><?php echo $this->Paginator->sort('text2'); ?></th>
			<th><?php echo $this->Paginator->sort('text3'); ?></th>
			<th><?php echo $this->Paginator->sort('text4'); ?></th>
			<th><?php echo $this->Paginator->sort('text5'); ?></th>
			<th><?php echo $this->Paginator->sort('text6'); ?></th>
			<th><?php echo $this->Paginator->sort('text7'); ?></th>
			<th><?php echo $this->Paginator->sort('text8'); ?></th>
			<th><?php echo $this->Paginator->sort('text9'); ?></th>
			<th><?php echo $this->Paginator->sort('text10'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($makers as $maker): ?>
	<tr>
		<td><?php echo h($maker['Maker']['id']); ?>&nbsp;</td>
		<td><?php echo h($maker['Maker']['orgs_id']); ?>&nbsp;</td>
		<td><?php echo h($maker['Maker']['places_id']); ?>&nbsp;</td>
		<td><?php echo h($maker['Maker']['auth_groups_id']); ?>&nbsp;</td>
		<td><?php echo h($maker['Maker']['no_in_org']); ?>&nbsp;</td>
		<td><?php echo h($maker['Maker']['users_id_created']); ?>&nbsp;</td>
		<td><?php echo h($maker['Maker']['created']); ?>&nbsp;</td>
		<td><?php echo h($maker['Maker']['users_id_modified']); ?>&nbsp;</td>
		<td><?php echo h($maker['Maker']['modified']); ?>&nbsp;</td>
		<td><?php echo h($maker['Maker']['disp_order']); ?>&nbsp;</td>
		<td><?php echo h($maker['Maker']['is_deleted']); ?>&nbsp;</td>
		<td><?php echo h($maker['Maker']['remarks']); ?>&nbsp;</td>
		<td><?php echo h($maker['Maker']['attribute_id']); ?>&nbsp;</td>
		<td><?php echo h($maker['Maker']['name']); ?>&nbsp;</td>
		<td><?php echo h($maker['Maker']['furigana']); ?>&nbsp;</td>
		<td><?php echo h($maker['Maker']['text1']); ?>&nbsp;</td>
		<td><?php echo h($maker['Maker']['text2']); ?>&nbsp;</td>
		<td><?php echo h($maker['Maker']['text3']); ?>&nbsp;</td>
		<td><?php echo h($maker['Maker']['text4']); ?>&nbsp;</td>
		<td><?php echo h($maker['Maker']['text5']); ?>&nbsp;</td>
		<td><?php echo h($maker['Maker']['text6']); ?>&nbsp;</td>
		<td><?php echo h($maker['Maker']['text7']); ?>&nbsp;</td>
		<td><?php echo h($maker['Maker']['text8']); ?>&nbsp;</td>
		<td><?php echo h($maker['Maker']['text9']); ?>&nbsp;</td>
		<td><?php echo h($maker['Maker']['text10']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $maker['Maker']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $maker['Maker']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $maker['Maker']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $maker['Maker']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Maker'), array('action' => 'add')); ?></li>
	</ul>
</div>
