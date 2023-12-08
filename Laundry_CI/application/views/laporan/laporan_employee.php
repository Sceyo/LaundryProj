                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex justify-content-between">
                            <h4 class="my-auto font-weight-bold text-primary">Employee Data Report</h4>
                        </div>
                        <div class="card-body">
                            <form name="form_filter_employee" action="<?php echo base_url().'employee/laporan_filter' ?>" method="post" class="w-50 user needs-validation mx-3 mb-4" novalidate>
                                <h5>Active on time range</h5>
                                <div class="form-group">
                                    <label class="control-label text-primary">From</label>
                                    <input type="date"  class="form-control" name="from" value="<?php echo set_value('from')?>" required>
                                </div>
                                <div class="form-group">
                                    <label class="control-label text-primary">To</label>
                                    <input type="date"  class="form-control" name="to" value="<?php echo set_value('to')?>" required>
                                </div>
                                <button type="submit" class="flex-fill btn btn-primary btn-user px-4">Search</button>
                            </form>

                            <div class="d-flex m-3">
                                <a target="blank" href="<?php echo base_url().'employee/print/'.set_value('from').'/'.set_value('to') ?>" class="btn btn-secondary shadow-sm"><i
                                class="fas fa-print fa-sm text-white-500"></i> Print</a>
                                <a target="blank" href="<?php echo base_url().'employee/pdf/'.set_value('from').'/'.set_value('to') ?>" class="btn btn-danger shadow-sm mx-2" ><i
                                class="fas fa-file fa-sm text-white-500" ></i> Print PDF</a>
                            </div>

                            <div class="table-responsive mt-3">
                                <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr class="text-primary">
                                            <th>No.</th>
                                            <th>ID</th>
                                            <th>Employee Name</th>
                                            <th>Address</th>
                                            <th>Contact</th>
                                            <th>Salary/month</th>
                                            <th>Join</th>
                                            <th>End</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $no = 1;
                                            foreach ($data_employee as $employee) {
                                        ?>
                                        <tr>
                                        <th><?php echo $no++ ?></th>
                                        <td><?php echo $employee->employee_id ?></td>
                                        <td><?php echo $employee->name_employee.' ' ?><sup>(<?php echo substr($employee->gender, 0, 1) ?>)</sup></td>
                                        <td><?php echo $employee->address ?></td>
                                        <td><?php echo $employee->number ?></td>
                                        <td><?php echo $employee->salary ?></td>
                                        <td><?php echo $employee->joinDate ?></td>
                                        <td><?php if ($employee->endDate == '0000-00-00') { echo '-'; } else { echo $employee->endDate; } ?></td>
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

            

            