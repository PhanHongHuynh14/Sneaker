<?php

if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($mysqli, $_POST['name']);
    $email = mysqli_real_escape_string($mysqli, $_POST['email']);
    $product_name = mysqli_real_escape_string($mysqli, $_POST['product_name']);
    $product_feedback = mysqli_real_escape_string($mysqli, $_POST['product_feedback']);
    $review = mysqli_real_escape_string($mysqli, $_POST['review']);

    //     $upload_image=$_FILES["file"]["name"];
    // $folder="http://localhost/project/Feedback/images/";
    // move_uploaded_file($_FILES["file"]["tmp_name"], "$folder".$_FILES["file"]["name"]);

    $img_name = $_FILES['file']['name'];
    $img_size = $_FILES['file']['size'];
    $tmp_name = $_FILES['file']['tmp_name'];
    $error = $_FILES['file']['error'];

    if ($error === 0) {
        if ($img_size > 12500000) {
            $em = "Sorry, your file is too large.";
            echo "processsdf";
        } else {
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);

            $allowed_exs = array("jpg", "jpeg", "png");

            if (in_array($img_ex_lc, $allowed_exs)) {
                $new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;
                $img_upload_path = __DIR__. DIRECTORY_SEPARATOR .'uploads' . DIRECTORY_SEPARATOR . $new_img_name;
                move_uploaded_file($tmp_name, $img_upload_path);

                $sql = "INSERT INTO tbl_feedback(Id,Username,Email,ProductName,File,Feedback,Reviews) VALUES('null','$name','$email','$product_name','$new_img_name','$product_feedback','$review')";

                $result = mysqli_query($mysqli, $sql);
                if ($result) {
                    $_SESSION['success_message'] = "Contact form saved successfully.";

?>
                    <script>
                        swal("Good job!", "You clicked the button!", "success");
                    </script>
<?php
                }
            } else {
                $em = "You can't upload files of this type";
                header("Location: index.php?error=$em");
            }
        }
    } else {
       
        echo "error";
    }
    session_destroy();
}

?>
