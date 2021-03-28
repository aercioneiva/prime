@extends('adm.templates.master')
@section('content')
<div class="modal-loading" id="modal-loading"><!-- Place at bottom of page --></div>
<div style="display: none;" id="csrf" data-csrf="{{ csrf_token() }}"></div>
<div class="row">
        <!-- left column -->
    <div class="col-md-8 col-md-offset-2">
        @include('alertas.alerts')
        <div class="box">
            <div class="box-header text-center">
                <h1 class="box-title">Lista de Imóveis</h>
            </div>
            
            <a href="{{route('admin.imoveis.create')}}" class="btn btn-info"><i class="fa fa-plus-circle"></i> Cadastrar Imóvel</a>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="tabela-imovel" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Ref.</th>
                            <th>Título do imóvel</th>
                            <th>Endereço</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
    </div>
</div>
@endsection
@section('scripts')
    <script src="{{asset('adm/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('adm/js/dataTables.bootstrap.min.js')}}"></script>
    <script>
        $(document).ready(function(){
            $('#tabela-imovel').DataTable({
                ajax: "{{route('admin.imoveis.ajax')}}",
                language:{
                    loadingRecords: "Carregando...",
                    processing: "processando...",
                    emptyTable: "Nenhum Registro Encontrado!",
                    search: "Pesquisar",
                    destroy: true,
                    paging:   false,
                    paginate: {
                        next: "Próximo",
                        previous: "Anterior",
                        first: "Primeiro",
                        last: "Último"
                    },
                    info: "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                    infoFiltered: "(Filtrados de _MAX_ registros)",
                    infoEmpty: "Mostrando 0 até 0 de 0 registros",
                    lengthMenu:     "Mostrar _MENU_ Imóveis"
                },
                columns: [
                    {data: "ref"},
                    {data: 'titulo'},
                    {data: 'endereco'},
                    {
                        data: null,
                        render: function(data,type,row,meta){
                            var url = "{{route('admin.imoveis.show',['id' => ':id'])}}";
                            url = url.replace(':id', data.id);

                            var urlI = "{{route('admin.imoveis.imagens.show',['id' => ':id'])}}";
                            urlI = urlI.replace(':id', data.id);
                            
                            return "<a href=\""+url+"\" class='btn btn-info btn-padrao btn-sm font-weight-bold'><i class='fa fa-edit'></i></a>&nbsp<a href=\""+urlI+"\" class='btn btn-warning btn-padrao btn-sm font-weight-bold'><i class='fa fa-camera'></i></a>&nbsp<button class='btn btn-danger btn-padrao btn-sm font-weight-bold btn-delete' data-id=\""+data.id+"\"><i class='fa fa-trash'></i></button>";
                        }
                    }
                ],
                columnDefs: [ {
                    'targets': [3], /* column index */
                    'orderable': false, /* true or false */
                }],
                drawCallback: function(){
                    $('#tabela-imovel').css("width", "100%");
                    $('.btn-delete').on('click', function() {
                        if(!confirm("Tem certeza que deseja deletar esse imóvel")){
                            return;
                        }
                        $('#modal-loading').show();
                        var id = $(this).attr('data-id');
                        var urlD = "{{route('admin.imoveis.delete',['id' => ':id'])}}";
                        urlD = urlD.replace(':id', id);
                        $.ajax({
                            url: urlD,
                            type: 'delete',
                            data: {
                                "id": id,
                                "_token": $('#csrf').attr('data-csrf'),
                            }
                        }).done(function(res) {
                            $('#modal-loading').hide();
                            if(!res.success){
                                alert("Erro ao deletar imóvel!");
                            }else{
                                alert("Imóvel deletado com sucesso!");
                                $('#tabela-imovel').DataTable().ajax.reload();
                            }
                        });
                    });
                }
            })
        });
    </script>
@endsection