<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: url('https://www.rappler.com/tachyon/2024/03/UP-Baguio.png') no-repeat center center fixed;
            background-size: cover;
        }

        .card {
            background: rgba(2, 153, 65, 0.3);
            backdrop-filter: blur(10px); 
            -webkit-backdrop-filter: blur(10px); 
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .card-body {
            padding: 30px;
        }

        .container {
            z-index: 10; 
        }

        h3 {
            color: white;
        }

        .alert {
            background-color: rgba(255, 255, 255, 0.7); 
            border-radius: 5px;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        p {
            color: white;
        }

        a {
            color: #007bff;
        }

        a:hover {
            color: #0056b3;
        }
        .logo-placeholder {
            display: block;
            margin: 10px auto;
            width: 50px; 
            height: auto;}
    </style>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h3 class="text-center mb-4">Register</h3>
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR8n0an3OtFXq-vH1z6d_55wNHybrghwAX3kg&s" alt="Logo" class="logo-placeholder">

                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="mb-3">
                            <input type="text" name="name" class="form-control" placeholder="Name" required>
                        </div>
                        <div class="mb-3">
                            <input type="email" name="email" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="mb-3">
                            <input type="password" name="password" class="form-control" placeholder="Password" required>
                        </div>
                        <div class="mb-3">
                            <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" required>
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">Register</button>
                        </div>
                    </form>
                    <div class="text-center mt-3">
                        <p>Already have an account? <a href="{{ route('login') }}">Login here</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
