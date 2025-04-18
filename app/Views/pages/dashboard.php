<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MetroNarc - Download Center</title>
    <link href="<?= base_url('/img/favicon.png') ?>" rel="icon">
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- SweetAlert2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <style>
        .download-card {
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .download-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        .bg-custom-light {
            background-color: #f8f9fa;
        }
        .btn-download {
            transition: all 0.2s ease;
        }
        .btn-download:hover {
            transform: translateY(-2px);
        }
    </style>
</head>
<body class="bg-custom-light">
    <div class="container py-5">
        <h1 class="text-center mb-5">Download Center</h1>
        <div class="row g-4">
            <!-- Slide Deck Card -->
            <div class="col-12 col-lg-4">
                <div class="card h-100 download-card border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="display-4 text-primary mb-3">
                            <i class="fas fa-file-powerpoint"></i>
                        </div>
                        <h3 class="card-title h4">Slide Decks</h3>
                        <p class="card-text text-muted mb-4">Product presentation slides for our IoT solutions</p>
                        <div class="d-grid gap-3">
                            <button onclick="checkAndDownload('<?= base_url('folders/slide-deck/welding-machine-iot-deck.pdf') ?>')" class="btn btn-primary btn-download">
                                <i class="fas fa-download me-2"></i>Welding Machine IoT Deck
                            </button>
                            <button onclick="checkAndDownload('<?= base_url('folders/slide-deck/cnc-machine-iot-deck.pdf') ?>')" class="btn btn-outline-primary btn-download">
                                <i class="fas fa-download me-2"></i>CNC Machine IoT Deck
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Catalogue Card -->
            <div class="col-12 col-lg-4">
                <div class="card h-100 download-card border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="display-4 text-success mb-3">
                            <i class="fas fa-book-open"></i>
                        </div>
                        <h3 class="card-title h4">Product Catalogue</h3>
                        <p class="card-text text-muted mb-4">Complete MetroNarc product specifications and features</p>
                        <div class="d-grid">
                            <button onclick="checkAndDownload('<?= base_url('folders/catalogue/metronarc-catalogue.pdf') ?>')" class="btn btn-success btn-download">
                                <i class="fas fa-download me-2"></i>MetroNarc Product Catalogue
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project Datasheet Card -->
            <div class="col-12 col-lg-4">
                <div class="card h-100 download-card border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="display-4 text-info mb-3">
                            <i class="fas fa-file-alt"></i>
                        </div>
                        <h3 class="card-title h4">Product Datasheets</h3>
                        <p class="card-text text-muted mb-4">Technical specifications and detailed information</p>
                        <div class="d-grid gap-3">
                            <button onclick="checkAndDownload('<?= base_url('folders/datasheet/SPARC-GAMMA.pdf') ?>')" class="btn btn-info text-white btn-download">
                                <i class="fas fa-download me-2"></i>SPARC Gamma Datasheet
                            </button>
                            <button onclick="checkAndDownload('<?= base_url('folders/datasheet/SPARC-CNC.pdf') ?>')" class="btn btn-outline-info btn-download">
                                <i class="fas fa-download me-2"></i>SPARC CNC Datasheet
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <script>
        function checkAndDownload(fileUrl) {
            fetch(fileUrl, { method: 'HEAD' })
                .then(response => {
                    if (response.ok) {
                        // File exists, open in new tab
                        window.open(fileUrl, '_blank');
                    } else {
                        // File doesn't exist
                        Swal.fire({
                            icon: 'error',
                            title: 'File Not Available',
                            text: 'Sorry, the requested file is currently not available.',
                            confirmButtonColor: '#3085d6'
                        });
                    }
                })
                .catch(error => {
                    // Error checking file
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'An error occurred while checking the file availability.',
                        confirmButtonColor: '#3085d6'
                    });
                });
        }
    </script>
</body>
</html>