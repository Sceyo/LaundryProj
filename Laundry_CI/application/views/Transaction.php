<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between">
            <h4 class="my-auto font-weight-bold text-primary">Transaction Data</h4>
            <a href="#" class="btn btn-success shadow-sm" data-toggle="modal" data-target="#addTransaction"><i
                class="fas fa-plus fa-sm text-white-500"></i> Add New Transaction</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="text-primary">
                            <th>#</th>
                            <th>Transc. ID</th>
                            <th>Customer</th>
                            <th>Employee</th>
                            <th>Weight</th>
                            <th>Total</th>
                            <th>Order</th>
                            <th>Finished</th>
                            <th class="actions">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no = 1;
                            foreach ($data_transaction as $transaction) {
                        ?>
                        <tr>
                            <th><?php echo $no++ ?></th>
                            <td>
                                <?php if ($transaction->tgl_finished == '0000-00-00') { ?>
                                    <span class="badge badge-danger">Not Finished Yet</span><br>
                                <?php } 
                                    echo $transaction->transaction_id;
                                ?>
                            </td>
                            <td>

                                <span class="row px-3 text-primary text-xs"><?php echo $transaction->customer_id ?></span>
                                <?php
                                // Fetch the customer name based on the customer_id
                                $customerName = ''; // Initialize with an empty string
                                foreach ($data_customer as $customer) {
                                    if ($customer->customer_id == $transaction->customer_id) {
                                    $customerName = $customer->customername;
                                    break; // Exit the loop once the matching customer is found
                                    }
                                }       
                                ?>
`                           <span class="row px-3"><?php echo $customerName ?></span>

                            </td>
                            <td>
                                <span class="row px-3 text-primary text-xs"><?php echo $transaction->employee_id ?></span>
                                <span class="row px-3"><?php echo $transaction->name_employee?></span>
                            </td>
                            <td><?php echo $transaction->weight ?> KG</td>
                            <td>$<?php echo $transaction->total ?></td>
                            <td><?php echo $transaction->tgl_order ?></td>
                            <td><?php if ($transaction->tgl_finished == '0000-00-00') { echo '-'; } else { echo $transaction->tgl_finished; } ?></td>
                            <td class="action-icons">
                                <?php if ($transaction->tgl_finished == '0000-00-00') { ?>
                                    <a target="_blank" href="<?php echo base_url('Transaction/print_receipt/' . $transaction->transaction_id) ?>" class="btn btn-sm rounded-lg btn-primary mb-2"> Receipt</a><br>
                                    <a href="<?php echo base_url().'Transaction/done/'.$transaction->transaction_id?>" class="btn btn-sm rounded-lg btn-success mb-2">Complete</a><br>
                                <?php } ?>
                                <a href="#" data-toggle="modal" data-target="#editTransaction<?php echo $no-1 ?>"> 
                                    <i title="edit" class="fas fa-edit text-lg text-info"></i>
                                </a>
                                <a href="<?php echo base_url().'transaction/delete/'.$transaction->transaction_id?>"> 
                                    <i title="delete" class="fas fa-trash text-lg text-danger"></i>
                                </a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

<!-- Modal for adding new data -->
<div class="modal fade" id="addTransaction" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="formAddTransaction" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title font-weight-bold text-primary mx-3 mt-3" id="formAddTransaksiLabel">Input Transaction Data</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form name="form_add_transaction" action="<?php echo base_url().'Transaction/add' ?>" method="post" class="user needs-validation mx-3 mb-4" novalidate>
                            <div class="modal-body"> 
                                <div class="form-group">
                                    <label class="control-label text-primary">Customer</label>
                                    <select class="form-control" name="customer_id" required>
                                        <option value="">--Please Select--</option>
                                        <?php
                                            foreach ($data_customer as $customer) {
                                        ?>
                                        <option value="<?php echo $customer->customer_id ?>">
                                            <?php echo $customer->customer_id.' '.$customer->customername ?>
                                        </option>
                                        <?php } ?>
                                    </select>
                                    <div class="invalid-feedback">
                                       Choose a customer identity!
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label text-primary">Employee</label>
                                    <select class="form-control" name="employee_id" required>
                                        <option value="">--Please Select--</option>
                                        <?php
                                            foreach ($data_employee as $employee) {
                                                if ($employee->actions == 1) {
                                        ?>
                                        <option value="<?php echo $employee->employee_id ?>">
                                            <?php echo $employee->employee_id.' '.$employee->name_employee ?>
                                        </option>
                                        <?php }} ?>
                                    </select>
                                    <div class="invalid-feedback">
                                        Choose employee identity!
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label text-primary">Weight (kg)</label>
                                    <input type="number"  class="form-control" placeholder='Laundry Weight' name="weight"  required>
                                    <div class="invalid-feedback">
                                        Fillup Laundry Weight!
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label text-primary">Order Date</label>
                                    <input type="date"  class="form-control" placeholder='Laundry Order Date' name="tgl_order" required>
                                    <div class="invalid-feedback">
                                        Fill in the date of the laundry order!
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label text-primary">Finished Date</label>
                                    <input type="date"  class="form-control" placeholder='Finished Date' name="tgl_finished">
                                </div>
                            </div>
                            <div class="modal-footer d-flex">
                                <button type="button" class="flex-fill btn btn-danger btn-user" data-dismiss="modal">Cancel</button>
                                <button type="submit" class="flex-fill btn btn-success btn-user">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

<!-- Modals for editing existing data -->
<?php
    $no = 1;
    foreach ($data_transaction as $transaction) {
?>
<div class="modal fade" id="editTransaction<?php echo $no ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="formEditTransaction" aria-hidden="true">
    <!-- Modal content for editing existing transaction data -->
    <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title font-weight-bold text-primary mx-3 mt-3" id="formEditTransactioniLabel">Edit Transaction Data</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form name="form_edit_matakuliah" action="<?php echo base_url().'Transaction/edit' ?>" method="post" class="user needs-validation mx-3 mb-4" novalidate>
                            <div class="modal-body"> 
                                <div class="form-group d-none">
                                    <label class="control-label text-primary">ID Transactions</label>
                                    <input type="text"  class="form-control" name="transaction_id" value="<?php echo $transaction->transaction_id ?>" required readonly>
                                </div>                                
                                <div class="form-group">
                                    <label class="control-label text-primary">Customer</label>
                                    <select class="form-control" name="customer_id" required>
                                        <option value="">--Please Select--</option>
                                        <?php
                                            foreach ($data_customer as $customer) {
                                        ?>
                                        <option value="<?php echo $customer->customer_id ?>" <?php if ($customer->customer_id === $transaction->customer_id) { echo "selected"; } ?>>
                                            <?php echo $customer->customer_id.' '.$customer->customername ?>
                                        </option>
                                        <?php } ?>
                                    </select>
                                    <div class="invalid-feedback">
                                       Choose a customer identity!
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label text-primary">Employee</label>
                                    <select class="form-control" name="employee_id" required>
                                        <option value="">--Please Select--</option>
                                        <?php
                                            foreach ($data_employee as $employee) {
                                                if ($employee->actions == 1) {
                                        ?>
                                        <option value="<?php echo $employee->employee_id ?>">
                                            <?php echo $employee->employee_id.' '.$employee->name_employee ?>
                                        </option>
                                        <?php }} ?>
                                    </select>
                                    <div class="invalid-feedback">
                                        Choose employee identity!
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label text-primary">Weight (kg)</label>
                                    <input type="number"  class="form-control" placeholder='Laundry Weight' name="weight" value="<?php echo $transaction->weight ?>" required>
                                    <div class="invalid-feedback">
                                        Fillup Laundry Weight!
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label text-primary">Order Date</label>
                                    <input type="date"  class="form-control" placeholder='Laundry Order Date' name="tgl_order" value="<?php echo $transaction->tgl_order ?>" required>
                                    <div class="invalid-feedback">
                                        Fill in the date of the laundry order!
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label text-primary">Finished Date</label>
                                    <input type="date"  class="form-control" placeholder='Finished Date' name="tgl_finished" value="<?php echo $transaction->tgl_finished ?>">
                                </div>
                            </div>
                            <div class="modal-footer d-flex">
                                <button type="button" class="flex-fill btn btn-danger btn-user" data-dismiss="modal">Cancel</button>
                                <button type="submit" class="flex-fill btn btn-success btn-user">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
<?php
    $no++;
    }
?>
