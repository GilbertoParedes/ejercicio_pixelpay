<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## API Laravel Con JWT

### Instalación

Clone el repositorio con el siguiente comando

1.- git clone https://github.com/GilbertoParedes/ejercicio_pixelpay.git

2.- Instalar dependencias: composer install

3.- renombrar archivo env-example por .env y configurar su base de datos.

4.- Utilizar comando php artisan config:cache para refrescar los nuevos datos del .env

5.- Correr migraciones: php artisan migrate

6.- Poblar tablas con seeer a través se factories: php artisan db:seed

## Pruebas de endpoinds con postman

### Usuarios

1.- Regístro: http://pixel.test/api/register (POST)

![ScreenShot](https://github.com/GilbertoParedes/ejercicio_pixelpay/blob/main/public/register.png)

2.- Logín, retorna toekn de autenticación: http://pixel.test/api/login (POST)

![ScreenShot](https://github.com/GilbertoParedes/ejercicio_pixelpay/blob/main/public/login.png)

3.- Logout, Destruye el token: http://pixel.test/api/logout (GET)

![ScreenShot](https://github.com/GilbertoParedes/ejercicio_pixelpay/blob/main/public/logout.png)

### Productos

1.- Lista de productos: http://pixel.test/api/products (GET)

![ScreenShot](https://github.com/GilbertoParedes/ejercicio_pixelpay/blob/main/public/lista_productos.png)

2.- Guardar Producto: http://pixel.test/api/products (POST)

![ScreenShot](https://github.com/GilbertoParedes/ejercicio_pixelpay/blob/main/public/agregar_productos.png)

3.- Ver detalle Producto: http://pixel.test/api/products/1 (GET)

![ScreenShot](https://github.com/GilbertoParedes/ejercicio_pixelpay/blob/main/public/informaci%C3%B3n_producto.png)

4.- Actulizar Producto: http://pixel.test/api/products/1?nombre=toalla&precio=125.50&cantidad=13 (PUT)

![ScreenShot] (https://github.com/GilbertoParedes/ejercicio_pixelpay/blob/main/public/actualizar.png)

5.- Eliminar: http://pixel.test/api/products/4 (DELETE)

![ScreenShot](https://github.com/GilbertoParedes/ejercicio_pixelpay/blob/main/public/eliminar.png)



