<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <!--<link rel="stylesheet" href="../../dist/output.css"> -->
    <title>Document</title>
</head>
<body>
   
<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>

<body class="bg-[#FFFFFF]-400">
  <nav class=" bg-[#1a1a1a] md:flex md:items-center md:justify-between">
    <div class="flex justify-between items-center h-32" > <!-- Tamaño de nav, puedes ajustar las dimensiones-->
      <span class="text-2xl font-[Poppins] cursor-pointer">
        <img class="relative left-20 object-fill h-48" src="../../dist/img/logo2.png"> <!-- ajustar dimension de imagen-->
      </span>

      <span class="text-4xl cursor-pointer mx-8 mt-4 md:hidden block text-[#FFFFFF]">
        <ion-icon name="menu" onclick="Menu(this)"></ion-icon>
      </span>
    </div>
<center>
    <br>
    <ul class=" text-[#FFFFFF] md:flex md:items-center z-[-1] md:z-auto md:static absolute bg-[#1a1a1a] w-full right-100 md:w-auto md:py-0 py-4 md:pl-0 pl-7 md:opacity-100 opacity-0 top-[-400px] transition-all ease-in duration-500" >
        <br>
        <br>
      <li class="mx-4 my-6 md:my-0">
        <a href="#" class="text-xl hover:text-cyan-500 duration-500">Cigarrillos electronicos</a>
      </li>
      <li class="mx-4 my-6 md:my-0">
        <a href="#" class="text-xl hover:text-cyan-500 duration-500">Pods</a>
      </li>
      <li class="mx-4 my-6 md:my-0">
        <a href="#" class="text-xl hover:text-cyan-500 duration-500">Accesorios</a>
      </li>
      <li class="mx-4 my-6 md:my-0">
        <a href="#" class="text-xl hover:text-cyan-500 duration-500">Promociones</a>
      </li>
      <li class="mx-4 my-6 md:my-0">
        <a href="#" class="text-xl hover:text-cyan-500 duration-500">Nosotros</a>
      </li>
      <li class="mx-4 my-6 md:my-0">
        <a href="#" class="text-xl hover:text-cyan-500 duration-500">Blog</a>
      </li>
</center>

      </button>
<h2 class=""></h2>
    </ul>
  </nav>


  <script>
    function Menu(e){
      let list = document.querySelector('ul');
      e.name === 'menu' ? (e.name = "close",list.classList.add('top-[80px]') , list.classList.add('opacity-100')) :( e.name = "menu" ,list.classList.remove('top-[80px]'),list.classList.remove('opacity-100'))
    }
  </script>
</body>

</html>

</body>
</html>