<?php
// controllers.php

function list_action()
{
    $posts = get_all_posts();//TODO: get all posts
    require 'templates/list.tpl.php';
}

function show_action($id)
{
    $post = get_post($id);//TODO: get post by id
    require 'templates/show.tpl.php';
}

function register() 
{
    include 'templates/register.tpl.php';
}

function login() {
    //include 'templates/login.tpl.php';
    header('Location: http://blog/stage-5/index.php/Login');
    
    $t = 1;
}

function loginTemplate() 
{
    include 'templates/login.tpl.php';
}

 function RegisterUser($name,$email, $password) 
 {
     $status = adduser($name,$email, $password);
     return $status;
 }

 function LoginUser($name, $password) {
     $val = checkUser($name, $password);
     return $val;
 }

 function logout() {

    //destroy session variables
    session_destroy();
    login();
}

function LoginAction($name, $password) {

    $login = checkUser($name, $password);
    
        if(!empty($login)) {
            $_SESSION['user_id'] = $login['id'];
            $_SESSION['username'] = $login['username'];
            $_SESSION['taget_image_path'] = $login['image_path'];
            //if login show posts
            list_action();
        }
        else
        {
            login();
        }
}

//Image Upload
function ImageUpload() {

    //need to rename the image as the row entry to the table
    $image_name = GetImageName();

    //$status = '';
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["uploadimage"]["name"]);
    
    //gets the extension of file
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    $target_file = $target_dir . $image_name . "." . $imageFileType;

    $uploadOk = 1;
    
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["uploadimage"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            //echo "File is not an image.";
            $status = "<br>File is not an image.";
            $uploadOk = 0;
        }
    }
    // Check if file already exists
    if (file_exists($target_file)) {
        //echo "Sorry, file already exists.";
        $status .= "<br>Sorry, file already exists.";
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["uploadimage"]["size"] > 500000) {
        //echo "Sorry, your file is too large.";
        $status .= "<br>Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $status .= "<br>Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        //echo "Sorry, your file was not uploaded.";
        $status .= "<br>Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["uploadimage"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["uploadimage"]["name"]). " has been uploaded.";
            //$status .= "<br>The file ". basename( $_FILES["uploadimage"]["name"]). " has been uploaded.";
        } else {
            //echo "Sorry, there was an error uploading your file.";
            $status .= "Sorry, there was an error uploading your file.";
        }
    }
    
    //target file path
   $_SESSION['taget_image_path'] = $target_file;

    return $status;
}

//perform RegisterAction()
function RegisterAction() {
 
    /*
    **  working code which uploads the image with the expected insertion row id
    **  then insert the row in the db
    **
    //fileupload
    $status = ImageUpload();
    
    //if error status exists
    if(!empty($status)) {
        $content = $status;
    
        //call layout template
        include 'templates/layout.tpl.php';
    }

    //if image is uploaded then register the user
    //and redirect to login page
    else {
        
        RegisterUser($_POST['name'], $_POST['email'], $_POST['password']);
        login();
    }
   */ 
  /*
    **  new update
    **  insert row then upload image with that row id name
    **
  */
   
  //target file path
   $_SESSION['taget_image_path'] = NULL;

  $register_status = RegisterUser($_POST['name'], $_POST['email'], $_POST['password']);

  //check insertion status
  if($register_status == false) {
    $content = "<br> ERROR REGISTERING THE USER<br><brPLEASE RE REGISTER";
    include 'templates/layout.tpl.php';
  }
  else {
      //fileupload
    $status = ImageUpload();

    //update image path
    UpdateUser($_POST['name'], $_POST['password']);
    
    //if error status exists
    if(!empty($status)) {
        $content = $status;
    
        //call layout template
        include 'templates/layout.tpl.php';
    }
    else {
        login();
    }
  }
}