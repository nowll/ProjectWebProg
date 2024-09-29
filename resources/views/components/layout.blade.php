<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!--
    - primary meta tags
  -->
  <title>Ceritanya Bloggy</title>
  <meta name="title" content="Blogy - Hey, we’re Blogy. See our thoughts, stories and ideas.">
  <meta name="description" content="">

  <!--
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!--
    - custom css link
  -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700&display=swap" rel="stylesheet">

</head>

<body>

  <!--
    - #HEADER
  -->

 <x-header></x-header>



 <main>
    <div class="landingpage">
        {{$slot}}
    </div>

 </main>






  <!--
    - #FOOTER
  -->

  <x-footer></x-footer>




  <!--
    - custom js link
  -->
  <script src="./assets/js/script.js" defer></script>

  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>
