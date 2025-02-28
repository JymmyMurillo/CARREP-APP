# Proyecto Carepp App

Puedes acceder directamente a la vista del despliegue a producción en este enlace: [Carepp App](https://carrep-app.vercel.app)

## Descripción del Proyecto

Carrep App es una aplicación web sencilla desarrollada en PHP con Laravel. Su objetivo es permitir que un usuario inicie sesión y acceda a un dashboard donde se muestra un diagrama de barras con los productos disponibles.

### Credenciales de Prueba
Para acceder a la plataforma, puedes usar los siguientes usuarios:

- **Usuario:** usuario1, usuario2 o usuario3
- **Contraseña:** Prueba

Si ingresas credenciales incorrectas, la plataforma mostrará un mensaje de error indicando "usuario o contraseña incorrectos".

---

## Instalación y Configuración

### Requisitos Previos

- **MySQL**: Debes tener MySQL instalado y configurado en tu máquina.
- **PHP**: Asegúrate de tener PHP instalado.
- **Composer**: Necesitarás Composer para gestionar las dependencias del proyecto.

Sigue estos pasos para instalar y ejecutar el proyecto en tu entorno local:

### 1. Clonar el Repositorio
```bash
 git clone https://github.com/JymmyMurillo/CARREP-APP.git
 cd carepp-app
```

### 2. Configurar la Base de Datos

Debes crear una base de datos MySQL. Puedes hacerlo ejecutando el script SQL que se encuentra en:
```
public/Creacion de base de datos.txt
```
Puedes ver el  archivo directamente [aquí](public/Creacion%20de%20base%20de%20datos.txt).

Este archivo contiene la estructura de la base de datos junto con los datos de usuarios y productos.

También puedes optar por usar las migraciones y seeders de Laravel:
```bash
 php artisan migrate --seed
```
Luego, asegúrate de subir la información necesaria a la base de datos.

### 3. Configurar Variables de Entorno

Copia el archivo de ejemplo `.env.example` y configúralo con las credenciales de tu base de datos:
```bash
 cp .env.example .env
```
Edita `.env` y modifica las siguientes variables:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nombre_de_tu_base_de_datos
DB_USERNAME=tu_usuario
DB_PASSWORD=tu_contraseña
```
Recuerda que deben ser las credenciales que configuraste en tu base de datos.

### 4. Instalar Dependencias
Ejecuta los siguientes comandos:
```bash
 composer install
 npm install
```

### 5. Generar Clave de Aplicación
```bash
 php artisan key:generate
```

### 6. Ejecutar Migraciones:

Si decides usar migraciones para crear la estructura de la base de datos, ejecuta:

```bash
php artisan migrate
```

Luego, asegúrate de subir la información necesaria a la base de datos.

### 7. Ejecutar el Servidor Local
```bash
 php artisan serve
```
Accede a `http://127.0.0.1:8000` en tu navegador.

---

## Estructura del Proyecto

El proyecto sigue el patrón **MVC (Modelo-Vista-Controlador)**, organizando los archivos de la siguiente manera:

- **Rutas**
  - `routes/web.php` → Define las rutas principales del proyecto.
- **Controladores**
  - `app/Http/Controllers/AuthController.php` → Maneja la autenticación.
  - `app/Http/Controllers/DashboardController.php` → Controla la vista del dashboard y la generación del gráfico.
- **Vistas**
  - `resources/views/auth/login.blade.php` → Página de inicio de sesión.
  - `resources/views/dashboard.blade.php` → Página principal con el diagrama de barras.
- **Base de Datos**
  - `database/migrations/` → Migraciones para la base de datos.
  - `database/seeders/` → Datos predefinidos para usuarios y productos.
- **Configuración**
  - `.env.example` → Ejemplo de configuración del entorno.
  - `composer.json` → Lista de dependencias PHP.
  - `package.json` → Dependencias de frontend.

---

## Justificación de Tecnologías Usadas

- **Laravel** → Framework PHP robusto que proporciona seguridad, manejo de sesiones, estructura MVC y herramientas como Eloquent ORM para interactuar con la base de datos..
- **Laravel UI** → Paquete que simplifica la integración de autenticación y scaffolding de frontend.
- **Blade** → Motor de plantillas de Laravel que permite crear vistas dinámicas y reutilizables.
- **Chart.js** → Biblioteca JavaScript para crear gráficos interactivos, como el diagrama de barras en el dashboard.
- **Bootstrap** → Framework CSS que facilita el diseño responsive y la creación de interfaces de usuario modernas.
- **MySQL** → Sistema de gestión de bases de datos relacional que garantiza un almacenamiento eficiente y seguro de los datos.
- **Eloquent ORM** → Permite manejar la base de datos de manera más eficiente y segura, evitando inyecciones SQL.

---

## Seguridad
- **Protección contra Inyecciones SQL:** → Laravel utiliza Eloquent ORM, que previene las inyecciones SQL al usar consultas preparadas.
- **Autenticación Segura:** → Las contraseñas se almacenan en formato hash usando bcrypt, lo que hace que sea extremadamente difícil revertir el proceso y obtener la contraseña original.
- **CSRF Protection:** → Laravel incluye protección CSRF por defecto, lo que ayuda a prevenir ataques de falsificación de solicitudes entre sitios.
---

## Autor
Desarrollado por [Jymmy Murillo](https://github.com/JymmyMurillo).

