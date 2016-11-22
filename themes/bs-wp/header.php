<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<?php wp_head(); ?>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/css/custom.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-3 nopadding">

				 <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
				  <div class="panel panel-default">
				    <div class="panel-heading" role="tab" id="headingOne">
				      <h4 class="panel-title">
				        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
				          Quienes Somos
				        </a>
				      </h4>
				    </div>
				    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
				      <div class="panel-body">
				                         <ul id="SubMenu" class="SubMenus">
				                   <li><a href="quien_preve.asp" target="contenedorSitio">¿Qué es Seguros Salud Bancomer?</a></li>
				                   <li><a href="quien_negoc.asp" target="contenedorSitio">Línea de Negocio</a></li>
				                   <li><a href="normatividad.asp" target="contenedorSitio">Información Financiera</a></li>
				                   <li><a href="quien_cfd.asp" target="contenedorSitio">Comprobantes Fiscales Digitales</a></li>
				                       </ul>        

				      </div>
				    </div>
				  </div>
				  <div class="panel panel-default">
				    <div class="panel-heading" role="tab" id="headingTwo">
				      <h4 class="panel-title">
				        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
				          Nuestros Productos
				        </a>
				      </h4>
				    </div>
				    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
				      <div class="panel-body">
				                  <ul id="SubMenu" class="SubMenus">
				                    <li><a href="quien_negoc_segga.asp" target="contenedorSitio">Seguro de GMM</a></li>
				                    <li><a href="quien_negoc_segsa.asp" target="contenedorSitio">Seguro de Salud</a></li>
				                    <li><a href="quien_negoc_smb.asp" target="contenedorSitio">Seguro Médico Bancomer</a></li>
				                    <li><a href="quien_negoc_sbe.asp" target="contenedorSitio">Seguros Básicos Estandarizados</a></li>
				                    </ul>

				      </div>
				    </div>
				  </div>
				  <div class="panel panel-default">
				    <div class="panel-heading" role="tab" id="headingThree">
				      <h4 class="panel-title">
				        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
				          Medicina Preventiva
				        </a>
				      </h4>
				    </div>
				    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
				      <div class="panel-body">
				----
				      </div>
				    </div>
				  </div>
				  <div class="panel panel-default">
				    <div class="panel-heading" role="tab" id="headingThree">
				      <h4 class="panel-title">
				        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
				          Gastos Médicos Mayores
				        </a>
				      </h4>
				    </div>
				    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
				      <div class="panel-body">
				             <ul id="SubMenu" class="SubMenus">
				            <li><a href="gamem_descr.asp" target="contenedorSitio">Descripción</a></li>
				            <!-- (I) OPimentel - 15082014 - MC140815-02 -->
				            <li><a href="/DirectorioMedico/index.asp" target="contenedorSitio">Directorio Médico</a></li>
				            <!-- (I) OPimentel - 15082014 - MC140815-02 -->
				             <li><a href="gamem_sini.asp" target="contenedorSitio">En caso de siniestro</a></li>
				             <li><a href="gamem_forre.asp" target="contenedorSitio">Formatos</a></li>
				             <li><a href="gamem_Contacto.asp" target="contenedorSitio">Contacto</a></li>
				             <li><a href="gamem_otrser_1.asp" target="contenedorSitio">Otros Servicios</a></li>
				             <li><a href="gamem_condicionsGral.asp" target="contenedorSitio">Condiciones Generales</a></li>   
				             </ul>
				      </div>
				    </div>
				  </div>
				      <div class="panel panel-default">
				    <div class="panel-heading" role="tab" id="headingThree">
				      <h4 class="panel-title">
				        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
				          Salud
				        </a>
				      </h4>
				    </div>
				    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
				      <div class="panel-body">
				         <ul id="SubMenu" class="SubMenus">
				          <li><a href="salud_descri.asp" target="contenedorSitio">Descripción</a></li>
				          <li><a href="./DirectorioMedico/index.asp" target="contenedorSitio">Directorio Médico</a></li>
				          <li><a href="salud_atencion_medica.asp" target="contenedorSitio">Atención Médica</a></li>
				          <!--(I) LHerrera, 1270-Cambio de Nombre y Logo  26/09/2013-->
				          <li><a href="gastossalud/index.asp?servicio=5" target="contenedorSitio">Atención Dental</a></li>
				          <!--(F) LHerrera, 1270-Cambio de Nombre y Logo  26/09/2013-->
				          <li><a href="salud_forre.asp" target="contenedorSitio">Formatos</a></li>
				          <li><a href="salud_Contacto.asp" target="contenedorSitio">Contacto</a></li>
				          <li><a href="salud_otrser_1.asp" target="contenedorSitio">Otros Servicios</a></li>
				          <li><a href="pdf/Condiciones Generales Salud colectiva-2.pdf" target="contenedorSitio">Condiciones Generales</a></li>
				        <li><a href="lista_medicamentos.asp" target="contenedorSitio">Lista de Medicamentos</a></li>
				          </ul>


				      </div>
				    </div>
				  </div>
				  <div class="panel panel-default">
				    <div class="panel-heading" role="tab" id="headingThree">
				      <h4 class="panel-title">
				        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
				          Seguro Médico Bancomer
				        </a>
				      </h4>
				    </div>
				    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
				      <div class="panel-body">
				                 <ul id="SubMenu" class="SubMenus">
				                      <li><a href="segumed_descri.asp" target="contenedorSitio">Descripción</a></li>
				                      <li><a href="segumed_planes.asp" target="contenedorSitio">Planes y coberturas</a></li>
				                      <li><a href="segumed_directorio.asp" target="contenedorSitio">Directorio Médico</a></li>
				                      <li><a href="segumed_que_hacer.asp" target="contenedorSitio">Qué hacer en caso de</a></li>
				                      <li><a href="segumed_contacto.asp" target="contenedorSitio">Contacto</a></li>
				                <li><a href="segumed_condicionsGral.asp" target="contenedorSitio">Condiciones Generales</a></li>          
				                     </ul> 
				      </div>
				    </div>
				  </div>
				  <div class="panel panel-default">
				    <div class="panel-heading" role="tab" id="headingThree">
				      <h4 class="panel-title">
				        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
				          Respaldo CirugíaSegura BBVA Bancomer
				        </a>
				      </h4>
				    </div>
				    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
				      <div class="panel-body">
				                 <ul id="SubMenu" class="SubMenus">
				                      <li><a href="cirugiaseg_descri.asp" target="contenedorSitio">Descripción</a></li>
				                      <li><a href="cirugiaseg_planes.asp" target="contenedorSitio">Planes y coberturas</a></li>
				                      <li><a href="cirugiaseg_directorio.asp" target="contenedorSitio">Directorio Médico</a></li>
				                      <li><a href="cirugiaseg_que_hacer.asp" target="contenedorSitio">En caso de siniestro</a></li>
				                      <li><a href="cirugiaseg_forre.asp" target="contenedorSitio">Formatos</a></li>
				                      <li><a href="cirugiaseg_contacto.asp" target="contenedorSitio">Contacto</a></li>
				                 <li><a href="pdf/Condiciones_Generales_Respaldo_CirugiaSegura-1.pdf" target="contenedorSitio">Condiciones Generales</a></li>   
				                     </ul> 
				      </div>
				    </div>
				  </div>
				  <div class="panel panel-default">
				    <div class="panel-heading" role="tab" id="headingThree">
				      <h4 class="panel-title">
				        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
				          Seguro de Gastos Médicos Individual Básico Estandarizado
				        </a>
				      </h4>
				    </div>
				    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
				      <div class="panel-body">
				                 <ul id="SubMenu_GM" class="SubMenus">
				                     <li><a href="gmmb_descri.asp" target="contenedorSitio">Descripción</a></li>
				                     <li><a href="gmmb_pregfrec.asp" target="contenedorSitio">Preguntas Frecuentes</a></li>
				                     <li><a href="pdf/CG_Gastos_Medicos.pdf" target="contenedorSitio">Condiciones Generales</a></li>
				                   </ul>
				      </div>
				    </div>
				  </div>
				  <div class="panel panel-default">
				    <div class="panel-heading" role="tab" id="headingThree">
				      <h4 class="panel-title">
				        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
				          Seguro de Salud Dental Estandarizado
				        </a>
				      </h4>
				    </div>
				    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
				      <div class="panel-body">
				                 <ul id="SubMenu" class="SubMenus">
				                       <li><a href="admb_descri.asp" target="contenedorSitio">Descripción</a></li>
				                       <li><a href="pdf/CG_Dental.pdf" target="contenedorSitio">Condiciones Generales</a></li>
				                     </ul>  
				      </div>
				    </div>
				  </div>
				  <div class="panel panel-default">
				    <div class="panel-heading" role="tab" id="headingThree">
				      <h4 class="panel-title">
				        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
				          Seguro Individual o Familiar de Salud Básico Estandarizado
				        </a>
				      </h4>
				    </div>
				    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
				      <div class="panel-body">
				                 <ul id="SubMenu" class="SubMenus">
				                       <li><a href="ammb_descri.asp" target="contenedorSitio">Descripción</a></li>
				                       <li><a href="pdf/CG_Salud.pdf" target="contenedorSitio">Condiciones Generales</a></li>
				                     </ul> 
				      </div>
				    </div>
				  </div>                
				</div>

				
			</div>
			<div class="col-md-9 nopadding">

