// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
 

let $genero = document.getElementById('genero');
let $estado = document.getElementById('estado');
let $rh = document.getElementById('rh');
let $escolaridad = document.getElementById('escolaridad');
let $vivienda = document.getElementById('vivienda');
let $identificacion = document.getElementById('identificacion');
let $parentesco = document.getElementById('parentesco');
let $parentesco2 = document.getElementById('parentesco2');
let $parentesco3 = document.getElementById('parentesco3');
let $tipo_curso = document.getElementById('tipo_curso');
/*let $cargos = document.getElementById('cargos');*/
let $profesion = document.getElementById('profesion');
let genero = ['MACULINO','FEMENINO'];
let estado = ['SOLTERO (A)', 'CASADO (A)', 'SEPARADO (A)', 'VIUDO (A)', 'UNIÓN LIBRE'];
let rh = ['A+','A-','B+','B-','AB+','AB-','O+','O-'];
let escolaridad = ['BASICA PRIMARIA','BASICA SECUNDARIA','MEDIA ACADEMICA O CLASICA','MEDIA TECNICA BACHILLERATO TECNICO','NORMALISTA','TECNICA PROFESIONAL','SUBESPECIALIZACIÓN','DOCTORADO','POSDOCTORADO'];
let vivienda = ['FAMILIAR','ARRIENDO','PROPIA','HIPOTECA', 'ANTICRESIS']
let identificacion = ['PA / PASAPORTE','TI / TARJETA DE IDENTIDAD','CC / CÉDULA DE CIUDADANÍA','CE / CÉDULA DE EXTRANJERÍA'];



/*let cargos = ['GERENTE',
'ASESOR (A) JURÍDICO',
'ASESOR (A) DE CALIDAD',
'SUBGERENTE PRESTACIÓN DE SERVICIOS DE HEMODINAMIA Y CIRUGÍA CARDIOVASCULAR',
'MEDICOS GENERAL',
'PSICÓLOGO (A)',
'AUXILIAR DE ENFERMERÍA - HEMODINAMIA',
'REGENTE DE FARMACIA',
'COORDINADOR (A) DE CIRUGÍA',
'MEDICOS ESPECIALISTA ANESTESIÓLOGO',
'INSTRUMENTADOR QUIRÚRGICO',
'SUBGERENTE PRESTACIÓN DE SERVICIOS AMBULATORIOS Y APOYO DIAGNOSTICO ',
'TRABAJADOR (A) SOCIAL',
'AUDITORIA MEDICA',
'AUXILIAR DE ARCHIVO',
'COORDINADOR (A) DE FACTURACIÓN',
'SECRETARIO (A) CLÍNICO (A)',
'SUBGERENTE DE CALIDAD',
'COORDINADOR (A) DE SEGURIDAD DEL PACIENTE',
'COORDINADOR (A) GESTIÓN AMBIENTAL',
'COORDINADOR (A) DE SGSST',
'CONDUCTOR DE AMBULANCIA',
'AUXILIAR DE ENFERMERÍA - TRIPULANTE DE AMBULANCIA',
'COORDINADOR (A) DE TALENTO HUMANO',
'PROFESIONAL EN SGSSST',
'AUXILIAR DE TALENTO HUMANO',
'COORDINADOR (A) SISTEMAS DE INFORMACIÓN',
'AUXILIAR DE SISTEMAS',
'CONTADOR (A)',
'TESORERO (A)',
'PROFESIONAL DE CARTERA',
'PROFESIONAL EN COMPRAS',
'AUXILIAR DE CONTABILIDAD',
'AUXILIAR DE MENSAJERÍA',
'PROFESIONAL EN COSTOS',
'COORDINADOR (A) DE HEMODINAMIA'
];*/

let profesion = [
'FISIOTERAPEUTA',
'AUX DE ENFERMERIA',
'ADMINISTRADOR PUBLICO',
'AUX DE SISTEMAS',
'AUXILIAR DE ENFERMERIA',
'ADMINISTRATIVO EN SALUD',
'ENFERMERO',
'MEDICO',
'ENFERMERA',
'TECNICO LABORAL EN AUXILIAR ADMINISTRATIVO EN SALUD',
'INGENIERO DE SISTEMAS',
'BACHILLER',
'MANTENIMIENTO MECANICO DISSEL',
'PRIMARIA'
];

let parentesco = [
'AMIGO (A)',
'ESPOSO (A)',
'HERMANO (A)',
'HIJO (A)',
'MADRE',
'NOVIO (A)',
'PADRE',
'PATRON',
'PRIMO (A)',
'SOBRINO (A)',
'TIO (A)',
'VECINO (A)',
'COMPAÑERO (A)',
'FAMILIAR',
];

let tipo_curso = [
'ATENCIÓN EN SALUD A LAS VÍCTIMAS DE VIOLENCIAS SEXUALES',
'ATENCIÓN DE VÍCTIMAS DE ATAQUES CON AGENTES QUÍMICOS',
'CORRECTO LLENADO DEL CERTIFICADO DE DEFUNCIÓN',
'CURSO RADIO PROTECCIÓN',
'DIPLOMADO EN UCI-A-N-P',
'HUMANIZACIÓN EN LA ATENCIÓN',
'MANEJO DE DUELO',
'MANEJO DE LA GESTIÓN PRE TRANSFUSIONAL',
'SOPORTE VITAL AVANZADO',
'TOMA DE PRUEBAS EN EL PUNTO DE ATENCIÓN DEL PACIENTE – (POINT OF CARE TESTING -POCT)',
'UCI ADULTOS',
'UCI NEONATAL',
'UCI PEDIATRICA'
]



function mostrarSelect(arreglo, lugar){
  let elementos = '<option selected disabled value="">--Seleccione el valor--</option>';

  for (let index = 0; index < arreglo.length; index++) {
    elementos += '<option value="'+arreglo[index]+'">'+arreglo[index]+'</option>'
    //console.log(elementos);
  }
  lugar.innerHTML = elementos;
  //console.log(elementos);
}


mostrarSelect(estado, $estado);
mostrarSelect(identificacion, $identificacion);
mostrarSelect(genero, $genero);
mostrarSelect(escolaridad, $escolaridad);
mostrarSelect(rh, $rh);
mostrarSelect(vivienda, $vivienda);
/*mostrarSelect(cargos, $cargos);*/
mostrarSelect(profesion, $profesion);
mostrarSelect(parentesco, $parentesco);
mostrarSelect(parentesco, $parentesco2);
mostrarSelect(parentesco, $parentesco3);
mostrarSelect(tipo_curso, $tipo_curso);
