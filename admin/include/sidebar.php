<div class="span3">
					<div class="sidebar">



		<ul class="widget widget-menu unstyled">
							<li><a href="dashboard.php"><i class="menu-icon icon-dashboard"></i>Dashboard</a></li>
							
					
						</ul>
<ul class="widget widget-menu unstyled">



							<li>
								<a class="collapsed" data-toggle="collapse" href="#togglePages1">
									<i class="menu-icon icon-group"></i>
									<i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right"></i>
									Subordinates (Sub-admin)
								</a>
								<ul id="togglePages1" class="collapse unstyled">
									<li>
										<a href="add-subadmin.php">
											<i class="icon-user"></i>
											Add Subadmin
								
										</a>
									</li>
							
	<li>
										<a href="manage-subadmins.php">
											<i class="menu-icon icon-group"></i>
											Manage Subadmin
								
										</a>
									</li>

								</ul>
							</li>
							
						
						</ul>


<ul class="widget widget-menu unstyled">
							<li>
								<a class="collapsed" data-toggle="collapse" href="#togglePages">
									<i class="menu-icon icon-cog"></i>
									<i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right"></i>
									Manage Complaint
								</a>
								<ul id="togglePages" class="collapse unstyled">
									<li>
										<a href="notprocess-complaint.php">
											<i class="icon-tasks"></i>
											Not Process Yet Complaint
											<?php
$rt = mysqli_query($con,"SELECT * FROM tblcomplaints where status is null");
$num1 = mysqli_num_rows($rt);
{?>
		
											<b class="label orange pull-right"><?php echo htmlentities($num1); ?></b>
											<?php } ?>
										</a>
									</li>

		


									<li>
										<a href="inprocess-complaint.php">
											<i class="icon-tasks"></i>
											In Process Complaint
                   <?php 
  $status="in Process";                   
$rt = mysqli_query($con,"SELECT * FROM tblcomplaints where status='$status'");
$num1 = mysqli_num_rows($rt);
{?><b class="label orange pull-right"><?php echo htmlentities($num1); ?></b>
<?php } ?>
										</a>
									</li>


	<li>
										<a href="notforwared-pending-complaints.php">
											<i class="icon-tasks"></i>
											Not Forwarded Pending Complaints
	     <?php 
  $status="in Process";                   
$rt4 = mysqli_query($con,"SELECT * FROM `tblcomplaints` where (status is null || status='' || status='$status') and ( complaintNumber not in (SELECT complaintNumber from tblforwardhistory))");
$notforawredcomplaint = mysqli_num_rows($rt4);
?><b class="label orange pull-right"><?php echo htmlentities($notforawredcomplaint); ?></b>


										</a>
									</li>


									<li>
										<a href="closed-complaint.php">
											<i class="icon-tasks"></i>
											Closed Complaints
	     <?php 
  $status="closed";                   
$rt = mysqli_query($con,"SELECT * FROM tblcomplaints where status='$status'");
$num1 = mysqli_num_rows($rt);
{?><b class="label green pull-right"><?php echo htmlentities($num1); ?></b>
<?php } ?>

										</a>
									</li>




								</ul>
							</li>
							
							<li>
								<a href="manage-users.php">
									<i class="menu-icon icon-group"></i>
									Manage users
								</a>
							</li>
						</ul>


<ul class="widget widget-menu unstyled">



							<li>
								<a class="collapsed" data-toggle="collapse" href="#togglePages122">
									<i class="menu-icon icon-paste"></i>
									<i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right"></i>
									Reports
								</a>
								<ul id="togglePages122" class="collapse unstyled">
									<li>
										<a href="bwdates-report-ds.php">
											<i class="icon-file"></i>
											B/w Date Report
								
										</a>
									</li>
							
	<li>
										<a href="subadmin-report-ds.php">
										<i class="icon-file"></i>
											Sub Admin Report
								
										</a>
									</li>

								</ul>
							</li>
							
						
						</ul>



						<ul class="widget widget-menu unstyled">
                                <li><a href="category.php"><i class="menu-icon icon-tasks"></i> Add Category </a></li>
                                <li><a href="subcategory.php"><i class="menu-icon icon-tasks"></i>Add Sub-Category </a></li>
                                <li><a href="state.php"><i class="menu-icon icon-paste"></i>Add State</a></li>
                          
                        
                            </ul><!--/.widget-nav-->

						<ul class="widget widget-menu unstyled">
							<li><a href="user-logs.php"><i class="menu-icon icon-tasks"></i>User Login Log </a></li>
							
							<li>
								<a href="logout.php">
									<i class="menu-icon icon-signout"></i>
									Logout
								</a>
							</li>
						</ul>

					</div><!--/.sidebar-->
				</div><!--/.span3-->
