<div class="container-xxl flex-grow-1 container-p-y">
          <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span><i class='menu-icon tf-icons bx bx-add-to-queue m-2'></i>Estado De Practica Aprendiz</h4>

          <div class="row">
            <div class="col-md-8">
             
              <div class="card mb-4">
                <h5 class="card-header">Agregar informacion</h5>
                <!-- Account -->
                
                <hr class="my-0" />
                <div class="card-body">
                  <form class="FormularioAjax" action="" method="POST"  data-form="save">
                    <div class="row">
                      <div class="mb-3 col-md-6">
                        <label for="identidad" class="form-label">Numero de identidad:</label>
                        <input
                          class="form-control"
                          type="number"
                          pattern="[0-9()+]{1,20}"
                          id="apr_identidad"
                          name="identidad"
                          autofocus
                        />
                      </div>
                      <div class="mb-3 col-md-6">
                        <label for="name" class="form-label">Nombre:</label>
                        <input class="form-control" type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,35}" name="apr_nombre" id="nombre" />
                      </div>
                      <div class="mb-3 col-md-6">
                        <label for="identidad" class="form-label">Programa:</label>
                        <input
                          class="form-control"
                          type="text"
                          pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,35}"
                          id="apr_programa"
                          name="programa"
                          autofocus
                        />
                      </div>
                      <div class="mb-3 col-md-6">
                        <label for="lastName" class="form-label">Ficha:</label>
                        <input class="form-control" type="number" pattern="[0-9()+]{1,20}" name="apr_ficha" id="ficha"/>
                      </div>
                      <div class="mb-3 col-md-6">
                        <label class="form-label" for="Estado">Estado</label>
                        <select id="apr_estado" class="select2 form-select">
                          <option value="">Select</option>
                          <option value="pendiente">pendiente</option>
                          <option value="en proceso">en proceso</option>
                          <option value="terminado">terminado</option>
                          <option value="egresado">egresado</option>
                        </select>
                      </div>
                      <div class="mb-3 col-md-6">
                        <label for="Estado" class="form-label">Modalidad de practica</label>
                        <select id="apr_modalidad" class="select2 form-select">
                          <option value="">Select</option>
                          <option value="Vinculo laboral">Vinculo laboral</option>
                          <option value="Contrato de aprendisaje">Contrato de aprendizaje</option>
                          <option value="Pasantia">Pasantia</option>
                          <option value="Monitoria">Monitoria</option>
                          <option value="Proyecto productivo">Proyecto productivo</option>
                        </select>
                      </div>
                    </div>
                    <div class="mt-2">
                      <button type="submit" class="btn btn-primary me-2">Save changes</button>
                      <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                    </div>
                  </form>
                </div>
                <!-- /Account -->
              </div>
            </div>
          </div>
        </div>