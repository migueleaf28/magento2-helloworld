# Magento 2 – Módulo HelloWorld + Override de Descripción

Este repositorio contiene un módulo creado para Magento 2 como ejercicio práctico. Incluye dos funcionalidades principales:  
1) Un módulo base con un controlador frontend,  
2) Un override de un bloque nativo que modifica la descripción del producto.

## 1. Funcionalidad del módulo `Vendor_HelloWorld`

### ✔ Ruta frontend
El módulo registra un controlador accesible desde:

/helloworld/index/index

### ✔ Respuesta del controlador
Al acceder a esta ruta, Magento muestra:

"Hola Mundo desde mi módulo"

Esto confirma que el módulo fue instalado correctamente y que Magento reconoce el controlador.

## 2. Override de la clase `Magento\Catalog\Block\Product\View\Description`

El módulo sobrescribe la clase nativa `Description` para modificar la salida HTML de la descripción del producto en el frontend.

### Comportamiento añadido
Se agrega el siguiente texto debajo de la descripción:

Descripción modificada por Vendor_HelloWorld


### Control de dónde se muestra
Para evitar que el texto aparezca en otros bloques como la descripción corta, se incluye una validación:

```php
$this->getNameInLayout() === 'product.info.description'

```
Esto asegura que el mensaje se añada solo en la descripción larga del producto.

## Instalación

Clonar el repositorio dentro de app/code/Vendor/HelloWorld:
git clone https://github.com/migueleaf28/magento2-helloworld app/code/Vendor/HelloWorld

Habilitar el módulo:
```bash
php bin/magento module:enable Vendor_HelloWorld
```

Ejecutar los procesos de actualización:
```bash
php bin/magento setup:upgrade
```
Limpiar la caché del sistema:
```bash
php bin/magento cache:clean
php bin/magento cache:flush
```

## objetivo del repositorio

Este proyecto demuestra conocimientos clave en:

Creación de módulos Magento 2
Registro de controladores frontend
Uso de di.xml para realizar overrides
Extensión de bloques nativos
Manipulación del método toHtml()
Buenas prácticas de desarrollo en Magento 2