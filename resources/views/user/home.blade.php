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
                class="font-sans text-2xl font-bold text-merah hover:text-merah"
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
      <div class="mx-auto w-11/12 md:w-full">
        <div class="carousel relative rounded-xl bg-white shadow-2xl">
          <div
            class="carousel-inner relative w-full overflow-hidden rounded-xl"
          >
            <!--Slide 1-->
            <input
              class="carousel-open"
              type="radio"
              id="carousel-1"
              name="carousel"
              aria-hidden="true"
              hidden=""
              checked="checked"
            />
            <div class="carousel-item absolute opacity-0" style="height: 50vh">
              <div class="flex h-full w-full bg-cover justify-center items-center bg-slider1">
                <h1 
                  class="mb-10 text-center font-sans text-2xl md:text-5xl font-bold text-white"
                >
                  Selamat Datang Di TukuKoi
                </h1>
              </div>
            </div>
            <label
              for="carousel-3"
              class="prev control-1 absolute inset-y-0 left-0 z-10 my-auto ml-2 hidden h-10 w-10 cursor-pointer rounded-full bg-white text-center text-3xl font-bold leading-tight text-black hover:bg-merah hover:text-white md:ml-10"
              >‹</label
            >
            <label
              for="carousel-2"
              class="next control-1 absolute inset-y-0 right-0 z-10 my-auto mr-2 hidden h-10 w-10 cursor-pointer rounded-full bg-white text-center text-3xl font-bold leading-tight text-black hover:bg-merah hover:text-white md:mr-10"
              >›</label
            >

            <!--Slide 2-->
            <input
              class="carousel-open"
              type="radio"
              id="carousel-2"
              name="carousel"
              aria-hidden="true"
              hidden=""
            />
            <div class="carousel-item absolute opacity-0" style="height: 50vh">
              <div class="flex h-full w-full bg-cover justify-center items-center bg-slider2">
                <h1
                  class="mb-10 text-center font-sans text-5xl font-bold text-white"
                >
                  Selamat Datang Di TukuKoi
                </h1>
              </div>
            </div>
            <label
              for="carousel-1"
              class="prev control-2 absolute inset-y-0 left-0 z-10 my-auto ml-2 hidden h-10 w-10 cursor-pointer rounded-full bg-white text-center text-3xl font-bold leading-tight text-black hover:bg-merah hover:text-white md:ml-10"
              >‹</label
            >
            <label
              for="carousel-3"
              class="next control-2 absolute inset-y-0 right-0 z-10 my-auto mr-2 hidden h-10 w-10 cursor-pointer rounded-full bg-white text-center text-3xl font-bold leading-tight text-black hover:bg-merah hover:text-white md:mr-10"
              >›</label
            >

            <!--Slide 3-->
            <input
              class="carousel-open"
              type="radio"
              id="carousel-3"
              name="carousel"
              aria-hidden="true"
              hidden=""
            />
            <div class="carousel-item absolute opacity-0" style="height: 50vh">
              <div class="flex h-full w-full bg-cover justify-center items-center bg-slider3">
                <h1
                  class="mb-10 text-center font-sans text-5xl font-bold text-white"
                >
                  Selamat Datang Di TukuKoi
                </h1>
              </div>
            </div>
            <label
              for="carousel-2"
              class="prev control-3 absolute inset-y-0 left-0 z-10 my-auto ml-2 hidden h-10 w-10 cursor-pointer rounded-full bg-white text-center text-3xl font-bold leading-tight text-black hover:bg-merah hover:text-white md:ml-10"
              >‹</label
            >
            <label
              for="carousel-1"
              class="next control-3 absolute inset-y-0 right-0 z-10 my-auto mr-2 hidden h-10 w-10 cursor-pointer rounded-full bg-white text-center text-3xl font-bold leading-tight text-black hover:bg-merah hover:text-white md:mr-10"
              >›</label
            >

            <!-- Add additional indicators for each slide-->
            <ol class="carousel-indicators">
              <li class="mr-3 inline-block">
                <label
                  for="carousel-1"
                  class="carousel-bullet block cursor-pointer text-4xl text-white hover:text-merah"
                  >•</label
                >
              </li>
              <li class="mr-3 inline-block">
                <label
                  for="carousel-2"
                  class="carousel-bullet block cursor-pointer text-4xl text-white hover:text-merah"
                  >•</label
                >
              </li>
              <li class="mr-3 inline-block">
                <label
                  for="carousel-3"
                  class="carousel-bullet block cursor-pointer text-4xl text-white hover:text-merah"
                  >•</label
                >
              </li>
            </ol>
          </div>
        </div>
      </div>
      <div class="flex justify-center pt-20">
        <h1 class="font-sans text-3xl font-semibold text-black">
          Silahkan Cari Ikan Koi Yang Anda Inginkan
        </h1>
      </div>
      <div class="mt-5 flex justify-center">
        <div class="relative mx-auto pt-2 text-gray-600">
          <input
            class="h-10 rounded-lg border-2 border-gray-500 bg-white px-16 py-6 pr-16 font-sans text-xl focus:outline-none"
            type="search"
            name="search"
            placeholder="Masukkan Nama Koi"
          />
          <button type="submit" class="absolute right-0 top-0 mr-4 pt-6">
            <svg
              class="h-5 w-5 fill-current text-gray-600"
              xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink"
              version="1.1"
              id="Capa_1"
              x="0px"
              y="0px"
              viewBox="0 0 56.966 56.966"
              style="enable-background: new 0 0 56.966 56.966"
              xml:space="preserve"
              width="512px"
              height="512px"
            >
              <path
                d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"
              />
            </svg>
          </button>
        </div>
      </div>
    </div>
    <!-- End Hero -->

    <!-- Koi Card -->
    <div class="container mx-auto py-10">
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
    <!-- End Koi Card -->

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
