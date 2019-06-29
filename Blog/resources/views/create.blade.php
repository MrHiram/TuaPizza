 @extends('layout')
 @section('title','Crear')
 @section('footermargin','mt-5')

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
                        <?php
                        foreach($ingredientsDB as $ingredientDB){
                            echo "<img src='img/".$ingredientDB['pizza_picture']."' class='img-fluid position-absolute w-100 disp-none pr-5 pr-lg-0' alt='' style='z-index:  ".$ingredientDB['z_index']."' id='".$ingredientDB['tag_id']."'>";
                        }
                        ?>
                    </div>
                    <label for="" class="main-text bold large text-dark">Monto a Cancelar</label>
                    <div class="card col-6 offset-3 text-left">
                        <p id="pizzaValue" class="main-text text-dark my-2">$ 10</p>
                    </div>
                </div>
                <div id="ingredientSelector" class="col-12 col-md-6 p-5 ">
                    <label class="main-text medium text-dark mb-0">Elegí tus vegetales favoritos:<br class='d-sm-none'><span class='p-0 pl-sm-3'>$2 C/U</span></label>
                    <hr class="border-top my-2">
                    <ul class="d-flex flex-wrap list-unstyled">
                        <?php
                        foreach($ingredientsDB as $ingredientDB){
                            if($ingredientDB['category'] == 'Vegetales'){
                                echo "<li class='p-0 mx-4 my-4 my-sm-2'><button onClick='addIngredient(this)' value='".$ingredientDB['price']."' data-toggle='tooltip' data-placement='top' title='".$ingredientDB['name']."' id='".$ingredientDB['tag_id']."' class='btn bg-white width btn-outline-light rounded-circle shadow-sm p-0'><img class='img-fluid' src='/img/".$ingredientDB['btn_picture']."' alt=''><p class='d-block d-sm-none main-text py-2 text-nowrap'>".$ingredientDB['name']."</p></button></li>";
                            }
                        }
                        ?>              
                    </ul>
                    <label class="main-text medium text-dark mt-4 mt-sm-0 mb-0">Elegí tus frutas favoritas:<br class='d-sm-none'><span class='p-0 pl-sm-3'>$2 C/U</span></label>
                    <hr class="border-top my-2">
                    <ul class="d-flex flex-wrap list-unstyled">
                        <?php
                        foreach($ingredientsDB as $ingredientDB){
                            if($ingredientDB['category'] == 'Frutas'){
                                echo "<li class='p-0 mx-4 my-4 my-sm-2'><button onClick='addIngredient(this)' value='".$ingredientDB['price']."' data-toggle='tooltip' data-placement='top' title='".$ingredientDB['name']."' id='".$ingredientDB['tag_id']."' class='btn bg-white width btn-outline-light rounded-circle shadow-sm p-0'><img class='img-fluid' src='/img/".$ingredientDB['btn_picture']."' alt=''><p class='d-block d-sm-none main-text py-2 text-nowrap'>".$ingredientDB['name']."</p></button></li>";
                            }
                        }
                        ?>   
                    </ul>
                    <label class="main-text medium text-dark mb-0">Elegí tus especies favoritas:<br class='d-sm-none'><span class='p-0 pl-sm-3'>$1 C/U</span></label>
                    <hr class="border-top my-4 my-sm-2">
                    <ul class="d-flex flex-wrap list-unstyled">
                        <?php
                        foreach($ingredientsDB as $ingredientDB){
                            if($ingredientDB['category'] == 'Especies'){
                                echo "<li class='p-0 mx-4 my-4 my-sm-2'><button onClick='addIngredient(this)' value='".$ingredientDB['price']."' data-toggle='tooltip' data-placement='top' title='".$ingredientDB['name']."' id='".$ingredientDB['tag_id']."' class='btn bg-white width btn-outline-light rounded-circle shadow-sm p-0'><img class='img-fluid' src='/img/".$ingredientDB['btn_picture']."' alt=''><p class='d-block d-sm-none main-text py-2 text-nowrap'>".$ingredientDB['name']."</p></button></li>";
                            }
                        }
                        ?>
                    </ul>
                    <label class="main-text medium text-dark mb-0">Elegí tus carnes favoritas:<br class='d-sm-none'><span class='p-0 pl-sm-3'>$3 C/U</span></label>
                    <hr class="border-top my-2">
                    <ul class="d-flex flex-wrap list-unstyled">
                        <?php
                        foreach($ingredientsDB as $ingredientDB){
                            if($ingredientDB['category'] == 'Carnes'){
                                echo "<li class='p-0 mx-4 my-4 my-sm-2'><button onClick='addIngredient(this)' value='".$ingredientDB['price']."' data-toggle='tooltip' data-placement='top' title='".$ingredientDB['name']."' id='".$ingredientDB['tag_id']."' class='btn bg-white width btn-outline-light rounded-circle shadow-sm p-0'><img class='img-fluid' src='/img/".$ingredientDB['btn_picture']."' alt=''><p class='d-block d-sm-none main-text py-2 text-nowrap'>".$ingredientDB['name']."</p></button></li>";
                            }
                        }
                        ?>
                    </ul>
                    <label class="main-text medium text-dark mb-0">Elegí tus queso favorito:<br class='d-sm-none'><span class='p-0 pl-sm-3'>$5 C/U</span></label>
                    <hr class="border-top my-2">
                    <ul class="d-flex flex-wrap list-unstyled">
                        <?php
                        foreach($ingredientsDB as $ingredientDB){
                            if($ingredientDB['category'] == 'Quesos'){
                                echo "<li class='p-0 mx-4 my-4 my-sm-2'><button onClick='addIngredient(this)' value='".$ingredientDB['price']."' data-toggle='tooltip' data-placement='top' title='".$ingredientDB['name']."' id='".$ingredientDB['tag_id']."' class='btn bg-white width btn-outline-light rounded-circle shadow-sm p-0'><img class='img-fluid' src='/img/".$ingredientDB['btn_picture']."' alt=''><p class='d-block d-sm-none main-text py-2 text-nowrap'>".$ingredientDB['name']."</p></button></li>";
                            }
                        }
                        ?>
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
                    <div class="form-group text-left">                        
                        <div class="alert alert-danger disp-none" id="emptyError" role="alert">Todos los campos son requeridos.</div>
                        <label class="main-text bold medium text-dark" for="district">Distrito:</label>
                        <input class="form-control" type="text" id="district" name="district">
                        <label class="main-text bold medium text-dark" for="street">Calle:</label>
                        <input class="form-control" type="text" id="street" name="street">
                        <label class="main-text bold medium text-dark" for="home">Casa:</label>
                        <input class="form-control" type="text" id="home" name="home">
                        <label class="main-text bold medium text-dark" for="phone">Telefono:</label>
                        <input class="form-control" type="text" id="phone" name="phone">
                    </div>
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
                        <div class="form-group">
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
                            <button class="btn btn-primary col-12 col-lg-8 mt-5" onclick="sendInfo()">Pagar</button>
                        </div>
                    </div>
                </div>
                <div id="delivery" class="col-12 mt-5 disp-none">
                    <h3 class="h3 text-center py-5">Tu pedido va en camino</h3>
                    <img src="img/delivery.png" alt="" class="col-4 offset-4">
                    <div class="row justify-content-center">
                        <a class="btn btn-primary my-4" href="/">Aceptar</a>
                    </div>
                </div>
                <div id="button-nav"class="col-12 d-flex justify-content-between"> 
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
                        <button id="btn-forward" class="btn" onClick="nextStep()"><i class="fas fa-chevron-right main-text large"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </section>  
    <script src="js/createToggler.js"></script>
    <script src="js/submitOrder.js"></script>
   @endsection
