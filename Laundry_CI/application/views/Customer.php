<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between">
            <h4 class="my-auto font-weight-bold text-primary">Customer Data</h4>
            <a href="#" class="btn btn-success shadow-sm" data-toggle="modal" data-target="#addCustomer"><i
                    class="fas fa-plus fa-sm text-white-500"></i> Add Customers</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="text-primary">
                            <th>#</th>
                            <th>ID</th>
                            <th>Customer's Name<sup>(M/F)</sup></th>
                            <th>Address</th>
                            <th>Contact</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $no = 1;
                        $code = '';
                        $customerCount = count($data_customer);
                        if ($customerCount == 0) {
                            $code = 'C000';
                        } else {
                            $lastId = (int) substr($data_customer[$customerCount - 1]->customer_id, 3, 1);
                            $code = 'C00' . ($lastId + 2);
                        }
                        foreach ($data_customer as $customer) {
                        ?>
                            <tr>
                                <th><?php echo $no++ ?></th>
                                <td><?php echo $customer->customer_id ?></td>
                                <td><?php echo $customer->customername . ' ' ?><sup>(<?php echo substr($customer->address, 0, 1) ?>)</sup></td>
                                <td><?php echo $customer->contact ?></td>
                                <td><?php echo $customer->action ?></td>
                                <td class="action-icons">
                                    <a href="#" data-toggle="modal" data-target="#editCustomer<?php echo $customer->customer_id ?>">
                                        <i title="edit" class="fas fa-edit text-lg text-info"></i>
                                    </a>
                                    <a href="<?php echo base_url() . 'customer/delete/' . $customer->customer_id ?>">
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
</div>
<!-- End of Main Content -->

<!-- Modal for adding new data -->
<div class="modal fade" id="addCustomer" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="formAddCustomer" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-weight-bold text-primary mx-3 mt-3" id="formAddCustomerLabel">Customer Data Input</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form name="form_add_customer" action="<?php echo base_url() . 'customer/add' ?>" method="post" class="user needs-validation mx-3 mb-4" novalidate>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="control-label text-primary">ID</label>
                        <input type="text" class="form-control" placeholder="Customer ID" autofocus name="customer_id" required readonly value="<?php echo $code ?>">
                    </div>
                    <div class="form-group">
                        <label class="control-label text-primary">Customer's Name</label>
                        <input type="text" class="form-control" title="Fill in the customer's name with letters" placeholder='Customers Name' name="customername" pattern="[A-Za-z ]{1,50}" required>
                        <div class="invalid-feedback">
                            Fill in the customer's name with letters! (max. 50 letters)
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label text-primary">Gender</label>
                        <select class="form-control" name="address" pattern="[A-Za-z]{1,10}" required>
                            <option value="">--Please Select--</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                        <div class="invalid-feedback">
                            Choose the gender of the customer!
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label text-primary">Address</label>
                        <input type="text" class="form-control" placeholder='Address' name="contact" required>
                        <div class="invalid-feedback">
                            Enter the customer's address!
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label text-primary">Mobile No.</label>
                        <input type="tel" class="form-control" placeholder='Customer Mobile Number' name="action" pattern="[0-9]{11,15}" required>
                        <div class="invalid-feedback">
                            Fill in No. Customer phone!
                        </div>
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

<!-- Modal for editing existing data -->
<?php
foreach ($data_customer as $customer) {
?>
    <div class="modal fade" id="editCustomer<?php echo $customer->customer_id ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="formEditCustomer" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title font-weight-bold text-primary mx-3 mt-3" id="formEditCustomerLabel">Change Customer Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form name="form_edit_customer" action="<?php echo base_url() . 'customer/edit' ?>" method="post" class="user needs-validation mx-3 mb-4" novalidate>
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="control-label text-primary">ID</label>
                            <input type="text" class="form-control" placeholder="Customer ID" autofocus name="customer_id" value="<?php echo $customer->customer_id ?>" readonly>
                        </div>
                        <hr>

                        <div class="form-group">
                            <label class="control-label text-primary">Customer's Name</label>
                            <input type="text" class="form-control" title="Fill in the customer's name with letters" placeholder='Customers Name' name="customername" pattern="[A-Za-z ]{1,50}" value="<?php echo $customer->customername ?>" required>
                            <div class="invalid-feedback">
                                Fill in the customer's name with letters! (max. 50 letters)
                            </div>
                        </div>
                        <hr>

                        <div class="form-group">
                            <label class="control-label text-primary">Gender</label>
                            <select class="form-control" name="jeniskelamin" pattern="[A-Za-z]{1,10}" required>
                                <option value="">--Please Select--</option>
                                <option value="Male" <?php if ($customer->address === 'Male') {
                                                        echo "selected";
                                                    } ?>>Male</option>
                                <option value="Female" <?php if ($customer->address === 'Female') {
                                                            echo "selected";
                                                        } ?>>Female</option>
                            </select>
                            <div class="invalid-feedback">
                                Choose the gender of the customer!
                            </div>
                        </div>
                        <hr>

                        <div class="form-group">
                            <label class="control-label text-primary">Address</label>
                            <input type="text" class="form-control" placeholder='Address' name="contact" value="<?php echo $customer->contact ?>" required>
                            <div class="invalid-feedback">
                                Enter the customer's address!
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label text-primary">Mobile No.</label>
                            <input type="tel" class="form-control" placeholder='Mobile No.' name="action" pattern="[0-9]{11,15}" value="<?php echo $customer->action ?>" required>
                            <div class="invalid-feedback">
                                Fill in No. Customer phone!
                            </div>
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
}
?>
