<?php
    include("connect.class.php");
    header("X-XSS-Protection: 0");

// LOGIN
$email_login = $_POST['email_users'];
$password_login = $_POST['password_users'];
$btn_login = $_POST['btn_login'];

if(isset($btn_login)){
    $execute_login = mysqli_query($link, "SELECT * FROM users WHERE email_users = '$email_login' AND password_users = '$password_login'");
    $count_execute_login = mysqli_num_rows($execute_login);
    
   
    
    if($count_execute_login == 1){
        session_start();
        $_SESSION['email_users'] = $_POST['email_users'];
        $_SESSION['password_users'] = $_POST['password_users'];
        header("location: dashboard.php");
        
        
    }else{
        echo "Erro Login";
    }
}


// GET USER
    $get_user_info = mysqli_query($link, "SELECT * FROM users WHERE email_users = '$_SESSION[email_users]'");
    $list_user_info = mysqli_fetch_array($get_user_info);



// GET CATEGORY
$tab_query = "SELECT * FROM category ORDER BY id_category ASC";

$tab_result = mysqli_query($link, $tab_query);
$tab_menu = '';
$tab_content = '';
$i = 0;

while($row = mysqli_fetch_array($tab_result))
{
 if($i == 0)
 {
  
  $tab_menu .= '
  <li class="nav-item">
   <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#'.str_replace(" ","",$row["name_category"]).'" role="tab" aria-controls="pills-home" aria-selected="true">'.$row["name_category"].'</a>
 </li>
 ';
 $tab_content .= '
   <div class="tab-pane fade show active" id="'.str_replace(" ","",$row["name_category"]).'" role="tabpanel" aria-labelledby="pills-home-tab">
   <div class="row justify-content-center">
 ';

 }
 else
 {
    $tab_menu .= '
    <li class="nav-item">
     <a class="nav-link " id="pills-home-tab" data-toggle="pill" href="#'.str_replace(" ","",$row["name_category"]).'" role="tab" aria-controls="pills-home" aria-selected="true">'.$row["name_category"].'</a>
   </li>
   ';
      
   $tab_content .= '
    <div class="tab-pane fade" id="'.$row["name_category"].'" role="tabpanel" aria-labelledby="pills-home-tab">
    <div class="row justify-content-center">
   ';
 }
    
 $product_query = "SELECT * FROM products WHERE category_products = '".$row["name_category"]."'";
 $product_result = mysqli_query($link, $product_query);
    
 while($sub_row = mysqli_fetch_array($product_result))
 {
  $tab_content .= '
        <div class="card mr-3 mb-4" style="width: 18rem;">
            <img class="card-img-top" src="'.$sub_row["photo_products"].'" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">'.$sub_row["name_products"].'</h5>
                <span class="badge badge-success">'.$sub_row["discount_products"].'% OFF</span>
                <h2 class="text-success mb-4">R$'.$sub_row["price_products"].'</h2>
                <div class="row">
                    <div class="col-12">
                    
                    '.$sub_row["pagseguro_products"].'
                    
                    <a href="buy.php?product='.$sub_row["id_products"].'" class="btn btn-primary btn-sm">
                        <big>Mais Informações</big> 
                    </a>
                    </div>
                </div>
            </div>
        </div>  
    ';
 }
 $tab_content .= '</div>
 </div>';
 $i++;
}
    
   


//INSERT NEW PRODUCT
$name_product = $_POST['name_products'];
$category_products = $_POST['category_products'];
$price_products = $_POST['price_products'];
$discount_products = $_POST['discount_products'];
$hot_products = $_POST['hot_products'];
$description_products = $_POST['description_products'];
$pagseguro_products = $_POST['pagseguro_products'];
$btn_new_product = $_POST['btn_new_product'];

// UPLOAD DE IMG
$nome = $_FILES['photo_products']['name'];
$temporario = $_FILES['photo_products']['tmp_name'];
$diretorio = "imgs/products/".$nome;
move_uploaded_file($temporario, $diretorio); 

if(isset($btn_new_product)){
    $insert_new_product = mysqli_query($link, "INSERT INTO products (name_products, category_products, price_products, discount_products, photo_products, hot_products, description_products, pagseguro_products) VALUES('$name_product','$category_products','$price_products','$discount_products','$diretorio','$hot_products','$description_products','$pagseguro_products')");
    
    if($insert_new_product){
        header("location: ok-product.php");
    }
}

// GET HOT PRODUCTS
    $get_hot_products = mysqli_query($link, "SELECT * FROM `products` WHERE `hot_products` = 'Sim' ORDER BY `id_products` LIMIT 3");

