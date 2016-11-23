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
<nav class="navbar navbar-default visible-xs">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    <a class="navbar-brand" href="https://www.segurodeautobancomer.com/"><img class="visible-xs" style="top: -17px; position: relative;" src="https://www.segurodeautobancomer.com/wp-content/uploads/2016/10/logo-xs.png"></a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">



				 <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
				  <div class="panel panel-default">
				    <div class="panel-heading" role="tab" id="heading1">
				      <h4 class="panel-title">
				        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1">
				          Quienes Somos
				        </a>
				      </h4>
				    </div>
				    <div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1">
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
				    <div class="panel-heading" role="tab" id="heading2">
				      <h4 class="panel-title">
				        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="false" aria-controls="collapse2">
				          Nuestros Productos
				        </a>
				      </h4>
				    </div>
				    <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
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
				    <div class="panel-heading" role="tab" id="heading3">
				      <h4 class="panel-title">
				        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="false" aria-controls="collapse3">
				          Medicina Preventiva
				        </a>
				      </h4>
				    </div>
				  </div>
				  <div class="panel panel-default">
				    <div class="panel-heading titulo" role="tab" id="heading4">
				      <h4 class="panel-title">
				        
				          Seguros para Empresas
				        
				      </h4>
				    </div>
				  </div>				  
				  <div class="panel panel-default">
				    <div class="panel-heading" role="tab" id="heading5">
				      <h4 class="panel-title">
				        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-expanded="false" aria-controls="collapse5">
				          Gastos Médicos Mayores
				        </a>
				      </h4>
				    </div>
				    <div id="collapse5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading5">
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
				    <div class="panel-heading" role="tab" id="heading6">
				      <h4 class="panel-title">
				        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse6" aria-expanded="false" aria-controls="collapse6">
				          Salud
				        </a>
				      </h4>
				    </div>
				    <div id="collapse6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading6">
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
				    <div class="panel-heading titulo" role="tab" id="heading7">
				      <h4 class="panel-title">
				          Seguro para Personas
				      </h4>
				    </div>
				  </div>				  
				  <div class="panel panel-default">
				    <div class="panel-heading" role="tab" id="heading8">
				      <h4 class="panel-title">
				        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse8" aria-expanded="false" aria-controls="collapse8">
				          Seguro Médico Bancomer
				        </a>
				      </h4>
				    </div>
				    <div id="collapse8" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading8">
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
				    <div class="panel-heading" role="tab" id="heading9">
				      <h4 class="panel-title">
				        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse9" aria-expanded="false" aria-controls="collapse9">
				          Respaldo CirugíaSegura BBVA Bancomer
				        </a>
				      </h4>
				    </div>
				    <div id="collapse9" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading9">
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
				    <div class="panel-heading" role="tab" id="heading10">
				      <h4 class="panel-title">
				        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse10" aria-expanded="false" aria-controls="collapse10">
				          Seguro de Gastos Médicos Individual Básico Estandarizado
				        </a>
				      </h4>
				    </div>
				    <div id="collapse10" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading10">
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
				    <div class="panel-heading" role="tab" id="heading11">
				      <h4 class="panel-title">
				        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse11" aria-expanded="false" aria-controls="collapse11">
				          Seguro de Salud Dental Estandarizado
				        </a>
				      </h4>
				    </div>
				    <div id="collapse11" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading11">
				      <div class="panel-body">
				                 <ul id="SubMenu" class="SubMenus">
				                       <li><a href="admb_descri.asp" target="contenedorSitio">Descripción</a></li>
				                       <li><a href="pdf/CG_Dental.pdf" target="contenedorSitio">Condiciones Generales</a></li>
				                     </ul>  
				      </div>
				    </div>
				  </div>
				  <div class="panel panel-default">
				    <div class="panel-heading" role="tab" id="heading12">
				      <h4 class="panel-title">
				        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse12" aria-expanded="false" aria-controls="collapse12">
				          Seguro Individual o Familiar de Salud Básico Estandarizado
				        </a>
				      </h4>
				    </div>
				    <div id="collapse12" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading12">
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



