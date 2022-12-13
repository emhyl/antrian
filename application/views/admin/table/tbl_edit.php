<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Forms</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Basic Form Elements
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                              <form action="<?= base_url('admin/data_master/home/edit/'.$id) ?>" method="post">
                                <?= $input ?>
                                <br>
                                <button type="submit" name="btn-save" class="btn btn-light px-5"><i class="zmdi zmdi-square-down"></i> save</button>
                              </form>
                            </div>
                            <!-- /.col-lg-6 (nested) -->
                           
                        </div>
                        <!-- /.row (nested) -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->




<div class="content-wrapper">
    <div class="container-fluid">

    <div class="row mt-3">
      <div class="col-12">
         <div class="card">
           <div class="card-body">
           <div class="card-title">Vertical Form</div>
           <hr>
            <form action="<?= base_url('admin/data_master/home/edit/'.$id) ?>" method="post">
              <?= $input ?>
           <div class="form-group">
            
          </div>
          </form>
         </div>
         </div>
      </div>
    </div><!--End Row-->

	<!--start overlay-->
		  <div class="overlay toggle-menu"></div>
		<!--end overlay-->

    </div>
    <!-- End container-fluid-->
    
   </div><!--End content-wrapper-->