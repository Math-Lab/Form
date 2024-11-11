<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // ইনপুট ফিল্ডগুলো থেকে ডেটা সংগ্রহ
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $message = isset($_POST['message']) ? $_POST['message'] : '';

    // ইমেইল ঠিকানা এবং বিষয়বস্তু
    $to = "gameloginrahi@gmail.com"; // এখানে আপনার ইমেইলটি বসানো হয়েছে
    $subject = "New Form Submission";
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email";

    // ইমেইল পাঠানোর চেষ্টা করুন এবং ফলাফল দেখান
    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }
} else {
    echo "BAD REQUEST: This page expects a POST request.";
}
?>