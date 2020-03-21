<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Clientes Controller
 *
 * @property \App\Model\Table\ClientesTable $Clientes
 *
 * @method \App\Model\Entity\Cliente[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ClientesController extends AppController
{
        
    public function consulta(){

       

         $this->Authorization->skipAuthorization();
    
         }
    
    
        public function ver_cliente(){
        $this->Authorization->skipAuthorization();
      
         $id=base64_decode($_REQUEST['var']);
        $row =  $this->Clientes->get($id, [
            'contain' => [],
        ]);
   
      
             $url=$row['url_imagen'];   
                
            
     
        $cliente = $this->Clientes->newEmptyEntity();
        if ($this->request->is('post')) {
            $imagen=$_FILES;
            $ruta=$_SERVER['DOCUMENT_ROOT'].'/webroot/img/clientes/'.$imagen['imagen']['name'];
            move_uploaded_file($imagen['imagen']['tmp_name'],$ruta);
            $cliente = $this->Clientes->patchEntity($cliente, $this->request->getData());
            $cliente->url_imagen='/webroot/img/clientes/'.$imagen['imagen']['name'];
            $cliente->id=$id;
            $cliente->status = 1;
            $cliente->pais="mexico";
            if($cliente['url_imagen']=="/webroot/img/clientes/"){
                
                $cliente->url_imagen=$url;
            }
            if ($this->Clientes->save($cliente)) {
                $this->Flash->success(__('El contacto ha sido actualizado correctamente.'));

                return $this->redirect('/directorio/clientes/cliente?var='.$_REQUEST['var'].'');
            }
            $this->Flash->error(__('El contacto no ha sido guardado correctamente, vuleva a intentarlo.'));
        }
        $this->set(compact('cliente'));
        
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function clientes()
    {
      $this->Authorization->skipAuthorization();
        $clientes = $this->Clientes->newEmptyEntity();
 
        if ($this->request->is('post')) {
            $imagen=$_FILES;
            $ruta=$_SERVER['DOCUMENT_ROOT'].'/webroot/img/clientes/'.$imagen['imagen']['name'];
           
            move_uploaded_file($imagen['imagen']['tmp_name'],$ruta);
            $clientes = $this->Clientes->patchEntity($clientes, $this->request->getData());
            $clientes->url_imagen='/webroot/img/clientes/'.$imagen['imagen']['name'];
            $clientes->status=0;
            $clientes->pais="mexico";
            if ($this->Clientes->save($clientes)) {
                $this->Flash->success(__('The contacto has been saved.'));

                return $this->redirect(['action' => 'clientes']);
            }
            $this->Flash->error(__('The contacto could not be saved. Please, try again.'));
        }
        $this->set(compact('clientes'));
    }

    /**
     * View method
     *
     * @param string|null $id Cliente id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cliente = $this->Clientes->get($id, [
            'contain' => [],
        ]);

        $this->set('cliente', $cliente);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cliente = $this->Clientes->newEmptyEntity();
        if ($this->request->is('post')) {
            $cliente = $this->Clientes->patchEntity($cliente, $this->request->getData());
            if ($this->Clientes->save($cliente)) {
                $this->Flash->success(__('The cliente has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cliente could not be saved. Please, try again.'));
        }
        $this->set(compact('cliente'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Cliente id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cliente = $this->Clientes->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cliente = $this->Clientes->patchEntity($cliente, $this->request->getData());
            if ($this->Clientes->save($cliente)) {
                $this->Flash->success(__('The cliente has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cliente could not be saved. Please, try again.'));
        }
        $this->set(compact('cliente'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Cliente id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */

        public function delete($id = null)
    {
    $this->Authorization->skipAuthorization();
         $id=base64_decode($_REQUEST['var']);
        $row =  $this->Clientes->get($id, [
            'contain' => [],
        ]);
 
 
        $cliente = $this->Clientes->newEmptyEntity();

            $cliente = $this->Clientes->patchEntity($cliente,$this->request->getData());   
            $cliente->id=$row['id'];
            $cliente->tipo_persona=$row['tipo_persona'];
            $cliente->nombre=$row['nombre'];
            $cliente->apellido_paterno=$row['apellido_paterno'];
            $cliente->apellido_materno=$row['apellido_materno'];
            $cliente->titulo=$row['titulo'];
            $cliente->calle=$row['calle'];
            $cliente->colonia=$row['colonia'];
            $cliente->municipio=$row['municipio'];
            $cliente->estado=$row['estado'];
            $cliente->pais=$row['pais'];
            $cliente->codigo_postal=$row['codigo_postal'];
            $cliente->numero_externo=$row['numero_externo'];
            $cliente->numero_interno=$row['numero_interno'];
            $cliente->rfc=$row['rfc'];
            $cliente->curp=$row['curp'];
            $cliente->email=$row['email'];
            $cliente->telefono=$row['telefono'];
            $cliente->celular=$row['celular'];
            $cliente->rfc=$row['rfc'];
            $cliente->url_imagen=$row['url_imagen'];
            $cliente->pagina_web=$row['pagina_web'];
            $cliente->status = 0;
         
            if ($this->Clientes->save($cliente)) {
                $this->Flash->success(__('El Cliente ha sido Borrado exitosamente.'));

                return $this->redirect('/directorio/clientes');
            }
            $this->Flash->error(__('El cliente no ha sido borrado correctamente, vuleva a intentarlo.'));
        
        $this->set(compact('cliente'));
    }
}
