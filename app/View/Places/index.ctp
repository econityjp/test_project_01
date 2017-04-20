<div class="places index">
	<h2><?php echo __('Places'); ?></h2>
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
			<th><?php echo $this->Paginator->sort('postal_code'); ?></th>
			<th><?php echo $this->Paginator->sort('prefecture_id'); ?></th>
			<th><?php echo $this->Paginator->sort('address'); ?></th>
			<th><?php echo $this->Paginator->sort('tel'); ?></th>
			<th><?php echo $this->Paginator->sort('fax'); ?></th>
			<th><?php echo $this->Paginator->sort('rep_name'); ?></th>
			<th><?php echo $this->Paginator->sort('staff_name'); ?></th>
			<th><?php echo $this->Paginator->sort('staff_postal_code'); ?></th>
			<th><?php echo $this->Paginator->sort('staff_tel'); ?></th>
			<th><?php echo $this->Paginator->sort('staff_ext_tel'); ?></th>
			<th><?php echo $this->Paginator->sort('staff_mobile'); ?></th>
			<th><?php echo $this->Paginator->sort('staff_fax'); ?></th>
			<th><?php echo $this->Paginator->sort('staff_email'); ?></th>
			<th><?php echo $this->Paginator->sort('text1'); ?></th>
			<th><?php echo $this->Paginator->sort('text2'); ?></th>
			<th><?php echo $this->Paginator->sort('text3'); ?></th>
			<th><?php echo $this->Paginator->sort('text4'); ?></th>
			<th><?php echo $this->Paginator->sort('text5'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($places as $place): ?>
	<tr>
		<td><?php echo h($place['Place']['id']); ?>&nbsp;</td>
		<td><?php echo h($place['Place']['orgs_id']); ?>&nbsp;</td>
		<td><?php echo h($place['Place']['places_id']); ?>&nbsp;</td>
		<td><?php echo h($place['Place']['auth_groups_id']); ?>&nbsp;</td>
		<td><?php echo h($place['Place']['no_in_org']); ?>&nbsp;</td>
		<td><?php echo h($place['Place']['users_id_created']); ?>&nbsp;</td>
		<td><?php echo h($place['Place']['created']); ?>&nbsp;</td>
		<td><?php echo h($place['Place']['users_id_modified']); ?>&nbsp;</td>
		<td><?php echo h($place['Place']['modified']); ?>&nbsp;</td>
		<td><?php echo h($place['Place']['disp_order']); ?>&nbsp;</td>
		<td><?php echo h($place['Place']['is_deleted']); ?>&nbsp;</td>
		<td><?php echo h($place['Place']['remarks']); ?>&nbsp;</td>
		<td><?php echo h($place['Place']['attribute_id']); ?>&nbsp;</td>
		<td><?php echo h($place['Place']['name']); ?>&nbsp;</td>
		<td><?php echo h($place['Place']['furigana']); ?>&nbsp;</td>
		<td><?php echo h($place['Place']['postal_code']); ?>&nbsp;</td>
		<td><?php echo h($place['Place']['prefecture_id']); ?>&nbsp;</td>
		<td><?php echo h($place['Place']['address']); ?>&nbsp;</td>
		<td><?php echo h($place['Place']['tel']); ?>&nbsp;</td>
		<td><?php echo h($place['Place']['fax']); ?>&nbsp;</td>
		<td><?php echo h($place['Place']['rep_name']); ?>&nbsp;</td>
		<td><?php echo h($place['Place']['staff_name']); ?>&nbsp;</td>
		<td><?php echo h($place['Place']['staff_postal_code']); ?>&nbsp;</td>
		<td><?php echo h($place['Place']['staff_tel']); ?>&nbsp;</td>
		<td><?php echo h($place['Place']['staff_ext_tel']); ?>&nbsp;</td>
		<td><?php echo h($place['Place']['staff_mobile']); ?>&nbsp;</td>
		<td><?php echo h($place['Place']['staff_fax']); ?>&nbsp;</td>
		<td><?php echo h($place['Place']['staff_email']); ?>&nbsp;</td>
		<td><?php echo h($place['Place']['text1']); ?>&nbsp;</td>
		<td><?php echo h($place['Place']['text2']); ?>&nbsp;</td>
		<td><?php echo h($place['Place']['text3']); ?>&nbsp;</td>
		<td><?php echo h($place['Place']['text4']); ?>&nbsp;</td>
		<td><?php echo h($place['Place']['text5']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $place['Place']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $place['Place']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $place['Place']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $place['Place']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Place'), array('action' => 'add')); ?></li>
	</ul>
</div>
