<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metronarc Admin Login</title>
    <link rel="icon" type="image/svg+xml" href="<?= base_url(); ?>/img/Logo.png" />
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        :root {
            --primary-color: #2596be;
            --secondary-color: #f8bc0d;
            --container-opacity: 0.7; /* Control container transparency here */
        }
        
        body {
            background: url('<?= base_url(); ?>/img/welding-image.jpg') center center/cover no-repeat fixed;
            min-height: 100vh;
            position: relative;
        }

        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1;
        }
        
        .container {
            position: relative;
            z-index: 2;
        }
        
        .login-container {
            background: rgba(255, 255, 255, var(--container-opacity));
            border-radius: 15px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            backdrop-filter: blur(10px);
            max-width: 400px;
            margin: 0 auto;
            transform: scale(0.95);
        }
        
        .login-header {
            background: rgba(37, 150, 190, var(--container-opacity));
            padding: 15px;
            color: white;
            text-align: center;
        }
        
        .login-form {
            padding: 20px;
        }
        
        .btn-login {
            background: var(--primary-color);
            color: white;
            border: none;
            padding: 8px 20px;
            border-radius: 5px;
            transition: all 0.3s;
            font-size: 0.95rem;
        }
        
        .btn-login:hover {
            background: var(--secondary-color);
            transform: translateY(-2px);
        }
        
        .form-control {
            font-size: 0.95rem;
            padding: 0.375rem 0.75rem;
        }
        
        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.2rem rgba(37, 150, 190, 0.25);
        }
        
        .logo-img {
            max-width: 100px;
            margin-bottom: 15px;
        }
        
        .invalid-feedback {
            color: #dc3545;
            font-size: 0.875rem;
            margin-top: 0.25rem;
        }

        .form-check-input:checked {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }

        .login-header h2 {
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
        }

        .login-header p {
            font-size: 0.9rem;
            margin-bottom: 0;
        }

        .form-label {
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row min-vh-100 align-items-center justify-content-center">
            <div class="col-12">
                <div class="login-container">
                    <div class="login-header">
                        <img src="<?= base_url(); ?>/img/Logo.png" alt="logo" class="logo-img">
                        <h2>Welcome Back!</h2>
                        <p class="mb-0">Please login to your account</p>
                    </div>
                    
                    <div class="login-form">
                        <?= view('Myth\Auth\Views\_message_block') ?>
                        
                        <form action="<?= url_to('login') ?>" method="post">
                            <?= csrf_field() ?>
                            
                            <div class="mb-4">
                                <label for="login" class="form-label">Username</label>
                                <input type="text" 
                                       class="form-control form-control-lg <?php if (session('errors.login')): ?>is-invalid<?php endif ?>" 
                                       id="login"
                                       name="login" 
                                       required>
                                <?php if (session('errors.login')): ?>
                                    <div class="invalid-feedback">
                                        <?= session('errors.login') ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                            
                            <div class="mb-4">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" 
                                       class="form-control form-control-lg <?php if (session('errors.password')): ?>is-invalid<?php endif ?>" 
                                       id="password"
                                       name="password" 
                                       required>
                                <?php if (session('errors.password')): ?>
                                    <div class="invalid-feedback">
                                        <?= session('errors.password') ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                            
                            <?php if ($config->allowRemembering): ?>
                                <div class="mb-4 form-check">
                                    <input type="checkbox" 
                                           class="form-check-input" 
                                           id="remember" 
                                           name="remember" 
                                           <?php if (old('remember')): ?> checked <?php endif; ?>>
                                    <label class="form-check-label" for="remember">
                                        <?= lang('Auth.rememberMe') ?>
                                    </label>
                                </div>
                            <?php endif; ?>
                            
                            <div class="d-grid">
                                <button type="submit" class="btn btn-login btn-lg">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>