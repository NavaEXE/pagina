<?php
declare(strict_types=1);

namespace App\Controller;


 function uploadImage($imagen){
        
        $imagen = $_FILES;
        $ruta='/webroot/img_contactos/'.$imagen['imagen']['name'];
        move_uploaded_file($imagen['imagen']['tmp_name'],$ruta);
        return $ruta;
    }

/**
 * Contactos Controller
 *
 * @property \App\Model\Table\ContactosTable $Contactos
 *
 * @method \App\Model\Entity\Contacto[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */




class ContactosController extends AppController
{
    

    
    public function consulta(){

       

         $this->Authorization->skipAuthorization();
    
         }
        public function filtros(){

       

         $this->Authorization->skipAuthorization();
    
         }
   

    
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function contactos()
    {
        $this->Authorization->skipAuthorization();
        $contacto = $this->Contactos->newEmptyEntity();
 
        if ($this->request->is('post')) {
            $imagen=$_FILES;
            $ruta=$_SERVER['DOCUMENT_ROOT'].'/webroot/img/contactos/'.$imagen['imagen']['name'];
           
            move_uploaded_file($imagen['imagen']['tmp_name'],$ruta);
            $contacto = $this->Contactos->patchEntity($contacto, $this->request->getData());
            $contacto->url_imagen='/webroot/img/contactos/'.$imagen['imagen']['name'];
            $contacto->status = "1";
            $contacto->pais="mexico";
            if ($this->Contactos->save($contacto)) {
                $this->Flash->success(__('El contacto ha sido guardado correctamente.'));

                return $this->redirect(['action' => 'contactos']);
            }
            $this->Flash->error(__('The contacto could not be saved. Please, try again.'));
        }
        $this->set(compact('contacto'));
    }

    /**
     * View method
     *
     * @param string|null $id Contacto id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $contacto = $this->Contactos->get($id, [
            'contain' => [],
        ]);

        $this->set('contacto', $contacto);
    }
    
    public function ver_contacto(){
        $this->Authorization->skipAuthorization();
      
         $id=base64_decode($_REQUEST['var']);
        $row =  $this->Contactos->get($id, [
            'contain' => [],
        ]);
   
      
             $url=$row['url_imagen'];   
                
            
     
        $contacto = $this->Contactos->newEmptyEntity();
        if ($this->request->is('post')) {
            $imagen=$_FILES;
            $ruta=$_SERVER['DOCUMENT_ROOT'].'/webroot/img/contactos/'.$imagen['imagen']['name'];
            move_uploaded_file($imagen['imagen']['tmp_name'],$ruta);
            $contacto = $this->Contactos->patchEntity($contacto, $this->request->getData());
            $contacto->url_imagen='/webroot/img/contactos/'.$imagen['imagen']['name'];
            $contacto->id=$id;
            $contacto->status = 1;
               $contacto->pais="mexico";
            if($contacto['url_imagen']=="/webroot/img/contactos/"){
                
                $contacto->url_imagen=$url;
            }
            if ($this->Contactos->save($contacto)) {
                $this->Flash->success(__('El contacto ha sido actualizado correctamente.'));

                return $this->redirect('/directorio/contactos/contacto?var='.$_REQUEST['var'].'');
            }
            $this->Flash->error(__('El contacto no ha sido guardado correctamente, vuleva a intentarlo.'));
        }
        $this->set(compact('contacto'));
        
    }

    /**
     * Add method   
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function agregar()
    {
        $this->Authorization->skipAuthorization();
        $contacto = $this->Contactos->newEmptyEntity();
        
        if ($this->request->is('post')) {
            $imagen=$_FILES;
            $ruta=$_SERVER['DOCUMENT_ROOT'].'/webroot/img/contactos/'.$imagen['imagen']['name'];
           
            move_uploaded_file($imagen['imagen']['tmp_name'],$ruta);
            $contacto = $this->Contactos->patchEntity($contacto, $this->request->getData());
            $contacto->status = "1";
            $contacto->url_imagen='/webroot/img/contactos/'.$imagen['imagen']['name'];;
            if ($this->Contactos->save($contacto)) {
                $this->Flash->success(__('The contacto has been saved.'));

                return $this->redirect(['action' => 'contactos']);
            }
            $this->Flash->error(__('The contacto could not be saved. Please, try again.'));
        }
        $this->set(compact('contacto'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Contacto id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $contacto = $this->Contactos->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $contacto = $this->Contactos->patchEntity($contacto, $this->request->getData());
            if ($this->Contactos->save($contacto)) {
                $this->Flash->success(__('The contacto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The contacto could not be saved. Please, try again.'));
        }
        $this->set(compact('contacto'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Contacto id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
    $this->Authorization->skipAuthorization();
         $id=base64_decode($_REQUEST['var']);
        $row =  $this->Contactos->get($id, [
            'contain' => [],
        ]);
 
 
        $contacto = $this->Contactos->newEmptyEntity();

            $contacto = $this->Contactos->patchEntity($contacto,$this->request->getData());   
            $contacto->id=$row['id'];
            $contacto->nombre=$row['nombre'];
            $contacto->apellido_paterno=$row['apellido_paterno'];
            $contacto->apellido_materno=$row['apellido_materno'];
            $contacto->titulo=$row['titulo'];
            $contacto->calle=$row['calle'];
            $contacto->colonia=$row['colonia'];
            $contacto->municipio=$row['municipio'];
            $contacto->estado=$row['estado'];
            $contacto->pais=$row['pais'];
            $contacto->codigo_postal=$row['codigo_postal'];
            $contacto->numero_externo=$row['numero_externo'];
            $contacto->numero_interno=$row['numero_interno'];
            $contacto->rfc=$row['rfc'];
            $contacto->curp=$row['curp'];
            $contacto->email=$row['email'];
            $contacto->telefono=$row['telefono'];
            $contacto->celular=$row['celular'];
            $contacto->rfc=$row['rfc'];
            $contacto->url_imagen=$row['url_imagen'];
            $contacto->status = 0;
            if ($this->Contactos->save($contacto)) {
                $this->Flash->success(__('El contacto ha sido Borrado exitosamente.'));

                return $this->redirect('/directorio/contactos');
            }
            $this->Flash->error(__('El contacto no ha sido borrado correctamente, vuleva a intentarlo.'));
        
        $this->set(compact('contacto'));
    }
}
