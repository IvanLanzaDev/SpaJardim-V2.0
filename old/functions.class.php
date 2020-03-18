<?php
    include('connect.class.php');


// Insert New Vídeo
    $link_videos = $_POST['link_videos'];
    $btn_videos = $_POST['btn_send_videos'];
    if(isset($btn_videos)){
        $insert_videos = mysqli_query($connect, "INSERT INTO videos(link_videos)VALUES('$link_videos')");
        
        header("location: msg-new-video.php");
    }

// Insert News
    $title_news = $_POST['title_news'];
    $content_news = $_POST['content_news'];
    $btn_send_news = $_POST['btn_send_news'];
    // UPLOAD DE IMG
        $nome = $_FILES['photo_news']['name'];
        $temporario = $_FILES['photo_news']['tmp_name'];
        $diretorio = "imgs/news/".$nome;
        move_uploaded_file($temporario, $diretorio); 
    
    if(isset($btn_send_news)){
        $insert_news = mysqli_query($connect, "INSERT INTO news(title_news,content_news,photo_news)VALUES('$title_news','$content_news','$diretorio')");
        
        header("location: msg-new-news.php");
    }
// Insert Featured
    $title_featured = $_POST['title_featured'];
    $content_featured = $_POST['content_featured'];
    $btn_featured = $_POST['btn_send_featured'];
    // UPLOAD DE IMG
        $nome_featured = $_FILES['photo_featured']['name'];
        $temporario_featured = $_FILES['photo_featured']['tmp_name'];
        $diretorio_featured = "imgs/featured/".$nome_featured;
        move_uploaded_file($temporario_featured, $diretorio_featured); 
    
    if(isset($btn_featured)){
        $insert_featured = mysqli_query($connect, "INSERT INTO featured(title_featured,content_featured,photo_featured)VALUES('$title_featured','$content_featured','$diretorio_featured')");
        
        header("location: msg-new-hot.php");
    }


//Insert Slider
    $caption_slider = $_POST['caption_slider'];
    $btn_slider = $_POST['btn_send_slider'];
    // UPLOAD DE IMG
        $nome_slider = $_FILES['photo_slider']['name'];
        $temporario_slider = $_FILES['photo_slider']['tmp_name'];
        $diretorio_slider = "imgs/slider/".$nome_slider;
        move_uploaded_file($temporario_slider, $diretorio_slider); 
    
    if(isset($btn_slider)){
        $insert_slider = mysqli_query($connect, "INSERT INTO slider(caption_slider,photo_slider)VALUES('$caption_slider','$diretorio_slider')");
        
        header("location: msg-new-slider.php");
    }

// Insert newsletter
    $name_newsletter = $_POST['name_newsletter'];
    $email_newsletter = $_POST['email_newsletter'];
    $btn_newsletter = $_POST['btn_send_newsletter'];
    if(isset($btn_newsletter)){
        $insert_newsletter = mysqli_query($connect, "INSERT INTO newsletter(name_newsletter,email_newsletter)VALUES('$name_newsletter','$email_newsletter')");
    }

