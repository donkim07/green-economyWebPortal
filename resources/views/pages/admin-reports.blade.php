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

<body>
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <h1 class="display-4 fw-bold mb-4">Waste Reports Dashboard</h1>
                    <p class="lead mb-4">Track and manage waste reports across Mwanza & Ilemela</p>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="row g-4 text-center" id="reportStats">
                        <!-- Stats will be populated by JavaScript -->
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Main Content -->
    <section class="py-5 bg-light">
        <div class="container">
            <!-- Quick Stats -->
            <div class="row" data-aos="fade-up">
                <div class="col-12">
                    <div class="stats-card">
                        <div class="row g-4">
                            <div class="col-md-3 text-center">
                                <i class="fas fa-clock fa-2x text-warning mb-3"></i>
                                <h4 id="pendingCount">Loading...</h4>
                                <p class="text-muted mb-0">Pending Reports</p>
                            </div>
                            <div class="col-md-3 text-center">
                                <i class="fas fa-check-circle fa-2x text-success mb-3"></i>
                                <h4 id="resolvedCount">Loading...</h4>
                                <p class="text-muted mb-0">Resolved Reports</p>
                            </div>
                            <div class="col-md-3 text-center">
                                <i class="fas fa-times-circle fa-2x text-danger mb-3"></i>
                                <h4 id="rejectedCount">Loading...</h4>
                                <p class="text-muted mb-0">Rejected Reports</p>
                            </div>
                            <div class="col-md-3 text-center">
                                <i class="fas fa-chart-line fa-2x text-primary mb-3"></i>
                                <h4 id="totalCount">Loading...</h4>
                                <p class="text-muted mb-0">Total Reports</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Reports Table -->
            <div class="table-card mt-5" data-aos="fade-up">
                <div class="table-header">
                    <div class="d-flex justify-content-between align-items-center flex-wrap">
                        <h2 class="h4 mb-3 mb-md-0">Waste Reports</h2>
                        <div class="d-flex align-items-center">
                            <select class="filter-dropdown" id="districtFilter" onchange="filterReports()">
                                <option value="">All Districts</option>
                                <option value="Mwanza">Mwanza</option>
                                <option value="Ilemela">Ilemela</option>
                            </select>
                            <select class="filter-dropdown" id="statusFilter" onchange="filterReports()">
                                <option value="">All Status</option>
                                <option value="pending">Pending</option>
                                <option value="resolved">Resolved</option>
                                <option value="rejected">Rejected</option>
                            </select>
                            <div class="search-box bg-white rounded-pill" style="width: 250px;">
                                <i class="fas fa-search"></i>
                                <input type="text" placeholder="Search reports..." onkeyup="searchReports()">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Image</th>
                                <th>Reporter</th>
                                <th>Contact</th>
                                <th>Location</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="reportsTableBody">
                            <!-- Reports will be populated by JavaScript -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- Image Preview Modal -->
    <div class="modal fade" id="imagePreviewModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Report Image</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body text-center">
                    <img id="previewImage" src="" alt="Report Image" style="max-width: 100%;">
                </div>
            </div>
        </div>
    </div>
    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://www.gstatic.com/firebasejs/10.7.1/firebase-app-compat.js"></script>
    <script src="https://www.gstatic.com/firebasejs/10.7.1/firebase-firestore-compat.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    <script>
        // Initialize Firebase
        const firebaseConfig = {
            apiKey: "",
            authDomain: "waste-manager-ef49a.firebaseapp.com",
            projectId: "waste-manager-ef49a",
            storageBucket: "waste-manager-ef49a.appspot.com",
            messagingSenderId: "603598484412",
            appId: "1:603598484412:web:715516a9e42a2e3293b1b9",
            measurementId: "G-QK5R7K1VSG"
        };

        firebase.initializeApp(firebaseConfig);
        const db = firebase.firestore();

        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true
        });
