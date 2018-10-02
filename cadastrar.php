    <?php
    include_once("header.php");

    ?>

    <div class="container-cad offset-lg-3 offset-md-1 offset-sm-1" style="text-align:left;">
        <form action="index.html" method="post">
            <div class="container-cad">
              <br>
              <h4>Dados</h4>
                <div class="form-row">
                  <div class="form-group col-lg-3">
                    <label for="inputNome">Nome</label>
                    <input type="text" class="form-control" id="inputNome" name="cadastro_nome" placeholder="Nome">
                  </div>
                  <div class="form-group col-lg-3">
                    <label for="inputSobrenome">Sobrenome</label>
                    <input type="text" class="form-control" id="inputSobrenome" name="cadastro_sobrenome" placeholder="Sobrenome">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-lg-3">
                    <label for="inputEmail4">E-mail</label>
                    <input type="email" class="form-control" id="inputEmail4" name="cadastro_email" placeholder="Ex. jose@gmail.com">
                  </div>
                  <div class="form-group col-lg-3">
                    <label for="inputEmail5">Confirmar E-mail</label>
                    <input type="password" class="form-control" id="inputEmail5" name="cadastro_conf_email" placeholder="Ex. jose@gmail.com">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-lg-3">
                    <label for="cadastro_senha">Senha</label>
                    <input type="email" class="form-control" id="cadastro_senha" name="cadastro_senha" placeholder="Senha">
                  </div>
                  <div class="form-group col-lg-3">
                    <label for="cadastro_conf_senha">Confirme Senha</label>
                    <input type="password" class="form-control" id="cadastro_conf_senha" placeholder="Senha">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-lg-2">
                    <label for="inputCPF">CPF</label>
                    <input type="number" class="form-control" id="inputCPF">
                  </div>
                  <div class="form-group col-lg-2">
                    <label for="telefone">Celular</label>
                    <input type="telephone" name="telefone" id="telefone" class="telefone form-control" placeholder="(99) 99999-9999">
                  </div>
                  <div class="form-group col-lg-2">
                    <label for="inputNasc">Data de Nascimento</label>
                    <input type="" class="form-control" id="inputNasc" data-mask="00/00/0000" placeholder="dd/mm/aaaa">
                  </div>
                </div>
                <button type="submit" class="btn btn-dark btn-primary btn-md">Enviar</button>
                <br>
                <br>
            </div>
        </form>
    </div>

          <!--
            <div class="form-row">
              <div class="form-group col-md-2">
                <label for="inputRG">RG</label>
                <input type="number" class="form-control" id="inputRG">
              </div>
                <label for="inputSexo">Sexo</label>
                <select id="inputSexo" class="form-control">
                  <option selected>Escolha...</option>
                  <option>Masculino</option>
                  <option>Feminino</option>
                </select>
              <label for="inputAddress">Endereço</label>
              <input type="text" class="form-control" id="inputAddress" placeholder="Av. Santo Amaro, 999">
            </div>


            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="inputCity">Cidade</label>
                <input type="text" class="form-control" id="inputCity" placeholder="São Paulo">
              </div>
              <div class="form-group col-md-4">
                <label for="inputBairro">Bairro</label>
                <input type="text" class="form-control" id="inputBairro" placeholder="Vila Olimpia">
              </div>
            <div class="form-group col-md-2">
              <label for="inputState">Estado</label>
              <select id="inputState" class="form-control">
                  <option value="selecione" selected disabled>Selecione...</option>
                  <option value="acre">AC</option>
                  <option value="alagoas">AL</option>
                  <option value="amazonas">AM</option>
                  <option value="amapa">AP</option>
                  <option value="bahia">BA</option>
                  <option value="ceara">CE</option>
                  <option value="df">DF</option>
                  <option value="espirito-santo">ES</option>
                  <option value="goias">GO</option>
                  <option value="maranhao">MA</option>
                  <option value="mato-grosso">MT</option>
                  <option value="mato-grosso-sul">MS</option>
                  <option value="minas">MG</option>
                  <option value="para">PA</option>
                  <option value="paraiba">PB</option>
                  <option value="parana">PR</option>
                  <option value="pernambuco">PE</option>
                  <option value="piaui">PI</option>
                  <option value="rio-janeiro">RJ</option>
                  <option value="rio-grande-norte">RN</option>
                  <option value="rio-grande-sul">RS</option>
                  <option value="rondonia">RO</option>
                  <option value="roraima">RR</option>
                  <option value="santa-catarina">SC</option>
                  <option value="sao-paulo">SP</option>
                  <option value="sergipe">SE</option>
                  <option value="tocantins">TO</option>
              </select>
            </div>
            <div class="form-group col-md-2">
              <label for="inputZip">CEP</label>
              <input type="number" class="form-control" id="inputZip" placeholder="00000-000">
            </div>
          </div>
          <div class="form-group">
            <label for="inputAddress2">Complemento</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartamento, Andar, ou Referência">
          </div>
        <button type="submit" class="btn btn-primary btn-dark" name="enviar_cadastro">Cadastrar</button>
        </form>
      </div>
    </div>
          <br>
          <h4>Contato</h4>
          <div class="form-row">
              <div class="form-group col-md-3">
                <label for="inputTel">Telefone</label>
                <input type="number" class="form-control" id="inputTel" placeholder="Telefone">
              </div>
              <div class="form-group col-md-3">
                <label for="inputCel">Celular</label>
                <input type="number" class="form-control" id="inputCel" placeholder="Celular">
              </div>
              <div class="form-group col-md-3">
                <label for="inputNomC">Nome Contato de Emergência</label>
                <input type="text" class="form-control" id="inputNomC" placeholder="Nome">
              </div>
              <div class="form-group col-md-3">
                <label for="inputConE">Contato Emergência</label>
                <input type="number" class="form-control" id="inputConE" placeholder="9999-9999">
              </div>
            </div>
            -->
    <!--
          FAZER UM IF PARA APARECER ISSO SO SE FOR MENOR DE 18 apenas<br>
          <h4>Dados Responsável</h4>
           <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputNomeres">Nome Responsável</label>
                <input type="text" class="form-control" id="inputNomeres" placeholder="Nome">
              </div>
              <div class="form-group col-md-6">
                <label for="inputSobrenomeres">Sobrenome Responsável</label>
                <input type="text" class="form-control" id="inputSobrenomeres" placeholder="Sobrenome">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputCPFres">CPF Responsável</label>
                <input type="number" class="form-control" id="inputCPFres">
              </div>
              <div class="form-group col-md-6">
                <label for="inputTelres">Telefone Responsável</label>
                <input type="phone" class="form-control" id="inputTelres">
              </div>
            </div>

            FIM do IF<br>
    -->
      <!--
      <br>
      <h4>Informações Adicionais</h4>

        <div class="form-row">
          <div class="form-group col-md-3">
            <label for="visita">Tipo de Visita</label>
            <select class="form-control" id="visita">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
          </div>

          <div class="form-group col-md-3">
            <label for="modalidade">Modalidade/Interesse</label>
            <select class="form-control" id="modalidade">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
          </div>

          <div class="form-group col-md-3">
            <label for="conheceu">Como Conheceu</label>
            <select class="form-control" id="conheceu">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
          </div>

          <div class="form-group col-md-3">
            <label for="obj">Objetivo</label>
            <select class="form-control" id="obj">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
          </div>
        </div>


       <div class="form-group">
         <label for="obs">Observações</label>
         <textarea class="form-control" id="obs" rows="4"></textarea>
       </div>
    -->
  <?php
    include("footer.php");
  ?>
