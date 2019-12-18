<?php
//Incluimos la libreria fpdf
require("fpdf/fpdf.php");
//Incluimos el archivo de conexion a la base de datos
include("conexion/conexion_reporte2.php");
//Almacenamos el curso que haya elegido en el formulario

 
//creamos una clase para ocupar el encabezado y pie de pagina en el PDF
class PDF extends FPDF
{
//El metodo para crear el encabezado
function Header()
{
    $this->SetFont('Arial','B',8); //Tipo de letra, estilo y tamaño
    $this->Cell(160,10,'LISTA DE ALUMNOS',0,1,'C'); //Titulo del reporte
 
//Encabezado de la tabla
    $this->Cell(20,10,'Cedula',1,0,'C'); //ancho,alto,dato,borde,salto,alineacion centrado**
    $this->Cell(30,10,'Nombres',1,0,'C'); //**
    $this->Cell(30,10,'Apellidos',1,0,'C'); //**
    $this->Cell(50,10,'Correo Electronico',1,0,'C'); //**
    $this->Cell(30,10,'Telefono',1,1,'C'); //**
   
 
}
 
// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-30);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
 
    $this->Cell(0,0,'Pag '.$this->PageNo().'/{nb}',0,0,'C');
}
}
 
//ahora instanseamos un objeto de la clase fpdf para empezar a armar el PDF con orientacion vertical, margenes en milimetros y tamaño de papel carta
$pdf = new PDF('P','mm','Letter');
 $pdf->SetMargins(30,10,10);
//Utilizamos el siguiente metodo para cargar una nueva pagina en el PDF
$pdf->AddPage();
$pdf->AliasNbPages();
//Asiganamos el tipo de fuente, el estilo y el tamaño de letra
$pdf->SetFont('Arial','',10);
//Definimos el color de la letra
$pdf->SetTextColor(0x00,0x00,0x00);
 
//generamos la consulta en la siguiente variable
//obtenemos todos los datos de la tabla alumnos segun el curso al que pertenecen
$listado = mysql_query("SELECT * FROM alumnos ");
 
 
//Ahora mediante un bucle construimos el reporte 
//Pero primero validemos si existen alumnos en ese curso nos cargue los datos
if(mysql_num_rows($listado)>0){
while($fila = mysql_fetch_array($listado)){
   
 $pdf->Cell(20,5,$fila['id_c'],1,0); //**
  $pdf->Cell(30,5,$fila['nb'],1,0); //**
   $pdf->Cell(30,5,$fila['ap'],1,0); //**
    $pdf->Cell(50,5,$fila['corr'],1,0); //**
     $pdf->Cell(30,5,$fila['tel_h'],1,0); //**



 $pdf->Ln(); //Hacer el salto de linea para la siguiente fila del registro
 
}
}
else{
$pdf->Cell(0,10,"No existen registros",0,0,"C");
}
//Ejecutar el pdf en una nueva pestaña y al guardarlo sugiere el nombre de archivo
$pdf->Output('ReporteGeneral.pdf','D'); 
?>