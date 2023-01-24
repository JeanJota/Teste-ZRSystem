<!DOCTYPE html>
<html dir="ltr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="cache-control" content="no-cache">

  <title>ZR SYSTEM - @yield("title") </title>

  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/favicons/apple-touch-icon.png') }}">
  <link rel="icon" type="image/png" sizes="52x52" href="{{ asset('split/img/zrsystem.png') }}">
  <link rel="icon" type="image/png" sizes="56x56" href="{{ asset('split/img/zrsystem.png') }}">
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicons/favicon.ico') }}">
  <link rel="manifest" href="{{ asset('assets/img/favicons/manifest.json') }}">
  <meta name="msapplication-TileImage" content="{{ asset('assets/img/favicons/mstile-150x150.png') }}">
  <meta name="theme-color" content="#ffffff">
  <script src="{{ asset('vendors/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/js/config.js') }}"></script>
  <script src="{{ asset('vendors/simplebar/simplebar.min.js') }}"></script>

  <!-- ===============================================-->
  <!--    Stylesheets-->
  <!-- ===============================================-->

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
  <link href="{{ asset('vendors/simplebar/simplebar.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/theme-rtl.min.css') }}" rel="stylesheet" id="style-rtl">
  <link href="{{ asset('assets/css/theme.min.css') }}" rel="stylesheet" id="style-default">
  <link href="{{ asset('assets/css/user-rtl.min.css') }}" rel="stylesheet" id="user-style-rtl">
  <link href="{{ asset('assets/css/user.min.css') }}" rel="stylesheet" id="user-style-default">
  <link href="{{ asset('vendors/choices/choices.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('split/style.css') }}" rel="stylesheet" >
  <script>
    var isRTL = JSON.parse(localStorage.getItem('isRTL'));
    if (isRTL) {
      var linkDefault = document.getElementById('style-default');
      var userLinkDefault = document.getElementById('user-style-default');
      linkDefault.setAttribute('disabled', true);
      userLinkDefault.setAttribute('disabled', true);
      document.querySelector('html').setAttribute('dir', 'rtl');
    } else {
      var linkRTL = document.getElementById('style-rtl');
      var userLinkRTL = document.getElementById('user-style-rtl');
      linkRTL.setAttribute('disabled', true);
      userLinkRTL.setAttribute('disabled', true);

      
      function showhide(){
        const password = document.getElementById('password');
        const icon = document.getElementById('icon');
        
        if (password.type === 'password'){
          password.setAttribute('type','text');
          icon.classList.add('fa fa-eye-slash')
        }
        else {
          password.setAttribute('type','password');
          icon.classList.remove('fa fa-eye-slash')
        }
      }
      function showhideconfirm(){
        const password = document.getElementById('confirmpassword');
        const icon = document.getElementById('confirmicon');
        
        if (password.type === 'password'){
          password.setAttribute('type','text');
          icon.classList.add('hide')
        }
        else {
          password.setAttribute('type','password');
          icon.classList.remove('hide')
        }
      }
    }

    $("#cnpj").mask("00.000.000/0000-00");
    $("#cpf").mask("000.000.000-00");
    $("#celular").mask("(00) 00000-0000");
    $("#fixo").mask("(00) 0000-0000");
    $("#contato2").mask("(00) 00000-0000");
    $("#placa").mask("AAA-0A00");

  </script>
</head>

<body>

  <div class="loading-page" style="display: none"></div>
  
  @yield("body")

	<!-- ===============================================-->
	<!--    JavaScripts-->
	<!-- ===============================================-->
	<script src="{{ asset('vendors/popper/popper.min.js') }}"></script>
	<script src="{{ asset('vendors/bootstrap/bootstrap.min.js') }}"></script>
	<script src="{{ asset('vendors/anchorjs/anchor.min.js') }}"></script>
	<script src="{{ asset('vendors/is/is.min.js') }}"></script>
	<script src="{{ asset('vendors/fontawesome/all.min.js') }}"></script>
	<script src="{{ asset('vendors/echarts/echarts.min.js') }}"></script>
	<script src="{{ asset('vendors/lodash/lodash.min.js') }}"></script>
	<script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
	<script src="{{ asset('vendors/list.js/list.min.js') }}"></script>
	<script src="{{ asset('assets/js/theme.js') }}"></script>
	<script src="{{ asset('assets/ai/ai.js') }}<?= '?v=' . time(); ?>" async></script>
	<script src="{{ asset('vendors/choices/choices.min.js') }}"></script>
	<script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
	<script>feather.replace()</script>
	<script src="{{ asset('assets/js/sweetalert.min.js') }}"></script>

	@yield("JavaScripts")
  
	<script type="text/javascript">
		$("#cnpj").mask("00.000.000/0000-00");
		$("#cpf").mask("000.000.000-00");
		$("#celular").mask("(00) 00000-0000");
		$("#fixo").mask("(00) 0000-0000");
		$("#contato2").mask("(00) 00000-0000");
		$("#placa").mask("AAA-0A00");  
	</script>

</body>

</html>