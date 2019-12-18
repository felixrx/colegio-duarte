<?php

require('fpdf/fpdf.php');
include("../conexion/conexion2.php");
$conexion=conectar();

class PDF extends FPDF
{
var $widths;
var $aligns;

function SetWidths($w)
{
	//Set the array of column widths
	$this->widths=$w;
}

function SetAligns($a)
{
	//Set the array of column alignments
	$this->aligns=$a;
}

function Row($data)
{
	//Calculate the height of the row
	$nb=0;
	for($i=0;$i<count($data);$i++)
		$nb=max($nb,$this->NbLines($this->widths[$i],$data[$i]));
	$h=5*$nb;
	//Issue a page break first if needed
	$this->CheckPageBreak($h);
	//Draw the cells of the row
	for($i=0;$i<count($data);$i++)
	{
		$w=$this->widths[$i];
		$a=isset($this->aligns[$i]) ? $this->aligns[$i] : 'L';
		//Save the current position
		$x=$this->GetX();
		$y=$this->GetY();
		//Draw the border
		
		$this->Rect($x,$y,$w,$h);

		$this->MultiCell($w,5,$data[$i],0,$a,'true');
		//Put the position to the right of the cell
		$this->SetXY($x+$w,$y);
	}
	//Go to the next line
	$this->Ln($h);
}

function CheckPageBreak($h)
{
	//If the height h would cause an overflow, add a new page immediately
	if($this->GetY()+$h>$this->PageBreakTrigger)
		$this->AddPage($this->CurOrientation);
}

function NbLines($w,$txt)
{
	//Computes the number of lines a MultiCell of width w will take
	$cw=&$this->CurrentFont['cw'];
	if($w==0)
		$w=$this->w-$this->rMargin-$this->x;
	$wmax=($w-2*$this->cMargin)*1000/$this->FontSize;
	$s=str_replace("\r",'',$txt);
	$nb=strlen($s);
	if($nb>0 and $s[$nb-1]=="\n")
		$nb--;
	$sep=-1;
	$i=0;
	$j=0;
	$l=0;
	$nl=1;
	while($i<$nb)
	{
		$c=$s[$i];
		if($c=="\n")
		{
			$i++;
			$sep=-1;
			$j=$i;
			$l=0;
			$nl++;
			continue;
		}
		if($c==' ')
			$sep=$i;
		$l+=$cw[$c];
		if($l>$wmax)
		{
			if($sep==-1)
			{
				if($i==$j)
					$i++;
			}
			else
				$i=$sep+1;
			$sep=-1;
			$j=$i;
			$l=0;
			$nl++;
		}
		else
			$i++;
	}
	return $nl;
}

function Header()
{
    $this->Image('imagenes/cecyte.jpg' , 15 ,12, 32 , 26,'JPG');
	$this->Image('imagenes/letras3.jpg' , 45 ,16, 117 , 20,'JPG');
	
	
	
	
	
	
	$this->Ln(27);
}

}

	


    $num= $_POST['id_c'];
	$strConsulta = "SELECT * FROM alumnos join representante join padres on alumnos.id_c = representante.id_c and alumnos.id_c= padres.id_c where alumnos.id_c =  '$num'";
	$alumno = mysql_query($strConsulta);
	$fila = mysql_fetch_array($alumno);
	

		
$pdf=new PDF('P','mm','A4');
	$pdf->Open();
	$pdf->AddPage();
	$pdf->SetMargins(10,10,10);
	$pdf->Ln(19);

$pdf->SetFont('Arial','',14);
	$pdf->Text(65,40,utf8_decode('"PLANILLA DE INSCRIPCION"'),0,'C', 0);
	$pdf->SetFont('Arial','',12);
	$pdf->Text(65,46,utf8_decode('"PERIODO ESCOLAR 2016-2017"'),0,'C', 0);


	
