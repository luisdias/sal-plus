<?php
/**
    SALPLUS - Sistema de Acompanhamento de Licitações e Contratos
    Copyright (C) 2013  Smartbyte - Luís E. S. Dias
    Contato : smartbyte.systems@gmail.com
 */
 
 class AppController extends Controller {
    var $name = '';
    var $fk = '';
    var $singularName = '';
    var $ptSingularName = ''; // portuguese singular name for view
    
    var $components = array( 'Auth','Session','Search.Prg' );    
    var $helpers = array('Html','Form','Session','Number','Js','DatePicker','Time','ExPaginator');    

    function __construct() {
        parent::__construct();
        $this->singularName = ucfirst(Inflector::singularize($this->name));
        if ( empty($this->ptSingularName) )
                $this->ptSingularName = $this->singularName;
    }
    
    function beforeFilter() {
            $this->Auth->userModel = 'Usuario';
            $this->Auth->fields = array( 'username' => 'login','password' => 'senha');
            $this->Auth->loginAction=array('controller'=>'usuarios','action'=>'login');
            $this->Auth->loginRedirect=array('controller'=>'licitacoes','action'=>'index');
            $this->Auth->logoutRedirect=array('controller'=>'usuarios','action'=>'login','plugin'=>null);
            $this->Auth->loginError=__('Login ou senha inválido',true);     
            $this->Auth->authError=__('Sem permissão de acesso.',true); 
            $this->Auth->authorize = 'controller';            
    }
    
    function beforeRender() {
           // Make Session variables available to view
           $active_class = "Home";
           $ctrl = $this->name;
           $action = $this->action;
           if ( $ctrl == "Licitacoes" || 
                $ctrl == "Eventos" ||
                $ctrl == "Lotes" ||
                $ctrl == "Resultados" ||                   
                $ctrl == "Contratantes" ||
                $ctrl == "Empresas" ||
                $ctrl == "Modalidades" ||
                $ctrl == "Tipolicitacoes" ||
                $ctrl == "Tipoeventos"  ) {
               $active_class = "Licitacoes";
           } elseif ($ctrl == "Contratos" || 
                     $ctrl == "Aditivos" || 
                   $ctrl == "Ocorrencias" || 
                   $ctrl == "Recursos" || 
                   $ctrl == "Pessoas" || 
                   $ctrl == "Situacoes" || 
                   $ctrl == "Reajustes" || 
                   $ctrl == "Garantias" || 
                   $ctrl == "Tipoaditivos" || 
                   $ctrl == "Tipoocorrencias" || 
                   $ctrl == "Recebimentos" ) {
                   $active_class = "Contratos";
           } elseif ($ctrl == "Reports") {
               $active_class = "Relatorios";
           } elseif ($ctrl == "Usuarios") {
               $active_class = "Configuracoes";
           };
           if ( $action == "mapa") {
                   $active_class = "Home";
           }
           $this->set('user', $this->Auth->user());
           $this->set('user_id', $this->Session->read('user_id'));
           $this->set('user_name', $this->Session->read('user_name'));
           $this->set('user_role', $this->Session->read('user_role'));
           $this->set('active_class', $active_class);
    }
        
    function index() {
        if (isset($this->passedArgs['fk']) || isset($this->data[$this->modelClass]['fk'])) {
            $fk_id = $this->passedArgs['fk'];
            $this->paginate = array('conditions'=> array($this->fk . ' LIKE '=>$fk_id));
        }        
        $this->{$this->modelClass}->recursive = 0;
        $this->set(strtolower($this->name), $this->paginate());
    }

    function view($id = null) {
        if (!$id) {
            $this->Session->setFlash(__($this->name . ' Inválido(a).', true),'default',array('class'=>'error-msg'));
            $this->redirect(array('action'=>'index'));
        }
        $this->setRelated('view');
        $this->set(strtolower($this->singularName),$this->{$this->modelClass}->read(null, $id));
    }
    function add() {
        $this->form();
        $this->render('form');
    }
    function edit($id = null) {
        if (!$id && empty($this->data)) {
            $this->_flash(__($this->name . ' Inválido(a).', true),'error',array('class'=>'error-msg'));                        
            $this->redirect(array('action'=>'index'));
        }
        $this->form($id);
        $this->render('form');
    }
    function form($id = null) {
        $this->beforeForm();
        if (!empty($this->data)) {
            $this->{$this->modelClass}->create();
            $this->data[$this->singularName]['modified_by'] = $this->Auth->user('id');
            if ($this->{$this->modelClass}->save($this->data)) {
                 $this->Session->setFlash(__($this->ptSingularName . ' gravado(a) com sucesso', true),'default',array('class'=>'success-msg')); 
                 // se existe o parametro fk como campo hidden no form entao redirecionar para index com fk
                 if ( isset($this->data[$this->modelClass]['fk']))
                      $this->redirect(array('action'=>'index/fk:'.$this->data[$this->singularName]['fk']));
                 $this->redirect(array('action'=>'index'));
            } else {
                 $this->Session->setFlash(__($this->ptSingularName . ' não pode ser gravado(a). Por favor, tente novamente.', true),'default',array('class'=>'error-msg'));
            }
        } else {
            if ( $this->params['action'] == 'add' ) {
                $this->data[$this->singularName]['modified_by'] = $this->Auth->user('id');                       
                // existe o parametro fk sendo passado ?
                if (isset($this->passedArgs['fk'])) {
                        $fk_id = $this->passedArgs['fk'];
                        $this->data[$this->singularName][$this->fk] = $fk_id;
                }
            }
        }
        if (empty($this->data)) {
            $this->data = $this->{$this->modelClass}->read(null, $id);
        }
        $this->setRelated();
    }
    
    /**
     * se existe o parametro fk na url entao redirecionar para index com fk
     * @param type $id 
     */
    function delete($id = null) {
        if (!$id) {
               $this->Session->setFlash(__($this->ptSingularName . ' Inválido(a).', true),'default',array('class'=>'error-msg'));
               if ( isset($this->passedArgs['fk']))
                    $this->redirect(array('action'=>'index/fk:'.$this->passedArgs['fk']));               
               $this->redirect(array('action'=>'index'));
        }
        if ($this->{$this->modelClass}->delete($id)) {
               $this->Session->setFlash(__($this->ptSingularName . '  excluído(a)', true),'default',array('class'=>'success-msg'));
               if ( isset($this->passedArgs['fk']))
                    $this->redirect(array('action'=>'index/fk:'.$this->passedArgs['fk']));               
               $this->redirect(array('action'=>'index'));
        } 
        // só funciona com debug=0 no core.php senao da erro de "Cannot modify header information"
        $this->Session->setFlash(__("Existem registros relacionados. Não posso excluir",true),'default',array('class'=>'error-msg'));
       if ( isset($this->passedArgs['fk']))
            $this->redirect(array('action'=>'index/fk:'.$this->passedArgs['fk']));        
        $this->redirect(array('action'=>'index'));	       
    }

    /**
     * método que corre nas actions add,edit e view
     */
    function setRelated() {
    }   
    
    /**
     * método necessário quando $this->Auth->authorize = 'controller';
     * @return type 
     */
    function isAuthorized() {
        $msg = 'Acesso não autorizado para este perfil.';
        $adminControllers = array(
            'Usuarios',
            'Modalidades',
            'Tipolicitacoes',
            'Tipoeventos',
            'Situacoes',
            'Reajustes',
            'Garantias',
            'Tipoaditivos',
            'Tipoocorrencias'
        );
        
        if ( (in_array($this->name,$adminControllers)) && ( $this->Auth->user('perfil') != 'admin' ) && ($this->action!='logout')) {
            $this->Session->setFlash(__($msg, true),'default',array('class'=>'error-msg'));
            return false;   
        }            
        
        switch ($this->action) {
        case 'default':
                return true;
                break;
        case 'view':
                return true;				
                break;
        case 'edit':
                if ( $this->Auth->user('perfil') == 'guest' ) {
                        $this->Session->setFlash(__($msg, true));
                        return false;
                } else {
                        return true;
                }
                break;
        case 'delete':
                if ( $this->Auth->user('perfil') == 'guest' ) {
                        $this->Session->setFlash(__($msg, true));
                        return false;
                } else {
                        return true;
                }				
                break;
        case 'add':
                if ( $this->Auth->user('perfil') == 'guest' ) {
                        $this->Session->setFlash(__($msg, true));
                        return false;
                } else {
                        return true;
                }				
                break;
        default:
                return true;
                break;
        }
    }

    
    /**
     * Corre antes do form
     */
    function beforeForm() {

    }
    
    /**
     * http://www.jamesfairhurst.co.uk/posts/view/uploading_files_and_images_with_cakephp
     * uploads files to the server
     * @params:
     *		$folder 	= the folder to upload the files e.g. 'img/files'
     *		$formdata 	= the array containing the form files
     *		$itemId 	= id of the item (optional) will create a new sub folder
     * @return:
     *		will return an array with the success of each file upload
     */
    public function uploadFiles($folder, $formdata, $itemId = null) {    
    // setup dir names absolute and relative
    $folder_url = WWW_ROOT.$folder;
    $rel_url = $folder;

    // create the folder if it does not exist
    if(!is_dir($folder_url)) {
        mkdir($folder_url);
    }

    // if itemId is set create an item folder
    if($itemId) {
        // set new absolute folder
        $folder_url = WWW_ROOT.$folder.'/'.$itemId; 
        // set new relative folder
        $rel_url = $folder.'/'.$itemId;
        // create directory
        if(!is_dir($folder_url)) {
                mkdir($folder_url);
        }
    }

    // list of permitted file types, this is only images but documents can be added
    $permitted = array('image/gif','image/jpeg','image/pjpeg','image/png');

    // loop through and deal with the files
    foreach($formdata as $file) {
        // replace spaces with underscores
        $filename = str_replace(' ', '_', $file['name']);
        // assume filetype is false
        $typeOK = false;
        // check filetype is ok
        foreach($permitted as $type) {
            if($type == $file['type']) {
                    $typeOK = true;
                    break;
            }
        }

        // if file type ok upload the file
        if($typeOK) {
            // switch based on error code
            switch($file['error']) {
                case 0:
                    // check filename already exists
                    if(!file_exists($folder_url.'/'.$filename)) {
                            // create full filename
                            $full_url = $folder_url.'/'.$filename;
                            $url = $rel_url.'/'.$filename;
                            // upload the file
                            $success = move_uploaded_file($file['tmp_name'], $url);
                    } else {
                            // create unique filename and upload file
                            ini_set('date.timezone', 'Europe/London');
                            $now = date('Y-m-d-His');
                            $full_url = $folder_url.'/'.$now.$filename;
                            $url = $rel_url.'/'.$now.$filename;
                            $success = move_uploaded_file($file['tmp_name'], $url);
                    }
                    // if upload was successful
                    if($success) {
                            // save the url of the file
                            $result['urls'][] = $url;
                    } else {
                            $result['errors'][] = __("Error uploaded $filename. Please try again.",true);
                    }
                    break;
                case 3:
                    // an error occured
                    $result['errors'][] = __("Error uploading $filename. Please try again.",true);
                    break;
                default:
                    // an error occured
                    $result['errors'][] = __("System error uploading $filename. Contact webmaster.",true);
                    break;
            }
        } elseif($file['error'] == 4) {
            // no file was selected for upload
            $result['nofiles'][] = __("No file Selected",true);
        } else {
            // unacceptable file type
            $result['errors'][] = __("$filename cannot be uploaded. Acceptable file types: gif, jpg, png.",true);
        }
    }
    return $result;
    }    
    
 }