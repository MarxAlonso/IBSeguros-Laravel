<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="{{ asset ('/images/logo1.png') }}" type="image/x-icon" />
    <title>IBSeguros</title>
    <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/estilos.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/responsive.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/formstyle.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Roboto:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.7/glider.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous"/>


    <script>
        function solonumeros(e){
            key=e.keyCode || e.which;

            teclado=String.fromCharCode(key);

            numeros="0123456789"

            especiales="8-37-38-46"

            teclado_especial=false;

            for(var i in especiales){
                if(key==especiales[i]){
                    teclado_especial=true;
                }
            }
            if(numeros.indexOf(teclado)==-1 && !teclado_especial){
                return false;
            }
        }
    </script>

<?php $tag = "Google tag (gtag.js)";?>
<script async src="https://www.googletagmanager.com/gtag/js?id=G-TDZXPGDRC0"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-TDZXPGDRC0');
</script>

</head>

<body>

    @include('Shared.partials.header')

    <div class="container-fluid" style="flex: 1;padding-right:0;padding-left:0px">
        <main role="main">
            {!! $renderBody !!}
        </main>
    </div>

    @include('Shared.partials.footer')


    <div class="preloader hidden">

    <div class="lds-roller">
    </div>

    <script type="text/javascript" src="{{ asset('/js/jquery-3.4.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/bootstrap.min.js') }}"></script>
    <script src="{{asset('/js/carrousel-inicio-seguros.js')}}"></script>
    <script src="{{asset('/js/carrousel-inicio.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.7/glider.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>