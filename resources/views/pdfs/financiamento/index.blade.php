<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">

    <title>ANGOCARE - FINANCIAMENTOS</title>
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
        <h3 class="tema">Financiamentos</h3>
    </div>

    <table class="table table-striped  table-bodered table-hover"  border="1" width="100%" style="border-collapse: collapse;">
        <thead>
            <tr>
                <th width="3px">Nº</th>
              
                <th>Usuario</th>
                <th>Valores</th>
                <th>Categoria</th>
                {{-- <th>Motivo</th> --}}
                {{-- <th>Estado</th>--}}
                <th>Estado</th> 

            </tr>
        </thead>
        <tbody >

            <?php $contador = 1; ?>
            <?php foreach ($financiamentos as $row) : ?>

                <tr align="center">
                    <td align="center"><?php echo $contador++; ?></td>
                    <td align="center"><?php echo $row->usuario ?></td>
                    <td align="center"><?php echo $row->valores ?></td>
                    <td align="center"><?php echo $row->categoria ?></td>
                    
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
                    <td colspan="4">Total</td>
                    <td><?php echo $total ?></td>
                </tr>

            <br>
        </tbody>
    </table>


</body>

</html>
