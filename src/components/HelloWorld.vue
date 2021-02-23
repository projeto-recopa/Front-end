<template>
  <div class="hello">
    
    <section id="telalogin" v-if="loginseen" style="background-color: #006633; min-height:760px;">

    <div  class="login-form">    
        <form>
          <div class="avatar"> <img alt="Vue logo" src="../assets/logo.svg"></div>
          <h4 class="modal-title"></h4>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Usuário" required="">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Senha" required="">
            </div>
            <div class="form-group small clearfix">
                <label class="form-check-label"><input type="checkbox"> Lembrar-me</label>
                <a href="#" class="forgot-link">Esqueceu a Senha?</a>
            </div> 
            <input @click.prevent="UserLogin" type="submit" class="btn btn-primary btn-block btn-lg" value="Entrar">              
        </form>			
        <!-- <div class="text-center small">Não tem uma conta? <a href="#">Cadastre-se</a></div> -->
    </div>
    </section>
    <!-- menu -->
    <template v-if="submenu"> 
      
      <ul class="nav justify-content-around" id="menu" style="
    background: #006633; align-items: center;">
        <li class="nav-item ">
          <a class="nav-link" style="color: white;"><img class="responsive" src="../assets/easy.png" alt="" style="height: 30px;"></a>
        </li>
        

        <li class="nav-item">
          <a @click.prevent="getAll" class="nav-link" href="#">Todos os Documentos</a>
        </li>
        
        <li class="nav-item">
          <a @click.prevent="logout" class="nav-link" href="#">Sair</a>
        </li>
      </ul>
    </template>
    <!-- fim menu -->
    <div v-if="uploadseen" style="text-align:center; padding-top: 100px;">
            <!-- Barra de Status -->
          <div>
                <img src="../assets/1.png" alt="" class="responsive"><br><br>        
          </div><!-- FIM DA BARRA DE PROGRESSO -->
    
    <input type="file" id="arquivo" @change="onFileSelected">
    <button class="btn btn-success" @click.prevent="onUpload"> Extrair Dados</button>
    <br>
        <template v-if="loader.uploadImg">
        <img src="../assets/loading.svg" alt="" style="height: 40px;">   
        </template>
        <progress max="100" :value.prop="uploadPercentage"></progress>
    <br>
    <br>
   
    <!-- <div v-if="!url"> <img src="../assets/x.jpg" alt="" style="height: 400px;"></div>
    <div id="preview">
      <img v-if="url" :src="url" alt="no image">
    </div> -->
    <!-- <template v-if="!loader.uploadFinish">
        
        <button class="btn btn-success" @click.prevent="ShowData">Visualizar Dados Processados</button>  
    </template> -->
    
    
    <!-- <button v-if="!dados" @click.prevent="send">Enviar Dados Salvos</button> -->
    </div>
    <template v-if="tableseen">
                  <!-- Barra de Status -->
      <div style="text-align:center; padding-top: 100px;">
          <img src="../assets/2.png" alt="" class="responsive"><br><br>                            
       </div><!-- FIM DA BARRA DE PROGRESSO -->

    </template>
    <template v-if="formseen">
                  <!-- Barra de Status -->
      <div style="text-align:center; padding-top: 100px;">
          <img src="../assets/2.png" alt="" class="responsive"><br><br>                            
       </div><!-- FIM DA BARRA DE PROGRESSO -->

    </template>
    <template v-if="tableseen2">
      <section style="padding-top: 20px; padding-bottom: 20px; text-align:center;">
          <button @click.prevent="UserLogin" class="btn btn-danger">Voltar</button>
      </section> 
      
    </template>

    <template>
      <!-- TABLE MOSTRA ALL-->
            <div v-if="tableseen2" class="container-md-auto">
                

          <div class="table-wrapper">

          <div class="table-title">
            <div class="row">
              <div class="col-sm-6" style="text-align: left;">
                <h2>Gerenciar Dados</h2>
                
              </div>
              
            </div>
          </div>
          <table  class="table table-bordered table-hover table-sm" style="background: white;" >
            <thead>
              <tr>
                <!-- <th scope="col">ID</th> -->
                <th scope="col">CPF</th>
                <th scope="col">Status</th>
                <th scope="col">Nome Completo</th>
                <th scope="col">Nome Mãe</th>
                <th scope="col">Mun. Residencia</th>
                <th scope="col">Covid-19</th>
                <th scope="col">Ação</th>
                        
              </tr>
            </thead>
            <tbody>
              <tr v-for="info of dados" :key="info.id">
                <!-- <th scope="row">{{info.id}}</th> -->
                <th scope="row">{{info.cpf}}</th>
                <td>{{info.status}}</td>
                <td>{{info.nomeCompleto}}</td>
                <td>{{info.nomeCompletoMae}}</td>
                <td>{{info.municipioResidencia}}</td>
                <td>{{info.resultadoTeste}}</td>
                <!-- <td>{{info.id}}</td>
                <td>{{info.name}}</td>
                <td>{{info.username}}</td>
                <td>{{info.email}}</td>
                <td>{{info.phone}}</td> teste -->
                <td>
                  <button  @click.prevent="editar(info)" class="btn btn-primary-outline"><i class="material-icons">&#xE254;</i></button>
                  <button  @click.prevent="deleteInfo(info)" class="btn btn-primary-outline"><i class="material-icons">delete</i></button>
                  <button @click.prevent="downloadDoc(info)"><i class="material-icons">download</i></button>
                </td>
              </tr>
            </tbody>
          </table>
          </div>

            </div> 
            <!-- FIM TABLE MOSTRA ALL -->
    </template>
    <template>
        <div v-if="msgseen" style="text-align:center; padding-top: 100px;">
      <!-- Barra de Status -->
          <div>
                <img src="../assets/3.png" alt="" class="responsive"><br><br> 
                  
          </div><!-- FIM DA BARRA DE PROGRESSO -->
      <div class="alert alert-success" role="alert">

      <h4 class="alert-heading">Arquivo Enviado com Sucesso!</h4>
      
      <hr>
      <p class="mb-0 text-center">Caso deseje enviar mais um Documento Utilize a opção abaixo</p>

      <button class="btn btn-success" @click.prevent="SendAgain">Enviar Novo Documento</button>
      </div>
      </div>
    </template>
    <!-- <div v-if="!url && !loginseen && !tableseen2 && !msgseen && !sendseen && !formseen" style="text-align: center;"> <img src="../assets/tablet02.png" alt="" style="height: 400px;"></div> -->
     <div class="container-fluid">
       
        <div class="row">
            <div class="col-sm"> <!-- Primeira Coluna -->
            <div v-if="!url && !loginseen && !tableseen2 && !msgseen && !sendseen && !formseen" style="text-align: center;"> <img src="../assets/tablet04.png" alt="" class="responsive" style="height: 220px;"></div>
              <div v-if="!url && formseen"> <img src="../assets/x.jpg" alt="" style="height: 400px;" class="responsive"></div>
              <div  id="preview">
                <img v-if="url && !msgseen && !sendseen" :src="url" alt="no image"  style="border: solid">
              </div>
            </div>
            <div v-if="!loader.uploadFinish && !tableseen2 && !msgseen && !sendseen && !formseen && !loginseen" class="col-sm" style="text-align: center;"> <!-- Segunda Col -->
              <div v-if="!loader.uploadImg && !loginseen && !loader.uploadFinish">
                  <img src="../assets/back04.png" alt="" style="height: 250px;" class="responsive">
                  
              </div>
              <div v-if="loader.uploadImg">
                    <img src="../assets/loadingeasy.gif" alt="" style="height: 250px; color: green;" class="responsive">   
              </div>
            </div>
            <div class="col-sm"> <!-- Terceira Col -->
              <!--FORM-->
              <div v-if="!loader.uploadFinish && uploadseen" style="text-align: center;">
                <img src="../assets/pcform.jpg" alt="" class="responsive" style="height: 250px;">
              </div>
              <div v-if="formseen" class="container-sm" id="form1">
                  
                <h3 style="border-bottom: outset;">Ficha Cadastral</h3><br>
                  <form @submit.prevent="Edit" class="font-size: xx-small;">
                      <div class="row">


                          <div class="col-md-12">
                            <div class="form-group">
                              <label>
                                <h4>Identificação</h4>
                              </label>
                            </div>

                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                                <label>Tem CPF?</label>
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="true" v-model="info.possuiCPF">
                                  <label class="form-check-label" for="flexRadioDefault1">
                                    Sim
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="false" v-model="info.possuiCPF">
                                  <label class="form-check-label" for="flexRadioDefault2">
                                    Não
                                  </label>
                                </div>                                                                       
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                                <label>Estrangeiro?</label>
                               <div class="form-check">
                                  <input class="form-check-input" type="radio" name="flexRadio2" id="flexRadioDefault3" value="true" v-model="info.estrangeiro">
                                  <label class="form-check-label" for="flexRadioDefault3">
                                    Sim
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="flexRadio2" id="flexRadioDefault4" value="false" v-model="info.estrangeiro" >
                                  <label class="form-check-label" for="flexRadioDefault4">
                                    Não
                                  </label>
                                </div>                                                      
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                                <label>Profissional da Saude?</label>
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="flexRadio3" id="flexRadioDefault5" value="true" v-model="info.profisionalSaude">
                                  <label class="form-check-label" for="flexRadioDefault5">
                                   Sim
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="flexRadio3" id="flexRadioDefault6" value="false" v-model="info.profisionalSaude" >
                                  <label class="form-check-label" for="flexRadioDefault6">
                                    Não
                                  </label>
                                </div>                                                                         
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                                <label>Profissional de Segurança</label>
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="flexRadio4" id="flexRadioDefault7">
                                  <label class="form-check-label" for="flexRadioDefault7">
                                    Sim
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="flexRadio4" id="flexRadioDefault8" >
                                  <label class="form-check-label" for="flexRadioDefault8">
                                    Não
                                  </label>
                                </div>                                                             
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label>CBO</label>
                              <input type="text" value="" class="form-control" v-model="info.cbo">
                                
                            </div>

                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label>CNS</label>
                              <input type="text"  class="form-control" v-model="info.cns">
                            </div>

                          </div>
                          <div class="col-md-4">

                            <div class="form-group">
                              <label>CPF</label>
                              <input type="text"  class="form-control" v-model="info.cpf" >
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Nome Completo</label>
                              <input type="text"  class="form-control" v-model="info.nomeCompleto" >
                              <!-- <input type="text"  class="form-control" v-model="info.name" > -->
                            </div>
                          
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Nome Completo da Mãe</label>
                              <input type="text"  class="form-control" v-model="info.nomeCompletoMae" >
                              <!-- <input type="text"  class="form-control" v-model="info.username" > -->
                            </div>

                          </div>

                          <div class="col-md-4">
                            <div class="form-group">
                              <label>D. Nascimento</label>
                              <input type="text"  class="form-control" v-model="info.dataNascimento" >
                            </div>
                          </div>

                          <div class="col-md-4">
                            <div class="form-group">
                              <label>País de Origem</label>
                              <input type="text"  class="form-control" v-model="info.paisOrigem" >
                            </div>

                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label>Sexo</label>
                              <input type="text"  class="form-control" v-model="info.sexo" >
                            </div>

                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label>Raça</label>
                              <input type="text"  class="form-control" v-model="info.raca" >
                            </div>

                          </div>
                              
                          
                          <div class="col-md-4">
                            <div class="form-group">
                              <label>CEP</label>
                              <input type="text"  class="form-control" v-model="info.cep" >
                            </div>

                          </div>

                          <div class="col-md-4">
                            <div class="form-group">
                              <label>Estado de Residência</label>
                              <input type="text" value="PE" class="form-control" v-model="info.uf" >
                            </div>

                          </div>

                          <div class="col-md-4">
                            <div class="form-group">
                              <label>Mun. de Residência</label>
                              <input type="text" class="form-control" v-model="info.municipioResidencia" >
                            </div>

                          </div>

                          <div class="col-md-8">
                            <div class="form-group">
                              <label>Logradouro</label>
                              <input type="text"  class="form-control" v-model="info.logradouro">
                            </div>

                          </div>

                          <div class="col-md-3">
                            <div class="form-group">
                              <label>Número</label>
                              <input type="text"  class="form-control" v-model="info.numero" >
                            </div>


                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Bairro</label>
                              <input type="text"  class="form-control" v-model="info.bairro" >
                            </div>


                          </div>
                          

                          <div class="col-md-3">
                            <div class="form-group">
                              <label>Celular</label>
                              <input type="text"  class="form-control" v-model="info.telefone" >
                            </div>

                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                              <label>Telefone</label>
                              <input type="text"  class="form-control" v-model="info.telefone2" >
                            </div>

                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Complemento</label>
                              <input type="text"  class="form-control" v-model="info.complemento" >
                            </div>

                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                              <label>Data Notificação</label>
                              <input type="text"  class="form-control" v-model="info.dataNotificacao" >
                            </div>

                          </div>
                          <div class="col-md-3" style="
                                                        border-top: groove;
                                                        border-bottom: groove;
                                                    ">
                            <div class="form-group">
                                <label>Sintomas</label>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" v-model="info.sintomas.febre">
                                  <label class="form-check-label" for="flexCheckDefault">
                                    Febre
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" v-model="info.sintomas.tosse">
                                  <label class="form-check-label" for="flexCheckChecked">
                                   Tosse
                                  </label>
                                </div>                          
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" v-model="info.sintomas.dorGarganta">
                                  <label class="form-check-label" for="flexCheckChecked">
                                   Dor de Garganta
                                  </label>
                                </div>                          
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" v-model="info.sintomas.dispneia">
                                  <label class="form-check-label" for="flexCheckChecked">
                                   Dispneia
                                  </label>
                                </div>                          
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" v-model="info.sintomas.outros">
                                  <label class="form-check-label" for="flexCheckChecked">
                                   Outros
                                  </label>
                                </div>                          
                            </div>
                          </div>


                          
                          <div class="col-md-3" style="
                                                        border-top: groove;
                                                        border-bottom: groove;
                                                    ">
                            <div class="form-group">
                              <label>Início Sintomas</label>
                              <input type="text"  class="form-control" v-model="info.datainicioSintomas" >
                            </div>

                          </div>
                          <div class="col-md-6" style="border: groove;">
                            <div class="form-group">
                                <label>Condições</label>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" v-model="info.condicoes.doencasRespiratorias">
                                  <label class="form-check-label" for="flexCheckDefault">
                                    Doenças respiratórias crônicas descompensadas
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" v-model="info.condicoes.doencasRenais">
                                  <label class="form-check-label" for="flexCheckChecked">
                                   Doenças renais crônicas em estágio avançado (graus 3, 4 e 5)
                                  </label>
                                </div>                          
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" v-model="info.condicoes.doencasCromossomicas">
                                  <label class="form-check-label" for="flexCheckChecked">
                                   Portador de doenças cromossômicas ou estado de fragilidade imunológica
                                  </label>
                                </div>                          
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" v-model="info.condicoes.diabetes">
                                  <label class="form-check-label" for="flexCheckChecked">
                                   Diabetes
                                  </label>
                                </div>                          
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" v-model="info.condicoes.imunossupressao">
                                  <label class="form-check-label" for="flexCheckChecked">
                                   Imunossupressão
                                  </label>
                                </div>                          
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" v-model="info.condicoes.doencasCardiacas">
                                  <label class="form-check-label" for="flexCheckChecked">
                                   Doenças Cardiacas Crônicas
                                  </label>
                                </div>                          
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" v-model="info.condicoes.gestantes">
                                  <label class="form-check-label" for="flexCheckChecked">
                                   Gestante
                                  </label>
                                </div>                          
                            </div>
                          </div>
                          
                          <div class="col-md-3">
                            <div class="form-group">
                                <label>Estado do Teste</label>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" v-model="info.estadoTeste.solicitado">
                                  <label class="form-check-label" for="flexCheckDefault">
                                    Solicitado
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" v-model="info.estadoTeste.coletado">
                                  <label class="form-check-label" for="flexCheckChecked">
                                   Coletado
                                  </label>
                                </div>                          
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" v-model="info.estadoTeste.concluido">
                                  <label class="form-check-label" for="flexCheckChecked">
                                   Concluido
                                  </label>
                                </div>                          
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" v-model="info.estadoTeste.naoSolicitado">
                                  <label class="form-check-label" for="flexCheckChecked">
                                   Exame Não Solicitado
                                  </label>
                                </div>                          
                                                         
                            </div>
                          </div>
                          
                          <div class="col-md-3">
                            <div class="form-group">
                              <label>Data Coleta Teste</label>
                              <strong><input type="text"  class="form-control" v-model="info.datacoletaTeste" ></strong>
                            </div>
                          </div>
                          <div class="col-md-6" style="border: groove;">
                            <div class="form-group">
                                <label>Tipo do Teste</label>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" v-model="info.tipoTeste.rtpcr">
                                  <label class="form-check-label" for="flexCheckDefault">
                                    RT - PCR
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" v-model="info.tipoTeste.testeRapidoAnticorpo">
                                  <label class="form-check-label" for="flexCheckChecked">
                                   Teste rápido - anticorpo
                                  </label>
                                </div>                          
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" v-model="info.tipoTeste.testeRapidoAntigeno">
                                  <label class="form-check-label" for="flexCheckChecked">
                                   Teste rápido - antigeno
                                  </label>
                                </div>                          
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" v-model="info.tipoTeste.elisa">
                                  <label class="form-check-label" for="flexCheckChecked">
                                   Enzimaimunoensaio - ELISA
                                  </label>
                                </div>                          
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" v-model="info.tipoTeste.eclia">
                                  <label class="form-check-label" for="flexCheckChecked">
                                   Imunoensaio por Eletroquimioluminescência - ECLIA
                                  </label>
                                </div>                          
                                                         
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Resultado do Teste</label>
                              <strong><input type="text"  class="form-control" v-model="info.resultadoTeste" ></strong>
                            </div>
                          </div>
                      
                          <div class="col-md-6" style="border: groove;">
                            <div class="form-group">
                                <label>Classificação Final</label>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" v-model="info.classificacaoFinal.descartado">
                                  <label class="form-check-label" for="flexCheckDefault">
                                    Descartado
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" v-model="info.classificacaoFinal.cofirmadoClinicoEpidemiologico">
                                  <label class="form-check-label" for="flexCheckChecked">
                                   Confirmado Clinico-Epidemiologico
                                  </label>
                                </div>                          
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" v-model="info.classificacaoFinal.cofirmadoLaboratorial">
                                  <label class="form-check-label" for="flexCheckChecked">
                                   Confirmado Laboratorial
                                  </label>
                                </div>                          
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" v-model="info.classificacaoFinal.sindromeGripal">
                                  <label class="form-check-label" for="flexCheckChecked">
                                   Sindrome Gripal Não Especificada
                                  </label>
                                </div>                          
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" v-model="info.classificacaoFinal.cofirmadoClinicoImagem">
                                  <label class="form-check-label" for="flexCheckChecked">
                                   Confirmado Clinico Imagem
                                  </label>
                                </div>                          
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" v-model="info.classificacaoFinal.cofirmadoCriterioClinico">
                                  <label class="form-check-label" for="flexCheckChecked">
                                   Confirmado por Critério Clínico
                                  </label>
                                </div>                          
                                                         
                            </div>
                          </div>
                          <div class="col-md-6" style="border: groove;">
                            <div class="form-group">
                                <label>Evolução do Caso</label>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" v-model="info.evolucaoCaso.cancelado">
                                  <label class="form-check-label" for="flexCheckDefault">
                                    Cancelado
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" v-model="info.evolucaoCaso.ignorado">
                                  <label class="form-check-label" for="flexCheckChecked">
                                   Ignorado
                                  </label>
                                </div>                          
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" v-model="info.evolucaoCaso.tratamentoDomiciliar">
                                  <label class="form-check-label" for="flexCheckChecked">
                                   Em trantamento domiciliar
                                  </label>
                                </div>                          
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" v-model="info.evolucaoCaso.internadoUTI">
                                  <label class="form-check-label" for="flexCheckChecked">
                                   Internado em UTI
                                  </label>
                                </div>                          
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" v-model="info.evolucaoCaso.internado">
                                  <label class="form-check-label" for="flexCheckChecked">
                                   Internado
                                  </label>
                                </div>                          
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" v-model="info.evolucaoCaso.obito">
                                  <label class="form-check-label" for="flexCheckChecked">
                                   Óbito
                                  </label>
                                </div>                          
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" v-model="info.evolucaoCaso.cura">
                                  <label class="form-check-label" for="flexCheckChecked">
                                   Cura
                                  </label>
                                </div>                          
                                                         
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Encerramento</label>
                              <strong><input type="text"  class="form-control" v-model="info.dataEncerramento" ></strong>
                            </div>
                          </div>
                          <div class="col-md-9">
                            <div class="form-group">
                              <label>Informações Complementares e Observações</label>
                              <strong><input type="text"  class="form-control" v-model="info.informacaoComplementar" ></strong>
                            </div>
                          </div>
                      </div> <!-- fim da row  -->
                      <div style="text-align: right;">
                      <button class="btn btn-success" style="background-color: orange; border-color: orange;">Gravar</button>
                      </div>

                      
                </form>  
                
                
              </div> <!-- FIM DO FORM -->
              
            <!-- TABLE UNICO-->
            <div v-if="tableseen" class="container-md-auto">


                  <div class="table-wrapper">

                  <div class="table-title">
                    <div class="row">
                      <div class="com-sm-12">
                        <h2>Gerenciar Dados</h2>
                      </div>
                    </div>
                  </div>
                  <table  class="table table-bordered table-hover table-sm" style="background: white;" >
                    <thead>
                      <tr>
                        
                        <th scope="col">CPF</th>
                        <th scope="col">Status</th>
                        <th scope="col">Nome Completo</th>
                        <th scope="col">Nome Mãe</th>
                        <th scope="col">Mun. Residencia</th>
                        <th scope="col">Covid-19</th>
                        <th scope="col">Ação</th>
                                
                      </tr>
                    </thead>
                    <tbody>
                      <tr v-for="info of dados" :key="info.id">
                        <!-- <th scope="row">{{info.id}}</th> -->
                        <th scope="row">{{info.cpf}}</th>
                        <td>{{info.status}}</td>
                        <td>{{info.nomeCompleto}}</td>
                        <td>{{info.nomeCompletoMae}}</td>
                        <td>{{info.municipioResidencia}}</td>
                        <td>{{info.resultadoTeste}}</td> 
                        <!-- <td>{{info.id}}</td>
                        <td>{{info.name}}</td>
                        <td>{{info.username}}</td>
                        <td>{{info.email}}</td>
                        <td>{{info.phone}}</td> teste -->
                        <td>
                          <button  @click.prevent="editar(info)" class="btn btn-primary-outline"><i class="material-icons">&#xE254;</i></button>
                          <button  @click.prevent="deleteInfo(info)" class="btn btn-primary-outline"><i class="material-icons">delete</i></button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  </div>

            </div> <!-- FIM TABLE UNICO -->

            </div>
        </div>
      </div>
         <!--FORM-->
    
    
    
    
    
    <div v-if="sendseen" style="text-align:center;">
           <!-- Barra de Status -->
          <div>
                <img src="../assets/3.png" alt="" class="responsive"><br><br> 
                  
          </div><!-- FIM DA BARRA DE PROGRESSO -->

      <button class="btn btn-success" @click.prevent="SendInfo">Enviar Dados Finais</button>
    </div>
    

  
 
  <footer v-if="loginseen" class="footer fixed-bottom">
    <div class="container-fluid" style="text-align: center;">
      <div class="row">
        <div class="col-sm">
          <a href="http://www.mpf.mp.br/"><img src="../assets/MPF.png" alt="Ministerio Publico Federal" style="height: auto; max-width: 100px;" class=""></a>
        </div>
        <div class="col-sm">
          <a href="http://www.conexao.mp.br/covid19/"><img src="../assets/gabinete.jpg" alt="Gabinete" style="height: auto; max-width: 300px; " class=""></a>
        </div>
        <div class="col-sm">
          <a href="https://www.cesar.school/"><img src="../assets/logo_cesar_school.png" alt="Cesar School" style="height: auto; max-width: 100px; " class=""></a>
        </div>
        <div class="col-sm">
          <a href="https://sites.google.com/cesar.school/recopa/home"><img src="../assets/recopa.png" alt="Recopa" style="height: auto; max-width: 150px; " class=""></a>
        </div>
      </div>
      
      
      
      
    </div>
  </footer>
  </div>
