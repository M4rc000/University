<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h5 class="m-0 mb-2 font-weight-bold text-primary">Grade Point Average Table</h5>
              <h6 class="m-0 font-weight-bold text-danger">Point Present</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="" width="100%" cellspacing="0">
                  <thead>
                    <tr class="text-center">
                      <th>Week</th>
                      <th>Course</th>
                      <th>Point</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $tds = 0;  ?>
                    <?php foreach($ds as $on): ?>
                      <?php $tds+=$on['score'];  ?>
                      <tr>
                        <td class="text-center"><?= $on['week']; ?></td>
                        <td class="text-center"><?= $on['course']; ?></td>
                        <td class="text-center"><?= $on['score']; ?></td>
                      </tr>
                      <?php endforeach; ?>
                      <tr>
                        <td colspan="2">Total Score</td>
                        <td class="text-center"><?= $tds;?></td>
                      </tr>
                  </tbody>
                </table>
            </div>
        </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="" width="100%" cellspacing="0">
                  <thead>
                    <tr class="text-center">
                      <th>Week</th>
                      <th>Course</th>
                      <th>Point</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $toop = 0;  ?>
                    <?php foreach($oop as $on): ?>
                      <?php $toop+=$on['score'];  ?>
                      <tr>
                        <td class="text-center"><?= $on['week']; ?></td>
                      <td class="text-center"><?= $on['course']; ?></td>
                      <td class="text-center"><?= $on['score']; ?></td>
                    </tr>
                    <?php endforeach; ?>
                    <tr>
                      <td colspan="2">Total Score</td>
                      <td class="text-center"><?= $toop;?></td>
                    </tr>
                  </tbody>
                </table>
            </div>
        </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="" width="100%" cellspacing="0">
                  <thead>
                    <tr class="text-center">
                      <th>Week</th>
                      <th>Course</th>
                      <th>Point</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $tccp = 0;  ?>
                    <?php foreach($ccp as $on): ?>
                      <?php $tccp+=$on['score'];  ?>
                      <tr>
                      <td class="text-center"><?= $on['week']; ?></td>
                      <td class="text-center"><?= $on['course']; ?></td>
                      <td class="text-center"><?= $on['score']; ?></td>
                    </tr>
                    <?php endforeach; ?>
                    <tr>
                      <td colspan="2">Total Score</td>
                      <td class="text-center"><?= $tccp;?></td>
                    </tr>
                  </tbody>
                </table>
              </div>
        </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="" width="100%" cellspacing="0">
                  <thead>
                    <tr class="text-center">
                      <th>Week</th>
                      <th>Course</th>
                      <th>Point</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $tcn = 0;  ?>
                    <?php foreach($cn as $on): ?>
                      <?php $tcn+=$on['score'];  ?>
                      <tr>
                        <td class="text-center"><?= $on['week']; ?></td>
                        <td class="text-center"><?= $on['course']; ?></td>
                        <td class="text-center"><?= $on['score']; ?></td>
                      </tr>
                      <?php endforeach; ?>
                      <tr>
                        <td colspan="2">Total Score</td>
                        <td class="text-center"><?= $tcn;?></td>
                      </tr>
                    </tbody>
                  </table>
            </div>
        </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="" width="100%" cellspacing="0">
                  <thead>
                    <tr class="text-center">
                      <th>Week</th>
                      <th>Course</th>
                      <th>Point</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $tssip = 0;  ?>
                    <?php foreach($ssip as $on): ?>
                    <?php $tssip+=$on['score'];  ?>
                    <tr>
                      <td class="text-center"><?= $on['week']; ?></td>
                      <td class="text-center"><?= $on['course']; ?></td>
                      <td class="text-center"><?= $on['score']; ?></td>
                    </tr>
                    <?php endforeach; ?>
                    <tr>
                      <td colspan="2">Total Score</td>
                      <td class="text-center"><?= $tssip;?></td>
                    </tr>
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