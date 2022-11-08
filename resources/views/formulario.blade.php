@extends('template')

@section('contenido')


@if (session('success'))
<script>
    Swal.fire({
        title: 'Todo correcto, libro: ',
        text: '" {{session('success')['titulo']}} " guardado con exito',
        icon: 'success',
        confirmButtonText: 'Aceptar'
    })
</script>
@endif

    <div class="card">
        <div class="card-body">
            <h5>Registro del libro</h5>
            <form method="POST" action="procesarFormulario">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">ISBN</label>
                    <input type="text" class="form-control" name="txtISBN" aria-describedby="emailHelp">
                    <div class="form-text">Solo números | Mínimo 13</div>
                    <p class="text-danger fst-italic">  {{$errors->first('txtISBN')}}</p>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Titulo</label>
                    <input type="text" class="form-control" name="txtTitulo">
                    <p class="text-danger fst-italic">  {{$errors->first('txtTitulo')}}</p>

                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Autor</label>
                    <input type="text" class="form-control" name="txtAutor">
                    <p class="text-danger fst-italic">  {{$errors->first('txtAutor')}}</p>

                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Páginas</label>
                    <input type="text" class="form-control" name="txtPaginas">
                    <div class="form-text">Solo números</div>
                    <p class="text-danger fst-italic">  {{$errors->first('txtPaginas')}}</p>

                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Editorial</label>
                    <input type="text" class="form-control" name="txtEditorial">
                    <p class="text-danger fst-italic">  {{$errors->first('txtEditorial')}}</p>

                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Email</label>
                    <input type="text" class="form-control" name="txtEmail">
                    <p class="text-danger fst-italic">  {{$errors->first('txtEmail')}}</p>

                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>




@stop
