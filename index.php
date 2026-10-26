<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>MediCitas - Panel Administrativo</title>
  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- FontAwesome Icons -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <style>
    body { font-family: system-ui, -apple-system, sans-serif; background-color: #f1f5f9; }
    #wrapper { display: flex; min-height: 100vh; }
    #content-wrapper { flex: 1; display: flex; flex-direction: column; }
    .sidebar { width: 250px; min-height: 100vh; }
    .card { border-radius: 0.75rem; border: none; }
    .border-left-primary { border-left: 0.35rem solid #2563eb !important; }
    .border-left-success { border-left: 0.35rem solid #16a34a !important; }
    .border-left-info { border-left: 0.35rem solid #0284c7 !important; }
    .border-left-warning { border-left: 0.35rem solid #eab308 !important; }
  </style>
</head>
<body id="page-top">
  <div id="wrapper">
    
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar" style="background: linear-gradient(180deg, #1e40af 0%, #1e3a8a 100%);">
      <a class="sidebar-brand d-flex align-items-center justify-content-center py-3 text-white text-decoration-none" href="index.php">
        <div class="sidebar-brand-icon fs-3 me-2">🏥</div>
        <div class="sidebar-brand-text mx-1 fw-bold fs-4">MediCitas</div>
      </a>
      <hr class="sidebar-divider my-2 border-white opacity-25">
      <div class="sidebar-heading text-uppercase text-white-50 px-3 py-2 small fw-bold">Menú Médico</div>
      
        <li class="nav-item active">
          <a class="nav-link py-3 px-3 d-flex align-items-center gap-2 text-white fw-bold bg-white bg-opacity-10 rounded mx-2" href="index.php">
            <i class="fas fa-chart-line"></i>
            <span>Dashboard</span>
          </a>
        </li>
      
        <li class="nav-item ">
          <a class="nav-link py-3 px-3 d-flex align-items-center gap-2 text-white-50" href="pacientes.php">
            <i class="fas fa-user-injured"></i>
            <span>Pacientes</span>
          </a>
        </li>
      
        <li class="nav-item ">
          <a class="nav-link py-3 px-3 d-flex align-items-center gap-2 text-white-50" href="doctores.php">
            <i class="fas fa-user-md"></i>
            <span>Doctores</span>
          </a>
        </li>
      
        <li class="nav-item ">
          <a class="nav-link py-3 px-3 d-flex align-items-center gap-2 text-white-50" href="citas.php">
            <i class="fas fa-calendar-plus"></i>
            <span>Agendar Cita</span>
          </a>
        </li>
      
        <li class="nav-item ">
          <a class="nav-link py-3 px-3 d-flex align-items-center gap-2 text-white-50" href="historial.php">
            <i class="fas fa-notes-medical"></i>
            <span>Historial Clínico</span>
          </a>
        </li>
      
      <hr class="sidebar-divider my-2 border-white opacity-25">
      <div class="sidebar-heading text-uppercase text-white-50 px-3 py-2 small fw-bold">Sistema</div>
      <li class="nav-item">
        <a class="nav-link py-2 px-3 text-white-50 d-flex align-items-center gap-2" href="index.php">
          <i class="fas fa-hospital-user"></i>
          <span>Portal Administrativo</span>
        </a>
      </li>
    </ul>
  
    <div id="content-wrapper">
      <div id="content">
        
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow-sm px-4">
      <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
      </button>
      <span class="navbar-brand mb-0 h6 text-primary fw-bold d-none d-sm-block">Centro Médico Integral - MediCitas</span>
      <ul class="navbar-nav ms-auto align-items-center">
        <li class="nav-item me-3">
          <span class="badge bg-success py-2 px-3 rounded-pill">🟢 Sistema Online</span>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-dark fw-bold d-flex align-items-center gap-2" href="#">
            <i class="fas fa-user-circle fs-4 text-primary"></i>
            <span>Dr. Administrador</span>
          </a>
        </li>
      </ul>
    </nav>
  
        <div class="container-fluid px-4">
          
  <div class="d-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800 fw-bold">Panel Principal - MediCitas</h1>
    <a href="citas.php" class="btn btn-primary shadow-sm"><i class="fas fa-calendar-plus me-1"></i> Agendar Nueva Cita</a>
  </div>

  <!-- KPI Cards -->
  <div class="row g-3 mb-4">
    <div class="col-xl-3 col-md-6">
      <div class="card shadow-sm border-left-primary p-3">
        <div class="d-flex align-items-center justify-content-between">
          <div>
            <div class="text-xs fw-bold text-primary text-uppercase mb-1">Pacientes Atendidos Hoy</div>
            <div class="h4 mb-0 fw-bold text-gray-800">28</div>
          </div>
          <i class="fas fa-user-injured fa-2x text-primary opacity-50"></i>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-md-6">
      <div class="card shadow-sm border-left-success p-3">
        <div class="d-flex align-items-center justify-content-between">
          <div>
            <div class="text-xs fw-bold text-success text-uppercase mb-1">Citas Programadas</div>
            <div class="h4 mb-0 fw-bold text-gray-800">42</div>
          </div>
          <i class="fas fa-calendar-check fa-2x text-success opacity-50"></i>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-md-6">
      <div class="card shadow-sm border-left-info p-3">
        <div class="d-flex align-items-center justify-content-between">
          <div>
            <div class="text-xs fw-bold text-info text-uppercase mb-1">Doctores Disponibles</div>
            <div class="h4 mb-0 fw-bold text-gray-800">12 / 15</div>
          </div>
          <i class="fas fa-user-md fa-2x text-info opacity-50"></i>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-md-6">
      <div class="card shadow-sm border-left-warning p-3">
        <div class="d-flex align-items-center justify-content-between">
          <div>
            <div class="text-xs fw-bold text-warning text-uppercase mb-1">Consultas en Espera</div>
            <div class="h4 mb-0 fw-bold text-gray-800">6</div>
          </div>
          <i class="fas fa-hourglass-half fa-2x text-warning opacity-50"></i>
        </div>
      </div>
    </div>
  </div>

  <!-- Table: Próximas Citas -->
  <div class="card shadow-sm mb-4">
    <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
      <h6 class="m-0 fw-bold text-primary">Citas Médicas del Día</h6>
      <span class="badge bg-primary">Fecha: <?php echo date('d/m/Y'); ?></span>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-hover align-middle">
          <thead class="table-light">
            <tr>
              <th>Hora</th>
              <th>Paciente</th>
              <th>Doctor Asignado</th>
              <th>Especialidad</th>
              <th>Estado</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>09:00 AM</td>
              <td class="fw-bold">María Rodríguez</td>
              <td>Dr. Carlos Mendoza</td>
              <td>Cardiología</td>
              <td><span class="badge bg-success">Completada</span></td>
              <td><a href="historial.php" class="btn btn-sm btn-outline-primary">Historial</a></td>
            </tr>
            <tr>
              <td>10:30 AM</td>
              <td class="fw-bold">Juan Pérez Gómez</td>
              <td>Dra. Laura Sánchez</td>
              <td>Pediatría</td>
              <td><span class="badge bg-warning text-dark">En Espera</span></td>
              <td><a href="historial.php" class="btn btn-sm btn-outline-primary">Historial</a></td>
            </tr>
            <tr>
              <td>11:15 AM</td>
              <td class="fw-bold">Ana Martínez López</td>
              <td>Dr. Manuel Castillo</td>
              <td>Medicina General</td>
              <td><span class="badge bg-primary">Programada</span></td>
              <td><a href="historial.php" class="btn btn-sm btn-outline-primary">Historial</a></td>
            </tr>
            <tr>
              <td>01:00 PM</td>
              <td class="fw-bold">Roberto Jiménez</td>
              <td>Dra. Patricia Reyes</td>
              <td>Dermatología</td>
              <td><span class="badge bg-secondary">Pendiente</span></td>
              <td><a href="historial.php" class="btn btn-sm btn-outline-primary">Historial</a></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

        </div>
      </div>
      <footer class="sticky-footer bg-white py-3 mt-auto border-top">
        <div class="container text-center my-auto">
          <span class="text-muted small">&copy; 2026 MediCitas - Sistema de Gestión de Citas Médicas. Todos los derechos reservados.</span>
        </div>
      </footer>
    </div>
  </div>
  <!-- Bootstrap 5 Bundle JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>