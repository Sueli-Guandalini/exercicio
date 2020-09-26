
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
            tbody="";
            $.each(r,function(i,v){
                if(tabela=="Campeonato"){
                    tbody+="<tr class='dados' id='tr" + v.id_campeonato + "'>";
                    tbody+="<td>" + v.nome + "</td>";
                    tbody+="<td>" + v.ano + "</td>";
                    tbody+="<td><button class='remover' type='button' style='border:none;background-color:none;' value='"+v.id_campeonato+"' name='campeonato'>";
                    tbody+="<i class='material-icons text-danger'>delete</i>";
                    tbody+="</button></td>";
                    tbody+="</tr>";
                }
                else if(tabela=="Jogador"){
                    tbody+="<tr class='dados' id='tr" + v.id_jogador + "'>";
                    tbody+="<td>" + v.nome + "</td>";
                    tbody+="<td>" + v.data_nascimento + "</td>";
                    tbody+="<td>" + v.numero_camisa + "</td>";
                    tbody+="<td>" + v.cod_time + "</td>";
                    tbody+="<td>" + v.cidade + "</td>";
                    tbody+="<td>" + v.uf + "</td>";
                    tbody+="<td><button class='remover' type='button' style='border:none;background-color:none;' value='"+v.id_jogador+"' name='jogador'>";
                    tbody+="<i class='material-icons text-danger'>delete</i>";
                    tbody+="</button></td>";
                    tbody+="</tr>";
                }
                else if(tabela=="Jogo"){
                    tbody+="<tr class='dados' id='tr" + v.id_jogo + "'>";
                    tbody+="<td>" + v.data + "</td>";
                    tbody+="<td>" + v.horario + "</td>";
                    tbody+="<td>" + v.cod_time1 + "</td>";
                    tbody+="<td>" + v.cod_time2 + "</td>";
                    tbody+="<td><button class='remover' type='button' style='border:none;background-color:none;' value='"+v.id_jogo+"' name='jogo'>";
                    tbody+="<i class='material-icons text-danger'>delete</i>";
                    tbody+="</button></td>";
                    tbody+="</tr>";
                }
                else if(tabela=="Time"){
                    tbody+="<tr class='dados' id='tr" + v.id_time + "'>";
                    tbody+="<td>" + v.nome + "</td>";
                    tbody+="<td>" + v.cidade + "</td>";
                    tbody+="<td>" + v.uf + "</td>";
                    tbody+="<td><button class='remover' type='button' style='border:none;background-color:none;' value='"+v.id_time+"' name='time'>";
                    tbody+="<i class='material-icons text-danger'>delete</i>";
                    tbody+="</button></td>";
                    tbody+="</tr>";
                }
                else if(tabela=="Arbitro"){
                    tbody+="<tr class='dados' id='tr" + v.id_arbitro + "'>";
                    tbody+="<td>" + v.nome + "</td>";
                    tbody+="<td>" + v.data_nascimento + "</td>";
                    tbody+="<td>" + v.cidade + "</td>";
                    tbody+="<td>" + v.uf + "</td>";
                    tbody+="<td><button class='remover' type='button' style='border:none;background-color:none;' value='"+v.id_arbitro+"' name='arbitro'>";
                    tbody+="<i class='material-icons text-danger'>delete</i>";
                    tbody+="</button></td>";
                    tbody+="</tr>";
                }
            });
            $("tbody").html("");
            $("tbody").append(tbody);
            $(".close").click();
            $("#msg").html(tabela + " inserido com sucesso.");
        });
    });

});

