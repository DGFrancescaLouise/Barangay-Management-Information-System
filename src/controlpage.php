<?php
    session_start();
    require 'backend/connection.php';
    require 'backend/helper.php';

    if (!isset($_SESSION['users'])) {
        header('location: login.php');
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barangay Management Sytem</title>
    <link rel="stylesheet" href="\Main Project\Barangay-Management-System\src\style.css">
    <script src="\Main Project\Barangay-Management-System\tailwind.config.js"></script>
    <script src="../script.js" defer></script>
</head>
<body  class="absolute inset-0 h-full w-full bg-white bg-[radial-gradient(#e5e7eb_1px,transparent_1px)] [background-size:16px_16px]">
    <div class="bg-white grid grid-rows-2/5 grid-cols-1 rounded-xl w-full bg-white bg-[radial-gradient(#e5e7eb_1px,transparent_1px)] [background-size:16px_16px]">
        <div class="text-5xl place-self-center w-full pt-12 col-span-3 rounded-xl mb-16" >
            <h1 class="bg-pg p-6 text-center font-bold shadow-xl ">iBarangay: Management Information System</h1>
        </div>
        <div class="grid rounded-xl grid ml-96 st:ml-0 border-2"  >
            <?php
            if (hasPermission('generate_doc')) {
                echo "<a href='create_post.php'>Generate_Doc</a><br>";
            }
            
            if (hasPermission('resident_info')) {
                echo "<a href='edit_post.php'>Resident Information</a><br>";
            }
            
            if (hasPermission('system_settings')) {
                echo "<a href='delete_post.php'>System Settings</a><br>";
            }
            ?>
            <!--
            <div class="border-2">Generate documents</div>
            <div class="border-2">View records</div>
            <div class="border-2">Account information</div>
            -->
        </div>    
    </div>
</body>
</html>