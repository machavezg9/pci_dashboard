<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
//Array of messages
$msgs = array();

// LAMP https://randomnerdtutorials.com/raspberry-pi-apache-mysql-php-lamp-server/
// transfer files https://unix.stackexchange.com/questions/188285/how-to-copy-a-file-from-a-remote-server-to-a-local-machine
// https://www.youtube.com/watch?v=q2OHvlr081s&t=408s

// Functions defnition
// Function to pop up an alert message box on the screen
// https://www.geeksforgeeks.org/how-to-pop-an-alert-message-box-using-php/
function function_alert($message) {
    // Display the alert box
    echo "<script>alert('$message');</script>";
}

// Function call
//function_alert("Welcome to Geeks for Geeks");

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - ".$check["mime"].".\r\n";
    echo "<br>";
    array_push($msgs, "File is an image - ".$check["mime"].".\r\n");
    function_alert($msgs[0]);
    // function tested and works 
    // function_alert("works");
    // array tested and works
    // echo $msgs[0];
    // echo "<br>";
    $uploadOk = 1;
  } else {
    echo "File is not an image.\r\n";
    echo "<br>";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.\r\n";
  echo "<br>";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000) {
  echo "Sorry, your file is too large.\r\n";
  echo "<br>";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.\r\n";
  echo "<br>";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.\r\n";
  echo "<br>";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ".htmlspecialchars( basename( $_FILES["fileToUpload"]["name"]))." has been uploaded.\r\n";
    echo "<br>";
  } else {
    echo "Sorry, there was an error uploading your file.\r\n";
    echo "<br>";
  }
}
?>
