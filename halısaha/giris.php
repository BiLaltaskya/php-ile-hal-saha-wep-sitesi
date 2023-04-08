<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href="css/style.css">
    <script src="https://kit.fontawesome.com/57f97d76cc.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&family=Roboto:ital,wght@0,400;1,300&display=swap" rel="stylesheet">
</head>
<body>
    <section id="menu">

        <div id="logo">LOGO</div>
        <nav>
            <a href="index.php"><i class="fa-solid fa-house-chimney ikon"></i>Anasayfa</a>
            <a href=""><i class="fa-solid fa-info ikon"></i>Hakkımızda</a>
            <a href=""><i class="fa-solid fa-newspaper"></i>Haberler</a>
            <a href=""><i class="fa-solid fa-phone ikon"></i>letişim</a>
            <a href="giris.php"><i class="fa-solid fa-right-to-bracket ikon"></i>Giriş Yap/Kayıt Ol</a>
        </nav>

    </section>

    <from action="giris.php"  id="log">
        <div id="logsol">
            <div id="solopac"></div>
        </div>
        <div id="logsag">
            <div id="form">
                <input type="text" name="adsoy" id="logform" placeholder="Email" required>
                <input type="password" name="sifre" id="logform" placeholder="Şifre" required>
                <input type="submit" name="gönder" id="logform" style="cursor: pointer;" value="Giriş Yap" required>
                <a href="kayit.php"><input type="submit" style="cursor: pointer;" value="Kayıt Ol" id="logform"></a>
                <a href="admingiris.php"> <input type="submit" style="cursor: pointer;" id="logformadmin" value="Admin Girişi"> </a>
            </div>
        </div>
    </from>
</body>
</html>