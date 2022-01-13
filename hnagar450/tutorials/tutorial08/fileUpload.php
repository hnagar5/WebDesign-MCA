<?php  
    error_reporting(0);
    if(isset($_POST["Register"])){

        $target_path = "Upload/"; 
        $extension = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
        
        if($extension=='jpg' || $extension=='jpeg' || $extension=='png' || $extension=='gif'){
            $target_path = $target_path.basename( $_FILES['image']['name']);   
            
            if ($_FILES["image"]["size"] < 2048){
                echo "<script> alert('Image size must be less than 2MB.') </script>";
            }
            else{
                if(move_uploaded_file($_FILES['image']['tmp_name'], $target_path)){  
                    echo "<script> alert('Image uploaded successfully!') </script>";  
                } else{
                    echo "<script> alert('Sorry, Image not uploaded, please try again!') </script>";  
                }  
            }
        }
        else{
            echo "<script> alert('Sorry, Image type supports only JPG, JPEG, PNG and GIF!!!') </script>";
        }
    }
?>