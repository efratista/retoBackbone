# Reto Técnico Backend Developer

Para la resolución del reto, se siguió los siguientes pasos:
- Se descargó la fuente de información en formato texto desde: https://www.correosdemexico.gob.mx/SSLServicios/ConsultaCP/CodigoPostal_Exportar.aspx
- Se importó el archivo en una base de datos.
- En el proyecto Laravel se desarrolló el código para replicar la funcionalidad de la api https://jobs.backbonesystems.io/api/zip-codes/{zip_code}
- También se trabajo en el seeder para llenar la base de datos con la información requerida. Por defecto la fuente del seeder es el archivo 'database/seeders/source/db_postgresql.sql', que contiene instrucciones sql optimizadas para una base de datos postgreSQL. Si se tiene una base de datos MySQL se deberá usar la fuente 'database/seeders/source/db_mysql.sql', modificando el seeder 'database/seeders/DatabaseSeeder.php' asi: \DB::unprepared(file_get_contents(__dir__ . '/source/db_mysql.sql'));
- Se esta haciendo uso de Eloquent's resource classes, que nos permite facilmente adicionar o eliminar datos en la respuesta json
- En ejemplo a replicar (https://jobs.backbonesystems.io/api/zip-codes/{zip_code}), no se muestra los acentos. Esto podría ser una funcionalidad requerida o no. En esta implementación sí se muestran acentos que es la forma como se obtuvieron los datos de la fuente (https://www.correosdemexico.gob.mx/SSLServicios/ConsultaCP/CodigoPostal_Exportar.aspx)


## Como instalarlo

- Descargar el proyecto del repositorio.

```shell
git clone https://github.com/efratista/retoBackbone.git
```

- Ejecutar las migraciones

```shell
php artisan migrate
```

- Ejecutar el seeder

```shell
php artisan db:seed
```
