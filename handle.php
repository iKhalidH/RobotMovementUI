
<?php include("DBConfig.php");
    $movement;
    if(isset($_POST['Forward'])) {
        $movement = 'f';
    } else if(isset($_POST['Left'])) {
        $movement = 'l';
    } else if(isset($_POST['Stop'])) {
        $movement = 's';
    } else if(isset($_POST['Right'])) {
        $movement = 'r';
    } else {
        $movement = 'b';
    }
    
    $sql = "INSERT INTO robotmovement (Direction) VALUES ('$movement')";

    if(mysqli_query($conn, $sql)){
            header("Location: {$_SERVER['HTTP_REFERER']}");
            exit;
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
        }
        // Close connection
        mysqli_close($conn);
?>
