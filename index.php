<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page || Wak Portofolio</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <?php include 'header.php' ?>
    <div class="mini-container">
        <div class="contentbody">
            <div class="col-2">
                <div class="isi">
                    <h1>Hi I Am</h1>
                    <h1 class="heh">Wyasana Aji K W</h1>
                    <p>I am a Junior BackEnd Developer.</p>
                </div>
                <div class="icon">
                    <ul>
                        <li><button class="butCV">Download CV</button></li>
                        <li><a href="https://wa.me/6285741358179"><i class="bi bi-whatsapp"></i></a></li>
                        <li><a href="https://www.instagram.com/wysnaa_?igsh=cHFzd2ozMW1kdzNx&utm_source=qr"><i class="bi bi-instagram"></i></a></li>
                        <li><a href="https://www.linkedin.com/in/wyasana12"><i class="bi bi-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-2">
                <img src="src/img/profil3.png" alt="BE Dev">
            </div>
        </div>
        <div class="infomySkill">
            <div class="col-5">
            <h3>My Tech Stack</h3>
                <ul>
                    <li><img src="./src/img/html.png" alt="html"></li>
                    <li><img src="./src/img/css.png" alt="css"></li>
                    <li><img src="./src/img/js.png" alt="js"></li>
                    <li><img src="./src/img/php.png" alt="php" style="height: 40px;"></li>
                    <li><img src="./src/img/github.png" alt="github"></li>
                </ul>
            </div>
        </div>
        <div id="assignment">
            <div class="col-3">
                <div class="tugas">
                    <h3>Tugas 01 Caesar Cipher dan Pigpen Cipher</h3>
                    </br>
                    <a href="./src/Tugas01_Wyasana Aji Kusuma Wardana_V3423087.pdf">Download assignment</a>
                </div>
                <div class="tugas">
                    <h3>Tugas</h3>
                    </br>
                    <a href="./src/Tugas01_Wyasana Aji Kusuma Wardana_V3423087.pdf">Download assignment</a>
                </div>
                <div class="tugas">
                    <h3>Tugas</h3>
                    </br>
                    <a href="./src/Tugas01_Wyasana Aji Kusuma Wardana_V3423087.pdf">Download assignment</a>
                </div>
            </div>
        </div>
        <div class="myContact">
            <div class="aboutMe">
                <h4>About Me</h4>
                <p>Saya adalah mahasiswa semester 3 dari d3 teknik informatika universitas sebelas maret. Saat ini, saya sedang mempelajari beberapa bahasa pemrograman dan yang paling utama saya belajar mengeni backend developer</p>
            </div>
            <div class="sendEmail">
                <form action="https://getform.io/f/bnlegwkb" method="POST">
                <input type="text" name="Name" placeholder="Input your name" required/>
                <input type="email" name="Email" placeholder="Input your email" required/>
                <textarea name="Message" rows="6" placeholder="Input your message "></textarea>
                <button type="submit" class="btn2">Send Message</button>
                </form>
            </div>
        </div>
        <div class="copy">

        </div>
    </div>
    <script>
        // Membuka modal
        function openModal(modalId) {
            document.getElementById(modalId).style.display = "block";
        }

        // Menutup modal
        function closeModal(modalId) {
            document.getElementById(modalId).style.display = "none";
        }

        // Menutup modal jika user klik di luar modal
        window.onclick = function(event) {
            const modals = document.getElementsByClassName("modal");
            for (let i = 0; i < modals.length; i++) {
                if (event.target == modals[i]) {
                    modals[i].style.display = "none";
                }
            }
        }
    </script>

</body>

</html>