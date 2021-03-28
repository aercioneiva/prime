@extends('adm.templates.master')
@section('content')
<div class="row">
        <!-- left column -->
    <div class="col-md-8 col-md-offset-2">
        @include('alertas.alerts')
        <div class="box box-primary">
                <div class="box-header with-border text-center">
                    <h3 class="box-title">Cadastrar Imóvel</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="{{route('admin.imoveis.store')}}" method="POST" autocomplete="off" enctype="multipart/form-data">
                    @csrf
                    <div class="box-body">
                        <div class="form-group">
                            <label for="titulo">Título</label>
                            <input type="text" class="form-control" id="titulo" placeholder="Título do imóvel" name="titulo" value="{{old('titulo')}}">
                        </div>
                    <div class="form-group">
                        <label for="endereco">Endereço</label>
                        <input type="text" class="form-control" id="endereco" placeholder="Endereço" name="endereco" value="{{old('endereco')}}">
                    </div>
                    <div class="form-group">
                        <label for="Valor">Valor</label>
                        <input type="text" class="form-control money" id="Valor" placeholder="Valor" name="valor" value="{{old('valor')}}">
                    </div>
                    <div class="form-group">
                        <label for="ref">Ref.</label>
                        <input type="number" class="form-control" id="ref" placeholder="ref" name="ref" value="{{old('ref')}}">
                    </div>
                    <div class="form-group">
                        <label for="area">Área Total</label>
                        <input type="text" class="form-control area" id="area" placeholder="Área Total" name ="area" value="{{old('area')}}">
                    </div>
                    <div class="form-group">
                        <label for="dormitorio">Dormitório(s)</label>
                        <input type="number" class="form-control" id="dormitorio" placeholder="Dormitório(s)" name="dormitorio" value="{{old('dormitorio')}}">
                    </div>
                    <div class="form-group">
                        <label for="bwc">Bwc(s)</label>
                        <input type="number" class="form-control" id="bwc" placeholder="Bwc(s)" name="bwc" value="{{old('bwc')}}">
                    </div>
                    <div class="form-group">
                        <label for="vaga">Vaga(s)</label>
                        <input type="number" class="form-control" id="vaga" placeholder="Vaga(s)" name="vaga" value="{{old('vaga')}}">
                    </div>
                    <div class="form-group">
                        <!-- Máximo 1 foto -->
                        <label for="exampleInputFile">Foto principal *Será apresentado em destaque e como background na página do imóvel</label>
                        <input type="file" class="custom-file-input" id="foto_principal" name="foto_principal">
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
                        <textarea id="summernote" name="descricao">{{old('descricao')}}</textarea>
                    </div> 
                    <div class="form-group">
                        <label>Tipo de negócio:</label>
                        <select class="form-control" name="tipo">
                          <option value="vr" {{old('tipo') == 'vr' ? 'selected="selected"' : ''}}>Venda Residencial</option>
                          <option value="vc" {{old('tipo') == 'vc' ? 'selected="selected"' : ''}}>Venda Comercial</option>
                          <option value="lc" {{old('tipo') == 'lc' ? 'selected="selected"' : ''}}>Locação Comercial</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="customCheckbox1" value="s" name="destacar" {{old('destacar') == 's' ? 'checked' : ''}}>
                            <label for="customCheckbox1" class="custom-control-label">Destacar na página inicial</label>
                        </div>
                    </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
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
  })
</script>
@endsection