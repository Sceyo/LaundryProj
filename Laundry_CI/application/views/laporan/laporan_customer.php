                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex justify-content-between">
                            <h4 class="my-auto font-weight-bold text-primary">Customer Data Report</h4>
                        </div>
                        <div class="card-body">
                            <form name="form_filter_customer" action="<?php echo base_url().'customer/laporan_filter' ?>" method="post" class="w-50 user needs-validation mx-3 mb-4" novalidate>
                                <div class="form-group">
                                    <label class="control-label text-primary">Address</label>
                                    <select class="form-control" name="address" pattern="[A-Za-z]{1,10}" >
                                        <option value="All" <?php if(set_value('address') == 'All') { echo 'selected'; } ?>>All</option>
                                        <option value="Male" <?php if(set_value('address') == 'Male') { echo 'selected'; } ?>>Male</option>
                                        <option value="Female" <?php if(set_value('address') == 'Female') { echo 'selected'; } ?>>Female</option>
                                    </select>
                                </div>
                                <button type="submit" class="flex-fill btn btn-primary btn-user px-4">Search</button>
                            </form>

                            <div class="d-flex m-3">
                                <a target="blank" href="<?php echo base_url().'customer/print/'.set_value('address') ?>" class="btn btn-secondary shadow-sm"><i
                                class="fas fa-print fa-sm text-white-500"></i> Print</a>
                                <a target="blank" href="<?php echo base_url().'customer/pdf/'.set_value('address') ?>" class="btn btn-danger shadow-sm mx-2" ><i
                                class="fas fa-file fa-sm text-white-500" ></i> Print PDF</a>
                            </div>

                            <div class="table-responsive mt-3">
                                <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr class="text-primary">
                                            <th>No.</th>
                                            <th>ID</th>
                                            <th>Customer's name</th>
                                            <th>Address</th>
                                            <th>Contact</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $no = 1;
                                            foreach ($data_customer as $customer) {
                                        ?>
                                        <tr>
                                            <th><?php echo $no++ ?></th>
                                            <td><?php echo $customer->customer_id ?></td>
                                            <td><?php echo $customer->customername.' ' ?></td>
                                            <td><?php echo $customer->contact ?></td>
                                            <td><?php echo $customer->action ?></td>
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

            

            