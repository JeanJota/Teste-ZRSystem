@extends("templates.app")

@section("title")
Editar Cliente 
@endsection

@section("body")

<!-- ===============================================-->
<!--    Main Content-->
<!-- ===============================================-->
<main class="main" id="top">
  <div class="container" data-layout="container">
    <script>
      var isFluid = JSON.parse(localStorage.getItem('isFluid'));
      if (isFluid) {
        var container = document.querySelector('[data-layout]');
        container.classList.remove('container');
        container.classList.add('container-fluid');
      }
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

    @include('components.menu')

    <div class="content">

      @include('components.navbar')

      <div class="card mb-3">
        <div class="bg-holder d-none d-lg-block bg-card" style="background-image:url({{ asset('assets/img/icons/spot-illustrations/corner-4.png') }});">
        </div>
        <!--/.bg-holder-->

        <div class="card-body position-relative">
          <div class="row">
            <div class="col-lg-8">
              <h3>Cadastro de cliente</h3>
              <p class="mb-0">Cadastre aqui os dados de seu cliente</p>
            </div>
          </div>
        </div>
      </div>

      <form class="needs-validation" novalidate="" action="{{ route('clientes.update', $cliente->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="card">          
          <div class="card-body bg-light">
            <div class="tab-content">              
              <div class="tab-pane preview-tab-pane active" role="tabpanel" aria-labelledby="tab-dom-9f3d91a9-02cb-40e0-8dcd-09a07aa45dc3" id="dom-9f3d91a9-02cb-40e0-8dcd-09a07aa45dc3">
                <div class="accordion" id="accordionExample">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="heading1">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">Dados do cliente</button>
                    </h2>
                    <div class="accordion-collapse collapse show" id="collapse1" aria-labelledby="heading1" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <div class="row g-3">
                          <div class="col-6">
                            <div class="form-check">
                              <input class="form-check-input" id="tipocliente" type="radio" value="PF" checked required name="tipo_pessoa" />
                              <label class="form-check-label mb-0" for="tipocliente">Pessoa física</label></br>      
                              <input class="form-check-input" id="tipocliente2" type="radio" value="PJ" required name="tipo_pessoa" />
                              <label class="form-check-label mb-0" for="tipocliente2">Pessoa jurídica</label>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <label class="form-label" for="clientedesde">Cliente desde: (<span style="color: red;">*</span>)</label>
                            <input class="form-control" id="clientedesde" name="clientedesde" type="date" required value="{{ date_format($cliente->created_at, 'Y-m-d') }}" />
                            <div class="valid-feedback">Certo!</div>
                            <div class="invalid-feedback">Inválido!</div>
                          </div>
                        </div>
                        <hr>
                        <div id="divempresa" class="row g-3" style="display: none;">
                          <div class="col-md-4">
                            <label class="form-label" for="cnpj">CNPJ</label>
                            <input class="form-control" id="cnpj" name="documento" type="text" value="{{ $cliente->documento }}" />
                            <div class="valid-feedback">Certo!</div>
                            <div class="invalid-feedback">Inválido!</div>
                          </div>
                          <div class="col-md-4">
                            <label class="form-label" for="inc_municipal">Insc. Municipal</label>
                            <input class="form-control" id="inc_municipal" name="inscricao_municipal" type="text" value="{{ $cliente->inscricao_municipal }}" />
                            <div class="valid-feedback">Certo!</div>
                            <div class="invalid-feedback">Inválido!</div>
                          </div>
                          <div class="col-md-4">
                            <label class="form-label" for="inc_estadual">Insc. Estadual</label>
                            <input class="form-control" id="inc_estadual" name="inscricao_estadual" type="text" value="{{ $cliente->inscricao_estadual }}" />
                            <div class="valid-feedback">Certo!</div>
                            <div class="invalid-feedback">Inválido!</div>
                          </div>
                          <div class="col-md-6">
                            <label class="form-label" for="razaosocial">Razão Social</label>
                            <input class="form-control" id="razaosocial" name="razao_social" type="text" value="{{ $cliente->razao_social }}" />
                            <div class="valid-feedback">Certo!</div>
                            <div class="invalid-feedback">Inválido!</div>
                          </div>
                          <div class="col-md-6">
                            <label class="form-label" for="fantasia">Nome fantasia</label>
                            <input class="form-control" id="fantasia" name="nome" type="text" value="{{ $cliente->nome }}" />
                            <div class="valid-feedback">Certo!</div>
                            <div class="invalid-feedback">Inválido!</div>
                          </div>
                          <hr>
                        </div>
                        <div class="row g-3">
                          <div class="col-md-4">
                            <label class="form-label" for="tipocontribuinte">Tipo de contribuinte (<span style="color: red;">*</span>)</label>
                            <select class="form-select" id="tipocontribuinte" name="tipo_contribuinte" required  value="{{ $cliente->tipo_contribuinte }}">
                              <option selected value="9">Não contribuinte</option>
                              <option value="1">Contribuinte ICMS</option>
                              <option value="2">Contribuinte Isento</option>
                            </select>
                            <div class="valid-feedback">Certo!</div>
                            <div class="invalid-feedback">Inválido!</div>
                          </div>
                          <div class="col-md-8">
                            <label class="form-label" for="nomecompleto">Nome completo (<span style="color: red;">*</span>)</label>
                            <input class="form-control" id="nomecompleto" name="nome" type="text" required value="{{ $cliente->nome }}"/>
                            <div class="valid-feedback">Certo!</div>
                            <div class="invalid-feedback">Inválido!</div>
                          </div>
                          <div class="col-md-4">
                            <label class="form-label" for="rg">RG</label>
                            <input class="form-control" id="rg" name="rg" type="text" value="{{ $cliente->inscricao_estadual }}" />
                            <div class="valid-feedback">Certo!</div>
                            <div class="invalid-feedback">Inválido!</div>
                          </div>
                          <div class="col-md-4">
                            <label class="form-label" for="cpf">CPF</label>
                            <input class="form-control" id="cpf" name="documento" type="text" value="{{ $cliente->documento }}" />
                            <div class="valid-feedback">Certo!</div>
                            <div class="invalid-feedback">Inválido!</div>
                          </div>
                          <div class="col-md-4">
                            <label class="form-label" for="genero">Gênero</label>
                            <select class="form-select" id="genero" name="genero">
                              <option selected disabled value=""></option>
                              <option value="Masculino">Masculino</option>
                              <option value="Feminino">Feminino</option>
                              <option value="Outro">Outro</option>
                            </select>
                            <div class="valid-feedback">Certo!</div>
                            <div class="invalid-feedback">Inválido!</div>
                          </div>
                          <div class="col-md-4">
                            <label class="form-label" for="nascimento">Nascimento</label>
                            <input class="form-control" id="nascimento" name="data_nascimento" type="date" onfocusout="calculaniver(this.value)" value="{{ $cliente->data_nascimento }}" />
                            <div class="valid-feedback">Certo!</div>
                            <div class="invalid-feedback">Inválido!</div>
                          </div>
                          <div class="col-md-4">
                            <label class="form-label" for="faixaetaria">Faixa etária</label>
                            <input class="form-control" id="faixaetaria" name="faixaetaria" type="text" disabled />
                            <div class="valid-feedback">Certo!</div>
                            <div class="invalid-feedback">Inválido!</div>
                          </div>
                          <div class="col-md-4">
                            <label class="form-label" for="profissao">Profissão</label>
                            <input class="form-control" id="profissao" name="profissao" type="text" />
                            <div class="valid-feedback">Certo!</div>
                            <div class="invalid-feedback">Inválido!</div>
                          </div>
                          <div class="col-md-4">
                            <label class="form-label" for="estadocivil">Estado civil</label>
                            <select class="form-select" id="estadocivil" name="estadocivil">
                              <option value="Solteiro(a)">Solteiro(a)</option>
                              <option value="Casado(a)">Casado(a)</option>
                              <option value="Viúvo(a)">Viúvo(a)</option>
                              <option value="Outro">Outro</option>
                            </select>
                            <div class="valid-feedback">Certo!</div>
                            <div class="invalid-feedback">Inválido!</div>
                          </div>
                          <div class="col-md-4">
                            <label class="form-label" for="situacao">Situação</label>
                            <select class="form-select" id="situacao" name="situacao">
                              <option selected disabled value=""></option>
                              <option value="Pai">Pai</option>
                              <option value="Mãe">Mãe</option>
                              <option value="Avô">Avô</option>
                              <option value="Avó">Avó</option>
                            </select>
                            <div class="valid-feedback">Certo!</div>
                            <div class="invalid-feedback">Inválido!</div>
                          </div>
                          <div class="col-md-4">
                            <label class="form-label" for="emitirnf">Emitir NF (<span style="color: red;">*</span>)</label>
                            <select class="form-select" id="emitirnf" name="emitirnf" required>
                              <option selected disabled value=""></option>
                              <option value="1">Sim</option>
                              <option value="0">Não</option>
                            </select>
                            <div class="valid-feedback">Certo!</div>
                            <div class="invalid-feedback">Inválido!</div>
                          </div>
                          <div class="col-md-4">
                            <label class="form-label" for="comoconheceu">Como conheceu?</label>
                            <select class="form-select" id="comoconheceu" name="como_conheceu">
                              <option value="Não informado">Não informado</option>
                              <option value="Google">Google</option>
                              <option value="Instagram">Instagram</option>
                              <option value="Facebook">Facebook</option>
                              <option value="Outro">Outro</option>
                            </select>
                            <div class="valid-feedback">Certo!</div>
                            <div class="invalid-feedback">Inválido!</div>
                          </div>
                          <div class="col-md-4">
                            <label class="form-label" for="avisofinanceiro">Aviso financeiro (<span style="color: red;">*</span>)</label>
                            <select class="form-select" id="avisofinanceiro" name="avisofinanceiro" required>
                              <option value="1">Sim</option>
                              <option value="0">Não</option>
                            </select>
                            <div class="valid-feedback">Certo!</div>
                            <div class="invalid-feedback">Inválido!</div>
                          </div>                          
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="heading2">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="true" aria-controls="collapse2">Contato</button>
                    </h2>
                    <div class="accordion-collapse collapse" id="collapse2" aria-labelledby="heading2" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <div class="row g-3">
                          <div class="col-md-6">
                            <label class="form-label" for="email">E-mail</label>
                            <input class="form-control" id="email" name="email" type="email" value="{{ $cliente->email }}" />
                            <div class="valid-feedback">Certo!</div>
                            <div class="invalid-feedback">Inválido!</div>
                          </div>
                          <div class="col-md-3">
                            <label class="form-label" for="celular">Celular (<span style="color: red;">*</span>)</label>
                            <input class="form-control" id="celular" name="celular" type="text" required />
                            <div class="valid-feedback">Certo!</div>
                            <div class="invalid-feedback">Inválido!</div>
                          </div>
                          <div class="col-md-3">
                            <label class="form-label" for="fixo">Fixo</label>
                            <input class="form-control" id="fixo" name="fixo" type="text" />
                            <div class="valid-feedback">Certo!</div>
                            <div class="invalid-feedback">Inválido!</div>
                          </div>
                          <div class="col-md-3">
                            <label class="form-label" for="contato2">Outro</label>
                            <input class="form-control" id="contato2" name="contato2" type="text" />
                            <div class="valid-feedback">Certo!</div>
                            <div class="invalid-feedback">Inválido!</div>
                          </div>                                                          
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="heading3">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="true" aria-controls="collapse3">Endereço</button>
                    </h2>
                    <div class="accordion-collapse collapse" id="collapse3" aria-labelledby="heading3" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <div class="row g-3" id="app">
                          <p id="errocep" style="display: none;"></p>
                          <div class="col-md-3">
                            <label class="form-label" for="cep">CEP</label>
                            <input class="form-control" id="cep" name="cep" type="text" placeholder="Buscar CEP" onclick="this.value=''" v-model="cep"  maxlength="8" />
                            <div class="valid-feedback">Certo!</div>
                            <div class="invalid-feedback">Inválido!</div>
                          </div>
                          <div class="col-md-3">
                            <label class="form-label" for="estado">Estado</label>
                            <input class="form-control" id="estado" name="estado" type="text" />
                            <div class="valid-feedback">Certo!</div>
                            <div class="invalid-feedback">Inválido!</div>
                          </div>
                          <div class="col-md-3">
                            <label class="form-label" for="cidade">Cidade</label>
                            <input class="form-control" id="cidade" name="cidade" type="text" />
                            <div class="valid-feedback">Certo!</div>
                            <div class="invalid-feedback">Inválido!</div>
                          </div>
                          <div class="col-md-3">
                            <label class="form-label" for="bairro">Bairro</label>
                            <input class="form-control" id="bairro" name="bairro" type="text" />
                            <div class="valid-feedback">Certo!</div>
                            <div class="invalid-feedback">Inválido!</div>
                          </div>
                          <div class="col-md-10">
                            <label class="form-label" for="endereco">Endereço</label>
                            <input class="form-control" id="endereco" name="endereco" type="text" />
                            <div class="valid-feedback">Certo!</div>
                            <div class="invalid-feedback">Inválido!</div>
                          </div>
                          <div class="col-md-2">
                            <label class="form-label" for="numero">Número</label>
                            <input class="form-control" id="numero" name="numero" type="text" />
                            <div class="valid-feedback">Certo!</div>
                            <div class="invalid-feedback">Inválido!</div>
                          </div>
                          <div class="col-md-6">
                            <label class="form-label" for="complemento">Complemento</label>
                            <input class="form-control" id="complemento" name="complemento" type="text" />
                            <div class="valid-feedback">Certo!</div>
                            <div class="invalid-feedback">Inválido!</div>
                          </div>  
                        </div>
                      </div>
                    </div>
                  </div>                  
                </div>
              </div>
            </div>
            <div class="card-header">
              <div class="row flex-between-end">
                <div class="col-auto ms-auto">
                  <div class="nav nav-pills mt-2">
                    <div class="col-auto align-self-center">
                      <button class="btn btn-success" type="submit" value="salvar_novo" name="salvar_novo">Salvar / Novo</button>
                      <button class="btn btn-success" type="submit" value="salvar_veiculo" name="salvar_veiculo">Salvar / Cadastrar veículo</button>
                      <a href="/" class="btn btn-danger">Cancelar</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
      
      @include('components.footer')

    </div>    
  </div>
