# testHCN-backend

# Test de evaluación

# Back-end

Test de evaluación Este es el proyecto del Back-end construido con Laravel.

## Instalación

1. **Clona el repositorio:**

    ```bash
    git clone https://github.com/SINOSTROZAM/testhcn-backend.git
    ```

2. **Navega al directorio del proyecto:**

    ```bash
    cd testhcn-backend

    ```

3. **Instala las dependencias con Composer:**

    ```bash
    composer install & composer update
    ```

4. **Copia el archivo de ejemplo `.env` y configura tus variables de entorno (se encuentra mas abajo un ejemplo  de como deberia ser ):**
   
    Abre el archivo `.env` y ajusta las configuraciones de base de datos y otros parámetros según sea necesario.

6. **Genera una clave de aplicación:**

    ```bash
    php artisan key:generate
    ```

7. **Realiza las migraciones de la base de datos:**

    ```bash
    php artisan migrate
    ```

8. **Llena la base de datos con datos de prueba (opcional):**

    ```bash
    php artisan db:seed
    ```

9. **Inicia el servidor de desarrollo:**

    ```bash
    php artisan serve
    ```

10. **Abre tu navegador y visita:**

    ```
    http://localhost:8000
    ```

## Configuración de Base de Datos

Asegúrate de tener configurada tu base de datos en el archivo `.env`. Aquí tienes un ejemplo de configuración para MySQL:
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=nombre_de_base_de_datos
DB_USERNAME=tu_usuario
DB_PASSWORD=tu_contraseña
```
Para hacer PRUEBA de la API REST , esta se hizo  a traves de POSTMAN 2
Ejemplo: 
METODO GET =>  http://127.0.0.1:8000/api/regions  => SEND y trae las regiones disponibles en la BD
