<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between">
            <h4 class="my-auto font-weight-bold text-primary">Expenditure Data</h4>
            <div class="d-flex">
                <a href="<?php echo base_url()?>expenditure/pay_salary" class="mr-2 btn btn-warning shadow-sm">
                    <i class="fas fa-wallet fa-sm text-white-500"></i> Pay Employee Salaries
                </a>
                <a href="#" class="btn btn-success shadow-sm" data-toggle="modal" data-target="#addExpenditure">
                    <i class="fas fa-plus fa-sm text-white-500"></i> Add Expenditure
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="text-primary">
                            <th>#</th>
                            <th>Expenditure ID</th>
                            <th>Details</th>
                            <th>Total</th>
                            <th>Date</th>
                            <th>Employee</th>
                            <th class="actions">Action</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <?php
                            $no = 1;
                            foreach ($data_expenditure as $expenditure) {
                        ?>
                        <tr>
                            <th><?php echo $no++ ?></th>
                            <td><?php echo $expenditure->expenditure_id ?></td>
                            <td><?php echo $expenditure->detail ?></td>
                            <td>$<?php echo $expenditure->total ?></td>
                            <td><?php echo $expenditure->date ?></td>
                            <td>
                                <span class="row px-3 text-primary text-xs"><?php echo $expenditure->employee_id ?></span>
                                <span class="row px-3"><?php echo $expenditure->name_employee?></span>
                            </td>
                            <td class="action-icons">
                                <a href="#" data-toggle="modal" data-target="#editExpenditure<?php echo $no-1 ?>"> 
                                    <i title="edit" class="fas fa-edit text-lg text-info"></i>
                                </a>
                                <a href="<?php echo base_url().'expenditure/delete/'.$expenditure->expenditure_id?>"> 
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
<div class="modal fade" id="addExpenditure" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="formAddExpenditure" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title font-weight-bold text-primary mx-3 mt-3" id="formAddPengeluaranLabel">Expenditure Data Input</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form name="form_add_expenditure" action="<?php echo base_url().'expenditure/add' ?>" method="post" class="user needs-validation mx-3 mb-4" novalidate>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label class="control-label text-primary">Detail</label>
                                    <input type="text"  class="form-control" placeholder='Expenditure Details' name="detail"  required>
                                    <div class="invalid-feedback">
                                        Fill in the expense details!
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label text-primary">Total</label>
                                    <input type="number"  class="form-control" placeholder='Total Exp.' name="total"  required>
                                    <div class="invalid-feedback">
                                        Fill in the total expenses!
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label text-primary">Employee</label>
                                    <select class="form-control" name="employee_ID" required>
                                        <option value="">--Please Select--</option>
                                        <?php
                                    foreach ($data_employee as $employee) {
                                      if ($employee->actions == 1) {
                                            ?>
                                     <option value="<?php echo $employee->employee_id ?>">
                                      <?php echo $employee->employee_id.' '.$employee->name_employee?>
                                      </option>
                                    <?php }} ?>

                                    </select>
                                    <div class="invalid-feedback">
                                    Choose employee identity!
                                    </div>
                                </div>
 
                                <div class="form-group">
                                    <label class="control-label text-primary">Expenditure Date</label>
                                    <input type="date"  class="form-control" placeholder='Expenditure Date' name="date" required>
                                    <div class="invalid-feedback">
                                    Enter the exp. date!
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
</div>

<!-- Modal for editing existing data -->
<?php
    $no = 1;
    foreach ($data_expenditure as $expenditure) {
?>
<div class="modal fade" id="editExpenditure<?php echo $no ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="formEditExpenditure" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title font-weight-bold text-primary mx-3 mt-3" id="formEditPengeluaranLabel">Change Expenditure Data</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form name="form_edit_matakuliah" action="<?php echo base_url().'expenditure/edit' ?>" method="post" class="user needs-validation mx-3 mb-4" novalidate>
                            <div class="modal-body">                                 
                                <div class="form-group d-none">
                                    <label class="control-label text-primary">Expenditure ID</label>
                                    <input type="text"  class="form-control" name="employee_ID" value="<?php echo $expenditure->expenditure_id ?>" required readonly>
                                </div>
                                <div class="form-group">
                                    <label class="control-label text-primary">Detail</label>
                                    <input type="text"  class="form-control" placeholder='Expenditure Details' name="detail" value="<?php echo $expenditure->detail ?>" required>
                                    <div class="invalid-feedback">
                                        Fill in the expense details!
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label text-primary">Total</label>
                                    <input type="number"  class="form-control" placeholder='Total Exp.' name="total" value="<?php echo $expenditure->total ?>" required>
                                    <div class="invalid-feedback">
                                        Fill in the total expenses!
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
                                        <option value="<?php echo $employee->employee_id ?>" <?php if ($employee->employee_id === $expenditure->employee_id) { echo "selected"; } ?>>
                                            <?php echo $employee->employee_id.' '.$employee->name_employee ?>
                                        </option>
                                        <?php }} ?>
                                    </select>
                                    <div class="invalid-feedback">
                                    Choose employee identity!
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label text-primary">Expenditure Date</label>
                                    <input type="date"  class="form-control" placeholder='Expenditure Date' name="date" value="<?php echo $expenditure->date ?>" required>
                                    <div class="invalid-feedback">
                                    Enter the exp. date!
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
                $no++;
                }
            ?>