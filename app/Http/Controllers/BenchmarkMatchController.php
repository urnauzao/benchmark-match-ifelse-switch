<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Support\Arr;
use Illuminate\Support\Benchmark;

class BenchmarkMatchController extends Controller
{
    public function exemplo1(){
        $opcoes = ['Abacate','Abiu','Abiu roxo','Abóbora','Abricó','Abutua grande','Açaí','Acarajé','Acelga','Acerola','Acumã','Acuri','Aipim','Alcachofra','Aletria','Alface','Alfajor','Alfarroba','Algodão doce','Almeirão','Almôndega','Ambrosia','Ameixa da caatinga','Amêndoa','Amendoim','Amora','Anajá','Ananás','Angá','Angu','Antepasto','Araçá','Araçá boi','Araticum','Aroeira-vermelha','Arroz','Arroz carreteiro','Arroz com pequi','Arroz doce','Asa de frango','Aspargo','Aveia','Avelã','Azeitona', 'Maça', 'Pera', 'Uva'];
        $opcoes = Arr::shuffle($opcoes);
        Benchmark::dd( [
            "Exemplo 1 Switch" => fn() => $this->exemplo1Switch($opcoes),
            "Exemplo 1 If Else" => fn() => $this->exemplo1IfElse($opcoes),
            "Exemplo 1 Match" => fn() => $this->exemplo1Match($opcoes),
        ]
        , 10000);
    }

    private function exemplo1Match(array $opcoes){
        foreach($opcoes as $comida){
            $valor_de_retorno = null;
            $valor_de_retorno = match ($comida) {
                'Abacate' => "Essa comida é boa",
                'Abiu' => "Essa comida é boa",
                'Abiu roxo' => "Essa comida é boa",
                'Abóbora' => "Essa comida é boa",
                'Abricó' => "Essa comida é boa",
                'Abutua grande' => "Essa comida é boa",
                'Açaí' => "Essa comida é boa",
                'Acarajé' => "Essa comida é boa",
                'Acelga' => "Essa comida é boa",
                'Acerola' => "Essa comida é boa",
                'Acumã' => "Essa comida é boa",
                'Acuri' => "Essa comida é boa",
                'Aipim' => "Essa comida é boa",
                'Alcachofra' => "Essa comida é boa",
                'Aletria' => "Essa comida é boa",
                'Alface' => "Essa comida é boa",
                'Alfajor' => "Essa comida é boa",
                'Alfarroba' => "Essa comida é boa",
                'Algodão doce' => "Essa comida é boa",
                'Almeirão' => "Essa comida é boa",
                'Almôndega' => "Essa comida é boa",
                'Ambrosia' => "Essa comida é boa",
                'Ameixa da caatinga' => "Essa comida é boa",
                'Amêndoa' => "Essa comida é boa",
                'Amendoim' => "Essa comida é boa",
                'Amora' => "Essa comida é boa",
                'Anajá' => "Essa comida é boa",
                'Ananás' => "Essa comida é boa",
                'Angá' => "Essa comida é boa",
                'Angu' => "Essa comida é boa",
                'Antepasto' => "Essa comida é ruim",
                'Araçá' => "Essa comida é ruim",
                'Araçá boi' => "Essa comida é ruim",
                'Araticum' => "Essa comida é ruim",
                'Aroeira-vermelha' => "Essa comida é ruim",
                'Arroz' => "Essa comida é ruim",
                'Arroz carreteiro' => "Essa comida é ruim",
                'Arroz com pequi' => "Essa comida é ruim",
                'Arroz doce' => "Essa comida é ruim",
                'Asa de frango' => "Essa comida é ruim",
                'Aspargo' => "Essa comida é ruim",
                'Aveia' => "Essa comida é ruim",
                'Avelã' => "Essa comida é ruim",
                'Azeitona' => "Essa comida é ruim",
                default => "desconhecido"
            };
            if($valor_de_retorno){
                continue;
            }
            throw new Exception("Bye Bye");
        }
    }
    private function exemplo1Switch(array $opcoes){
        foreach($opcoes as $comida){
            $valor_de_retorno = null;
            switch ($comida) {
                case 'Abacate': 
                    $valor_de_retorno = "Essa comida é boa";
                break;
                case 'Abiu': 
                    $valor_de_retorno = "Essa comida é boa";
                break;
                case 'Abiu roxo': 
                    $valor_de_retorno = "Essa comida é boa";
                break;
                case 'Abóbora': 
                    $valor_de_retorno = "Essa comida é boa";
                break;
                case 'Abricó': 
                    $valor_de_retorno = "Essa comida é boa";
                break;
                case 'Abutua grande': 
                    $valor_de_retorno = "Essa comida é boa";
                break;
                case 'Açaí': 
                    $valor_de_retorno = "Essa comida é boa";
                break;
                case 'Acarajé': 
                    $valor_de_retorno = "Essa comida é boa";
                break;
                case 'Acelga': 
                    $valor_de_retorno = "Essa comida é boa";
                break;
                case 'Acerola': 
                    $valor_de_retorno = "Essa comida é boa";
                break;
                case 'Acumã': 
                    $valor_de_retorno = "Essa comida é boa";
                break;
                case 'Acuri': 
                    $valor_de_retorno = "Essa comida é boa";
                break;
                case 'Aipim': 
                    $valor_de_retorno = "Essa comida é boa";
                break;
                case 'Alcachofra': 
                    $valor_de_retorno = "Essa comida é boa";
                break;
                case 'Aletria': 
                    $valor_de_retorno = "Essa comida é boa";
                break;
                case 'Alface': 
                    $valor_de_retorno = "Essa comida é boa";
                break;
                case 'Alfajor': 
                    $valor_de_retorno = "Essa comida é boa";
                break;
                case 'Alfarroba': 
                    $valor_de_retorno = "Essa comida é boa";
                break;
                case 'Algodão doce': 
                    $valor_de_retorno = "Essa comida é boa";
                break;
                case 'Almeirão': 
                    $valor_de_retorno = "Essa comida é boa";
                break;
                case 'Almôndega': 
                    $valor_de_retorno = "Essa comida é boa";
                break;
                case 'Ambrosia': 
                    $valor_de_retorno = "Essa comida é boa";
                break;
                case 'Ameixa da caatinga': 
                    $valor_de_retorno = "Essa comida é boa";
                break;
                case 'Amêndoa': 
                    $valor_de_retorno = "Essa comida é boa";
                break;
                case 'Amendoim': 
                    $valor_de_retorno = "Essa comida é boa";
                break;
                case 'Amora': 
                    $valor_de_retorno = "Essa comida é boa";
                break;
                case 'Anajá': 
                    $valor_de_retorno = "Essa comida é boa";
                break;
                case 'Ananás': 
                    $valor_de_retorno = "Essa comida é boa";
                break;
                case 'Angá': 
                    $valor_de_retorno = "Essa comida é boa";
                break;
                case 'Angu': 
                    $valor_de_retorno = "Essa comida é boa";
                break;
                case 'Antepasto': 
                    $valor_de_retorno = "Essa comida é ruim";
                break;
                case 'Araçá': 
                    $valor_de_retorno = "Essa comida é ruim";
                break;
                case 'Araçá boi': 
                    $valor_de_retorno = "Essa comida é ruim";
                break;
                case 'Araticum': 
                    $valor_de_retorno = "Essa comida é ruim";
                break;
                case 'Aroeira-vermelha': 
                    $valor_de_retorno = "Essa comida é ruim";
                break;
                case 'Arroz': 
                    $valor_de_retorno = "Essa comida é ruim";
                break;
                case 'Arroz carreteiro': 
                    $valor_de_retorno = "Essa comida é ruim";
                break;
                case 'Arroz com pequi': 
                    $valor_de_retorno = "Essa comida é ruim";
                break;
                case 'Arroz doce': 
                    $valor_de_retorno = "Essa comida é ruim";
                break;
                case 'Asa de frango': 
                    $valor_de_retorno = "Essa comida é ruim";
                break;
                case 'Aspargo': 
                    $valor_de_retorno = "Essa comida é ruim";
                break;
                case 'Aveia': 
                    $valor_de_retorno = "Essa comida é ruim";
                break;
                case 'Avelã': 
                    $valor_de_retorno = "Essa comida é ruim";
                break;
                case 'Azeitona': 
                    $valor_de_retorno = "Essa comida é ruim";
                break;
                default: 
                    $valor_de_retorno = "desconhecido";
                break;
            };
            if($valor_de_retorno){
                continue;
            }
            throw new Exception("Bye Bye");
        }
    }
    private function exemplo1IfElse(array $opcoes){
        foreach($opcoes as $comida){
            $valor_de_retorno = null;
            if($comida === 'Abacate'){
                $valor_de_retorno = "Essa comida é boa";
            }else if($comida === 'Abiu'){
                $valor_de_retorno = "Essa comida é boa";
            }else if($comida === 'Abiu roxo'){
                $valor_de_retorno = "Essa comida é boa";
            }else if($comida === 'Abóbora'){
                $valor_de_retorno = "Essa comida é boa";
            }else if($comida === 'Abricó'){
                $valor_de_retorno = "Essa comida é boa";
            }else if($comida === 'Abutua grande'){
                $valor_de_retorno = "Essa comida é boa";
            }else if($comida === 'Açaí'){
                $valor_de_retorno = "Essa comida é boa";
            }else if($comida === 'Acarajé'){
                $valor_de_retorno = "Essa comida é boa";
            }else if($comida === 'Acelga'){
                $valor_de_retorno = "Essa comida é boa";
            }else if($comida === 'Acerola'){
                $valor_de_retorno = "Essa comida é boa";
            }else if($comida === 'Acumã'){
                $valor_de_retorno = "Essa comida é boa";
            }else if($comida === 'Acuri'){
                $valor_de_retorno = "Essa comida é boa";
            }else if($comida === 'Aipim'){
                $valor_de_retorno = "Essa comida é boa";
            }else if($comida === 'Alcachofra'){
                $valor_de_retorno = "Essa comida é boa";
            }else if($comida === 'Aletria'){
                $valor_de_retorno = "Essa comida é boa";
            }else if($comida === 'Alface'){
                $valor_de_retorno = "Essa comida é boa";
            }else if($comida === 'Alfajor'){
                $valor_de_retorno = "Essa comida é boa";
            }else if($comida === 'Alfarroba'){
                $valor_de_retorno = "Essa comida é boa";
            }else if($comida === 'Algodão doce'){
                $valor_de_retorno = "Essa comida é boa";
            }else if($comida === 'Almeirão'){
                $valor_de_retorno = "Essa comida é boa";
            }else if($comida === 'Almôndega'){
                $valor_de_retorno = "Essa comida é boa";
            }else if($comida === 'Ambrosia'){
                $valor_de_retorno = "Essa comida é boa";
            }else if($comida === 'Ameixa da caatinga'){
                $valor_de_retorno = "Essa comida é boa";
            }else if($comida === 'Amêndoa'){
                $valor_de_retorno = "Essa comida é boa";
            }else if($comida === 'Amendoim'){
                $valor_de_retorno = "Essa comida é boa";
            }else if($comida === 'Amora'){
                $valor_de_retorno = "Essa comida é boa";
            }else if($comida === 'Anajá'){
                $valor_de_retorno = "Essa comida é boa";
            }else if($comida === 'Ananás'){
                $valor_de_retorno = "Essa comida é boa";
            }else if($comida === 'Angá'){
                $valor_de_retorno = "Essa comida é boa";
            }else if($comida === 'Angu'){
                $valor_de_retorno = "Essa comida é boa";
            }else if($comida === 'Antepasto'){
                $valor_de_retorno = "Essa comida é ruim";
            }else if($comida === 'Araçá'){
                $valor_de_retorno = "Essa comida é ruim";
            }else if($comida === 'Araçá boi'){
                $valor_de_retorno = "Essa comida é ruim";
            }else if($comida === 'Araticum'){
                $valor_de_retorno = "Essa comida é ruim";
            }else if($comida === 'Aroeira-vermelha'){
                $valor_de_retorno = "Essa comida é ruim";
            }else if($comida === 'Arroz'){
                $valor_de_retorno = "Essa comida é ruim";
            }else if($comida === 'Arroz carreteiro'){
                $valor_de_retorno = "Essa comida é ruim";
            }else if($comida === 'Arroz com pequi'){
                $valor_de_retorno = "Essa comida é ruim";
            }else if($comida === 'Arroz doce'){
                $valor_de_retorno = "Essa comida é ruim";
            }else if($comida === 'Asa de frango'){
                $valor_de_retorno = "Essa comida é ruim";
            }else if($comida === 'Aspargo'){
                $valor_de_retorno = "Essa comida é ruim";
            }else if($comida === 'Aveia'){
                $valor_de_retorno = "Essa comida é ruim";
            }else if($comida === 'Avelã'){
                $valor_de_retorno = "Essa comida é ruim";
            }else if($comida === 'Azeitona'){
                $valor_de_retorno = "Essa comida é ruim";
            }else{
                $valor_de_retorno = "desconhecido";
            } 
            if($valor_de_retorno){
                continue;
            }
            throw new Exception("Bye Bye");
        }
    }

