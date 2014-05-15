<?php
$this->widget('CTabView',array(
        'tabs'=>array(
		'tab1' => array(
			'title'=>'Sintomas Generales',
			'content'=>'<form id="pacientes-form" action="/Historias-Clinicas/index.php/pacientes/create" method="post">
	<p class="note">Campos con<span class="required">*</span> son requeridos</p>

	
	<div class="row">
            <div class="col-lg-4">
		<label for="Pacientes_nombre" class="required">Describa la defensa inmune especifica y defensa inmune inespecifica.<span class="required">*</span></label>		<input size="30" maxlength="30" class="form-control" name="Pacientes[nombre]" id="Pacientes_nombre" type="text" />		            </div>
	</div>

	<div class="row">
            <div class="col-lg-4">
		<label for="Pacientes_apellido" class="required">Describa sintomas de sarcoidosis<span class="required">*</span></label>		<input size="30" maxlength="30" class="form-control" name="Pacientes[apellido]" id="Pacientes_apellido" type="text" />		                </div>
	</div>

	<div class="row">
            <div class="col-lg-4">
		<label for="Pacientes_lugar_nacimiento" class="required">Mencione formas de miopatia<span class="required">*</span></label>		<input size="30" maxlength="30" class="form-control" name="Pacientes[lugar_nacimiento]" id="Pacientes_lugar_nacimiento" type="text" />		             </div>
	</div>

	<div class="row">
            <div class="col-lg-4">
		<label for="Pacientes_fecha_nacimiento" class="required">Sintomas de Sindrome Meniere<span class="required">*</span></label>		<input size="30" maxlength="30" class="form-control" name="Pacientes[fecha_nacimiento]" id="Pacientes_fecha_nacimiento" type="text" />		                </div>
	</div>

	<div class="row buttons">
            <div class="col-lg-4">
		<input class="btn btn-primary" type="submit" name="yt0" value="Crear" />            </div>
        </div>

</form>',
		),
                'tab2' => array(
			'title'=>'Sistema Neurologico',
			'content'=>'<form id="pacientes-form" action="/Historias-Clinicas/index.php/pacientes/create" method="post">
	<p class="note">Campos con<span class="required">*</span> son requeridos</p>

	
	<div class="row">
            <div class="col-lg-4">
		<label for="Pacientes_nombre" class="required">Mencione pautas para erradicar el Helicobacter Pylori<span class="required"></span></label>		<input size="30" maxlength="30" class="form-control" name="Pacientes[nombre]" id="Pacientes_nombre" type="text" />		            </div>
	</div>

	<div class="row">
            <div class="col-lg-4">
		<label for="Pacientes_apellido" class="required">Mencione algunas drogas que puede ayudar con miastenia gravis<span class="required">*</span></label>		<input size="30" maxlength="30" class="form-control" name="Pacientes[apellido]" id="Pacientes_apellido" type="text" />		                </div>
	</div>

	<div class="row">
            <div class="col-lg-4">
		<label for="Pacientes_lugar_nacimiento" class="required">cual es el mejor estudio para determinar la causa una hemorragia subaracnoidea<span class="required">*</span></label>		<input size="30" maxlength="30" class="form-control" name="Pacientes[lugar_nacimiento]" id="Pacientes_lugar_nacimiento" type="text" />		             </div>
	</div>

	<div class="row">
            <div class="col-lg-4">
		<label for="Pacientes_fecha_nacimiento" class="required">Mencione una de las exploraciones es altamente eficaz e inocua en el diagnóstico de lesiones estructurales de la médula espinal y del canal raquídeo<span class="required">*</span></label>		<input size="30" maxlength="30" class="form-control" name="Pacientes[fecha_nacimiento]" id="Pacientes_fecha_nacimiento" type="text" />		                </div>
	</div>

	
	<div class="row buttons">
            <div class="col-lg-4">
		<input class="btn btn-primary" type="submit" name="yt0" value="Crear" />            </div>
        </div>

</form>',
		),
                'tab3' => array(
			'title'=>'Genitales',
			'content'=>'<form id="pacientes-form" action="/Historias-Clinicas/index.php/pacientes/create" method="post">
	<p class="note">Campos con<span class="required">*</span> son requeridos</p>

	
	<div class="row">
            <div class="col-lg-4">
		<label for="Pacientes_nombre" class="required">Qué diferencia tienen las dos vacunas contra el HPV?<span class="required"></span></label>		<input size="30" maxlength="30" class="form-control" name="Pacientes[nombre]" id="Pacientes_nombre" type="text" />		            </div>
	</div>

	
	<div class="row buttons">
            <div class="col-lg-4">
		<input class="btn btn-primary" type="submit" name="yt0" value="Crear" />            </div>
        </div>

</form>',
		),

		
	),

));
?>