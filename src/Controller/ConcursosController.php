<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;	

/**
 * Concursos Controller
 *
 * @property \App\Model\Table\ConcursosTable $Concursos
 *
 * @method \App\Model\Entity\Concurso[] paginate($object = null, array $settings = [])
 */
class ConcursosController extends AppController
{
	
	
	  public function beforeFilter(Event $event)
    {
      parent::beforeFilter($event);
      $this->Auth->deny(['index', 'view','edit','delete']);
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $concursos = $this->paginate($this->Concursos);

        $this->set(compact('concursos'));
        $this->set('_serialize', ['concursos']);
    }

    /**
     * View method
     *
     * @param string|null $id Concurso id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $concurso = $this->Concursos->get($id, [
            'contain' => []
        ]);

        $this->set('concurso', $concurso);
        $this->set('_serialize', ['concurso']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $concurso = $this->Concursos->newEntity();
        if ($this->request->is('post')) {
            $concurso = $this->Concursos->patchEntity($concurso, $this->request->getData());
            if ($this->Concursos->save($concurso)) {
                $this->Flash->success(__('O concurso foi cadastrado.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Falha ao cadastrar o concurso.'));
        }
        $this->set(compact('concurso'));
        $this->set('_serialize', ['concurso']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Concurso id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $concurso = $this->Concursos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $concurso = $this->Concursos->patchEntity($concurso, $this->request->getData());
            if ($this->Concursos->save($concurso)) {
                $this->Flash->success(__('O concurso foi atualizado.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Falha ao atualizar o concurso.'));
        }
        $this->set(compact('concurso'));
        $this->set('_serialize', ['concurso']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Concurso id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $concurso = $this->Concursos->get($id);
        if ($this->Concursos->delete($concurso)) {
            $this->Flash->success(__('O concurso foi deletado.'));
        } else {
            $this->Flash->error(__('Falha ao deletar o concurso.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
