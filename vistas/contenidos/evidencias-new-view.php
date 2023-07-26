<div class="content-wrapper">
            <div class="container-xxl flex-grow-1 container-p-y">
                <div class="row">
                    <div class="col-lg-4 mb-2 order-0">
                      <div class="card">
                        <div class="d-flex align-items-end row">
                          <div class="col-sm-6">
                            <div class="card-body">
                              <h5 class="card-title text-primary">Envia todas tus evidencias aqui!</h5>
                            </div>
                          </div>
                          <div class="col-sm-5 text-center text-sm-left">
                            <div class="card-body pb-0 px-0 px-md-4">
                              <img
                                src="<?php echo SERVERURL; ?>vistas/img/Forms-bro.png"
                                height="140"
                                alt="View Badge User"
                                data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                data-app-light-img="illustrations/man-with-laptop-light.png"
                              />
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--/ contents -->
                    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span><i class='menu-icon tf-icons bx bx-download m-2'></i>Añadir evidencias</h4>
                    <div class="row">
                        <div class="col-10">
                          <div class="card mb-4">
                            <div class="card-body">
                              <form>
                                <div class="mb-3">
                                  <label class="form-label" for="dni">identidad:</label>
                                  <input type="text" class="form-control" id="evi_dni" />
                                </div>
                                <div class="mb-3">
                                  <label class="form-label" for="ficha">ficha:</label>
                                  <input type="text" class="form-control" id="evi_ficha"/>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="programa">programa:</label>
                                    <input type="text" class="form-control" id="evi_programa" />
                                  </div>
                                <div class="mb-3">
                                    <label for="fehca" class="col-md-2 col-form-label">Fecha:</label>
                                  <div class="input-group input-group-merge">
                                    <input class="form-control" type="date" value="2021-06-18" id="evi_fecha" />
                                  </div>
                                </div>
                                <div class="mb-3">
                                  <label class="html5-time-input" for="hora">Hora</label>
                                  <input class="form-control" type="time" value="12:30:00" id="evi_hora" />
                                </div>
                                <div class="mb-3">
                                  <label class="form-label" for="asunto">Asunto</label>
                                  <textarea
                                    id="evi_asunto"
                                    class="form-control"
                                    placeholder="escribe aqui..."
                                  ></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">adjuntar archivos</label>
                                    <input class="form-control" type="file" id="evi_archivo" />
                                  </div>
                                <button type="submit" class="btn btn-primary">enviar</button>
                              </form>
                            </div>
                          </div>
                        </div>
                     </div>
                    </div>