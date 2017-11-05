<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Provas Controller
 *
 * @property \App\Model\Table\ProvasTable $Provas
 *
 * @method \App\Model\Entity\Prova[] paginate($object = null, array $settings = [])
 */
class ProvasController extends AppController {

    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        $this->Auth->deny(['index', 'view', 'edit', 'delete']);
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index() {
        $provas = $this->paginate($this->Provas);

        $this->set(compact('provas'));
        $this->set('_serialize', ['provas']);
    }
    
    public function listar(){
        $provas = $this->paginate($this->Provas);

        $this->set(compact('provas'));
        $this->set('_serialize', ['provas']);
    }
    
    /**
     * View method
     *
     * @param string|null $id Prova id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $prova = $this->Provas->get($id, [
            'contain' => []
        ]);

        $this->set('prova', $prova);
        $this->set('_serialize', ['prova']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $prova = $this->Provas->newEntity();
        if ($this->request->is('post')) {
            $prova = $this->Provas->patchEntity($prova, $this->request->getData());
            if ($this->Provas->save($prova)) {
                $this->Flash->success(__('A prova foi cadastrada.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Falha aoo cadastrar a prova.'));
        }
        $this->set(compact('prova'));
        $this->set('_serialize', ['prova']);

        $concursos = $this->Provas->Concursos->find('all');
        $this->set('concursos', $concursos);
    }

    /**
     * Edit method
     *
     * @param string|null $id Prova id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $prova = $this->Provas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $prova = $this->Provas->patchEntity($prova, $this->request->getData());
            if ($this->Provas->save($prova)) {
                $this->Flash->success(__('A prova foi atualizada.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Falha ao atualizar a prova.'));
        }
        $this->set(compact('prova'));
        $this->set('_serialize', ['prova']);

        $concursos = $this->Provas->Concursos->find('all');
        $this->set('concursos', $concursos);
    }

    /**
     * Delete method
     *
     * @param string|null $id Prova id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $prova = $this->Provas->get($id);
        if ($this->Provas->delete($prova)) {
            $this->Flash->success(__('A prova foi deletada.'));
        } else {
            $this->Flash->error(__('Falha ao deletar a prova.'));
        }

        return $this->redirect(['action' => 'index']);
    }

}
