<!DOCTYPE html>
<html><head>
    <title></title>
    <style>
    body {
    	width: 80%;
    	margin: auto;
    	text-align: center;
    }

    table {
		width: 100%;
		margin-top: 20px;
		border-collapse: collapse;
		text-align: left;
	}

	td {
		padding: 12px;
	}

	.line {
		border-bottom: 1px solid black;
	}

	table td {
		font-weight: bold;
		text-align: left;
	}

	span {
		margin-left: 20px;
	}

	.right {
		text-align: right;
	}

	</style>
</head><body>
	<h4>LAUNDRY</h4>
	<h1 class="line">Transaction Note</h1>

    <td class="right"><?php echo $data['transaction']->transaction_id ?></td>
    <td class="right"><?php echo $data['transaction']->name_employee ?></td>
    <td class="right"><?php echo $data['transaction']->tgl_order ?></td>
    <td class="right"><?php echo $data['transaction']->customername ?></td>
    <td class="right"><?php echo $data['transaction']->weight ?> KG</td>
    <td class="right">$ 3.85 Per KG</td>
    <td class="right"><b>$ <?php echo $data['transaction']->total ?></b></td>


	<p>Thank you for using our services. Looking forward to your next visit.</p>
	<script type="text/javascript">
		window.print();
	</script>
</body></html>