<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"> </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

<script type="text/javascript">
  $(document).ready(function() {

    $('#FormularioSubmit').on('submit', function(event) {
      event.preventDefault();
      $(".loading-page").fadeIn("slow");
      var url = $(this).attr('action');

      $.ajax({
        url: url,
        method: 'POST',
        data: $(this).serialize(),
        dataType: 'JSON',
        success: function(response) {
          $(".loading-page").fadeOut("slow");
          //$('#FormularioSubmit').trigger("reset");
          if (response.success) {
            swal({
              title: "Ok",
              text: response.message,
              icon: "success"
            }).then((willDelete) => {
              $(".loading-page").fadeIn("slow");
              location.href = parent.window.location;
            });
          } else {
            swal({
              title: "Info",
              text: response.message,
              icon: "error"
            }).then((willDelete) => {
              $(".loading-page").fadeIn("slow");
              location.href = parent.window.location;
            });
          }
        },
        error: function(response) {
          $(".loading-page").fadeIn("slow");
          swal('Ocorreu um erro ao gravar o cliente. Tente novamente!');
        }
      });
    });

  });
</script>

<div class="modal fade" id="cadastrar" data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg mt-6" role="document">
    <div class="modal-content border-0">
      <div class="position-absolute top-0 end-0 mt-3 me-3 z-index-1"><button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base" data-bs-dismiss="modal" aria-label="Close"></button></div>
      <div class="modal-body p-0">
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
        <form class="needs-validation" novalidate="" id="FormularioSubmit" action="" method="POST">
          @csrf
          <div class="card">
            <div class="card-header">
              <div class="row flex-between-end">
                <div class="col-auto ms-auto">
                  <button class="btn btn-success" type="submit" value="salvar" name="salvar">Salvar</button>
                </div>
              </div>
            </div> 
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
                            <div class="col-md-8">
                              <label class="form-label" for="nomecompleto">Nome completo (<span style="color: red;">*</span>)</label>
                              <input class="form-control" id="nomecompleto" name="nome" type="text" required />
                              <div class="valid-feedback">Certo!</div>
                              <div class="invalid-feedback">Inválido!</div>
                            </div>
                            <div class="col-md-4">
                              <label class="form-label" for="rg">RG</label>
                              <input class="form-control" id="rg" name="rg" type="text" />
                              <div class="valid-feedback">Certo!</div>
                              <div class="invalid-feedback">Inválido!</div>
                            </div>
                            <div class="col-md-4">
                              <label class="form-label" for="cpf">CPF</label>
                              <input class="form-control" id="cpf" name="documento" type="text" />
                              <div class="valid-feedback">Certo!</div>
                              <div class="invalid-feedback">Inválido!</div>
                            </div>
                            <div class="col-md-4">
                              <label class="form-label" for="nascimento">Nascimento</label>
                              <input class="form-control" id="nascimento" name="data_nascimento" type="date" onfocusout="calculaniver(this.value)" />
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
                              <label class="form-label" for="contato">Contato (<span style="color: red;">*</span>)</label>
                              <input class="form-control" id="contato" name="contato" type="text" required />
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
                              <input class="form-control" id="cep" name="cep" type="text" placeholder="Buscar CEP" onclick="this.value=''" v-model="cep" maxlength="8" />
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
            </div>
          </div>
        </form>

      </div>
    </div>
  </div>
</div>

<script>
  $("input[name='tipocliente']").click(function() {

    if ($(this).prop('checked')) {
      $("#divempresa").hide();

      $('#tipocontribuinte').find('[value="2"]').attr('selected', false);

      $('#tipocontribuinte').find('[value="1"]').attr('selected', true);

      if ($(this).val() == 2) {
        $("#divempresa").show();

        $('#tipocontribuinte').find('[value="1"]').attr('selected', false);

        $('#tipocontribuinte').find('[value="2"]').attr('selected', true);
      }
    }

  });

  function calculaniver(data) {
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
      error: ""
    },

    methods: {
      getCity: function() {
        var self = this;
        $.getJSON("https://viacep.com.br/ws/" + this.cep + "/json", function(result) {
          if ("erro" in result) {
            self.error = "CEP não encontrado! Insira manualmente o endereço";
            self.endereco = "";
            self.bairro = "";
            self.cidade = "";
            self.estado = "";
            $("#errocep").show();
            $("#errocep").text(self.error);
          } else {
            document.getElementById('estado').value = result.uf;
            document.getElementById('cidade').value = result.localidade;
            document.getElementById('bairro').value = result.bairro;
            document.getElementById('endereco').value = result.logradouro;
          }
        });
      }
    },

    watch: {
      cep: function() {
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
      }
    },

    mounted: function() {
      this.getCity();
    }
  });
</script>