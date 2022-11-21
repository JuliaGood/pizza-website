<?php
    session_start();
       if (isset($_POST['text'])) { 
            $text=$_POST['text'];
            if ($text =='') { 
                 unset($text);
           }
        }
       if (empty($text))    {
             exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
          }
       else {		
              include ("dbconnect.php");
              if (!empty($_SESSION['id'])) {
                  $userId=$_SESSION['id'];
                  $name=$_SESSION['name'];
                  $productId = $_POST['product_id'];
                  $result = $mysqli->query("INSERT INTO testimonials(name, text, product_id, user_id) VALUES ('$name','$text','$productId','$userId')");
                  header('Location: product.php?id=' . $productId . '#testimonials');          
            }
          }
    ?>
