<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    @livewire('ComponenteLivewire')
    
    <script>
    function iniciarArrastre(event, type) {
        console.log("arrastrando un elemento: ", type);
        event.dataTransfer.setData("text", type);
    }

    function permitirSoltar(event) {
        console.log("Elemento arrastrado sobre el área de destino");
        event.preventDefault();
    }

    function manejarSoltar(event) {
        event.preventDefault();
        var type = event.dataTransfer.getData("text");
        console.log("Elemento soltado de tipo:", type);
        Livewire.dispatch('elementoArrastrado', { tipo: type});
    }
    </script>
</body>
</html>