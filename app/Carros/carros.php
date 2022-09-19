<?php  
class Carro{
    private $marca;
    private $modelo;
    private $anoFabricacao;
    private $inicioLocacao;
    private $fimLocacao;
    private $foto;
    
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
        echo "O {$this->modelo} é da marca {$this->marca} e seu ano de fabricação é {$this->anoFabricacao} e a devolução é {$this->fimLocacao}";
    }
    public function recebeArquivos($img){
        $this->foto = $img;
        if(empty($this->foto['name'])){
            return false;
        }
        else{
            $infoArquivo = pathinfo($this->foto['name']);
            if($infoArquivo["extension"] == "jpg" || "png" || "webp"){
                $pasta = "../img/";
                if(!file_exists($pasta)){
                    mkdir($pasta,0777,true);
                }
                $novoNome = new DateTime();
                $nomeFinal = $novoNome->getTimestamp().".".$infoArquivo["extension"];
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
}