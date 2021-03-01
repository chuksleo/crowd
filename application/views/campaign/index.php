<?php
//Loading header
$data['title'] = 'Login';
$data['javascript'] = 'app.js';
$this->load->view('section/admin/header', $data);
?>



      <div class="content">
                <div class="container">
                    <div class="page-title">
                        <h3>Campign(s)</h3>
                    </div>
                    <div class="row">
                    		 <div class="col-md-12 col-lg-12">
                            <div class="card">
                                <div class="card-header"><a href="<?php echo base_url() ?>campaign/create" class="btn btn-square btn-primary mb-2"> + Create Campaign </a></div>
                                <div class="card-body">
                                    <p class="card-title"></p>
                                    <table class="table table-hover" id="dataTables-example" width="100%">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Title</th>
                                                <th>Category</th>
                                                <th>Goal</th>
                                                <th>Funds Raised</th>
                                                <th>Status</th>
                                                <th>Date Created</th>
                                                <th>Deadline</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        <?php foreach($campaigns as $campaign):?>
                                            <tr>
                                                <td><?php echo $campaign->CampaignId?></td>
                                                <td><?php echo $campaign->Title?></td>
                                                 <td><?php echo $campaign->title?></td>
                                                <td><?php echo $campaign->Amount?></td>
                                                <td><?php echo $campaign->Current ?></td>
                                                <td><?php echo $campaign->StatusTitle ?></td>
                                                 <td><?php echo $campaign->DateCreated?></td>
                                                  <td><?php echo $campaign->EndDate ?></td>
                                                   <td>
                                                   <?php  $link_text = $this->campaign_model->cleanTitle($campaign->Title);?>
                                                  <a href="<?php echo base_url() ?>campaign/<?php echo $link_text ?>/<?php echo $campaign->CampaignId ?>" class="btn btn-square btn-primary mb-2" target="_blank"> View</a>  


                                                   <a href="<?php base_url() ?>user-campaign/edit/<?php echo $campaign->CampaignId ?>" class="btn btn-square btn-primary mb-2"> Edit</a></td>
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
