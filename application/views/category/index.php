<?php
//Loading header
$data['title'] = 'Login';
$data['javascript'] = 'app.js';
$this->load->view('section/admin/header', $data);
?>



      <div class="content">
                <div class="container">
                    <div class="page-title">
                        <h3>Categories</h3>
                    </div>
                    <div class="row">
                    		 <div class="col-md-12 col-lg-12">
                            <div class="card">
                                <div class="card-header"><a href="<?php echo base_url() ?>category/create" class="btn btn-square btn-primary mb-2"> + Create Category </a></div>
                                <div class="card-body">
                                    <p class="card-title"></p>
                                    <table class="table table-hover" id="dataTables-example" width="100%">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Title</th>
                                                <th>Image</th>
                                                <th>Status</th>
                                               
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        <?php foreach($categories as $category):?>
                                            <tr>
                                                <td><?php echo $category->catId ?></td>
                                                <td><?php echo $category->title ?></td>
                                                <td><img src="<?php echo base_url() ?>assets/uploads/files/<?php echo $category->icon ?>" width="100px"> </td>
                                                <td><?php echo $category->status?></td>
                                                
                                                   <td><a href="<?php base_url() ?>category/edit/<?php echo $category->catId ?>" class="btn btn-square btn-primary mb-2"> Edit</a>   <a href="<?php base_url() ?>category/delete/<?php echo $category->catId ?>" class="btn btn-square btn-primary mb-2"> Delete</a></td>
                                            </tr>
                                         <?php endforeach ?> 

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>



                    </div>
                    </div></div>


<?php
//Loading footer
$this->load->view('section/admin/footer');
?>
