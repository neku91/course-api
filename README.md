# Prueba técnica: Course-Api 

API robusta desarrollada con **Laravel 12** diseñada para la gestión de cursos, instructores y valoraciones. 
El proyecto está optimizado para el manejo de **altos volúmenes de datos** y sigue principios de **Clean Code**, **SOLID** y **Arquitectura de Servicios**.

## Arquitectura y rendimiento

Para cumplir con los requisitos de escalabilidad, se han implementado las siguientes soluciones:

### 1. Gestión de Datos Masivos
* **Cursor Pagination:** Para el listado de instructores, se utiliza `cursorPaginate()`. A diferencia de  `paginate()`., el cursor mantiene un rendimiento constante sin importar la profundidad de la página, evitando la degradación de la base de datos.
* **Selective Loading:** Se implementó `select('id', 'name', 'email')` en consultas masivas para reducir el consumo de memoria RAM en el servidor y minimizar el payload de la respuesta JSON.

### 2. Capa de Servicio (Service Layer)
* Se ha extraído la lógica de cálculo de promedios del rating al `CourseRatingService`. Esto desacopla la lógica de negocio del controlador, facilitando el mantenimiento y permitiendo que el cálculo sea reutilizable en otras partes de la aplicación.

### 3. Modelado de Datos Avanzado
* **Relaciones Polimórficas:** Las valoraciones (`ratings`) y comentarios se han diseñado como relaciones polimórficas, permitiendo que el sistema sea extensible a cualquier otra entidad sin modificar la estructura de la base de datos.

### 4. Robustez y Seguridad
* **Form Requests:** Validación centralizada para garantizar integridad de datos.
* **Manejo de Excepciones:** Control exhaustivo con bloques `try-catch` diferenciando errores `404`, `422` y `500`.
* **API Resources:** Capa de transformación que evita el problema de consultas N+1 mediante Eager Loading controlado.

### 5. Seeder Jerárquico
El sistema de generación de datos crea estructuras completas de dependencias (Instructores con Cursos, Lecciones con Vídeos,  Ratings y Comentarios cruzados) para simular un entorno de producción real.

---

## Instalación
1. Clonar el repositorio
    ```bash
    git clone https://github.com/neku91/course-api.git
   cd course-api
    ```
2. Instalar dependencias
    ```bash
    composer install
    ```
3. Configurar el archivo .env. Laravel necesita un archivo .env. Copiamos el de ejemplo que viene por defecto:
    ```bash
    cp .env.example .env
    ```
5. Generar la clave de la aplicación
    ```bash
   php artisan key:generate
    ```
2. Ejecutar Migraciones y Seeders:
    ```bash
    php artisan migrate --seed
    ```



## API Endpoints
*  Se ha utilizado la libreria Scribe para la generación de la documentacion de la api. Esta es accesibe desde la siguiente URl : 
```bash
  http://localhost/docs
```
*  Se ha incluido un archivo .http para poder realizar llamadas a los endpoints de la API
---

## Calidad de Código y estilo
Para asegurar que el código no solo funcione, sino que sea excelente, se han usado dos herramientas clave en el flujo de trabajo:

PHPStan: Para el análisis estático del código para detectar posibles errores antes de que ocurran, asegurando que los tipos de datos y la lógica sean correctos.

Laravel Pint: Para mantener el estilo de código limpio y consistente de forma automática, siguiendo las recomendaciones de la comunidad Laravel.

Para ejecutar estas herramientas, puedes usar los siguientes comandos:
```bash
composer run lint
```
```bash
composer run stan
```

Para ejecutar los comandos anteriores y realizar los test:
```bash
composer run check
```
