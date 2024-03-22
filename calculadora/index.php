<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="libraries/css/global.css">
    <title>Calculadora</title>
</head>

<body>
    <div class="row text-center mt-5">
        <div class="preview col-md-5">
            <!-- <span id="calc"></span> -->
            <input type="text" class="form-control" name="calc" id="calc" readonly>
        </div>
        <div class="numbers mt-4">
            <div id="zona1">
                <span class="btn btn-success number" data-value="7">7</span>
                <span class="btn btn-success number" data-value="8">8</span>
                <span class="btn btn-success number" data-value="9">9</span>
                <span class="btn btn-danger number" data-value=" + ">+</span>
            </div>
            <div id="zona2">
                <span class="btn btn-success number" data-value="4">4</span>
                <span class="btn btn-success number" data-value="5">5</span>
                <span class="btn btn-success number" data-value="6">6</span>
                <span class="btn btn-danger number" data-value=" * ">*</span>
            </div>
            <div class="zona3">
                <span class="btn btn-success number" data-value="1">1</span>
                <span class="btn btn-success number" data-value="2">2</span>
                <span class="btn btn-success number" data-value="3">3</span>
                <span class="btn btn-danger number" data-value=" - ">-</span>
            </div>
            <div class="zona4">
                <span class="btn btn-warning" id="clearOne" data-value="">C</span>
                <span class="btn btn-success number" data-value="0">0</span>
                <span class="btn btn-warning" id="clearAll" data-value="">AC</span>
                <span class="btn btn-danger number" data-value=" / ">/</span>
            </div>
        </div>
        <div class="functions">
            <div class="btn btn-primary" id="result" data-value="">=</div>
        </div>
        <div class="result col-md-3">
            <b class="alert alert-success" id="resp"><b>Resultado</b></b>
        </div>
    </div>
    <script src="libraries/js/jquery/jquery.min.js"></script>
    <script src="libraries/js/global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>