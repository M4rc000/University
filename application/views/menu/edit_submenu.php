<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-8">
            <form action="" method="post">
            <div class="form-group row">
                <label for="id" class="col-sm-2 col-form-label">ID</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="id" name="id" value="<?= $menu['id']; ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="menuid" class="col-sm-2 col-form-label">Menu ID</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="menuid" name="menuid" value="<?= $menu['menu_id']; ?>" >
                    <?= form_error('menuid', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="title" class="col-sm-2 col-form-label">title</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="title" name="title" value="<?= $menu['title']; ?>" >
                    <?= form_error('title', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
                <div class="form-group row">
                    <label for="url" class="col-sm-2 col-form-label">Url</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="url" name="url" value="<?= $menu['url']; ?>" >
                        <?= form_error('url', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
            <div class="form-group row">
                <label for="icon" class="col-sm-2 col-form-label">Icon</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="icon" name="icon" value="<?= $menu['icon']; ?>" >
                    <?= form_error('icon', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group form-check row">
                <label class=" col-form-label" for="active">Active ?</label>
                <div class="col-sm-10">
                    <input type="checkbox" name="active" class="form-check-input" id="active" <?php if($menu['is_active'] == 1){
                        echo "checked";
                    }
                     ?> value="1">
                </div>
            </div>
            <div class="form-group row justify-content-end">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content --> 