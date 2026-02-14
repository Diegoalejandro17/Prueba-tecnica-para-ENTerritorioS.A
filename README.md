# Prueba Técnica – Formulario de Usuarios

Este repositorio contiene la solución a una prueba técnica realizada para **Enterritorio S.A**.  
El objetivo es implementar un formulario en **HTML + jQuery** que permita registrar, consultar y editar usuarios, almacenando los datos en una base de datos **Oracle** mediante **PHP**.

⏱️ **Tiempo de desarrollo:** 30 minutos.  

---

## 📋 Requerimientos del ejercicio

1. **Crear una tabla `USUARIOS`** con los campos:
   - `ID` (PK)  
   - `NOMBRE`  
   - `EMAIL`  
   - `FECHA_REGISTRO`  

2. **Desarrollar un formulario** con los campos:
   - **Nombre**  
   - **Email**  
   - **Botón Registrar**  

3. **Validar con jQuery**:
   - Que los campos no estén vacíos  
   - Que correspondan al tipo de dato  
   - Que no superen la longitud definida en la BD  

4. **Enviar los datos con AJAX** a un script en **PHP**

5. **El script debe insertar los datos** en **Oracle** usando `oci_connect()` o **PDO**

6. **Mostrar un mensaje** de éxito o error

### 🎯 Bonus

- Uso de **Bootstrap** para diseño responsivo  
- Uso de un framework PHP (ejemplo: **CodeIgniter** **Laravel**)  

---

## 🚀 Tecnologías utilizadas

- **HTML5**  
- **CSS3 / Bootstrap**  
- **jQuery**  
- **PHP 7+**  
- **Oracle Database**  

---

## 📁 Estructura del proyecto

```
/controlador
└── usuariocontrolador.php
/database
└── conexion.php
/modelo
└── usuario.php
/vista
└── formulario.php
main.js
usuarios.sql
```

---

## 🔧 Funcionalidades implementadas

- ✅ Formulario responsive con Bootstrap
- ✅ Validaciones del lado del cliente con jQuery
- ✅ Envío de datos mediante AJAX
- ✅ Conexión a Oracle Database con OCI8
- ✅ Inserción de registros con manejo de errores
- ✅ Mensajes de retroalimentación al usuario
- ✅ Validación de email único en BD
- ✅ Sanitización de datos de entrada

---

## 🛠️ Requisitos del sistema

- **PHP** 7.0 o superior
- **Oracle Database** 11g o superior
- **Extensión OCI8** habilitada en PHP
- **Servidor web** (Apache/Nginx)
- **Navegador web** moderno con JavaScript habilitado

---

## 📧 Contacto

**Desarrollado por:** Diego Alejandro Paloma Díaz  
**Prueba técnica para:** Enterritorio S.A.  

![Logo ENTerritorio S.A](img/logo-enterritorios.a.png)

---

## 📄 Licencia

Este proyecto fue desarrollado como parte de una prueba técnica y es de uso exclusivo para evaluación.
