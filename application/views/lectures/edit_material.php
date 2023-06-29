<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-8">
            <form action="" method="post">
                <div class="form-group row" hidden>
                    <label for="id" class="col-sm-2 col-form-label">ID</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="id" name="id" value="<?= $announcements['id']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="week" class="col-sm-2 col-form-label">Week</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="week" name="week" value="<?= $announcements['week']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="course" class="col-sm-2 col-form-label">Course</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="course" name="course" value="<?= $announcements['course']; ?>">
                        <?= form_error('course', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="material" class="col-sm-2 col-form-label">Material</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="material" name="material" value="<?= $announcements['material']; ?>">
                        <?= form_error('material', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="assignment" class="col-sm-2 col-form-label">Assignment</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="assignment" name="assignment" value="<?= $announcements['assignment']; ?>">
                        <?= form_error('assignment', '<small class="text-danger pl-3">', '</small>'); ?>
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