<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <div class="row">
      <div class="col-md-5">
        <?php if($this->session->flashdata('edit_attendance') != '') { ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            Your attendance section has been saved!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            <?php unset($_SESSION['edit_attendance']); ?>
            </div>
        <?php } ?>
        <?php if($this->session->flashdata('edit_disabled') != '') { ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
            You already fill this section!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            <?php unset($_SESSION['edit_disabled']); ?>
            </div>
        <?php } ?>
      </div>
    </div>
    <div class="row">
        <div class="col-md-3 mb-3" style="margin-right: 2rem">
        <div class="card border-bottom-info shadow" style="width: 18rem; ; cursor: pointer;">
            <img src="<?= base_url('assets/img/DatabaseSystem.jpg');?>" class="card-img-top" title="Database System">
            <div class="card-body">
              <p class="card-text text-center text-primary"><strong>Database System</strong></p>
              <p>Week</p>
              <div class="row">
                <?php foreach($one as $on): ?>
                  <div class="col-md-2" style="">
                    <a href="<?= base_url(); ?>academic/editone/<?= $on['week']; ?>"><p><?= $on['week']; ?></p></a>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-3" style="margin-right: 2rem">
          <div class="card border-bottom-info shadow" style="width: 18rem; cursor: pointer;">
            <img src="<?= base_url('assets/img/cn.jpg');?>" class="card-img-top" title="Computer Network">
            <div class="card-body">
              <p class="card-text text-center text-primary"><strong>Computer Network</strong></p>
              <p>Week</p>
              <div class="row">
                <?php foreach($two as $on): ?>
                  <div class="col-md-2" style="">
                    <a href="<?= base_url(); ?>academic/edittwo/<?= $on['week']; ?>"><p><?= $on['week']; ?></p></a>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-3">
          <div class="card border-bottom-info shadow" style="width: 18rem; cursor: pointer;">
            <img src="<?= base_url('assets/img/ssp.jpeg');?>" class="card-img-top" title="Server Side Programming">
            <div class="card-body">
              <p class="card-text text-center text-primary"><strong>Server Side Programming</strong></p>
              <p>Week</p>
              <div class="row">
                <?php foreach($three as $on): ?>
                  <div class="col-md-2" style="">
                    <a href="<?= base_url(); ?>academic/editthree/<?= $on['week']; ?>"><p><?= $on['week']; ?></p></a>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
        </div>
      </a>
    </div>
    
    <div class="row">
        <div class="col-md-3 mb-3" style="margin-right: 2rem">
          <div class="card border-bottom-info shadow" style="width: 18rem; cursor: pointer;">
            <img src="<?= base_url('assets/img/ObjectOrientedProgramming.jpg');?>" class="card-img-top" title="Object Oriented Programming">
            <div class="card-body">
              <p class="card-text text-center text-primary"><strong>Object Oriented Programming</strong></p>
              <p>Week</p>
              <div class="row">
                <?php foreach($four as $on): ?>
                  <div class="col-md-2" style="">
                    <a href="<?= base_url(); ?>academic/editfour/<?= $on['week']; ?>"><p><?= $on['week']; ?></p></a>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3 mb-3">
          <div class="card border-bottom-info shadow" style="width: 18rem; cursor: pointer;">
            <img src="<?= base_url('assets/img/ccp.jpg');?>" class="card-img-top" title="Computer Career Programming">
            <div class="card-body">
              <p class="card-text text-center text-primary"><strong>Computer Career Programming</strong></p>
              <p>Week</p>
              <div class="row">
                <?php foreach($five as $on): ?>
                  <div class="col-md-2" style="">
                    <a href="<?= base_url(); ?>academic/editfive/<?= $on['week']; ?>"><p><?= $on['week']; ?></p></a>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

<!-- End of Main Content --> 