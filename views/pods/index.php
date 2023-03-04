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
    }
    .text-gray-500{
      margin: auto;
    }
    h3{
      margin-top: 30px;
      font-style: italic;
    }
    .border{
      display: inline-block;
      width: 60px;
      margin-right: 6px;
    }
    .select{
      width: 225px;
      height: 40px;
    }
    .galeria{
      margin: auto;
      margin-left: 0px;
    }
    .producto{
      padding: 40px;
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
      <form>
        <h3>Nicotina:</h3>
        <input class="border" placeholder="%">
            
        </input>
        <input class="border" placeholder="%">
            
        </input>
        <input class="border" placeholder="%">
            
        </input>

        <h3>Sabores:</h3>
        <select class="select">
            <option selected disabled>(Seleccionar)</option>
            <option value="#">fresa</option>
            <option value="#">mango</option>
        </select>
      </form>  
        </div>
        <div class="galeria">
            <div class="grid grid-cols-3">
              <div class="producto">
                <img src="#" alt="Producto 1" height="100px">
                <div class="p-4">
                  <h3 class="text-lg font-medium mb-2">Producto 1</h3>
                  <p class="text-green-500 font-medium">Precio: $20</p>
                </div>
              </div>
              
              <div class="producto">
                <img src="#" alt="Producto 2" height="100px">
                <div class="p-4">
                  <h3 class="text-lg font-medium mb-2">Producto 2</h3>
                  <p class="text-green-500 font-medium">Precio: $25</p>
                </div>
              </div>

              <div class="producto">
                <img src="#" alt="Producto 3" height="100px">
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