<!DOCTYPE html>
<html><head>
    <title></title>
    <style>
    body {
    	width: 90%;
    	margin: auto;
    }

    table {
		border: 1px solid #ddd;
		width: 100%;
		margin-top: 20px;
		margin-bottom: 12px;
		border-collapse: collapse;
		text-align: left;
	}

	td, th {
		border: 1px solid #ddd;
		padding: 12px;
	}

	table th {
		font-weight: bold;
		text-align: left;
	}

	span {
		margin-left: 20px;
	}

	.center {
		text-align: center;
	}

	#no {
		width: 30px;
	}

	</style>
</head><body>
	<h5>LAUNDRY</h5>
	<h1>Employee Data Report</h1>
	<?php 
		echo '<p>Active employees on time range</p>';
		echo '<p>From: '.$from.'<span>To: '.$to.'</span></p>';
	?>
    <table>
		<tr>
			<th class="center" id="no">#</th>
            <th class="center">ID</th>
            <th>Employee Name</th>
            <th>Gender</th>
            <th>Address</th>
            <th>Contact</th>
            <th>Salary/month</th>
            <th>Join</th>
            <th>End</th>
		</tr>
		<?php
            $no = 1;
            foreach ($data_employee as $employee){
        ?>
        <tr>
            <th class="center"><?php echo $no++ ?></th>
            <td class="center"><?php echo $employee->$employee_id ?></td>
			<td><?php echo $employee->name_employee ?></td>
			<td><?php echo $employee->gender ?></td>
			<td><?php echo $employee->address ?></td>
			<td><?php echo $employee->number ?></td>
			<td><?php echo $employee->salary ?></td>
            <td><?php echo $employee->joinDate ?></td>
            <td><?php if ($employee->endDate == '0000-00-00') { echo '-'; } else { echo $employee->endDate; } ?></td>
		</tr>
		<?php 
			}
		?>
	</table>
	<p>Note: Year-month-day time format (yyyy-mm-dd)</p>
</body></html>