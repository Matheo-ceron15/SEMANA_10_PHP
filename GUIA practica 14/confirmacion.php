<?php
    require 'clases/tienda.php';
    $Obj_Tienda=new Tienda();
    $Obj_Tienda->Producto=$_POST['cmbProducto'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Tienda</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <?php
        require 'componentes\cabecera.php';
    ?>
    <center>
        <p><strong style="color: green;">CONFIRMACIÓN DE PEDIDO</strong></p>
        <form action="pedido.php" id="frmTienda" name="frmTienda" method="post">
            <table width="700" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td colspan="4"></td>
                </tr>
                <tr>
                    <td width="174"><p>Proucto:</p></td>
                    <td width="31"><p>&nbsp;</p></td>
                    <td width="495" colspan="2" align="left" valing="middle">
                        <input type="text" name="txtProducto" id="txtProducto" value="<?php echo $Obj_Tienda->Producto;?>" readonly><br>
                        <input type="text" name="txtProtector" id="txtProtector" value="<?php echo $Obj_Tienda->Protector;?>" readonly><br>
                        <input type="text" name="txtCargadir" id="txtCargador" value="<?php echo $Obj_Tienda->Cargador;?>" readonly>
                    </td>
                </tr>
                <tr>
                    <td><p>Cantidad:</p></td>
                    <td><p>&nbsp;</p></td>
                    <td colspan="2" align="left" valing="middle">
                        <input type="text" name="txtCantidad" id="txtCantidad" value="<?php echo $_POST['txtCantidad'];?>">
                    </td>
                </tr>
                <tr>
                    <td><p>Total de Compra</p></td>
                    <td><p>&nbsp;</p></td>
                    <td colspan="2" align="left" valing="middle">
                        <input type="text" name="txtTotal" id="txtTotal" readonly value="<?php echo '$ '.$Obj_Tienda->totalizar_compra($_POST['txtCantidad']);?>">
                        <?php 
                            if ($Obj_Tienda->Descuento) {
                                echo 'se agrego un descuento del 10%';
                            }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td colspan="2" align="left" valing="middle">
                        <input type="button" name="com" value="Comprar" onclick="javascript:Comprar()">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>
<script type="text/javascript">
    function Comprar(){
        alert('Su compra se realizó con éxito');
    }
</script>
