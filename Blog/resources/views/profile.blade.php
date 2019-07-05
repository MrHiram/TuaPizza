@extends('layout')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
@section('title','Perfil')
@section('navPerfil')
    <li class="nav-item active"><a href="#" onClick="receipt()" class="nav-link mx-3 d-block d-lg-none"><i class="fas fa-file-invoice-dollar"></i>&#160; &#160; Facturas</a></li>
    <li class="nav-item active"><a href="#" onClick="history()" class="nav-link mx-3 d-block d-lg-none"><i class="fas fa-history"></i>&#160; &#160; Historial</a></li>
    <li class="nav-item active"><a href="#" onClick="favorites()" class="nav-link mx-3 d-block d-lg-none"><i class="fas fa-star"></i>&#160; &#160; Favoritas</a></li>
    <li class="d-block d-lg-none"><hr class="col-10"></li> 
@endsection
@section('header')
</header> 
@endsection  
@section('content')
    <section>
    <div class="container-fluid row pr-0">
        <div class="col-2 bg-dark profile-sidebar text-white d-none d-lg-block py-5">
            <div class="row mb-3 justify-content-center">
                <div class="h4 text-white bg-danger rounded-circle text-center btn width pt-2"><i class="far fa-user"></i></div>
                <p class="m-3"> {{Auth::user()->name}}</p>
            </div>
            <div class="row ">
                <div class="col-3 offset-1 text-center">
                    <ul class="list-unstyled">
                        <li class="py-2"><a href="#" onClick="receipt()" class="main-text medium text-white"><i class="fas fa-file-invoice-dollar"></i></a></li>
                    </ul>
                </div>
                <div class="col-6 text-left">
                    <ul class="list-unstyled">
                        <li class="py-2"><a href="#" onClick="receipt()" class="main-text medium text-white">Facturas</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-10">
            <div class="row bg-white shadow-sm margin-right">
                <h2 id="indicator" class="h3 pl-5 pt-2">Facturas</h2>
            </div>
            <div id='receipt' class='d-flex flex-wrap'>
                <?php
                    $bebida= array();
                    $exists;
                    foreach($orderDB as $order){
                        if($order["user_id"]==Auth::user()->id){
                            $exists = false;
                            foreach ($orderDrinksDB as $orderDrinks) {
                                if($order["id"]==$orderDrinks["order_id"]){
                                    foreach ($drinksDB as $drink) {
                                        if($drink["id"]==$orderDrinks["drink_id"]){
                                            array_push($bebida,$drink["name"]);
                                            $exists = true;
                                        }
                                    }
                                }
                            }
                            if(!$exists){
                                array_push($bebida,"none");
                            }
                        }
                    }
                    $contador =0;
                    foreach ($receiptDB as $receipt){
                        echo"
                            <div class='card card-width ml-3 my-4'>
                                <div class='card-body'>
                                    <h5 class='card-title text-primary main-text medium bold'>Factura #".$receipt["id"]."</h5>
                                    <h6 class='card-subtitle mb-2 text-muted mb-3'>".$receipt["created_at"]."</h6>
                                    <table class='table'>
                                        <thead>
                                        <tbody>
                                            <tr>
                                            <th scope='row'>x1</th>
                                            <td>Pizza personalizada</td>
                                            </tr>";
                                            if ($bebida[$contador]!="none") {
                                                echo "<tr><th scope='row'>x1</th><td>"; 
                                                echo $bebida[$contador];
                                                echo"</td></tr>";
                                            }else{
                                                echo "<tr><th scope='row'>x0</th><td>Sin bebida</td></tr>"; 
                                            } 
                                            echo"<tr>
                                            <th scope='row'>x1</th>
                                            <td>Express</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <p class='main-text text-dark'><span class='main-text text-dark bold'>Total: </span> $".$receipt["total"]."</p>
                                </div>
                                <div class='card-footer text-center'>
                                    <button type='button' class='btn btn-primary btn-lg' data-toggle='modal' data-target='#Modal".$contador."'>Más Info</button>
                                </div>                                   
                            </div>";
                            $selectedOrder;
                            foreach ($orderDB as $order) {
                                if($order['id']==$receipt['order_id']){
                                    $selectedOrder = $order;
                                    break;
                                }
                            }
                            foreach ($pizzaDB as $pizza) {
                                $ingreientsPost = [];
                                if($pizza[0]['id'] == $selectedOrder['pizza_id']){
                                    echo "
                                        <div class='modal fade' id='Modal".$contador."' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                                            <div class='modal-dialog' role='document'>
                                                <div class='modal-content'>
                                                    <div class='modal-header pt-3 pb-0'>
                                                        <div>
                                                            <h5 class='modal-title text-primary main-text medium bold'>Factura #".$receipt["id"]."</h5>
                                                            <h6 class='text-muted'>".$receipt["created_at"]."</h6>
                                                        </div>
                                                        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                                            <span aria-hidden='true'>&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class='modal-body pb-0'>
                                                        <h5 class='text-secondary'>Ingredientes</h5>
                                                        <table class='table'>
                                                            <thead>
                                                            <tbody>";
                                                                foreach ($pizzaIngredientDB as $pizzaIngredients) {
                                                                    foreach ($pizzaIngredients as $pizzaIngredient ) {
                                                                        if($pizzaIngredient['pizza_id'] == $pizza[0]['id']){
                                                                            echo "<tr><th scope='row'>x1</th><td>";
                                                                            foreach ($ingredientDB as $ingredientName ) {
                                                                                if($ingredientName['id']==$pizzaIngredient['ingredient_id']){
                                                                                    echo $ingredientName['name'];
                                                                                    array_push($ingreientsPost, $ingredientName['id']);
                                                                                }
                                                                            }
                                                                            echo "</td></tr>"; 
                                                                        }
                                                                    }
                                                                } 
                                    echo"
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class='modal-footer'>
                                                        <button type='button' class='btn btn-secondary' data-dismiss='modal'>Aceptar</button>
                                                        <form class='mt-3'action='/create' method='post'>
                                                            <input type='hidden' name='id' value='".$pizza[0]['id']."'>
                                                            <input type='hidden' name='price' value='$ ".$pizza[0]['total_price']."'>
                                                            ";
                                                            $i=0;
                                                            foreach ($ingreientsPost as $key) {
                                                                echo "<input type='hidden' name='ingredients".$i++."' value='".$key."'>";
                                                            }
                                                            ?>
                                                            @csrf
                                                            <?php echo "<button class='btn btn-primary' type='submit'>Crear</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>";
                                }
                            }
                   
                        $contador++;   
                    }
                ?>
            </div>        
        </div>
    </div>
    </section>
    @endsection
</body>
@section('scripts')
    <script>
        function receipt() {
            $('#receipt').css('display','block');
            $('#history').css('display','none');
            $('#favorites').css('display','none');
        }
        
        function history() {
            $('#receipt').css('display','none');
            $('#history').css('display','block');
            $('#favorites').css('display','none');
            $('#indicator').text('Historial');            
        }
        
        function favorites() {
            $('#receipt').css('display','none');
            $('#history').css('display','none');
            $('#favorites').css('display','block'); 
            $('#indicator').text('Favoritas');           
        }
    </script>
 @endsection
