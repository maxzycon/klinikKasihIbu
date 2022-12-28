<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klinik Kasih Ibu</title>
    <!-- bootstrap cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.3/css/bootstrap-grid.min.css">
    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!-- custom css file link -->
    <link rel="stylesheet" href="{{asset("assets/style2.css")}}">
</head>
<body>
<header style="background-color: white">
    <div class="container">
        <a href="#" class="logo"><span>K</span>linik<span> K</span>asih<span> I</span>bu.</a>
        <nav class="nav">
            <ul>
                <li><a href="" style="margin-right: 20px;">Home</a></li>
                <li><a href="{{ route("login") }}">Login</a></li>
                <li><a href="{{ route("register") }}" class="daftar">Daftar</a></li>
            </ul>
        </nav>
    </div>
</header>
<!-- akhir dari container -->
<section class="home" id="">
    <div class="container">
        <div  class="row min-vh-100 align-items-center text-center text-md-left">
            <div class="col-md-6 pr-md-5" data-aos="zoom-in">
                <img src="{{ asset("assets/images/Doctors-bro (1).svg") }}" width="450px" height="450px" alt="">
            </div>
            <div class="col-md-6 pl-md-5 content" data-aos="fade-left">
                <h1>STAY SAFE STAY HEALTY</h1>
                <div class="motto">CARING FOR YOU</div>
            </div>
        </div>
    </div>
</section>
<!-- akhir dari session home -->

<!-- awal dari session about-->
<section class="about" id="about" style="margin: 100px 100px;border-radius: 30px">
    <div class="container">
        <div class="row min-vh-100 align-items-center">
            <div class="col-md-6 content" data-aos="fade-right">
                <h1>Layanan Kami</h1>
                <div class="box">
                    <h3> <i class="fas fa-ambulance"></i> ambulance services </h3>
                    <p>Layanan ambulance yang stand by 24 jam</p>
                </div>
                <div class="box">
                    <h3> <i class="fas fa-procedures"></i> emergency rooms </h3>
                    <p>Layanan kamar darurat untuk pasien gawat darurat</p>
                </div>
                <div class="box">
                    <h3> <i class="fas fa-stethoscope"></i> free check-ups </h3>
                    <p>Layanan cek kesehatan gratis</p>
                </div>
            </div>

            <div class="col-md-6 d-none d-md-block" data-aos="fade-left">
                <img src="{{ asset("assets/images/nurse.png") }}" width="100%" alt="">
            </div>
        </div>

    </div>
</section>
<!-- akhir dari session about-->
<section class="counter" style="margin: 100px 0px">
    <div class="container">

        <div class="box-container">
            <div class="box" data-aos="fade-up">
                <i class="fa fa-user-md" aria-hidden="true"></i>
                <span>20+</span>
                <h3>Dokter</h3>
            </div>

            <div class="box" data-aos="fade-up">
                <i class="fas fa-smile"></i>
                <span>500+</span>
                <h3>Pasien puas</h3>
            </div>

            <div class="box" data-aos="fade-up">
                <i class="fas fa-procedures"></i>
                <span>12+</span>
                <h3>fasilitas rawat inap</h3>
            </div>
            <div class="box" data-aos="fade-up">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>24/7</span>
                <h3>Pelayanan 24 Jam</h3>
            </div>
            <div class="box" data-aos="fade-up">
                <i class="fa fa-ambulance" aria-hidden="true"></i>
                <span>Ambulance</span>
                <h3>Layanan Ambulance</h3>
            </div>

        </div>

    </div>

</section>
<!-- akhir dari section counter, isi nya adalah icon  -->
<section class="footer mt-5">
    <div class="container">
        <div class="row" style="padding-top: 50px; padding-bottom: 50px">
            <div class="col-md-4">
                <a href="#" class="logo"><span>K</span>linik<span> K</span>asih<span> I</span>bu.</a>
                <p style="font-size: 18px">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur nemo porro quasi minima consequuntur dolorum, quas amet in autem id?</p>
            </div>

            <div class="col-md-4 text-center" data-aos="fade-up">
                <h3>links</h3>
                <a href="#">home</a>
                <a href="#">about</a>
                <a href="#">facility</a>
                <a href="#">review</a>
                <a href="#">contact</a>
                <a href="#">post</a>
            </div>

            <div class="col-md-4 text-center" data-aos="fade-left">
                <h3>share</h3>
                <a href="#">facebook</a>
                <a href="#">twitter</a>
                <a href="#">instagram</a>
            </div>

        </div>

    </div>
</section>

</body>
</html>
