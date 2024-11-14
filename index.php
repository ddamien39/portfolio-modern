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
    <link rel="stylesheet" href="/src/css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <script src="/src/js/index.js"></script>
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body id="body">
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

    <img id="screamer" src="data:image/jpeg;base64,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" alt="" class="screamer">

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
                <img src="/src/img/thispersondoesnotexist.jpg" class="pfp-placeholder" alt="pasmoi">
            </div>
            <div class="info-combo">
                <div>
                    <h2 class="inblue-name">Duchesne Damien</h2>
                    <p class="inblue-name">Etudiant IFAPME Assistant Développeur</p>
                </div>
                <div class="inblue-button-dlcontact">
                    <button id="but1" class="function-btns" onclick="screamer()">Télecharger le CV</button>
                    <a href="#a1"><button id="but2" class="function-btns">Me contacter</button></a>
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

                <input id="a1" type="submit" value="Envoyer">
            </form>

        </div>
    </div>

    <footer>Copyright @2024</footer>
</body>
</html>