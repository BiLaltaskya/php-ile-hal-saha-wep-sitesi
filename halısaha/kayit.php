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
            <a href="index.html"><i class="fa-solid fa-house-chimney ikon"></i>Anasayfa</a>
            <a href=""><i class="fa-solid fa-info ikon"></i>Hakkımızda</a>
            <a href=""><i class="fa-solid fa-newspaper"></i>Haberler</a>
            <a href=""><i class="fa-solid fa-phone ikon"></i>letişim</a>
            <a href="giris.php"><i class="fa-solid fa-right-to-bracket ikon"></i>Giriş Yap/Kayıt Ol</a>
        </nav>

    </section>
    <form action="kayit.php" id="log" method="post">
        <div id="logsol">
            <div id="solopac"></div>
        </div>
        <div id="logsag">
            <div id="form1">
                <input type="text" name="adsoy" id="logform" placeholder="Ad Soyad" required>
                <input type="email" name="mail" id="logform" placeholder="Email" required>
                <input type="text" name="tel" id="logform" placeholder="Telefon" required>
                <input type="text" name="adres" id="logform" placeholder="Adres" required>
                <input type="password" name="sifre" id="logform" placeholder="Şifre" required>
                <input type="password" name="onay" id="logform" placeholder="Sifre Onayla" required>
                <input type="submit" style="cursor: pointer;" value="Kayıt Ol" id="logform">
            </div>
        </div>
    </form>
    <a href="admingiris.php"> <input type="submit" style="cursor: pointer;" id="logformadmin" value="Admin Girişi" req> </a>
</body>
</html>
<?php
include("baglan.php");

if (isset($_POST["adsoy"], $_POST["mail"], $_POST["sifre"], $_POST["onay"], $_POST["tel"], $_POST["adres"])) {
    $adsoy = $_POST["adsoy"];
    $mail = $_POST["mail"];
    $telefon = $_POST["tel"];
    $adres = $_POST["adres"];
    $sifre = $_POST["sifre"];
    $onay = $_POST["onay"];
    if ($sifre = $onay) {
        $ekle = "INSERT INTO uye_tab(uye_ad, uye_sifre, uye_tlf, uye_mail, uye_adres) VALUES ('".$adsoy."','".$sifre."','".$telefon."','".$mail."','".$adres."')";
            if ($baglan->query($ekle) == true) 
            {
            echo "<script>alert('Kayıt İştemini Başarı İle Gerçekleşti') </script>";
            }
            else{
                echo "<script>alert('Lütfen Uygun Bilgiler Giriniz') </script>";
            }
    }
}
?>