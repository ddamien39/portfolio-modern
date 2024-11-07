<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Success</title> change in js-->
    <link rel="stylesheet" href="/static/sendform.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="/static/sendform.js"></script>
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <?php
        if(isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["msg"]) && $_POST["msg"] != "" && $_POST["name"] != "" && $_POST["email"] != "") 
        {
            $NAME = $_POST["name"];
            $EMAIL = $_POST["email"];
            $MSG = $_POST["msg"];
        } else {
            ?>
                <div class="error-msg">
                    <script>changeWindowTitle("Erreur")</script>
                    <i class="fa-solid fa-xmark fa-xl"></i>
                    <h2>Erreur</h2>

                    <p>Il manque des informations.</p>
                </div>
            <?php
            exit(0);
        }
    ?>
    <div class="success-msg">
        <script>changeWindowTitle("Success")</script>
        <i class="fa-solid fa-check fa-xl"></i>
        <h2>Success</h2>

        <p>Votre message a bien été envoyé.</p>
    </div>
</body>
</html>