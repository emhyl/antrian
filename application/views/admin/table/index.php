
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Data Master</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
                                     + Tambah Data
                                   </button>
                                </div>
                                <?= $this->session->flashdata('sukses_edit') ?>
                                <?= $this->session->flashdata('sukses_delete') ?>
                                <?= $this->session->flashdata('sukses_add') ?>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th scope="col">NO</th>
                                                    <?php foreach($table_field as $rowField ){?>
                                                      <th scope="col"><?= $rowField ?></th>
                                                    <?php }?>
                                                      <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                               <?php foreach($table as $key => $rowTbl){?>
                                                 <tr>
                                                   <th scope="row"><?= ++$key ?></th>
                                                   <?php foreach($table_field as $subField ){?>
                                                     <td><?= $rowTbl[$subField] ?></td>
                                                   <?php }?>
                                                     <td>
                                                       <a href="<?= base_url('admin/data_master/delete/'.$rowTbl['id']) ?>" class="badge bg-danger"><i class="zmdi zmdi-block-alt"> hapus</i></a> / 
                                                       <a href="<?= base_url('admin/data_master/edit/'.$rowTbl['id']) ?>" class="badge bg-info"><i class="zmdi zmdi-brush"> edit</i></a>
                                                     </td>
                                                 </tr>
                                               <?php }?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->

                                    <!-- Button trigger modal -->
                                 

                                    <!-- Modal -->
                                    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                      <div class="modal-dialog">
                                        <div class="modal-content">
                                            <form action="<?= base_url('admin/data_master/add') ?>" method="post">
                                              <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Tambah data</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                                </button>
                                              </div>
                                              <div class="modal-body">
                                                <?= $table_input ?>
                                              </div>
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" name="btn-add" class="btn btn-primary">Tambah</button>
                                              </div>
                                            </form>
                                        </div>
                                      </div>
                                    </div>



                                    <div class="well">
                                        <h4 class="text-warning">Peringatan!</h4>
                                        <p>Mengubah atau menghapus data dapat mempengaruhi data yang lain! .</p>

                                    </div>
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