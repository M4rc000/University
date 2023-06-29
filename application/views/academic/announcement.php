<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


    <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Announcements Table</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
              <ul class="pagination" style="font-size: 15px;">
                  <li class="page-item"><a class="page-link" href="http://localhost/2022/University/academic/announcement/">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="http://localhost/2022/University/academic/announcement/">Database System</a></li>
                  <li class="page-item"><a class="page-link" href="http://localhost/2022/University/academic/announcement/10">Object Oriented Programming</a></li>
                  <li class="page-item"><a class="page-link" href="http://localhost/2022/University/academic/announcement/20">Computer Career and Programming</a></li>
                  <li class="page-item"><a class="page-link" href="http://localhost/2022/University/academic/announcement/30">Computer Network</a></li>
                  <li class="page-item"><a class="page-link" href="http://localhost/2022/University/academic/announcement/40">Server Side Internet Programming</a></li>
                  <li class="page-item"><a class="page-link" href="http://localhost/2022/University/academic/announcement/40">&raquo;</a></li>
                </ul>
                <table class="table table-bordered" id="" width="100%" cellspacing="0">
                  <thead>
                    <tr class="text-center">
                      <td>Week</td>
                      <th>Course</th>
                      <th>Description</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach($courses as $announce) :?>
                    <tr>
                      <td class="text-center"><?= $announce['week']; ?></td>
                      <td class="text-center"><?= $announce['course']; ?></td>
                      <td><?= $announce['announcement']; ?></td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

<!-- End of Main Content --> 