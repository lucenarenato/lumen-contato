<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class ContatoController extends Controller{
   
              public function lista(){ 
                          return '<div class="container">

							        <div class="row">
							          <div class="col-lg-12 text-center">
							              <p class="style3">Obrigado pela sua visita!</p>
							              <p class="style2">Contato: <br>
							                Telefone: (62) 98430-6136 / 99118-6882<br>
							                E-mail: cpdrenato@gmail.com</p>
											<div align="center">
							                  <p class="style4">Curriculo Lattes</p>
							                  <p><a href="http://lattes.cnpq.br/4508970962436856"><img src="images/lattes.png" alt="lattes" width="46" height="50" longdesc="http://lattes.cnpq.br/4508970962436856"></a>
							                    
							                  </p>
							            </div>
							        </div>
							        <!-- /.row -->

							    </div>';
              } 

              public function contato(){
			    	return view('contato');
			    }
              
  }

  