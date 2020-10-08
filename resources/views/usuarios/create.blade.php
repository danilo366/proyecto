@extends('layouts.app')



@section('content')
    
    <div class="container ">
        <h1>Actualización de datos personales...</h1>
      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="datos_personales-tab" data-toggle="tab" href="#datos_personales" role="tab" aria-controls="datos_personales" aria-selected="true">Datos Personales</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" id="hoja-tab" data-toggle="tab" href="#hoja_de_vida" role="tab" aria-controls="hoja_de_vida" aria-selected="false">Hoja de vida</a>
        </li> -->
        <li class="nav-item">
          <a class="nav-link" id="nucleo_familiar-tab" data-toggle="tab" href="#nucleo_familiar" role="tab" aria-controls="nucleo_familiar" aria-selected="false">Núcleo Familiar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="competencias-tab" data-toggle="tab" href="#competencias" role="tab" aria-controls="competencias" aria-selected="false">Competencias</a>
        </li>
      </ul>
      <div class="tab-content" id="myTabContent">
        <!--DATOS PERSONALES-->
        <div class="tab-pane fade show active p-3" id="datos_personales" role="tabpanel" aria-labelledby="datos_personales">
        <form method="POST" action="{{route('usuarios.store')}}" class="needs-validation" novalidate>
          @csrf
          <div class="card-header">Datos personales del usuario</div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-3 ">
                  <label>Primer Nombre</label>
                  <input type="text" name="pnombre" id="pnombre" class="form-control" required>                  
                  <div class="invalid-feedback">Complete el campo.</div>
                </div>
                <div class="col-md-3 ">
                  <label>Segundo Nombre</label>
                  <input type="text" name="" id="snombre" class="form-control">
                </div>
                <div class="col-md-3 validacion">
                  <label>Primer Apellido</label>
                  <input type="text" name="" id="papellido" class="form-control" required>                  
                  <div class="invalid-feedback">Complete el campo.</div>
                </div>
                <div class="col-md-3 ">
                  <label>Segundo Apellido</label>
                  <input type="text" name="" id="sapellido" class="form-control">
                </div>
              </div>
              <div class="row">
                <div class="col-md-3 ">
                  <label>Tipo Identificación</label>
                  <select class="form-control" id="identificacion" required>
                  </select>                 
                  <div class="invalid-feedback">Complete el campo.</div>
                </div>
                <div class="col-md-3 ">
                  <label>N° de documento</label>
                  <input type="number" name="" id="documento" class="form-control" required>                  
                  <div class="invalid-feedback">Complete el campo.</div>
                </div>
                <div class="col-md-3 ">
                  <label>Departamento de expedición</label>
                  <select class="form-control" id="exampleFormControlSelect1" required>
                    <option value=""></option>
                    <option>1</option>
                    <option>2</option>
                  </select>                  
                  <div class="invalid-feedback">Complete el campo.</div>
                </div>
                <div class="col-md-3 ">
                  <label>Municipio expedición</label>
                  <select class="form-control" id="exampleFormControlSelect1" required>
                    <option value=""></option>
                    <option>1</option>
                    <option>2</option>
                  </select>                  
                  <div class="invalid-feedback">Complete el campo.</div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3 ">
                  <label>Fecha Expedición</label>
                  <input type="date" name="" id="fec_expedicion" class="form-control" required>                  
                  <div class="invalid-feedback">Complete el campo.</div>
                </div>
                <div class="col-md-3 ">
                  <label>Género</label>
                  <select class="form-control" id="genero" required>
                  </select>                  
                  <div class="invalid-feedback">Complete el campo.</div>
                </div>
                <div class="col-md-2 mb-2">
                  <label>Tipo de sangre</label>
                  <select class="form-control" id="rh" required>
                  </select>                  
                  <div class="invalid-feedback">Complete el campo.</div>
                </div>
                <div class="col-md-4 ">
                  <label>Correo electrónico</label>
                  <input type="email" name="" id="correo" class="form-control" required>                  
                  <div class="invalid-feedback">Complete el campo.</div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <label>Nivel Escolaridad</label>
                  <select class="form-control" id="escolaridad" required>
                  </select>                  
                  <div class="invalid-feedback">Complete el campo.</div>
                </div>
                <div class="col-md-4 ">
                  <label>Profesión</label>
                  <select class="form-control" id="profesion" required>
                  </select>                  
                  <div class="invalid-feedback">Complete el campo.</div>
                </div>
              </div>
            </div>
            <!--informacion de contacto-->
            <div class="card-header">Información del usuario</div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-3 ">
                  <label>Fecha nacimiento</label>
                  <input type="date" name="" id="fec_nacimiento" onchange="agregarTexto();" class="form-control" value="" required>                  
                  <div class="invalid-feedback">Complete el campo.</div>
                </div>
                <div id="agregar" class="col-md-3 ">
                  <label>Edad</label>
                  <input type="text" name="" id="edad"  class="form-control" disabled>                  
                  <div class="invalid-feedback">Complete el campo.</div>
                </div>
                <div class="col-md-3 ">
                  <label>Departamento nacimiento</label>
                  <select class="form-control" id="exampleFormControlSelect1" required>
                    <option value=""></option>
                    <option>1</option>
                    <option>2</option>
                  </select>                  
                  <div class="invalid-feedback">Complete el campo.</div>
                </div>
                <div class="col-md-3 ">
                  <label>Municipio nacimiento</label>
                  <select class="form-control" id="exampleFormControlSelect1" required>
                    <option value=""></option>
                    <option>1</option>
                    <option>2</option>
                  </select>                  
                  <div class="invalid-feedback">Complete el campo.</div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3 ">
                  <label>Estado civil</label>
                  <select class="form-control" id="estado" required>
                  </select>                  
                  <div class="invalid-feedback">Complete el campo.</div>
                </div>
                <div class="col-md-3 ">
                  <label>Dirección de residencia</label>
                  <input type="text" name="" id="residecncia" class="form-control" required>                  
                  <div class="invalid-feedback">Complete el campo.</div>
                </div>
                <div class="col-md-3 ">
                  <label>Barrio de residencia</label>
                  <input type="text" name="" id="barrio" class="form-control" required>                  
                  <div class="invalid-feedback">Complete el campo.</div>
                </div>
                <div class="col-md-3 ">
                  <label>Número de contacto</label>
                  <input type="text" name="" id="num_contacto" class="form-control" required>                  
                  <div class="invalid-feedback">Complete el campo.</div>
                </div>
              </div>
            </div>
            <!--contacto de emergencia de usuario-->
            <div class="card-header">Contacto de emergencia del usuario</div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-6 ">
                  <label>Nombres de contacto</label>
                  <input type="text" name="" id="nombres_contacto" class="form-control" required>                  
                  <div class="invalid-feedback">Complete el campo.</div>
                </div>
                <div class="col-md-3 ">
                  <label>Parentesco</label>
                  <select class="form-control" id="parentesco" required>
                  </select>                  
                  <div class="invalid-feedback">Complete el campo.</div>
                </div>
                <div class="col-md-3 ">
                  <label>Número de contacto</label>
                  <input type="text" name="" id="num_emergencia" class="form-control" required>                  
                  <div class="invalid-feedback">Complete el campo.</div>
                </div>
              </div>
              <div  class="row">
                <div id="col" class="col-md-6 ">
                  <label>Nombres de contacto</label>
                  <input type="text" name="" id="nombres_contacto2" class="form-control">
                </div>
                <div  class="col-md-3 ">
                  <label>Parentesco</label>
                  <select class="form-control" id="parentesco2">
                  </select>
                </div>
                <div id="col" class="col-md-3 ">
                  <label>Número de contacto</label>
                  <input type="text" name="" id="num_emergencia2" class="form-control" >
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-check text-center">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                <label class="form-check-label" for="invalidCheck">Acepto términos y condiciones</label>
                <div class="valid-feedback">¡Aceptado!</div>
              </div>
            </div>
            <div class="col text-center">
              <a type="button" class="btn btn-outline-info btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">Leer términos</a>
            </div>
            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="container p-3 text-justify">
                    <div class="card-header text-center" style="font-size: 20px">AUTORIZACIÓN PARA EL TRATAMIENTO DE DATOS PERSONALES</div>
                    <div class="card-body">
                      <p>El CENTRO DE CUIDADOS CARDIONEUROVASCULARES PABÓN S.A.S., en cumplimiento de lo previsto en la Ley 1581 de 2012, reglamentada por el Decreto 1377 de 2013, 
                        mediante los cuales se desarrolla el derecho constitucional que tienen todas las personas a; conocer, actualizar y rectificar las informaciones que se hayan 
                        recogido sobre ellas en bases de datos o archivos y los demás derechos, libertades y garantías constitucionales a que se refiere el artículo 15 de la 
                        Constitución Política de Colombia (habeas data); actuará como responsable del tratamiento de mis datos personales y según la Política de Tratamiento de Datos 
                        Personales de la Sociedad. 2) Mis datos serán tratados con ocasión de la relación laboral, relaciones pre y/o contractuales; en aras de la prestación de los 
                        servicios ofrecidos por el CENTRO. 3) Mis derechos como titular del dato son los previstos en la Constitución y la ley, especialmente el derecho a conocer, 
                        actualizar, rectificar y suprimir mi información personal, solicitar la prueba de la autorización otorgada, salvo los eventos contemplados en el artículo 10 
                        de la Ley 1581 de 2012 , ser informado sobre el uso que se da a los datos personales, presentar quejas por infracciones a los dispuesto en las normas de datos
                         personales, consultar de forma gratuita los datos personales previamente autorizados. 4) Es voluntario responder preguntas que eventualmente me sean 
                         efectuadas sobre datos sensibles (aquellos que afectan la intimidad, relacionados con salud, vida sexual o cuyo uso indebido puede generar discriminación) 
                         o datos de menores de edad, y que estos últimos serán tratados respetando sus derechos fundamentales e intereses superiores.
                      </p>
                      <p>
                        Teniendo en cuenta lo anterior, autorizo de manera voluntaria, previa, explícita, informada e inequívoca al CENTRO DE CUIDADOS CARDIONEUROVASCULARES 
                        PABÓN S.A.S. para tratar mis datos personales, surgidos con ocasión de la contratación o ejecución de los servicios de la responsable del tratamiento, así 
                        como el contacto a través de medios telefónicos, electrónicos, físicos y/o personales. Autorizo al CENTRO DE CUIDADOS CARDIONEUROVASCULARES PABÓN S.A.S, a 
                        compartir mi información y continuar con el tratamiento de mis datos personales. 
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div  class="text-center p-3">
              <button class="btn btn-primary agregar-texto" type="submit">Guardar datos</button>
            </div>  
          </form>
        </div>        
        <!--HOJA DE VIDA-->
        <!-- <div class="tab-pane fade p-3" id="hoja_de_vida" role="tabpanel" aria-labelledby="hoja_de_vida-tab">
          <div class="card-header">Datos Hoja de vida del usuario</div>
          <div class="card-body">
            <div class="text-center">
              <button class="btn btn-primary ">Guardar datos</button>
            </div>
          </div>
        </div> -->
        <!--NUCLEO FAMILIAR-->
        <div class="tab-pane fade p-3" id="nucleo_familiar" role="tabpanel" aria-labelledby="nucleo_familiar-tab">
          <div class="card-header">Datos núcleo familiar del usuario</div>
          <div class="card-body">
            <form id="form1" class="needs-validation" novalidate>
            <div class="row">
              <div class="col-md-3 ">
                <label>Típo de vivienda</label>
                <select class="form-control" id="vivienda" required>
                </select>                
                <div class="invalid-feedback">Complete el campo.</div>
              </div>
              <div class="col-md-2 ">
                <label># de personas</label>
                <input type="number" name="" id="num_personas" class="form-control" required>                
                <div class="invalid-feedback">Complete el campo.</div>
              </div>
              <div class="col-md-2 ">
                <label>Estrato</label>
                <input type="text" name="" id="estracto" class="form-control" required>                
                <div class="invalid-feedback">Complete el campo.</div>
              </div>
            </div>
            <div class="text-center p-3">
              <button class="btn btn-primary" type="submit">Guardar datos</button>
            </div>
            </form>
            <div class="row">
              <div class="col-md-7 mb-3">
                <label>Nombres y apellidos del familiar</label>
                <div class="input-group ">
                  <input type="text" class="form-control" aria-label="Recipient's username" aria-describedby="button-addon2">
                  <div class="input-group-append">
                    <button class="btn btn-success" type="button" id="button-addon2">Agregar Familiar</button>
                  </div>
                </div>
              </div>
              <div  class="col-md-3 ">
                <label>Parentesco</label>
                <select class="form-control" id="parentesco3">
                </select>
              </div>
            </div>
            <table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nombres y apellidos familiar</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <!--COMPETENCIAS-->
        <div class="tab-pane fade p-3" id="competencias" role="tabpanel" aria-labelledby="competencias-tab">
          <div class="card-header">Datos competencias del usuario</div>
          <h6 class="p-3">Cargo en la empresa:</h6>          
          <form id="form1" class="needs-validation" novalidate>
            <div class="row">
              <div class="col-md-3 ">
                <label>Tipo de curso</label>
                <select class="form-control" id="tipo_curso">
                </select>
              </div>
              <div class="col-md-6 mb-3">
                <label>Cargue el archivo del curso</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="archivo_curso" aria-describedby="inputGroupFileAddon04">
                    <label class="custom-file-label" for="inputGroupFile04" >Seleccione su archivo</label>
                  </div>                  
                  <div class="input-group-append">
                    <button class="btn btn-success" type="button" id="inputGroupFileAddon04">Guardar</button>
                  </div>
                </div>
              </div>
              <div class="col-md-3 ">
                <label>Fecha Vencimiento</label>
                <input type="date" name="" id="fec_nacimiento" class="form-control" value="" required>                  
                <div class="invalid-feedback">Complete el campo.</div>
              </div>
            </div>
          </form>
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nombres del curso</th>
                <th scope="col">Acciones</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Soporte vital basico</td>
                <td></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     {{-- <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>	
    <script src="js/bootstrap.min.js"></script>
    <script src="js/codigo.js"></script>
    <script src="js/validaciones.js"></script> --}}
@endsection