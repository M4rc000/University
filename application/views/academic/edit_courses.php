<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-8">
            <form action="" method="post">
                <div class="form-group row" hidden>
                    <label for="id" class="col-sm-2 col-form-label">ID</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="id" name="id" value="<?= $courses['id']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="week" class="col-sm-2 col-form-label">Week</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="week" name="week" value="<?= $courses['week']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="course" class="col-sm-2 col-form-label">Course</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="course" name="course" value="<?= $courses['course']; ?>">
                        <?= form_error('course', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="assingment" class="col-sm-2 col-form-label">Assignment</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="assingment" name="assingment" value="<?= $courses['assignment']; ?>">
                        <?= form_error('assingment', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="submit_assignment" class="col-sm-2 col-form-label">Answer</label>
                    <div class="col-sm-10">
                        <textarea  class="form-control" id="submit_assignment" name="submit_assignment"><?= $courses['submit_assignment']; ?></textarea>
                        <?= form_error('submit_assignment', '<small class="text-danger pl-3">', '</small>'); ?>
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