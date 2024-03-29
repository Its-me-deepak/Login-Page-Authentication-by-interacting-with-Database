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
    $cred = $_POST['Credentials'];

    $sql = "SELECT * FROM userdetails WHERE UserName='$usname' AND Credentials='$cred'";
    $result=mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result)==1) 
    {
        echo "Logged In Successfully! ";
    } 
    else 
    {
        echo "User Not Found!!";
    }
}
mysqli_close($conn);
?>
