<?php  
class Carro{
    private $marca;
    private $modelo;
    private $anoFabricacao;
    private $inicioLocacao;
    private $fimLocacao;
    private $foto;
    
    
    public function inicio($campos,$img){
        //Verificar se os campos estão em branco
        if($this->recebeDados($campos)){
           if($this->validaData($campos["dataLocacao"], $campos["dataDevolucao"])){
            if($this->recebeArquivos($img)){
                $this-> mensagem = [
                    "status" => true,
                    "msg" => "Veículo cadastrado com sucesso"
                ];
            }
            else{
                $this-> mensagem = [
                    "status" => false,
                    "msg" => "Você precisa enviar uma imagem com formato jpg, png ou webp"
                ];
            }
           }
           else{
                $this-> mensagem = [
                "status" => false,
                "msg" => "Data da Locação é anterior à Data Atual"
            ];
           }
        }
            else{
                $this->mensagem = [
                    "status" => false,
                    "msg" => "Os campos não podem ficar em branco"
                ];
            
        }
            return $this -> mensagem;
    }
    
    
    public function recebeDados($campos){
        $this->marca = $campos["marcaCarro"];
        $this->modelo = $campos["nomeCarro"];
        $this->anoFabricacao = $campos["dataFabricacao"];
        $this->inicioLocacao = $campos["dataLocacao"];
        $this->fimLocacao = $campos["dataDevolucao"];
        if(empty($this->modelo)|| empty($this->inicioLocacao)|| empty($this->anoFabricacao)|| empty($this->fimLocacao)|| empty($this->marca)){
            return false;
        }
        else{
            return true;
        }
        
        //return true;
    }
    public function recebeArquivos($img){
        $this->foto = $img;
        if(empty($this->foto['name'])){
            print_r($this->foto['name']);
            return false;
        }
        else{
            $infoArquivo = pathinfo($this->foto["name"]);
            if($infoArquivo["extension"] == "jpg" || $infoArquivo["extension"]== "png" ||$infoArquivo["extension"]== "webp"){
                $pasta = "../img/";
                if(!file_exists($pasta)){
                    mkdir($pasta,0777,true);
                }
                $novoNome = new DateTime();
                $nomeFinal = $novoNome->getTimeStamp().".".$infoArquivo["extension"];
                $caminhoFinal = $pasta.$nomeFinal;
                move_uploaded_file($this->foto["tmp_name"],$caminhoFinal);
                $this->foto = $caminhoFinal;
                return true;      
        } 
            else{
                return false;
            }
        
        }
       
    }
    
    public function validaData($data,$data2){
        $inicioLocacao = new DateTime($data);
        $fimLocacao = new DateTime($data2);
        $dataAtual = new DateTime('now');

        if($fimLocacao > $dataAtual){
            return true;
        }
        else{
            return false;
        }
        if($fimLocacao > $inicioLocacao){
            return true;
        }
        else{
            return false;
        }
    }

    public function __get($atributo){
        return $this->$atributo;
    }
}

  