<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Escritorio Controller
 *
 * @property \App\Model\Table\EscritorioTable $Escritorio
 *
 * @method \App\Model\Entity\Escritorio[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EscritorioController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function home()
    {
              $this->Authorization->skipAuthorization();
        $escritorio = $this->paginate($this->Escritorio);

        $this->set(compact('escritorio'));
    }

    /**
     * View method
     *
     * @param string|null $id Escritorio id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $escritorio = $this->Escritorio->get($id, [
            'contain' => [],
        ]);

        $this->set('escritorio', $escritorio);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function agregar()
    {
        $this->Authorization->skipAuthorization();
        $user = $this->request->getAttribute('identity');
        $escritorio = $this->Escritorio->newEmptyEntity();
        if ($this->request->is('post')) {
            $escritorio = $this->Escritorio->patchEntity($escritorio, $this->request->getData());
            $escritorio->id_usuario=$user->id;
            if ($this->Escritorio->save($escritorio)) {
                $this->Flash->success(__('The escritorio has been saved.'));

                return $this->redirect(['action' => 'home']);
            }
            $this->Flash->error(__('The escritorio could not be saved. Please, try again.'));
        }
        $this->set(compact('escritorio'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Escritorio id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function editar($id = null)
    {
          $this->Authorization->skipAuthorization();
        $id=$_GET['note'];
        $escritorio = $this->Escritorio->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $escritorio = $this->Escritorio->patchEntity($escritorio, $this->request->getData());
            if ($this->Escritorio->save($escritorio)) {
                $this->Flash->success(__('The escritorio has been saved.'));

                return $this->redirect(['action' => 'home']);
            }
            $this->Flash->error(__('The escritorio could not be saved. Please, try again.'));
        }
        $this->set(compact('escritorio'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Escritorio id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id= null)
    {
     $this->Authorization->skipAuthorization();
        $id=$_GET['note'];
        $escritorio = $this->Escritorio->get($id);
        if ($this->Escritorio->delete($escritorio)) {
            
        } else {
            $this->Flash->error(__('The escritorio could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'home']);
    }
}
