<?php
    class BreadCrumb{

        private $links;

        public function __construct($p){
            $this->links = $p["links"];
        }

        public function exibe(){
            echo '
                <nav>
                    <ol class="breadcrumb bread migalha">';
                    $ultimo = sizeof($this->links) - 1;
                    
                    foreach($this->links as $j=>$i){
                        if($j==$ultimo){
                            echo '<li class="breadcrumb-item active">'.$i["label"].'</li>';
                        }
                        else{
                        echo '
                            <li class="breadcrumb-item">
                                <a href="'.$i["link"].'">'.$i["label"].'</a>
                            </li>';
                        }
                    }        

            echo '
                   </ol>
                </nav>            
            ';
        }

    }

?>