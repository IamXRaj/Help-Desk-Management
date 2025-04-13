<?php include "inc/sidenav.php"; ?>
<?php include "inc/header.php"; ?>

		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
					<h2 class="title1">Tables</h2>
					
					
					<div class="table-responsive bs-example widget-shadow">
						<h4>View Tickets</h4>
						<table class="table table-bordered"> 
                            <thead>
                            <tr>
                    <th scope="col">Customer ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>

                    
                    </tr>

                        </thead> 
                                <tbody>
                                <?php 
                    
                      
                    include "../conn/conn.php";
                
                //   if(isset($_SESSION['tbl_user_id'])) {
                //       $tbl_user_id = $_SESSION['tbl_user_id'];
                      $count = 1;
                  
                      // Perform the SQL query to fetch data
                      $sql = "SELECT * FROM tbl_user ";
                      $result = mysqli_query($conn, $sql);
                  
                      if(mysqli_num_rows($result) > 0) {
                          // Display the fetched data
                          while($row = mysqli_fetch_assoc($result)) {
                              extract($row);
                              ?>
                              <tr>
                                  <td>C18250<?php echo $count++; ?></td>
                                  <td><?php echo $first_name; ?></td>
                                  <td><?php echo $email; ?></td>
                                  <td>
                                      <!-- <a type="button" name="update" class="btn btn-dark btn-sm" href='view_user.php?id=<?php echo $tbl_user_id ?>'>Generate Ticket</a> -->
                                      <a type="button" name="delete" class="btn btn-danger btn-sm" href='delete_cust.php?tbl_user_id=<?php echo $tbl_user_id ?>'>Delete</a>
                                  </td>
                              </tr>
                              <?php
                          }
                      } else {
                          echo "No data found.";
                      }
                  
                      // Free result set
                      mysqli_free_result($result);
                  
          ?>
                      

                            </tbody>
                         </table> 
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- side nav js -->
	<script src='js/SidebarNav.min.js' type='text/javascript'></script>
	<script>
      $('.sidebar-menu').SidebarNav()
    </script>
	<!-- //side nav js -->
	
	<!-- Classie --><!-- for toggle left push menu script -->
		<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			
			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!-- //Classie --><!-- //for toggle left push menu script -->
	
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	
	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.js"> </script>
	
</body>
</html>