// GET PRODUCTS INFO
    $id_product_url = $_GET['product'];
    $get_products_info = mysqli_query($link, "SELECT * FROM  products WHERE id_products = '$id_product_url'");
    $list_products_info = mysqli_fetch_array($get_products_info);

// GET PRODUCTS
    $get_products = mysqli_query($link, "SELECT * FROM products ORDER BY id_products ASC");
    $count_products = mysqli_num_rows($get_products);

// EDIT PRODUCTS
    $id_url_edit_product = $_GET['edit_product'];
    $get_edit_product = mysqli_query($link, "SELECT * FROM products WHERE id_products = $id_url_edit_product");
    $list_edit_product = mysqli_fetch_array($get_edit_product);
    
    $edit_name_product = $_POST['name_products'];
    $edit_category_products = $_POST['category_products'];
    $edit_price_products = $_POST['price_products'];
    $edit_discount_products = $_POST['discount_products'];
    $edit_hot_products = $_POST['hot_products'];
    $edit_description_products = $_POST['description_products'];
    $edit_pagseguro_products = $_POST['pagseguro_products'];
    $btn_edit_product = $_POST['btn_edit_product'];

    // UPLOAD DE IMG
    $nome = $_FILES['photo_products']['name'];
    $temporario = $_FILES['photo_products']['tmp_name'];
    $diretorio = "imgs/products/".$nome;
    move_uploaded_file($temporario, $diretorio); 

    if(isset($btn_edit_product)){
        $edit_products = mysqli_query($link, "UPDATE products SET name_products = '$edit_name_product', category_products = '$edit_category_products', price_products = '$edit_price_products', discount_products = '$edit_discount_products', photo_products = '$diretorio', hot_products = '$edit_hot_products', description_products = '$edit_description_products', pagseguro_products = '$edit_pagseguro_products' WHERE id_products = '$id_url_edit_product'");
        
        if($edit_products){
            header("location: ok-edit-product.php");
        }
    }

// DELETE PRODUCTS
    $id_url_delete_product = $_GET['delete_product'];
    $btn_delete_product = $_POST['btn_delete_product'];

    if(isset($btn_delete_product)){
        $delete_product = mysqli_query($link, "DELETE FROM products WHERE id_products = '$id_url_delete_product'");
        if($delete_product){
            header("location: ok-delete-product.php");
        }
    }

// NEW SLIDER
    $btn_new_slider = $_POST['btn_new_slider'];

    // UPLOAD DE IMG
    $nome = $_FILES['photo_slider']['name'];
    $temporario = $_FILES['photo_slider']['tmp_name'];
    $diretorio = "imgs/sliders/".$nome;
    move_uploaded_file($temporario, $diretorio); 

    if(isset($btn_new_slider)){
        $new_slider = mysqli_query($link, "INSERT INTO slider(photo_slider)VALUES('$diretorio')");
        if($new_slider){
            header("location: ok-new-slider.php");
        }
    }

// GET SLIDER
    $get_slider = mysqli_query($link, "SELECT * FROM slider ORDER BY id_slider DESC");
    $count_slider = mysqli_num_rows($get_slider);

// EDIT SLIDER
    $id_slider_url = $_GET['id_edit_slider'];
    $btn_edit_slider = $_POST['btn_edit_slider'];
    
    // UPLOAD DE IMG
    $nome = $_FILES['photo_slider']['name'];
    $temporario = $_FILES['photo_slider']['tmp_name'];
    $diretorio = "imgs/sliders/".$nome;
    move_uploaded_file($temporario, $diretorio);

    if(isset($btn_edit_slider)){
        $edit_slider = mysqli_query($link, "UPDATE slider SET photo_slider = '$diretorio' WHERE id_slider = '$id_slider_url'");
        if($edit_slider){
           header("location: ok-edit-slider.php");
        }
    }

// DELETE SLIDER
    $id_delete_slider_url = $_GET['id_delete_slider'];
    $btn_delete_slider = $_POST['btn_delete_slider'];

    if(isset($btn_delete_slider)){
        $delete_slider = mysqli_query($link, "DELETE FROM slider WHERE id_slider = '$id_delete_slider_url'");
        if($delete_slider){
             header("location: ok-delete-slider.php");
        }else{echo "n apaga";}
    }
    
    
   

// NEW POST
    $title_posts = $_POST['title_posts'];
    $description_posts = $_POST['description_posts'];
    $btn_new_post = $_POST['btn_new_post'];
    
    // UPLOAD DE IMG
    $nome = $_FILES['photo_posts']['name'];
    $temporario = $_FILES['photo_posts']['tmp_name'];
    $diretorio = "imgs/posts/".$nome;
    move_uploaded_file($temporario, $diretorio); 
    
    if(isset($btn_new_post)){
        $new_post = mysqli_query($link, "INSERT INTO posts(title_posts, photo_posts, description_posts)VALUES('$title_posts','$diretorio','$description_posts')");
        if($new_post){
            header("location: ok-new-post.php");
        }
    }