// Insert Product
    $name_products = $_POST['name_products'];
    $desc_products = $_POST['desc_products'];
    $price_products = $_POST['price_products'];
    $off_products = $_POST['off_products'];
    $btn_pagseguro = $_POST['btn_pagseguro'];
    $btn_send_products = $_POST['btn_send_products'];

    if(isset($btn_send_products)){
        $errors= array();
        
        foreach($_FILES['photo1_products']['tmp_name'] as $key1 => $tmp_name1 ){
		$file_name1 = $key.$_FILES['photo1_products']['name'][$key1];
		$file_size1 =$_FILES['photo1_products']['size'][$key1];
		$file_tmp1 =$_FILES['photo1_products']['tmp_name'][$key1];	
        
        $desired_dir1="imgs/products";
        $dir1 = "$desired_dir1/".$file_name1;
            if(is_dir("$desired_dir1/".$file_name1)==false){
                    move_uploaded_file($file_tmp1,$dir1);
            } // IF 1
        } // FOR EACH 1
    
        foreach($_FILES['photo2_products']['tmp_name'] as $key2 => $tmp_name2 ){
		$file_name2 = $key.$_FILES['photo2_products']['name'][$key2];
		$file_size2 =$_FILES['photo2_products']['size'][$key2];
		$file_tmp2 =$_FILES['photo2_products']['tmp_name'][$key2];	
        
        $desired_dir2="imgs/products";
        $dir2 = "$desired_dir2/".$file_name2;
            if(is_dir("$desired_dir2/".$file_name2)==false){
                    move_uploaded_file($file_tmp2,$dir2);
            } // IF 2
        } // FOR EACH 2
        
        foreach($_FILES['photo3_products']['tmp_name'] as $key3 => $tmp_name3 ){
		$file_name3 = $key.$_FILES['photo3_products']['name'][$key3];
		$file_size3 =$_FILES['photo3_products']['size'][$key3];
		$file_tmp3 =$_FILES['photo3_products']['tmp_name'][$key3];	
        
        $desired_dir3="imgs/products";
        $dir3 = "$desired_dir3/".$file_name3;
            if(is_dir("$desired_dir3/".$file_name3)==false){
                    move_uploaded_file($file_tmp3,$dir3);
            } // IF 3
        } // FOR EACH 3 
        

        $insert_product = mysqli_query($connect, "INSERT INTO products(name_products,desc_products,price_products,off_products,photo1_products,photo2_products,photo3_products,btn_pagseguro)VALUES('$name_products','$desc_products','$price_products','$off_products','$dir1','$dir2','$dir3','$btn_pagseguro')");
        
        header("location: msg-new-product.php");

    }

// New contact
    $subject_contact = $_POST['subject_contact'];
    $name_contact = $_POST['name_contact'];
    $tel_contact = $_POST['tel_contact'];
    $cel_contact = $_POST['cel_contact'];
    $email_contact = $_POST['email_contact'];
    $know_contact = $_POST['know_contact'];
    $msg_contact = $_POST['msg_contact'];  
    $btn_send_contact = $_POST['btn_send_contact'];

    if(isset($btn_send_contact)){
        $insert_new_contact = mysqli_query($connect, "INSERT INTO contact(subject_contact,name_contact,tel_contact,cel_contact,email_contact,know_contact,msg_contact)VALUES('$subject_contact','$name_contact','$tel_contact','$cel_contact','$email_contact','$know_contact','$msg_contact')");
    }



// Insert new media

    $title_media = $_POST['title_media'];
    $content_media = $_POST['content_media'];
    $link_media = $_POST['link_media'];
    $btn_send_media = $_POST['btn_send_media'];

    // UPLOAD DE IMG
        $nome_new_media = $_FILES['photo_media']['name'];
        $temporario_new_media = $_FILES['photo_media']['tmp_name'];
        $diretorio_new_media = "imgs/media/".$nome_new_media;
        move_uploaded_file($temporario_new_media, $diretorio_new_media);

    if(isset($btn_send_media)){
       $new_media = mysqli_query($connect, "INSERT INTO media(title_media,content_media,photo_media,link_media)VALUES('$title_media','$content_media','$diretorio_new_media','$link_media')");
        
        header("location: msg-new-media.php");
    }

//Get Media
    $get_media = mysqli_query($connect, "SELECT * FROM media ORDER BY id_media DESC LIMIT 2");
    $count_media = mysqli_num_rows($get_media);