    public function exemplo2(){
        $opcoes = ['batata', 1,"1",2,"2",3,"3",4,"4",5,"5",6,"6",7,"7",8,"8",9,"9",10,"10",11,"11",12,"12",13,"13",14,"14",15,"15",16,"16",17,"17",18,"18",19,"19",20,"20",21,"21",22,"22",23,"23",24,"24",25,"25",26,"26",27,"27",28,"28",29,"29",30,"30",31,"31",32,"32",33,"33",34,"34",35,"35",36,"36",37,"37",38,"38",39,"39",40,"40",41,"41",42,"42",43,"43",44,"44",45,"45",46,"46",47,"47",48,"48",49,"49",50,"50",51,"51",52,"52",53,"53",54,"54",55,"55",56,"56",57,"57",58,"58",59,"59",60,"60",61,"61",62,"62",63,"63",64,"64",65,"65",66,"66",67,"67",68,"68",69,"69",70,"70",71,"71",72,"72",73,"73",74,"74",75,"75",76,"76",77,"77",78,"78",79,"79",80,"80",81,"81",82,"82",83,"83",84,"84",85,"85",86,"86",87,"87",88,"88",89,"89",90,"90",91,"91",92,"92",93,"93",94,"94",95,"95",96,"96",97,"97",98,"98",99,"99",100,"100"];
        $opcoes = Arr::shuffle($opcoes);
        Benchmark::dd( [
            "Exemplo 1 Switch" => fn() => $this->exemplo2Switch($opcoes),
            "Exemplo 1 If Else Estrito ===" => fn() => $this->exemplo2IfElseEstrito($opcoes),
            "Exemplo 1 If Else Frouxo ==" => fn() => $this->exemplo2IfElseFrouxo($opcoes),
            "Exemplo 1 Match" => fn() => $this->exemplo2Match($opcoes),
        ]
        , 10000);
    }

