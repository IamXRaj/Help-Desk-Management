

<?php include ('conn/conn.php'); ?>
<?php include ('header.php'); ?>

    <div class=" container mt-5">
        <div class="content">
            <h4>List of Inquiry</h4>
            <hr>
            <table class="table table-hover table-collapse">
                <thead>
                    <tr>
                    <th scope="col">Customer ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <!-- <th scope="col">Contact Number</th> -->
                    <th scope="col">Email</th>
                    <th scope="col">Issue</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>

                    
                    </tr>
                </thead>
                <tbody>

                    <?php 
                    
                      
              include "conn/conn.php";
          
            // if(isset($_GET['tbl_user_id'])) {
                $tbl_user_id = $_SESSION['tbl_user_id'];
                $count = 1;
            
                // Perform the SQL query to fetch data
                $sql = "SELECT i.*, u.first_name AS user_first_name, u.email AS user_email
                        FROM inqury i
                        JOIN tbl_user u ON i.tbl_user_id = u.tbl_user_id
                        WHERE u.tbl_user_id = '$tbl_user_id'";
                $result = mysqli_query($conn, $sql);
            
                if(mysqli_num_rows($result) > 0) {
                    // Display the fetched data
                    while($row = mysqli_fetch_assoc($result)) {
                        extract($row);
                        ?>
                        <tr>
                            <td>C18250<?php echo $count++; ?></td>
                            <td><?php echo $first_name; ?></td>
                            <td><?php echo $last_name; ?></td>
                            <!-- <td><?php //echo $contact_number; ?></td> -->
                            <td><?php echo $email; ?></td>
                            <td><?php echo $issue; ?></td>
                            <td><?php echo $status; ?></td>
                            
                            <td>
                                <a type="button" name="update" class="btn btn-dark btn-sm" href='view_user.php?id=<?php echo $id ?>'>Generate Ticket</a>
                                <a type="button" name="delete" class="btn btn-danger btn-sm" href='delete_ticket.php?id=<?php echo $id ?>'>Delete</a>
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

<?php include ('footer.php'); ?>
    
<script>

