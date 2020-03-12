<?php use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;

// Using a scoped route builder.
Router::scope('/', function (RouteBuilder $routes) {
  Router::connect('/', ['controller' => 'Users', 'action' => 'login']); 
    
});

//Escritorio
Router::connect('/escritorio/home', ['controller' => 'Escritorio', 'action' => 'home']); 
Router::connect('/escritorio/agregar', ['controller' => 'Escritorio', 'action' => 'agregar']);

//Directorio

//Contactos
Router::connect('/directorio/contactos', ['controller' => 'Contactos', 'action' => 'contactos']); 
Router::connect('/directorio/contactos/agregar', ['controller' => 'Contactos', 'action' => 'agregar']); 
Router::connect('/contactos/delete', ['controller' => 'Contactos', 'action' => 'delete']); 



Router::connect('/directorio/clientes', ['controller' => 'Clientes', 'action' => 'clientes']); 
Router::connect('/directorio/provedores', ['controller' => 'Directorio', 'action' => 'provedores']); 
Router::connect('/directorio/usuarios', ['controller' => 'Directorio', 'action' => 'usuarios']); 
Router::connect('/directorio/contactos/contacto', ['controller' => 'Contactos', 'action' => 'ver_contacto']); 
Router::connect('/templates/contactos/consulta', ['controller' => 'Contactos', 'action' => 'consulta']); 
//Perfil
Router::connect('/Perfil/index', ['controller' => 'Perfil', 'action' => 'index']); 
Router::connect('/Perfil/editar', ['controller' => 'Perfil', 'action' => 'editar']); 
Router::connect('/users/logout', ['controller' => 'Users', 'action' => 'logout']); 
Router::connect('/escritorio/delete', ['controller' => 'Escritorio', 'action' => 'delete']); 
Router::connect('/escritorio/editar', ['controller' => 'Escritorio', 'action' => 'editar']); 


?>