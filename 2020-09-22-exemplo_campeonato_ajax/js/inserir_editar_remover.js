
$(function(){
    
    $(".remover").click(function(){
        
        i = $(this).val();
        t = $(this).attr("name");

        // estrutura JSON.
        p = {id:i,tabela:t};
        

        $.post("remover.php",p,function(r){
            
            if(r=='1'){
                $("#tr"+i).remove();
            }
            if($("tr.dados").length==0){
                tr = "<tr><td colspan='3'>Não há dados cadastrados</td>";
                $("tbody").append(tr);
            }
        });

    });

    $(".inserir").click(function(){
        tabela = $("form[name='f']").attr("value");

        if(tabela=="Campeonato"){
            nome = $("input[name='nome']").val();
            ano = $("input[name='ano']").val();            
            p = {
                    nome:nome, 
                    ano:ano
                };    
        }
        else if(tabela=="Jogador"){
            nome = $("input[name='nome']").val();
            data_nascimento = $("input[name='data_nascimento']").val();
            numero_camisa = $("input[name='numero_camisa']").val();
            cod_time = $("select[name='cod_time']").val();
            cidade = $("input[name='cidade']").val();
            uf = $("input[name='uf']").val();
            p = {
                    nome:nome, 
                    data_nascimento:data_nascimento,
                    numero_camisa:numero_camisa,
                    cod_time:cod_time,
                    cidade:cidade,
                    uf:uf
                };
        }
        else if(tabela=="Jogo"){
            data = $("input[name='data']").val();
            horario = $("input[name='horario']").val();
            cod_time1 = $("select[name='cod_time1']").val();
            cod_time2 = $("select[name='cod_time2']").val();
            p = {
                    data:data, 
                    horario:horario,
                    cod_time1:cod_time1,
                    cod_time2:cod_time2,
                };
        }
        else if(tabela=="Time"){
            nome = $("input[name='nome']").val();
            cidade = $("input[name='cidade']").val();
            uf = $("input[name='uf']").val();
            p = {
                nome:nome, 
                cidade:cidade,
                uf:uf
            };
        }
        else if(tabela=="Arbitro"){
            nome = $("input[name='nome']").val();
            data_nascimento = $("input[name='data_nascimento']").val();
            cidade = $("input[name='cidade']").val();
            uf = $("input[name='uf']").val();
            p = {
                nome:nome, 
                data_nascimento:data_nascimento,
                cidade:cidade,
                uf:uf
            };
        }


        $.post("salvar"+tabela+".php",p,function(r){
            if(r=='1'){
                $(".close").click();
                $("#msg").html(tabela + " inserido com sucesso.");
            }
        });
    });

});

