<?php

session_start();
$_SESSION = $_POST;

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>My form contact</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

    <?php

        $error = array();

        if($_POST)
        {

            if(empty($_POST['name'])){
                $error['name'] = "Vous devez renseigner un nom.";
            }

            if(empty($_POST['select'])){
                $error['select'] = "Vous devez choisir un sujet.";
            }

            if(empty($_POST['email'])){
                $error['email'] = "Vous devez renseigner votre email.";
            }

            if(empty($_POST['phone'])){
                $error['phone'] = "Vous devez renseigner votre téléphone.";
            }

            if(strlen($_POST['message'])<20)
            {
                $error['message'] = "Votre message doit contenir au moins 20 caractères.";
            }

            if(count($error)==0){
                header('location:confirmation.php');
            }

        }
     ?>

    <form id="contact_form" action="index.php" method="POST">

        <div class="form-part">
            <label for="name">Nom :</label>
            <input id="name" type="text" name="name" value="<?php echo isset($_POST["name"]) ? $_POST["name"] : ''; ?>">
            <p class="error_message"><?php if (isset($error['name'])){echo $error['name'];} ?></p>
        </div>

        <div class="form-part">
            <label for="email">Email :</label>
            <input id="email" type="email" name="email" value="<?php echo isset($_POST["email"]) ? $_POST["email"] : ''; ?>">
            <p class="error_message"><?php if (isset($error['email'])){echo $error['email'];} ?></p>
        </div>

        <div class="form-part">
            <label for="tel">Tél.:</label>
            <input id="email" type="tel" name="phone" pattern="^(?:0|\(?\+33\)?\s?|0033\s?)[1-79](?:[\.\-\s]?\d\d){4}$" value="<?php echo isset($_POST["phone"]) ? $_POST["phone"] : ''; ?>">
            <p class="error_message"><?php if (isset($error['phone'])){echo $error['phone'];} ?></p>

        </div>

        <div class="form-part">
            <label for="select">Sujet :</label>
            <select id="select" name="select">
                <option value="">Choisissez un sujet</option>
                <option value="Question">Question</option>
                <option value="Offre d'emploi">Offre d'emploi</option>
                <option value="Contact commercial">Contact commercial</option>
                <option value="Autre">Autre</option>
            </select>
            <p class="error_message"><?php if (isset($error['select'])){echo $error['select'];} ?></p>
        </div>

        <div class="form-part">
            <label for="message">Message :</label>
            <textarea id="message" name="message"><?php echo isset($_POST["message"]) ? $_POST["message"] : ''; ?></textarea>
            <p class="error_message"><?php if (isset($error['message'])){echo $error['message'];} ?></p>
        </div>

        <div class="form-part">
            <button type="submit" id="submit" >Envoyer votre message</button>
        </div>

    </form>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script type="text/javascript">

        $(document).ready(function(){

            $('#select').val('<?php echo $_POST['select'];?>');

        });
    </script>

</body>
</html>

