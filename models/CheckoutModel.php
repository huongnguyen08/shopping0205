<?php
require_once 'DBConnect.php';
class CheckoutModel extends DBConnect{

    function insertCustomer($name, $gender, $email, $address, $phone){
        $sql = "";

    }
    function insertBill($idCustomer, $dateOrder, $total, $promtPrice, $paymentMethod, $note, $token, $tokenDate, $status){
        $sql = "";

    }
    function insertBillDetail($idBill, $idProduct, $quantity, $price, $discountPrice){
        $sql = "";
        
    }
}

?>