

<?php include ('header.php'); ?>

    <?php 
                    
                    include "conn/conn.php";
      
                    $count=1;
                 
                    if(isset($_GET['id']))
                    {
                        $view = mysqli_query($conn,"SELECT * from inqury where id = '".$_GET['id']."'") or die(mysqli_error($con));
                        $row = mysqli_fetch_array($view);
                    }

                    
                    ?>
      
    <div class="container mt-3">
    <!-- <form action="" method="POST"> -->
                <div class="form-group">
                    <div class="col-6 font-weight-bold">

                        <label for="">Status : <?php echo $row['status'];?></label>
                    </div>
                    <br>
                    <div class="col-6 font-weight-bold">

                    <label for=""> Customer Id : C18250<?php echo $row['id'];?></label>
                    </div>
                    <div class="col-6 font-weight-bold">

                        <label for="firstName"> Name: <?php echo $row['first_name'];?> <?php echo $row['last_name'];?></label>
                        <!-- <input type="text" readonly class="form-control" value="" name="first_name"> -->
                    </div>
                    <div class="col-6 font-weight-bold">
                        <!-- <label for="lastName">Last Name:</label> -->
                        <!-- <input type="text" readonly class="form-control" value="" name="last_name"> -->
                    </div>
                </div>
                <div class="form-group ">
                    <div class="col-6 font-weight-bold">
                        <label for="contactNumber">Contact Number: <?php echo $row['contact_number'];?></label>
                        <!-- <input type="tel" readonly class="form-control" value=""  name="contact_number" maxlength="11"> -->
                    </div>
                    <div class="col-6 font-weight-bold">
                        <label for="email">Email: <?php echo $row['email'];?></label>
                        <!-- <input type="text" readonly class="form-control" value="" name="email"> -->
                    </div>
                    <div class="col-6 font-weight-bold">
                        <label for="email">Mobil Brand - <?php echo $row['brand'];?></label>
                        <!-- <input type="text" readonly class="form-control" value="" name="brand"> -->
                    </div>
                </div>
                <div class="form-group">
                <div class="col-6 font-weight-bold">
                    <label for=""> Issue : <?php echo $row['issue'];?></label>
                    <!-- <input type="text" readonly class="form-control"  value=""  name="issue"> -->
                </div>
                <div class="col-6 font-weight-bold">
                    <label for=""> Message : <?php echo $row['selected_message'];?></label>
                    <!-- <input type="text" readonly class="form-control"  value=""  name="selected_message"> -->
                </div>
                </div>
                <div class="form-group">
                <div class="col-6 font-weight-bold">
                    <!-- <input type="text" readonly class="form-control"  value=""  name="issue"> -->
                </div>
                </div>
                
               
                <a href="view_ticket.php" class="btn btn-dark">Back To View Ticket</a>
            </form>
            </div>

  
            <?php include ('footer.php'); ?>
