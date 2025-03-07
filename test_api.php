<?php
// 🔥 ตั้งค่า Secret Key (ห้ามเปิดเผย!)
$secretKey = "devman"; 

// ค่าที่ใช้ในการตรวจสอบ (NMRUN_APP)
$NMRUN_APP = 100000;

// 🔥 สร้าง Signature (SHA-256)
$signature = hash("sha256", $NMRUN_APP . $secretKey);

// 🔥 ส่งข้อมูลกลับไปให้แอป
$response = [
    "NMRUN_APP" => $NMRUN_APP,
    "signature" => $signature
];

header("Content-Type: application/json");
echo json_encode($response);
?>