// Edit Media
    $id_media_url = $_GET['media'];
    $get_edit_media = mysqli_query($connect, "SELECT * FROM media WHERE id_media = '$id_media_url'");
    $list_get_edit_media = mysqli_fetch_array($get_edit_media);

    $edit_title_media = $_POST['title_media'];
    $edit_content_media = $_POST['content_media'];
    $edit_photo_media = $_POST['photo_media'];
    $edit_link_media = $_POST['link_media'];
    $btn_edit_media = $_POST['btn_edit_media'];
    
    // UPLOAD DE IMG
        $nome_edit_media = $_FILES['photo_media']['name'];
        $temporario_edit_media = $_FILES['photo_media']['tmp_name'];
        $diretorio_edit_media = "imgs/media/".$nome_edit_media;
        move_uploaded_file($temporario_edit_media, $diretorio_edit_media); 
    if(isset($btn_edit_media)){
        $edit_news = mysqli_query($connect, "UPDATE media SET title_media='$edit_title_media', content_media='$edit_content_media',photo_media='$diretorio_edit_media',link_media='$edit_link_media' WHERE id_media='$id_media_url'");
        
        header("location: msg-edit-media.php");
    }
// Delete Media
    $btn_delete_media = $_POST['btn_delete_media'];
    if(isset($btn_delete_media)){
        $delete_media = mysqli_query($connect, "DELETE FROM media WHERE id_media = '$id_media_url'");
        
        header("location: msg-delete-media.php");
    }

//Get slider
    $get_slider = mysqli_query($connect, "SELECT * FROM slider");
    $id_slider_url = $_GET['slider'];
    $get_info_slider = mysqli_query($connect, "SELECT * FROM slider WHERE id_slider = '$id_slider_url'");
    $list_info_slider = mysqli_fetch_array($get_info_slider);

// Count slider
    $count_slider = mysqli_num_rows($get_slider);

// Get Newsletter
    $get_newsletter = mysqli_query($connect, "SELECT * FROM newsletter");

// Get Products
    $get_products = mysqli_query($connect, "SELECT * FROM products ORDER BY id_products DESC");

// Show Slider
    $show_slider = mysqli_query($connect, "SELECT * FROM slider ORDER BY id_slider ASC LIMIT 5");

// Show Slider Desktop
    $show_sliderDesk = mysqli_query($connect, "SELECT * FROM slider ORDER BY id_slider ASC LIMIT 5");
    
// Show Featured mobile
    $show_featured = mysqli_query($connect, "SELECT * FROM featured ORDER BY id_featured DESC LIMIT 2");

// Show Featured desktop
    $show_featured_desk = mysqli_query($connect, "SELECT * FROM featured ORDER BY id_featured DESC LIMIT 2");

// Show Video
    $show_video = mysqli_query($connect, "SELECT * FROM videos ORDER BY id_videos DESC LIMIT 1");

// Show News
    $show_news = mysqli_query($connect, "SELECT * FROM news ORDER BY id_news DESC LIMIT 2");
    //$show_news = mysqli_query($connect, "SELECT id_news,title_news,photo_news count(*) FROM news GROUP BY title_news HAVING count(*) > 1");

// Get News
    $get_news = mysqli_query($connect, "SELECT * FROM news ORDER BY id_news DESC");

// Get Features
    $get_features = mysqli_query($connect, "SELECT * FROM featured ORDER BY id_featured DESC");

// Show shop mobile
    $show_shop_mobile= mysqli_query($connect, "SELECT * FROM products ORDER BY id_products DESC");

// Show shop desk
    $show_shop_desk= mysqli_query($connect, "SELECT * FROM products ORDER BY id_products DESC");

// Show detail products
    $id_url_products = $_GET['product'];
    $get_detail_products = mysqli_query($connect, "SELECT * FROM products WHERE id_products='$id_url_products'");
    $list_detail_products = mysqli_fetch_array($get_detail_products);

// View featured
    $id_url_view_featured = $_GET['featured'];
    $get_view_featured = mysqli_query($connect, "SELECT * FROM featured WHERE id_featured='$id_url_view_featured'");
    $list_view_featured = mysqli_fetch_array($get_view_featured);

// View news
    $id_url_view_news = $_GET['news'];
    $get_view_news = mysqli_query($connect, "SELECT * FROM news WHERE id_news='$id_url_view_news'");
    $list_view_news = mysqli_fetch_array($get_view_news);

