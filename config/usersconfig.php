<?php
include 'dbconfig.php';
$username= mysqli_real_escape_string($conn, $_POST['username']);
$firstname= mysqli_real_escape_string($conn, $_POST['firstname']);
$surname= mysqli_real_escape_string($conn, $_POST['surname']);
$emailadd= mysqli_real_escape_string($conn, $_POST['eaddress']);
$phoneno= mysqli_real_escape_string($conn, $_POST['UserPhone']);
$companyname= mysqli_real_escape_string($conn, $_POST['companyName']);
$companyzipcode= mysqli_real_escape_string($conn, $_POST['Companyzip']);
$companyemail= mysqli_real_escape_string($conn, $_POST['companyEmail']);
$companyphoneno= mysqli_real_escape_string($conn, $_POST['companyPhone']);
$companylogo = addslashes(file_get_contents($_FILES['companyLogo']['tmp_name']));
$password= md5(mysqli_real_escape_string($conn, $_POST['password']));


$results= mysqli_query($conn, "INSERT INTO users(username, firstname, surname, emailadd, phoneno, companyname, companyzipcode, companyemail, companyphoneno, comapanylogo, 	password) VALUES('$username', '$firstname', '$surname', '$emailadd', '$phoneno', '$companyname', '$companyzipcode', '$companyemail', '$companyphoneno', '$companylogo', '$password')");
if(!$results){
    echo "try again";
}
else{
    echo "success";
}
?>