// Load and update statistics
async function updateStatistics() {
            try {
                const reportsRef = db.collection('wasteReports');
                const [pending, resolved, rejected] = await Promise.all([
                    reportsRef.where('status', '==', 'pending').get(),
                    reportsRef.where('status', '==', 'resolved').get(),
                    reportsRef.where('status', '==', 'rejected').get()
                ]);

                const stats = {
                    pending: pending.size,
                    resolved: resolved.size,
                    rejected: rejected.size,
                    total: pending.size + resolved.size + rejected.size
                };

                // Update stats display
                document.getElementById('pendingCount').textContent = stats.pending;
                document.getElementById('resolvedCount').textContent = stats.resolved;
                document.getElementById('rejectedCount').textContent = stats.rejected;
                document.getElementById('totalCount').textContent = stats.total;

                // Update hero stats
                document.getElementById('reportStats').innerHTML = `
                    <div class="col-6">
                        <div class="bg-white bg-opacity-10 rounded-3 p-3">
                            <h3 class="mb-0">${stats.total}</h3>
                            <small>Total Reports</small>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="bg-white bg-opacity-10 rounded-3 p-3">
                            <h3 class="mb-0">${stats.pending}</h3>
                            <small>Pending Reports</small>
                        </div>
                    </div>
                `;
            } catch (error) {
                console.error("Error updating statistics:", error);
            }
        }
         // Load reports
         async function loadReports() {
            const tableBody = document.getElementById('reportsTableBody');
            tableBody.innerHTML = '';

            try {
                const snapshot = await db.collection('wasteReports')
                    .orderBy('reportedAt', 'desc')
                    .get();

                snapshot.forEach(doc => {
                    const data = doc.data();
                    const row = document.createElement('tr');
                    const date = data.reportedAt?.toDate() || new Date();
                    
                    row.innerHTML = `
                        <td>${date.toLocaleDateString()}</td>
                        <td>
                            <img src="${data.imageUrl}" alt="Report Image" class="report-image"
                                onclick="showImagePreview('${data.imageUrl}')">
                        </td>
                        <td>${data.reporterName || 'N/A'}</td>
                        <td>
                            ${data.reporterPhone ? `<i class="fas fa-phone-alt text-success"></i> ${data.reporterPhone}<br>` : ''}
                            ${data.reporterEmail ? `<i class="fas fa-envelope text-primary"></i> ${data.reporterEmail}` : ''}
                        </td>
                        <td>
                            <strong>${data.district}</strong><br>
                            ${data.ward}, ${data.street}
                        </td>
                        <td>
                            <span class="status-badge status-${data.status}">
                                ${data.status.charAt(0).toUpperCase() + data.status.slice(1)}
                            </span>
                        </td>
                        <td>
                            <button class="btn btn-sm btn-outline-primary" 
                                onclick="viewLocation(${data.location.latitude}, ${data.location.longitude})">
                                <i class="fas fa-map-marker-alt"></i>
                            </button>
                            <button class="btn btn-sm btn-outline-success ms-1" 
                                onclick="updateStatus('${doc.id}', 'resolved')">
                                <i class="fas fa-check"></i>
                            </button>
                            <button class="btn btn-sm btn-outline-danger ms-1" 
                                onclick="updateStatus('${doc.id}', 'rejected')">
                                <i class="fas fa-times"></i>
                            </button>
                        </td>
                    `;
                    tableBody.appendChild(row);
                });
            } catch (error) {
                console.error("Error loading reports:", error);
            }
        }

        // Search functionality
        function searchReports() {
            const input = document.querySelector('.search-box input');
            const filter = input.value.toUpperCase();
            const rows = document.getElementById('reportsTableBody').getElementsByTagName('tr');

            for (const row of rows) {
                const cells = row.getElementsByTagName('td');
                let shouldShow = false;

                for (const cell of cells) {
                    const text = cell.textContent || cell.innerText;
                    if (text.toUpperCase().indexOf(filter) > -1) {
                        shouldShow = true;
                        break;
                    }
                }

                row.style.display = shouldShow ? '' : 'none';
            }
        }

        // Filter reports
        async function filterReports() {
            const district = document.getElementById('districtFilter').value;
            const status = document.getElementById('statusFilter').value;
            const tableBody = document.getElementById('reportsTableBody');
            tableBody.innerHTML = '';
try {
                let query = db.collection('wasteReports');
                
                if (district) {
                    query = query.where('district', '==', district);
                }
                if (status) {
                    query = query.where('status', '==', status);
                }
            query = query.orderBy('reportedAt', 'desc');
                const snapshot = await query.get();

                snapshot.forEach(doc => {
                    const data = doc.data();
                    const row = document.createElement('tr');
                    const date = data.reportedAt?.toDate() || new Date();

                    
                    row.innerHTML = `
                        <td>${date.toLocaleDateString()}</td>
                        <td>
                            <img src="${data.imageUrl}" alt="Report Image" class="report-image"
                                onclick="showImagePreview('${data.imageUrl}')">
                        </td>
                        <td>${data.reporterName || 'N/A'}</td>
                        <td>
                            ${data.reporterPhone ? `<i class="fas fa-phone-alt text-success"></i> ${data.reporterPhone}<br>` : ''}
                
                            
                        

