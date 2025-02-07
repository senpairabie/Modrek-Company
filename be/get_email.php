<?php
include 'connect.php';

try {
    $stmt = $connect->prepare("SELECT * FROM `email` ORDER BY id DESC");
    $stmt->execute();
    $emails = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (count($emails) > 0) {
        echo json_encode(array("status" => "success", "data" => $emails));
    } else {
        echo json_encode(array("status" => "fail", "message" => "لا توجد رسائل حالياً."));
    }

} catch (PDOException $e) {
    echo json_encode(array("status" => "fail", "message" => "خطأ في الاتصال بقاعدة البيانات: " . $e->getMessage()));
}
?>