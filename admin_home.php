<?php
    include "validate_admin.php";
    
    include "user_navbar.php";
    include "admin_sidebar.php";
    include "session_timeout.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin_home_style.css">
</head>

<body>
    <div class="flex-container">
        <div class="flex-item">
            <h1 id="customer">
                Welcome Admin !
            </h1>
            <p id="customer" style="max-width:800px">
                "The challenge for Banks isn't<br> becoming "Digital"--it's providing <br>
                value that is perceived to be in line<br>
                with the cost--or better yet,providing value <br>
                that customers are comfortable paying for"<br>
                -Ron Shevlin
            </p>
        </div>
    </div>

</body>
</html>

<?php include "easter_egg.php"; ?>