$pdf->SetFont('Arial','',12);
	$pdf->Text(15,64, utf8_decode('A.- Datos Personales..') ,0,'J');
	$pdf->SetFont('Arial','',9);
	$pdf->Text(15,72, utf8_decode('C.I.: '.utf8_decode($fila['id_c'])) ,0,'J');
	$pdf->Text(22,72, ('________'),0,'C',0);
	$pdf->Text(38,72, ('Apellidos y Nombres:'.(' ').$fila['ap'].(' ').$fila['nb']),0,'C',0);
	$pdf->Text(68,72, ('________________________________________'),0,'C',0);
	$pdf->Text(140,72, ('Fecha de Nacimiento:'.(' ').$fila['fc_n']),0,'C',0);
	$pdf->Text(172,72, ('_________'),0,'C',0);
	


	$pdf->SetFont('Arial','',9);
	$pdf->Text(15,78, utf8_decode('Edad: '.utf8_decode($fila['eda'])) ,0,'J');
	$pdf->Text(24,78, ('_____'),0,'C',0);
	$pdf->Text(35,78, ('Genero: '.$fila['gene']),0,'C',0);
	$pdf->Text(47,78, ('______'),0,'C',0);
	$pdf->Text(60,78, ('Lugar de Nacimiento:'.(' ').$fila['lu_n']),0,'C',0);
	$pdf->Text(91,78, ('___________________________'),0,'C',0);
	$pdf->Text(140,78, ('Entidad Federal:'.(' ').$fila['ent_f']),0,'C',0);
	$pdf->Text(164,78, ('_____________'),0,'C',0);





	$pdf->SetFont('Arial','',9);
	$pdf->Text(15,84, utf8_decode('Estado Civil: '.utf8_decode($fila['esta_ci'])) ,0,'J');
	$pdf->Text(33,84, ('_________'),0,'C',0);
	$pdf->Text(50,84, ('Talla:'.(' ').$fila['ta']),0,'C',0);
	$pdf->Text(59,84, ('______'),0,'C',0);
	$pdf->Text(70,84, ('Peso:'.(' ').$fila['pso']),0,'C',0);
	$pdf->Text(79,84, ('_______'),0,'C',0);
	$pdf->Text(93,84, ('Impedimento Fisico:'.(' ').$fila['impedi_f']),0,'C',0);
	$pdf->Text(122,84, ('_____________________________________'),0,'C',0);


	
	$pdf->SetFont('Arial','',9);
	$pdf->Text(15,90, utf8_decode('Direccion de Habitacion: '.utf8_decode($fila['dir_ha'])) ,0,'J');
	$pdf->Text(50,90, ('__________________________________________________'),0,'C',0);
	$pdf->Text(140,90, ('Municipio:'.(' ').$fila['muni']),0,'C',0);
	$pdf->Text(155,90, ('__________________'),0,'C',0);
	

	$pdf->SetFont('Arial','',9);
	$pdf->Text(15,96, utf8_decode('Parroquia: '.utf8_decode($fila['parro'])) ,0,'J');
	$pdf->Text(30,96, ('___________________________'),0,'C',0);
	$pdf->Text(78,96, ('Telefono de Habitacion:'.(' ').$fila['tel_h']),0,'C',0);
	$pdf->Text(112,96, ('_______________'),0,'C',0);
	$pdf->Text(140,96, ('Telefono Movil:'.(' ').$fila['tel_m']),0,'C',0);
	$pdf->Text(162,96, ('______________'),0,'C',0);



	$pdf->SetFont('Arial','',9);
	$pdf->Text(15,102, utf8_decode('Correo Electronico:'),0,'J');
	$pdf->SetFont('Arial','',11);
	$pdf->Text(43,102, (utf8_decode($fila['corr'])) ,0,'J');
	$pdf->SetFont('Arial','',9);
	$pdf->Text(43,102, ('______________________________________________________'),0,'C',0);
	
	
	$pdf->SetFont('Arial','',9);
	$pdf->Text(140,102, ('Etnia:'),0,'C',0);
	$pdf->SetFont('Arial','',11);
	$pdf->Text(149,102, ($fila['etni']),0,'C',0);
	$pdf->SetFont('Arial','',9);
	$pdf->Text(149,102, ('_____________________'),0,'C',0);





    $pdf->SetFont('Arial','',9);
	$pdf->Text(15,108, utf8_decode('Alergico a algun medicamento: '.utf8_decode($fila['alergi'])) ,0,'J');
	$pdf->Text(59,108, ('________________________________________________________________________'),0,'C',0);
	



