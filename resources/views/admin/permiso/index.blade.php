@extends("theme.$theme.layout")
@section('Titulo')
    Permisos
@endsection

@section('Contenido')
<div class="row">
    <div class="col-lg-12">
        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Permisos</h3>
            </div>
            <div class="card-body table-responsive p-0">
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Slug</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($permisos as $permiso)
                            <tr>
                                <td>{{$permiso -> id}}</td>
                                <td>{{$permiso -> nombre}}</td>
                                <td>{{$permiso -> slug}}</td>
                                <td></td>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection