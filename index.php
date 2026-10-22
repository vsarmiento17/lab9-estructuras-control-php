<?php
/*
 * LABORATORIO #9 · Estructuras de control en PHP
 * Sigue el documento del estudiante. Escribe tu código SOLO en las zonas marcadas con TODO.
 * Recuerda: un commit por ejercicio (ej0, ej1, ... css, final).
 */

// ---------- PARTE 0 · TUS DATOS ----------
// TODO 0.1: define las constantes SEMILLA (últimos 3 dígitos de tu cédula, como número),
//           NOMBRE y APELLIDO.
const SEMILLA = 515;
const NOMBRE = "Victor";
const APELLIDO = "Sarmiento";
// TODO 0.2: crea $nombreCompleto, $edad, $dia, $mes, $nota1, $nota2, $nota3, $monto,
//           $esMiembro, $hora, $huella, $descuento y $vacio (fórmulas en el documento).
$nombreCompleto = NOMBRE . " " . APELLIDO;
$edad = 8 + (SEMILLA % 70);
$dia = (SEMILLA % 7) + 1;
$mes = (SEMILLA % 12) + 1;
$nota1 = 40 + (SEMILLA % 61);
$nota2 = 40 + ((SEMILLA * 3) % 61);
$nota3 = 40 + ((SEMILLA * 7) % 61);
$monto = 20 + (SEMILLA % 181);
$esMiembro = (SEMILLA % 2) == 0;
$hora = SEMILLA % 24;
$huella = (SEMILLA * 13 + 91) % 1000;
$descuento = SEMILLA * 0.001;
$vacio = null;

// ---------- EJERCICIO 1 · Boleto de cine (if / elseif / else) ----------
// TODO 1
const PRECIO_NINO = 3.00;
const PRECIO_JOVEN = 4.50;
const PRECIO_ADULTO = 7.00;
const PRECIO_JUBILADO = 3.50;

if ($edad < 12) {
    $categoria = "Niño";
    $precio = PRECIO_NINO;
} elseif ($edad < 18) {
    $categoria = "Joven";
    $precio = PRECIO_JOVEN;
} elseif ($edad < 60) {
    $categoria = "Adulto";
    $precio = PRECIO_ADULTO;
} else {
    $categoria = "Jubilado";
    $precio = PRECIO_JUBILADO;
}
if ($dia == 3) {
    $precio = $precio * 0.5;
    $miercoles = "Sí";
} else {
    $miercoles = "No";
}

// ---------- EJERCICIO 2 · Notas (elseif, ternario, &&) ----------
// TODO 2
$promedio = ($nota1 + $nota2 + $nota3) / 3;
if ($promedio >= 90) {
    $letra = "A";
} elseif ($promedio >= 80) {
    $letra = "B";
} elseif ($promedio >= 70) {
    $letra = "C";
} elseif ($promedio >= 60) {
    $letra = "D";
} else {
    $letra = "F";
}
$estado = ($promedio >= 70) ? "Aprobado" : "Reprobado";
if ($promedio >= 90 && $nota1 >= 80 && $nota2 >= 80 && $nota3 >= 80) {
    $honor = "Sí";
} else {
    $honor = "No";
}
$claseEstado = ($estado == "Aprobado") ? "ok" : "error";

// ---------- EJERCICIO 3 · Día de la semana (switch) ----------
// TODO 3
switch ($dia) {
    case 1: $nombreDia = "Lunes"; break;
    case 2: $nombreDia = "Martes"; break;
    case 3: $nombreDia = "Miércoles"; break;
    case 4: $nombreDia = "Jueves"; break;
    case 5: $nombreDia = "Viernes"; break;
    case 6: $nombreDia = "Sábado"; break;
    case 7: $nombreDia = "Domingo"; break;
    default: $nombreDia = "Desconocido";
}
switch ($dia) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        $tipoDia = "Laboral";
        break;
    case 6:
    case 7:
        $tipoDia = "Fin de semana";
        break;
    default:
        $tipoDia = "Desconocido";
}

