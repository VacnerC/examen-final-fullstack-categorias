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
Instalar dependencias:

bash
composer install
Configurar la base de datos:

Crear una base de datos MySQL llamada laravel_categories

Copiar el archivo .env.example a .env

Configurar las variables de entorno de la base de datos en .env:

text
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_categories
DB_USERNAME=root
DB_PASSWORD=tu_password
Generar la clave de la aplicación:

bash
php artisan key:generate
Ejecutar las migraciones:

bash
php artisan migrate
Iniciar el servidor de desarrollo:

bash
php artisan serve
El backend estará disponible en: http://localhost:8000

Frontend (Angular)
Navegar al directorio del frontend:

bash
cd frontend-angular
Instalar dependencias:

bash
npm install
Iniciar el servidor de desarrollo:

bash
ng serve
El frontend estará disponible en: http://localhost:4200

Uso de la Aplicación
Abrir el navegador en http://localhost:4200

En el formulario superior, ingresar el nombre de una categoría y hacer clic en "Guardar"

La categoría se agregará a la tabla inferior

Las categorías se almacenan en la base de datos MySQL

Estructura del Proyecto
backend-laravel/: Proyecto Laravel con API REST

frontend-angular/: Proyecto Angular para la interfaz de usuario

Características Implementadas
Registro de categorías con validación

Listado de categorías en tabla

Comunicación frontend-backend mediante servicios HTTP

Interfaz responsive con Bootstrap

Notas
No se implementaron las funcionalidades de editar y eliminar según los requerimientos

El código está organizado y comentado para facilitar su comprensión

text

## 4. Pruebas del Sistema

### Pruebas del Backend

1. Iniciar el servidor Laravel:
   ```bash
   cd backend-laravel
   php artisan serve
Probar los endpoints de la API:

GET http://localhost:8000/api/categories

POST http://localhost:8000/api/categories (con body: {"name": "Ejemplo"})

Pruebas del Frontend
Iniciar el servidor Angular:

bash
cd frontend-angular
ng serve
Abrir el navegador en http://localhost:4200

Probar el formulario de registro de categorías

Verificar que las categorías se listen correctamente

Conclusión
He desarrollado una aplicación web fullstack completa que cumple con todos los requerimientos especificados:

✅ Backend con Laravel 10+ y MySQL

✅ Frontend con Angular 15+

✅ Módulo de categorías con registro y listado

✅ Comunicación mediante servicios HTTP

✅ Código ordenado y comentado

✅ Instrucciones de instalación y ejecución