$pdf->SetFont('Arial','',12);
	$pdf->Text(15,114, utf8_decode('B.- Datos Academicos.') ,0,'J');
	
	
     
    $pdf->SetFont('Arial','',9);
	$pdf->Text(15,120, utf8_decode('Plantel de Procedencia: '.utf8_decode($fila['plan'])) ,0,'J');
	$pdf->Text(49,120, ('______________________________________________________________________________'),0,'C',0);
	



$pdf->SetFont('Arial','',9);
	$pdf->Text(15,126, utf8_decode('Posee Beca:   '.utf8_decode($fila['be'])) ,0,'J');
	$pdf->Text(34,126, ('___________________________________________________________'),0,'C',0);
	$pdf->Text(140,126, ('Organismo:'.(' ').$fila['org']),0,'C',0);
	$pdf->Text(157,126, ('_________________'),0,'C',0);
	


	

$pdf->SetFont('Arial','',12);
	$pdf->Text(15,134, utf8_decode('C.-Datos del Representante:') ,0,'J');
	

$pdf->SetFont('Arial','',9);
	$pdf->Text(15,140, utf8_decode('Si no es el Padre  o la Madre se requiere autorizacion firmada y con huellas dactilares de uno de los dos y del autorizado') ,0,'J');
	



$pdf->SetFont('Arial','',9);
	$pdf->Text(15,146, utf8_decode('C.I.: '.utf8_decode($fila['cd_r'])) ,0,'J');
	$pdf->Text(22,146, ('________'),0,'C',0);
	$pdf->Text(38,146, ('Apellidos y Nombres:'.(' ').$fila['ap_r'].(' ').$fila['nb_r']),0,'C',0);
	$pdf->Text(68,146, ('________________________________________'),0,'C',0);
	$pdf->Text(140,146, ('Fecha de Nacimiento:'.(' ').$fila['fec_r']),0,'C',0);
	$pdf->Text(172,146, ('_________'),0,'C',0);

$pdf->SetFont('Arial','',9);
	$pdf->Text(15,152, utf8_decode('Edad: '.utf8_decode($fila['eda_r'])) ,0,'J');
	$pdf->Text(24,152, ('_____'),0,'C',0);
	$pdf->Text(35,152, ('Genero: '.$fila['gene']),0,'C',0);
	$pdf->Text(47,152, ('______'),0,'C',0);
	$pdf->Text(60,152, ('Parentesco:'.(' ').$fila['parent']),0,'C',0);
	$pdf->Text(77,152, ('__________'),0,'C',0);
	$pdf->Text(96,152, ('Correo Electronico: '.('').$fila['cor_re']),0,'C',0);
	$pdf->Text(124,152, ('____________________________________'),0,'C',0);



$pdf->SetFont('Arial','',9);
	$pdf->Text(15,158, utf8_decode('Direccion de Habitacion: '.utf8_decode($fila['dir_ha'])) ,0,'J');
	$pdf->Text(50,158, ('__________________________________________________'),0,'C',0);
	$pdf->Text(140,158, ('Municipio:'.(' ').$fila['muni']),0,'C',0);
	$pdf->Text(155,158, ('__________________'),0,'C',0);
	

	$pdf->SetFont('Arial','',9);
	$pdf->Text(15,164, utf8_decode('Parroquia:  '.utf8_decode($fila['parro_r'])) ,0,'J');
	$pdf->Text(30,164, ('___________________________'),0,'C',0);
	$pdf->Text(78,164, ('Telefono de Habitacion: '.(' ').$fila['tel_h_r']),0,'C',0);
	$pdf->Text(112,164, ('_______________'),0,'C',0);
	$pdf->Text(140,164, ('Telefono Movil: '.(' ').$fila['tel_m_r']),0,'C',0);
	$pdf->Text(162,164, ('______________'),0,'C',0);



