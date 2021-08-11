# Instalación

1. Clonar el repositorio en tu carpeta de localhost (laragon o xamp)
2. Renombrar la carpeta (opcional)
3. Abrir la carpeta en la terminal
4. Crear un archivo `.env` con el mismo contenido de `.env.example`
5. Crear una base de datos para el proyecto
6. Modificar las variables de conexión del nuevo archivo `.env`
    - Define los datos de conexión
        - DB_DATABASE=
        - DB_USERNAME=
        - DB_PASSWORD=
7. Ejecuta `composer install`
8. Ejecuta `php artisan key:generate`
9. Ejecuta `php artisan migrate`
10. Abri la aplicacion en el navegador
11. Registrate

# Librerías usadas

- No se uso ninguna librería

    
