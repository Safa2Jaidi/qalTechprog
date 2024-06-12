<?php
// تحقق من أن الطلب هو POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // تأكد من أن الاسم والتعليق قد تم إرسالهما
    if (isset($_POST['name']) && isset($_POST['comment'])) {
        $name = $_POST['name'];
        $comment = $_POST['comment'];
        // هنا يمكنك إضافة البيانات إلى قاعدة البيانات أو ملف
        // ...

        // توجيه المستخدم إلى صفحة الشكر مع معلومات الاسم والتعليق
        header('Location: https://safa2jaidi.github.io/qalTechprog/thankyou.php?name=' . urlencode($name) . '&comment=' . urlencode($comment));
        exit();
    } else {
        // إذا لم يتم إرسال الاسم أو التعليق، أعد المستخدم إلى النموذج
        header('Location: form.html');
        exit();
    }
}
?>
