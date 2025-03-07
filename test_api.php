<?php
// 🔥 ค่าที่ต้องการให้แอปใช้
$NMRUN_APP = 100000;

// 🔥 คีย์ลับ (ต้องเหมือนกับในแอป)
$secretKey = "devman"; 

// 🔥 สร้าง signature (Hash SHA-256)
$signature = hash("sha256", $NMRUN_APP . $secretKey);

// 🔥 ส่งข้อมูลเป็น JSON
$response = [
    "NMRUN_APP" => $NMRUN_APP,
    "signature" => $signature
];

header("Content-Type: application/json");
echo json_encode($response);
?>
