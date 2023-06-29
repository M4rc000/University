<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
      <div class="col-md-7">
      <?php if($this->session->flashdata('edit_material') != '') { ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        Your courses has been saved!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        <?php unset($_SESSION['edit_material']); ?>
      </div>
    <?php } ?>
      </div>
    </div>
    <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Courses Table</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
              <nav aria-label="Page navigation example">
                <ul class="pagination" style="font-size: 15px;">
                  <li class="page-item"><a class="page-link" href="http://localhost/2022/University/lectures/announcement/">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="http://localhost/2022/University/lectures/announcement/">Database System</a></li>
                  <li class="page-item"><a class="page-link" href="http://localhost/2022/University/lectures/announcement/10">Object Oriented Programming</a></li>
                  <li class="page-item"><a class="page-link" href="http://localhost/2022/University/lectures/announcement/20">Computer Career and Programming</a></li>
                  <li class="page-item"><a class="page-link" href="http://localhost/2022/University/lectures/announcement/30">Computer Network</a></li>
                  <li class="page-item"><a class="page-link" href="http://localhost/2022/University/lectures/announcement/40">Server Side Internet Programming</a></li>
                  <li class="page-item"><a class="page-link" href="http://localhost/2022/University/lectures/announcement/40">&raquo;</a></li>
                </ul>
              </nav>
                <table class="table table-bordered" id="" width="100%" cellspacing="0">
                  <thead>
                    <tr class="text-center">
                      <th>Week</th>
                      <th>Course</th>
                      <th>Material</th>
                      <th>Assignment</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <form action="" method="post">
                        <?php foreach($courses as $course): ?>
                        <tr class="text-center">
                            <td><?= $course['week']; ?></td>
                            <td><?= $course['course']; ?></td>
                            <td><?= $course['material']; ?></td>
                            <td><?= $course['assignment']; ?></td>
                            <td><a href="<?= base_url();?>lectures/edit_material/<?= $course['id']; ?>/"><i class="bi bi-bookmark-plus"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?= base_url();?>lectures/delete_material/<?= $course['id']; ?>/"><i class="bi bi-trash"></i></a></td>
                        </tr>
                        <?php endforeach; ?>
                    </form>
                  </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

    </div>
<!-- End of Main Content --> 

<!-- /.container-fluid -->

<!-- End of Main Content -->