# 🧾 Práctica #3 - Ambiente Web Cliente Servidor
  
---

## 📌 Descripción del Proyecto

Este proyecto corresponde a la **Práctica #3** del curso *Ambiente Web Cliente Servidor* de la carrera de Ingeniería en Sistemas de Computación.

El sistema desarrollado permite la **gestión de compras y abonos (pagos parciales)** mediante una aplicación web basada en arquitectura **MVC**, integrando base de datos, procedimientos almacenados y una interfaz dinámica.

---

## 🏗️ Arquitectura del Sistema

El proyecto está estructurado bajo el patrón:

- **Modelo (Model):** Manejo de datos y conexión a base de datos  
- **Vista (View):** Interfaces de usuario  
- **Controlador (Controller):** Lógica de negocio  

---

## 🗄️ Base de Datos

Se implementan dos estructuras principales:

### 📌 Tabla Principal
Contiene información de compras:
- Código de compra
- Descripción
- Precio
- Saldo
- Estado (Pendiente / Cancelado)

### 📌 Tabla Abonos
Registra los pagos parciales:
- ID de abono
- Código de compra
- Monto abonado
- Fecha

### ⚙️ Procedimientos almacenados

- Consultar compras  
- Registrar abonos  
- Actualizar saldo  
- Cambiar estado automáticamente  

---

## ⚙️ Funcionalidades

### 📊 Consulta de Compras

Permite visualizar todas las compras registradas:

- Muestra:
  - Código
  - Descripción
  - Precio
  - Saldo
  - Estado  

- Orden:
  - Primero **Pendientes**
  - Luego **Canceladas**

---

### 💳 Registro de Abonos

Permite realizar pagos parciales sobre compras pendientes.

#### 🔹 Campos:

- **Compra (Dropdown):**
  - Solo muestra compras pendientes  

- **Saldo Anterior:**
  - Solo lectura  
  - Se carga automáticamente con **Ajax**  

- **Abono:**
  - Campo obligatorio  
  - No puede ser mayor al saldo  

---

### 🔄 Flujo del proceso

1. Seleccionar compra pendiente  
2. Cargar saldo automáticamente  
3. Ingresar monto del abono  
4. Validar datos  
5. Registrar abono  
6. Actualizar saldo  
7. Si saldo = 0 → estado = **Cancelado**  
8. Redirigir a consulta  

---

## 🧪 Validaciones

- ✔️ Abono obligatorio  
- ✔️ Abono ≤ saldo  
- ✔️ Solo compras pendientes  
- ✔️ Cambio automático de estado  

---

## 🛠️ Tecnologías Utilizadas

- HTML5  
- CSS3 / Bootstrap  
- JavaScript  
- jQuery  
- Ajax  
- Base de Datos (MySQL)  
- Arquitectura MVC  