$pdf->SetFont('Arial','',12);
	$pdf->Text(15,172, utf8_decode('D.-Datos Familiares ') ,0,'J');
	



$pdf->SetFont('Arial','',9);
	$pdf->Text(15,179, utf8_decode('Madre: '.utf8_decode($fila['nb_m'])) ,0,'J');
	$pdf->Text(25,179, ('_________________________________________'),0,'C',0);
	$pdf->Text(98,179, ('C.I.: '.(' ').$fila['cd_m']),0,'C',0);
	$pdf->Text(105,179, ('___________________'),0,'C',0);


	$pdf->Text(140,179, ('Telefono Movil: '.(' ').$fila['tel_m_m']),0,'C',0);
	$pdf->Text(162,179, ('______________'),0,'C',0);


$pdf->SetFont('Arial','',9);
	$pdf->Text(15,184, utf8_decode('Padre: '.utf8_decode($fila['nb_p'])) ,0,'J');
	$pdf->Text(25,184, ('_________________________________________'),0,'C',0);
	$pdf->Text(98,184, ('C.I.: '.(' ').$fila['cd_p']),0,'C',0);
	$pdf->Text(105,184, ('___________________'),0,'C',0);


	$pdf->Text(140,184, ('Telefono Movil: '.(' ').$fila['tel_m_p']),0,'C',0);
	$pdf->Text(162,184, ('______________'),0,'C',0);


   

























$pdf2=new PDF('P','mm','A4');
	$pdf->Open();
	$pdf->AddPage();
	$pdf->SetMargins(10,10,10);
	$pdf->Ln(19);


	
$pdf->SetXY(25, 70);

 

$pdf->SetFont('Arial','',12);
	$pdf->Text(45,45, utf8_decode('COMPROMISO DEL REPRESENTANTE LEGAL') ,0,'J');


	$pdf->SetFont('Arial','',10);
	$pdf->Text(15,60, utf8_decode('YO,____________________________________________') ,0,'J');

     $pdf->SetFont('Arial','',10);
	$pdf->Text(114,60, utf8_decode('C.I.Nº_______________') ,0,'J');

$pdf->SetFont('Arial','',9);
	$pdf->Text(158,60, utf8_decode('por medio de') ,0,'J');

$pdf->SetFont('Arial','',9);
	$pdf->Text(15,66, utf8_decode('la presente me comprometo a cumplir y hacer cumplir por mi Representado(a) los deberes y obligaciones que nos') ,0,'J');




$pdf->SetFont('Arial','',9);
	$pdf->Text(15,71, utf8_decode('la presente me comprometo a cumplir y hacer cumplir por mi Representado(a) los deberes y obligaciones que nos') ,0,'J');


$pdf->SetFont('Arial','',9);
	$pdf->Text(15,76, utf8_decode('la presente me comprometo a cumplir y hacer cumplir por mi Representado(a) los deberes y obligaciones que nos') ,0,'J');

$pdf->SetFont('Arial','',9);
	$pdf->Text(15,82, utf8_decode('la presente me comprometo a cumplir y hacer cumplir por mi Representado(a) los deberes y obligaciones que nos') ,0,'J');

	$pdf->SetFont('Arial','',9);
	$pdf->Text(15,88, utf8_decode('la presente me comprometo a cumplir y hacer cumplir por mi Representado(a) los deberes y obligaciones que nos') ,0,'J');
	

	$pdf->SetFont('Arial','',9);
	$pdf->Text(15,94, utf8_decode('la presente me comprometo a cumplir y hacer cumplir por mi Representado(a) los deberes y obligaciones que nos') ,0,'J');



