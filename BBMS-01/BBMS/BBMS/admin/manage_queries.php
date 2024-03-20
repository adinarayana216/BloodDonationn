<html>
    <body>
        <div class="row">
            <div class="col-md-10 m-auto">
            <br><center><h4><u>Manage Queries</u></h4><br></center>
            <table class="table">
                <thead>
                    <th>S.No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Message</th>
                    
                </thead>
                <?php 
                   
                    include('../includes/connection.php');
                    $query = "select * from contact_info ";
                    $query_run = mysqli_query($connection,$query);
                    $sno = 1;
                    while($row = mysqli_fetch_assoc($query_run)){
                        $query1 = "select nam,email,phonenumber,messag from contact_info ";
                        $query_run1 = mysqli_query($connection,$query1);
                       
                        ?>
                        <tr>
                            <td><?php echo $sno; ?></td>
                            
                            <td><?php echo $row['nam']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['phonenumber']; ?></td>
                            <td><?php echo $row['messag']; ?></td>
                            
                             </tr>
                        <?php
                        
                        $sno++;
                    }
                ?>
            </table> 
            <br>
            <br>
            </div>
        </div>  
    </body>
</html>