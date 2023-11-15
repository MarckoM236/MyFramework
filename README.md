# MyFramework
Estructura MVC en PHP con urls amigables.

# Instalacion
Clonar el repositorio
git clone https://github.com/MarckoM236/MyFramework.git

Cambiar nombre del archivo .env.Example a .env

Configurar la base de datos en el archivo .env
DB_HOST=localhost
DB_USER=root
DB_PASS=
DB_NAME=planta

# Modo de uso
* La ruta principal sera dominio/Public
* Las rutas se agregan en el archivo routes.php ubicado en la raiz cuando se requiera
* Las rutas a pasar son el orden clase/metodo/id(opcional)
* Los nuevos controladores extienden a la clase Controller (Controller.php)
* Los modelos extienden a la clase BaseModel (BaseModel.php)
* En las vistas la plantilla principal serta ubicada en App/Views/Layouts
* Se pueden incluir las vistas parciales a la vista principal usando la funcion includeView('nombreVista',[array de datos]->opcional);
* En los controladores existe la funcion $this->view('Layouts/_template',['title'=>$title,'name'=>$nombre]); recibe el nombre de la plantilla principal y un array con datos.
* Si se requiere pasar parametro id a una ruta se puede hacer uso de la funcion route('path_url',$id) recibe la ruta (definida con un nombre en el archivo routes.php) y el id.

