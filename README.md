<p align="center">
    <a href="https://laravel.com" target="_blank">
        <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
    </a>
</p>

<p align="center">
    <a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
    <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
    <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
    <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

---

# 🎟️ Helpdesk Laravel

Sistema de Helpdesk construido con **Laravel 11**, diseñado para gestionar tickets, usuarios, roles, departamentos, comentarios, logs, adjuntos, categorías y prioridades.  
Incluye autenticación con **Laravel Breeze**, migraciones, modelos, seeders, factories y una arquitectura moderna.

---

# 📦 Requisitos

- PHP **8.2+**
- Composer
- Node.js + NPM
- MySQL / MariaDB
- Git

---

# 🚀 Instalación del proyecto

Clona el repositorio:

```bash
git clone https://github.com/UprighMussel/Helpdesk_laravel.git
cd Helpdesk_laravel

1️⃣ Instalar dependencias PHP
composer install

2️⃣ Instalar dependencias JS
npm install

3️⃣ Crear archivo .env
cp .env.example .env


Configura la base de datos:

DB_DATABASE=helpdesk
DB_USERNAME=root
DB_PASSWORD=

4️⃣ Generar clave de aplicación
php artisan key:generate

5️⃣ Migrar la base de datos + seeders
php artisan migrate --seed

6️⃣ Compilar assets
npm run dev

🔐 Instalación de Laravel Breeze (si no estaba instalado)
composer require laravel/breeze --dev
php artisan breeze:install
npm install
npm run dev

🧪 Datos de prueba

Regenerar la base de datos con datos falsos:

php artisan migrate:fresh --seed

🗂 Estructura del proyecto
app/
 ├── Models/
 ├── Http/
 │    ├── Controllers/
 │    ├── Middleware/
 │    └── Requests/

database/
 ├── migrations/
 ├── seeders/
 └── factories/

routes/
 ├── web.php
 └── api.php

🧭 Flujo recomendado de Git
Ver cambios
git status

Agregar archivos
git add .

Crear commit
git commit -m "Mensaje del commit"

Enviar al repositorio
git push origin main

👤 Autores
Yoshua Adonai Velazquez Magaña
Guillermo Ramón Dzib Queb
Desarrolladores del sistema Helpdesk en Laravel 11.
