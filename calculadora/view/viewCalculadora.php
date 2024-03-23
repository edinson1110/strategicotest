<div class="row justify-content-center mb-3 mt-3">
    <div class="col-md-7">
        <h2 class="text-center">Calculadora API Rest</h2>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-md-6 content-cal">
        <div class="row justify-content-center text-center mt-5 gap-4">
            <div class="preview">
                <input type="text" class="form-control" name="calc" id="calc" readonly>
            </div>
            <div class="numbers mt-4 d-flex flex-column justify-content-center align-items-center">
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
                    <span class="btn btn-warning number" id="clearOne" data-value="">C</span>
                    <span class="btn btn-success number" data-value="0">0</span>
                    <span class="btn btn-warning number" id="clearAll" data-value="">AC</span>
                    <span class="btn btn-danger number" data-value=" / ">/</span>
                </div>
                <div class="functions">
                    <div class="btn btn-primary w-100" id="result" data-value="">=</div>
                </div>
            </div>

            <div class="result col-md-6">
                <b>Resultado</b>
                <div class="alert alert-success w-100" id="resp">

                </div>
            </div>
        </div>
    </div>
</div>