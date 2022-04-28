<?php 
include 'layout/database/db.php';

$conn = mysqli_connect($servername, $username , $password, "subscriber");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

if (isset($_POST['subscribe'])) {
    $email = $_POST['email'];
    if (!$email) {
        echo "please fill email";
    } else {
        $values = "'$email'";
        $table = "email";
        
        $sql = insert('useremail', $table, $values);
        $query = mysqli_query($conn, $sql);
    }
}
?>

<div class="auto-container">
    <form action="<?php echo $_SERVER['PHP_SELF']?>" class="subscribe-box" method="POST">
        <caption>
            <h1>Welcome to our <span>developer </span> family</h1>
        </caption>
        <input type="email" name="email" id="email" required placeholder="Enter your email..">
        <input type="submit" name="subscribe" id="subscribe-btn" value="Subscribe">
    
        <?php
if (isset($_POST['subscribe'])) {
     if ($query) {
        echo "Thanks for sbuscribe";
    } else {
        echo "Error addiing record". mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>
        

    </form>
</div>

