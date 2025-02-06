
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Waste Reports Dashboard - Mwanza & Ilemela</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <style>
        :root {
            --primary: #27628f;
            --secondary: #90ee90;
            --accent: #88c425;
            --light: #f8f9fa;
            --dark: #1e2a3a;
            --danger: #dc3545;
            --warning: #ffc107;
            --success: #198754;
        }

        .hero-section {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            padding: 4rem 0;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            width: 200%;
            height: 200%;
            background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1440 320'%3E%3Cpath fill='%23ffffff20' fill-opacity='1' d='M0,96L48,122.7C96,149,192,203,288,224C384,245,480,235,576,202.7C672,171,768,117,864,101.3C960,85,1056,107,1152,133.3C1248,160,1344,192,1392,208L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z'%3E%3C/path%3E%3C/svg%3E");
            opacity: 0.1;
            animation: wave 15s linear infinite;
        }

        @keyframes wave {
            0% { transform: translateY(0) rotate(0deg); }
            100% { transform: translateY(-50%) rotate(360deg); }
        }

        .stats-card {
            background: white;
            border-radius: 15px;
            padding: 1.5rem;
            margin-bottom: -50px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
            position: relative;
            z-index: 2;
        }

        .table-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            margin-bottom: 2rem;
        }

        .table-header {
            background: linear-gradient(135deg, var(--primary), #1a5f7a);
            color: white;
            padding: 1.5rem;
        }

        .search-box {
            position: relative;
            margin-bottom: 1.5rem;
        }

        .search-box input {
            width: 100%;
            padding: 0.75rem 1rem 0.75rem 3rem;
            border: 1px solid #dee2e6;
            border-radius: 50px;
            outline: none;
        }

        .search-box i {
            position: absolute;
            left: 1rem;
            top: 50%;
            transform: translateY(-50%);
            color: #6c757d;
        }

        .status-badge {
            padding: 0.5rem 1rem;
            border-radius: 50px;
            font-size: 0.875rem;
            font-weight: 500;
        }

        .status-pending {
            background: rgba(255, 193, 7, 0.1);
            color: var(--warning);
        }

        .status-resolved {
            background: rgba(25, 135, 84, 0.1);
            color: var(--success);
        }

        .status-rejected {
            background: rgba(220, 53, 69, 0.1);
            color: var(--danger);
        }

        .report-image {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 10px;
            cursor: pointer;
        }

        .filter-dropdown {
            padding: 0.5rem 1rem;
            border: 1px solid #dee2e6;
            border-radius: 50px;
            outline: none;
            background: white;
            margin-right: 1rem;
        }
    </style>
</head>