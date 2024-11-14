<?php
    if(isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["msg"]) && $_POST["msg"] != "" && $_POST["name"] != "" && $_POST["email"] != "") 
    {
        $NAME = $_POST["name"];
        $EMAIL = $_POST["email"];
        $MSG = $_POST["msg"];
        $IS_SENT = true;
    } else {
        $IS_SENT = false;
        $NAME = "";
        $EMAIL = "";
        $MSG = "";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Duchesne Damien</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/static/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <script src="/static/index.js"></script>
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <?php
    if ($IS_SENT)
    {
    ?>
        <div id="notification" class="notification">
            <i class="fa-solid fa-check"></i><p>Votre message a bien été envoyé.</p>
        </div>
    <?php
    }
    ?>


    <div class="top-info">
        <div class="left">
            <p class="top-name">Duchesne Damien</p>
        </div>
        <div class="right">
            <a href="https://github.com/ddamien39"><i class="fa-brands fa-github fa-2x"></i></a>
            <a href="https://fr.linkedin.com/"><i class="fa-brands fa-linkedin fa-2x"></i></a>
        </div>
    </div>
    <div class="main-container">
        <!-- <img src="./img/user.png" alt="pfp placeholder" class="pfp-placeholder"> -->
    
        <div class="blue-cover">
            <div class="left-infos-pfpish">
                <img src="./img/thispersondoesnotexist.jpg" class="pfp-placeholder" alt="pasmoi">
            </div>
            <div class="info-combo">
                <h2 class="inblue-name">Duchesne Damien</h2>
                <p class="inblue-name">Etudiant IFAPME Assistant Développeur</p>
                <div class="inblue-button-dlcontact">
                    <button id="but1" class="function-btns">Télecharger le CV</button>
                    <button id="but2" class="function-btns">Me contacter</button>
                </div>
            </div>
        </div>

        <div class="cv-part">
            <div class="aboutme">
                <h2 class="aboutme-title">À propos de moi</h1>
                    <p class="aboutme-content">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odio tenetur voluptatem sequi. Neque, laboriosam ex! Temporibus ad obcaecati architecto voluptatum atque, cupiditate illo perferendis sunt omnis beatae nam ipsa nostrum autem, corrupti minus iusto eos libero suscipit ipsam sequi laboriosam qui ratione! Ab enim dolores quod fugit magnam veritatis suscipit.
                    </p>
            </div>

            <div class="personal-info">
                <p>Age <b>16</b></p>
                <p>E-mail <b>duchesnedamien30@gmail.com</b></p>
                <p>Teléphone <b>0472 17 26 14</b></p>
            </div>
        </div>
        <div class="cv-part">
            <div class="connaisances-pro">
                <h2 class="connaisances-title">Connaissances professionnelles</h1>
                    <div class="connaisances-container">
                        <div class="php">
                            <p>PHP</p>
                            <div class="progress-php"></div>
                        </div>
                        <div class="html">
                            <p>HTML</p>
                            <div class="progress-html"></div>
                        </div>
                        <div class="css">
                            <p>CSS</p>
                            <div class="progress-css"></div>
                        </div>
                    </div>
            </div>
        </div>

        <div class="cv-part-last contact-form">
            <h2 class="contact-title">Contact</h2>

            <form action="/" method="POST">

                <div class="contact-container">
                    <div class="nomprenom-container">
                        <input class="infoinput" type="text" placeholder="Votre nom" name="name">
                        <input class="infoinput" type="text" placeholder="Votre e-mail" name="email">
                    </div>
                    <div class="message-container">
                        <input id="msg-input" type="text" name="msg" id="" placeholder="Entrez votre message ici">
                    </div>
                </div>

                <input type="submit" value="Envoyer">
            </form>

        </div>
    </div>
</body>
</html>