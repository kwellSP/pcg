    //função disparada quando oscar é alterado
    $("#oscar").change(function() {
        alteraOscar(  $('#oscar option:selected').val());
    });

    //função para ocultar o oscar
    function alteraOscar(oscar){
        $('#tbOscar1').addClass('hidden');
        $('#tbOscar2').addClass('hidden');
        $('#tbOscar3').addClass('hidden');
        $('#tbOscar4').addClass('hidden');
        $('#tbOscar5').addClass('hidden');
        $('#tbOscar6').addClass('hidden');
        $('#tbOscar7').addClass('hidden');
        $('#'+oscar).removeClass('hidden');
    };

    //função para ocultar partes do formulário
    $("#obrigatorioO1").change(function() {
        if( $('#obrigatorioO1 option:selected').val()=="sim"){
            $('.quebrarO1').removeClass('hidden');
        }else{
            $('quebrarO1').addClass('hidden');
        }
    });

    $("#quebrarO1").change(function() {
        if( $('#quebrarO1 option:selected').val()=="sim"){
            $('.numQuebrasO1').removeClass('hidden');
            $('.numQuebrasO1').text = 2;
            $('#rulesO1').addClass('hidden');
        }else{
            $('.numQuebrasO1').addClass('hidden');
            $('#rulesO1').removeClass('hidden');
            $('.quebrasO1').addClass('hidden');
        }
    });

    $('#numQuebrasO1').change(function(){
        if($('#numQuebrasO1').val()>=2 && $('#numQuebrasO1').val() <=7){
            $('.quebrasO1').removeClass('hidden');
        }else{
            $('.quebrasO1').addClass('hidden');
        }
    });



