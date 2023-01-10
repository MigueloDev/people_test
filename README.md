# **Solucion**

Primero me enfoque en el problema que era identificar el palindromo y la data que debe existir en la base de datos que demuestre la funcionalidad de la aplicacion.

Para el desarrollo de la api decidi trabajarla con Laravel, por su sencilles al momento de instalar y manipular la base de datos.

En este proyecto Laravel sirve la aplicacion en React, luego para las peticiones React consume la api.

Una vez instalado el proyecto, empece con la creacion de las tablas, a maquetar las vistas y los componentes con bootstrap 5 , una vez ya tenia los componentes, empece a desarrollar la funcionalidad en el backend, escribi un helper para obtener si un string es palindromo y lo use en el modelo de productos, una vez alli separe las consultas en caso de la busqueda fuera un numero obtiene el producto por id , caso contrario obtiene por busqueda con un like en donde aproveche las bondades de eloquent para adicionar en la respuesta de la consulta si la palabra es palindromo dos campos en donde les incluiria el precio modificado con el 50% de descuento es decir a la mitad y una bandera que me serviria para identificar en el front end si el producto tiene descuento.

### El proyecto ejecuta la creacion de las tablas asi como su llenado en la base de datos

** Pasos para implementar proyecto **
### sql para crear base de datos

CREATE DATABASE shop;

Una vez creada la base de datos exitosamente procedemos a ejecutar migraciones con los seeders que no son mas que la insercion de dummy data en la tabla de productos.

php artisan migrate --seed

Se instalan las dependencias de composer

composer install 

Se instalan las dependencia de npm

npm install

Se construyen los scripts de la aplicacion

npm run build

Se lanza el proyecto

php artisan serve

Una vez lanzado el proyecto deberia indiar una url de la siguiente manera http://127.0.0.1:8000, ir a esta url y alli se podra acceder a hacer las pruebas, 

###### Marcas de ejemplo

['nestle','evercrisp','costa','mckay','arcor','gourmet','maggi','ambrosoli']

###### Palindromos de ejemplo
['Arenera','Oro','Rotor','Radar','Asador','rayar','Kayak','Arepera','Oso','osos']