// GET POSTS
    $get_posts = mysqli_query($link, "SELECT * FROM posts ORDER BY id_posts DESC LIMIT 3");
    $get_posts_dashboard = mysqli_query($link, "SELECT * FROM posts ORDER BY id_posts DESC");
    $count_posts = mysqli_num_rows($get_posts);
    
    $id_posts_url = $_GET['post'];
    $show_posts = mysqli_query($link, "SELECT * FROM posts WHERE id_posts = '$id_posts_url'");
    

// EDIT POSTS
    $id_url_edit_posts = $_GET['edit_post'];
    $get_edit_posts = mysqli_query($link, "SELECT * FROM posts WHERE id_posts = '$id_url_edit_posts'");
    $list_edit_posts = mysqli_fetch_array($get_edit_posts);

    $edit_title_posts = $_POST['title_posts'];
    $edit_description_posts = $_POST['description_posts'];
    $btn_edit_posts = $_POST['btn_edit_posts'];

    $nome = $_FILES['photo_posts']['name'];
    $temporario = $_FILES['photo_posts']['tmp_name'];
    $diretorio = "imgs/posts/".$nome;
    move_uploaded_file($temporario, $diretorio); 

    if(isset($btn_edit_posts)){
        $edit_post = mysqli_query($link, "UPDATE posts SET title_posts = '$edit_title_posts', photo_posts = '$diretorio', description_posts = '$edit_description_posts' WHERE id_posts = '$id_url_edit_posts'");
        if($edit_post){
            header("location: ok-edit-post.php");
        }
    }

// DELETE POST
    $id_url_delete_post = $_GET['delete_post'];
    $btn_delete_post = $_POST['btn_delete_post'];

    if(isset($btn_delete_post)){
        $delete_product = mysqli_query($link, "DELETE FROM posts WHERE id_posts = '$id_url_delete_post'");
        if($delete_product){
            header("location: ok-delete-post.php");
        }
    }

// GET VIDEOS
    $get_videos = mysqli_query($link, "SELECT * FROM videos ORDER BY id_videos DESC");
    $count_videos = mysqli_num_rows($get_videos);

// NEW VIDEO
    $link_video = $_POST['content_videos'];
    $btn_new_video = $_POST['btn_new_video'];
    
    if(isset($btn_new_video)){
        $insert_video = mysqli_query($link, "INSERT INTO videos(content_videos)VALUES('$link_video')");
        if($insert_video){
            header("location: ok-new-video.php");
        }
    }

// EDIT VIDEO
    $id_url_edit_video = $_GET['edit_video'];
    $edit_content_video = $_POST['content_videos'];
    $btn_edit_video = $_POST['btn_edit_video'];

    if(isset($btn_edit_video)){
        $edit_video = mysqli_query($link, "UPDATE videos SET content_videos = '$edit_content_video' WHERE id_videos = '$id_url_edit_video'");
        if($edit_video){
            header("location: ok-edit-video.php");
        }
    }

// DELETE VIDEO
    $id_url_delete_video = $_GET['delete_video'];
    $btn_delete_video = $_POST['btn_delete_video'];

    if(isset($btn_delete_video)){
        $delete_video = mysqli_query($link, "DELETE FROM videos WHERE id_videos = '$id_url_delete_video'");
        if($delete_video){
            header("location: ok-delete-video.php");
        }
    }

// NEWSLETTER
    $name_newsletter = $_POST['name_newsletter'];
    $email_newsletter = $_POST['email_newsletter'];
    $btn_newsletter = $_POST['btn_newsletter'];
    
    if(isset($btn_newsletter)){
        $insert_newsletter = mysqli_query($link, "INSERT INTO newsletter(name_newsletter,email_newsletter)VALUES('$name_newsletter','$email_newsletter')");
        if($insert_newsletter){
            header("location: ok-newsletter.php");
        }
    }

// GET NEWSLETTER
    $get_newsletter = mysqli_query($link, "SELECT * FROM newsletter ORDER BY id_newsletter ASC");
    $count_newsletter = mysqli_num_rows($get_newsletter);
    
// GET SHOP
    $get_shop = mysqli_query($link, "SELECT * FROM products ORDER BY RAND()");

// SEARCH
    $search = $_POST['search'];
    $btn_search = $_POST['btn_search'];

    if(isset($btn_search)){
        
        $get_search = mysqli_query($link, "SELECT * FROM products WHERE name_products LIKE '%$search%'");
        $count_search = mysqli_num_rows($get_search);
    }

$get_category = mysqli_query($link, "SELECT * FROM category");
?>


    