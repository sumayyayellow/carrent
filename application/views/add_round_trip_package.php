<!DOCTYPE html>
<html>
   <?php
      include"includes/admin_header.php";
      ?>
   <body class="hold-transition skin-blue sidebar-mini">
      <div class="wrapper">
         <!-- Left side column. contains the logo and sidebar -->
         <?php
            include"includes/admin_sidebar.php";
            ?>
         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <h1 class="add_promocode">
                  Add Round Trip Package
               </h1>
               <ol class="breadcrumb">
                  <li><a href="<?php echo base_url();?>admin/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
                  <li><a href="#">PM</a></li>
                  <li class="active">Add New</li>
               </ol>
            </section>
            <!-- Main content -->
            <div class="">
               <div class="">
                  <div class="col-lg-6">
                     <div class="box box-primary edit_promoform1">
                        <div class="box-header with-border">
                           <h3 class="box-title"></h3>
                           <div class="promo-add"></div>
                        </div>
                        <!-- /.box-header -->

                         <?php
if(($this->session->flashdata('message'))) {
  $message = $this->session->flashdata('message');
  ?>
<div id="mess" class="<?php echo $message['class'];?>"><?php echo $message['message']; ?></div>
<?php
}else{
}
 
?>                      
                        <!-- form start -->
                        <form role="form"  method="post" action="<?php echo base_url('admin/outstation_add_package');?>">
                           <div class="box-body">
                              <div class="form-group">
                                 <label>Package</label>
                                 <select class="form-control regcom select2"  style="width: 100%;" name="package" required>
                                    <option value="">select</option>
                                    <?php 
                                    foreach ($package as $car) {
                                     ?> 
                                    <option value="<?php echo $car->id;?>"><?php echo $car->package;?></option>
                                    <?php }?>
                                 </select>
                              </div>
                              <div class="form-group">
                                 <label>Car Type</label>
                                 <select class="form-control regcom select2"  style="width: 100%;"name="cartype" required>
                                    <option value="">select</option>
                                    <?php 
                                      $query2 = $this->db->query("SELECT DISTINCT`car_type` FROM car_categories where status='Active'");
                                                    foreach($query2->result_array('countries') as $row1){
                                    // foreach ($fetch_car as $car) {
                                    // foreach ($allcar as $car) {
                                     ?> 
                                      <option value="<?php echo $row1['car_type'];?>"><?php echo $row1['car_type'];?></option>
                                    
                                    <?php }?>
                                 </select>
                              </div>
                              <div class="form-group">
                                 <label>Rate(/ day)</label>
                                 <input type="number" class="form-control regcom" placeholder="Rate"  name="standardrate" required>
                              </div>
                              <div class="form-group">
                                 <input type="submit" class="btn btn-primary " value="Submit "  >
                                 
                              </div>
                           </div>
                          </form> 
                     </div>
                  </div>
                  <!-- /.box -->
                 <!--  <div class="col-lg-6">
                  <div class="box box-primary edit_promoform">
                  <div class="box-header with-border">
                  <h3 class="box-title"></h3>
                  </div>
                 
                  </form>
                  </div>
                  </div> -->
                  <!-- /.panel -->
               </div>
            </div>
         </div>
         <!-- /.content-wrapper -->
         <?php
            include"includes/admin-footer.php";
            ?>
      </div>
      <!-- ./wrapper -->
      <!-- jQuery 2.1.4 -->
      <script src="<?php echo base_url();?>assets/adminlte/plugins/jQuery/jQuery-2.1.4.min.js"></script>
      <!-- Bootstrap 3.3.5 -->
      <script src="<?php echo base_url();?>assets/adminlte/bootstrap/js/bootstrap.min.js"></script>
      <!-- DataTables -->
      <script src="<?php echo base_url();?>assets/adminlte/plugins/datatables/dataTables.bootstrap.min.js"></script>
      <!-- SlimScroll -->
      <script src="<?php echo base_url();?>assets/adminlte/plugins/slimScroll/jquery.slimscroll.min.js"></script>
      <!-- FastClick -->
      <script src="<?php echo base_url();?>assets/adminlte/plugins/fastclick/fastclick.min.js"></script>
      <!-- AdminLTE App -->
      <script src="<?php echo base_url();?>assets/adminlte/dist/js/app.min.js"></script>
      <!-- AdminLTE for demo purposes -->
      <script src="<?php echo base_url();?>assets/adminlte/dist/js/demo.js"></script>
      <!-- page script -->
      <script src="<?php echo base_url();?>assets/adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
      <script src="<?php echo base_url();?>assets/adminlte/plugins/select2/select2.full.min.js"></script>
      <!-- page script -->
      <script>
         $(function () {
           $("#example1").DataTable();
           $('#example2').DataTable({
             "paging": true,
             "lengthChange": false,
             "searching": false,
             "ordering": true,
             "info": true,
             "autoWidth": false
           });
         $(".select2").select2();
         });
      </script>
      <link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery.datetimepicker.css"/>
      <script src="<?php echo base_url();?>assets/js/jquery.datetimepicker.js"></script>
      <script src="<?php echo base_url();?>assets/js/jquery-ui.js"></script>
      <script type="text/javascript">
         $(document).ready(function(){
         $( ".datepicker" ).datetimepicker({ minDate:0});
        
      
         });
         
      </script>
   </body>
</html>