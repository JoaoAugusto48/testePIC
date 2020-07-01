<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>QUADRINHOS</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('css/index.css') }}">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>

</head>
<body class="p-5">
 
<div class="container">
    <div class="row">
        <div class="col-12" style="border-bottom: 3px solid black;">
            <h3 class="text-center">Arraste os itens abaixo!</h3>
        </div>
        <div class="col-12 acopla-imagens" id="acopla-imagens" style="display: flex; align-items: stretch;">
                <div class="shrek arrastavel"></div>
                <div class="burro arrastavel"></div>

        </div>
        <div class="col-12">
            <button class="btn btn-success" onclick="baixaQuadrinho()">Baixar Quadrinho</button>
        </div>
    </div>
</div>
 
<div id="output-quadrinho">
oi
</div>
 

<script src="{{ asset('js/index.js') }}"></script>
</body>
</html>