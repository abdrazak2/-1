<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // استلام البيانات من النموذج
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // البريد الذي سترسل إليه الرسائل
    $to = "holatanger909@gmail.com"; // استبدل بـ بريد الملك أو المسؤول
    $subject = "رسالة جديدة من: $name";

    // محتوى الرسالة
    $body = "
    الاسم: $name\n
    البريد الإلكتروني: $email\n
    الرسالة:\n$message
    ";

    // إعدادات البريد
    $headers = "From: $email";

    // إرسال الرسالة
    if (mail($to, $subject, $body, $headers)) {
        echo "تم إرسال الرسالة بنجاح.";
    } else {
        echo "حدث خطأ أثناء إرسال الرسالة. حاول مجددًا.";
    }
} else {
    echo "طلب غير صالح.";
}
?>