$pdf->SetFont('Arial','',9);
	$pdf->Text(15,100, utf8_decode('la presente me comprometo a cumplir y hacer cumplir por mi Representado(a) los deberes y obligaciones que nos') ,0,'J');


	$pdf->SetFont('Arial','',9);
	$pdf->Text(15,106, utf8_decode('la presente me comprometo a cumplir y hacer cumplir por mi Representado(a) los deberes y obligaciones que nos') ,0,'J');





	$pdf->SetFont('Arial','',9);
	$pdf->Text(15,135, utf8_decode('________________________') ,0,'J');



	$pdf->SetFont('Arial','',9);
	$pdf->Text(17,139, utf8_decode('Firma Representante Legal') ,0,'J');



	$pdf->SetFont('Arial','',9);
	$pdf->Text(75,135, utf8_decode('_______________________') ,0,'J');

  $pdf->SetFont('Arial','',9);
	$pdf->Text(92,139, utf8_decode('C.I.Nº') ,0,'J');

	$pdf->SetFont('Arial','',9);
	$pdf->Text(126,135, utf8_decode('____________     _____________') ,0,'J');


$pdf->SetFont('Arial','',9);
	$pdf->Text(139,139, utf8_decode('Huella Dactilares') ,0,'J');





$pdf->SetFont('Arial','',12);
	$pdf->Text(60,155, utf8_decode('COMPROMISO DEL ESTUDIANTE(A)') ,0,'J');




	$pdf->SetFont('Arial','',10);
	$pdf->Text(15,172, utf8_decode('YO,____________________________________________') ,0,'J');

     $pdf->SetFont('Arial','',10);
	$pdf->Text(114,172, utf8_decode('C.I.Nº_______________') ,0,'J');

$pdf->SetFont('Arial','',9);
	$pdf->Text(155,172, utf8_decode('Estudiante(a)') ,0,'J');



	$pdf->SetFont('Arial','',9);
	$pdf->Text(15,177, utf8_decode('de la escuela Técnica de Comercio y Servicios Administrativos "Francisco Jose Duarte" me Comprometo a cumplir') ,0,'J');

 $pdf->SetFont('Arial','',9);
	$pdf->Text(15,182, utf8_decode('de la escuela Técnica de Comercio y Servicios Administrativos "Francisco Jose Duarte" me Comprometo a cumplir') ,0,'J');
	$pdf->SetFont('Arial','',9);
	$pdf->Text(15,187, utf8_decode('de la escuela Técnica de Comercio y Servicios Administrativos "Francisco Jose Duarte" me Comprometo a cumplir') ,0,'J');





$pdf->SetFont('Arial','',9);
	$pdf->Text(15,213, utf8_decode('________________________') ,0,'J');



	$pdf->SetFont('Arial','',9);
	$pdf->Text(17,217, utf8_decode('Firma Representante Legal') ,0,'J');



	$pdf->SetFont('Arial','',9);
	$pdf->Text(75,213, utf8_decode('_______________________') ,0,'J');

  $pdf->SetFont('Arial','',9);
	$pdf->Text(92,217, utf8_decode('C.I.Nº') ,0,'J');

	$pdf->SetFont('Arial','',9);
	$pdf->Text(126,213, utf8_decode('____________     _____________') ,0,'J');


$pdf->SetFont('Arial','',9);
	$pdf->Text(139,217, utf8_decode('Huella Dactilares') ,0,'J');







$pdf->SetFont('Arial','',9);
	$pdf->Text(15,237, utf8_decode('Funcionario Receptor de la Inscripcion:') ,0,'J');

$pdf->SetFont('Arial','',9);
	$pdf->Text(80,237, utf8_decode('_____________________________________________________') ,0,'J');

$pdf->SetFont('Arial','',9);
	$pdf->Text(15,243, utf8_decode('C.I.Nº________________________') ,0,'J');



	$pdf->SetFont('Arial','',9);
	$pdf->Text(80,243, utf8_decode('Fecha: _____________') ,0,'J');


	$pdf->SetFont('Arial','',9);
	$pdf->Text(122,243, utf8_decode('Firma:') ,0,'J');





$pdf->Output('Comprobante.pdf','D'); 
?>