</template>

<script>
import axios from 'axios'
export default {
  name: 'HelloWorld',
  props: {
    msg: String
  },

  data (){
    return {
      info:{
        id:'',
        name:'',
        username:'',
        email:'',
        cpf: '',
        status: '',
        cbo:'',
        cep:'',
        cns: '',
        dataNascimento: '',
        logradouro: '',
        municipioNotificacao: '',
        municipioResidencia: '',
        nomeCompleto: '',
        nomeCompletoMae: '',
        numero: '',
        numeroFormulario: '',
        paisOrigem: '',
        raca: '',
        bairro: '',
        sexo: '',
        uf: '',
        website: '',
        resultadoTeste: '',
        sintomas: {
          febre : 'false',
          tosse: 'false',
          dorGarganta: 'false',
          dispneia: 'false',
          outros: 'false',
        },
        condicoes: {
          doencasRespiratorias: 'false',
          doencasRenais: 'false',
          doencasCromossomicas: 'false',
          doencasCardiacas: 'false',
          diabetes: 'false',
          gestantes: 'false',
          imunossupressao: 'false',
        }, 
        evolucaoCaso: {
          cancelado: 'false',
          ignorado: 'false',
          tratamentoDomiciliar: 'false',
          internadoUTI: 'false',
          internado: 'false',
          obito: 'false',
          cura: 'false',
        }, 
        classificacaoFinal: {
          descartado: 'false',
          cofirmadoClinicoImagem: 'false',
          cofirmadoClinicoEpidemiologico: 'false',
          cofirmadoCriterioClinico: 'false',
          cofirmadoLaboratorial: 'false',
          sindromeGripal: 'false',
          
        }, 
        estadoTeste: {
          solicitado: '',
          coletado: '',
          concluido: '',
          naoSolicitado: '',
                    
        }, 
        tipoTeste: {
          rtpcr: 'false',
          testeRapidoAnticorpo: 'false',
          testeRapidoAntigeno: 'false',
          elisa: 'false',
          eclia: 'false',
                    
        }, 
        possuiCPF : '',
        estrangeiro : '',
        profisionalSaude : '',
       
      },
      url: null,
      file: null,
      uploadPercentage: 0,
      dados: [],
      uploadseen: false,
      formseen: false,
      tableseen: false,
      tableseen2: false,
      msgseen: false,
      sendseen: false,
      loginseen: true,
      submenu: false,
      loader: {
        uploadImg: false,
        uploadFinish: false, 
      },
      docid : [],
      id: '',

    }
    
  },

  
  methods: {
    onFileSelected(event) {
      const file = event.target.files[0]
      this.url = URL.createObjectURL(file)
      this.file = event.target.files[0]
      
      
    },
    onUpload() {
      this.loader.uploadImg = true
      const fd = new FormData();
      fd.append('image', this.file, this.file.name)
      //axios.post('https://easy-type-forms-back.herokuapp.com/api/Upload', fd, {
      axios.post('https://easy-type-back.azurewebsites.net/api/Upload', fd, {
        headers: {
          'Content-Type': 'multipart/form-data'
        },
        onUploadProgress: uploadEvent => {
          this.uploadPercentage = (Math.round(uploadEvent.loaded / uploadEvent.total * 100))
          console.log('Upload Progress: ' + Math.round(uploadEvent.loaded / uploadEvent.total * 100) + '%')
        }
      }).finally(()=> {
          this.loader.uploadImg = false;
          this.loader.uploadFinish = true;
          
      })
      
        .then(res => {
          console.log(res.data)
          this.docid = res.data
          //console.log(res.data)
          console.log(this.docid.id)
          this.ShowData()
          
          
        })
    },
    ShowData(){
      // axios.get('https://easy-type-forms-back.herokuapp.com/api/Document/', {
      //   //  params: {
      //   //    id: this.docid
      //   //  }
      // })
      //const url = `https://jsonplaceholder.typicode.com/users/${this.docid}`
      const url = `https://easy-type-back.azurewebsites.net/api/document/${this.docid.id}`
      //const url = `https://easy-type-forms-back.herokuapp.com/api/document/${this.docid.id}`
      axios.get(url, {
       
      })
        .then(res => {
          console.log(res.data)
          this.dados = res
          this.uploadseen = false;
          this.formseen = false;
          this.tableseen = true;
          this.loader.uploadFinish = false;
          
        })
    },
    getAll(){
      // axios.get('https://easy-type-forms-back.herokuapp.com/api/Document/', {
      //   //  params: {
      //   //    id: this.docid
      //   //  }
      // })
      //const url = `https://jsonplaceholder.typicode.com/users/`
      const url = `https://easy-type-back.azurewebsites.net/api/document/`
      //const url = `https://easy-type-forms-back.herokuapp.com/api/document/`
      axios.get(url, {
       
      })
        .then(res => {
          console.log(res.data)
          this.dados = res.data
          this.uploadseen = false;
          this.formseen = false;
          this.tableseen2 = true;
          this.sendseen = false;
          this.loader.uploadFinish = false;
          this.url = '';
          
        })
    },
    Edit(){
      //teste
      // const url = `https://jsonplaceholder.typicode.com/users/${this.info.id}`
      // axios.put(url,{
      //   username : this.info.username,
      //   email : this.info.email,

      // })
      //fim  teste
      const url = `https://easy-type-back.azurewebsites.net/api/document/${this.info.id}`
      //const url = `https://easy-type-forms-back.herokuapp.com/api/document/${this.info.id}`
      axios.put(url,{
        id: this.info.id,
        cpf: this.info.cpf,
        cbo: this.info.cbo,
        cep: this.info.cep,
        cns: this.info.cns,
        dataNascimento: this.info.dataNascimento,
        logradouro: this.info.logradouro,
        municipioNotificacao: this.info.municipioNotificacao,
        municipioResidencia: this.info.municipioResidencia,
        nomeCompleto: this.info.nomeCompleto,
        nomeCompletoMae: this.info.nomeCompletoMae,
        numero: this.info.numero,
        numeroFormulario: this.info.numeroFormulario,
        paisOrigem: this.info.paisOrigem,
        raca: this.info.raca,
        bairro: this.info.bairro,
        sexo: this.info.sexo,
        uf: this.info.uf,
        possuiCPF : this.info.possuiCPF,
        estrangeiro : this.info.estrangeiro,
        profisionalSaude : this.info.profisionalSaude,

        sintomas: {
          febre : this.info.sintomas.febre,
          tosse: this.info.sintomas.tosse,
          dorGarganta: this.info.sintomas.dorGarganta,
          dispneia: this.info.sintomas.dispneia,
          outros: this.info.sintomas.outros,
        },
        condicoes: {
          doencasRespiratorias: this.info.condicoes.doencasRespiratorias,
          doencasRenais: this.info.condicoes.doencasRenais,
          doencasCromossomicas: this.info.condicoes.doencasCromossomicas,
          doencasCardiacas: this.info.condicoes.doencasCardiacas,
          diabetes: this.info.condicoes.diabetes,
          gestantes: this.info.condicoes.gestantes,
          imunossupressao: this.info.condicoes.imunossupressao,
        }, 
        evolucaoCaso: {
          cancelado: this.info.evolucaoCaso.cancelado,
          ignorado: this.info.evolucaoCaso.ignorado,
          tratamentoDomiciliar: this.info.evolucaoCaso.tratamentoDomiciliar,
          internadoUTI: this.info.evolucaoCaso.internadoUTI,
          internado: this.info.evolucaoCaso.internado,
          obito: this.info.evolucaoCaso.obito,
          cura: this.info.evolucaoCaso.cura,
        }, 
        classificacaoFinal: {
          descartado: this.info.classificacaoFinal.descartado,
          cofirmadoClinicoImagem: this.info.classificacaoFinal.cofirmadoClinicoImagem,
          cofirmadoClinicoEpidemiologico: this.info.classificacaoFinal.cofirmadoClinicoEpidemiologico,
          cofirmadoCriterioClinico: this.info.classificacaoFinal.cofirmadoCriterioClinico,
          cofirmadoLaboratorial: this.info.classificacaoFinal.cofirmadoLaboratorial,
          sindromeGripal: this.info.classificacaoFinal.sindromeGripal,
          
        }, 
        estadoTeste: {
          solicitado: this.info.estadoTeste.solicitado,
          coletado: this.info.estadoTeste.coletado,
          concluido: this.info.estadoTeste.concluido,
          naoSolicitado: this.info.estadoTeste.naoSolicitado,
                    
        }, 
        tipoTeste: {
          rtpcr: this.info.tipoTeste.rtpcr,
          testeRapidoAnticorpo: this.info.tipoTeste.testeRapidoAnticorpo,
          testeRapidoAntigeno: this.info.tipoTeste.testeRapidoAntigeno,
          elisa: this.info.tipoTeste.elisa,
          eclia: this.info.tipoTeste.eclia,
                    
        },

      })
      
      .then(res =>{
        this.info = {}
        
        console.log(res.data)
        alert('Alterado com Sucesso')
        this.formseen = false
        this.tableseen = false
        this.uploadseen = false
        this.tableseen2 = false
        this.sendseen = true
        this.msgseen = false
      })
    },
    deleteInfo(info) {
      this.info = info
      //const url = `https://jsonplaceholder.typicode.com/users/${this.info.id}`
      const url = `https://easy-type-back.azurewebsites.net/api/document/${this.info.id}`
      //const url = `https://easy-type-forms-back.herokuapp.com/api/document/${this.info.id}`
      axios.delete(url, {
        id : this.info.id
      }).then(res => {
        console.log(res)
        alert('Deletado com Sucesso')
      })
    },
    downloadDoc(info){
      this.info = info
      const url = `https://easy-type-back.azurewebsites.net/api/Upload/download/${this.info.id}?edit=-1`
      axios.get (url, {
        responseType: 'blob'
      }).then(res => {
        var fileURL = window.URL.createObjectURL(new Blob([res.data]));
        var fileLink = document.createElement('a');

        fileLink.href = fileURL;
        fileLink.setAttribute('download', this.info.nomeCompleto+'.png');
        document.body.appendChild(fileLink);

        fileLink.click();
        this.url = fileURL
        
      }) 
    },
    editar(info){
      this.info = info
      console.log(info.id)
      this.tableseen = false
      this.uploadseen = false
      this.formseen = true
      this.tableseen2 = false
    },
    SendInfo(){
      this.msgseen = true
      this.sendseen = false
    },
    SendAgain(){
      this.msgseen = false
      this.uploadseen = true
      this.uploadPercentage = 0;
      this.file = null;
      this.url = '';
      this.uploadFinish = false

    },
    UserLogin(){
      this.loginseen = false
      this.uploadseen = true
      this.tableseen2 = false
      this.submenu = true
      this.url = ''
    },
    logout(){
      this.uploadseen = false
      this.formseen = false
      this.tableseen = false
      this.msgseen = false
      this.sendseen = false
      this.tableseen2 = false
      this.loginseen = true
      this.uploadPercentage = 0;
      this.submenu = false;
      this.url = null;
      this.loader.uploadFinish = false;

    },
    
    

  }
  
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style>
h3 {
  margin: 40px 0 0;
}

a {
  color: white;
}
a:hover{
  color: #48ff00;
}
progress[value] {

  background-color: green;
  width: 200px;
  height: 10px;
  
  
}
footer{
  position: absolute;
  bottom: 0;
  width: 100%;
  /* height: 60px; */
  line-height: 60px;
  background-color: white;
}

.form-control {
	box-shadow: none;
	border-color: #ddd;
  padding: 0;
  font-size: 12px;
}
.form-control:focus {
	border-color: #4aba70; 
}
.login-form {
	width: 350px;
	margin: 0 auto;
	padding: 30px 0;
  
}
.login-form form {
	color: #434343;
	border-radius: 1px;
	margin-bottom: 15px;
	background: #fff;
	border: 1px solid #f3f3f3;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	padding: 30px;
}
.login-form h4 {
	text-align: center;
	font-size: 22px;
	margin-bottom: 20px;
}
.login-form .avatar {
	color: #fff;
	margin: 0 auto 30px;
	text-align: center;
	width: 100px;
	height: 200px;
	border-radius: 00%;
	z-index: 9;
	background: #fff;
	padding: 15px;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
}
.login-form .avatar img {
    font-size: 62px;
    height: 200px;
    position: absolute;
    margin: 0 auto;
    left: 0;
    right: 0;
    
    
}
.login-form .form-group {
	margin-bottom: 20px;
}
.login-form .form-control, .login-form .btn {
	min-height: 40px;
	border-radius: 2px; 
	transition: all 0.5s;
}
.login-form .close {
	position: absolute;
	top: 15px;
	right: 15px;
}
.login-form .btn, .login-form .btn:active {
	background: #4aba70 !important;
	border: none;
	line-height: normal;
}
.login-form .btn:hover, .login-form .btn:focus {
	background: #42ae68 !important;
}
.login-form .checkbox-inline {
	float: left;
}
.login-form input[type="checkbox"] {
	position: relative;
	top: 2px;
}
.login-form .forgot-link {
	float: right;
}
.login-form .small {
	font-size: 13px;
}
.login-form a {
	color: #4aba70;
}



/* estilo imagem */
#preview {
  display: flex;
  justify-content: center;
  align-items: center;
}

