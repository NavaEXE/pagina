<?php
use Cake\Datasource\ConnectionManager;


     
        if(!isset($_POST['search'])) exit ('No se recibio el valor a buscar');

            
            function search2(){
                $conn = ConnectionManager::get('default');
                $search = $_POST['search'];
                $query="SELECT * FROM clientes WHERE nombre Like '%$search%' OR apellido_paterno Like '%$search%' OR apellido_materno Like '%$search%' ";
                $res=$conn->query($query);
            foreach($res as $row ){
                  if($row['url_imagen']=="/webroot/img/clientes/"){
                            
                            $imagen =  "/webroot/img/a3.png";
                        }else{
                            
                             $imagen = $row['url_imagen'];
                        }
                      
                  echo  "<tr>
                        <td class='client-avatar'>
                        
                        <img alt='image' src='".$imagen."'> </td>
                                           
                                                  <td class='client-status'><a style='color:black' href='/directorio/clientes/cliente?var=".base64_encode($row['id'])."'  class=''>".$row['nombre'].$row['apellido_paterno'].$row['apellido_materno']."</a></td>  
                                                    <td class='contact-type'><i style='font-size: 20px;' class='fa fa-mobile'></i></td>
                                                    <td>".$row['telefono']."</td>
                                                      <td class='contact-type'><i style='font-size: 20px;' class='fa fa-phone'></i></td>
                                                    <td>".$row['celular']."</td>
                                            
                                                </tr>";
                    
                }
                      
            }



    


search2();
