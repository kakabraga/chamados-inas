<?php
 $meses = array('Janeiro',
                'Fevereiro',
                'Março', 
                'Abril', 
                'Maio',
                'Junho',
                'Julho',
                'Agosto',
                'Setembro',
                'Outubro',
                'Novembro',
                'Dezembro');
        
        for($i = 0; $i < count($meses);$i++) {
            $txt_mes = "";
            if($i > 9){
                $txt_mes = "0" . $i;
            } else {
                $txt_mes = "" . $i;
            }
            $txt_matricula = "0" . strtoupper(str_replace("-", "", $usuario_logado->matricula));
            $arquivo = "ponto/2024/".$txt_mes."/".$txt_matricula.".pdf";
            //echo "Arquivo: " . $arquivo;
            //echo "<hr/> " . is_file($arquivo);

            echo "<tr>";
            echo "  <td>2024</td>";
            echo "  <td>".$meses[$i]."</td>";
            if(is_file($arquivo)){
                echo "  <td align='center'><a class='btn btn-btn-info btn-sm' href='./ponto/2024/".$txt_mes."/".$txt_matricula.".pdf'><i class='fa fa-file-pdf text-white'></i></a></td>";
            } else {
                echo "  <td align='center'> - </td>";                
            }
            echo "</tr>";
        }

