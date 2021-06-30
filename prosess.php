<?php

$mysqli= new mysqli('localhost','root','', 'arms') or die(mysqli_error($mysqli));

$renter_id='';
$date='';
$first_name='';
$last_name='';
$p_number='';
$email='';
$renter_job='';
$job_add='';
$permanent_add='';
$emargency='';
$update=false;
$id=0;
if(isset($_POST['save']))
{
    $renter_id = filter_input(INPUT_POST, 'renterid');
    $date = filter_input(INPUT_POST, 'date');
    $first_name = filter_input(INPUT_POST, 'fname');
    $last_name = filter_input(INPUT_POST, 'lname');
    $p_number = filter_input(INPUT_POST, 'pnumber');
    $email = filter_input(INPUT_POST, 'email');
    $renter_job = filter_input(INPUT_POST, 'rjob');
    $job_add = filter_input(INPUT_POST, 'jaddress');
    $permanent_add = filter_input(INPUT_POST, 'paddress');
    $emargency = filter_input(INPUT_POST, 'cnumber');
    
    $mysqli->query("INSERT INTO apartment (Renter_ID, First_Name, Last_Name, Mobile_Number, Email, Renter_Job, Job_Address, Permanent_Address, Emergency_contact_number, Date) VALUES('$renter_id','$first_name','$last_name','$p_number', '$email', '$renter_job','$job_add', '$permanent_add', '$emargency', '$date')") or die($mysqli->error);
}
if(isset($_GET['delete']))
{
    $id = filter_input(INPUT_GET, 'delete');
    $mysqli->query("DELETE FROM apartment WHERE ID=$id") or die($mysqli->error);
}
if(isset($_GET['edit']))
{
    $id = filter_input(INPUT_GET, 'edit');
    $update=true;
    $result=$mysqli->query("SELECT * FROM apartment WHERE ID=$id") or die($mysqli->error);
    if (isset($result))
    {
        $row=$result->fetch_array();
        $renter_id=$row['Renter_ID'];
        $date=$row['Date'];
        $first_name=$row['First_Name'];
        $last_name=$row['Last_Name'];
        $p_number=$row['Mobile_Number'];
        $email=$row['Email'];
        $renter_job=$row['Renter_Job'];
        $job_add=$row['Job_Address'];
        $permanent_add=$row['Permanent_Address'];
        $emargency=$row['Emergency_contact_number'];
    }
}
if(isset($_POST['update']))
{
    $id = filter_input(INPUT_POST, 'ID');
    $renter_id = filter_input(INPUT_POST, 'renterid');
    $date = filter_input(INPUT_POST, 'date');
    $first_name = filter_input(INPUT_POST, 'fname');
    $last_name = filter_input(INPUT_POST, 'lname');
    $p_number = filter_input(INPUT_POST, 'pnumber');
    $email = filter_input(INPUT_POST, 'email');
    $renter_job = filter_input(INPUT_POST, 'rjob');
    $job_add = filter_input(INPUT_POST, 'jaddress');
    $permanent_add = filter_input(INPUT_POST, 'paddress');
    $emargency = filter_input(INPUT_POST, 'cnumber');
    $mysqli->query("UPDATE apartment SET Renter_ID='$renter_id', First_Name='$first_name', Last_Name='$last_name', Mobile_Number='$p_number', Email='$email', Renter_Job='$renter_job', Job_Address='$job_add', Permanent_Address='$permanent_add', Emergency_contact_number='$emargency', Date='$date' WHERE ID=$id") or die($mysqli->error);
}
