<?php
$title= "Categories";
require "layout/header-datatable.php";


?>

 <!-- Main Content -->
 <main class="p-4">
       <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <i class="bi bi-list-task"></i>
                            <?= $title; ?>
                        </div>

                        <div class="card-body shadow-sm">

                            

                            <div class="table-responsive">
                                <a href="" class="btn btn-primary"><i class="bi bi-plus"></i>Create</a>
                                
                                <table id="datatable" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th width="1%">No</th>
                                            <th>Nama</th>
                                            <th>Slug</th>
                                            <th>Created At</th>
                                            <th width="15%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Action</td>
                                            <td>Action</td>
                                            <td>2011-04-25</td>
                                            <td class="text-center">
                                                <a href="http://" class="btn btn-sm btn-success mb-1" title="Edit">
                                                    <i class="bi bi-pen"></i>
                                                </a>

                                                <a href="http://" class="btn btn-sm btn-danger mb-1" title="Delete">
                                                    <i class="bi bi-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                     </tdbody>    
                                </table>
                            </div>
                        </div>

                        <div class="card-footer">
                            Footer
                        </div>
                    </div>
                </div>
            </div>
       </div>
    </main>

<?php
require "layout/footer-datatable.php";
?>