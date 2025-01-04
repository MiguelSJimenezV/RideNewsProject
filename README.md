# RideNews

RideNews es una plataforma web creada con PHP (Laravel), JavaScript, Tailwind CSS y Vite. Está diseñada para permitir a los usuarios motociclistas crear, gestionar y compartir publicaciones relacionadas con el mundo de las motocicletas. Los usuarios pueden registrarse, iniciar sesión, crear publicaciones y administrar su contenido de manera sencilla y eficiente.

## Tecnologías utilizadas

-   **Backend**: Laravel (PHP)
-   **Frontend**: JavaScript, Tailwind CSS
-   **Gestión de dependencias**: NPM, Vite
-   **Base de datos**: MySQL (configurado en Laravel)
-   **Testing**: PHPUnit (para pruebas unitarias)

## Instalación

1. **Clona este repositorio**:

    ```bash
    git clone https://github.com/MiguelSJimenezV/RideNewsProject.git
    ```

2. **Instala las dependencias de PHP**:

    En la raíz del proyecto, ejecuta el siguiente comando para instalar las dependencias de Laravel:

    ```bash
    composer install
    ```

3. **Instala las dependencias de JavaScript**:

    Navega al directorio de frontend y ejecuta:

    ```bash
    npm install
    ```

4. **Configura el archivo `.env`**:

    Copia el archivo `.env.example` y renómbralo a `.env`:

    ```bash
    cp .env.example .env
    ```

    Luego, configura las variables de entorno, como la base de datos y las claves de la aplicación.

5. **Genera la clave de la aplicación**:

    ```bash
    php artisan key:generate
    ```

6. **Migra las bases de datos**:

    Ejecuta las migraciones para crear las tablas en la base de datos:

    ```bash
    php artisan migrate
    ```

7. **Compila los assets**:

    Vite y Tailwind CSS se encargarán de compilar los assets:

    ```bash
    npm run dev
    ```

8. **Inicia el servidor de desarrollo**:

    Inicia el servidor de Laravel:

    ```bash
    php artisan serve
    ```

    Ahora podrás acceder a la aplicación en `http://localhost:8000`.

## Funcionalidades

-   **Registro de usuarios**: Los usuarios pueden registrarse con sus credenciales para crear una cuenta.
-   **Inicio de sesión**: Los usuarios pueden iniciar sesión para acceder a sus publicaciones.
-   **Publicación de contenido**: Los usuarios pueden crear, editar y eliminar publicaciones relacionadas con motocicletas.
-   **Gestión de publicaciones**: Los usuarios pueden ver y administrar todas sus publicaciones desde su perfil.
-   **Interfaz amigable**: El uso de Tailwind CSS asegura una interfaz limpia y responsive.

## Comandos de desarrollo

-   **Desarrollo de frontend**:

    ```bash
    npm run dev
    ```

    Este comando inicia Vite en modo desarrollo y compila los archivos de frontend.

-   **Compilación de assets**:

    ```bash
    npm run build
    ```

    Utiliza este comando para crear una versión optimizada de los archivos de frontend para producción.

## Pruebas

Este proyecto utiliza PHPUnit para las pruebas unitarias. Para ejecutarlas, utiliza el siguiente comando:

```bash
php artisan test
```

## Contribuciones

Si deseas contribuir al proyecto, por favor, abre un "Pull Request" con los cambios que consideres adecuados. También puedes abrir problemas (issues) para reportar errores o sugerir mejoras.

## Autor
Miguel S. Jiménez V.
2024
