<?php
    session_start();

       if (isset($_POST['name'])) { 
            $name=$_POST['name'];
            if ($name =='') { 
                 unset($name);
           }
       }

       if (isset($_POST['phone'])) { 
            $phone=$_POST['phone'];
            if ($phone =='') { 
                 unset($phone);
            }
       }

       if (empty($name) or empty($phone)) {
            exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
       } else {		
            include ("dbconnect.php");

            if (!empty($_SESSION['id'])) {
                  $userId=$_SESSION['id'];
                  $productId = $_POST['product_id'];
                  $quantity = $_POST['quantity'];
                  $result = $mysqli->query("INSERT INTO orders(name, product_id, quantity, user_id) VALUES ('$name','$productId','$quantity','$userId')");
                  echo "Ви успішно зромили замовленья! <a href='product.php?id=" . $productId . "'>Повернутись до товару</a>";  
            }
      }
?>
