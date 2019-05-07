 

 <!-- Sidebar -->
 
    <div class="  border-right bg-primary text-white" id="sidebar-wrapper"> 
      <div class="sidebar-heading" style="display: none">
       </div>
      <div class="list-group list-group-flush bg-primary text-white">
       <a  class=" list-group-item list-group-item-action bg-primary text-white" style="width: 100%;padding: 0;margin: 0;" ><img style="width: 100%;padding: 0;margin: 0;"   src="http://localhost/src/img/logo.png" /></a> 
        <a   id="m_inicio" href="http://localhost/src/index.php" class=" list-group-item list-group-item-action bg-primary text-white">Inicio</a> 
        <a   id="m_distribuidores" href="http://localhost/src/distribuidores/distribuidores.php" class="menudisplay list-group-item list-group-item-action bg-primary text-white">Distribuidores</a>
        <a   id="m_clientes" href="http://localhost/src/clientes/clientes.php" class="menudisplay list-group-item list-group-item-action bg-primary text-white">Clientes</a>
        <div class="btn-group dropright">
          <a  id="m_banco" href="#" class="menudisplay list-group-item list-group-item-action bg-primary text-white  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Banco
          </a> 
          <div class="dropdown-menu">  
                  <a  id="m_desembolsos" href="http://localhost/src/banco/desembolsos.php" class=" menudisplay dropdown-item list-group-item list-group-item-action bg-blue-grey">Desembolsos</a>
                  <a  id="m_pagos" href="http://localhost/src/banco/pagos.php" class=" menudisplay dropdown-item list-group-item list-group-item-action bg-blue-grey">Pagos</a>
                  <a  id="m_cortes" href="http://localhost/src/banco/cortes.php" class=" menudisplay dropdown-item list-group-item list-group-item-action bg-blue-grey">Cortes</a>
                  <a  id="m_caja" href="http://localhost/src/banco/cajas.php" class=" menudisplay dropdown-item list-group-item list-group-item-action bg-blue-grey">Entradas y Salidas</a>
          </div>
        </div> 
        <!--a   id="m_historial" href="#" class="menudisplay list-group-item list-group-item-action bg-primary text-white">Historial</a>  
        <a   id="m_credito" href="http://localhost/src/distribuidores/credito.php" class="menudisplay list-group-item list-group-item-action bg-primary text-white">Credito</a--> 
        <a   id="m_carteras" href="http://localhost/src/carteras/carteras.php" class="menudisplay list-group-item list-group-item-action bg-primary text-white">Carteras</a> 
        <a   id="m_valeras" href="http://localhost/src/valeras/valeras.php" class="menudisplay list-group-item list-group-item-action bg-primary text-white">Valeras</a>
        <a   id="m_cancelacion_vales" href="#" class="menudisplay list-group-item list-group-item-action bg-primary text-white">Cancelacion de Vales</a>
        <div class="btn-group dropright">
          <a  id="m_reportes" href="#" class=" menudisplay list-group-item list-group-item-action bg-primary text-white  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Reportes
          </a> 
          <div class="dropdown-menu">  
                  <a  id="m_rep_desembolsos" href="#" class=" menudisplay dropdown-item list-group-item list-group-item-action bg-blue-grey">Desembolsos</a>  
                  <a  id="m_rep_pagos" href="#" class=" menudisplay dropdown-item list-group-item list-group-item-action bg-blue-grey">Pagos</a>
                  <a  id="m_rep_caja" href="#" class=" menudisplay dropdown-item list-group-item list-group-item-action bg-blue-grey">Entradas y Salidas</a>  
                  <a  id="m_relaciones" href="#" class=" menudisplay dropdown-item list-group-item list-group-item-action bg-blue-grey">Relaciones de Cobro</a>
                  <a  id="m_recibos" href="#" class=" menudisplay dropdown-item list-group-item list-group-item-action bg-blue-grey">Recibos de Cliente</a>
                  <a  id="m_rep_colocado" href="#" class=" menudisplay dropdown-item list-group-item list-group-item-action bg-blue-grey">Colocado</a>
                  <a  id="m_rep_ppagos" href="#" class=" menudisplay dropdown-item list-group-item list-group-item-action bg-blue-grey">Pendientes de Pago</a>
                   <a  id="m_rep_movimientos" href="#" class=" menudisplay dropdown-item list-group-item list-group-item-action bg-blue-grey">Gral Movimientos</a>
          </div>
        </div> 
        <div class="btn-group dropright">
          <a  id="m_administracion" href="#" class="menudisplay list-group-item list-group-item-action bg-primary text-white  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Administracion
          </a> 
          <div class="dropdown-menu">  
                  <a  id="m_usuarios" href="#" class=" menudisplay dropdown-item list-group-item list-group-item-action bg-blue-grey">Usuarios</a>
                  <a  id="m_perfiles" href="#" class=" menudisplay dropdown-item list-group-item list-group-item-action bg-blue-grey">Perfiles</a>
          </div>
        </div> 

        <a   id="m_sucursales" href="#" class="menudisplay list-group-item list-group-item-action bg-primary text-white">Sucursales</a>
        <a   id="m_zonas" href="#" class="menudisplay list-group-item list-group-item-action bg-primary text-white">Zonas</a>
        
        
        <a href="#" onclick="cerrarSesion()" class="list-group-item list-group-item-action bg-primary text-white"><i class="fas fa-times-circle h4"></i> Cerrar Sesión</a> 

      </div>

       
</div>
    <!-- /#sidebar-wrapper -->