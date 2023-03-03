<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/dist/output.css" rel="stylesheet">
    
</head>

<style>
    .bg-gray-900{
        margin-top: 100px;
    }
    .grid{
        display: flex;
        flex-wrap: wrap;
        margin-top: 150px;
        margin-left: 100px;
    }
    .text-gray-500{
        margin-left: 250px;
    }
    h3{
        margin-top: 30px;
        font-style: italic;
    }
    .border{
        border-color: black;
        display: inline-block;
        text-align: center;
        width: 60px;
        margin-right: 6px;
    }
    .select{
        width: 200px;
        height: 40px;
    }
</style>

<body>
<div class="bg-gray-900">
<div class="container mx-auto">
    <div class="grid grid-cols-2">
      <div class="text-gray-500">
      <h1 class="text-3xl">
        Relx Pod
      </h1>
        <h3>Nicotina:</h3>
        <span class="border" >
            0%
        </span>
        <span class="border">
            3%
        </span>
        <span class="border">
            5%
        </span>

        <h3>Sabores:</h3>
        <select class="select">
            <option selected disabled>(Seleccionar)</option>
            <option value="#">fresa</option>
            <option value="#">mango</option>
        </select>
        </div>
        <div>
            <div class="grid grid-cols-3">
              <div class="">
                <img src="producto1.jpg" alt="Producto 1" class="w-full">
                <div class="p-4">
                  <h3 class="text-lg font-medium mb-2">Producto 1</h3>
                  <p class="text-green-500 font-medium">Precio: $20</p>
                </div>
              </div>
              
              <div class="">
                <img src="producto2.jpg" alt="Producto 2" class="w-full">
                <div class="p-4">
                  <h3 class="text-lg font-medium mb-2">Producto 2</h3>
                  <p class="text-green-500 font-medium">Precio: $25</p>
                </div>
              </div>

              <div class="">
                <img src="producto3.jpg" alt="Producto 3" class="w-full">
                <div class="p-4">
                  <h3 class="text-lg font-medium mb-2">Producto 3</h3>
                  <p class="text-green-500 font-medium">Precio: $30</p>
                </div>
              </div>
            
              <!-- agregar más productos aquí -->
            </div>
        </div>
    </div>
    </div>
</div>
</body>
</html>