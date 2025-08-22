# examen-final-fullstack-categorias

# Aplicación Web Fullstack: Gestión de Categorías

Esta es una aplicación web fullstack desarrollada con Laravel (backend) y Angular (frontend) para gestionar categorías.

## Requisitos Previos

- PHP 8.1+
- Composer
- Node.js 16+
- Angular CLI 15+
- MySQL 5.7+

## Instalación y Ejecución

### Backend (Laravel)

1. Navegar al directorio del backend:
   ```bash
   cd backend-laravel

2. Instalar dependencias:
   ```bash
    composer install
    
3. Configurar la base de datos:
   ```bash
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=laravel_categories
    DB_USERNAME=root
    DB_PASSWORD=tu_password

4. Generar la clave de la aplicación:
    ```bash
    php artisan key:generate

5. Ejecutar las migraciones:
    ```bash
    php artisan migrate

6. Iniciar el servidor de desarrollo:
    ```bash
    php artisan serve

El backend estará disponible en: http://localhost:8000

### Frontend (Angular)
1. Navegar al directorio del frontend:
    ```bash
    cd frontend-angular

2. Instalar dependencias:
    ```bash
    npm install

3. Iniciar el servidor de desarrollo:
    ```bash
    ng serve

El frontend estará disponible en: http://localhost:4200

### Uso de la Aplicación
Abrir el navegador en http://localhost:4200

En el formulario superior, ingresar el nombre de una categoría y hacer clic en "Guardar"

La categoría se agregará a la tabla inferior

Las categorías se almacenan en la base de datos MySQL


Conclusión
He desarrollado una aplicación web fullstack completa que cumple con todos los requerimientos especificados:

✅ Backend con Laravel 10+ y MySQL

✅ Frontend con Angular 15+

✅ Módulo de categorías con registro y listado

✅ Comunicación mediante servicios HTTP

✅ Código ordenado y comentado

✅ Instrucciones de instalación y ejecución