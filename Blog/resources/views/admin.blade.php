@extends('layout')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
@section('title','Gestor de ingredientes')
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
        <div class="container-fluid pr-0">
            <div class="container-fluid overflow-hidden">
                <div class="row justify-content-between py-3">
                    <h2 class="h3 pl-5 pt-2">Ingredientes</h2>
                    <button type="button" class="btn btn-primary mt-2 mr-5" data-toggle="modal" data-target="#exampleModal">Añadir un ingrediente</button>
                </div>
            </div>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Añadir ingrediente</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form id="formIngredient" class="mb-0">
                                <label class="main-text"for="name">Nombre del ingrediente</label>
                                <input id="name" type="text" class="form-control required mb-3" name="name" placeholder="Nombre" autofocus>
                                
                                <label class="main-text" for="price">Precio</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text">$</span>
                                    </div>
                                    <input id="price" type="number" name="price" class="form-control required" placeholder="2">
                                </div>
                                
                                <label class="main-text" for="category">Nombre del ingrediente</label>
                                <select class="custom-select required mb-3" id="category" name="category">
                                    <option value="Vegetales" selected>Vegetales</option>
                                    <option value="Frutas">Frutas</option>
                                    <option value="Especies">Especies</option>
                                    <option value="Carnes">Carnes</option>
                                    <option value="Quesos">Quesos</option>
                                </select>
                                
                                <label class="main-text" for="btn_picture">Imagen del botón</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input required" id="btn_picture" name="btn_picture" accept="image/png">
                                        <label class="custom-file-label" for="btn_picture">Escoge una image</label>
                                    </div>
                                </div>
                                <small id="" class="form-text text-muted mb-3">Solo imagenes png y tamaño 100px x 100px</small>

                                
                                <label class="main-text" for="btn_picture">Imagen de la pizza</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input required" id="pizza_picture" name="pizza_picture" accept="image/png">
                                        <label class="custom-file-label" for="btn_picture">Escoge una image</label>
                                    </div>
                                </div>
                                <small id="" class="form-text text-muted ">Solo imagenes png y tamaño 750px x 568px</small>
                                <input type="submit" value="dsfadsf">
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-primary" onclick="sendInfo()">Guardar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div id="receipt" class="col-12">
                    <table class="table">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Categoría</th>
                        <th scope="col">Boton</th>
                        <th scope="col">Pizza</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        </tr>
                    </thead>
                    <?php $contador = 0 ?>
                    @foreach($ingredientsDB as $ingredientDB)
                        <tbody>
                            <tr>
                            <th scope="row">{{++$contador}}</th>
                            <td>{{$ingredientDB->name}}</td>
                            <td>${{$ingredientDB->price}}</td>
                            <td>{{$ingredientDB->category}}</td>
                            <td><a href="/img/{{$ingredientDB->btn_picture}}" target="_blank">Click!</a></td>
                            <td><a href="/img/{{$ingredientDB->pizza_picture}}" target="_blank">Click!</a></td>
                            <td class="text-center"><button class="btn btn-success">Actualizar</button></td>
                            <td class="text-center" >
                                <form action="{{ route('ingredients.destroy', $ingredientDB->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                    <button class="btn btn-danger" onclick="return confirm('¿Desea eliminar el ingrediente {{$ingredientDB->name}}?')" type="submit">Eliminar</button>
                                </form>
                            </td>
                            </tr>
                        </tbody>
                    @endforeach
                </table>                          
            </div>
        </div>
    </section>
    <script src="js/submitIngredient.js"></script>
    @endsection
</body>
