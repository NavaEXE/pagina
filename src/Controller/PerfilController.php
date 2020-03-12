<?php
declare(strict_types=1);

namespace App\Controller;


        function validarRFC($rfc=null){
	$regex = '/^[A-Z]{4}([0-9]{2})(1[0-2]|0[1-9])([0-3][0-9])([ -]?)([A-Z0-9]{4})$/';
	return preg_match($regex, $rfc);
}//fin función
 function uploadImage($imagen){
        
        $imagen = $_FILES;
        $ruta='/webroot/img_contactos/'.$imagen['imagen']['name'];
        move_uploaded_file($imagen['imagen']['tmp_name'],$ruta);
        return $ruta;
    }


/**
 * Perfil Controller
 *
 * @property \App\Model\Table\PerfilTable $Perfil
 *
 * @method \App\Model\Entity\Perfil[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PerfilController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
         $this->Authorization->skipAuthorization();
        $perfil = $this->paginate($this->Perfil);

        $this->set(compact('perfil'));
    }

    /**
     * View method
     *
     * @param string|null $id Perfil id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $perfil = $this->Perfil->get($id, [
            'contain' => [],
        ]);

        $this->set('perfil', $perfil);
    }


    
    
    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function agregar($id  =  null)
    {
        
        /* probando la validacion */

        $user = $this->request->getAttribute('identity');
        $this->Authorization->skipAuthorization();
        $perfil = $this->Perfil->newEmptyEntity();
 
        if ($this->request->is('post')) {
           $imagen=$_FILES;
            $perfil = $this->Perfil->patchEntity($perfil, $this->request->getData());
            $perfil->id_usuario=$user->id;
           
          
            $perfil->status="1";
            $perfil->tipo_persona="1";
           
            
    
            if ($this->Perfil->save($perfil)) {
                $this->Flash->success(__('La información ha sido actualizada correctamente.')); 
                return $this->redirect(['action' => 'agregar']);
            }else  $this->Flash->error(__('The perfil could not be saved. Please, try again.'));
         
      
        
        //$this->set(compact('perfil'));
    }
    }

    /**
     * Edit method
     *
     * @param string|null $id Perfil id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function editar()
    {
               /* probando la validacion */

        $user = $this->request->getAttribute('identity');
        $this->Authorization->skipAuthorization();
        $perfil = $this->Perfil->newEmptyEntity();
 
        if ($this->request->is('post')) {
            $imagen=$_FILES;
        
            $ruta=$_SERVER['DOCUMENT_ROOT'].'/webroot/img/perfil/'.$imagen['imagen']['name'];
            move_uploaded_file($imagen['imagen']['tmp_name'],$ruta);
            $perfil = $this->Perfil->patchEntity($perfil, $this->request->getData());
            $perfil->id_usuario=$user->id;
            $perfil->status="1";
            $perfil->tipo_persona="1";
             $perfil->url_imagen='/webroot/img/perfil/'.$imagen['imagen']['name'];
            if ($this->Perfil->save($perfil)) {
                $this->Flash->success(__('La información ha sido actualizada correctamente.')); 
                return $this->redirect(['action' => 'index']);
            }else  $this->Flash->error(__('The perfil could not be saved. Please, try again.'));
         
        }
        
        //$this->set(compact('perfil'));
    }
    

    /**
     * Delete method
     *
     * @param string|null $id Perfil id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $perfil = $this->Perfil->get($id);
        if ($this->Perfil->delete($perfil)) {
            $this->Flash->success(__('The perfil has been deleted.'));
        } else {
            $this->Flash->error(__('The perfil could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
     public function beforeFilter(\Cake\Event\EventInterface $event)
{
    parent::beforeFilter($event);
    // configure the login action to don't require authentication, preventing
    // the infinite redirect loop issue
    $this->Authentication->addUnauthenticatedActions(['index']);
}
}
