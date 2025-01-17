<?php
//INSERT INTO `kontak` (`id`, `email`, `pesan`) VALUES (NULL, 'email', 'pesan');
$host = "localhost"; // Alamat server Hostinger (ganti dengan info server Anda)
$username = "u594045982_user";     // Username MySQL
$password = "Nookstudio#404";      // Password MySQL
$database = "u594045982_NookStudio"; // Nama database

// Membuat koneksi
$conn = mysqli_connect($host, $username, $password, $database);

if( isset($_POST["submit"])){
    $email = $_POST["email"];
    $pesan = $_POST["pesan"];
    mysqli_query($conn, "INSERT INTO `kontak` (`id`, `email`, `pesan`) VALUES (NULL, '$email', '$pesan')");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page Nook Studio</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="icon" href="Asset/Icon-Secondary.png" type="image/x-icon"/>
</head>
<body>
    <nav id="navigation" class="hor-auto nav-pad nav-style">
        <img src="Asset/Logo1_Nook_Studio.svg" alt="Logo_Nook_Studio" class="logo-nav" id="logoPrimary">
        <img src="Asset/Logo2_Nook_Studio.svg" alt="Logo_Nook_Studio" class="logo-nav" id="logoSecondary">
        <div class="hor-auto menu poppins-medium">
            <a href="#home" id="menuHome">Home</a>
            <a href="#taglineSection" id="menuAbout">About</a>
            <a href="#serviceSection" id="menuService">Service</a>
            <a href="#contactSection" id="menuContact">Contact</a>
        </div>
    </nav>
    <div id="home" class="home-section hor-auto absolute">
        <div class="text-action">
            <div class="welcome">
                <h1 class="poppins-medium heading-xl">Transformasi Data Menjadi Solusi</h1>
                <p class="poppins-regular body-l text">Selamat datang di Nook Studio, mitra terpercaya Anda untuk layanan data analysis. Kami berkomitmen membantu Anda memahami data lebih dalam dan membuat keputusan berbasis informasi yang akurat.</p>
            </div>
            <div class="group-button poppins-medium body-l">
                <a href="#serviceSection" class="cta-button">Layanan</a>
                <a href="#taglineSection">Tentang Kami</a>
            </div>
        </div>
        <img src="Asset/robot-image.svg" alt="Robot_Ilustration" class="image-robot">

        <div class="strip absolute strip-kiri" id="kiri">
            <div class="strip-image strip-kiri-image"></div>
        </div>
        <div class="strip absolute strip-kanan" id="kanan">
            <div class="strip-image strip-kanan-image"></div>
        </div>
    </div>

    <!-- Start Perubahan -->

    <div id="taglineSection" class="tagline-section absolute ver-auto">
        <span id="tagline" class="span-one poppins-medium heading-s">Your Data 📊, Our Expertise 💡, Better Outcomes 📈</span>
    </div>

    <div id="aboutSection" class="about-section absolute hor-auto">
        <div class="group-image ver-auto">
                <div class="atas hor-auto">
                    <div class="kiri"><div id="imageAboutLeftTop"></div></div>
                    <div class="kanan"><div id="imageAboutRightTop"></div></div>
                </div>
                <div class="bawah hor-auto">
                    <div class="kiri"><div id="imageAboutLeftBottom"></div></div>
                    <div class="kanan"><div id="imageAboutRightBottom"></div></div>
                </div>
            </div>
    
        <div class="text">
            <div class="gap-4">
                <h2 class="heading-m poppins-medium">Tentang Kami</h2>
                <a style="text-decoration: none"
                href="https://www.google.com/maps/place/Medan,+Kota+Medan,+Sumatera+Utara/@3.6426141,98.5046779,11z/data=!3m1!4b1!4m6!3m5!1s0x303131cc1c3eb2fd:0x23d431c8a6908262!8m2!3d3.5951956!4d98.6722227!16zL20vMDFfZF9u?entry=ttu&g_ep=EgoyMDI0MTIxMS4wIKXMDSoASAFQAw%3D%3D" class="body-l poppins-regular">
                    <img src="Asset/iconLocation.svg" alt="icon_location"> 
                    <span>Medan, Indonesia</span>
                </a>            
                <p>Kami adalah tim muda yang penuh semangat, siap membantu Anda memahami data secara mendalam dengan pendekatan yang ramah dan profesional, sehingga Anda dapat mengambil keputusan yang lebih cerdas dan strategis.</p>
            </div>
            <a href="#" class="button">Tim Kami</a>
        </div>
        
    </div>

    <!-- End Of Perubahan -->

    <div id="serviceSection" class="service-section absolute">

        <div class="strip absolute strip-kiri" id="kiriSecondary">
            <div class="strip-image strip-kiri-image"></div>
        </div>
        <div class="strip absolute strip-kanan" id="kananSecondary">
            <div class="strip-image strip-kanan-image"></div>
        </div>
    </div>
    <div id="contactSection" class="contact-section absolute hor-auto">
        <div class="img"></div>
        <div class="text">
            <h2 class="heading-m poppins-medium">Kontak</h2>
            <span class="body-m poppins-regular">Ayo kirimkan pesan pada kami!</span>
            <form action="" method="post" class="margin-top-32">
                <label for="email" class="body-m poppins-medium">Email</label>
                <input type="email" name="email" id="email" placeholder="Masukkan Email" class="body-s poppins-regular margin-top-8">
                <label for="email" class="body-m poppins-medium jaraklabel">Pesan</label>
                <textarea name="pesan" id="pesan" class="body-s poppins-regular margin-top-8" rows="4" placeholder="Tuliskan kesan, kesan, komentar atau saran anda disini"></textarea>
                <input type="submit" name="submit" class="button-submit body-l poppins-medium margin-top-32">
            </form>
        </div>
    </div>
    <div id="footer" class="footer-section absolute ver-auto">
        <div class="footer-detail hor-auto">
            <div class="logoFooter ver-auto">
                <img src="Asset/Logo_Footer_Nook_Studio.svg" alt="logo footer nook studio" srcset="">
                <div class="text ver-auto">
                    <span class="poppins-regular body-l">Our Data, Our Expertise,</span>
                    <span class="poppins-regular body-l">Better Outcomes.</span>
                </div>
            </div>
            <div class="socialMediaFooter">
                <span class="body-l poppins-regular">Social Media</span>
                <div class="text ver-auto">
                    <a href="https://www.instagram.com/nook.studio_" target="_blank" class="body-m hor-auto"><img src="Asset/icon_instagram.svg" alt=""><span class="margin-left-8">@nook.studio_</span></a>
                    <a href="https://mail.google.com/mail/u/0/#search/studionook0%40gmail.com?compose=new" target="_blank" class="body-m hor-auto"><img src="Asset/icon_email.svg" alt=""><span class="margin-left-8">studionook0@gmail.com</span></a>
                    <a href="https://wa.me/6282363158916" target="_blank" class="body-m hor-auto"><img src="Asset/icon_phone.svg" alt=""><span class="margin-left-8">+622363158916</span></a>
                </div>
            </div>
            <div class="getInTouchFooter">
                <span class="body-l poppins-regular">Get In Touch</span>
                <p class="poppins-regular body-m">Jl. M.H Thamrin No.140, Pusat Ps., Kec. Medan Kota, Kota Medan, Sumatera Utara 20212</p>
            </div>
            <div class="nookMenuFooter">
                <span class="body-l poppins-regular">Nook Studio</span>
                <div class="text ver-auto">
                    <a href="#home" class="body-m hor-auto">Home</a>
                    <a href="#taglineSection" class="body-m hor-auto">About</a>
                    <a href="#serviceSection" class="body-m hor-auto">Service</a>
                    <a href="#contactSection" class="body-m hor-auto">Contact</a>
                    <a href="#" class="body-m hor-auto">Team</a>
                </div>
            </div>
        </div>
        <hr>
        <span>© 2024 Nook Studio</span>
    </div>
    <script src="script.js"></script>
</body>
</html>