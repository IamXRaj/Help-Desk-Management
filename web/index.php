	<?php include "inc/sidenav.php"; ?>
	<?php include "inc/header.php"; ?>
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
			<div class="col_3">
        	
            <?php
include "../conn/conn.php";

  // Modify the SQL query to count rows for the logged-in user only
  $select = mysqli_query($conn, "SELECT COUNT(*) AS total_rows FROM inqury WHERE id") or die(mysqli_error($conn));
  $row = mysqli_fetch_assoc($select);
  $total_rows = $row['total_rows'];

  ?>
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-money user2 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong><?php echo $total_rows; ?></strong></h5>
                      <span>Total Tickets</span>
                    </div>
                </div>
        	</div>
        	<?php
include "../conn/conn.php";

  // Modify the SQL query to count rows for the logged-in user only
  $select = mysqli_query($conn, "SELECT COUNT(*) AS total_rows FROM tbl_user WHERE tbl_user_id") or die(mysqli_error($conn));
  $row = mysqli_fetch_assoc($select);
  $total_rows = $row['total_rows'];

  ?>
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-money user2 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong><?php echo $total_rows; ?></strong></h5>
                      <span>Total Customer</span>
                    </div>
                </div>
        	</div>
        	
        	<div class="clearfix"> </div>
		</div>
		
				<div class="clearfix"> </div>
			</div>
				
			</div>
		</div>
        <?php include "inc/footer.php"; ?>
	