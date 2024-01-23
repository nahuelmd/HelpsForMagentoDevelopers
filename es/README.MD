###### Español:

# Comandos de Magento 2.4

A continuación se presenta una lista de algunos de los comandos más comunes en Magento 2.4, ordenados aproximadamente desde los más utilizados hasta los menos utilizados. Esta lista no es exhaustiva y la frecuencia de uso puede variar según el proyecto y el equipo de desarrollo.

## 0. Mas Usados
- `rm -rf generated/*`
- `rm -rf pub/static/* var/view_preprocessed/*` 
- `php -d memory_limit=1024M bin/magento setup:di:compile`
- `bin/magento cache:clean` - Limpia la caché.

## 1. Configuración y Mantenimiento

- `bin/magento setup:upgrade` - Actualiza la base de datos y el esquema del sistema.
- `bin/magento setup:di:compile` - Compila el código de Magento.
- `php -d memory_limit=1024M bin/magento setup:di:compile` - Compila el código de Magento definiendo el limite de memoria de php
- `rm -rf generated/*` Elimina la carpeta generated,
- `bin/magento setup:static-content:deploy` - Despliega contenido estático.
- `bin/magento cache:clean` - Limpia la caché.
- `bin/magento cache:flush` - Vacia la caché.
- `rm -rf pub/static/* var/view_preprocessed/*` - Eliminar los archivos estáticos generados.
- `bin/magento indexer:reindex` - Reindexa todos los indexadores.
- `bin/magento maintenance:enable` - Habilita el modo de mantenimiento.
- `bin/magento maintenance:disable` - Deshabilita el modo de mantenimiento.

## 2. Desarrollo y Depuración

- `php bin/magento deploy:mode:set developer` - Cambia al modo de desarrollador
- `php bin/magento deploy:mode:show` - Comprobar el cambio a modo de desarrollo
- `php bin/magento dev:template-hints:enable` - Habilitar las sugerencias de plantilla (template hints)
- `bin/magento dev:source-theme:deploy` - Despliega archivos estáticos para un tema en desarrollo.
- `bin/magento dev:tests:run` - Ejecuta pruebas.
- `bin/magento dev:query-log:enable` - Habilita el log de consultas de la base de datos.
- `bin/magento dev:query-log:disable` - Deshabilita el log de consultas de la base de datos.

## 3. Gestión de Módulos y Extensiones

- `bin/magento module:enable` - Habilita uno o más módulos.
- `bin/magento module:disable` - Deshabilita uno o más módulos.
- `bin/magento module:status` - Muestra el estado de todos los módulos.

## 4. Gestión de Productos y Categorías

- `bin/magento catalog:product:attributes:cleanup` - Limpia los atributos de los productos no utilizados.
- `bin/magento catalog:images:resize` - Redimensiona las imágenes de los productos.

## 5. Gestión de Clientes y Pedidos

- `bin/magento customer:hash:upgrade` - Actualiza las contraseñas de los clientes a la última versión del algoritmo de hash.

## 6. Internacionalización y Localización

- `bin/magento i18n:collect-phrases` - Recopila frases para traducción.
- `bin/magento i18n:pack` - Empaqueta las traducciones.

## 7. Otros Comandos Útiles

- `bin/magento admin:user:create` - Crea un nuevo usuario administrador.
- `bin/magento cron:run` - Ejecuta trabajos cron.
- `bin/magento setup:db-schema:upgrade` - Actualiza el esquema de la base de datos.

Para obtener una lista completa y actualizada de los comandos disponibles, ejecuta el siguiente comando en la raíz de tu instalación de Magento:

```bash
bin/magento list
```
