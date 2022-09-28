<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="icon" href="/img/alphabet.png">

        <title>Natural</title>

         <!-- Script pour les logos-->
         <script src="https://kit.fontawesome.com/14fbcf0019.js" crossorigin="anonymous"></script>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                padding: 0%;
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>

    <body>
    <div class="max-w-20xl mx-auto sm:px-10 lg:px-10">
        <div class="relative flex justify-center pt-8 sm:justify-center sm:pt-0">
            <a href="{{ url('/') }}" class="Logo"><img class="Logo" src="/img/natural.png" alt="Logo" height="100" width="200"></a>
        </div>
            <div class="relative flex items-top justify-center">
                @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500">@lang('Log in')</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500">@lang('Register')</a>
                        @endif
                        @endauth
                    </div>
                @endif

            </div> 
    </div>
              
<br>

<div class="container">
    <h1 class="fs-4 font-medium text-dark-500 text-uppercase">│ Les savons │</h1> 
        <div class="row cols-2">
            <div class="col">
             <img src="/img/Savons.jpg" alt="Image catégorie savons"height="350" width="500">
            </div>
            <div class="col">
                <br>
                <p>Lorem ipsum dolor sit amet. Ab quas quia ut vitae illo et voluptas laboriosam et rerum illum non ullam dolores. Est corporis ullam hic facere nobis est rerum sunt est ipsam harum in accusamus quia. Aut sint facere ut veniam eius est ducimus obcaecati quo tenetur nobis nam labore optio! Ut dolor saepe est molestiae velit in corrupti fugiat et earum facere sed sunt obcaecati aut impedit deserunt.</p>
                <p>Est voluptas rerum cum modi consectetur qui earum sint ut incidunt voluptas. Id vitae rerum ea eaque vero in facilis totam. Qui possimus fugit ut alias possimus et deleniti optio sed exercitationem fugit aut possimus enim. Ut libero voluptates et nihil ratione in dolor laboriosam hic adipisci ducimus. </p>
            </div>
        </div>


        <div class="row row-cols-2">
            <div class="col">
                <br>
                <p>Lorem ipsum dolor sit amet. Ab quas quia ut vitae illo et voluptas laboriosam et rerum illum non ullam dolores. Est corporis ullam hic facere nobis est rerum sunt est ipsam harum in accusamus quia. Aut sint facere ut veniam eius est ducimus obcaecati quo tenetur nobis nam labore optio! Ut dolor saepe est molestiae velit in corrupti fugiat et earum facere sed sunt obcaecati aut impedit deserunt.</p>
                <p>Est voluptas rerum cum modi consectetur qui earum sint ut incidunt voluptas. Id vitae rerum ea eaque vero in facilis totam. Qui possimus fugit ut alias possimus et deleniti optio sed exercitationem fugit aut possimus enim. Ut libero voluptates et nihil ratione in dolor laboriosam hic adipisci ducimus. </p>
            </div>
            <div class="col">
                <img src="/img/savons.jpg" alt="Image catégorie savons"height="350" width="500">
            </div>
        </div>
</div>

<br>

<h2 class="text-center fs-4 font-medium text-dark-500 text-uppercase">│ Nos produits│</h2> 

<br>

<div class="d-flex flex-row align-items-baseline m-4 p-5 justify-content-evenly">
@foreach ($produits as $list => $produit)

    <div class="card">
        <div class="card  bg-light" style = "width: 27rem;" >
            <h5 class="card-title text-center">{{ $produit->nom }}</h5>
            <img class="card-img-top"  src="{{ $produit->image }}" alt="" height="350" width="600">
            <div class="card-body">
                <p class="card-text">{{ $produit->description }}</p>
                <p class="card text-center">{{ $produit->prix }} €</p>
                    <div class="card-text">
                    <label for="quantite">Quantité</label>
                        <select name="quantite" id="quantite" class="">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                        </select>
                         <a href="#" class="btn btn-outline-success">Ajouter au panier</a>
                    </div>
            </div>
        </div>
    </div>
            
            
@endforeach
</div>

<!-- Remove the container if you want to extend the Footer to full width. -->
<div>
  <!-- Footer -->
  <footer
          class="text-center text-lg-start text-white"
          style="background-color: #060606"
          >
    <!-- Grid container -->
    <div>
      <!-- Section: Links -->
      <section class="">
        <!--Grid row-->
        <div class="row">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-0">
          <img class="Logo" src="/img/Logo_T.png" alt="Logo" height="120" width="120">
            <p class="">
            Rendre les produits bio et écoresponsables accessibles à tous tout en vous proposant
            des produits bons, respectueux de l’environnement et des producteurs de la région.
            </p>
          </div>
          <!-- Grid column -->

          <hr class="w-100 clearfix d-md-none" />

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-5">
            <h6 class="text-uppercase mb-4 font-weight-bold">En savoir plus</h6>
            <p>
              <a class="text-white">Nous contacter</a>
            </p>
            <p>
              <a class="text-white">Mentions légales</a>
            </p>
          </div>
          <!-- Grid column -->

          <hr class="w-100 clearfix d-md-none" />

          <!-- Grid column -->
          <hr class="w-100 clearfix d-md-none" />


          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-5">
            <h6 class="text-uppercase mb-4 font-weight-bold">Nous suivre</h6>

            <!-- Facebook -->
            <a
               class="btn btn-primary btn-floating m-1"
               style="background-color: #3b5998"
               href="#!"
               role="button"
               ><i class="fab fa-facebook-f"></i
              ></a>

            <!-- Twitter -->
            <a
               class="btn btn-primary btn-floating m-1"
               style="background-color: #55acee"
               href="#!"
               role="button"
               ><i class="fab fa-twitter"></i
              ></a>


            <!-- Instagram -->
            <a
               class="btn btn-primary btn-floating m-1"
               style="background-color: #ac2bac"
               href="#!"
               role="button"
               ><i class="fab fa-instagram"></i
              ></a>

           
           
          </div>
        </div>
        <!--Grid row-->
      </section>
      <!-- Section: Links -->
    </div>
    <!-- Grid container -->

  </footer>
  <!-- Footer -->
</div>
<!-- End of .container -->

  


