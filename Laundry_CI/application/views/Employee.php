<!-- Begin Page Content -->

<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between">
            <h4 class="my-auto font-weight-bold text-primary">Employee Data</h4>
            <a href="#" class="btn btn-success shadow-sm" data-toggle="modal" data-target="#addEmployee"><i
                    class="fas fa-plus fa-sm text-white-500"></i> Add Employees</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="text-primary">
                            <th>#</th>
                            <th>ID</th>
                            <th>Employee <sup>(M/F)</sup></th>
                            <th>Address</th>
                            <th>Contact</th>
                            <th>Salary</th>
                            <th>Join Date</th>
                            <th>End Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $code = '';
                        $n_employees = count($data_employee);
                        if ($n_employees == 0) {
                            $code = 'E001';
                        } else {
                            $last_id = (int) substr($data_employee[$n_employees-1]->employee_id, 3);
                            $code = 'E' . str_pad($last_id + 1, 3, '0', STR_PAD_LEFT);
                        }
                        foreach ($data_employee as $employee) {
                            ?>
                            <tr>
                                <th><?php echo $no++ ?></th>
                                <td><?php echo $employee->employee_id ?></td>
                                <td><?php echo $employee->name_employee . ' ' ?><sup>(<?php echo substr($employee->gender, 0, 1) ?>)</sup><br>
                                    <?php if ($employee->actions == 1) { ?>
                                        <span class="badge badge-success">Active</span>
                                    <?php } else if ($employee->actions == 2) { ?>
                                        <span class="badge badge-info">Business Owner</span>
                                    <?php } ?>
                                </td>
                                <td><?php echo $employee->address ?></td>
                                <td><?php echo $employee->number ?></td>
                                <td><?php echo '$' . $employee->salary ?></td>
                                <td><?php echo $employee->joinDate ?></td>
                                <td><?php echo $employee->endDate == '0000-00-00' ? '----' : $employee->endDate ?></td>
                                <td class="action-icons">
                                    <a href="#" data-toggle="modal" data-target="#editEmployee<?php echo $employee->employee_id ?>">
                                        <i title="edit" class="fas fa-edit text-lg text-info"></i>
                                    </a>
                                    <a href="<?php echo base_url().'employee/delete/'.$employee->employee_id ?>">
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
<div class="modal fade" id="addEmployee" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="formAddEmployee" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-weight-bold text-primary mx-3 mt-3" id="formAddEmployeeLabel">Input Employee data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form name="form_add_employee" action="<?php echo base_url().'employee/add' ?>" method="post" class="user needs-validation mx-3 mb-4" novalidate>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="control-label text-primary">ID</label>
                        <input type="text" class="form-control" placeholder="ID Employee" autofocus name="employee_id" required readonly
                            value="<?php echo $code; ?>">
                    </div>
                    <div class="form-group">
                                    <label class="control-label text-primary">Employee Name</label>
                                    <input type="text" class="form-control" title="Fill in the Employee Name with Letters" placeholder='Employee Full Name'  name="name" pattern="[A-Za-z ]{1,50}" required>
                                    <div class="invalid-feedback">
                                    Fill in the name of the employee with letters! (max. 50 letters)
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label text-primary">Gender</label>
                                    <select class="form-control" name="gender" pattern="[A-Za-z]{1,10}" required>
                                        <option value="">--Please Select--</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                    <div class="invalid-feedback">
                                    Choose the gender of the employee!
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label text-primary">Address</label>
                                    <input type="text"  class="form-control" placeholder='Employee Address' name="address"  required>
                                    <div class="invalid-feedback">
                                    Fill in the employee's address!
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label text-primary">Mobile Number</label>
                                    <input type="tel"  class="form-control" placeholder='Employee Mobile Number' name="number"  pattern="[0-9]{11,15}" required>
                                    <div class="invalid-feedback">
                                        Fill in No. Employee cell phone!
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label text-primary">Salary per month</label>
                                    <input type="number"  class="form-control" placeholder='Employee Salary per month' name="salary"  required>
                                    <div class="invalid-feedback">
                                    Fill in the employee's monthly salary!
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label text-primary">Join Date</label>
                                    <input type="date"  class="form-control" placeholder='Employee Joining Date' name="joinDate" required>
                                    <div class="invalid-feedback">
                                    Fill in the date of joining the employee!
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label text-primary">Stop Date</label>
                                    <input type="date"  class="form-control" placeholder='Employee ending date' name="endDate">
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
foreach ($data_employee as $employee) {
    ?>
    <div class="modal fade" id="editEmployee<?php echo $employee->employee_id ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="formEditEmployee" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title font-weight-bold text-primary mx-3 mt-3" id="formEditEmployeeLabel">Change Employee data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form name="form_edit_employee" action="<?php echo base_url().'employee/edit' ?>" method="post" class="user needs-validation mx-3 mb-4" novalidate>
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="control-label text-primary">ID</label>
                            <input type="text" class="form-control" placeholder="Emp ID" autofocus name="employee_id" value="<?php echo $employee->employee_id ?>" readonly>
                        </div>
                        
                        <div class="form-group">
                                    <label class="control-label text-primary">Employee Name</label>
                                    <input type="text" class="form-control" title="Fill in the Employee Name with Letters" placeholder='Employee Name'  name="name" pattern="[A-Za-z ]{1,50}" value="<?php echo $employee->name_employee ?>" required>
                                    <div class="invalid-feedback">
                                    Fill in the name of the employee with letters! (max. 50 letters)
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label text-primary">Gender</label>
                                    <select class="form-control" name="gender" pattern="[A-Za-z]{1,10}" required>
                                        <option value="">--Please Select--</option>
                                        <option value="Male" <?php if ($employee->gender === 'Male') { echo "selected"; } ?>>Male</option>
                                        <option value="Female" <?php if ($employee->gender === 'Female') { echo "selected"; } ?>>Female</option>
                                    </select>
                                    <div class="invalid-feedback">
                                    Choose the gender of the employee!
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label text-primary">Address</label>
                                    <input type="text"  class="form-control" placeholder='Employee Address' name="address"  value="<?php echo $employee->address ?>" required>
                                    <div class="invalid-feedback">
                                    Fill in the employee's address!
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label text-primary">Mobile Number</label>
                                    <input type="tel"  class="form-control" placeholder='Employees Mobile Number' name="number" pattern="[0-9]{11,15}" value="<?php echo $employee->number ?>" required>
                                    <div class="invalid-feedback">
                                    Fill in No. Employee cell phone!
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label text-primary">Salary per month</label>
                                    <input type="number"  class="form-control" placeholder='Employee Salary per month' name="salary" value="<?php echo $employee->salary ?>" required>
                                    <div class="invalid-feedback">
                                    Fill in the employee's monthly salary!
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label text-primary">Join Date</label>
                                    <input type="date"  class="form-control" placeholder='Join Date Employees' name="joinDate" value="<?php echo $employee->joinDate ?>" required>
                                    <div class="invalid-feedback">
                                    Fill in the date of joining the employee!
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label text-primary">End Date</label>
                                    <input type="date"  class="form-control" placeholder='Employee Stop Date' name="endDate" value="<?php echo $employee->endDate ?>">
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