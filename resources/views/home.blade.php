<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="flex justify-between bg-blue-500 p-4">
        <a href="#" class="text-white font-bold">Inicio</a>
        <a href="#" class="text-white">Productos</a>
        <a href="#" class="text-white">Servicios</a>
        <a href="#" class="text-white">Acerca de</a>
        <a href="#" class="text-white">Contacto</a>
    </div>
    
    <div class="flex p-4">
        <div class="w-1/4 bg-gray-200 p-4">
            <h2 class="text-lg font-semibold mb-4">Categorías</h2>
            <ul class="list-disc pl-4">
                <li class="mb-2"><a href="#" class="text-blue-500 hover:underline">Ropa</a></li>
                <li class="mb-2"><a href="#" class="text-blue-500 hover:underline">Electrónica</a></li>
                <li class="mb-2"><a href="#" class="text-blue-500 hover:underline">Hogar</a></li>
                <li class="mb-2"><a href="#" class="text-blue-500 hover:underline">Accesorios</a></li>
            </ul>
        </div>
    
        <div class="w-3/4 p-4">
            <h1 class="text-2xl font-bold mb-4">Productos Destacados</h1>
            <!-- Contenido de los productos destacados aquí --> 
           
        </div>
    </div>
    
    <div class="bg-gray-200 py-4 text-center">
        <p class="text-gray-600">Explora nuestras categorías para encontrar lo que necesitas.</p>
    </div>
    

    
</body>
</html>