// Search
    $result_search = $_GET['search'];
    $btn_search = $_GET['btn_search'];

    if($btn_search == true){
        $get_search_mobile = mysqli_query($connect, "SELECT * FROM products WHERE name_products LIKE '$result_search%'");
        $get_search_desk = mysqli_query($connect, "SELECT * FROM products WHERE name_products LIKE '$result_search%'");
        if($get_search_desk){
            $count_search = mysqli_num_rows($get_search_desk);
        }
    }


// Get Contact
    $get_contact = mysqli_query($connect, "SELECT * FROM contact");

// Read Contact
    $id_contact_url = $_GET['message'];
    $read_contact = mysqli_query($connect, "SELECT * FROM contact WHERE id_contact = '$id_contact_url'");
    
    $list_read_message = mysqli_fetch_array($read_contact);

// Delete Contact
    $btn_delete_message = $_POST['btn_delete_message'];
    if(isset($btn_delete_message)){
        $delete_contact = mysqli_query($connect, "DELETE FROM contact WHERE id_contact = '$id_contact_url'");
    }

// Delete products
    $btn_delete_products = $_POST['btn_delete_products'];
    if(isset($btn_delete_products)){
        $delete_products = mysqli_query($connect, "DELETE FROM products WHERE id_products = '$id_url_product'");
        
        header("location: msg-delete-product.php");
    }

// Delete News
    $btn_delete_news = $_POST['btn_delete_news'];
    if(isset($btn_delete_news)){
        $delete_news = mysqli_query($connect, "DELETE FROM news WHERE id_news = '$id_news_url'");
        
        header("location: msg-delete-news.php");
    }

// Delete Featured
    $btn_delete_featured = $_POST['btn_delete_featured'];
    if(isset($btn_delete_featured)){
        $delete_featured = mysqli_query($connect, "DELETE FROM featured WHERE id_featured = '$id_featured_url'");
        
        header("location: msg-delete-hot.php");
    }
 
// Delete slider
    $btn_delete_slider = $_POST['btn_delete_slider'];
    if(isset($btn_delete_slider)){
        $delete_slider = mysqli_query($connect, "DELETE FROM slider WHERE id_slider = '$id_slider_url'");
        
        header("location: msg-delete-slider.php");
    }

// Edit Products
    $id_url_product = $_GET['product'];
    $get_edit_products = mysqli_query($connect, "SELECT * FROM products WHERE id_products = '$id_url_product'");
    if($get_edit_products){
        $list_get_edit_products = mysqli_fetch_array($get_edit_products);
    }

    $name_products = $_POST['name_products'];
    $desc_products = $_POST['desc_products'];
    $price_products = $_POST['price_products'];
    $off_products = $_POST['off_products'];
    $btn_edit_products = $_POST['btn_edit_products'];

    if(isset($btn_edit_products)){
        $errors= array();
        
        foreach($_FILES['photo1_products']['tmp_name'] as $key1 => $tmp_name1 ){
		$file_name1 = $key.$_FILES['photo1_products']['name'][$key1];
		$file_size1 =$_FILES['photo1_products']['size'][$key1];
		$file_tmp1 =$_FILES['photo1_products']['tmp_name'][$key1];	
        
        $desired_dir1="imgs/products";
        $dir1 = "$desired_dir1/".$file_name1;
            if(is_dir("$desired_dir1/".$file_name1)==false){
                    move_uploaded_file($file_tmp1,$dir1);
            } // IF 1
        } // FOR EACH 1
    
        foreach($_FILES['photo2_products']['tmp_name'] as $key2 => $tmp_name2 ){
		$file_name2 = $key.$_FILES['photo2_products']['name'][$key2];
		$file_size2 =$_FILES['photo2_products']['size'][$key2];
		$file_tmp2 =$_FILES['photo2_products']['tmp_name'][$key2];	
        
        $desired_dir2="imgs/products";
        $dir2 = "$desired_dir2/".$file_name2;
            if(is_dir("$desired_dir2/".$file_name2)==false){
                    move_uploaded_file($file_tmp2,$dir2);
            } // IF 2
        } // FOR EACH 2
        
        foreach($_FILES['photo3_products']['tmp_name'] as $key3 => $tmp_name3 ){
		$file_name3 = $key.$_FILES['photo3_products']['name'][$key3];
		$file_size3 =$_FILES['photo3_products']['size'][$key3];
		$file_tmp3 =$_FILES['photo3_products']['tmp_name'][$key3];	
        
        $desired_dir3="imgs/products";
        $dir3 = "$desired_dir3/".$file_name3;
            if(is_dir("$desired_dir3/".$file_name3)==false){
                    move_uploaded_file($file_tmp3,$dir3);
            } // IF 3
        } // FOR EACH 3 
        
        $edit_products = mysqli_query($connect, "UPDATE products SET name_products='$name_products', desc_products='$desc_products', price_products='$price_products', off_products='$off_products', photo1_products='$dir1', photo2_products='$dir2', photo3_products='$dir3' WHERE id_products='$id_url_product'");
        
        header("location: msg-edit-product.php");
    }

