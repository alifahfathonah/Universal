<!DOCTYPE html>
<html>
<?php
$page = "party_list";
include('head.php');
?>
<style>
  td{
    padding:2px 10px !important;
  }
</style>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <?php include('navbar.php'); ?>
  <!-- /.navbar -->
  <!-- Main Sidebar Container -->
  <?php include('sidebar.php'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12 mt-1">
            <h4>GOVT STAMPING REGISTER</h4>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card">
            <div class="card-header">
              <h3 class="card-title"><i class="fa fa-list"></i>Govt Stamping Register</h3>
              <div class="card-tools">
                <a href="<?php echo base_url() ?>Transaction/govt_stamp_bill" class="btn btn-sm btn-block btn-primary">Add Stamping bill</a>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sr. No.</th>
                  <th>Challan No </th>
                   <th>Challan Date</th>
                   <th>Party Name</th>
                   <th>Division / Camp </th>
                   <th>Total Amount</th>
                   <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                    $i=0;
                    foreach ($govt_stamp_list as $list) {
                    $i++;
                  ?>
                  <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $list->govt_stamp_no; ?></td>
                    <td><?php echo $list->govt_stamp_date; ?></td>
                    <td><?php echo $list->party_firm; ?></td>
                    <td><?php echo $list->division_name; ?></td>
                    <td><?php echo $list->govt_stamp_total; ?></td>
                    <td>
                      <a href="<?php echo base_url(); ?>Transaction/edit_govt_stamp/<?php echo $list->govt_stamp_id; ?>"> <i class="fa fa-edit"></i> </a>
                      <a class="ml-4" href="<?php echo base_url(); ?>Transaction/delete_govt_stamp/<?php echo $list->govt_stamp_id; ?>" onclick="return confirm('Delete Confirm');"> <i class="fa fa-trash"></i> </a>
                    </td>
                  </tr>
                <?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
  </div>
  <!-- /.content-wrapper -->
  <?php include('footer.php'); ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<?php include('script.php') ?>
</body>
</html>