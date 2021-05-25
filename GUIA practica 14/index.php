<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Mi tienda</title>
</head>
<body>
    <?php
        require 'componentes\cabecera.php';
    ?>
    <center>
        <form action="confirmacion.php" id="frmTienda" name="frmTienda" method="post" enctype="multipart/form-data" target="_self">
            <table width="900" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td width="97" align="right" valign="bottom"><p>Producto:</p></td>
                    <td width="23" align="left" valign="middle">&nbsp;</td>
                <td width="567" align="left" valign="bottom">
                    <select name="cmbProducto" id="cmbProducto" onchange="javascript:CambiarImagen();">
                        <option value="ninguno">Seleccione</option>
                        <option value="Galaxy S6">Samsung Galaxy S6 - $790</option>
                        <option value="iPhone 6S">iPhone 6S - $890</option>
                        <option value="xiaomi redmi not 9"> Xiaomi redmi not 9 - $210</option>
                        <option value="Xiaomi Poco X3 NFC">Xiaomi Poco X3 NFC - $360</option>
                        <option value="Samsung galaxi S20">Samsung Galaxi S20 Ultra - $960</option>
                        <option value="Samsung Galaxy A51">Samsung Galaxy A51 Blanco - $1000</option>
                    </select>
                </td>
                    <td width="308" rowspan="2" align="center" valign="middle">
                        <img id="FotoProducto" src="imagenes/noimagen.jpg" width="250" height="250">
                    </td>
                </tr>
                <tr>
                    <td heigth="290" align="right" valign="top"><p>Cantidad:</p></td>
                <td></td>
                    <td valign="top"><input type="number" name="txtCantidad" id="txtCantidad" min="1" max="10" value="1"></td>
                </tr>
               

                <tr>
                    <td width="97" align="right" valign="bottom"><p>Cargador:</p></td>
                    <td width="23" align="left" valign="middle">&nbsp;</td>
                <td width="567" align="left" valign="bottom">
                    <select name="cmbCargador" id="cmbCargador" onchange="javascript:CambiarImagen();">
                        <option value="ninguno">Seleccione</option>
                        <option value="cargador de carga normal">Cargador de carga normal - $15</option>
                        <option value="cargador de carga rapida">Cargador de carga rapida - $20</option>
                    </select>
                </td>
                    <td width="308" rowspan="2" align="center" valign="middle">
                        <img id="FotoProductos" src="imagenes/noimagen.jpg" width="200" height="200">
                    </td>
                </tr>
                
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>

                <tr>
                    <td width="97" align="right" valign="bottom"><p>Protector:</p></td>
                    <td width="23" align="left" valign="middle">&nbsp;</td>
                <td width="567" align="left" valign="bottom">
                    <select name="cmbProtector" id="cmbProtector" onchange="javascript:CambiarImagen();">
                        <option value="ninguno">Seleccione</option>
                        <option value="protector de plastico">Protector de plastico - $10</option>
                        <option value="protector de silicona">Protector de silicona - $15</option>
                        <option value="protector de aluminio">Protector de aluminio - $25</option>
                    </select>
                </td>
                    <td width="308" rowspan="2" align="center" valign="middle">
                        <img id="FotoProtectores" src="imagenes/noimagen.jpg" width="200" height="200">
                    </td>
                </tr>
                
                <tr>
                    <td colspan="4"></td>
                </tr>
                    <td></td>
                    <td></td>
                    
                <tr>
                <td></td>
                    <td colspan="2" align="left" valign="middle">   
                    <p>¿Aplicar descuento del 10%?<input type="checkbox" name="descuento" value="descuento" ></p> <br>
                        <input type="submit" name="ped" value="Realizar Pedido">
                        <input type="button" name="res" value="Reestablecer" onclick="javascript:location.reload()">
                    </td>
                </tr>
            </table>       
        </form>
    </center>
    <script type="text/javascript">
        function CambiarImagen(){
            var Cargadores = document.getElementById('cmbCargador').value;
            var Seleccionado = document.getElementById('cmbProducto').value;
            var protector =  document.getElementById('cmbProtector').value;
            
            //parte del cargador
            if(Cargadores == 'cargador de carga rapida'){
                document.getElementById('FotoProductos').src='imagenes/rapida.jpg';
            }

            else if(Cargadores == 'cargador de carga normal'){
                document.getElementById('FotoProductos').src='imagenes/normal.jpg';
            }

            //parte de telefonos
            else if(Seleccionado=='Galaxy S6'){
                document.getElementById('FotoProducto').src='imagenes/galaxy.jpg';
            }
            else if(Seleccionado=='iPhone 6S'){
                document.getElementById('FotoProducto').src='imagenes/iphone.jpg';
            }//mi aporte
            else if(Seleccionado == 'Xiaomi Poco X3 NFC'){
                document.getElementById('FotoProducto').src='imagenes/telefono.jpg';
            }
            else if(Seleccionado == 'xiaomi redmi not 9'){
                document.getElementById('FotoProducto').src='imagenes/xiaomi.jpg';
            }
            else if (Seleccionado == 'Samsung galaxi S20'){
                document.getElementById('FotoProducto').src='imagenes/celular.jpg';
            }
            else if(Seleccionado == 'Samsung Galaxy A51'){
                document.getElementById('FotoProducto').src='imagenes/a51.jpg';
            }
        
            //parte del protector
            else if (protector == 'protector de plastico') {
                document.getElementById('FotoProtectores').src='imagenes/plastico.jpg';
            }
            else if (protector == 'protector de silicona') {
                document.getElementById('FotoProtectores').src='imagenes/silicona.jpg';
            }
            else if (protector == 'protector de aluminio') {
                document.getElementById('FotoProtectores').src='imagenes/aluminio.jpg';
            }

            else{   
                document.getElementById('FotoProducto').src='imagenes/noimagen.jpg';
                document.getElementById('FotoProductos').src='imagenes/noimagen.jpg';
                document.getElementById('FotoProtectores').src='imagenes/noimagen.jpg';
            }
        }
    </script>
</body>
</html>