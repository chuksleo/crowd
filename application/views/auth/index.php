<?php 
$this->load->view('section/admin/header');

$atts = array(
        'class'       => 'btn btn-square btn-primary mb-2'
        
);


?>



      <div class="content">
                <div class="container">
                    <div class="page-title">
                        <h1><?php echo lang('index_heading');?></h1>
							<p><?php echo lang('index_subheading');?></p>
                    </div>
                    <div class="row">
                    		 <div class="col-md-12 col-lg-12">
                            <div class="card">
                                <div class="card-header"><?php echo anchor('auth/create_user', lang('index_create_user_link'), 'class="btn btn-square btn-primary mb-2"')?>  <?php echo anchor('auth/create_group', lang('index_create_group_link'), 'class="btn btn-square btn-primary mb-2"')?></div>
                                <div class="card-body">
                                    <p class="card-title"></p>
                                    <p></p>

                                    <div id="infoMessage"><?php echo $message;?></div>
                                    <table class="table table-hover" id="dataTables-example" width="100%">
                                        <thead>
                                            <tr>
                                               <th><?php echo lang('index_fname_th');?></th>
												<th><?php echo lang('index_lname_th');?></th>
												<th><?php echo lang('index_email_th');?></th>
												<th><?php echo lang('index_groups_th');?></th>
												<th><?php echo lang('index_status_th');?></th>
												<th><?php echo lang('index_action_th');?></th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                      <?php foreach ($users as $user):?>
											<tr>
									            <td><?php echo htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8');?></td>
									            <td><?php echo htmlspecialchars($user->last_name,ENT_QUOTES,'UTF-8');?></td>
									            <td><?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?></td>
												<td>
													<?php foreach ($user->groups as $group):?>
														<?php echo anchor("auth/edit_group/".$group->id, htmlspecialchars($group->name,ENT_QUOTES,'UTF-8')) ;?><br />
									                <?php endforeach?>
												</td>
												<td><?php echo ($user->active) ? anchor("auth/deactivate/".$user->id, lang('index_active_link')) : anchor("auth/activate/". $user->id, lang('index_inactive_link'));?></td>
												<td><?php echo anchor("auth/edit_user/".$user->id, 'Edit') ;?></td>
											</tr>
										<?php endforeach;?>

                                        </tbody>
                                    </table>


                                </div>
                            </div>
                        </div>



                    </div>
                    </div></div>






<?php 
$this->load->view('section/admin/footer');

?>