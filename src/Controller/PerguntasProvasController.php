<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PerguntasProvas Controller
 *
 * @property \App\Model\Table\PerguntasProvasTable $PerguntasProvas
 *
 * @method \App\Model\Entity\PerguntasProva[] paginate($object = null, array $settings = [])
 */
class PerguntasProvasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Perguntas', 'Provas']
        ];
        $perguntasProvas = $this->paginate($this->PerguntasProvas);

        $this->set(compact('perguntasProvas'));
        $this->set('_serialize', ['perguntasProvas']);
    }

    /**
     * View method
     *
     * @param string|null $id Perguntas Prova id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $perguntasProva = $this->PerguntasProvas->get($id, [
            'contain' => ['Perguntas', 'Provas']
        ]);

        $this->set('perguntasProva', $perguntasProva);
        $this->set('_serialize', ['perguntasProva']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $perguntasProva = $this->PerguntasProvas->newEntity();
        if ($this->request->is('post')) {
            $perguntasProva = $this->PerguntasProvas->patchEntity($perguntasProva, $this->request->getData());
            if ($this->PerguntasProvas->save($perguntasProva)) {
                $this->Flash->success(__('A associação foi salva.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('A associação não foi salva.'));
        }
        $perguntas = $this->PerguntasProvas->Perguntas->find('list', ['limit' => 200]);
        $provas = $this->PerguntasProvas->Provas->find('list', ['limit' => 200]);
        $this->set(compact('perguntasProva', 'perguntas', 'provas'));
        $this->set('_serialize', ['perguntasProva','perguntas','provas']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Perguntas Prova id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $perguntasProva = $this->PerguntasProvas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $perguntasProva = $this->PerguntasProvas->patchEntity($perguntasProva, $this->request->getData());
            if ($this->PerguntasProvas->save($perguntasProva)) {
                $this->Flash->success(__('A associação foi atualizada.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('A associação não foi atualizada.'));
        }
        $perguntas = $this->PerguntasProvas->Perguntas->find('list', ['limit' => 200]);
        $provas = $this->PerguntasProvas->Provas->find('list', ['limit' => 200]);
        $this->set(compact('perguntasProva', 'perguntas', 'provas'));
        $this->set('_serialize', ['perguntasProva','perguntas','provas']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Perguntas Prova id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $perguntasProva = $this->PerguntasProvas->get($id);
        if ($this->PerguntasProvas->delete($perguntasProva)) {
            $this->Flash->success(__('A associação foi deletada.'));
        } else {
            $this->Flash->error(__('A associação não foi deletada.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}