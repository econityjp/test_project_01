<div class="orgs index">
	<h2><?php echo __('Orgs'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('users_id_created'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('users_id_modified'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('disp_order'); ?></th>
			<th><?php echo $this->Paginator->sort('is_deleted'); ?></th>
			<th><?php echo $this->Paginator->sort('remarks'); ?></th>
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
			<th><?php echo $this->Paginator->sort('contract_code'); ?></th>
			<th><?php echo $this->Paginator->sort('accounting_code'); ?></th>
			<th><?php echo $this->Paginator->sort('contract_kind'); ?></th>
			<th><?php echo $this->Paginator->sort('payment_method'); ?></th>
			<th><?php echo $this->Paginator->sort('text1'); ?></th>
			<th><?php echo $this->Paginator->sort('text2'); ?></th>
			<th><?php echo $this->Paginator->sort('text3'); ?></th>
			<th><?php echo $this->Paginator->sort('text4'); ?></th>
			<th><?php echo $this->Paginator->sort('text5'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($orgs as $org): ?>
	<tr>
		<td><?php echo h($org['Org']['id']); ?>&nbsp;</td>
		<td><?php echo h($org['Org']['users_id_created']); ?>&nbsp;</td>
		<td><?php echo h($org['Org']['created']); ?>&nbsp;</td>
		<td><?php echo h($org['Org']['users_id_modified']); ?>&nbsp;</td>
		<td><?php echo h($org['Org']['modified']); ?>&nbsp;</td>
		<td><?php echo h($org['Org']['disp_order']); ?>&nbsp;</td>
		<td><?php echo h($org['Org']['is_deleted']); ?>&nbsp;</td>
		<td><?php echo h($org['Org']['remarks']); ?>&nbsp;</td>
		<td><?php echo h($org['Org']['name']); ?>&nbsp;</td>
		<td><?php echo h($org['Org']['furigana']); ?>&nbsp;</td>
		<td><?php echo h($org['Org']['postal_code']); ?>&nbsp;</td>
		<td><?php echo h($org['Org']['prefecture_id']); ?>&nbsp;</td>
		<td><?php echo h($org['Org']['address']); ?>&nbsp;</td>
		<td><?php echo h($org['Org']['tel']); ?>&nbsp;</td>
		<td><?php echo h($org['Org']['fax']); ?>&nbsp;</td>
		<td><?php echo h($org['Org']['rep_name']); ?>&nbsp;</td>
		<td><?php echo h($org['Org']['staff_name']); ?>&nbsp;</td>
		<td><?php echo h($org['Org']['staff_postal_code']); ?>&nbsp;</td>
		<td><?php echo h($org['Org']['staff_tel']); ?>&nbsp;</td>
		<td><?php echo h($org['Org']['staff_ext_tel']); ?>&nbsp;</td>
		<td><?php echo h($org['Org']['staff_mobile']); ?>&nbsp;</td>
		<td><?php echo h($org['Org']['staff_fax']); ?>&nbsp;</td>
		<td><?php echo h($org['Org']['staff_email']); ?>&nbsp;</td>
		<td><?php echo h($org['Org']['contract_code']); ?>&nbsp;</td>
		<td><?php echo h($org['Org']['accounting_code']); ?>&nbsp;</td>
		<td><?php echo h($org['Org']['contract_kind']); ?>&nbsp;</td>
		<td><?php echo h($org['Org']['payment_method']); ?>&nbsp;</td>
		<td><?php echo h($org['Org']['text1']); ?>&nbsp;</td>
		<td><?php echo h($org['Org']['text2']); ?>&nbsp;</td>
		<td><?php echo h($org['Org']['text3']); ?>&nbsp;</td>
		<td><?php echo h($org['Org']['text4']); ?>&nbsp;</td>
		<td><?php echo h($org['Org']['text5']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $org['Org']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $org['Org']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $org['Org']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $org['Org']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Org'), array('action' => 'add')); ?></li>
	</ul>
</div>
