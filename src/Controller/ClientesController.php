<?php
namespace App\Controller;

use App\Controller\AppController;
use \Carbon\Carbon;
use \Carbon\CarbonImmutable;
use Cake\ORM\ClientesTable;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;
/**
 * Clientes Controller
 *
 * @property \App\Model\Table\ClientesTable $Clientes
 *
 * @method \App\Model\Entity\Cliente[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ClientesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $data_inicial = $this->request->query('data_inicial');
        $data_final = $this->request->query('data_final');

        $conditions = [];
        if($data_inicial && $data_final)
        {
            $conditions[] = [
                'DATE(clientes.created) >=' => $data_inicial,
                'DATE(clientes.created) <=' => $data_final
            ];
        }

        $this->paginate = [
            'conditions' => $conditions
        ];

        $clientes = $this->paginate($this->Clientes);

        $this->set(compact('clientes'));
    }

    /**
     * View method
     *
     * @param string|null $id Cliente id.
     */
    public function view($id = null)
    {
        $cliente = $this->Clientes->get($id, [
            'contain' => []
        ]);

        $this->set('cliente', $cliente);
    }

    /**
     * Add method
     *
     */
    public function add()
    {
        $cliente = $this->Clientes->newEntity();
        if ($this->request->is('post')) {
            $cliente = $this->Clientes->patchEntity($cliente, $this->request->getData());
            if ($this->Clientes->save($cliente)) {
                $this->Flash->success(__('Cliente salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Ops! Erro ao salvar o Cliente'));
        }
        $this->set(compact('cliente'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Cliente id.
     */
    public function edit($id = null)
    {
        $cliente = $this->Clientes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cliente = $this->Clientes->patchEntity($cliente, $this->request->getData());
            if ($this->Clientes->save($cliente)) {
                $this->Flash->success(__('Cliente Salvo com Sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Ops! Erro ao salvar o cliente.'));
        }
        $this->set(compact('cliente'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Cliente id.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cliente = $this->Clientes->get($id);
        if ($this->Clientes->delete($cliente)) {
            $this->Flash->success(__('Cliente Deletado com sucesso.'));
        } else {
            $this->Flash->error(__('Ops! Erro ao deletar o cliente.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function analise()
    {
        $this->loadModel('Clientes');

        $registerOfMonth = $this->Clientes->find()->where('MONTH(created) = MONTH(NOW())')->count();
        $registerOfDay = $this->Clientes->find()->where('created = CURDATE()')->count();

        $this->set(compact('registerOfDay','registerOfMonth'));
    }
}