// Edit slider
    $edit_caption_slider = $_POST["caption_slider"];
    $btn_edit_slider = $_POST["btn_edit_slider"];
    // UPLOAD DE IMG
        $nome_edit_slider = $_FILES['photo_slider']['name'];
        $temporario_edit_slider = $_FILES['photo_slider']['tmp_name'];
        $diretorio_edit_slider = "imgs/slider/".$nome_edit_slider;
        move_uploaded_file($temporario_edit_slider, $diretorio_edit_slider); 
    
    if(isset($btn_edit_slider)){
        $edit_slider = mysqli_query($connect, "UPDATE slider SET caption_slider='$edit_caption_slider', photo_slider='$diretorio_edit_slider' WHERE id_slider = '$id_slider_url'");
        
        header("location: msg-edit-slider.php");
    } 

// Edit News
    $id_news_url = $_GET['news'];
    $get_edit_news = mysqli_query($connect, "SELECT * FROM news WHERE id_news = '$id_news_url'");
    $list_get_edit_news = mysqli_fetch_array($get_edit_news);

    $edit_title_news = $_POST['title_news'];
    $edit_content_news = $_POST['content_news'];
    $btn_edit_news = $_POST['btn_edit_news'];
    
    // UPLOAD DE IMG
        $nome_edit_news = $_FILES['photo_news']['name'];
        $temporario_edit_news = $_FILES['photo_news']['tmp_name'];
        $diretorio_edit_news = "imgs/news/".$nome_edit_news;
        move_uploaded_file($temporario_edit_news, $diretorio_edit_news); 
    if(isset($btn_edit_news)){
        $edit_news = mysqli_query($connect, "UPDATE news SET title_news='$edit_title_news', content_news='$edit_content_news',photo_news='$diretorio_edit_news' WHERE id_news='$id_news_url'");
        
        header("location: msg-edit-news.php");
    }



//Edit Features
    $id_featured_url = $_GET['featured'];
    $get_edit_featured = mysqli_query($connect, "SELECT * FROM featured WHERE id_featured = '$id_featured_url'");
    $list_get_edit_featured = mysqli_fetch_array($get_edit_featured);

    $edit_title_featured = $_POST['title_featured'];
    $edit_content_featured = $_POST['content_featured'];
    $btn_edit_featured = $_POST['btn_edit_featured'];
    
    // UPLOAD DE IMG
        $nome_edit_featured = $_FILES['photo_featured']['name'];
        $temporario_edit_featured = $_FILES['photo_featured']['tmp_name'];
        $diretorio_edit_featured = "imgs/featured/".$nome_edit_featured;
        move_uploaded_file($temporario_edit_featured, $diretorio_edit_featured); 

    if(isset($btn_edit_featured)){
        $edit_featured = mysqli_query($connect, "UPDATE featured SET title_featured='$edit_title_featured',content_featured='$edit_content_featured',photo_featured='$diretorio_edit_featured' WHERE id_featured='$id_featured_url'");
        
        header("location: msg-edit-hot.php");
    }

// Count Newsletter
    $count_newsletter = mysqli_num_rows($get_newsletter);


        
?>