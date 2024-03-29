<?php  
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'login_form';
$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $usname = $_POST['UserName'];   //must be equivalent to Database names also mention the name="" in HTML
    //$emailid =  $_POST['EmailId'];
    $cred = $_POST['Credentials'];

    $sql = "SELECT * FROM userdetails WHERE UserName='$usname' AND Credentials='$cred'";
    $result=mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result)==1) 
    {
        echo "<center><h1>Logged In Successfully!!</h1></center>";
    } 
    else 
    {
        echo "<center><h1>User Not Found!!</h1></center>";
    }
}
mysqli_close($conn);
?>
