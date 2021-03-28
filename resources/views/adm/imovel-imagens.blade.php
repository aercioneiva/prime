@extends('adm.templates.master')
@section('content')
<div style="display: none;" id="csrf" data-csrf="{{ csrf_token() }}"></div>
<div class="box box-info">
    <div class="box-header text-center">
        <h1 class="box-title">{{$imovel->titulo}}</h>
    </div>
    <div class="box-body">
        <div class="row">
            @foreach ($imovel->imagens as $imagen)
                <div class="col-md-3">
                    <div class="box box-default">
                    <div class="box-header with-border">
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool btn-delete" data-id="{{$imagen->id}}" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                        <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <img src="{{asset('storage/'.$imagen->nome_imagem)}}" alt="Image" style="max-width: 100%;height: auto;">
                    </div>
                    <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function(){
            $('.btn-delete').on('click', function(e) {
                if(!confirm("Tem certeza que deseja remover essa imagen?")){
                    e.stopPropagation();
                    return;
                }
                var id = $(this).attr('data-id');
                console.log(id);
                var urlD = "{{route('admin.imoveis.imagens.delete',['id' => ':id'])}}";
                urlD = urlD.replace(':id', id);
                $.ajax({
                    url: urlD,
                    type: 'delete',
                    data: {
                        "id": id,
                        "_token": $('#csrf').attr('data-csrf'),
                    }
                }).done(function(res) {
                    if(!res.success){
                        alert("Erro ao deletar imagem!");
                    }
                });
            });
        });
    </script>
@endsection