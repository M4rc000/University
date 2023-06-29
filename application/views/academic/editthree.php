<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-md-5">
            <?php if($attendances['week'] == NULL){
                $this->session->set_flashdata('edit_disabled','<div class="alert alert-warning alert-dismissible fade show" role="alert">
                You already fill this section!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
                redirect('academic/attendance');
            } ?>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8">
            <form action="" method="post">
                <div class="form-group row" hidden>
                    <label for="id" class="col-sm-2 col-form-label">ID</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="id" name="id" value="<?= $attendances['id']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="week" class="col-sm-2 col-form-label">Week</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="week" name="week" value="<?= $attendances['week']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="course" class="col-sm-2 col-form-label">Course</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="course" name="course" value="<?= $attendances['course']; ?>" readonly>
                        <?= form_error('course', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="text" class="col-sm-2 col-form-label">Date</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"  id="date" name="date" value="<?= $attendances['date']; ?>"readonly>
                        <?= form_error('date', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="action" class="col-sm-2 col-form-label">Action</label>
                    <div class="col-sm-10">
                        <input type="number" max="1" min="0" class="form-control" id="action" name="action" value="<?=$attendances['score'];?>">
                        <?= form_error('action', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row" hidden>
                    <label for="actions" class="col-sm-2 col-form-label">Actions</label>
                    <div class="col-sm-10">
                        <input type="number" max="1" min="0" class="form-control" id="actions" name="actions" value="1">
                        <?= form_error('actions', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <h4 style=""><b>Notes</b></h4>
                        <p>0 => Not Present</p>
                        <p>1 => Present</p>
                    </div>
                </div>
                <div class="form-group row justify-content-end">
                    <div class="col-sm-10">
                        <button type="submit" name="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>