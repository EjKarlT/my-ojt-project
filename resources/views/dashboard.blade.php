<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>OJT Tracker - Dashboard</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            margin: 0;
            background: #f5f7fb;
            font-family: Arial, sans-serif;
        }

        /* SIDEBAR */
        .sidebar {
            width: 250px;
            height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            background: #0d6efd;
            padding: 25px 15px;
        }

        .logo {
            color: white;
            font-size: 24px;
            font-weight: 700;
            padding: 0 15px;
            margin-bottom: 35px;
        }

        .logo i {
            margin-right: 8px;
        }

        .nav-link {
            color: rgba(255,255,255,0.85);
            padding: 13px 15px;
            border-radius: 8px;
            margin-bottom: 5px;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .nav-link:hover,
        .nav-link.active {
            background: rgba(255,255,255,0.18);
            color: white;
        }

        .nav-link i {
            font-size: 18px;
        }

        /* MAIN */
        .main {
            margin-left: 250px;
            min-height: 100vh;
        }

        /* TOPBAR */
        .topbar {
            height: 75px;
            background: white;
            border-bottom: 1px solid #e5e7eb;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 35px;
        }

        .topbar h5 {
            margin: 0;
            font-weight: 700;
        }

        .user-profile {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .avatar {
            width: 42px;
            height: 42px;
            border-radius: 50%;
            background: #0d6efd;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
        }

        /* CONTENT */
        .content {
            padding: 35px;
        }

        .welcome h3 {
            font-weight: 700;
            margin-bottom: 5px;
        }

        .welcome p {
            color: #6c757d;
        }

        /* STAT CARDS */
        .stat-card {
            background: white;
            border-radius: 12px;
            padding: 22px;
            border: 1px solid #eee;
            height: 100%;
        }

        .stat-icon {
            width: 48px;
            height: 48px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 21px;
        }

        .stat-number {
            font-size: 28px;
            font-weight: 700;
            margin-top: 15px;
        }

        .stat-title {
            color: #6c757d;
            font-size: 14px;
        }

        /* CONTENT CARDS */
        .card-custom {
            border: 1px solid #eee;
            border-radius: 12px;
            background: white;
        }

        .card-header-custom {
            padding: 20px;
            border-bottom: 1px solid #eee;
        }

        .card-header-custom h5 {
            margin: 0;
            font-weight: 700;
        }

        /* TABLE */
        .table {
            margin: 0;
        }

        .table th {
            color: #6c757d;
            font-size: 13px;
            font-weight: 600;
            padding: 15px 20px;
        }

        .table td {
            padding: 17px 20px;
            vertical-align: middle;
        }

        /* QUICK ACTIONS */
        .quick-action {
            border: 1px solid #eee;
            border-radius: 10px;
            padding: 15px;
            display: flex;
            align-items: center;
            gap: 12px;
            text-decoration: none;
            color: #212529;
            margin-bottom: 10px;
            transition: 0.2s;
        }

        .quick-action:hover {
            background: #f8f9fa;
            border-color: #0d6efd;
        }

        .quick-icon {
            width: 40px;
            height: 40px;
            background: #eaf2ff;
            color: #0d6efd;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* MOBILE */
        @media (max-width: 768px) {

            .sidebar {
                width: 70px;
                padding: 20px 10px;
            }

            .logo {
                font-size: 0;
                text-align: center;
                padding: 0;
            }

            .logo i {
                font-size: 23px;
                margin: 0;
            }

            .nav-link {
                justify-content: center;
                padding: 12px;
            }

            .nav-link span {
                display: none;
            }

            .main {
                margin-left: 70px;
            }

            .content {
                padding: 20px;
            }
        }
    </style>
</head>

<body>

<!-- SIDEBAR -->
<div class="sidebar">

    <div class="logo">
        <i class="bi bi-mortarboard-fill"></i>
        <span>OJT Tracker</span>
    </div>

    <nav>

        <a href="#" class="nav-link active">
            <i class="bi bi-grid-fill"></i>
            <span>Dashboard</span>
        </a>

        <a href="#" class="nav-link">
            <i class="bi bi-people-fill"></i>
            <span>OJT Students</span>
        </a>

        <a href="#" class="nav-link">
            <i class="bi bi-building"></i>
            <span>Companies</span>
        </a>

        <a href="#" class="nav-link">
            <i class="bi bi-calendar-check"></i>
            <span>Attendance</span>
        </a>

        <a href="#" class="nav-link">
            <i class="bi bi-file-earmark-text"></i>
            <span>Reports</span>
        </a>

        <a href="#" class="nav-link">
            <i class="bi bi-person-badge"></i>
            <span>Users</span>
        </a>

        <hr class="border-light opacity-25">

        <a href="#" class="nav-link">
            <i class="bi bi-gear"></i>
            <span>Settings</span>
        </a>

        <a href="#" class="nav-link">
            <i class="bi bi-box-arrow-right"></i>
            <span>Logout</span>
        </a>

    </nav>

</div>


<!-- MAIN -->
<div class="main">

    <!-- TOPBAR -->
    <div class="topbar">

        <div>
            <h5>Dashboard</h5>
            <small class="text-muted">OJT Management System</small>
        </div>

        <div class="user-profile">

            <div class="text-end d-none d-sm-block">
                <strong>Admin User</strong>
                <br>
                <small class="text-muted">Administrator</small>
            </div>

            <div class="avatar">
                A
            </div>

        </div>

    </div>


    <!-- CONTENT -->
    <div class="content">

        <!-- WELCOME -->
        <div class="welcome mb-4">

            <h3>Welcome back, Admin! 👋</h3>

            <p>
                Here's an overview of your OJT Tracker.
            </p>

        </div>


        <!-- STATISTICS -->
        <div class="row g-4 mb-4">

            <div class="col-xl-3 col-md-6">

                <div class="stat-card">

                    <div class="d-flex justify-content-between">

                        <div>
                            <div class="stat-title">
                                OJT Students
                            </div>

                            <div class="stat-number">
                                120
                            </div>
                        </div>

                        <div class="stat-icon bg-primary-subtle text-primary">
                            <i class="bi bi-people-fill"></i>
                        </div>

                    </div>

                </div>

            </div>


            <div class="col-xl-3 col-md-6">

                <div class="stat-card">

                    <div class="d-flex justify-content-between">

                        <div>
                            <div class="stat-title">
                                Companies
                            </div>

                            <div class="stat-number">
                                25
                            </div>
                        </div>

                        <div class="stat-icon bg-success-subtle text-success">
                            <i class="bi bi-building"></i>
                        </div>

                    </div>

                </div>

            </div>


            <div class="col-xl-3 col-md-6">

                <div class="stat-card">

                    <div class="d-flex justify-content-between">

                        <div>
                            <div class="stat-title">
                                Active OJT
                            </div>

                            <div class="stat-number">
                                85
                            </div>
                        </div>

                        <div class="stat-icon bg-warning-subtle text-warning">
                            <i class="bi bi-person-workspace"></i>
                        </div>

                    </div>

                </div>

            </div>


            <div class="col-xl-3 col-md-6">

                <div class="stat-card">

                    <div class="d-flex justify-content-between">

                        <div>
                            <div class="stat-title">
                                Completed
                            </div>

                            <div class="stat-number">
                                35
                            </div>
                        </div>

                        <div class="stat-icon bg-info-subtle text-info">
                            <i class="bi bi-check-circle-fill"></i>
                        </div>

                    </div>

                </div>

            </div>

        </div>


        <!-- LOWER SECTION -->
        <div class="row g-4">

            <!-- RECENT STUDENTS -->
            <div class="col-lg-8">

                <div class="card-custom">

                    <div class="card-header-custom d-flex justify-content-between align-items-center">

                        <div>
                            <h5>Recent OJT Students</h5>
                            <small class="text-muted">
                                Recently registered students
                            </small>
                        </div>

                        <button class="btn btn-sm btn-primary">
                            View All
                        </button>

                    </div>

                    <div class="table-responsive">

                        <table class="table table-hover">

                            <thead>

                                <tr>
                                    <th>Student</th>
                                    <th>Company</th>
                                    <th>Start Date</th>
                                    <th>Status</th>
                                </tr>

                            </thead>

                            <tbody>

                                <tr>

                                    <td>
                                        <strong>Juan Dela Cruz</strong>
                                        <br>
                                        <small class="text-muted">
                                            BS Information Technology
                                        </small>
                                    </td>

                                    <td>
                                        ABC Technologies
                                    </td>

                                    <td>
                                        September 15, 2026
                                    </td>

                                    <td>
                                        <span class="badge bg-success">
                                            Active
                                        </span>
                                    </td>

                                </tr>

                                <tr>

                                    <td>
                                        <strong>Maria Santos</strong>
                                        <br>
                                        <small class="text-muted">
                                            BS Information Technology
                                        </small>
                                    </td>

                                    <td>
                                        Tech Solutions Inc.
                                    </td>

                                    <td>
                                        September 12, 2026
                                    </td>

                                    <td>
                                        <span class="badge bg-success">
                                            Active
                                        </span>
                                    </td>

                                </tr>

                                <tr>

                                    <td>
                                        <strong>Alex Reyes</strong>
                                        <br>
                                        <small class="text-muted">
                                            BS Information Technology
                                        </small>
                                    </td>

                                    <td>
                                        Digital Works
                                    </td>

                                    <td>
                                        August 20, 2026
                                    </td>

                                    <td>
                                        <span class="badge bg-warning text-dark">
                                            Pending
                                        </span>
                                    </td>

                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>


            <!-- QUICK ACTIONS -->
            <div class="col-lg-4">

                <div class="card-custom">

                    <div class="card-header-custom">

                        <h5>Quick Actions</h5>

                        <small class="text-muted">
                            Frequently used actions
                        </small>

                    </div>

                    <div class="p-3">

                        <a href="#" class="quick-action">

                            <div class="quick-icon">
                                <i class="bi bi-person-plus"></i>
                            </div>

                            <div>
                                <strong>Add OJT Student</strong>
                                <br>
                                <small class="text-muted">
                                    Register a student
                                </small>
                            </div>

                        </a>


                        <a href="#" class="quick-action">

                            <div class="quick-icon">
                                <i class="bi bi-building-add"></i>
                            </div>

                            <div>
                                <strong>Add Company</strong>
                                <br>
                                <small class="text-muted">
                                    Add partner company
                                </small>
                            </div>

                        </a>


                        <a href="#" class="quick-action">

                            <div class="quick-icon">
                                <i class="bi bi-calendar-check"></i>
                            </div>

                            <div>
                                <strong>Attendance</strong>
                                <br>
                                <small class="text-muted">
                                    Manage attendance
                                </small>
                            </div>

                        </a>


                        <a href="#" class="quick-action">

                            <div class="quick-icon">
                                <i class="bi bi-file-earmark-text"></i>
                            </div>

                            <div>
                                <strong>Generate Report</strong>
                                <br>
                                <small class="text-muted">
                                    View OJT reports
                                </small>
                            </div>

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>