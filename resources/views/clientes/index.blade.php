@extends("templates.app")

@section("title")
Listar Clientes 
@endsection

@section("body")

<script type="text/javascript">

	$(document).ready(function(){
		$(".deletar").click(function(event) {
			event.preventDefault(); 
			swal({
				title: "Excluir",
				text: "Tem certeza que deseja excluir este registro?",
				icon: "warning",
				buttons: true,
				dangerMode: true,
			}).then((willDelete) => {
				if (willDelete) {
					$(".loading-page").fadeIn("slow");
					document.getElementById('delete-form-'+$(this).attr('id')).submit();
					swal("Cliente excluído com sucesso", {
						icon: "success",
					});
				}
			});
		});
	});

</script>	

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
              <h3>Listagem de clientes</h3>
              <p class="mb-0">Listando os seus clientes</p>
            </div>
          </div>
        </div>
        <div class="card-body position-relative">
          <div class="row">
            <div class="col-lg-8">
              <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#cadastrar">Cadastrar</button>
            </div>
          </div>
        </div>
      </div>
      <div class="card">          
        <div class="card-body bg-light">
          <div id="tableExample3" data-list='{"valueNames":["nome","cpf","celular"],"page":10,"pagination":true}'>
            <div class="row justify-content-end g-0">
              <div class="col-auto col-sm-5 mb-3">
                <form>
                  <div class="input-group"><input class="form-control form-control-sm shadow-none search" type="search" placeholder="Procurar..." aria-label="search" />
                    <div class="input-group-text bg-transparent"><span class="fa fa-search fs--1 text-600"></span></div>
                  </div>
                </form>
              </div>
            </div>
            <div class="table-responsive scrollbar">

              <table class="table table-bordered table-striped fs--1 mb-0">
                <thead class="bg-200 text-900">
                  <tr>
                    <th class="sort" data-sort="nome">Nome</th>
                    <th class="sort" data-sort="cpf">CPF/CNPJ</th>
                    <th class="sort" data-sort="celular">Contato</th>
                    <th class="sort">Ações</th>
                  </tr>
                </thead>
                <tbody class="list">

					<tr>
						<td class="nome"></td>
						<td class="cpf"></td>
						<td class="contato"></td>
						<td>
							<a href="">
								<i class="fas fa-edit" aria-hidden="true"></i>
							</a>
							| 
							<a href="" class="deletar" id="">
								<span class="fas fa-trash text-danger"></span>
							</a>						
						<td>
						<form id="delete-form-" action="" method="post">

						</form>
					</tr>

                 </tbody>
               </table>

               Nenhum cliente cadastrado

             </div>
             <div class="d-flex justify-content-center mt-3"><button class="btn btn-sm btn-falcon-default me-1" type="button" title="Anterior" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
              <ul class="pagination mb-0"></ul><button class="btn btn-sm btn-falcon-default ms-1" type="button" title="Próxima" data-list-pagination="next"><span class="fas fa-chevron-right"> </span></button>
            </div>
          </div>
        </div>
      </div>

      @include('components.footer')

    </div>    
  </div>
</main>

@include('clientes.cadastrar_modal')

<!-- ===============================================-->
<!--    End of Main Content-->
<!-- ===============================================-->

@include('components.customize')

@endsection