<html>
    <head> 
        <meta charset="utf-8"> 
        <title>SIGN IN</title> 
        <link rel="stylesheet" href="./SIGN_IN.css">
    </head>
    <body>
        <header><h1>SE CONNECTER</h1></header>

        <div class="formulaire">
            <form action="Verification.php" method="post">
                <div class="form">
                <br><input type="text" name="pseudo" placeholder="insert your name here" maxlength="32" size="30" required="required"><br>
                <br><input type="password" name="motDePasse" placeholder="insert your password here" maxlength="32" size="30" required="required"><br>
                </div>
            <div class="buttons">
                <br>
                <button class="bot"  type="submit">CONNEXION</button>
            </div>
            <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Pseudo ou mot de passe incorrect</p>";
                }
                ?>
            </form>
        </div>
    </body>



</html>