</main>
<!-- ===============================================-->
<!--    End of Main Content-->
<!-- ===============================================-->

<script>
  $("input[name='tipocliente']").click(function() {

    if ($(this).prop('checked'))
    {
      $("#divempresa").hide();

      $('#tipocontribuinte').find('[value="2"]').attr('selected', false);

      $('#tipocontribuinte').find('[value="1"]').attr('selected', true);

      if($(this).val() == 2)
      {
        $("#divempresa").show();

        $('#tipocontribuinte').find('[value="1"]').attr('selected', false);

        $('#tipocontribuinte').find('[value="2"]').attr('selected', true);
      }
    }

  });

  function calculaniver(data)
  {
    const hoje = new Date();

    const nascimento = new Date(data);

    let ano = hoje.getFullYear() - nascimento.getFullYear();

    const m = hoje.getMonth() - nascimento.getMonth();
    
    if (m < 0 || (m === 0 && hoje.getDate() < nascimento.getDate())) {
      ano--;
    }
    
    $("#faixaetaria").val(ano + ' anos');
  }
</script>

<script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js'></script>
<script>
  var app = new Vue({
    el: "#app",
    data: {
      endereco: "",
      bairro: "",
      cidade: "",
      estado: "",
      cep: "",
      error: "" },

      methods: {
        getCity: function () {
          var self = this;
          $.getJSON("https://viacep.com.br/ws/" + this.cep + "/json", function (result) {
            if ("erro" in result)
            {
              self.error = "CEP não encontrado! Insira manualmente o endereço";
              self.endereco = "";
              self.bairro = "";
              self.cidade = "";
              self.estado = "";
              $("#errocep").show();
              $("#errocep").text(self.error);
            }
            else
            {
              document.getElementById('estado').value = result.uf;
              document.getElementById('cidade').value = result.localidade;
              document.getElementById('bairro').value = result.bairro;
              document.getElementById('endereco').value = result.logradouro;
            }
          });
        } },

        watch: {
          cep: function () {
            if (this.cep.length === 8) {
              this.getCity();
              this.error = "";
              $("#errocep").hide();
            }
            if (this.cep.length < 8) {
              this.city = "";
              this.error = "Pesquisando...";
              $("#errocep").show();
              $("#errocep").text(this.error);
            }
          } },

          mounted: function () {
            this.getCity();
          } });
        </script>

        @include('components.customize')

        @endsection