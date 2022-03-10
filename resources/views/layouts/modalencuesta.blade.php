<!--Encuesta de satisfacción-->
<div class="modal fade" id="encuesta" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Encuesta de sastifación</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{route('encuesasti')}}" method="POST">
                @csrf
                  <p>
                    <span style=" text-align: center;">Diligencia la siguiente encuesta para reclamar sus resultados:</span><br>
                    <br>
                    ¿Cómo calificaría su experiencia global respecto a los servicios de salud que ha recibido a través de su IPS?
                  </p>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="e1" id="flexRadioDefault1" value="Muy buena">
                    <label class="form-check-label" for="flexRadioDefault1">
                      Muy buena
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="e2" id="flexRadioDefault2" value="Buena">
                    <label class="form-check-label" for="flexRadioDefault2">
                      Buena
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="e3" id="flexRadioDefault3" value="Regular">
                    <label class="form-check-label" for="flexRadioDefault3">
                      Regular
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="e4" id="flexRadioDefault4" value="Mala">
                    <label class="form-check-label" for="flexRadioDefault4">
                        Mala
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="e5" id="flexRadioDefault5"value="Muy Mala">
                    <label class="form-check-label" for="flexRadioDefault5">
                        Muy Mala
                    </label>
                  </div>
                  <hr>
                    <p>¿ Recomendaría a sus familiares y amigos esta IPS?</p>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="r1" id="flexRadioDefault6" value="Definitivamente si">
                        <label class="form-check-label" for="flexRadioDefault6">
                          Definitivamente si
                        </label>
                      </div>
                      <div class="form-check">
                      <input class="form-check-input" type="radio" name="r2" id="flexRadioDefault7" value="Probablemente si">
                      <label class="form-check-label" for="flexRadioDefault7">
                          Probablemente si
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="r3" id="flexRadioDefault8" value="Definitivamente no">
                      <label class="form-check-label" for="flexRadioDefault8">
                          Definitivamente no
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="r4" id="flexRadioDefault9" value="Probablemente no">
                      <label class="form-check-label" for="flexRadioDefault9">
                          Probablemente no
                      </label>
                    </div>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary"  data-toggle="modal" data-target="#paciente">Siguiente</button>
              </div>
                </form>
        </div>
      </div>
    </div>
  </div>
<!--########################-->
<div class="modal fade" id="paciente" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title" id="exampleModalLabel">Resultados de Examenes</h2>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <a href="" id="MImagPatien"><img src="image/14.png"  target="_blank" alt="Resultados"> Resultados Paciente</a> <br>
            <br>
            <a href="http://181.59.255.131/patientportal/"  target="_blank" id="MImagPatien"> <img src="image/15.png" alt="Imagenes"> Imagenes</a>
            </br>
             <a href="">Reportes</a>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
