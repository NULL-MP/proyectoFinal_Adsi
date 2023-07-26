          <div class="app-brand demo">
                    <a href="<?php echo SERVERURL; ?>home" class="app-brand-link">
                        <span class="app-brand-logo demo">
                            <img src="<?php echo SERVERURL; ?>vistas/img/sofia_plus.png" class="img" alt="imagen no encontrada" width="80">
                        </span>
                    </a>
                    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                        <i class="bx bx-chevron-left bx-sm align-middle"></i>
                    </a>
                </div>
                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">
                    <!-- Dashboard -->
            <li class="menu-item active">
                <a href="<?php echo SERVERURL; ?>home" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-home-circle"></i>
                  <div data-i18n="Analytics">Home</div>
                </a>
              </li>
  
              <!-- Layouts -->
              <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons bx bxs-calendar"></i>
                  <div data-i18n="Layouts">Seguimientos</div>
                </a>
  
                <ul class="menu-sub">
                  <li class="menu-item">
                    <a href="<?php echo SERVERURL; ?>estado-new" class="menu-link">
                        <i class='menu-icon tf-icons bx bx-add-to-queue m-2'></i>
                      <div data-i18n="Without menu">Añadir estado de practica</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="<?php echo SERVERURL; ?>estado-list" class="menu-link">
                        <i class='menu-icon tf-icons bx bx-detail m-2'></i>
                      <div data-i18n="Without navbar">Listado de aprendices</div>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons bx bx-dock-top"></i>
                  <div data-i18n="Account Settings">Evidencias</div>
                </a>
                <ul class="menu-sub">
                  <li class="menu-item">
                    <a href="<?php echo SERVERURL; ?>evidencias-new" class="menu-link">
                        <i class='menu-icon tf-icons bx bx-download m-2'></i>
                      <div data-i18n="Account">Añadir evidencias</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="<?php echo SERVERURL; ?>evidencias-list" class="menu-link">
                        <i class='menu-icon tf-icons bx bx-layer m-2'></i>
                      <div data-i18n="Notifications">Listado de evidencias</div>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons bx bx-message-alt-dots"></i>
                  <div data-i18n="Authentications">Solicitudes</div>
                </a>
                <ul class="menu-sub">
                  <li class="menu-item">
                    <a href="#" class="menu-link" target="_blank">
                        <i class='menu-icon tf-icons  bx bx-envelope m-2'></i>
                      <div data-i18n="Basic">todas las solicitudes</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="#" class="menu-link" target="_blank">
                        <i class=' menu-icon tf-icons bx bx-comment-add m-2'></i>
                      <div data-i18n="Basic">añadir solicitud</div>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons bx bx-cube-alt"></i>
                  <div data-i18n="Misc">configuracion de cuenta</div>
                </a>
                <ul class="menu-sub">
                  <li class="menu-item">
                    <a href="#" class="menu-link">
                        <i class='menu-icon tf-icons bx bx-user m-2'></i>
                      <div data-i18n="Error">Cuenta</div>
                    </a>
                  </li>|
                </ul>
               </ul>
       