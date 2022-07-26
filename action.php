<?php
session_start();
include("database.php");

//register code 

if(isset($_POST['sign_in'])){
    if(($_POST['passworda'])==($_POST['passwordb'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = md5($_POST['passworda']);

        $query = "insert into user (id, name, email, password) values(NULL, '$name', '$email', '$password')";
        $conn->query($query);

        header ("location: login.php");
    }
    else{
        echo "Your password do not match";
    }
    
    
}

//login code

if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = md5($_POST['password']);

        $query = "select * from user where email='$email' and password='$password' ";
        $result = $conn->query($query);

        // fetches data from the database
        $userdata = $result->fetch_assoc();

        $count = $result->num_rows;
        if($count==0){
            echo "Invalid login Credintials";
        }
        else{
            $_SESSION['ticket'] = 'ok';
            $_SESSION['userid'] = $userdata ['id'];
            header ("location: dashboard.php");
        }
}

//addalbum

if(isset($_POST['album'])){
    $album_name = $_POST['album_name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $album_cover_art = $_FILES['album_cover_art']['name'];
    $ext = pathinfo($_FILES['album_cover_art']['name'], PATHINFO_EXTENSION);
    $rand = rand(1000, 1000000000000);
    $newpicname = $rand. "_sanotino_." .$ext;
    
    if($ext=='jpg' || $ext=='png' || $ext=='jpeg'){

    

    move_uploaded_file($_FILES['album_cover_art']['tmp_name'], "albumimg/$newpicname");

    $query = "insert into album (id, album_name, price, description, image) values(NULL, '$album_name', '$price', '$description', '$newpicname')";
    $conn->query($query);
    header ("location: album.php");
}
    else{
    echo "Please upload jpg/png/jpeg file.";
}

}

//updatealbum

if(isset($_POST['update'])){
    $new_name = $_POST['album_name'];
    $newprice = $_POST['price'];
    $newdescriptionn = $_POST['description'];
    $id = $_POST['id'];
    $q = "update album set album_name='$new_name', price='$newprice', description='$newdescriptionn' where id='$id' ";

    

    $conn->query($q);
    header("location:displayalbum.php");
}

//deletealbum

if(isset($_GET['album_del_id'])){
    $id=$_GET['album_del_id'];
    $query = "delete from album where id='$id'";
    $conn->query($query);
    header("location:displayalbum.php");
}

//addartists

if(isset($_POST['add_artist'])){
    $artist = $_POST['artistname'];
    $role = $_POST['role'];
    $image = $_FILES['artistimage']['name'];
    $instagram = $_POST['instagram'];
    $ext = pathinfo($_FILES['artistimage']['name'], PATHINFO_EXTENSION);
    $rand = rand(1000, 1000000000000);
    $newpicname = $rand. "_artist_." .$ext;
    
    if($ext=='jpg' || $ext=='png' || $ext=='jpeg'){
    move_uploaded_file($_FILES['artistimage']['tmp_name'], "artistimage/$newpicname");

    $query = "insert into artists (id, image, instagram, name, role)
    values(NULL,'$newpicname', '$instagram', '$artist', '$role' )";
    $conn->query($query);
}
    else{
    echo "Please upload jpg/png/jpeg file.";
}
header("location:artists.php");


}


?>