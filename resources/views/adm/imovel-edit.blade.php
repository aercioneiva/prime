@extends('adm.templates.master')
@section('content')
<div class="row">
        <!-- left column -->
    <div class="col-md-8 col-md-offset-2">
        @include('alertas.alerts')
        <div class="box box-primary">
                <div class="box-header with-border text-center">
                    <h3 class="box-title">Alterar Imóvel</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="{{route('admin.imoveis.update',['id' => $imovel->id])}}" method="POST" autocomplete="off" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="box-body">
                    <div class="form-group">
                        <label for="titulo">Título</label>
                        <input type="text" class="form-control" id="titulo" placeholder="Título do imóvel" name="titulo" value="{{old('titulo',$imovel->titulo)}}">
                    </div>
                    <div class="form-group">
                        <label for="titulo">Slug</label>
                        <input type="text" class="form-control" id="slug" placeholder="" name="slug" value="{{old('slug',$imovel->slug)}}">
                    </div>
                    <div class="form-group">
                        <label for="endereco">Endereço</label>
                        <input type="text" class="form-control" id="endereco" placeholder="Endereço" name="endereco" value="{{old('endereco',$imovel->endereco)}}">
                    </div>
                    <div class="form-group">
                        <label for="Valor">Valor</label>
                        <input type="text" class="form-control money" id="Valor" placeholder="Valor" name="valor" value="{{old('valor',number_format($imovel->valor,2,'.',''))}}">
                    </div>
                    <div class="form-group">
                        <label for="ref">Ref.</label>
                        <input type="number" class="form-control" id="ref" placeholder="ref" name="ref" value="{{old('ref',$imovel->ref)}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="area">Área Total</label>
                        <input type="text" class="form-control area" id="area" placeholder="Área Total" name ="area" value="{{old('area',number_format($imovel->area,2,'.',''))}}">
                    </div>
                    <div class="form-group">
                        <label for="dormitorio">Dormitório(s)</label>
                        <input type="number" class="form-control" id="dormitorio" placeholder="Dormitório(s)" name="dormitorio" value="{{old('dormitorio',$imovel->dormitorios)}}" min="0" max="99">
                    </div>
                    <div class="form-group">
                        <label for="bwc">Bwc(s)</label>
                        <input type="number" class="form-control" id="bwc" placeholder="Bwc(s)" name="bwc" value="{{old('bwc',$imovel->bwc)}}" min="0" max="99">
                    </div>
                    <div class="form-group">
                        <label for="vaga">Vaga(s)</label>
                        <input type="number" class="form-control" id="vaga" placeholder="Vaga(s)" name="vaga" value="{{old('vaga',$imovel->vagas)}}" min="0" max="99">
                    </div>
                    <div class="form-group">
                        <!-- Máximo 1 foto -->
                        <label for="exampleInputFile">Foto principal *Será apresentado em destaque e como background na página do imóvel</label>
                        <input type="file" class="custom-file-input" id="foto_principal" name="foto_principal">
                    </div>
                    <div class="form-group">
                        <!-- Máximo 1 foto -->
                        <label for="exampleInputFile">Foto principal *Será apresentado em destaque e como background na página do imóvel (mobile)</label>
                        <input type="file" class="custom-file-input" id="foto_principal_mobile" name="foto_principal_mobile">
                    </div>
                    <div class="form-group">
                        <!-- upload multiplo -->
                        <label for="exampleInputFile">Foto Slider *Slide na página do imóvel</label>
                        <input type="file" class="custom-file-input" id="foto_slide" name="foto_slide[]" multiple>
                    </div>
                    <div class="form-group">
                        <!-- upload multiplo -->
                        <label for="exampleInputFile">Foto galeria *Galeria na página do imóvel</label>
                        <input type="file" class="custom-file-input" id="foto_galeria" name="foto_galeria[]" multiple>  
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Descrição:</label>        
                        <textarea id="summernote" name="descricao">{{old('descricao',$imovel->descricao)}}</textarea>
                    </div> 
                    <div class="form-group">
                        <label>Tipo de negócio:</label>
                        <select class="form-control" name="tipo">
                          <option value="vr" {{old('tipo',$imovel->tipo) == 'vr' ? 'selected="selected"' : ''}}>Venda Residencial</option>
                          <option value="vc" {{old('tipo',$imovel->tipo) == 'vc' ? 'selected="selected"' : ''}}>Venda Comercial</option>
                          <option value="lc" {{old('tipo',$imovel->tipo) == 'lc' ? 'selected="selected"' : ''}}>Locação Comercial</option>
                          <option value="cf" {{old('tipo',$imovel->tipo) == 'cf' ? 'selected="selected"' : ''}}>Condomínio Fechado</option>
                          <option value="lm" {{old('tipo',$imovel->tipo) == 'lm' ? 'selected="selected"' : ''}}>Lançamentos</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="customCheckbox1" value="s" name="destacar" {{old('destacar',$imovel->destacar) == 's' ? 'checked' : ''}}>
                            <label for="customCheckbox1" class="custom-control-label">Destacar na página inicial</label>
                        </div>
                    </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </form>
            </div>
    </div>
</div>
@endsection
@section('scripts')
<script src="{{asset('adm/js/summernote-bs4.min.js')}}"></script>
<script>
  $(function () {
    // Summernote
    $('#summernote').summernote();
    $('.money').priceFormat({
            prefix: '',
            centsSeparator: ',',
            thousandsSeparator: '.'
        }).blur(); 

    $('.area').priceFormat({
        prefix: '',
        centsSeparator: ',',
        thousandsSeparator: ''
    }).blur(); 
  });

  $('#titulo').change(function(e){
    $.get("{{route('admin.imoveis.slug')}}",
    {'titulo': $(this).val()},
    function(data){
        console.log(data);
        $('#slug').val(data.slug);
    }
    );
  });
</script>
@endsection