<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap"
      rel="stylesheet"
    />
    <script
      src="https://kit.fontawesome.com/e8dac5929f.js"
      crossorigin="anonymous"
    ></script>
    <link rel="icon" href="./assets/img/lg_koi.png" type="image/png" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>TukuKoi</title>
  </head>
  <body>
    <!-- Navbar -->
    <div class="container mx-auto">
      <div class="flex items-center py-6 px-10 lg:px-0">
        <div class="w-3/12">
          <img src="{{ asset('assets/img/logo.png') }}" alt="" />
        </div>
        <div class="w-6/12">
          <ul class="flex justify-center space-x-10">
            <li>
              <a
                href=""
                class="font-sans text-2xl font-bold hover:text-merah"
                >Beranda</a
              >
            </li>
            <li>
              <a href="" class="font-sans text-2xl font-bold hover:text-merah"
                >Produk Koi</a
              >
            </li>
          </ul>
        </div>
        <div class="w-3/12 text-right">
          <a
            href=""
            class="rounded-xl bg-merah/80 px-10 py-3 font-sans text-2xl font-semibold text-white hover:border hover:border-merah hover:bg-white hover:text-merah"
            ><i class="fas fa-store mr-6"></i>Jual</a
          >
        </div>
      </div>
    </div>
    <!-- End Navbar -->

    <!-- Hero -->
    <div class="container mx-auto py-10">
      <div class="md:flex md:w-10/12 mx-auto items-center">
        <div class="md:w-4/12 mx-20">
            <img src="{{ asset('assets/img/produk_koi1.jpg') }}" class="rounded-xl" alt="foto_produk">
        </div>
        <div class="text-center md:text-left mt-10 md:w-8/12">
            <div class="border-b border-gray-200">
                <h1 class="font-sans font-semibold text-2xl mb-5">Koi Import Tancho Showa (Serifikat Miyako) 23cm</h1>
                <h2 class="font-sans font-bold text-3xl pb-3">Rp.1.500.000</h2>
            </div>
           <div class="border-b border-gray-200 py-3">
               <p class="font-semibold text-xl">Jenis : Showa</p>
               <p class="font-semibold text-xl">Gender : Betina </p>
               <p class="font-semibold text-xl">Size : 23cm</p>
           </div>
           <div class="border-b border-gray-200 py-3">
                <h1 class="font-bold text-lg mb-3">Penjual :</h1>
                <a href="" class="flex items-center justify-center md:justify-start font-sans font-bold text-lg text-merah mb-3"
                ><img
                  src="./assets/img/lg_koi.png"
                  class="md:mr-5"
                  alt=""
                />
                TukuKoi</a>
                <h1 class="font-bold text-lg">Pengiriman :</h1>
                <div class="flex justify-center md:justify-start items-center mt-3">
                    <i class="fas fa-map-marker-alt text-black/60 mr-3"></i>
                    <h1 class="text-lg">Dikirim Dari <span class="font-bold">Kota Blitar</span></h1>
                </div>
           </div>
        </div>
      </div>
    </div>
    <!-- End Hero -->

    <!-- Detail Produk -->
    <div class="container mx-auto py-10">
      <h1 class="font-bold text-center text-5xl">Foto / Video Produk</h1>
      <div class="flex w-10/12 mx-auto py-10 space-x-5">
        <div class="w-4/12">
            <img src="{{ asset('assets/img/produk_koi1.jpg') }}" class="rounded-xl">
        </div>
        <div class="w-4/12">
            <img src="{{ asset('assets/img/produk_koi1.jpg') }}" class="rounded-xl">
        </div>
        <div class="w-4/12">
            <img src="{{ asset('assets/img/produk_koi1.jpg') }}" class="rounded-xl">
        </div>
      </div>
      <div class="flex w-10/12 mx-auto space-x-5">
        <div class="w-6/12">
            <img src="{{ asset('assets/img/produk_koi1.jpg') }}" class="rounded-xl">
        </div>
        <div class="w-6/12">
            <img src="{{ asset('assets/img/produk_koi1.jpg') }}" class="rounded-xl">
        </div>
      </div>
    </div>
    <!-- End Detail Produk-->

    <!-- Footer -->
    <div class="container mx-auto py-10">
      <div class="mx-auto w-6/12">
        <div class="mb-5 flex justify-center">
          <img src="./assets/img/logo.png" alt="logo-footer" />
        </div>
        <div class="flex justify-center">
          <h1 class="text-2xl font-bold">Social Media :</h1>
        </div>
        <div class="mt-5 flex justify-center space-x-12">
          <a href="https://www.instagram.com/gloire.webs/" target="_blank"
            ><i class="fab fa-instagram text-5xl hover:text-merah"></i
          ></a>
          <a href="" target="_blank"
            ><i class="fab fa-facebook text-5xl hover:text-merah"></i
          ></a>
          <a href="" target="_blank"
            ><i class="fab fa-twitter text-5xl hover:text-merah"></i
          ></a>
        </div>
      </div>
    </div>
    <!-- End Footer -->
  </body>
</html>
