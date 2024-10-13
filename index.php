<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">
    <link rel="stylesheet" href="./style.css">
</head>

<body>

    <header>
        <h1>Negocio Internacional</h1>
        <div>
            <a href="./index.php">Inicio</a>
            <a href="./pages/Quienes-somos.html">Quienes somos</a>
            <a href="./pages/Contacto.html">Contacto</a>
        </div>
    </header>
    <br><br>

    <div class="container">
        <h2>Detalles de las Empresas</h2>

        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="./Img/Burlington.jpg" alt="Burlington">
                    <div>
                        <h3>Burlington</h3>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="Img/Macys.jpeg" alt="Macys">
                    <div>
                        <h3>Macys</h3>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="Img/Marshalls.webp" alt="Mashall">
                    <div>
                        <h3>Mashall</h3>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="Img/samsung.jpeg" alt="Samsung">
                    <div>
                        <h3>Samsung</h3>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="Img/Apple.jpeg" alt="Apple">
                    <div>
                        <h3>Apple</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Calculadora de Edad de la Empresa -->
<div class="Calculadora">
    <h2>Calcula la edad de tu empresa</h2>
    <form method="POST">
        <label for="fecha_creacion">Fecha de creación de la empresa:</label>
        <input type="date" id="fecha_creacion" name="fecha_creacion" required> <br><br>
        <input type="submit" name="calcular_edad" value="Calcular Edad">
    </form>

    <div class="resultado-container">
        <?php
        if (isset($_POST['calcular_edad'])) {
            $fechaCreacion = $_POST['fecha_creacion'];
            $fechaActual = date("Y-m-d");

            $edad = date_diff(date_create($fechaCreacion), date_create($fechaActual))->y;

            echo "<p class='resultado'>La empresa tiene $edad años.</p>";
        }
        ?>
    </div>
</div>

<!-- Calculadora de Inversión -->
<div class="Calculadora">
    <h2>Calculadora de Inversión</h2>
    <form method="POST">
        <label for="cantidad_inversion">Cantidad a Invertir:</label>
        <input type="number" id="cantidad_inversion" name="cantidad_inversion" required> <br><br>

        <label for="empresa">Selecciona una Empresa:</label>
        <select id="empresa" name="empresa" required>
            <option value="burlington">Burlington (Retorno 5% anual)</option>
            <option value="macys">Macys (Retorno 7% anual)</option>
            <option value="marshalls">Marshalls (Retorno 6% anual)</option>
            <option value="samsung">Samsung (Retorno 8% anual)</option>
            <option value="apple">Apple (Retorno 10% anual)</option>
        </select> <br><br>

        <label for="tiempo">Tiempo de Inversión (en años):</label>
        <input type="number" id="tiempo" name="tiempo" required> <br><br>

        <input type="submit" name="calcular_inversion" value="Calcular Retorno">
    </form>

    <div class="resultado-container">
        <?php
        if (isset($_POST['calcular_inversion'])) {
            $cantidadInversion = $_POST['cantidad_inversion'];
            $empresa = $_POST['empresa'];
            $tiempo = $_POST['tiempo'];

            $retornos = [
                "burlington" => 0.05,
                "macys" => 0.07,
                "marshalls" => 0.06,
                "samsung" => 0.08,
                "apple" => 0.10,
            ];

            $tasaRetorno = $retornos[$empresa];
            $totalRetorno = $cantidadInversion * pow((1 + $tasaRetorno), $tiempo);
            $ganancia = $totalRetorno - $cantidadInversion;

            echo "<p class='resultado'>Has invertido $$cantidadInversion en $empresa por $tiempo años.</p>";
            echo "<p class='resultado'>El retorno de tu inversión es: $$ganancia.</p>";
            echo "<p class='resultado'>El total que recibirás es: $$totalRetorno.</p>";
        }
        ?>
    </div>
</div>


</div>
    </div>
    <div class="footer">
        <p>Todos los derechos reservados © KM</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="./Main.js"></script>

</body>

</html>