@extends('adminlte::page')

@section('title', 'C&G')

@section('content_header')
    <h1 class = "text-center">Cadastro de Regras</h1>
@stop

@section('css')
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">    
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/css/custom.css">
  @stop
@section('js')
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="/js/regrasCustom.js"></script>
@stop


@section('content')
<div class="container-fluid">            
  <form method="post" action="/previas/regras/cadastro" class ="form-horizontal">
    @csrf
      <div class="form-group form-group-sm">
          <label for="grupo" class="col-md-1">Grupo</label>
          <div class="col-md-2">
              <input type="input-sm" class="form-control" id="grupo" required placeholder="Grupo Cliente" value="{{old('grupo')}}">
          </div>

          <label for="divisao" class="col-md-1">Divisao</label>
          <div class="col-md-2">
              <select class="form-control" id="divisao" name="divisao" value="{{old('divisao')}}">
                  <option value="2000"> 2000</option>
                  <option value="6000"> 6000</option>
              </select>   
          </div>
          <label for="cliente" class="col-md-1">Cliente</label>
          <div class="col-md-4">
              <input type="input-sm" class="form-control" id="cliente" required placeholder="Nome Cliente" value="{{old('cliente')}}">
          </div>
      </div>
      <div class="form-group form-group-sm">
          <label for="dataIni" class="col-md-1">Data Ini</label>
          <div class="col-md-2">
              <input type="date" class="form-control" id="dataIni"  value="{{old('dataIni')}}">
          </div>
          <label for="dataFim" class="col-md-1">Data Fim</label>
          <div class="col-md-2">
              <input type="date" class="form-control" id="dataFim"  value="{{old('dataFim')}}">
          </div>
          <label for="oscar" class="col-md-1">Oscar</label>
          <div class="col-md-4">
              <select class="form-control" id="oscar" name="oscar" value="{{old('oscar')}}">
                  <option value="oscar1"> oscar1 (Centro de Custo)</option>
                  <option value="oscar2"> oscar2 (Produto)</option>
                  <option value="oscar3"> oscar3 (Doc Cli)</option>
                  <option value="oscar4"> oscar4 (OBS1)</option>
                  <option value="oscar5"> oscar5 (OBS2)</option>
                  <option value="oscar6"> oscar6 (OBS3)</option>
                  <option value="oscar7"> oscar7 (OBS4)</option>
              </select>   
          </div>
      </div>
          <h4 class="text-center">Oscar1 (Centro de Custo)</h4>
          <div class="" id="tbOscar1" name="tbOscar">
            <div class="form-group form-group-sm">

              <label for="obrigatorioO1" class="col-md-1">Requirido?</label>
                <div class="col-md-2">
                    <select class="form-control" id="obrigatorioO1" name="obrigatorioO1" value="{{old('obrigatórioO1')}}">
                        <option value="nao">não</option>
                        <option value="sim">sim</option>
                    </select>   
              </div>
              <label for="quebrasO1" class="col-md-1">Quebrar</label>
              <div class="col-md-2">
                  <select class="form-control" id="quebrasO1" name="quebrasO1" value="{{old('quebrasO1')}}">
                      <option value="nao">não</option>
                      <option value="sim">sim</option>
                  </select>   
              </div>
              <label for="numQuebrasO1" class="col-md-2">Num. Quebras</label>
              <div class="col-md-2">
                  <input type ="number" disabled min="2" class="form-control" id="numQuebrasO1" name="numQuebrasO1" value="{{old('numQuebrasO1')}}">
              </div>
            </div>

            <div class="form-group form-group-sm">
                <label for="OSO1" class="col-md-1">OS?</label>
                <div class="col-md-2">
                    <select class="form-control" id="OSO1" name="OSO1" value="{{old('OSO1')}}">
                        <option value="nao">não</option>
                        <option value="sim">sim</option>
                      </select>   
                 </div>
                 <label for="inOSO1" class="col-md-1">Dados OS</label>
                <div class="col-md-3">
                  <input type ="text" disabled class="form-control" id="inOSO1" name="inOSO1" placeholder="SS,SN,NN" value="{{old('inOSO1')}}">
                </div>

              
            </div>  
            <div class="form-group form-group-sm">
              <label for="minO1" class="col-md-1">Mínimo</label>
              <div class="col-md-2">
                  <input type ="number" min="1" class="form-control" id="minO1" name="minO1" value="{{old('minO1')}}">
              </div>
              
              <label for="maxO1" class="col-md-1">Máximo</label>
              <div class="col-md-2">
                  <input type ="number" min="1" class="form-control" id="maxO1" name="maxO1" value="{{old('maxO1')}}">
              </div>

                <label for="typeO1" class="col-md-1">Tipo</label>
                <div class="col-md-2">
                    <select class="form-control" id="typeO1" name="typeO1" value="{{old('typeO1')}}">
                        <option value="text">texto</option>
                        <option value="number">número</option>
                    </select>   
                 </div>
            </div>
            <div class="quebrasO1">
                <h4 class="text-center">Quebras Oscar1 (Centro de Custo)</h4>
            <div class="form-group form-group-sm">
                <label for="minO1" class="col-md-1">Mínimo</label>
                <div class="col-md-2">
                    <input type ="number" min="1" class="form-control" id="minO1" name="minO1" value="{{old('minO1')}}">
                </div>
                
                <label for="maxO1" class="col-md-1">Máximo</label>
                <div class="col-md-2">
                    <input type ="number" min="1" class="form-control" id="maxO1" name="maxO1" value="{{old('maxO1')}}">
                </div>
  
                  <label for="typeO1" class="col-md-1">Tipo</label>
                  <div class="col-md-2">
                      <select class="form-control" id="typeO1" name="typeO1" value="{{old('typeO1')}}">
                          <option value="text">texto</option>
                          <option value="number">número</option>
                      </select>   
                   </div>

                   <label for="inOSO1" class="col-md-1">Dados</label>
                   <div class="col-md-2">
                   <input type ="text" class="form-control" id="dados" name="dados" placeholder="separar por virgulas" value="{{old('dados')}}">
                   </div>
   
              </div>
            </div> 

            <label for="regraO1" class="text-center col-md-12">Regra do Oscar 1</label>
            <textarea class="form-control" rows ="3" disabled id ="regraO1" name ="regraO1" value="{{old('regraO1')}}"> </textarea>
      </div>
      <div class="hidden" id="tbosca2"  name="tbOscar">
          <p>teste</p>
      </div>
      <div class="hidden" id="tboscar3" name="tbOscar">
          <p>teste</p>
      </div>
      <div class="hidden" id="tboscar4" name="tbOscar">
          <p>teste</p>
      </div>
      <div class="hidden" id="tboscar5" name="tbOscar">
          <p>teste</p>
      </div>
      <div class="hidden" id="tboscar6" name="tbOscar">
          <p>teste</p>
      </div>
      <div class="hidden" id="tboscar7" name="tbOscar">
          <p>teste</p>
      </div>
    </form>
</div>
@stop