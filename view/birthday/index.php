<div class="container">
	<table border="1">
		<tr>
			<th>#</th>
			<th>person</th>
			<th>day</th>
			<th>month</th>
			<th>year</th>

		</tr>
		
		<?php foreach ($birthdays as $birthday) { ?>
		<tr>
			<td><?= $birthday['birthday_id']; ?></td>
			<td><?= $birthday['person']; ?></td>
			<td><?= $birthday['day']; ?></td>
			<td><?= $birthday['month']; ?></td>
			<td><?= $birthday['year']; ?></td>
			<td><a href="<?= URL ?>birthday/edit/<?= $birthday['birtday_id'] ?>">Edit</a></td>
			<td><a href="<?= URL ?>birthday/delete/<?= $birthday['birthday_id'] ?>">Delete</a></td>
		</tr>
		<?php } ?>

	</table>
	<a href="<?= URL ?>birthday/create">Toevoegen</a>
</div>