    private function exemplo2Match(array $opcoes){
        foreach($opcoes as $comida){
            $valor_de_retorno = null;
            $valor_de_retorno = match ($comida) {
                1 => 'ok',
                "1" => 'ok',
                2 => 'ok',
                "2" => 'ok',
                3 => 'ok',
                "3" => 'ok',
                4 => 'ok',
                "4" => 'ok',
                5 => 'ok',
                "5" => 'ok',
                6 => 'ok',
                "6" => 'ok',
                7 => 'ok',
                "7" => 'ok',
                8 => 'ok',
                "8" => 'ok',
                9 => 'ok',
                "9" => 'ok',
                10 => 'ok',
                "10" => 'ok',
                11 => 'ok',
                "11" => 'ok',
                12 => 'ok',
                "12" => 'ok',
                13 => 'ok',
                "13" => 'ok',
                14 => 'ok',
                "14" => 'ok',
                15 => 'ok',
                "15" => 'ok',
                16 => 'ok',
                "16" => 'ok',
                17 => 'ok',
                "17" => 'ok',
                18 => 'ok',
                "18" => 'ok',
                19 => 'ok',
                "19" => 'ok',
                20 => 'ok',
                "20" => 'ok',
                21 => 'ok',
                "21" => 'ok',
                22 => 'ok',
                "22" => 'ok',
                23 => 'ok',
                "23" => 'ok',
                24 => 'ok',
                "24" => 'ok',
                25 => 'ok',
                "25" => 'ok',
                26 => 'ok',
                "26" => 'ok',
                27 => 'ok',
                "27" => 'ok',
                28 => 'ok',
                "28" => 'ok',
                29 => 'ok',
                "29" => 'ok',
                30 => 'ok',
                "30" => 'ok',
                31 => 'ok',
                "31" => 'ok',
                32 => 'ok',
                "32" => 'ok',
                33 => 'ok',
                "33" => 'ok',
                34 => 'ok',
                "34" => 'ok',
                35 => 'ok',
                "35" => 'ok',
                36 => 'ok',
                "36" => 'ok',
                37 => 'ok',
                "37" => 'ok',
                38 => 'ok',
                "38" => 'ok',
                39 => 'ok',
                "39" => 'ok',
                40 => 'ok',
                "40" => 'ok',
                41 => 'ok',
                "41" => 'ok',
                42 => 'ok',
                "42" => 'ok',
                43 => 'ok',
                "43" => 'ok',
                44 => 'ok',
                "44" => 'ok',
                45 => 'ok',
                "45" => 'ok',
                46 => 'ok',
                "46" => 'ok',
                47 => 'ok',
                "47" => 'ok',
                48 => 'ok',
                "48" => 'ok',
                49 => 'ok',
                "49" => 'ok',
                50 => 'ok',
                "50" => 'ok',
                51 => 'ok',
                "51" => 'ok',
                52 => 'ok',
                "52" => 'ok',
                53 => 'ok',
                "53" => 'ok',
                54 => 'ok',
                "54" => 'ok',
                55 => 'ok',
                "55" => 'ok',
                56 => 'ok',
                "56" => 'ok',
                57 => 'ok',
                "57" => 'ok',
                58 => 'ok',
                "58" => 'ok',
                59 => 'ok',
                "59" => 'ok',
                60 => 'ok',
                "60" => 'ok',
                61 => 'ok',
                "61" => 'ok',
                62 => 'ok',
                "62" => 'ok',
                63 => 'ok',
                "63" => 'ok',
                64 => 'ok',
                "64" => 'ok',
                65 => 'ok',
                "65" => 'ok',
                66 => 'ok',
                "66" => 'ok',
                67 => 'ok',
                "67" => 'ok',
                68 => 'ok',
                "68" => 'ok',
                69 => 'ok',
                "69" => 'ok',
                70 => 'ok',
                "70" => 'ok',
                71 => 'ok',
                "71" => 'ok',
                72 => 'ok',
                "72" => 'ok',
                73 => 'ok',
                "73" => 'ok',
                74 => 'ok',
                "74" => 'ok',
                75 => 'ok',
                "75" => 'ok',
                76 => 'ok',
                "76" => 'ok',
                77 => 'ok',
                "77" => 'ok',
                78 => 'ok',
                "78" => 'ok',
                79 => 'ok',
                "79" => 'ok',
                80 => 'ok',
                "80" => 'ok',
                81 => 'ok',
                "81" => 'ok',
                82 => 'ok',
                "82" => 'ok',
                83 => 'ok',
                "83" => 'ok',
                84 => 'ok',
                "84" => 'ok',
                85 => 'ok',
                "85" => 'ok',
                86 => 'ok',
                "86" => 'ok',
                87 => 'ok',
                "87" => 'ok',
                88 => 'ok',
                "88" => 'ok',
                89 => 'ok',
                "89" => 'ok',
                90 => 'ok',
                "90" => 'ok',
                91 => 'ok',
                "91" => 'ok',
                92 => 'ok',
                "92" => 'ok',
                93 => 'ok',
                "93" => 'ok',
                94 => 'ok',
                "94" => 'ok',
                95 => 'ok',
                "95" => 'ok',
                96 => 'ok',
                "96" => 'ok',
                97 => 'ok',
                "97" => 'ok',
                98 => 'ok',
                "98" => 'ok',
                99 => 'ok',
                "99" => 'ok',
                100 => 'ok',
                "100" => 'ok',
                default => "desconhecido"
            };
            if($valor_de_retorno){
                continue;
            }
        }
    }
    private function exemplo2Switch(array $opcoes){
        foreach($opcoes as $comida){
            $valor_de_retorno = null;
            switch ($comida) {
                case 1:
                    $valor_de_retorno = 'ok';
                break;
                case "1":
                    $valor_de_retorno = 'ok';
                break;
                case 2:
                    $valor_de_retorno = 'ok';
                break;
                case "2":
                    $valor_de_retorno = 'ok';
                break;
                case 3:
                    $valor_de_retorno = 'ok';
                break;
                case "3":
                    $valor_de_retorno = 'ok';
                break;
                case 4:
                    $valor_de_retorno = 'ok';
                break;
                case "4":
                    $valor_de_retorno = 'ok';
                break;
                case 5:
                    $valor_de_retorno = 'ok';
                break;
                case "5":
                    $valor_de_retorno = 'ok';
                break;
                case 6:
                    $valor_de_retorno = 'ok';
                break;
                case "6":
                    $valor_de_retorno = 'ok';
                break;
                case 7:
                    $valor_de_retorno = 'ok';
                break;
                case "7":
                    $valor_de_retorno = 'ok';
                break;
                case 8:
                    $valor_de_retorno = 'ok';
                break;
                case "8":
                    $valor_de_retorno = 'ok';
                break;
                case 9:
                    $valor_de_retorno = 'ok';
                break;
                case "9":
                    $valor_de_retorno = 'ok';
                break;
                case 10:
                    $valor_de_retorno = 'ok';
                break;
                case "10":
                    $valor_de_retorno = 'ok';
                break;
                case 11:
                    $valor_de_retorno = 'ok';
                break;
                case "11":
                    $valor_de_retorno = 'ok';
                break;
                case 12:
                    $valor_de_retorno = 'ok';
                break;
                case "12":
                    $valor_de_retorno = 'ok';
                break;
                case 13:
                    $valor_de_retorno = 'ok';
                break;
                case "13":
                    $valor_de_retorno = 'ok';
                break;
                case 14:
                    $valor_de_retorno = 'ok';
                break;
                case "14":
                    $valor_de_retorno = 'ok';
                break;
                case 15:
                    $valor_de_retorno = 'ok';
                break;
                case "15":
                    $valor_de_retorno = 'ok';
                break;
                case 16:
                    $valor_de_retorno = 'ok';
                break;
                case "16":
                    $valor_de_retorno = 'ok';
                break;
                case 17:
                    $valor_de_retorno = 'ok';
                break;
                case "17":
                    $valor_de_retorno = 'ok';
                break;
                case 18:
                    $valor_de_retorno = 'ok';
                break;
                case "18":
                    $valor_de_retorno = 'ok';
                break;
                case 19:
                    $valor_de_retorno = 'ok';
                break;
                case "19":
                    $valor_de_retorno = 'ok';
                break;
                case 20:
                    $valor_de_retorno = 'ok';
                break;
                case "20":
                    $valor_de_retorno = 'ok';
                break;
                case 21:
                    $valor_de_retorno = 'ok';
                break;
                case "21":
                    $valor_de_retorno = 'ok';
                break;
                case 22:
                    $valor_de_retorno = 'ok';
                break;
                case "22":
                    $valor_de_retorno = 'ok';
                break;
                case 23:
                    $valor_de_retorno = 'ok';
                break;
                case "23":
                    $valor_de_retorno = 'ok';
                break;
                case 24:
                    $valor_de_retorno = 'ok';
                break;
                case "24":
                    $valor_de_retorno = 'ok';
                break;
                case 25:
                    $valor_de_retorno = 'ok';
                break;
                case "25":
                    $valor_de_retorno = 'ok';
                break;
                case 26:
                    $valor_de_retorno = 'ok';
                break;
                case "26":
                    $valor_de_retorno = 'ok';
                break;
                case 27:
                    $valor_de_retorno = 'ok';
                break;
                case "27":
                    $valor_de_retorno = 'ok';
                break;
                case 28:
                    $valor_de_retorno = 'ok';
                break;
                case "28":
                    $valor_de_retorno = 'ok';
                break;
                case 29:
                    $valor_de_retorno = 'ok';
                break;
                case "29":
                    $valor_de_retorno = 'ok';
                break;
                case 30:
                    $valor_de_retorno = 'ok';
                break;
                case "30":
                    $valor_de_retorno = 'ok';
                break;
                case 31:
                    $valor_de_retorno = 'ok';
                break;
                case "31":
                    $valor_de_retorno = 'ok';
                break;
                case 32:
                    $valor_de_retorno = 'ok';
                break;
                case "32":
                    $valor_de_retorno = 'ok';
                break;
                case 33:
                    $valor_de_retorno = 'ok';
                break;
                case "33":
                    $valor_de_retorno = 'ok';
                break;
                case 34:
                    $valor_de_retorno = 'ok';
                break;
                case "34":
                    $valor_de_retorno = 'ok';
                break;
                case 35:
                    $valor_de_retorno = 'ok';
                break;
                case "35":
                    $valor_de_retorno = 'ok';
                break;
                case 36:
                    $valor_de_retorno = 'ok';
                break;
                case "36":
                    $valor_de_retorno = 'ok';
                break;
                case 37:
                    $valor_de_retorno = 'ok';
                break;
                case "37":
                    $valor_de_retorno = 'ok';
                break;
                case 38:
                    $valor_de_retorno = 'ok';
                break;
                case "38":
                    $valor_de_retorno = 'ok';
                break;
                case 39:
                    $valor_de_retorno = 'ok';
                break;
                case "39":
                    $valor_de_retorno = 'ok';
                break;
                case 40:
                    $valor_de_retorno = 'ok';
                break;
                case "40":
                    $valor_de_retorno = 'ok';
                break;
                case 41:
                    $valor_de_retorno = 'ok';
                break;
                case "41":
                    $valor_de_retorno = 'ok';
                break;
                case 42:
                    $valor_de_retorno = 'ok';
                break;
                case "42":
                    $valor_de_retorno = 'ok';
                break;
                case 43:
                    $valor_de_retorno = 'ok';
                break;
                case "43":
                    $valor_de_retorno = 'ok';
                break;
                case 44:
                    $valor_de_retorno = 'ok';
                break;
                case "44":
                    $valor_de_retorno = 'ok';
                break;
                case 45:
                    $valor_de_retorno = 'ok';
                break;
                case "45":
                    $valor_de_retorno = 'ok';
                break;
                case 46:
                    $valor_de_retorno = 'ok';
                break;
                case "46":
                    $valor_de_retorno = 'ok';
                break;
                case 47:
                    $valor_de_retorno = 'ok';
                break;
                case "47":
                    $valor_de_retorno = 'ok';
                break;
                case 48:
                    $valor_de_retorno = 'ok';
                break;
                case "48":
                    $valor_de_retorno = 'ok';
                break;
                case 49:
                    $valor_de_retorno = 'ok';
                break;
                case "49":
                    $valor_de_retorno = 'ok';
                break;
                case 50:
                    $valor_de_retorno = 'ok';
                break;
                case "50":
                    $valor_de_retorno = 'ok';
                break;
                case 51:
                    $valor_de_retorno = 'ok';
                break;
                case "51":
                    $valor_de_retorno = 'ok';
                break;
                case 52:
                    $valor_de_retorno = 'ok';
                break;
                case "52":
                    $valor_de_retorno = 'ok';
                break;
                case 53:
                    $valor_de_retorno = 'ok';
                break;
                case "53":
                    $valor_de_retorno = 'ok';
                break;
                case 54:
                    $valor_de_retorno = 'ok';
                break;
                case "54":
                    $valor_de_retorno = 'ok';
                break;
                case 55:
                    $valor_de_retorno = 'ok';
                break;
                case "55":
                    $valor_de_retorno = 'ok';
                break;
                case 56:
                    $valor_de_retorno = 'ok';
                break;
                case "56":
                    $valor_de_retorno = 'ok';
                break;
                case 57:
                    $valor_de_retorno = 'ok';
                break;
                case "57":
                    $valor_de_retorno = 'ok';
                break;
                case 58:
                    $valor_de_retorno = 'ok';
                break;
                case "58":
                    $valor_de_retorno = 'ok';
                break;
                case 59:
                    $valor_de_retorno = 'ok';
                break;
                case "59":
                    $valor_de_retorno = 'ok';
                break;
                case 60:
                    $valor_de_retorno = 'ok';
                break;
                case "60":
                    $valor_de_retorno = 'ok';
                break;
                case 61:
                    $valor_de_retorno = 'ok';
                break;
                case "61":
                    $valor_de_retorno = 'ok';
                break;
                case 62:
                    $valor_de_retorno = 'ok';
                break;
                case "62":
                    $valor_de_retorno = 'ok';
                break;
                case 63:
                    $valor_de_retorno = 'ok';
                break;
                case "63":
                    $valor_de_retorno = 'ok';
                break;
                case 64:
                    $valor_de_retorno = 'ok';
                break;
                case "64":
                    $valor_de_retorno = 'ok';
                break;
                case 65:
                    $valor_de_retorno = 'ok';
                break;
                case "65":
                    $valor_de_retorno = 'ok';
                break;
                case 66:
                    $valor_de_retorno = 'ok';
                break;
                case "66":
                    $valor_de_retorno = 'ok';
                break;
                case 67:
                    $valor_de_retorno = 'ok';
                break;
                case "67":
                    $valor_de_retorno = 'ok';
                break;
                case 68:
                    $valor_de_retorno = 'ok';
                break;
                case "68":
                    $valor_de_retorno = 'ok';
                break;
                case 69:
                    $valor_de_retorno = 'ok';
                break;
                case "69":
                    $valor_de_retorno = 'ok';
                break;
                case 70:
                    $valor_de_retorno = 'ok';
                break;
                case "70":
                    $valor_de_retorno = 'ok';
                break;
                case 71:
                    $valor_de_retorno = 'ok';
                break;
                case "71":
                    $valor_de_retorno = 'ok';
                break;
                case 72:
                    $valor_de_retorno = 'ok';
                break;
                case "72":
                    $valor_de_retorno = 'ok';
                break;
                case 73:
                    $valor_de_retorno = 'ok';
                break;
                case "73":
                    $valor_de_retorno = 'ok';
                break;
                case 74:
                    $valor_de_retorno = 'ok';
                break;
                case "74":
                    $valor_de_retorno = 'ok';
                break;
                case 75:
                    $valor_de_retorno = 'ok';
                break;
                case "75":
                    $valor_de_retorno = 'ok';
                break;
                case 76:
                    $valor_de_retorno = 'ok';
                break;
                case "76":
                    $valor_de_retorno = 'ok';
                break;
                case 77:
                    $valor_de_retorno = 'ok';
                break;
                case "77":
                    $valor_de_retorno = 'ok';
                break;
                case 78:
                    $valor_de_retorno = 'ok';
                break;
                case "78":
                    $valor_de_retorno = 'ok';
                break;
                case 79:
                    $valor_de_retorno = 'ok';
                break;
                case "79":
                    $valor_de_retorno = 'ok';
                break;
                case 80:
                    $valor_de_retorno = 'ok';
                break;
                case "80":
                    $valor_de_retorno = 'ok';
                break;
                case 81:
                    $valor_de_retorno = 'ok';
                break;
                case "81":
                    $valor_de_retorno = 'ok';
                break;
                case 82:
                    $valor_de_retorno = 'ok';
                break;
                case "82":
                    $valor_de_retorno = 'ok';
                break;
                case 83:
                    $valor_de_retorno = 'ok';
                break;
                case "83":
                    $valor_de_retorno = 'ok';
                break;
                case 84:
                    $valor_de_retorno = 'ok';
                break;
                case "84":
                    $valor_de_retorno = 'ok';
                break;
                case 85:
                    $valor_de_retorno = 'ok';
                break;
                case "85":
                    $valor_de_retorno = 'ok';
                break;
                case 86:
                    $valor_de_retorno = 'ok';
                break;
                case "86":
                    $valor_de_retorno = 'ok';
                break;
                case 87:
                    $valor_de_retorno = 'ok';
                break;
                case "87":
                    $valor_de_retorno = 'ok';
                break;
                case 88:
                    $valor_de_retorno = 'ok';
                break;
                case "88":
                    $valor_de_retorno = 'ok';
                break;
                case 89:
                    $valor_de_retorno = 'ok';
                break;
                case "89":
                    $valor_de_retorno = 'ok';
                break;
                case 90:
                    $valor_de_retorno = 'ok';
                break;
                case "90":
                    $valor_de_retorno = 'ok';
                break;
                case 91:
                    $valor_de_retorno = 'ok';
                break;
                case "91":
                    $valor_de_retorno = 'ok';
                break;
                case 92:
                    $valor_de_retorno = 'ok';
                break;
                case "92":
                    $valor_de_retorno = 'ok';
                break;
                case 93:
                    $valor_de_retorno = 'ok';
                break;
                case "93":
                    $valor_de_retorno = 'ok';
                break;
                case 94:
                    $valor_de_retorno = 'ok';
                break;
                case "94":
                    $valor_de_retorno = 'ok';
                break;
                case 95:
                    $valor_de_retorno = 'ok';
                break;
                case "95":
                    $valor_de_retorno = 'ok';
                break;
                case 96:
                    $valor_de_retorno = 'ok';
                break;
                case "96":
                    $valor_de_retorno = 'ok';
                break;
                case 97:
                    $valor_de_retorno = 'ok';
                break;
                case "97":
                    $valor_de_retorno = 'ok';
                break;
                case 98:
                    $valor_de_retorno = 'ok';
                break;
                case "98":
                    $valor_de_retorno = 'ok';
                break;
                case 99:
                    $valor_de_retorno = 'ok';
                break;
                case "99":
                    $valor_de_retorno = 'ok';
                break;
                case 100:
                    $valor_de_retorno = 'ok';
                break;
                case "100":
                    $valor_de_retorno = 'ok';
                break;
                default: 
                    $valor_de_retorno = "desconhecido";
                break;
            };
            if($valor_de_retorno){
                continue;
            }
        }
    }
    private function exemplo2IfElseEstrito(array $opcoes){
        foreach($opcoes as $comida){
            $valor_de_retorno = null;
            if($comida === 1){
                $valor_de_retorno = 'ok';
            }else if($comida === "1"){
                $valor_de_retorno = 'ok';
            }else if($comida === 2){
                $valor_de_retorno = 'ok';
            }else if($comida === "2"){
                $valor_de_retorno = 'ok';
            }else if($comida === 3){
                $valor_de_retorno = 'ok';
            }else if($comida === "3"){
                $valor_de_retorno = 'ok';
            }else if($comida === 4){
                $valor_de_retorno = 'ok';
            }else if($comida === "4"){
                $valor_de_retorno = 'ok';
            }else if($comida === 5){
                $valor_de_retorno = 'ok';
            }else if($comida === "5"){
                $valor_de_retorno = 'ok';
            }else if($comida === 6){
                $valor_de_retorno = 'ok';
            }else if($comida === "6"){
                $valor_de_retorno = 'ok';
            }else if($comida === 7){
                $valor_de_retorno = 'ok';
            }else if($comida === "7"){
                $valor_de_retorno = 'ok';
            }else if($comida === 8){
                $valor_de_retorno = 'ok';
            }else if($comida === "8"){
                $valor_de_retorno = 'ok';
            }else if($comida === 9){
                $valor_de_retorno = 'ok';
            }else if($comida === "9"){
                $valor_de_retorno = 'ok';
            }else if($comida === 10){
                $valor_de_retorno = 'ok';
            }else if($comida === "10"){
                $valor_de_retorno = 'ok';
            }else if($comida === 11){
                $valor_de_retorno = 'ok';
            }else if($comida === "11"){
                $valor_de_retorno = 'ok';
            }else if($comida === 12){
                $valor_de_retorno = 'ok';
            }else if($comida === "12"){
                $valor_de_retorno = 'ok';
            }else if($comida === 13){
                $valor_de_retorno = 'ok';
            }else if($comida === "13"){
                $valor_de_retorno = 'ok';
            }else if($comida === 14){
                $valor_de_retorno = 'ok';
            }else if($comida === "14"){
                $valor_de_retorno = 'ok';
            }else if($comida === 15){
                $valor_de_retorno = 'ok';
            }else if($comida === "15"){
                $valor_de_retorno = 'ok';
            }else if($comida === 16){
                $valor_de_retorno = 'ok';
            }else if($comida === "16"){
                $valor_de_retorno = 'ok';
            }else if($comida === 17){
                $valor_de_retorno = 'ok';
            }else if($comida === "17"){
                $valor_de_retorno = 'ok';
            }else if($comida === 18){
                $valor_de_retorno = 'ok';
            }else if($comida === "18"){
                $valor_de_retorno = 'ok';
            }else if($comida === 19){
                $valor_de_retorno = 'ok';
            }else if($comida === "19"){
                $valor_de_retorno = 'ok';
            }else if($comida === 20){
                $valor_de_retorno = 'ok';
            }else if($comida === "20"){
                $valor_de_retorno = 'ok';
            }else if($comida === 21){
                $valor_de_retorno = 'ok';
            }else if($comida === "21"){
                $valor_de_retorno = 'ok';
            }else if($comida === 22){
                $valor_de_retorno = 'ok';
            }else if($comida === "22"){
                $valor_de_retorno = 'ok';
            }else if($comida === 23){
                $valor_de_retorno = 'ok';
            }else if($comida === "23"){
                $valor_de_retorno = 'ok';
            }else if($comida === 24){
                $valor_de_retorno = 'ok';
            }else if($comida === "24"){
                $valor_de_retorno = 'ok';
            }else if($comida === 25){
                $valor_de_retorno = 'ok';
            }else if($comida === "25"){
                $valor_de_retorno = 'ok';
            }else if($comida === 26){
                $valor_de_retorno = 'ok';
            }else if($comida === "26"){
                $valor_de_retorno = 'ok';
            }else if($comida === 27){
                $valor_de_retorno = 'ok';
            }else if($comida === "27"){
                $valor_de_retorno = 'ok';
            }else if($comida === 28){
                $valor_de_retorno = 'ok';
            }else if($comida === "28"){
                $valor_de_retorno = 'ok';
            }else if($comida === 29){
                $valor_de_retorno = 'ok';
            }else if($comida === "29"){
                $valor_de_retorno = 'ok';
            }else if($comida === 30){
                $valor_de_retorno = 'ok';
            }else if($comida === "30"){
                $valor_de_retorno = 'ok';
            }else if($comida === 31){
                $valor_de_retorno = 'ok';
            }else if($comida === "31"){
                $valor_de_retorno = 'ok';
            }else if($comida === 32){
                $valor_de_retorno = 'ok';
            }else if($comida === "32"){
                $valor_de_retorno = 'ok';
            }else if($comida === 33){
                $valor_de_retorno = 'ok';
            }else if($comida === "33"){
                $valor_de_retorno = 'ok';
            }else if($comida === 34){
                $valor_de_retorno = 'ok';
            }else if($comida === "34"){
                $valor_de_retorno = 'ok';
            }else if($comida === 35){
                $valor_de_retorno = 'ok';
            }else if($comida === "35"){
                $valor_de_retorno = 'ok';
            }else if($comida === 36){
                $valor_de_retorno = 'ok';
            }else if($comida === "36"){
                $valor_de_retorno = 'ok';
            }else if($comida === 37){
                $valor_de_retorno = 'ok';
            }else if($comida === "37"){
                $valor_de_retorno = 'ok';
            }else if($comida === 38){
                $valor_de_retorno = 'ok';
            }else if($comida === "38"){
                $valor_de_retorno = 'ok';
            }else if($comida === 39){
                $valor_de_retorno = 'ok';
            }else if($comida === "39"){
                $valor_de_retorno = 'ok';
            }else if($comida === 40){
                $valor_de_retorno = 'ok';
            }else if($comida === "40"){
                $valor_de_retorno = 'ok';
            }else if($comida === 41){
                $valor_de_retorno = 'ok';
            }else if($comida === "41"){
                $valor_de_retorno = 'ok';
            }else if($comida === 42){
                $valor_de_retorno = 'ok';
            }else if($comida === "42"){
                $valor_de_retorno = 'ok';
            }else if($comida === 43){
                $valor_de_retorno = 'ok';
            }else if($comida === "43"){
                $valor_de_retorno = 'ok';
            }else if($comida === 44){
                $valor_de_retorno = 'ok';
            }else if($comida === "44"){
                $valor_de_retorno = 'ok';
            }else if($comida === 45){
                $valor_de_retorno = 'ok';
            }else if($comida === "45"){
                $valor_de_retorno = 'ok';
            }else if($comida === 46){
                $valor_de_retorno = 'ok';
            }else if($comida === "46"){
                $valor_de_retorno = 'ok';
            }else if($comida === 47){
                $valor_de_retorno = 'ok';
            }else if($comida === "47"){
                $valor_de_retorno = 'ok';
            }else if($comida === 48){
                $valor_de_retorno = 'ok';
            }else if($comida === "48"){
                $valor_de_retorno = 'ok';
            }else if($comida === 49){
                $valor_de_retorno = 'ok';
            }else if($comida === "49"){
                $valor_de_retorno = 'ok';
            }else if($comida === 50){
                $valor_de_retorno = 'ok';
            }else if($comida === "50"){
                $valor_de_retorno = 'ok';
            }else if($comida === 51){
                $valor_de_retorno = 'ok';
            }else if($comida === "51"){
                $valor_de_retorno = 'ok';
            }else if($comida === 52){
                $valor_de_retorno = 'ok';
            }else if($comida === "52"){
                $valor_de_retorno = 'ok';
            }else if($comida === 53){
                $valor_de_retorno = 'ok';
            }else if($comida === "53"){
                $valor_de_retorno = 'ok';
            }else if($comida === 54){
                $valor_de_retorno = 'ok';
            }else if($comida === "54"){
                $valor_de_retorno = 'ok';
            }else if($comida === 55){
                $valor_de_retorno = 'ok';
            }else if($comida === "55"){
                $valor_de_retorno = 'ok';
            }else if($comida === 56){
                $valor_de_retorno = 'ok';
            }else if($comida === "56"){
                $valor_de_retorno = 'ok';
            }else if($comida === 57){
                $valor_de_retorno = 'ok';
            }else if($comida === "57"){
                $valor_de_retorno = 'ok';
            }else if($comida === 58){
                $valor_de_retorno = 'ok';
            }else if($comida === "58"){
                $valor_de_retorno = 'ok';
            }else if($comida === 59){
                $valor_de_retorno = 'ok';
            }else if($comida === "59"){
                $valor_de_retorno = 'ok';
            }else if($comida === 60){
                $valor_de_retorno = 'ok';
            }else if($comida === "60"){
                $valor_de_retorno = 'ok';
            }else if($comida === 61){
                $valor_de_retorno = 'ok';
            }else if($comida === "61"){
                $valor_de_retorno = 'ok';
            }else if($comida === 62){
                $valor_de_retorno = 'ok';
            }else if($comida === "62"){
                $valor_de_retorno = 'ok';
            }else if($comida === 63){
                $valor_de_retorno = 'ok';
            }else if($comida === "63"){
                $valor_de_retorno = 'ok';
            }else if($comida === 64){
                $valor_de_retorno = 'ok';
            }else if($comida === "64"){
                $valor_de_retorno = 'ok';
            }else if($comida === 65){
                $valor_de_retorno = 'ok';
            }else if($comida === "65"){
                $valor_de_retorno = 'ok';
            }else if($comida === 66){
                $valor_de_retorno = 'ok';
            }else if($comida === "66"){
                $valor_de_retorno = 'ok';
            }else if($comida === 67){
                $valor_de_retorno = 'ok';
            }else if($comida === "67"){
                $valor_de_retorno = 'ok';
            }else if($comida === 68){
                $valor_de_retorno = 'ok';
            }else if($comida === "68"){
                $valor_de_retorno = 'ok';
            }else if($comida === 69){
                $valor_de_retorno = 'ok';
            }else if($comida === "69"){
                $valor_de_retorno = 'ok';
            }else if($comida === 70){
                $valor_de_retorno = 'ok';
            }else if($comida === "70"){
                $valor_de_retorno = 'ok';
            }else if($comida === 71){
                $valor_de_retorno = 'ok';
            }else if($comida === "71"){
                $valor_de_retorno = 'ok';
            }else if($comida === 72){
                $valor_de_retorno = 'ok';
            }else if($comida === "72"){
                $valor_de_retorno = 'ok';
            }else if($comida === 73){
                $valor_de_retorno = 'ok';
            }else if($comida === "73"){
                $valor_de_retorno = 'ok';
            }else if($comida === 74){
                $valor_de_retorno = 'ok';
            }else if($comida === "74"){
                $valor_de_retorno = 'ok';
            }else if($comida === 75){
                $valor_de_retorno = 'ok';
            }else if($comida === "75"){
                $valor_de_retorno = 'ok';
            }else if($comida === 76){
                $valor_de_retorno = 'ok';
            }else if($comida === "76"){
                $valor_de_retorno = 'ok';
            }else if($comida === 77){
                $valor_de_retorno = 'ok';
            }else if($comida === "77"){
                $valor_de_retorno = 'ok';
            }else if($comida === 78){
                $valor_de_retorno = 'ok';
            }else if($comida === "78"){
                $valor_de_retorno = 'ok';
            }else if($comida === 79){
                $valor_de_retorno = 'ok';
            }else if($comida === "79"){
                $valor_de_retorno = 'ok';
            }else if($comida === 80){
                $valor_de_retorno = 'ok';
            }else if($comida === "80"){
                $valor_de_retorno = 'ok';
            }else if($comida === 81){
                $valor_de_retorno = 'ok';
            }else if($comida === "81"){
                $valor_de_retorno = 'ok';
            }else if($comida === 82){
                $valor_de_retorno = 'ok';
            }else if($comida === "82"){
                $valor_de_retorno = 'ok';
            }else if($comida === 83){
                $valor_de_retorno = 'ok';
            }else if($comida === "83"){
                $valor_de_retorno = 'ok';
            }else if($comida === 84){
                $valor_de_retorno = 'ok';
            }else if($comida === "84"){
                $valor_de_retorno = 'ok';
            }else if($comida === 85){
                $valor_de_retorno = 'ok';
            }else if($comida === "85"){
                $valor_de_retorno = 'ok';
            }else if($comida === 86){
                $valor_de_retorno = 'ok';
            }else if($comida === "86"){
                $valor_de_retorno = 'ok';
            }else if($comida === 87){
                $valor_de_retorno = 'ok';
            }else if($comida === "87"){
                $valor_de_retorno = 'ok';
            }else if($comida === 88){
                $valor_de_retorno = 'ok';
            }else if($comida === "88"){
                $valor_de_retorno = 'ok';
            }else if($comida === 89){
                $valor_de_retorno = 'ok';
            }else if($comida === "89"){
                $valor_de_retorno = 'ok';
            }else if($comida === 90){
                $valor_de_retorno = 'ok';
            }else if($comida === "90"){
                $valor_de_retorno = 'ok';
            }else if($comida === 91){
                $valor_de_retorno = 'ok';
            }else if($comida === "91"){
                $valor_de_retorno = 'ok';
            }else if($comida === 92){
                $valor_de_retorno = 'ok';
            }else if($comida === "92"){
                $valor_de_retorno = 'ok';
            }else if($comida === 93){
                $valor_de_retorno = 'ok';
            }else if($comida === "93"){
                $valor_de_retorno = 'ok';
            }else if($comida === 94){
                $valor_de_retorno = 'ok';
            }else if($comida === "94"){
                $valor_de_retorno = 'ok';
            }else if($comida === 95){
                $valor_de_retorno = 'ok';
            }else if($comida === "95"){
                $valor_de_retorno = 'ok';
            }else if($comida === 96){
                $valor_de_retorno = 'ok';
            }else if($comida === "96"){
                $valor_de_retorno = 'ok';
            }else if($comida === 97){
                $valor_de_retorno = 'ok';
            }else if($comida === "97"){
                $valor_de_retorno = 'ok';
            }else if($comida === 98){
                $valor_de_retorno = 'ok';
            }else if($comida === "98"){
                $valor_de_retorno = 'ok';
            }else if($comida === 99){
                $valor_de_retorno = 'ok';
            }else if($comida === "99"){
                $valor_de_retorno = 'ok';
            }else if($comida === 100){
                $valor_de_retorno = 'ok';
            }else if($comida === "100"){
                $valor_de_retorno = 'ok';
            }else{
                $valor_de_retorno = "desconhecido";
            } 
            if($valor_de_retorno){
                continue;
            }
        }
    }
    private function exemplo2IfElseFrouxo(array $opcoes){
        foreach($opcoes as $comida){
            $valor_de_retorno = null;
            if($comida == 1){
                $valor_de_retorno = 'ok';
            }else if($comida == "1"){
                $valor_de_retorno = 'ok';
            }else if($comida == 2){
                $valor_de_retorno = 'ok';
            }else if($comida == "2"){
                $valor_de_retorno = 'ok';
            }else if($comida == 3){
                $valor_de_retorno = 'ok';
            }else if($comida == "3"){
                $valor_de_retorno = 'ok';
            }else if($comida == 4){
                $valor_de_retorno = 'ok';
            }else if($comida == "4"){
                $valor_de_retorno = 'ok';
            }else if($comida == 5){
                $valor_de_retorno = 'ok';
            }else if($comida == "5"){
                $valor_de_retorno = 'ok';
            }else if($comida == 6){
                $valor_de_retorno = 'ok';
            }else if($comida == "6"){
                $valor_de_retorno = 'ok';
            }else if($comida == 7){
                $valor_de_retorno = 'ok';
            }else if($comida == "7"){
                $valor_de_retorno = 'ok';
            }else if($comida == 8){
                $valor_de_retorno = 'ok';
            }else if($comida == "8"){
                $valor_de_retorno = 'ok';
            }else if($comida == 9){
                $valor_de_retorno = 'ok';
            }else if($comida == "9"){
                $valor_de_retorno = 'ok';
            }else if($comida == 10){
                $valor_de_retorno = 'ok';
            }else if($comida == "10"){
                $valor_de_retorno = 'ok';
            }else if($comida == 11){
                $valor_de_retorno = 'ok';
            }else if($comida == "11"){
                $valor_de_retorno = 'ok';
            }else if($comida == 12){
                $valor_de_retorno = 'ok';
            }else if($comida == "12"){
                $valor_de_retorno = 'ok';
            }else if($comida == 13){
                $valor_de_retorno = 'ok';
            }else if($comida == "13"){
                $valor_de_retorno = 'ok';
            }else if($comida == 14){
                $valor_de_retorno = 'ok';
            }else if($comida == "14"){
                $valor_de_retorno = 'ok';
            }else if($comida == 15){
                $valor_de_retorno = 'ok';
            }else if($comida == "15"){
                $valor_de_retorno = 'ok';
            }else if($comida == 16){
                $valor_de_retorno = 'ok';
            }else if($comida == "16"){
                $valor_de_retorno = 'ok';
            }else if($comida == 17){
                $valor_de_retorno = 'ok';
            }else if($comida == "17"){
                $valor_de_retorno = 'ok';
            }else if($comida == 18){
                $valor_de_retorno = 'ok';
            }else if($comida == "18"){
                $valor_de_retorno = 'ok';
            }else if($comida == 19){
                $valor_de_retorno = 'ok';
            }else if($comida == "19"){
                $valor_de_retorno = 'ok';
            }else if($comida == 20){
                $valor_de_retorno = 'ok';
            }else if($comida == "20"){
                $valor_de_retorno = 'ok';
            }else if($comida == 21){
                $valor_de_retorno = 'ok';
            }else if($comida == "21"){
                $valor_de_retorno = 'ok';
            }else if($comida == 22){
                $valor_de_retorno = 'ok';
            }else if($comida == "22"){
                $valor_de_retorno = 'ok';
            }else if($comida == 23){
                $valor_de_retorno = 'ok';
            }else if($comida == "23"){
                $valor_de_retorno = 'ok';
            }else if($comida == 24){
                $valor_de_retorno = 'ok';
            }else if($comida == "24"){
                $valor_de_retorno = 'ok';
            }else if($comida == 25){
                $valor_de_retorno = 'ok';
            }else if($comida == "25"){
                $valor_de_retorno = 'ok';
            }else if($comida == 26){
                $valor_de_retorno = 'ok';
            }else if($comida == "26"){
                $valor_de_retorno = 'ok';
            }else if($comida == 27){
                $valor_de_retorno = 'ok';
            }else if($comida == "27"){
                $valor_de_retorno = 'ok';
            }else if($comida == 28){
                $valor_de_retorno = 'ok';
            }else if($comida == "28"){
                $valor_de_retorno = 'ok';
            }else if($comida == 29){
                $valor_de_retorno = 'ok';
            }else if($comida == "29"){
                $valor_de_retorno = 'ok';
            }else if($comida == 30){
                $valor_de_retorno = 'ok';
            }else if($comida == "30"){
                $valor_de_retorno = 'ok';
            }else if($comida == 31){
                $valor_de_retorno = 'ok';
            }else if($comida == "31"){
                $valor_de_retorno = 'ok';
            }else if($comida == 32){
                $valor_de_retorno = 'ok';
            }else if($comida == "32"){
                $valor_de_retorno = 'ok';
            }else if($comida == 33){
                $valor_de_retorno = 'ok';
            }else if($comida == "33"){
                $valor_de_retorno = 'ok';
            }else if($comida == 34){
                $valor_de_retorno = 'ok';
            }else if($comida == "34"){
                $valor_de_retorno = 'ok';
            }else if($comida == 35){
                $valor_de_retorno = 'ok';
            }else if($comida == "35"){
                $valor_de_retorno = 'ok';
            }else if($comida == 36){
                $valor_de_retorno = 'ok';
            }else if($comida == "36"){
                $valor_de_retorno = 'ok';
            }else if($comida == 37){
                $valor_de_retorno = 'ok';
            }else if($comida == "37"){
                $valor_de_retorno = 'ok';
            }else if($comida == 38){
                $valor_de_retorno = 'ok';
            }else if($comida == "38"){
                $valor_de_retorno = 'ok';
            }else if($comida == 39){
                $valor_de_retorno = 'ok';
            }else if($comida == "39"){
                $valor_de_retorno = 'ok';
            }else if($comida == 40){
                $valor_de_retorno = 'ok';
            }else if($comida == "40"){
                $valor_de_retorno = 'ok';
            }else if($comida == 41){
                $valor_de_retorno = 'ok';
            }else if($comida == "41"){
                $valor_de_retorno = 'ok';
            }else if($comida == 42){
                $valor_de_retorno = 'ok';
            }else if($comida == "42"){
                $valor_de_retorno = 'ok';
            }else if($comida == 43){
                $valor_de_retorno = 'ok';
            }else if($comida == "43"){
                $valor_de_retorno = 'ok';
            }else if($comida == 44){
                $valor_de_retorno = 'ok';
            }else if($comida == "44"){
                $valor_de_retorno = 'ok';
            }else if($comida == 45){
                $valor_de_retorno = 'ok';
            }else if($comida == "45"){
                $valor_de_retorno = 'ok';
            }else if($comida == 46){
                $valor_de_retorno = 'ok';
            }else if($comida == "46"){
                $valor_de_retorno = 'ok';
            }else if($comida == 47){
                $valor_de_retorno = 'ok';
            }else if($comida == "47"){
                $valor_de_retorno = 'ok';
            }else if($comida == 48){
                $valor_de_retorno = 'ok';
            }else if($comida == "48"){
                $valor_de_retorno = 'ok';
            }else if($comida == 49){
                $valor_de_retorno = 'ok';
            }else if($comida == "49"){
                $valor_de_retorno = 'ok';
            }else if($comida == 50){
                $valor_de_retorno = 'ok';
            }else if($comida == "50"){
                $valor_de_retorno = 'ok';
            }else if($comida == 51){
                $valor_de_retorno = 'ok';
            }else if($comida == "51"){
                $valor_de_retorno = 'ok';
            }else if($comida == 52){
                $valor_de_retorno = 'ok';
            }else if($comida == "52"){
                $valor_de_retorno = 'ok';
            }else if($comida == 53){
                $valor_de_retorno = 'ok';
            }else if($comida == "53"){
                $valor_de_retorno = 'ok';
            }else if($comida == 54){
                $valor_de_retorno = 'ok';
            }else if($comida == "54"){
                $valor_de_retorno = 'ok';
            }else if($comida == 55){
                $valor_de_retorno = 'ok';
            }else if($comida == "55"){
                $valor_de_retorno = 'ok';
            }else if($comida == 56){
                $valor_de_retorno = 'ok';
            }else if($comida == "56"){
                $valor_de_retorno = 'ok';
            }else if($comida == 57){
                $valor_de_retorno = 'ok';
            }else if($comida == "57"){
                $valor_de_retorno = 'ok';
            }else if($comida == 58){
                $valor_de_retorno = 'ok';
            }else if($comida == "58"){
                $valor_de_retorno = 'ok';
            }else if($comida == 59){
                $valor_de_retorno = 'ok';
            }else if($comida == "59"){
                $valor_de_retorno = 'ok';
            }else if($comida == 60){
                $valor_de_retorno = 'ok';
            }else if($comida == "60"){
                $valor_de_retorno = 'ok';
            }else if($comida == 61){
                $valor_de_retorno = 'ok';
            }else if($comida == "61"){
                $valor_de_retorno = 'ok';
            }else if($comida == 62){
                $valor_de_retorno = 'ok';
            }else if($comida == "62"){
                $valor_de_retorno = 'ok';
            }else if($comida == 63){
                $valor_de_retorno = 'ok';
            }else if($comida == "63"){
                $valor_de_retorno = 'ok';
            }else if($comida == 64){
                $valor_de_retorno = 'ok';
            }else if($comida == "64"){
                $valor_de_retorno = 'ok';
            }else if($comida == 65){
                $valor_de_retorno = 'ok';
            }else if($comida == "65"){
                $valor_de_retorno = 'ok';
            }else if($comida == 66){
                $valor_de_retorno = 'ok';
            }else if($comida == "66"){
                $valor_de_retorno = 'ok';
            }else if($comida == 67){
                $valor_de_retorno = 'ok';
            }else if($comida == "67"){
                $valor_de_retorno = 'ok';
            }else if($comida == 68){
                $valor_de_retorno = 'ok';
            }else if($comida == "68"){
                $valor_de_retorno = 'ok';
            }else if($comida == 69){
                $valor_de_retorno = 'ok';
            }else if($comida == "69"){
                $valor_de_retorno = 'ok';
            }else if($comida == 70){
                $valor_de_retorno = 'ok';
            }else if($comida == "70"){
                $valor_de_retorno = 'ok';
            }else if($comida == 71){
                $valor_de_retorno = 'ok';
            }else if($comida == "71"){
                $valor_de_retorno = 'ok';
            }else if($comida == 72){
                $valor_de_retorno = 'ok';
            }else if($comida == "72"){
                $valor_de_retorno = 'ok';
            }else if($comida == 73){
                $valor_de_retorno = 'ok';
            }else if($comida == "73"){
                $valor_de_retorno = 'ok';
            }else if($comida == 74){
                $valor_de_retorno = 'ok';
            }else if($comida == "74"){
                $valor_de_retorno = 'ok';
            }else if($comida == 75){
                $valor_de_retorno = 'ok';
            }else if($comida == "75"){
                $valor_de_retorno = 'ok';
            }else if($comida == 76){
                $valor_de_retorno = 'ok';
            }else if($comida == "76"){
                $valor_de_retorno = 'ok';
            }else if($comida == 77){
                $valor_de_retorno = 'ok';
            }else if($comida == "77"){
                $valor_de_retorno = 'ok';
            }else if($comida == 78){
                $valor_de_retorno = 'ok';
            }else if($comida == "78"){
                $valor_de_retorno = 'ok';
            }else if($comida == 79){
                $valor_de_retorno = 'ok';
            }else if($comida == "79"){
                $valor_de_retorno = 'ok';
            }else if($comida == 80){
                $valor_de_retorno = 'ok';
            }else if($comida == "80"){
                $valor_de_retorno = 'ok';
            }else if($comida == 81){
                $valor_de_retorno = 'ok';
            }else if($comida == "81"){
                $valor_de_retorno = 'ok';
            }else if($comida == 82){
                $valor_de_retorno = 'ok';
            }else if($comida == "82"){
                $valor_de_retorno = 'ok';
            }else if($comida == 83){
                $valor_de_retorno = 'ok';
            }else if($comida == "83"){
                $valor_de_retorno = 'ok';
            }else if($comida == 84){
                $valor_de_retorno = 'ok';
            }else if($comida == "84"){
                $valor_de_retorno = 'ok';
            }else if($comida == 85){
                $valor_de_retorno = 'ok';
            }else if($comida == "85"){
                $valor_de_retorno = 'ok';
            }else if($comida == 86){
                $valor_de_retorno = 'ok';
            }else if($comida == "86"){
                $valor_de_retorno = 'ok';
            }else if($comida == 87){
                $valor_de_retorno = 'ok';
            }else if($comida == "87"){
                $valor_de_retorno = 'ok';
            }else if($comida == 88){
                $valor_de_retorno = 'ok';
            }else if($comida == "88"){
                $valor_de_retorno = 'ok';
            }else if($comida == 89){
                $valor_de_retorno = 'ok';
            }else if($comida == "89"){
                $valor_de_retorno = 'ok';
            }else if($comida == 90){
                $valor_de_retorno = 'ok';
            }else if($comida == "90"){
                $valor_de_retorno = 'ok';
            }else if($comida == 91){
                $valor_de_retorno = 'ok';
            }else if($comida == "91"){
                $valor_de_retorno = 'ok';
            }else if($comida == 92){
                $valor_de_retorno = 'ok';
            }else if($comida == "92"){
                $valor_de_retorno = 'ok';
            }else if($comida == 93){
                $valor_de_retorno = 'ok';
            }else if($comida == "93"){
                $valor_de_retorno = 'ok';
            }else if($comida == 94){
                $valor_de_retorno = 'ok';
            }else if($comida == "94"){
                $valor_de_retorno = 'ok';
            }else if($comida == 95){
                $valor_de_retorno = 'ok';
            }else if($comida == "95"){
                $valor_de_retorno = 'ok';
            }else if($comida == 96){
                $valor_de_retorno = 'ok';
            }else if($comida == "96"){
                $valor_de_retorno = 'ok';
            }else if($comida == 97){
                $valor_de_retorno = 'ok';
            }else if($comida == "97"){
                $valor_de_retorno = 'ok';
            }else if($comida == 98){
                $valor_de_retorno = 'ok';
            }else if($comida == "98"){
                $valor_de_retorno = 'ok';
            }else if($comida == 99){
                $valor_de_retorno = 'ok';
            }else if($comida == "99"){
                $valor_de_retorno = 'ok';
            }else if($comida == 100){
                $valor_de_retorno = 'ok';
            }else if($comida == "100"){
                $valor_de_retorno = 'ok';
            }else{
                $valor_de_retorno = "desconhecido";
            } 
            if($valor_de_retorno){
                continue;
            }
        }
    }
}
