{{-- resources/views/bootcamp/index.blade.php --}}
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootcamp Literasi AI - Akademi Integriti</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #2563eb;
            --secondary: #1e40af;
            --accent: #f59e0b;
        }
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
        }
        .hero-section {
            background: rgba(255,255,255,0.95);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }
        .card-modern {
            border: none;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }
        .card-modern:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.2);
        }
        .btn-primary-custom {
            background: linear-gradient(45deg, var(--primary), var(--secondary));
            border: none;
            border-radius: 50px;
            padding: 12px 30px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        .btn-primary-custom:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(37,99,235,0.3);
        }
        .progress-custom {
            height: 10px;
            border-radius: 10px;
            background: rgba(255,255,255,0.3);
        }
        .video-container {
            position: relative;
            padding-bottom: 56.25%;
            height: 0;
            overflow: hidden;
            border-radius: 20px;
        }
        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent py-4">
        <div class="container">
            <a class="navbar-brand fw-bold fs-3" href="#">
                <i class="fas fa-brain text-warning me-2"></i>
                Akademi Integriti
            </a>
        </div>
    </nav>

    <div class="container py-5">
        <!-- Hero Section -->
        <div class="row justify-content-center mb-5">
            <div class="col-lg-10 text-center hero-section p-5">
                <h1 class="display-4 fw-bold mb-4 text-primary">
                    <i class="fas fa-rocket me-3"></i>
                    Bootcamp Literasi Penggunaan AI
                </h1>
                <p class="lead mb-4 text-muted">
                    Tingkatkan kompetensi Anda dalam memanfaatkan AI secara etis dan efektif
                </p>
                <div class="row g-4">
                    <div class="col-md-3">
                        <div class="card-modern p-4 text-center bg-primary text-white">
                            <i class="fas fa-users fa-2x mb-3"></i>
                            <h5>500+</h5>
                            <small>Participants</small>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card-modern p-4 text-center bg-success text-white">
                            <i class="fas fa-video fa-2x mb-3"></i>
                            <h5>10+</h5>
                            <small>Video Lessons</small>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card-modern p-4 text-center bg-warning text-dark">
                            <i class="fas fa-certificate fa-2x mb-3"></i>
                            <h5>Certified</h5>
                            <small>Program</small>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card-modern p-4 text-center bg-info text-white">
                            <i class="fas fa-clock fa-2x mb-3"></i>
                            <h5>2 Jam</h5>
                            <small>Duration</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-5">
            <!-- Video Literasi Section -->
            <div class="col-lg-8">
                <div class="card card-modern h-100">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">
                            <i class="fas fa-play-circle me-2"></i>
                            Video Literasi AI
                        </h4>
                    </div>
                    <div class="card-body p-0">
                        <div class="video-container p-4">
                            <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ?rel=0" 
                                    title="AI Literacy Video" 
                                    frameborder="0" 
                                    allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Kuesioner Section -->
            <div class="col-lg-4">
                <div class="card card-modern h-100">
                    <div class="card-header bg-success text-white">
                        <h5 class="mb-0">
                            <i class="fas fa-clipboard-check me-2"></i>
                            Kuesioner Penutup
                        </h5>
                    </div>
                    <div class="card-body">
                        <form id="kuesionerForm">
                            <div class="mb-3">
                                <label class="form-label fw-bold">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold">Email</label>
                                <input type="email" class="form-control" id="email" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold">Institusi</label>
                                <input type="text" class="form-control" id="institusi" required>
                            </div>

                            <!-- Pertanyaan Likert Scale -->
                            <div class="mb-4">
                                <h6 class="fw-bold mb-3">Penilaian Anda (1 = Sangat Tidak Setuju, 5 = Sangat Setuju):</h6>
                                
                                <div class="mb-3">
                                    <label class="form-label">Saya memahami konsep dasar AI</label>
                                    <div class="d-flex justify-content-between">
                                        <span class="text-muted small">1</span>
                                        <select class="form-select w-50 mx-2" id="q1" required>
                                            <option value="">Pilih</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                        <span class="text-muted small">5</span>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Saya tahu cara menggunakan AI secara efektif</label>
                                    <div class="d-flex justify-content-between">
                                        <span class="text-muted small">1</span>
                                        <select class="form-select w-50 mx-2" id="q2" required>
                                            <option value="">Pilih</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                        <span class="text-muted small">5</span>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Saya memahami etika penggunaan AI</label>
                                    <div class="d-flex justify-content-between">
                                        <span class="text-muted small">1</span>
                                        <select class="form-select w-50 mx-2" id="q3" required>
                                            <option value="">Pilih</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                        <span class="text-muted small">5</span>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Bootcamp ini meningkatkan literasi AI saya</label>
                                    <div class="d-flex justify-content-between">
                                        <span class="text-muted small">1</span>
                                        <select class="form-select w-50 mx-2" id="q4" required>
                                            <option value="">Pilih</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                        <span class="text-muted small">5</span>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-bold">Feedback (Opsional)</label>
                                <textarea class="form-control" id="feedback" rows="3" placeholder="Bagikan pendapat Anda..."></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary-custom w-100 btn-lg">
                                <i class="fas fa-paper-plane me-2"></i>
                                Kirim Kuesioner
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Statistik Real-time -->
        <div class="row mt-5">
            <div class="col-12">
                <div class="card card-modern">
                    <div class="card-header bg-info text-white">
                        <h5 class="mb-0">
                            <i class="fas fa-chart-bar me-2"></i>
                            Statistik Kuesioner Real-time
                        </h5>
                    </div>
                    <div class="card-body">
                        <div id="statsContainer" class="row text-center">
                            <div class="col-md-3 mb-3">
                                <h3 id="totalResponden" class="text-primary">0</h3>
                                <small>Total Responden</small>
                            </div>
                            <div class="col-md-3 mb-3">
                                <h3 id="avgQ1" class="text-success">0</h3>
                                <small>Rata-rata Pemahaman AI</small>
                            </div>
                            <div class="col-md-3 mb-3">
                                <h3 id="avgQ2" class="text-warning">0</h3>
                                <small>Rata-rata Penggunaan</small>
                            </div>
                            <div class="col-md-3 mb-3">
                                <h3 id="avgQ3" class="text-info">0</h3>
                                <small>Rata-rata Etika</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>