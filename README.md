# Como ejecutar el proyecto
----
## 1. Al clonar el repositorio, ejecutar
 ``` composer install ```
 Este comando instalarà todas las dependencias de Laravel

 ## 2. Cambiar el nombre del fichero
 Cambiar el nombre del fichero .env.example a solamente .env y darle nuevos valores a la conexion con la base de datos
 ```DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nombre_basedatos
DB_USERNAME=root
DB_PASSWORD=
```
## 3. Generar una app Key
Para generar una app Key
```
php artisan key:generate
```
## 4. Ejecutar las migraciones
Antes de ejecutar este paso, verificar que sea correcta la conexion con la base de datos
```
php artisan migratephp artisan migrate
```
Este comando crea las tablas en la base de datos

## 5. Ejecutar el proyecto 
Para ejecutar el proecto
```
php artisan serve
```
