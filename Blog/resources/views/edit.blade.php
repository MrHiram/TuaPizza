@extends('layout')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
@section('title','Gestor de ingredientes')
@section('recoverlogo','/')
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
        <div class="container pr-0">
            <h2 class="h3 py-3">Editar ingrediente</h2>

            <div id="receipt" class="container">
                <form id="formIngredient" class="mb-0">
                    <input type="hidden" name="id" value="{{$ingredient->id}}">
                    <label class="main-text"for="name">Nombre del ingrediente</label>
                    <input id="name" type="text" class="form-control mb-3" name="name" value="{{$ingredient->name}}" required autofocus>
                    
                    <label class="main-text" for="price">Precio</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <span class="input-group-text">$</span>
                        </div>
                        <input id="price" type="number" name="price" class="form-control" value="{{$ingredient->price}}" required>
                    </div>
                    
                    <label class="main-text" for="category">Nombre del ingrediente</label>
                    <select class="custom-select mb-3" id="category" name="category">
                        <option value="Vegetales" <?php echo ($ingredient->category == 'Vegetales' ? 'selected' : ''); ?>>Vegetales</option>
                        <option value="Frutas" <?php echo ($ingredient->category == 'Frutas' ? 'selected' : ''); ?>>Frutas</option>
                        <option value="Especies" <?php echo ($ingredient->category == 'Especies' ? 'selected' : ''); ?>>Especies</option>
                        <option value="Carnes" <?php echo ($ingredient->category == 'Carnes' ? 'selected' : ''); ?>>Carnes</option>
                        <option value="Quesos" <?php echo ($ingredient->category == 'Quesos' ? 'selected' : ''); ?>>Quesos</option>
                    </select>
                    
                    <label class="main-text" for="btn_picture">Imagen del botón</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="btn_picture" name="btn_picture" accept="image/png">
                            <label class="custom-file-label" for="btn_picture">Escoge una image</label>
                        </div>
                    </div>
                    <small id="" class="form-text text-muted mb-3">Solo imagenes png, tamaño 100px x 100px y menores a 100kb</small>

                    
                    <label class="main-text" for="btn_picture">Imagen de la pizza</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="pizza_picture" name="pizza_picture" accept="image/png">
                            <label class="custom-file-label" for="btn_picture">Escoge una image</label>
                        </div>
                    </div>
                    <small id="" class="form-text text-muted ">Solo imagenes png, tamaño 750px x 568px y menores a 200kb</small>
                    <div class="my-3">
                        <input type="submit" class="btn btn-primary" value="Guardar"/>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script src="/js/updateIngredient.js"></script>
    @endsection
</body>