#preview img {
  max-width: 100%;
  max-height: 900px;
}
/* fim estilo imagem */

/* table */
.table-wrapper {
      background: #f5f5f5;
      padding: 20px 25px;
      border-radius: 3px;
      min-width: 1000px;
      box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
    }

    .table-title {
      padding-bottom: 15px;
      background: #006633;
      color: #fff;
      padding: 16px 30px;
      min-width: 100%;
      margin: -20px -25px 10px;
      border-radius: 3px 3px 0 0;
    }

    .table-title h2 {
      margin: 5px 0 0;
      font-size: 24px;
    }
/* fim table */

/* form1 */
#form1 {
  text-align: left;
  border: outset;
  margin-top: 50px;
  background-image: url("../assets/733.jpg");
  background-blend-mode: color-burn;
  border-radius: 3%;
  background-color: #006633;
  color: #f8f9fa;
}
#form1 .col-md-3 {
  border: none;
}
/* fim form1 */
.responsive{
  max-width: 100%;
  height: auto;
}

#telalogin {
  background-image: url("../assets/back01.jpg");
  background-repeat: no-repeat;
  background-size: cover;
  
}
/* .hello{
  background-image: url("../assets/back03.png");
  background-repeat: no-repeat;
  background-size: cover;
} */


</style>
