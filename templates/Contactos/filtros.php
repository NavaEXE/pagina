
<?php


        if(!isset($_POST['filtro'])) exit ('No se recibio el valor a buscar');

            
            function filtro(){
                $filtro = $_POST['filtro'];    
                        echo  "<div><input value='".$filtro."' type='text'></div>";
                        
                                
                        }
                

filtro();
