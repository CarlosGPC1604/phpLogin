# Proyecto de Login Simple en PHP

Este es un proyecto básico de login desarrollado en PHP para demostrar cómo crear un sistema de autenticación simple.

## Características

- Inicio de sesión con validación de usuario y contraseña.
- Uso de PHP para procesar los datos del formulario.
- Manejo de errores y mensajes para el usuario.

## Requisitos

- Servidor web local (por ejemplo, XAMPP, WAMP, MAMP).
- PHP 7.0+.

## Instalación

1. Clona o descarga este repositorio en tu máquina local.
   
   ```
   git clone https://github.com/CarlosGPC1604/phpLogin.git
   ```

2. Configura tu servidor web local para que apunte al directorio del proyecto.

3. Abre el archivo `index.php` en tu navegador para ver la página de inicio de sesión (Recomiendo usar la extensión de PHP Server).

## Uso

1. Completa el formulario de inicio de sesión con un usuario y contraseña válidos.
2. Haz clic en el botón "Iniciar Sesión" para enviar los datos.
3. Verifica los mensajes de éxito o error según los datos ingresados.
4. Realiza tu implementación del login en el archivo `login.php` de la manera que quieras.
5. Usuario por defecto: `admin`. Contraseña por defecto `admin`. 

Considera configurar las variables de entorno en el archivo `.env`. El proyecto está preparado para usar MySQL; podrás ver una demostración en `login.php`.
```plaintext
/login-php
├── .env
├── index.php
└── scripts
    └── login
        └── login.php
```
## Contribución

Si deseas contribuir a este proyecto, por favor sigue estos pasos:

1. Haz un fork del proyecto.
2. Crea una nueva rama (`git checkout -b feature/Mejora`).
3. Haz commit de tus cambios (`git commit -am 'Agrega una mejora'`).
4. Sube tus cambios (`git push origin feature/Mejora`).
5. Abre un Pull Request.

## Licencia

Este proyecto está licenciado bajo la [Licencia MIT](https://opensource.org/licenses/MIT).