// ---------- EJERCICIO 4 · Mes y estación (match) ----------
// TODO 4

// ---------- EJERCICIO 5 · Caja de la tienda (reto integrador) ----------
// TODO 5
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- TODO 0.3: <meta name="lab9-huella" content="..."> con el valor de $huella -->
   <meta name="lab9-huella" content="<?= $huella ?>">
  <title>Lab 9 · Estructuras de control</title>
  <!-- TODO CSS-1: enlaza css/estilos.css (CSS externo) -->
  <!-- TODO CSS-2: agrega un <style> interno con al menos 2 reglas -->
</head>
<body>
  <header>
    <!-- TODO CSS-3: agrega un atributo style (CSS en línea) a este h1 -->
    <h1>Laboratorio #9 · Estructuras de control</h1>
    <p id="autor"><!-- TODO 0.4: "Autor: Nombre Apellido" -->Autor: <?= NOMBRE ?> <?= APELLIDO ?></p>
  </header>

  <!-- TODO 0.5: el id de <main> es "lab9-" + tu apellido en minúsculas, sin tildes (ver documento) -->
  <main id="lab9-sarmiento">

    <section id="ej0">
      <h2>Ejercicio 0 · Tipos de datos</h2>
      <table id="ej0-tipos">
        <thead>
          <tr><th>Variable</th><th>Tipo</th></tr>
        </thead>
        <tbody>
          <!-- TODO 0.6: 5 filas <tr> con el nombre de la variable y su gettype() -->
          <tr><td>$nombreCompleto</td><td><?= gettype($nombreCompleto) ?></td></tr>
        <tr><td>$edad</td><td><?= gettype($edad) ?></td>
        </tr>
        <tr><td>$esMiembro</td><td><?= gettype($esMiembro) ?></td>
        </tr>
        <tr><td>$descuento</td><td><?= gettype($descuento) ?></td>
        </tr>
        <tr><td>$vacio</td><td><?= gettype($vacio) ?></td>
        </tr>
        </tbody>
      </table>
    </section>

    <section id="ej1">
      <h2>Ejercicio 1 · Boleto de cine</h2>
      <p id="ej1-res">Categoría: <?php echo $categoria; ?> | Precio final: B/. <?php echo number_format($precio, 2); ?> | Miércoles 50%: <?php echo $miercoles; ?></p>
    </section>

    <section id="ej2">
      <h2>Ejercicio 2 · Notas</h2>
      <p id="ej2-res" class="resultado <?php echo $claseEstado; ?>">Promedio: <?php echo number_format($promedio, 2); ?> | Letra: <?php echo $letra; ?> | Estado: <?php echo $estado; ?> | Cuadro de honor: <?php echo $honor; ?></p>
    </section>

    <section id="ej3">
      <h2>Ejercicio 3 · Día de la semana</h2>
      <p id="ej3-res">Día: <?php echo $nombreDia; ?> | Tipo: <?php echo $tipoDia; ?></p>
    </section>

    <section id="ej4">
      <h2>Ejercicio 4 · Mes y estación</h2>
      <p id="ej4-res"><!-- TODO 4 --></p>
    </section>

    <section id="ej5">
      <h2>Ejercicio 5 · Caja de la tienda</h2>
      <p id="ej5-monto"><!-- TODO 5 --></p>
      <p id="ej5-descuento"><!-- TODO 5 --></p>
      <p id="ej5-recargo"><!-- TODO 5 --></p>
      <p id="ej5-total"><!-- TODO 5 --></p>
    </section>

  </main>

  <footer id="firma"><!-- TODO 0.7: "Lab 9 · Nombre Apellido · Semilla N" -->
    Lab9 · <?= NOMBRE ?> <?= APELLIDO ?> · Semilla <?= SEMILLA ?>
  </footer>
</body>
</html>
