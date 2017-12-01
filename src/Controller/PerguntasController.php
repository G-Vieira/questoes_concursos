<?php
namespace App\Controller;

use App\Controller\AppController;


/**
 * Perguntas Controller
 *
 * @property \App\Model\Table\PerguntasTable $Perguntas
 *
 * @method \App\Model\Entity\Pergunta[] paginate($object = null, array $settings = [])
 */
class PerguntasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $perguntas = $this->paginate($this->Perguntas);

        $this->set(compact('perguntas'));
        $this->set('_serialize', ['perguntas']);
    }
    
    /**
     * View method
     *
     * @param string|null $id Pergunta id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pergunta = $this->Perguntas->get($id, [
            'contain' => []
        ]);

        $this->set('pergunta', $pergunta);
        $this->set('_serialize', ['pergunta']);
    }
    
    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pergunta = $this->Perguntas->newEntity();
        if ($this->request->is('post')) {
            $pergunta = $this->Perguntas->patchEntity($pergunta, $this->request->getData());
            if ($this->Perguntas->save($pergunta)) {
                $this->Flash->success(__('A pergunta foi cadastrada.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('A pergunta não foi salva. Tente novamente.'));
        }
        $this->set(compact('pergunta'));
        $this->set('_serialize', ['pergunta']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Pergunta id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pergunta = $this->Perguntas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pergunta = $this->Perguntas->patchEntity($pergunta, $this->request->getData());
            if ($this->Perguntas->save($pergunta)) {
                $this->Flash->success(__('A pergunta foi atualizada.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('A pergunta não foi salva. Tente novamente.'));
        }
        $this->set(compact('pergunta'));
        $this->set('_serialize', ['pergunta']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Pergunta id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pergunta = $this->Perguntas->get($id);
        if ($this->Perguntas->delete($pergunta)) {
            $this->Flash->success(__('A pergunta foi deletada.'));
        } else {
            $this->Flash->error(__('A pergunta não foi deletada. Tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
