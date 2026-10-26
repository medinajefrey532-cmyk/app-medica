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
      
        <li class="nav-item ">
          <a class="nav-link py-3 px-3 d-flex align-items-center gap-2 text-white-50" href="index.php">
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
      
        <li class="nav-item active">
          <a class="nav-link py-3 px-3 d-flex align-items-center gap-2 text-white fw-bold bg-white bg-opacity-10 rounded mx-2" href="citas.php">
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
    <h1 class="h3 mb-0 text-gray-800 fw-bold">Agendar Nueva Cita Médica</h1>
  </div>
  <div class="card shadow-sm p-4 col-lg-8 mx-auto">
    <form action="citas.php" method="GET">
      <div class="mb-3">
        <label class="form-label fw-bold">Seleccionar Paciente</label>
        <select class="form-select" required>
          <option value="">Seleccione un paciente...</option>
          <option>María Rodríguez (Expediente #EXP-001)</option>
          <option>Juan Pérez Gómez (Expediente #EXP-002)</option>
          <option>Ana Martínez López (Expediente #EXP-003)</option>
        </select>
      </div>
      <div class="row g-3 mb-3">
        <div class="col-md-6">
          <label class="form-label fw-bold">Especialidad Médica</label>
          <select class="form-select" required>
            <option>Cardiología</option>
            <option>Pediatría</option>
            <option>Medicina General</option>
            <option>Dermatología</option>
          </select>
        </div>
        <div class="col-md-6">
          <label class="form-label fw-bold">Doctor Asignado</label>
          <select class="form-select" required>
            <option>Dr. Carlos Mendoza</option>
            <option>Dra. Laura Sánchez</option>
            <option>Dr. Manuel Castillo</option>
          </select>
        </div>
      </div>
      <div class="row g-3 mb-3">
        <div class="col-md-6">
          <label class="form-label fw-bold">Fecha de Cita</label>
          <input type="date" class="form-control" value="<?php echo date('Y-m-d'); ?>" required>
        </div>
        <div class="col-md-6">
          <label class="form-label fw-bold">Hora</label>
          <input type="time" class="form-control" value="09:00" required>
        </div>
      </div>
      <div class="mb-3">
        <label class="form-label fw-bold">Motivo de Consulta</label>
        <textarea class="form-control" rows="3" placeholder="Descripción breve de los síntomas o consulta..."></textarea>
      </div>
      <button type="button" class="btn btn-primary px-4 fw-bold" onclick="alert('¡Cita agendada exitosamente en el sistema MediCitas!')">Confirmar y Guardar Cita</button>
      <a href="index.php" class="btn btn-outline-secondary ms-2">Volver al Dashboard</a>
    </form>
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