 @extends('layout')
 @section('title','Crear')

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<body class="bg-light">    
    @section('header')
    </header>  
    @endsection
    @section('activeCrear','active')
    @section('content')
    <section>
        <div class="container- mt-5">
            <div class="card col-12 col-lg-10 offset-lg-1 p-0 flex-row flex-wrap">
                <div id="pizzaPreview" class="col-12 col-md-6 border-right text-center py-5 overflow-hidden py-lg-5 py-3">
                    <h3 class="h3"> Empieza a Crear</h3>
                    <div class="container-pizza d-block text-left">
                        <img src="img/plain-pizza.jpg" class="img-fluid position-absolute w-100 pr-5 pr-lg-0" alt="" style="z-index: 0">
                        <img src="img/mozarrella.png" class="img-fluid position-absolute w-100 disp-none pr-5 pr-lg-0" alt="" style="z-index: 1" id="mozarrella">
                        <img src="img/cheddar.png" class="img-fluid position-absolute w-100 disp-none pr-5 pr-lg-0" alt="" style="z-index: 1" id="cheddar">
                        <img src="img/tomates.png" class="img-fluid position-absolute w-100 disp-none pr-5 pr-lg-0" alt="" style="z-index: 2" id="tomates">
                        <img src="img/peperoni.png" class="img-fluid position-absolute w-100 disp-none pr-5 pr-lg-0" alt="" style="z-index: 3" id="peperoni">
                        <img src="img/pepinillos.png" class="img-fluid position-absolute w-100 disp-none pr-5 pr-lg-0" alt="" style="z-index: 4" id="pepinillos">
                        <img src="img/salchicha.png" class="img-fluid position-absolute w-100 disp-none pr-5 pr-lg-0" alt="" style="z-index: 5" id="salchicha">
                        <img src="img/carne_molida.png" class="img-fluid position-absolute w-100 disp-none pr-5 pr-lg-0" alt="" style="z-index: 6" id="carnemolida">
                        <img src="img/greenPepper.png" class="img-fluid position-absolute w-100 disp-none pr-5 pr-lg-0" alt="" style="z-index: 7" id="greenpepper">
                        <img src="img/mushroom.png" class="img-fluid position-absolute w-100 disp-none pr-5 pr-lg-0" alt="" style="z-index: 8" id="mushroom">
                        <img src="img/bacon.png" class="img-fluid position-absolute w-100 disp-none pr-5 pr-lg-0" alt="" style="z-index: 9" id="bacon">
                        <img src="img/cebolla.png" class="img-fluid position-absolute w-100 disp-none pr-5 pr-lg-0" alt="" style="z-index: 10" id="cebolla">
                        <img src="img/chicken.png" class="img-fluid position-absolute w-100 disp-none pr-5 pr-lg-0" alt="" style="z-index: 11" id="chicken">
                        <img src="img/manzana.png" class="img-fluid position-absolute w-100 disp-none pr-5 pr-lg-0" alt="" style="z-index: 12" id="manzana">
                        <img src="img/piña.png" class="img-fluid position-absolute w-100 disp-none pr-5 pr-lg-0" alt="" style="z-index: 13" id="pina">
                        <img src="img/limones.png" class="img-fluid position-absolute w-100 disp-none pr-5 pr-lg-0" alt="" style="z-index: 14" id="limones">
                        <img src="img/olives.png" class="img-fluid position-absolute w-100 disp-none pr-5 pr-lg-0" alt="" style="z-index: 15" id="olives">
                        <img src="img/basil.png" class="img-fluid position-absolute w-100 disp-none pr-5 pr-lg-0" alt="" style="z-index: 16" id="basil">
                        <img src="img/cilantro.png" class="img-fluid position-absolute w-100 disp-none pr-5 pr-lg-0" alt="" style="z-index: 17" id="cilantro">
                    </div>
                    <label for="" class="main-text bold large text-dark">Monto a Cancelar</label>
                    <div class="card col-6 offset-3 text-left">
                        <p id="pizzaValue" class="main-text text-dark my-2">$ 10</p>
                    </div>
                </div>
                <div id="ingredientSelector" class="col-12 col-md-6 p-5">
                    <label class="main-text medium text-dark mb-0">Elegí tus vegetales favoritos:<br class='d-sm-none'><span class='p-0 pl-sm-3'>$2 C/U</span></label>
                    <hr class="border-top my-2">
                    <ul class="d-flex flex-wrap list-unstyled">
                        <li class="p-0 mx-4 my-4 my-sm-2"><button onClick="addIngredient(this)" value="2" data-toggle="tooltip" data-placement="top" title="Chile verde" id="greenpepper" class="btn bg-white width btn-outline-light rounded-circle shadow-sm p-0"><img class="img-fluid" src="/img/btn-green-peppers.png" alt=""><p class='d-block d-sm-none main-text py-2'>Chile verde</p></button></li>
                        <li class="p-0 mx-4 my-4 my-sm-2"><button onClick="addIngredient(this)" value="2" data-toggle="tooltip" data-placement="top" title="Aceitunas" id="olives" class="btn bg-white width btn-outline-light rounded-circle shadow-sm p-0"><img class="img-fluid" src="/img/btn-olivas.png" alt=""><p class='d-block d-sm-none main-text py-2 text-nowrap'>Aceitunas</p></button></li>
                        <li class="p-0 mx-4 my-4 my-sm-2"><button onClick="addIngredient(this)" value="2" data-toggle="tooltip" data-placement="top" title="Hongos" id="mushroom" class="btn bg-white width btn-outline-light rounded-circle shadow-sm p-0"><img class="img-fluid" src="/img/btn-hongos.png" alt=""><p class='d-block d-sm-none main-text py-2'>Hongos</p></button></li>
                        <li class="p-0 mx-4 my-4 my-sm-2"><button onClick="addIngredient(this)" value="2" data-toggle="tooltip" data-placement="top" title="Pepinillos" id="pepinillos" class="btn bg-white width btn-outline-light rounded-circle shadow-sm p-0"><img class="img-fluid" src="/img/btn-pepinillo.png" alt=""><p class='d-block d-sm-none main-text py-2 text-nowrap'>Pepinillos</p></button></li>
                        <li class="p-0 mx-4 my-4 my-sm-2"><button onClick="addIngredient(this)" value="2" data-toggle="tooltip" data-placement="top" title="Cebolla morada" id="cebolla" class="btn bg-white width btn-outline-light rounded-circle shadow-sm p-0"><img class="img-fluid" src="/img/btn-cebolla.png" alt=""><p class='d-block d-sm-none main-text py-2'>Cebolla morada</p></button></li>                    
                    </ul>
                    <label class="main-text medium text-dark mt-4 mt-sm-0 mb-0">Elegí tus frutas favoritas:<br class='d-sm-none'><span class='p-0 pl-sm-3'>$2 C/U</span></label>
                    <hr class="border-top my-2">
                    <ul class="d-flex flex-wrap list-unstyled">
                        <li class="p-0 mx-4 my-4 my-sm-2"><button onClick="addIngredient(this)" value="2" data-toggle="tooltip" data-placement="top" title="Tomate" id="tomates" class="btn bg-white width btn-outline-light rounded-circle shadow-sm p-0"><img class="img-fluid" src="/img/btn-tomate.png" alt=""><p class='d-block d-sm-none main-text py-2'>Tomate</p></button></li>
                        <li class="p-0 mx-4 my-4 my-sm-2"><button onClick="addIngredient(this)" value="2" data-toggle="tooltip" data-placement="top" title="Limon" id="limones" class="btn bg-white width btn-outline-light rounded-circle shadow-sm p-0"><img class="img-fluid" src="/img/btn-limon.png" alt=""><p class='d-block d-sm-none main-text py-2'>Limon</p></button></li>
                        <li class="p-0 mx-4 my-4 my-sm-2"><button onClick="addIngredient(this)" value="2" data-toggle="tooltip" data-placement="top" title="Manzana" id="manzana" class="btn bg-white width btn-outline-light rounded-circle shadow-sm p-0"><img class="img-fluid" src="/img/btn-manzanas.png" alt=""><p class='d-block d-sm-none main-text py-2 text-nowrap'>Manzana</p></button></li>
                        <li class="p-0 mx-4 my-4 my-sm-2"><button onClick="addIngredient(this)" value="2" data-toggle="tooltip" data-placement="top" title="Piña" id="pina" class="btn bg-white width btn-outline-light rounded-circle shadow-sm p-0"><img class="img-fluid" src="/img/btn-pina.png" alt=""><p class='d-block d-sm-none main-text py-2'>Piña</p></button></li>
                    </ul>
                    <label class="main-text medium text-dark mb-0">Elegí tus especies favoritas:<br class='d-sm-none'><span class='p-0 pl-sm-3'>$1 C/U</span></label>
                    <hr class="border-top my-4 my-sm-2">
                    <ul class="d-flex flex-wrap list-unstyled">
                        <li class="p-0 mx-4 my-4 my-sm-2"><button onClick="addIngredient(this)" value="1" data-toggle="tooltip" data-placement="top" title="Albahaca" id="basil" class="btn bg-white width btn-outline-light rounded-circle shadow-sm p-0"><img class="img-fluid" src="/img/btn-albahaca.png" alt=""><p class='d-block d-sm-none main-text py-2 text-nowrap'>Albahaca</p></button></li>
                        <li class="p-0 mx-4 my-4 my-sm-2"><button onClick="addIngredient(this)" value="1" data-toggle="tooltip" data-placement="top" title="Culantro" id="cilantro" class="btn bg-white width btn-outline-light rounded-circle shadow-sm p-0"><img class="img-fluid" src="/img/btn-culantro.png" alt=""><p class='d-block d-sm-none main-text py-2 text-nowrap'>Culantro</p></button></li>
                    </ul>
                    <label class="main-text medium text-dark mb-0">Elegí tus carnes favoritas:<br class='d-sm-none'><span class='p-0 pl-sm-3'>$3 C/U</span></label>
                    <hr class="border-top my-2">
                    <ul class="d-flex flex-wrap list-unstyled">
                        <li class="p-0 mx-4 my-5 my-sm-2"><button onClick="addIngredient(this)" value="3" data-toggle="tooltip" data-placement="top" title="Pollo" id="chicken" class="btn bg-white width btn-outline-light rounded-circle shadow-sm p-0"><img class="img-fluid" src="/img/btn-pollo.png" alt=""><p class='d-block d-sm-none main-text py-2'>Pollo</p></button></li>
                        <li class="p-0 mx-4 my-5 my-sm-2"><button onClick="addIngredient(this)" value="3" data-toggle="tooltip" data-placement="top" title="Carne molida" id="carnemolida" class="btn bg-white width btn-outline-light rounded-circle shadow-sm p-0"><img class="img-fluid" src="/img/btn-carneMolida.png" alt=""><p class='d-block d-sm-none main-text py-2'>Carne molida</p></button></li>
                        <li class="p-0 mx-4 my-4 my-sm-2"><button onClick="addIngredient(this)" value="3" data-toggle="tooltip" data-placement="top" title="Tocineta" id="bacon" class="btn bg-white width btn-outline-light rounded-circle shadow-sm p-0"><img class="img-fluid" src="/img/btn-bacon.png" alt=""><p class='d-block d-sm-none main-text py-2 text-nowrap'>Tocineta</p></button></li>
                        <li class="p-0 mx-4 my-4 my-sm-2"><button onClick="addIngredient(this)" value="3" data-toggle="tooltip" data-placement="top" title="Salchicha" id="salchicha" class="btn bg-white width btn-outline-light rounded-circle shadow-sm p-0"><img class="img-fluid" src="/img/btn-salchicha.png" alt=""><p class='d-block d-sm-none main-text py-2 text-nowrap'>Salchicha</p></button></li>
                        <li class="p-0 mx-4 my-4 my-sm-2"><button onClick="addIngredient(this)" value="3" data-toggle="tooltip" data-placement="top" title="Pepperoni" id="peperoni" class="btn bg-white width btn-outline-light rounded-circle shadow-sm p-0"><img class="img-fluid" src="/img/btn-peperoni.png" alt=""><p class='d-block d-sm-none main-text py-2 text-nowrap'>Pepperoni</p></button></li>                    
                    </ul>
                    <label class="main-text medium text-dark mb-0">Elegí tus queso favorito:<br class='d-sm-none'><span class='p-0 pl-sm-3'>$5 C/U</span></label>
                    <hr class="border-top my-2">
                    <ul class="d-flex flex-wrap list-unstyled">
                        <li class="p-0 mx-4 my-4 my-sm-2"><button onClick="addIngredient(this)" value="5" data-toggle="tooltip" data-placement="top" title="Cheddar" id="cheddar" class="btn bg-white width btn-outline-light rounded-circle shadow-sm p-0"><img class="img-fluid" src="/img/btn-cheddar.png" alt=""><p class='d-block d-sm-none main-text py-2 text-nowrap'>Cheddar</p></button></li>
                        <li class="p-0 mx-4 my-4 my-sm-2"><button onClick="addIngredient(this)" value="5" data-toggle="tooltip" data-placement="top" title="Mozarrella" id="mozarrella" class="btn bg-white width btn-outline-light rounded-circle shadow-sm p-0"><img class="img-fluid" src="/img/btn-mozarrella.png" alt=""><p class='d-block d-sm-none main-text py-2 text-nowrap'>Mozarrella</p></button></li>
                    </ul>
                </div>
                <div id="drinkSelector" class="col-12 flex-wrap justify-content-center pb-5 disp-none">
                    <div class="col-12 d-flex flex-wrap justify-content-center my-5 py-5">
                        <div id="drink-2" class="item col-4 col-lg-3 text-center"><button class='btn p-0' onclick='changeDrinkImg(this)' value="2"><img class="col-12 px-0 image-fluid logo-size" src="img/fanta.png"></button></div>
                        <div id="drink-0" class="item col-4 col-lg-3 text-center order-1"><button disabled='disabled' class='btn p-0 selectedBtn' onclick='changeDrinkImg(this)' value="0"><img class="col-12 px-0 image-fluid logo-size selected" src="img/cocacola.png"></button></div>
                        <div id="drink-1" class="item col-4 col-lg-3 text-center order-2"><button class='btn p-0' onclick='changeDrinkImg(this)' value="1"><img class="col-12 px-0 image-fluid logo-size rounded-circle" src="img/gingerale.jpg"></button></div>
                    </div>
                    <div class="col-12 col-lg-2">
                        <p class="main-text large text-dark">Bebida</p>
                        <select onchange="changeDrink(this)" class="btn btn-outline-secondary col-12" id="inputGroupSelect01">
                            <option selected value="0">Coca-Cola</option>
                            <option value="1">Giger Ale</option>
                            <option value="2">Fanta Naranja</option>
                        </select>
                    </div>
                    <div class="col-12 col-lg-2 offset-lg-1">
                        <p class="main-text large text-dark">Tamaño</p>
                        <select onchange="drinkCost(this)" class="btn btn-outline-secondary col-12" id="inputGroupSelect02">
                            <option selected value="1">3 Litros</option>
                            <option value="2">1.5 Litros</option>
                            <option value="3">600 Mililitros</option>
                        </select>
                    </div>
                    <div class="col-12 col-lg-2 offset-lg-1">
                        <p class="main-text large text-dark">Cantidad</p>
                        <select onchange="drinkNumber(this)" class="btn btn-outline-secondary col-12" id="inputGroupSelect03">
                            <option value="0">0</option>
                            <option selected value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>
                    <div class="col-12 col-lg-2 offset-lg-1">
                        <p class="main-text large text-dark">Precio</p>
                        <div class="btn btn-outline-secondary col-12">
                            <p id="drinksValue" class="main-text text-dark m-0 text-left">$ 4</p>
                        </div>
                    </div>
                </div>
                <div id="deliveryForm" class="col-12 col-lg-6 offset-lg-3 mt-5 text-center disp-none">
                    <h3 class="h3">Ubicacion</h3>
                    <img class="image-fluid w-50 my-3" src="img/delivery.png" alt="">
                    <form class="form-group text-left" action="">
                        <label class="main-text bold medium text-dark" for="Distrito">Distrito:</label>
                        <input class="form-control" type="text" name="Distrito">
                        <label class="main-text bold medium text-dark" for="Calle">Calle:</label>
                        <input class="form-control" type="text" name="Calle">
                        <label class="main-text bold medium text-dark" for="Casa">Casa:</label>
                        <input class="form-control" type="text" name="Casa">
                        <label class="main-text bold medium text-dark" for="Telefono">Telefono:</label>
                        <input class="form-control" type="text" name="Telefono">
                    </form>
                </div>
                <div id="paymentForm" class="flex-wrap col-12 disp-none">
                    <div class="col-12 col-md-6 px-3 py-5">
                        <h3 class="main-text bold large text-primary">Factura</h3>
                        <table class="table table-sm table-active">
                            <thead>
                                <tr>
                                    <th scope="col" class="main-text medium text-dark">Pizza</th>
                                    <th scope="col" class="main-text medium text-dark">$ 14</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="pl-3">Hongos</td>
                                    <td>$ 2</td>
                                </tr>
                                <tr>
                                    <td class="pl-3">Piña</td>
                                    <td>$ 4</td>
                                </tr>
                                <tr>
                                    <td class="pl-3">Tomate</td>
                                    <td>$ 3</td>
                                </tr>
                                <tr>
                                    <td class="pl-3">Albahaca</td>
                                    <td>$ 2</td>
                                </tr>
                                <tr class="ml-3">
                                    <td class="pl-3">Base de pizza</td>
                                    <td>$ 10</td>
                                </tr>
                                <tr>
                                    <th scope="col" class="main-text medium text-dark">Bebidas</th>
                                    <th scope="col" class="main-text medium text-dark">$ 6</th>
                                </tr>
                                <tr>
                                    <td class="pl-3">Coca-Cola</td>
                                    <td>$ 6</td>
                                </tr>
                                <tr>
                                    <th scope="col" class="main-text medium text-dark">Express</th>
                                    <th scope="col" class="main-text medium text-dark">$ 3</th>
                                </tr>
                                <tr>
                                    <th scope="col" class="main-text medium text-dark">Total</th>
                                    <th scope="col" class="main-text medium text-dark">$ 21</th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-12 col-md-6 px-3 py-5">
                        <h3 class="main-text bold large text-primary">Información de pago</h3>
                        <form action="" class="form-group">
                            <label for="noCard" class="main-text bold text-dark">Número de tarjeta:</label>
                            <input class="form-control col-12 col-lg-8" type="text" name="noCard">
                            <label for="noCard" class="main-text bold text-dark">Tipo:</label>
                            <div class="row pl-3">
                                <select onchange="" class="form-control col-8 col-lg-5" id="inputGroupSelect04">
                                    <option selected value="0">Visa</option>
                                    <option value="1">Master Card</option>
                                </select> 
                                <img class="img-fluid w-25 h-25 pl-4" src="img/visa.png" alt="">
                            </div>
                            <label for="" class="main-text bold text-dark">Fecha de Vencimiento:</label>
                            <div class="row pl-3">
                                <select onchange="" class="form-control col-5 col-lg-3" id="inputGroupSelect05">
                                    <option selected value="0">Mes</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                </select> 
                                <select onchange="" class="form-control col-5 col-lg-3 offset-1" id="inputGroupSelect06">
                                    <option selected value="0">Año</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                </select> 
                            </div>
                            <label for="secNo" class="main-text bold text-dark">Código de seguridad:</label>
                            <input class="form-control col-6 col-lg-3" type="password" name="secNo">
                            <button class="btn btn-primary col-12 col-lg-8 mt-5">Pagar</button>
                        </form>
                    </div>
                </div>
                <div class="col-12 d-flex justify-content-between"> 
                    <div class="d-flex">
                        <ul class="px-3 pt-0 list-unstyled">
                            <li class="height"><i class="fas fa-circle active"></i></li>
                            <li class="height"><i class="fas fa-circle"></i></li>
                            <li class="height"><i class="fas fa-circle"></i></li>
                            <li class="height"><i class="fas fa-circle"></i></li>
                        </ul>
                        <p class="step-indicator">Siguiente paso <br><span>Bebidas</span></p>
                    </div>
                    <div>
                        <button id="btn-back" class="btn disp-none" onClick="lastStep()"><i class="fas fa-chevron-left main-text large"></i></button>
                        <button class="btn" onClick="nextStep()"><i class="fas fa-chevron-right main-text large"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </section>  
    <script>
        var pizzaCost = 10;
        var step = 1;
        var drinkSelected = 0;
        var sizeCost = 4;
        var number = 1;
        var drinksCost = 4;
        var totalCost = 14;
        $('document').ready(function(){
            $(function () {
                $('[data-toggle="tooltip"]').tooltip()
            })
        });
        function nextStep() {
            if(step!=4){
                step++;
            }
            switch (step) {
                case 2:
                    $('#pizzaPreview').css('display', 'none');
                    $('#ingredientSelector').css('display', 'none');
                    $('#btn-back').css('display', 'inline-block');
                    $('#drinkSelector').css('display', 'flex');
                    $('.step-indicator').children('span').text('Envio');
                    break;
                case 3:
                    $('#drinkSelector').css('display', 'none');
                    $('#deliveryForm').css('display', 'block');
                    $('.step-indicator').children('span').text('Pagar');
                    break;
                case 4:
                    $('#deliveryForm').css('display', 'none');
                    $('#paymentForm').css('display', 'flex');
                    $('.step-indicator').children('span').text('Comer');    
                    break;
            }
        }
        function lastStep() {
            if(step!=1){
                step--;
            }
            switch (step) {
                case 1:
                    $('#pizzaPreview').css('display', 'block');
                    $('#ingredientSelector').css('display', 'block');
                    $('#btn-back').css('display', 'none');
                    $('#btn-back').css('display', 'none');
                    $('#drinkSelector').css('display', 'none');
                    $('.step-indicator').children('span').text('Bebidas');
                    break;
                case 2:
                    $('#deliveryForm').css('display', 'none');
                    $('#drinkSelector').css('display', 'flex');
                    $('.step-indicator').children('span').text('Envio');
                    break;
                case 3:
                    $('#paymentForm').css('display', 'none');
                    $('#deliveryForm').css('display', 'block');
                    $('.step-indicator').children('span').text('Pagar');
                    break;
                case 4:
                    $('#deliveryForm').css('display', 'none');
                    $('#finalStep').css('display', 'block');
                    $('.step-indicator').children('span').text('Gracias');
                break;
            }
        }
        function addIngredient(element){
            if($('img#'+element.id).css('display') != 'flex'){
                $('img#'+element.id).css('display', 'flex');
                $('button#'+element.id).addClass('selected');
                var value = parseInt(element.value);
                calcPizzaValue(value);
            }else{
                $('img#'+element.id).css('display', 'none');
                $('button#'+element.id).removeClass('selected');
                var value = parseInt(element.value);
                calcPizzaValue(-value);
            }
        }
        function calcPizzaValue(ammount) {
            totalCost -= pizzaCost;
            pizzaCost+=ammount;
            totalCost += pizzaCost;
            $('#pizzaValue').text('$ '+pizzaCost);
        }
        function changeDrink(element) {
            $('.order-2').removeClass('order-2');
            $('.order-1').removeClass('order-1');
            $('#drink-'+drinkSelected).addClass('order-2');
            $('#drink-'+element.value).addClass('order-1');
            $('.selected').removeClass('selected');
            $('.selectedBtn').removeClass('selectedBtn')
                            .attr("disabled", false);;
            $('#drink-'+element.value).children().addClass('selectedBtn')
                            .attr("disabled", true);
            $('#drink-'+element.value).children().children().addClass('selected');
            drinkSelected = element.value;
        }
        function changeDrinkImg(element) {
            $('#inputGroupSelect01').val(element.value).change();
        }
        function drinkCost(element){
            switch (element.value) {
                case '1':
                    sizeCost = 4;
                    break;
                case '2':
                    sizeCost = 2;
                    break;
                case '3':
                    sizeCost = 1;
                    break;
            }
            calcDrinkCost();
        }
        function drinkNumber(element){
            number=parseInt(element.value);
            calcDrinkCost();
        }
        function calcDrinkCost(){
            totalCost-=drinksCost;
            drinksCost = number*sizeCost;
            totalCost+=drinksCost;
            $('#drinksValue').text('$ '+drinksCost);            
        }
    </script>
         
   @endsection
