$(document).on('ready',Iniciar);

function Iniciar()
{

    $varReportes=$('#vreportes');
    $varContratos=$('#vcontratos');
    $varInventario=$('#vinventario');

	$varReportes.hide();
	$varContratos.hide();
	$varInventario.hide();

	$('#breportes').on('click',reportes1);
	$('#bcontratos').on('click',contratos1);
	$('#binventario').on('click',inventario1);
	
}


function reportes1()
{
	$varReportes.show();
	$varContratos.hide();	
	$varInventario.hide();
}

function contratos1()
{
	$varReportes.hide();
	$varContratos.show();	
	$varInventario.hide();
}

function inventario1()
{
	$varReportes.hide();
	$varContratos.hide();	
	$varInventario.show();
}


