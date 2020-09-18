<?php
    //                0    1      2
    //  $cabecalho [nome,cidade,estado]

    class Tabela{

        private $cabecalho;
        private $dados;

        public function __construct($parametros){
            $this->cabecalho = $parametros["cabecalho"];
            if(isset($parametros["dados"])){
                $this->dados = $parametros["dados"];
            }
        }


        public function exibe(){
            echo '
            <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>';
            
            foreach($this->cabecalho as $i=>$c){
                echo "<th>$c</th>";
            }                    
                    
            echo'
                <th>Ação</th>
                    </tr>
                </thead>
                <tbody>';
            if($this->dados != ""){    
                foreach($this->dados as $i=>$linha){
                    echo "<tr>";

                    foreach($linha as $j=>$td){
                        if(!is_numeric($j)){
                            if($j[0]!="i" && $j[1]!="d"){                            
                                echo "<td>".$td."</td>";
                            }
                        }
                    }

                    echo '
                        <td>
                            <a href="editar.php?id='.$linha[0].'" data-toggle="tooltip" title="Editar">
                                <i class="material-icons text-warning">create</i>
                            </a>
                            <a href="remover.php?id='.$linha[0].'" data-toggle="tooltip" title="Excluir">
                                <i class="material-icons text-danger">delete</i>
                            </a>
                        </td>    
                    </tr>';
                }  
            }
            else{
                $qtd=sizeof($this->cabecalho) + 1;
                echo "<tr><td colspan='$qtd'>Não há dados cadastrados</td></tr>";
            }

            echo '
               </tbody>
            </table>
        </div>
            ';
        }

    }


?>