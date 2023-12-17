<?php
declare(strict_types=1);

namespace App\Controller\Admin;
use Cake\Controller\Component;
use Cake\Controller\Controller;
use Cake\Datasource\ConnectionManager;
use Cake\Http\Cookie\CookieCollection;
use Cake\Event\EventInterface;
use Cake\Log\Engine\FileLog;
use Psr\Log\LogLevel;

/**
 * Admin Controller
 *
 * @method \App\Model\Entity\Admin[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AdminController extends Controller
{
    public function initialize(): void {
        parent::initialize();
        $this->loadComponent('Authentication.Authentication');
        $this->viewBuilder()->setLayout('admin/default');
        // $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
        $this->fetchTable('Users');

        $result = $this->Authentication->getResult();
        $this->user = $result->getData();
        $this->set('user', $result->getData());

        // $this->createLog();

    }


    public function index()
    {
        
        if ($this->user){
            return  $this->redirect(['controller' => 'Dashboard', 'action' => 'index']);
        }
        // return $this->redirect(['controller' => 'Users', 'action' => 'login']);
    }

    public function beforeFilter(EventInterface $event)
    {
        parent::beforeFilter($event);
        $result = $this->Authentication->getResult();

        if (isset($_COOKIE['remember_me'])) {
            $remember = json_decode($_COOKIE['remember_me'], true);

            if ($remember) {
                $user = $this->Users->findByEmail($remember['email'])->first();
                if ($user) {
                    $this->Authentication->setIdentity($user);
                }
            }
        }
        $queries_query = $this->request->getQuery();
        if( $queries_query){
            foreach( $queries_query as $key => $item){
              $item = h( $item);
              $queries_query[$key]=$item;
            }
        }
        $queries_data = $this->request->getData();
        if( $queries_data){
            foreach( $queries_data as $key => $item){
                $item = h( $item);
                $queries_data[$key]=$item;
            }
        }

    }

    public function createLog()
    {
        if(getenv('APP_ENV')) {
            $appDebug = getenv('APP_ENV') == 'dev';
        }else{
            $appDebug = getenv('DEBUG');
            $appDebug = filter_var($appDebug, FILTER_VALIDATE_BOOLEAN);
        }

        if($appDebug) {
            $conn = ConnectionManager::get('default');
            $conn->enableQueryLogging();
            \Cake\Log\Log::setConfig('queries-admin', [
                'className' => FileLog::class,
                'path' => LOGS,
                'file' => 'admin',
                'url' => env('LOG_QUERIES_URL', null),
                'scopes' => ['queriesLog'],
            ]);
        }
        $path = $this->request->getUri()->getPath();
        $method = $this->request->getMethod();
        if(
            $method == "POST"
        ) {
            $params = $this->request->getData();
            if(isset($params['displayName'])) {
                $params['displayName'] = $this->hideString($params['displayName']);
            }
            if(isset($params['loginId'])) {
                $params['loginId'] = $this->hideString($params['loginId']);
            }
            if(isset($params['email'])) {
                $params['email'] = $this->hideString($params['email']);
            }
            if(isset($params['password'])) {
                $params['password'] = $this->hideString($params['password']);
            }
        }
        
       
    }

    public function hideString($string) {
        return str_repeat("*", strlen((string)$string));
    }

}
