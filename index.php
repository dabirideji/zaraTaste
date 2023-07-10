<?php 
session_start()
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Font Style -->
    <link rel="stylesheet" href="assets/plugins/fonts/fonts.css" />
    <!-- Tailwind CSS a -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Tailwind Customization -->
    <script>
      tailwind.config = {
        theme: {
          colors: {
            rose: "#dd2760",
            rose1: "#ff3f7c",
            rose2: "#ffecf2",
            black: "#212121",
            white: "#ffffff",
            gray: "#dcdcdc",
          },
          screens: {
            sm: "500px",
            // => @media (min-width: 500px) { ... }

            md: "640px",
            // => @media (min-width: 640px) { ... }

            lg: "1024px",
            // => @media (min-width: 1024px) { ... }

            xl: "1280px",
            // => @media (min-width: 1280px) { ... }

            "2xl": "1536px",
            // => @media (min-width: 1536px) { ... }
          },
        },
      };
    </script>
    <!-- Font Awesome icons -->
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css" />
    <!-- Vanilla CSS -->
    <link rel="stylesheet" href="style/style.css" />
    <!-- JQuery Library -->
    <script src="assets/plugins/script/jquery.js"></script>

    <title>Zara Taste</title>
  </head>

  <body class="selection:bg-rose1 selection:text-white">
    <!-- Navbar -->
    <nav class="h-12 w-full">
      <div class="container mx-auto px-4 flex justify-between mt-3">
        <div class="">
          <a
            href="#"
            class="text-rose1 text-2xl md:text-3xl font-bold tracking-tighter"
            >ZARA TASTE</a
          >
        </div>
        <div class="space-x-9 hidden lg:flex">
          <a href="#" class="text-rose1 text-lg font-semibold hover:text-rose1"
            >Home
          </a>
          <a href="" class="text-black text-lg font-semibold hover:text-rose1"
            >Product</a
          >
          <a href="" class="text-black text-lg font-semibold hover:text-rose1"
            >Feedback</a
          >
          <a href="" class="text-black text-lg font-semibold hover:text-rose1"
            >Contact</a
          >
        </div>

        <div class="space-x-4 hidden lg:flex">
          <div>
            <i class="fa-solid fa-phone text-rose1"></i>
            <span class="text-black text-lg font-bold">+234 999999999</span>
          </div>
        </div>

        <div class="block lg:hidden mt-2">
          <button onclick="toggleBtn()">
            <i class="fa-solid fa-bars text-black fa-xl"></i>
          </button>
        </div>
      </div>
      <h1 style="font-size: 30px; font-family:'Times New Roman', Times, serif; font-weight:900;">
      <?php
      if(isset($_SESSION['userid'])){
        // Display the username
        echo 'Welcome, ' . $_SESSION['userid'] . '!';
    }else{
        // Username is not set, redirect to the login page
        header("Location: login.php");
        exit();
    }
      
      ?>
      </h1>
     
    </nav>

    <!-- Navbar Ends -->

    <!-- Hero Section Begins-->
    <section class="h-full pt-10 md:pt-20" id="sectionbg">
      <div class="grid grid-cols-1 w-full container md:grid-cols-2 sm:mx-auto">
        <div class="px-4 md:w-12/12 md:mt-4">
          <p class="text-2xl font-bold text-rose1 md:text-4xl">
            Cakes, Healthy Pastries
          </p>
          <p class="text-md font-medium pt-1">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor, ab
            eveniet. Nemo cum delectus corrupti repudiandae praesentium nihil
            impedit saepe ipsum quas, atque, aut ratione perspiciatis soluta
            sapiente natus eligendi!
          </p>
          <div class="w-56 mt-4">
            <button
              class="bg-rose1 mb-3 text-lg px-5 py-1 rounded-2xl tracking-tighter font-semibold text-white mx-auto shadow-xl hover:bg-rose"
            >
              Products
            </button>
          </div>
        </div>

        <div class="md:w-12/12">
          <div class="my-6 px-2 md:my-5 lg:pl-3 lg:w-full">
            <img
              src="assets/images/cakeimg.png"
              alt=""
              width=""
              class="lg:w-full lg:h-96"
            />
          </div>
        </div>
      </div>
    </section>
    <!-- Hero Section Ends -->

    <section>
      <div class="mx-auto">
        <p
          class="text-rose1 text-xl font-semibold tracking-tight text-center md:mt-4 md:text-2xl"
        >
          BEST OFFER
        </p>
      </div>
      <div class="flex justify-center space-x-3 md:space-x-6 mt-4">
        <button
          data-filter="all"
          class="px-1 font-semibold filter-item bg-rose2 text-rose1 md:font-semibold md:px-2 rounded-xl"
        >
          All
        </button>
        <button
          data-filter="rvc"
          class="px-1 font-semibold filter-item md:font-semibold md:px-2 rounded-xl"
        >
          Red Velvet Cake
        </button>
        <button
          data-filter="ccake"
          class="py-1 font-semibold rounded-xl filter-item md:px-2"
        >
          Cupcake
        </button>
        <button
          data-filter="cc"
          class="py-1 font-semibold rounded-xl filter-item md:px-2"
        >
          Choco cake
        </button>
      </div>

      <!-- Product Display -->
      <div
        class="grid grid-cols-1 container mx-auto py-10 gap-6 2xl:px-32 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 sm:px-8 xl:grid-cols-4"
      >
        <div
          class="product-box rvc py-4 border-2 border-rose2 mx-auto w-80 h-90 rounded-2xl shadow-md hover:shadow-2xl sm:w-72 hover:border-rose1"
        >
          <a href="">
            <div class="w-full h-60">
              <img
                src="assets/images/rvc1.jpg"
                class="object-cover mx-auto h-full w-10/12 rounded-2xl"
              />
            </div>
            <div class="block mx-auto px-4 pt-5">
              <p class="font-semibold text-xl text-center line-clamp-1">
                Red Velvet Cake Cherry Dale
              </p>
            </div>
          </a>
          <div class="justify-center flex">
            <p class="text-xl text-rose1 font-bold">&#8358;10,000</p>
          </div>
          <div class="flex justify-center">
            <button
              class="bg-rose1 rounded-2xl font-bold text-white mt-3 px-3 py-1 hover:bg-rose"
            >
              Buy Now
            </button>
          </div>
        </div>

        <div
          class="product-box ccake py-4 border-2 border-rose2 mx-auto w-80 h-90 rounded-2xl shadow-md hover:shadow-2xl sm:w-72 hover:border-rose1"
        >
          <a href="">
            <div class="w-full h-60">
              <img
                src="assets/images/ccake3.jpg"
                class="object-cover mx-auto h-full w-10/12 rounded-2xl"
              />
            </div>
            <div class="block mx-auto px-4 pt-5">
              <p class="font-semibold text-xl text-center line-clamp-1">
                Strawberry Flavored Cupcake
              </p>
            </div>
          </a>
          <div class="justify-center flex">
            <p class="text-xl text-rose1 font-bold">&#8358;10,000</p>
          </div>
          <div class="flex justify-center">
            <button
              class="bg-rose1 rounded-2xl font-bold text-white mt-3 px-3 py-1 hover:bg-rose"
            >
              Buy Now
            </button>
          </div>
        </div>

        <div
          class="product-box rvc py-4 border-2 border-rose2 mx-auto w-80 h-90 rounded-2xl shadow-md hover:shadow-2xl sm:w-72 hover:border-rose1"
        >
          <a href="">
            <div class="w-full h-60">
              <img
                src="assets/images/rvc2.jpg"
                class="object-cover mx-auto h-full w-10/12 rounded-2xl"
              />
            </div>
            <div class="block mx-auto px-4 pt-5">
              <p class="font-semibold text-xl text-center line-clamp-1">
                Red Velvet Cake Cherry Dale
              </p>
            </div>
          </a>
          <div class="justify-center flex">
            <p class="text-xl text-rose1 font-bold">&#8358;10,000</p>
          </div>
          <div class="flex justify-center">
            <button
              class="bg-rose1 rounded-2xl font-bold text-white mt-3 px-3 py-1 hover:bg-rose"
            >
              Buy Now
            </button>
          </div>
        </div>

        <div
          class="product-box cc py-4 border-2 border-rose2 mx-auto w-80 h-90 rounded-2xl shadow-md hover:shadow-2xl sm:w-72 hover:border-rose1"
        >
          <a href="">
            <div class="w-full h-60">
              <img
                src="assets/images/cc3.jpg"
                class="object-cover mx-auto h-full w-10/12 rounded-2xl"
              />
            </div>
            <div class="block mx-auto px-4 pt-5">
              <p class="font-semibold text-xl text-center line-clamp-1">
                Chocolate cake with strawberry
              </p>
            </div>
          </a>
          <div class="justify-center flex">
            <p class="text-xl text-rose1 font-bold">&#8358;10,000</p>
          </div>
          <div class="flex justify-center">
            <button
              class="bg-rose1 rounded-2xl font-bold text-white mt-3 px-3 py-1 hover:bg-rose"
            >
              Buy Now
            </button>
          </div>
        </div>

        <div
          class="product-box rvc py-4 border-2 border-rose2 mx-auto w-80 h-90 rounded-2xl shadow-md hover:shadow-2xl sm:w-72 hover:border-rose1"
        >
          <a href="">
            <div class="w-full h-60">
              <img
                src="assets/images/rvc4.jpg"
                class="object-cover mx-auto h-full w-10/12 rounded-2xl"
              />
            </div>
            <div class="block mx-auto px-4 pt-5">
              <p class="font-semibold text-xl text-center line-clamp-1">
                Red Velvet Cake Cherry Dale
              </p>
            </div>
          </a>
          <div class="justify-center flex">
            <p class="text-xl text-rose1 font-bold">&#8358;10,000</p>
          </div>
          <div class="flex justify-center">
            <button
              class="bg-rose1 rounded-2xl font-bold text-white mt-3 px-3 py-1 hover:bg-rose"
            >
              Buy Now
            </button>
          </div>
        </div>

        <div
          class="product-box cc py-4 border-2 border-rose2 mx-auto w-80 h-90 rounded-2xl shadow-md hover:shadow-2xl sm:w-72 hover:border-rose1"
        >
          <a href="">
            <div class="w-full h-60">
              <img
                src="assets/images/cc2.jpg"
                class="object-cover mx-auto h-full w-10/12 rounded-2xl"
              />
            </div>
            <div class="block mx-auto px-4 pt-5">
              <p class="font-semibold text-xl text-center line-clamp-1">
                Chocolate cake with strawberry
              </p>
            </div>
          </a>
          <div class="justify-center flex">
            <p class="text-xl text-rose1 font-bold">&#8358;10,000</p>
          </div>
          <div class="flex justify-center">
            <button
              class="bg-rose1 rounded-2xl font-bold text-white mt-3 px-3 py-1 hover:bg-rose"
            >
              Buy Now
            </button>
          </div>
        </div>

        <div
          class="product-box cc py-4 border-2 border-rose2 mx-auto w-80 h-90 rounded-2xl shadow-md hover:shadow-2xl sm:w-72 hover:border-rose1"
        >
          <a href="">
            <div class="w-full h-60">
              <img
                src="assets/images/cc4.jpg"
                class="object-cover mx-auto h-full w-10/12 rounded-2xl"
              />
            </div>
            <div class="block mx-auto px-4 pt-5">
              <p class="font-semibold text-xl text-center line-clamp-1">
                Chocolate cake with strawberry
              </p>
            </div>
          </a>
          <div class="justify-center flex">
            <p class="text-xl text-rose1 font-bold">&#8358;10,000</p>
          </div>
          <div class="flex justify-center">
            <button
              class="bg-rose1 rounded-2xl font-bold text-white mt-3 px-3 py-1 hover:bg-rose"
            >
              Buy Now
            </button>
          </div>
        </div>

        <div
          class="product-box ccake py-4 border-2 border-rose2 mx-auto w-80 h-90 rounded-2xl shadow-md hover:shadow-2xl sm:w-72 hover:border-rose1"
        >
          <a href="">
            <div class="w-full h-60">
              <img
                src="assets/images/ccake1.jpg"
                class="object-cover mx-auto h-full w-10/12 rounded-2xl"
              />
            </div>
            <div class="block mx-auto px-4 pt-5">
              <p class="font-semibold text-xl text-center line-clamp-1">
                Chocolate cake with strawberry
              </p>
            </div>
          </a>
          <div class="justify-center flex">
            <p class="text-xl text-rose1 font-bold">&#8358;10,000</p>
          </div>
          <div class="flex justify-center">
            <button
              class="bg-rose1 rounded-2xl font-bold text-white mt-3 px-3 py-1 hover:bg-rose"
            >
              Buy Now
            </button>
          </div>
        </div>

        <div
          class="product-box ccake py-4 border-2 border-rose2 mx-auto w-80 h-90 rounded-2xl shadow-md hover:shadow-2xl sm:w-72 hover:border-rose1"
        >
          <a href="">
            <div class="w-full h-60">
              <img
                src="assets/images/ccake2.jpg"
                class="object-cover mx-auto h-full w-10/12 rounded-2xl"
              />
            </div>
            <div class="block mx-auto px-4 pt-5">
              <p class="font-semibold text-xl text-center line-clamp-1">
                Chocolate cake with strawberry
              </p>
            </div>
          </a>
          <div class="justify-center flex">
            <p class="text-xl text-rose1 font-bold">&#8358;10,000</p>
          </div>
          <div class="flex justify-center">
            <button
              class="bg-rose1 rounded-2xl font-bold text-white mt-3 px-3 py-1 hover:bg-rose"
            >
              Buy Now
            </button>
          </div>
        </div>

        <div
          class="product-box ccake py-4 border-2 border-rose2 mx-auto w-80 h-90 rounded-2xl shadow-md hover:shadow-2xl sm:w-72 hover:border-rose1"
        >
          <a href="">
            <div class="w-full h-60">
              <img
                src="assets/images/ccake4.jpg"
                class="object-cover mx-auto h-full w-10/12 rounded-2xl"
              />
            </div>
            <div class="block mx-auto px-4 pt-5">
              <p class="font-semibold text-xl text-center line-clamp-1">
                Chocolate cake with strawberry
              </p>
            </div>
          </a>
          <div class="justify-center flex">
            <p class="text-xl text-rose1 font-bold">&#8358;10,000</p>
          </div>
          <div class="flex justify-center">
            <button
              class="bg-rose1 rounded-2xl font-bold text-white mt-3 px-3 py-1 hover:bg-rose"
            >
              Buy Now
            </button>
          </div>
        </div>

        <div
          class="product-box cc py-4 border-2 border-rose2 mx-auto w-80 h-90 rounded-2xl shadow-md hover:shadow-2xl sm:w-72 hover:border-rose1"
        >
          <a href="">
            <div class="w-full h-60">
              <img
                src="assets/images/cc1.jpg"
                class="object-cover mx-auto h-full w-10/12 rounded-2xl"
              />
            </div>
            <div class="block mx-auto px-4 pt-5">
              <p class="font-semibold text-xl text-center line-clamp-1">
                Chocolate cake
              </p>
            </div>
          </a>
          <div class="justify-center flex">
            <p class="text-xl text-rose1 font-bold">&#8358;10,000</p>
          </div>
          <div class="flex justify-center">
            <button
              class="bg-rose1 rounded-2xl font-bold text-white mt-3 px-3 py-1 hover:bg-rose"
            >
              Buy Now
            </button>
          </div>
        </div>

        <div
          class="product-box rvc py-4 border-2 border-rose2 mx-auto w-80 h-90 rounded-2xl shadow-md hover:shadow-2xl sm:w-72 hover:border-rose1"
        >
          <a href="">
            <div class="w-full h-60">
              <img
                src="assets/images/rvc3.jpg"
                class="object-cover mx-auto h-full w-10/12 rounded-2xl"
              />
            </div>
            <div class="block mx-auto px-4 pt-5">
              <p class="font-semibold text-xl text-center line-clamp-1">
                Red Velvet Cake Cherry Dale
              </p>
            </div>
          </a>
          <div class="justify-center flex">
            <p class="text-xl text-rose1 font-bold">&#8358;10,000</p>
          </div>
          <div class="flex justify-center">
            <button
              class="bg-rose1 rounded-2xl font-bold text-white mt-3 px-3 py-1 hover:bg-rose"
            >
              Buy Now
            </button>
          </div>
        </div>
      </div>
    </section>

    <!-- Link to Javascript -->
    <script src="assets/plugins/script/main.js"></script>
  </body>
</html>
