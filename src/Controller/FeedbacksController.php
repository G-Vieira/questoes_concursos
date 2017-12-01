<?php

  namespace App\Controller;

  use App\Controller\AppController;
  use Cake\Event\Event;

  /**
   * Feedbacks Controller
   *
   * @property \App\Model\Table\FeedbacksTable $Feedbacks
   *
   * @method \App\Model\Entity\Feedback[] paginate($object = null, array $settings = [])
   */
  class FeedbacksController extends AppController {

    public function beforeFilter(Event $event) {
      parent::beforeFilter($event);
      $this->Auth->allow(['add']);
      $this->Auth->deny(['index', 'view', 'delete']);
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index() {
      $result = $this->Feedbacks->find('all');

      $feedbacks = $this->paginate($result);

      $this->set(compact('feedbacks'));
      $this->set('_serialize', ['feedbacks']);
    }

    /**
     * View method
     *
     * @param string|null $id Feedback id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
      $feedback = $this->Feedbacks->get($id, [
	'contain' => []
      ]);

      $this->set('feedback', $feedback);
      $this->set('_serialize', ['feedback']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add() {
      $feedback = $this->Feedbacks->newEntity();
      if ($this->request->is('post')) {
	$feedback = $this->Feedbacks->patchEntity($feedback, $this->request->getData());
	if ($this->Feedbacks->save($feedback)) {
	  $this->Flash->success(__('Seu feedback foi salvo.'));

	  return $this->redirect(['action' => 'index']);
	}
	$this->Flash->error(__('Erro ao salva. Tente novamente'));
      }
      $this->set(compact('feedback'));
      $this->set('_serialize', ['feedback']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Feedback id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
      $this->request->allowMethod(['post', 'delete']);
      $feedback = $this->Feedbacks->get($id);
      if ($this->Feedbacks->delete($feedback)) {
	$this->Flash->success(__('Feedback deletado.'));
      }
      else {
	$this->Flash->error(__('Erro ao deletar. Tente novamente.'));
      }

      return $this->redirect(['action' => 'index']);
    }

  }
  