<?php

require('fpdf/fpdf.php');
require('conexionReport.php');

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

	$this->Image('./imagen/logo1.jpg',20,8,20);
	$this->SetFont('Times','B',12);
	$this->Text(45,15,'MANCOMUNIDAD DE MUNICIPIOS DE LA CUENCA DEL RIO NARANJO',0,0,'C');
	$this->SetFont('Times','B',20);
	$this->Text(80,22,'"MANCUERNA"',0,0,'C');
	$this->SetFont('Times','B',10);
	$this->Text(85,26,'9na. Calle A, lote No. 24 Zona 3',0,0,'C');
	$this->Text(90,29,'San Marcos, San Marcos',0,0,'C');
	$this->Text(95,32,'Telefono: 7760 4116',0,0,'C');
	$this->Ln(30);
	
}

function Footer()
{
	session_start();

	$this->SetY(-35);
	date_default_timezone_set('America/Guatemala');
	$this->SetFont('Arial','',8);
	$this->Cell(35,4,"USUARIO: ".$_SESSION['user'],1,1,'C');
	$this->Cell(76,4,"FECHA DE IMPRESION: ".date('j-F-Y, g:i a'),1,1,'C');
	$this->SetFont('Times','B',14);
	$this->Cell(0,10,'Pagina '.$this->PageNo(),0,0,'C');
}

}

	$con = new DB;

	$pdfMancuerna=new PDF('P','mm','Letter');
	$pdfMancuerna->Open();
	$pdfMancuerna->AddPage();
	$pdfMancuerna->SetMargins(20,20,20,20);
	$pdfMancuerna->Ln(10);
 	$pdfMancuerna->Cell(85);
 	$pdfMancuerna->SetFont('Arial','',20);
 	$pdfMancuerna->Cell(20,5,'REPORTE DE EMPLEADOS',0,1,'C');
	$pdfMancuerna->Ln(5);

	$pdfMancuerna->SetWidths(array(50,40,40,40,40,40));
	$pdfMancuerna->SetFont('Arial','B',11);
	$pdfMancuerna->SetFillColor(2,157,116);
  $pdfMancuerna->SetTextColor(0);

		for($i=0;$i<1;$i++)
			{

$pdfMancuerna->Row(array('CODIGO','NOMBRES','APELLIDOS','CARGO'));
			}

	$ingreso = $con->conectar();
	$strConsulta = "SELECT cui,e.primernom as Pnombre,e.segnom as Snombre,e.primape as Papellido,e.segape as Sapellido,cargo from login inner join empleado e on e.cui=Empleado_cui";

	$ingreso = mysql_query($strConsulta);
	$numfilas = mysql_num_rows($ingreso);

	for ($i=0; $i<$numfilas; $i++)
		{
			$fila = mysql_fetch_array($ingreso);
			$pdfMancuerna->SetFont('Arial','',10);
			$num = $i + 1;
			if($i%2 == 1)
			{
				$pdfMancuerna->SetFillColor(229,229,229);
    			$pdfMancuerna->SetTextColor(0);
    			$pdfMancuerna->Row(array($fila['cui'],$fila['Pnombre'].' '.$fila['Snombre'],$fila['Papellido'].' '.$fila['Sapellido'],$fila['cargo']));
			}
			else
			{
				$pdfMancuerna->SetFillColor(255,255,255);
    		$pdfMancuerna->SetTextColor(0);
        $pdfMancuerna->Row(array($fila['cui'],$fila['Pnombre'].' '.$fila['Snombre'],$fila['Papellido'].' '.$fila['Sapellido'],$fila['cargo']));
			}
		}

$pdfMancuerna->Output();
?>
