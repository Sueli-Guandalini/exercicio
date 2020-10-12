var acao="salvar";
var id = "NULL";
$(function(){
   

    
    //REMOVER
    function define_acao_remover(){

     
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
    }

    define_acao_remover();
    //////// FIM REMOVER//////////////////////////////////////////

    //INSERIR/////////////////////////////////////////
    $(".inserir").click(function(){
        
        tabela = $("form[name='f']").attr("value");

        if(tabela=="Usuario"){
            nome_usuario = $("input[name='nome_usuario']").val();
            email = $("input[name='email']").val();
            senha = $("input[name='senha']").val();
            permissao = $("input[name='permissao']").val();
            nome = $("input[name='nome']").val();
            sobrenome = $("input[name='sobrenome']").val();
            data_nascimento = $("input[name='data_nascimento']").val();
            rua = $("input[name='rua']").val();
            numero = $("input[name='numero']").val();
            compl = $("input[name='compl']").val();
            bairro = $("input[name='bairro']").val();
            cidade = $("input[name='cidade']").val();
            estado = $("input[name='estado']").val();
            telefone = $("input[name='telefone']").val(); 
            cep = $("input[name='cep']").val();
            cpf = $("input[name='cpf']").val();
            rg = $("input[name='rg']").val();          
            p = {
                    nome_usuario:nome_usuario,
                    email:email,
                    senha:senha,
                    permissao:permissao,
                    nome:nome,
                    sobrenome:sobrenome,
                    data_nascimento:data_nascimento,
                    rua:rua,
                    numero:numero,
                    compl:compl,
                    bairro:bairro,
                    cidade:cidade,
                    estado:estado,
                    telefone:telefone,
                    cep:cep,
                    cpf:cpf,
                    rg:rg,
                    id_usuario:id
                };    
        }
        else if(tabela=="Produto"){
            nome_produto = $("input[name='nome_produto']").val();
            descricao = $("input[name='descricao']").val();
            peso = $("input[name='peso']").val();
            tamanho = $("select[name='tamanho']").val();
            cor = $("input[name='cor']").val();
            cod_categoria = $("select[name='cod_categoria']").val();
            valor_unitario = $("input[name='valor_unitario']").val();
            estoque = $("input[name='estoque']").val();           
            p = {
                    nome_produto:nome_produto, 
                    descricao:descricao,
                    peso:peso,
                    tamanho:tamanho,
                    cor:cor,
                    cod_categoria:cod_categoria,
                    valor_unitario:valor_unitario,
                    estoque:estoque,
                    id_produto:id
                };    
        }
        else if(tabela=="Categoria"){
            tipo = $("input[name='tipo']").val();
            p = {
                    tipo:tipo, 
                    id_categoria:id
                };
        }
        else if(tabela=="Carrinho"){
            nome = $("select[name='cod_cliente']").val();
            sobrenome = $("select[name='cod_cliente']").val();
            cpf = $("select[name='cod_cliente']").val();
            p = {
                    nome:cod_cliente,
                    sobrenome:cod_cliente,
                    cpf:cod_cliente,
                    id_carrinho:id
                };
        }
        else if(tabela=="Carrinho_Produto"){
            nome = $("input[name='nome']").val();
            cidade = $("input[name='cidade']").val();
            uf = $("input[name='uf']").val();
            p = {
                    nome:nome, 
                    cidade:cidade,
                    uf:uf,
                    id:id
                };
        }
        else if(tabela=="Venda"){
            nome = $("input[name='nome']").val();
            descricao = $("input[name='descricao']").val();
            peso = $("input[name='peso']").val();
            horario = $("name[name='horario']").val();
            data = $("input[name='data']").val();
            status = $("select[name='status']").val();
            valor= $("input[name='valor']").val();
            endereco_entrega = $("input[name='endereco_entrega']").val();
            valor_frete = $("input[name='valor_frete']").val();
            p = {
                    nome:nome,
                    horario:horario,
                    data:data,
                    status:status, 
                    valor:valor,
                    endereco_entrega:endereco_entrega,
                    valor_frete:valor_frete,
                    id_venda:id
                };
        }
        console.log(p);
        $.post(acao+tabela+".php",p,function(r){
            console.log(r);
                tbody = "";
                $.each(r,function(i,v){
                    if(tabela=="Usuario"){

                        tbody+="<tr class='dados' id='tr"+ v.id_usuario + "'>";
                        tbody+="<td>"+ v.nome_usuario + "</td>";
                        tbody+="<td>" + v.email + "</td>";
                        tbody+="<td>" + v.senha + "</td>";
                        tbody+="<td>" + v.permissao + "</td>";
                        tbody+="<td>" + v.nome + "</td>";
                        tbody+="<td>" + v.sobrenome + "</td>";
                        tbody+="<td>" + v.data_nascimento + "</td>";
                        tbody+="<td>" + v.rua + "</td>";
                        tbody+="<td>" + v.numero + "</td>";
                        tbody+="<td>" + v.compl + "</td>";
                        tbody+="<td>" + v.bairro + "</td>";
                        tbody+="<td>" + v.cidade + "</td>";
                        tbody+="<td>" + v.estado + "</td>";
                        tbody+="<td>" + v.telefone + "</td>";
                        tbody+="<td>" + v.cep + "</td>";
                        tbody+="<td>" + v.cpf + "</td>";
                        tbody+="<td>" + v.rg + "</td>";
                        tbody+="<td><button class='alterar' type='button' style='border:none;background-color:none;' value='"+v.id_usuario+"' name='usuario' data-toggle='modal' data-target='#novo"+tabela+"'>";
                        tbody+="<i class='material-icons text-warning'>create</i>";
                        tbody+="</button>";

                        tbody+="<button class='remover' type='button' style='border:none;background-color:none;' value='"+v.id_usuario+"' name='usuario'>";
                        tbody+="<i class='material-icons text-danger'>delete</i>";
                        tbody+="</button></td>";
                        tbody+="</tr>";
                    }
                    else if(tabela=="Produto"){

                        tbody+="<tr class='dados' id='tr"+ v.id_produto + "'>";
                        tbody+="<td>"+ v.nome + "</td>";
                        tbody+="<td>" + v.descricao + "</td>";
                        tbody+="<td>" + v.peso + "</td>";
                        tbody+="<td>" + v.tamanho + "</td>";
                        tbody+="<td>" + v.cor + "</td>";
                        tbody+="<td>" + v.tipo + "</td>";
                        tbody+="<td>" + v.valor_unitario + "</td>";
                        tbody+="<td>" + v.estoque + "</td>";
                        tbody+="<td><button class='alterar' type='button' style='border:none;background-color:none;' value='"+v.id_produto+"' name='produto' data-toggle='modal' data-target='#novo"+tabela+"'>";
                        tbody+="<i class='material-icons text-warning'>create</i>";
                        tbody+="</button>";

                        tbody+="<button class='remover' type='button' style='border:none;background-color:none;' value='"+v.id_produto+"' name='produto'>";
                        tbody+="<i class='material-icons text-danger'>delete</i>";
                        tbody+="</button></td>";
                        tbody+="</tr>";
                    }
                    else if(tabela="Categoria"){

                        tbody+="<tr class='dados' id='tr"+ v.id_categoria + "'>";
                        tbody+="<td>"+ v.tipo + "</td>";
                        tbody+="<td><button class='alterar' type='button' style='border:none;background-color:none;' value='"+v.id_categoria+"' name='categoria' data-toggle='modal' data-target='#novo"+tabela+"'>";
                        tbody+="<i class='material-icons text-warning'>create</i>";
                        tbody+="</button>";

                        tbody+="<button class='remover' type='button' style='border:none;background-color:none;' value='"+v.id_categoria+"' name='categoria'>";
                        tbody+="<i class='material-icons text-danger'>delete</i>";
                        tbody+="</button></td>";
                        tbody+="</tr>";
                    }
                    else if(tabela=="Carrinho"){

                        tbody+="<tr class='dados' id='tr" + v.id_carrinho + "'>";
                        tbody+="<td>" + v.nome + "</td>";
                        tbody+="<td>" + v.sobrenome + "</td>";
                        tbody+="<td>" + v.cpf + "</td>";
                        tbody+="<td><button class='alterar' type='button' style='border:none;background-color:none;' value='"+v.id_carrinho+"' name='carrinho' data-toggle='modal' data-target='#novo"+tabela+"'>";
                        tbody+="<i class='material-icons text-warning'>create</i>";
                        tbody+="</button>";

                        tbody+="<button class='remover' type='button' style='border:none;background-color:none;' value='"+v.id_carrinho+"' name='carrinho'>";
                        tbody+="<i class='material-icons text-danger'>delete</i>";
                        tbody+="</button></td>";
                        tbody+="</tr>";
                    }
                    else if(tabela=="Carrinho_Produto"){

                        tbody+="<tr class='dados' id='tr" + v.id_carrinho_produto + "'>";
                        tbody+="<td>" + v.nome + "</td>";
                        tbody+="<td>" + v.cidade + "</td>";
                        tbody+="<td>" + v.uf + "</td>";
                        tbody+="<td><button class='alterar' type='button' style='border:none;background-color:none;' value='"+v.id_carrinho_produto+"' name='carrinho_produto' data-toggle='modal' data-target='#novo"+tabela+"'>";
                        tbody+="<i class='material-icons text-warning'>create</i>";
                        tbody+="</button>";

                        tbody+="<button class='remover' type='button' style='border:none;background-color:none;' value='"+v.id_carrinho_produto+"' name='carrinho_produto'>";
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
                        tbody+="<td><button class='alterar' type='button' style='border:none;background-color:none;' value='"+v.id_arbitro+"' name='campeonato' data-toggle='modal' data-target='#novo"+tabela+"'>";
                        tbody+="<i class='material-icons text-warning'>create</i>";
                        tbody+="</button>";

                        tbody+="<button class='remover' type='button' style='border:none;background-color:none;' value='"+v.id_arbitro+"' name='arbitro'>";
                        tbody+="<i class='material-icons text-danger'>delete</i>";
                        tbody+="</button></td>";
                        tbody+="</tr>";
                    }
                });
                $("tbody").html("");
                $("tbody").append(tbody);
                $(".close").click();
                if(acao=='alterar'){
                    acao_msg = "alterad@";
                }
                else{
                    acao_msg = "inserid@";
                }
                $("#msg").html(tabela + " " + acao_msg + " com sucesso.");   
                
                if(tabela=="Usuario"){
                    $("input[name='nome_usuario']").val("");
                    $("input[name='email']").val("");
                    $("input[name='senha']").val("");
                    $("input[name='permissao']").val("");
                    $("input[name='nome']").val("");
                    $("input[name='sobrenome']").val("");
                    $("input[name='data_nascimento']").val("");
                    $("input[name='rua']").val("");
                    $("input[name='numero']").val("");
                    $("input[name='compl']").val("");
                    $("input[name='bairro']").val("");
                    $("input[name='cidade']").val("");
                    $("input[name='estado']").val("");
                    $("input[name='telefone']").val("");
                    $("input[name='cep']").val("");
                    $("input[name='cpf']").val("");
                    $("input[name='rg']").val("");
                }
                else if(tabela=="Produto"){
                    $("input[name='nome_produto']").val("");
                    $("input[name='descricao']").val("");
                    $("input[name='peso']").val("");
                    $("input[select='tamanho']").val("");
                    $("input[select='cor']").val("");
                    $("input[select='cod_categoria']").val("");
                    $("input[name='valor_unitario']").val("");
                    $("input[name='estoque']").val("");
                }
                else if(tabela=="Categoria"){
                    $("input[name='tipo']").val("");
                }
                if(tabela=="Carrinho"){
                    $("input[select='cod_cliente1']").val("");
                    $("input[select='cod_cliente2']").val("");
                    $("input[select='cod_cliente3']").val("");
                }
                

                define_acao_remover();
                define_acao_alterar();
                acao='salvar';
        });
    });
    //////////////FIM INSERIR/////////////////
    
    
    //// Alterar
    function define_acao_alterar(){
        $(".alterar").click(function(){

            i = $(this).val();
            t = $(this).attr("name");

            p = {id:i,tabela:t};

            $.post("selecionarAlterar.php",p,function(r){
                
                if(t=='usuario'){
                    $("input[name='nome_usuario']").val(r[0].nome_usuario);
                    $("input[name='email']").val(r[0].email);
                    $("input[name='senha']").val(r[0].senha);
                    $("input[name='permissao']").val(r[0].permissao);
                    $("input[name='nome']").val(r[0].nome);
                    $("input[name='sobrenome']").val(r[0].sobrenome);
                    $("input[name='data_nascimento']").val(r[0].data_nascimento);
                    $("input[name='rua']").val(r[0].rua);
                    $("input[name='numero']").val(r[0].numero);
                    $("input[name='compl']").val(r[0].compl);
                    $("input[name='bairro']").val(r[0].bairro);
                    $("input[name='cidade']").val(r[0].cidade);
                    $("input[name='estado']").val(r[0].estado);
                    $("input[name='telefone']").val(r[0].telefone);
                    $("input[name='cep']").val(r[0].cep);
                    $("input[name='cpf']").val(r[0].cpf);
                    $("input[name='rg']").val(r[0].rg);
                }
                else if(t=='produto'){
                    console.log(r[0].tamanho);
                    $("input[name='nome_produto']").val(r[0].nome_produto);
                    $("input[name='descricao']").val(r[0].descricao);
                    $("input[name='peso']").val(r[0].peso);
                    $("select[name='tamanho']").val(r[0].tamanho);
                    $("input[select='cor']").val(r[0].cor);
                    $("select[name='cod_categoria']").val(r[0].cod_categoria);
                    $("input[name='valor_unitario']").val(r[0].valor_unitario);
                    $("input[name='estoque']").val(r[0].estoque);
                }
                else if(t=="categoria"){
                    $("input[name='tipo']").val(r[0].tipo);
                }
                else if(t=="carrinho"){
                    $("select[name='cod_cliente1']").val(r[0].nome);
                    $("select[name='cod_cliente2']").val(r[0].sobrenome);
                    $("select[name='cod_cliente3']").val(r[0].cpf);
                }
                else if(t=="Venda"){
                    $("input[name='nome']").val(r[0].nome);
                    $("input[name='cidade']").val(r[0].cidade);
                    $("input[name='uf']").val(r[0].uf);
                }
                
                acao="alterar";
                id = i;
            });

        });
    }
    define_acao_alterar();
    /////////////////////////////////////////
});

