 <!Doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-[#FFFFFF]-400">
  <nav class=" bg-[#1a1a1a] md:flex md:items-center md:justify-between">
    <div class="flex justify-between items-center h-32" > <!-- Tamaño de nav, puedes ajustar las dimensiones-->
      <span class="text-2xl font-[Poppins] cursor-pointer">
        <img class="relative left-20 object-fill h-48" src="../../dist/img/logo2.png"> <!-- ajustar dimension de imagen-->
      </span>

      <span class="text-4xl cursor-pointer mx-8 mt-4 md:hidden block text-[#FFFFFF]">
        <i name="menu" class="fa-solid fa-bars" onclick="Menu(this)"></i>
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

<div class="cursor-pointer mt-5 text-[#FFFFFF]">
  <a href="#"><i class="text-[#FFFFFF] p-2 fa-solid fa-cart-shopping"></i></a>
  <a href="#"><i class="text-[#FFFFFF] p-2 fa-solid fa-user"></i></a>
  <a href="#"><i class="text-[#FFFFFF] p-2 fa-solid fa-magnifying-glass"></i></a>
</div>

<h2 class="#"></h2>
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