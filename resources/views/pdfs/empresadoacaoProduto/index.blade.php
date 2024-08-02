<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">

    <title>ANGOCARE - PRODUTOS DOADOS POR EMPRESAS</title>
    <style>
        <?php echo $bootstrap;
        echo $css;
        ?>
        .centalizar{

            text-align: center;
        }
    </style>
</head>

<body>
    <div class="text-center"  style="text-align: center;">
<img src="images/logo.png" alt="" style="width: 10%">
          
    <p>
            <br>
            <?php echo "República de Angola"; ?>
            <br>
            <?php echo "Ministerio das Telecomunicações e Tecnologias de Informação e Comunicação"; ?>
            <br>
            <?php echo "Instituto de Telecomunicações -ITEL"; ?><br>
            <?php echo "ANGOCARE - SISTEMA DE GESTÃO DE DOAÇÕES"; ?> <br>
        </p>

    </div>
    <br>
    <div class="text-center" style="text-align: center;">
        <h3 class="tema">Produtos</h3>
    </div>

    <table class="table table-striped  table-bodered table-hover"  border="1" width="100%" style="border-collapse: collapse;">
        <thead>
            <tr>
                <th width="3px">Nº</th>
              
                <th>Necessitado</th>
                <th>Empresa Doadora</th>
                <th>Produtos Doados</th>
                <th>Entrega</th>
                <th>Estado</th>

            </tr>
        </thead>
        <tbody >

            <?php $contador = 1; ?>
            <?php foreach ($produtos as $row) : ?>

                <tr align="center">
                    <td align="center"><?php echo $contador++; ?></td>
                 
                    <td>
                        <?php echo $row->user_2; ?>
                    </td>
                    <td class="text-center"> <?php echo $row->users_1; ?></td>
                               
                   
                    <td><?php echo $row->doados; ?></td>
                    <td><?php echo $row->entrega; ?></td>
                    <td align="center">
                    <?php 
                        if($row->estado==0){
                            echo "Em analise";
                        }
                        elseif($row->estado==1){
                            echo "Aprovado";
                        }
                        elseif($row->estado==2){
                            echo "Rejeitado";
                        }
                          

                    ?></td>
                </tr>
                
            <?php endforeach; ?>
                <tr>
                    <td colspan="5">Total</td>
                    <td><?php echo $total ?></td>
                </tr>

            <br>
        </tbody>
    </table>


</body>

</html>
