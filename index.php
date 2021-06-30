<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

    <head>
        <meta charset="UTF-8">
        <title>arms</title>
        <script src="https://kit.fontawesome.com/9e5dbd952a.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <!--custom style sheet-->
    <link rel="stylesheet" href="newCascadeStyleSheet.css"/>
    
     
    <style>  
      body {
        background-image: url(building.jpg);
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
      }
    </style>
    </head>
    
    <body>    
        <?php require_once 'prosess.php'; ?> 
            
            <div class="container text-center"> //
                <h1 class="py-3 bg-dark text-light rounded"><i bg-dark text-light rounded"class="fas fa-building"></i> Apartment Rent Management System  </h1>
        
                <div class="container text-center"> 
                <div class="d-flex justify-content-center">
                    
                    
                    <form action="prosess.php" method="POST"  > 
                        <input type="hidden" name="ID" value="<?php echo $id; ?>"> 
                            <div class="form-group mb-1 ">
                                <div class="form-group-prepend">  
                                    <div class="form-group-text bg-warning"><i class="fas fa-id-badge"></i></div>
                                </div>
                                <input type="text" placeholder="Renter ID" name="renterid" class="form-control rounded" 
                                       value="<?php echo $renter_id; ?>"  > 
                            </div>
                        <div class="form-group mb-1 ">
                                <div class="form-group-prepend">
                                    <div class="form-group-text bg-warning"><i class="far fa-calendar-alt"></i></div>
                                </div>
                            <input type="date" placeholder="Date" name="date" class="form-control rounded" 
                                   value="<?php echo $date; ?>"  >
                            </div>
                        
                        <div class="row">
                            <div class="col">
                             <div class="form-group mb-1" >
                                <div class="form-group-prepend">
                                    <div class="form-group-text bg-warning" class="form-control rounded"><i class="fas fa-user"></i></div>
                                </div>
                                <input type="text" placeholder="First Name" name="fname" class="form-control rounded" 
                                       value="<?php echo $first_name; ?>"  >
                            </div>
                           </div>
                        
                            <div class="col">
                        <div class="form-group mb-1">
                                <div class="form-group-prepend">
                                    <div class="form-group-text bg-warning" class="form-control rounded"><i class="fas fa-user"></i></div>
                                </div>
                            <input type="text" placeholder="Last Name" name="lname" class="form-control rounded" 
                                   value="<?php echo $last_name; ?>"  >
                            </div>
                            </div>
                          </div>
                        
                        <div class="row">
                            <div class="col">
                        <div class="form-group mb-1">
                                <div class="form-group-prepend">
                                    <div class="form-group-text bg-warning" class="form-control rounded"><i class="fas fa-phone"></i></div>
                                </div>
                            <input type="text" placeholder="Phone Number" name="pnumber" class="form-control rounded" 
                                   value="<?php echo $p_number; ?>"  >
                            </div>
                                </div>
                            
                            <div class="col">
                        <div class="form-group mb-1">
                                <div class="form-group-prepend">
                                    <div class="form-group-text bg-warning" class="form-control rounded"><i class="fas fa-envelope"></i></div>
                                </div>
                            <input type="text" placeholder="Email" name="email" class="form-control rounded"
                                   value="<?php echo $email; ?>"  >
                            </div>
                                </div>
                            </div>
                        
                        <div class="row">
                            <div class="col">
                        <div class="form-group mb-1">
                                <div class="form-group-prepend">
                                    <div class="form-group-text bg-warning" class="form-control rounded"><i class="fas fa-briefcase"></i></div>
                                </div>
                            <input type="text" placeholder="Renter Job" name="rjob" class="form-control rounded" 
                                   value="<?php echo $renter_job; ?>"  >
                            </div>
                                </div>
                            
                            <div class="col">
                        <div class="form-group mb-1">
                                <div class="form-group-prepend">
                                    <div class="form-group-text bg-warning" class="form-control rounded"><i class="fas fa-map-marker-alt"></i></div>
                                </div>
                            <input type="text" placeholder="Job Address" name="jaddress" class="form-control rounded" 
                                   value="<?php echo $job_add; ?>"  >
                            </div>
                                </div>
                            </div>
                        
                        <div class="row">
                            <div class="col">
                        <div class="form-group mb-1">
                                <div class="form-group-prepend">
                                    <div class="form-group-text bg-warning" class="form-control rounded"><i class="fas fa-map-marker-alt"></i></div>
                                </div>
                            <input type="text" placeholder="Permanent Address" name="paddress" class="form-control rounded" 
                                   value="<?php echo $p_number; ?>"  >
                            </div>
                                </div>
                            
                            <div class="col">
                        <div class="form-group mb-1">
                                <div class="form-group-prepend">
                                    <div class="form-group-text bg-warning" class="form-control rounded"><i class="fas fa-phone"></i></div>
                                </div>
                            <input type="text" placeholder="Emergency Contact Number" name="cnumber" class="form-control rounded" 
                                   value="<?php echo $emargency; ?>"  >
                            </div>
                                </div>
                            </div>
                        
                        <div class="form-group mb-2">
                            <?php if($update==true): ?>
                             <button type="submit" class="btn btn-info" name="update">Update</button>
                            <?php else: ?>
                              <button type="submit" class="btn btn-primary" name="save">Save</button>
                              <?php endif ?>
                            
                        </div>
                        
                    </form>
                </div>
                    </div>
                <?php 
        $mysqli= new mysqli('localhost','root','', 'arms') or die(mysqli_error($mysqli)); 
        $result= $mysqli->query("SELECT * FROM apartment") or die($mysqli->error);
        ?>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Renter ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Mobile Number</th>
                            <th>Email</th>
                            <th>Renter Job</th>
                            <th>Job Address</th>
                            <th>Permanent Address</th>
                            <th>Emergency</th>
                            <th>Date</th>
                            
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <?php
                    while($row=$result->fetch_assoc()):?> 
                    <tr>
                        <td><?php echo $row['Renter_ID']; ?></td>
                        <td><?php echo $row['First_Name']; ?></td>
                        <td><?php echo $row['Last_Name']; ?></td>
                        <td><?php echo $row['Mobile_Number']; ?></td>
                        <td><?php echo $row['Email']; ?></td>
                        <td><?php echo $row['Renter_Job']; ?></td>
                        <td><?php echo $row['Job_Address']; ?></td>
                        <td><?php echo $row['Permanent_Address']; ?></td>
                        <td><?php echo $row['Emergency_contact_number']; ?></td>
                        <td><?php echo $row['Date']; ?></td>
                        <td>
                            <a href="index.php?edit=<?php echo $row['ID'];?>" 
                               class="btn btn-info">Update</a>
                               <a href="prosess.php?delete=<?php echo $row['ID'];?>"
                               class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </table>
        <?php
        
        function pre_r($array)
        {
            echo '<pre>';
            print_r($array);
            echo '</pre';
        }
        
        ?>
            </div>  
    </body>
      
        
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
    
