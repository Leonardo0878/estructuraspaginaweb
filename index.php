<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina web </title>
    <style>
        /* Estilo CSS aquí */
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #333;
            border-bottom: 2px solid #ccc;
            padding-bottom: 5px;
            margin-bottom: 10px;
        }
        .if-definition,
        .switch-definition,
        .while-definition,
        .for-definition,
        .foreach-definition {
            background-color: #f0f9ff;
            padding: 10px;
            border-radius: 5px;
            margin: 0 auto; /* Centra las definiciones */
            width: 80%; /* Ancho máximo de las definiciones */
        }
        .code {
            font-family: monospace;
            background-color: #f4f4f4;
            padding: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Descripción paso a paso y las estructuras y aplicaciones de setencias If, Switch ,While ,For y For Each</h1>
        <!-- if-->
        <h2>if</h2>
        <div class="if-definition">
            <p>La sentencia <strong>if</strong> se usa para tomar decisiones dependiendo de las condiciones ya que esta setencia los evalúa.</p>
            <p> <strong>Descripción: </strong> La sentencia if siempre evalúa , si el resultado es verdadero se  ejecuta solamente el bloque de setencia
             ( setencia_1) y solamente  si el resultado es falso se la valua la expreción (setencia_2) asi como se muestra en los ejemplos ya que en el primer 
             ejemplo es verdadero  y en el segundo ejemplo es falso.
            </p>
            <p><strong>Sintaxis if :</strong></p>
            <pre class="code">
                if (condición) {
                    // código a ejecutar si la condición es verdadera
                } else {
                    // código a ejecutar si la condición es falsa
                }
            </pre>
            <p><strong>construcción if :</strong>else se puede extender añadiendo la instrucción elseif </p>
            <pre class="code">
            if (condición_1) {
            // código a ejecutar si la condición_1 es verdadera
            } elseif (condición_2) {
            // código a ejecutar si la condición_1 es falsa y la condición_2 es verdadera
            } elseif (condición_3) {
            // código a ejecutar si la condición_1 y la condición_2 son falsas y 
            la condición_3 es verdadera
             } else {
            // código a ejecutar si ninguna de las condiciones anteriores es verdadera
            }
            </pre>
            <p><strong>Ejemplos:</strong></p>
            <pre class="code">
                $variable = 678;
                if ($variable > 500) {
                    (setencia_1)echo "El número es mayor que 500.";
                } else {
                   (setencia_2) echo "El número no es mayor que 500.";
                }
            </pre>
            <pre class="code">
                $promedio = 60;
                if ($promedio > 70 ) {
                    echo "El alumno paso la materia.";
                } else {
                    echo "El alumno no paso la materia.";
                }
            </pre>
        </div>
        <!-- Definición de switch -->
        <h2>switch</h2>
        <div class="switch-definition">
            <p>La sentencia <strong>switch</strong>  evalúa una expresión y ejecuta código según el valor de la expresión aparte de que 
            la sentencia switch equivale ala construcción  if y elseif ya que las expresiones son comparaciones de igualdad de las mismas 
            expresiones con valores distintos</p>
            <p><strong>Descripción:</strong>La expresión dentro de este bloque  se evalúa una vez y se compara con los valores de cada case si
             se encuentra una comparación o coincidencia , se ejecuta el bloque de código correspondiente 
            ,break se usa para salir del switch después de ejecutar un caso ,
             mayormente el default se ejecuta si no hay coincidencias y no es necesaria en los siguientes ejemplos se mostrara el uso </p>
            <p><strong>Sintaxis switch :</strong></p>
            <pre class="code">
                switch (expresión) {
                    case primero:
                        // código a ejecutar si la expresión coincide con primero
                        break;
                    case segundo:
                        // código a ejecutar si la expresión coincide con segundo
                        break;
                    default:
                        // código a ejecutar si la expresión no coincide con ningún caso
                        break;
                }
            </pre>
            <pre class="code">
                
            </pre>
            <p><strong>Ejemplos:</strong></p>
            <pre class="code">
                $dia = "Sabado";
                switch ($dia) {
                    case "Miercoles":
                        echo "Hoy es Miercoles.";
                        break;
                    case "Viernes":
                        echo "Hoy es Viernes.";
                        break;
                    default:
                        echo "Hoy no es Miercoles ni Viernes.";
                        break;
                }
            </pre>
            <pre class="code">
                        $lugar= 3;

                        switch ($lugar) 
                 case 1:
                        echo " 1lugar seleccionada";
                        break;
                 case 2:
                        echo " 2lugar seleccionada";
                        break;
                 case 3:
                       echo " 3lugar seleccionada";
                       break;
                 default:
                       echo "No lugar ";              
            </pre>
        </div>
        <!-- while -->
        <h2>while</h2>
        <div class="while-definition">
            <p>La sentencia <strong>while</strong> se usa para ejecutar un bloque de codigo que ase que repita 
             mientras la condición que se especifica sea verdadera.</p>
            <p><strong>Descripción:</strong>La expresión evalúa al principio de cada iteración ,si el resultado es verdadero se ejecuta el 
            bloque de setencias y si el resultado es falso el bucle se termina por ese motivo siempre es importante tener cuidado en que 
            la expresion deje de cumplirse ya que si no seria asi , el bucle nunca terminaría en los siguientes ejemplos se mostrara </p>
            <p><strong>Sintaxis while:</strong></p>
            <pre class="code">
                while (condición) {
                    // código a ejecutar mientras la condición sea verdadera
                }
            </pre>
            <p><strong>Ejemplos:</strong></p>
            <pre class="code">
                $suma = 0;
                $numero = 10;
                while ($numero <= 100) {
                      $suma += $numero;
                    $numero++;
            }
            echo "La suma de los primeros 100 numeros es:",$suma;
            </pre>
            <pre class="code">
                $f = 0;
                while ($f < 20) {
                    echo "El valor de f es:",$f,"<>";
                    $f++;
                }
            </pre>
        </div>
        <!-- for -->
        <h2>for</h2>
        <div class="for-definition">
            <p>La sentencia <strong>for</strong> se usa para la creación de un bucle que ejecuta un bloque de código con un número específico de veces.</p>
            <p><strong>Descripción:</strong>La expresión inicial evalúa siempre y la expresión final evalua al principio de cada iteración una cosa 
            que sucede en los ejemplos es que si el resultado es verdadero se ejecuta el bloque de la setencia y la expresión de paso y se evalúa 
            nuevamente la expresión final ya que el resultado si es falso el bucle se termina lo mismo pasa con los ejemplos</p>
            <p><strong>Sentencias for:</strong></p>
            <pre class="code">
                for (inicio ; condición; incrementación ) {
                    // código a ejecutar en cada iteración del bucle
                }
            </pre>
            <p><strong>Ejemplos:</strong></p>
            <pre class="code">
                for ($i = 0; $i < 20; $i++) {
                    echo "El valor de i es: $i<br>
                }
            </pre>
            <pre class="code">
                $suma = 0;
                 for ($i = 1; $i <= 10; $i++) {
                  $suma += $i;
                 }
                 echo "La suma de los primeros 10 números
            </pre>
        </div>
        <!-- Definición de foreach -->
        <h2>foreach</h2>
        <div class="foreach-definition">
            <p>La sentencia <strong>foreach</strong> se usa para iterar sobre matrices y objetos aparte y es muy útil 
            para recorrer matrices cuyo tamaño se desconoce o matrices cuyos indices no son correlativo o numéricos.</p>
            <p><strong>Descripción:</strong>Lo que ase esta setencia es implica recorrer un iterable y utilizar una variable para almacenar 
            o guardar  cada valor del iterable en cada iteración como los ejemplos de los numeros Y nombres que se meustra </p>
            <p><strong>Setencias foreach:</strong> </p>
            <pre class="code">
                foreach ($array as $valor) {
                    // código a ejecutar para cada elemento del array
                }
            </pre>
            <p><strong>Ejemplos:</strong></p>
            <pre class="code">
            $frutas = array("Mandarina", "Sandia", "Melon ", "Fresa");
              foreach ($frutas as $fruta) {
            echo $fruta , "<br>";
            }
            </pre>
            <pre class="code">
            $nombres = array("Juan", "Joel", "Pepito", "David");
              foreach ($nombres as $nombres) {
            echo $nombres , "<br>";
            }
            </pre>
        </div>
    </div>
</body>
</html>