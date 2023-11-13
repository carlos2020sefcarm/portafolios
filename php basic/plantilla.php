<!DOCTYPE html>
<html lang="es">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>plantila de documento html5</title>
    <meta name="description" content="plantilla basica de html para introducir los conceptos basicos y como se relacionan">
    <meta name="keywords" content="html,php,semántica, formularios, css, javascript, apariencia, contenido"> 
    <meta name="autor" content="carlos">
    <meta name="academia" content="multiformación">
    <meta name="robots" content="index, follow">
    <!-- comportamemientos de los bots -->
    <meta name="copyright" content="carlos">

</head>
<body>
    <header>
        <h1>plantilla de documento html5</h1>
        <img src="https://multiformacion.es/wp-content/uploads/2021/07/cropped-logo-multiformacion-2.png" alt="logotipo academia multiformacion">
        <hr>
    </header>    
    <nav>
        <ul>
            <li><a href="inicio.html">inicio</a></li>
            <li><a href="productos.html">productos</a></li>
            <li><a href="qienessomos.html">quienes somos</a></li>
            <li><a href="contact.html">contacto</a></li>
        </ul>
    </nav>
    
    <main>
        <?php
        function tabla ($filas,$columnas)
        {
            //bucle externo(filas)
            echo "<table border='1'>";
            for ($i=1;$i<=$filas; $i++)
            {

            echo "<tr>"; for($k=1; $k<$columnas; $k++)
                {  

                    echo "<td> fila : " . $i . " columna : ". $k . "</td>";
                }
             echo "</tr>";   
            }
            echo "</table>";
        }
        $filas = 30;
        $columnas = 20;
        tabla ($filas,$columnas);
        echo "<hr>";
        tabla(10,7);
        echo "<hr>";
        tabla(9,3);
        echo "<hr>";


        ?>
    </main>
    
    <section>
        <ol>
            <li>mercurio</li>
            <li>venus</li>
            <li>tierra</li>
            <li>marte</li>
            <li>jupiter</li>
            <li>saturno</li>
            <li>urano</li>
            <li>neptuno</li>
        </ol>
    </section>
        
    <section>
            
            <article>
                <table>
                    <thead>
                        <tr>
                            <th>nombre</th>
                            <th>email</th>
                            <th>telefono</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>jose</td>
                        <td>jose@gmail.com</td>
                        <td>96888598</td>
                    </tr>
                    <tr>
                        <td>juan</td>
                        <td>juan@gmail.com</td>
                        <td>96898598</td>
                    </tr>
                    <tr>
                        <td>ana</td>
                        <td>ana@gmail.com</td>
                        <td>96328598</td>
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr>
                        <td colspan="3"> alumnos de multiformacion</td>
                    </tr>
                </tfoot> 
                </table>
            </article>
            
            <article>
                <form action="procesa.php" method="post">
                    <label for="nombre">nombre</label><br>
                    <input type="text" id="nombre" name="nombre" required></input><br><br>
                    <label for="edad">edad</label><br>
                    <input type="number" step =1 id="edad" name="edad" required></input><br><br>
                    <label for="email">correo electronico</label><br>
                    <input type="email" id="email" name="email" required></input><br><br>
                    <input type="submit" value="enviar"></input>
                    <input type="reset" value="borrar"></input>
                </form>
            </article>

    </section>
    
    <aside>

    </aside>


    <footer>
        <blockquote></blockquote>
    </footer>
</body>
</html>