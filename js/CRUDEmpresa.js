	// evitando que os dados sejam submetidos pelo modo tradicional
    $(document).ready(function(){
    $("#crudDadosEmpresa").submit(function(){
    return false;
    });
            
    // carregando a função para o envio
    $("#crudDadosEmpresaBtn").click(function(){
    envia_form();
    });
     
    // limpando a div antes de um novo envio
    function envia_form() {
        //jQuery("#retorno").empty();
                
        // pegando os campos do formulário
        var historia = $(".dadosCrudEmpresa").eq(0).val();
        var missao = $(".dadosCrudEmpresa").eq(1).val();
        var urlfacebook = $(".dadosCrudEmpresa").eq(2).val();
        var urlinstagram = $(".dadosCrudEmpresa").eq(3).val();
        var whatsapp = $(".dadosCrudEmpresa").eq(4).val();
        var cidade = $(".dadosCrudEmpresa").eq(5).val();
        var estado = $(".dadosCrudEmpresa").eq(6).val();
        var endereco = $(".dadosCrudEmpresa").eq(7).val();

      
         
        // tipo dos dados, url do documento, tipo de dados, campos enviados     
        // para GET mude o type para GET  
        jQuery.ajax({
        type: "POST",
        url: "../php/crudDadosEmpresa.php",
        dataType: "html",
        data: 
            "&historiaEmpresa=" + historia
             + "&missaoEmpresa=" + missao 
             + "&facebookEmpresa=" + urlfacebook
             + "&instagramEmpresa=" + urlinstagram 
             + "&whatsappEmpresa=" + whatsapp
             + "&cidadeEmpresa=" + cidade 
             + "&estadoEmpresa=" + estado
             + "&enderecoEmpresa=" + endereco,
         
        // enviado com sucesso
        success: function(response){

            swal("Alterado!", "Com sucesso", "success");
            $('#empresaDadosModal').modal('toggle');                        

        },
        // quando houver erro
        error: function(){

            swal("Erro ao alterar!", "", "error");     

        }
      });        
    }
    });
  