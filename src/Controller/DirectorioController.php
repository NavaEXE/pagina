<?php
    namespace App\Controller;

    use App\Controller\AppController;

    class DirectorioController extends AppController
    {

     public function usuario()
        {
              $this->Authorization->skipAuthorization();
            
        }
          public function provedores()
        {
              $this->Authorization->skipAuthorization();
            
        }
             public function contactos()
        {
              $this->Authorization->skipAuthorization();
            
        }
        public function clientes()
        {  $this->Authorization->skipAuthorization();
            
            
        }
            public function usuarios()
        {
              $this->Authorization->skipAuthorization();
            
        }
         
    }
?>