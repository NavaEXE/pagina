<?php
use Cake\Datasource\ConnectionManager;


     
        if(!isset($_POST['search'])) exit ('No se recibio el valor a buscar');
            
            function search(){
                $conn = ConnectionManager::get('default');
                $search = $_POST['search'];
                $query="SELECT * FROM contactos WHERE nombre Like '%$search%' OR apellido_paterno Like '%$search%' OR apellido_materno Like '%$search%' ";
                $res=$conn->query($query);
            foreach($res as $row ){
                  if($row['url_imagen']=="/webroot/img/contactos/"){
                            
                            $imagen =  "/webroot/img/a3.png";
                        }else{
                            
                             $imagen = $row['url_imagen'];
                        }
                      
                  echo  "<tr>
                        <td class='client-avatar'>
                        
                        <img alt='image' src='".$imagen."'> </td>
                                                    <td><a target='_blanck'  class='client-link'>".$row['nombre'].$row['apellido_paterno'].$row['apellido_materno']."</a></td>
                                                 
                                                    <td class='contact-type'><i class='fa fa-envelope'></i></td>
                                                    <td>".$row['email']."</td>
                                                    <td class='client-status'><a href='/directorio/contactos/contacto?var=".base64_encode($row['id'])."' style='color: white;' class='btn btn-primary'>ir</a></td>
                                                </tr>";
                    
                }
                      
            }
search();
