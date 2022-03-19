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
      <div class="md:flex md:w-10/12 mx-auto ">
        <div class="md:w-4/12 mx-20">
            <img src="{{ asset('assets/img/produk_koi1.jpg') }}" class="rounded-full" alt="foto penjual">
        </div>
        <div class="text-center md:text-left mt-10 md:w-8/12">
            <a href="" class="font-bold text-3xl text-merah">TukuKoi</a>
            <div class="flex justify-center md:justify-start items-center my-4">
                <i class="fas fa-map-marker-alt text-black/60 mr-3 text-2xl"></i>
                <p class="font-semibold text-2xl">Kota Blitar</p>
            </div>
            <p class="text-2xl mb-3">No. Handphone :  <span class="text-merah font-semibold">083833833833</span></p>
            <p class="text-2xl mb-10">Email :  <span class="text-merah font-semibold">tukukoi@gmail.com</span></p>
            <a
            href=""
            class="rounded-xl bg-black px-10 py-3 font-sans text-2xl font-semibold text-white hover:border  hover:bg-black/80 "
            ><i class="fab fa-whatsapp mr-6"></i>Hubungi Penjual</a>
        </div>
      </div>
    </div>
    <!-- End Hero -->

    <!-- Koi Card Penjual-->
    <div class="container mx-auto py-10">
      <h1 class="font-bold text-5xl py-10 text-center">Produk Penjual</h1>
      <div class="-mx-4 md:-mx-1 flex flex-wrap">
        <div class=" lg:w-3/12 2xl:w-3/12 md:w-4/12 sm:w-6/12  px-4 pb-8">
          <div class="rounded-lg bg-white shadow-lg">
            <img src="{{ asset('assets/img/slider1.png') }}" alt="" class="rounded-t-lg" />
            <div class="p-6">
              <h2 class="mb-2 text-2xl font-bold text-merah">
                Koi Tamasaba F1 Paren 9cm
              </h2>
              <a href="" class="flex items-center font-sans font-bold"
                ><img
                  src="./assets/img/lg_koi.png"
                  class="-ml-2 mr-2 mb-3"
                  alt=""
                />
                TukuKoi</a
              >
              <p class="mb-2 font-sans text-2xl font-bold text-black">
                Rp.400.000
              </p>

              <div class="mt-6">
                <a
                  href="#"
                  class="mt-3 rounded-xl bg-merah px-6 py-3 text-lg text-white"
                  >Detail Koi</a
                >
              </div>
            </div>
          </div>
        </div>
        <div class="lg:w-3/12 md:w-4/12 sm:w-6/12 px-4 pb-8">
          <div class="rounded-lg bg-white shadow-lg">
            <img src="{{ asset('assets/img/slider1.png') }}" alt="" class="rounded-t-lg" />
            <div class="p-6">
              <h2 class="mb-2 text-2xl font-bold text-merah">
                Koi Tamasaba F1 Paren 9cm
              </h2>
              <a href="" class="flex items-center font-sans font-bold"
                ><img
                  src="./assets/img/lg_koi.png"
                  class="-ml-2 mr-2 mb-3"
                  alt=""
                />
                TukuKoi</a
              >
              <p class="mb-2 font-sans text-2xl font-bold text-black">
                Rp.400.000
              </p>

              <div class="mt-6">
                <a
                  href="#"
                  class="mt-3 rounded-xl bg-merah px-6 py-3 text-lg text-white"
                  >Detail Koi</a
                >
              </div>
            </div>
          </div>
        </div>
        <div class="lg:w-3/12 md:w-4/12 sm:w-6/12 px-4 pb-8">
          <div class="rounded-lg bg-white shadow-lg">
            <img src="{{ asset('assets/img/slider1.png') }}" alt="" class="rounded-t-lg" />
            <div class="p-6">
              <h2 class="mb-2 text-2xl font-bold text-merah">
                Koi Tamasaba F1 Paren 9cm
              </h2>
              <a href="" class="flex items-center font-sans font-bold"
                ><img
                  src="./assets/img/lg_koi.png"
                  class="-ml-2 mr-2 mb-3"
                  alt=""
                />
                TukuKoi</a
              >
              <p class="mb-2 font-sans text-2xl font-bold text-black">
                Rp.400.000
              </p>

              <div class="mt-6">
                <a
                  href="#"
                  class="mt-3 rounded-xl bg-merah px-6 py-3 text-lg text-white"
                  >Detail Koi</a
                >
              </div>
            </div>
          </div>
        </div>
        <div class="lg:w-3/12 md:w-4/12 sm:w-6/12 px-4 pb-8">
          <div class="rounded-lg bg-white shadow-lg">
            <img src="{{ asset('assets/img/slider1.png') }}" alt="" class="rounded-t-lg" />
            <div class="p-6">
              <h2 class="mb-2 text-2xl font-bold text-merah">
                Koi Tamasaba F1 Paren 9cm
              </h2>
              <a href="" class="flex items-center font-sans font-bold"
                ><img
                  src="./assets/img/lg_koi.png"
                  class="-ml-2 mr-2 mb-3"
                  alt=""
                />
                TukuKoi</a
              >
              <p class="mb-2 font-sans text-2xl font-bold text-black">
                Rp.400.000
              </p>

              <div class="mt-6">
                <a
                  href="#"
                  class="mt-3 rounded-xl bg-merah px-6 py-3 text-lg text-white"
                  >Detail Koi</a
                >
              </div>
            </div>
          </div>
        </div>
        <div class="lg:w-3/12 md:w-4/12 sm:w-6/12 px-4 pb-8">
          <div class="rounded-lg bg-white shadow-lg">
            <img src="{{ asset('assets/img/slider1.png') }}" alt="" class="rounded-t-lg" />
            <div class="p-6">
              <h2 class="mb-2 text-2xl font-bold text-merah">
                Koi Tamasaba F1 Paren 9cm
              </h2>
              <a href="" class="flex items-center font-sans font-bold"
                ><img
                  src="./assets/img/lg_koi.png"
                  class="-ml-2 mr-2 mb-3"
                  alt=""
                />
                TukuKoi</a
              >
              <p class="mb-2 font-sans text-2xl font-bold text-black">
                Rp.400.000
              </p>

              <div class="mt-6">
                <a
                  href="#"
                  class="mt-3 rounded-xl bg-merah px-6 py-3 text-lg text-white"
                  >Detail Koi</a
                >
              </div>
            </div>
          </div>
        </div>
        <div class="lg:w-3/12 md:w-4/12 sm:w-6/12 px-4 pb-8">
          <div class="rounded-lg bg-white shadow-lg">
            <img src="{{ asset('assets/img/slider1.png') }}" alt="" class="rounded-t-lg" />
            <div class="p-6">
              <h2 class="mb-2 text-2xl font-bold text-merah">
                Koi Tamasaba F1 Paren 9cm
              </h2>
              <a href="" class="flex items-center font-sans font-bold"
                ><img
                  src="./assets/img/lg_koi.png"
                  class="-ml-2 mr-2 mb-3"
                  alt=""
                />
                TukuKoi</a
              >
              <p class="mb-2 font-sans text-2xl font-bold text-black">
                Rp.400.000
              </p>

              <div class="mt-6">
                <a
                  href="#"
                  class="mt-3 rounded-xl bg-merah px-6 py-3 text-lg text-white"
                  >Detail Koi</a
                >
              </div>
            </div>
          </div>
        </div>
        <div class="lg:w-3/12 md:w-4/12 sm:w-6/12 px-4 pb-8">
          <div class="rounded-lg bg-white shadow-lg">
            <img src="{{ asset('assets/img/slider1.png') }}" alt="" class="rounded-t-lg" />
            <div class="p-6">
              <h2 class="mb-2 text-2xl font-bold text-merah">
                Koi Tamasaba F1 Paren 9cm
              </h2>
              <a href="" class="flex items-center font-sans font-bold"
                ><img
                  src="./assets/img/lg_koi.png"
                  class="-ml-2 mr-2 mb-3"
                  alt=""
                />
                TukuKoi</a
              >
              <p class="mb-2 font-sans text-2xl font-bold text-black">
                Rp.400.000
              </p>

              <div class="mt-6">
                <a
                  href="#"
                  class="mt-3 rounded-xl bg-merah px-6 py-3 text-lg text-white"
                  >Detail Koi</a
                >
              </div>
            </div>
          </div>
        </div>
        <div class="lg:w-3/12 md:w-4/12 sm:w-6/12 px-4 pb-8">
          <div class="rounded-lg bg-white shadow-lg">
            <img src="{{ asset('assets/img/slider1.png') }}" alt="" class="rounded-t-lg" />
            <div class="p-6">
              <h2 class="mb-2 text-2xl font-bold text-merah">
                Koi Tamasaba F1 Paren 9cm
              </h2>
              <a href="" class="flex items-center font-sans font-bold"
                ><img
                  src="./assets/img/lg_koi.png"
                  class="-ml-2 mr-2 mb-3"
                  alt=""
                />
                TukuKoi</a
              >
              <p class="mb-2 font-sans text-2xl font-bold text-black">
                Rp.400.000
              </p>

              <div class="mt-6">
                <a
                  href="#"
                  class="mt-3 rounded-xl bg-merah px-6 py-3 text-lg text-white"
                  >Detail Koi</a
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Koi Card Penjual-->

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
