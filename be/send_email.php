<?php
include 'connect.php';

$data = json_decode(file_get_contents('php://input'), true);
if (isset($data['email'])) {
    $project_name = $data['project_name']; 
    $product_url = $data['product_url'];   
    $phone = $data['phone'];               
    $email = $data['email'];               
    $message = $data['message'];           

    try {
        $stmt = $connect->prepare("INSERT INTO `email` (project_name, product_url, phone, email, message) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([$project_name, $product_url, $phone, $email, $message]);

        echo json_encode(array("status" => "success", "message" => "تم إرسال الرسالة بنجاح"));
    } catch (PDOException $e) {
        echo json_encode(array("status" => "fail", "message" => "حدث خطأ في قاعدة البيانات: " . $e->getMessage()));
    }
} else {
    echo json_encode(array("status" => "fail", "message" => "يجب عليك إدخال بريد إلكتروني صالح"));
}
?>
