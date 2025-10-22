<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

---
<a>REQUISITOS</a>
PHP	8.2 o superior <br>
Composer	2.x <br>
Laravel	11.x <br>
MySQL	8.0 <br>
Node.js	20.x <br>
NPM	10.x <br>
Servidor	Artisan / XAMPP / Laragon <br>
Editor	Visual Studio Code <br>

Las  Tecnologías utilizadas son los siguientes:

- [Laravel 11](https://laravel.com/)
- [PHP 8.2](https://www.php.net/)
- [Composer](https://getcomposer.org/)
- [MySQL](https://www.mysql.com/)
- [Bootstrap 5](https://getbootstrap.com/) *(opcional)*
- [Vite](https://vitejs.dev/) *(si lo usas para frontend)*

  <h1> Descripcion de mi proyecto SISTEMA DE VENTAS </h1>

El Sistema de Ventas es una aplicación web desarrollada para gestionar de forma eficiente los productos, clientes y transacciones de una empresa. Permite registrar ventas, controlar el inventario, agregar o eliminar artículos, y generar reportes básicos de las operaciones.
Su interfaz es sencilla y responsiva, diseñada con Laravel y Bootstrap, e incluye un sistema de login para proteger el acceso de los usuarios autorizados.

## 🔐 Características principales

✅ Sistema de **login y registro** de usuarios  
✅ Interfaz limpia y responsiva con **Bootstrap 5**  
✅ **Botones con iconos** para acciones como *agregar, editar, eliminar*  
✅ Gestión de datos desde el panel principal  
✅ Validaciones básicas en formularios  
✅ Protección de rutas (solo usuarios autenticados pueden acceder)

# ⚙️ Instalación y configuración

<h2>Clonar el repositorio</h2> 
```bash
git clone https://github.com/tu-usuario/nombre-del-proyecto.git
cd nombre-del-proyecto
<h2>Instlar</h2> 
bash
Copiar código
composer install
npm install
<h2>Crear y configurar el archivo .env</h2> 
Copia el archivo de ejemplo:

bash
Copiar código
cp .env.example .env
Edita las variables de entorno con tus datos:

env
Copiar código
APP_NAME="Sistema Web Laravel"
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nombre_bd
DB_USERNAME=root
DB_PASSWORD=
<h2>Clonar la clave de direccion</h2> 
bash
Copiar código
php artisan key:generate
<h2>ejecutar migraciones</h2> 
bash
Copiar código
php artisan migrate
<h2>Iniciar el sertvidor web</h2> 
bash
Copiar código
php artisan serve
Visita el proyecto en http://localhost:8000

📂 Estructura principal del proyecto
cpp
Copiar código
├── app/
│   ├── Http/
│   ├── Models/
│   └── ...
├── resources/
│   ├── views/
│   │   ├── auth/          # vistas de login y registro
│   │   └── dashboard.blade.php
│   ├── css/
│   └── js/
├── routes/
│   ├── web.php
│   └── api.php
└── public/
    ├── css/
    ├── js/
    └── icons/
👤 Autor
 Est: Karen Santos Mamani
Desarrollador del sistema
de ventas 
🧾 Licencia
Este proyecto está bajo la licencia MIT — puedes usarlo, modificarlo y distribuirlo libremente.

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
