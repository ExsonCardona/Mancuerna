$(document).on('ready',Iniciar);

function Iniciar()
{
	$varDatosPersonales=$('#vempleado')
	$varConyuge=$('#vconyuge');
	$varProfesion=$('#vprofesion');
	$varContrato=$('#vcontrato');
	$varExpediente=$('#vexpediente');
	$varBienes=$('#vbienes');
	$varTarjeta=$('#vtarjeta');
	$varTraslado=$('#vtraslado');
    $varBajabienes=$('#vbajabienes');





	$varDatosPersonales.show();
	$varConyuge.hide();	
	$varProfesion.hide();
	$varContrato.hide();
	$varExpediente.hide();
	$varBienes.hide();
	$varTarjeta.hide();
	$varTraslado.hide();
	$varBajabienes.hide();


	$('#bempleado').on('click',empleado1);
	$('#bconyuge').on('click',conyuge1);
	$('#bprofesion').on('click',profesion1);
	$('#bcontrato').on('click',contrato1);
	$('#bexpediente').on('click',expediente1);
	$('#bbienes').on('click',bienes1);
	$('#btarjeta').on('click',tarjeta1);
	$('#btraslado').on('click',traslado1);
	$('#bbaja').on('click',bajabienes1);
	$('#bcon').on('click',conyuge2);

	
}
function bajabienes1(){
	$varBienes.hide();
	$varTarjeta.hide();
	$varTraslado.hide();
	$varBajabienes.show();

}
function traslado1(){
	$varBienes.hide();
	$varTarjeta.hide();
	$varTraslado.show();
	$varBajabienes.hide();


}

function bienes1()
{
	$varBienes.show();
	$varTarjeta.hide();	
	$varTraslado.hide();
	$varBajabienes.hide();


}

function tarjeta1(){
	$varBienes.hide();
	$varTarjeta.show();
	$varTraslado.hide();
	$varBajabienes.hide();

}
function empleado1()
{
	$varDatosPersonales.show();
	$varConyuge.hide();	
	$varProfesion.hide();
	$varContrato.hide();
	$varExpediente.hide();
}
 function conyuge1()
 {
 	$varDatosPersonales.hide();
	$varConyuge.show();	
	$varProfesion.hide();
	$varContrato.hide();
	$varExpediente.hide();
 }
 function conyuge2()
 {
 	$varDatosPersonales.hide();
	$varConyuge.show();	
	$varProfesion.hide();
	$varContrato.hide();
	$varExpediente.hide();
 }


function profesion1()
 {
 	$varDatosPersonales.hide();
	$varConyuge.hide();	
	$varProfesion.show();
	$varContrato.hide();
	$varExpediente.hide();
 }

function contrato1()
{	$varDatosPersonales.hide();
	$varConyuge.hide();	
	$varProfesion.hide();
	$varContrato.show();
	$varExpediente.hide();
 }



function expediente1()
{
   $varDatosPersonales.hide();
	$varConyuge.hide();	
	$varProfesion.hide();
	$varContrato.hide();
	$varExpediente.show();

}