</nav>	
	<div class="container">
		<div class="row">
			<div class="col-md-3 nopadding">

				 <div class="panel-group hidden-xs" id="accordion2" role="tablist" aria-multiselectable="true">
				  <div class="panel panel-default">
				    <div class="panel-heading" role="tab" id="heading-a-1">
				      <h4 class="panel-title">
				        <a role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapse-a-1" aria-expanded="true" aria-controls="collapse-a-1">
				          Quienes Somos
				        </a>
				      </h4>
				    </div>
				    <div id="collapse-a-1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-a-1">
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
				    <div class="panel-heading" role="tab" id="heading-a-2">
				      <h4 class="panel-title">
				        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapse-a-2" aria-expanded="false" aria-controls="collapse-a-2">
				          Nuestros Productos
				        </a>
				      </h4>
				    </div>
				    <div id="collapse-a-2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-a-2">
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
				    <div class="panel-heading" role="tab" id="heading-a-3">
				      <h4 class="panel-title">
				       <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapse-a-3" aria-expanded="false" aria-controls="collapse-a-3">
				          Medicina Preventiva
				        </a>
				      </h4>
				    </div>
				  </div>
				  <div class="panel panel-default">
				    <div class="panel-heading titulo" role="tab" id="heading4">
				      <h4 class="panel-title">
				        
				          Seguros para Empresas
				        
				      </h4>
				    </div>
				  </div>				  
				  <div class="panel panel-default">
				    <div class="panel-heading" role="tab" id="heading-a-5">
				      <h4 class="panel-title">
				        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapse-a-5" aria-expanded="false" aria-controls="collapse-a-5">
				          Gastos Médicos Mayores
				        </a>
				      </h4>
				    </div>
				    <div id="collapse-a-5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-a-5">
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
				    <div class="panel-heading" role="tab" id="heading-a-6">
				      <h4 class="panel-title">
				        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapse-a-6" aria-expanded="false" aria-controls="collapse-a-6">
				          Salud
				        </a>
				      </h4>
				    </div>
				    <div id="collapse-a-6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-a-6">
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
				    <div class="panel-heading titulo" role="tab" id="heading-a-7">
				      <h4 class="panel-title">
				          Seguro para Personas
				      </h4>
				    </div>
				  </div>				  
				  <div class="panel panel-default">
				    <div class="panel-heading" role="tab" id="heading-a-8">
				      <h4 class="panel-title">
				        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapse-a-8" aria-expanded="false" aria-controls="collapse-a-8">
				          Seguro Médico Bancomer
				        </a>
				      </h4>
				    </div>
				    <div id="collapse-a-8" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-a-8">
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
				    <div class="panel-heading" role="tab" id="heading-a-9">
				      <h4 class="panel-title">
				        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapse-a-9" aria-expanded="false" aria-controls="collapse-a-9">
				          Respaldo CirugíaSegura BBVA Bancomer
				        </a>
				      </h4>
				    </div>
				    <div id="collapse-a-9" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-a-9">
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
				    <div class="panel-heading" role="tab" id="headinga-10">
				      <h4 class="panel-title">
				        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapse-a-10" aria-expanded="false" aria-controls="collapse-a-10">
				          Seguro de Gastos Médicos Individual Básico Estandarizado
				        </a>
				      </h4>
				    </div>
				    <div id="collapse-a-10" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headinga-10">
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
				    <div class="panel-heading" role="tab" id="heading-a-11">
				      <h4 class="panel-title">
				        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapse-a-11" aria-expanded="false" aria-controls="collapse-a-11">
				          Seguro de Salud Dental Estandarizado
				        </a>
				      </h4>
				    </div>
				    <div id="collapse-a-11" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-a-11">
				      <div class="panel-body">
				                 <ul id="SubMenu" class="SubMenus">
				                       <li><a href="admb_descri.asp" target="contenedorSitio">Descripción</a></li>
				                       <li><a href="pdf/CG_Dental.pdf" target="contenedorSitio">Condiciones Generales</a></li>
				                     </ul>  
				      </div>
				    </div>
				  </div>
				  <div class="panel panel-default">
				    <div class="panel-heading" role="tab" id="heading-a-12">
				      <h4 class="panel-title">
				        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapse-a-12" aria-expanded="false" aria-controls="collapse-a-12">
				          Seguro Individual o Familiar de Salud Básico Estandarizado
				        </a>
				      </h4>
				    </div>
				    <div id="collapse-a-12" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-a-12">
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

