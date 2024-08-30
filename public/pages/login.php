<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" >
    <style>
        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            overflow: hidden; /* To prevent scrollbars from appearing */
        }

        .bg-image {
            background-image: url("https://images.hdqwalls.com/wallpapers/mountains-lake-canada-nature-forest-woods-4b.jpg"); /* Use the path to your background image */
            background-size: cover;
            background-position: center;
            position: absolute; /* Required for animation */
            width: 100vw;
            height: 100vh;
            animation: moveBackground 20s linear infinite; /* Animation */
        }

        @keyframes moveBackground {
            0% { background-position: 0 0; }
            100% { background-position: 100% 100%; }
        }

        .card {
            max-width: 400px;
            border-radius: 15px;
            backdrop-filter: blur(10px);
        }
    </style>
</head>
<body>
<div class="container-fluid d-flex justify-content-center align-items-center vh-100 bg-image">
    <div class="card p-4 shadow-lg bg-light bg-opacity-75">
        <div class="card-body">
            <h2 class="text-center mb-4">Login</h2>
            <form action="/login" method="POST">


                <div>
                    <label for="email" class="form-label me-2">Email</label>
                </div>
                <div class="d-flex align-items-center">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" required>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" style="height: 38px; width: 38px; margin-right: 8px;">
                        <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z" clip-rule="evenodd"/>
                    </svg>
                </div>

                <div>
                    <label for="password" class="form-label me-2" style="display: inline-block; margin-right: 8px;">Password</label>
                </div>
                <div class="mb-3 d-flex align-items-center">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password" required>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" style="height: 38px; width: 38px; margin-right: 8px;">
                        <path fill-rule="evenodd" d="M12 1.5a5.25 5.25 0 0 0-5.25 5.25v3a3 3 0 0 0-3 3v6.75a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3v-6.75a3 3 0 0 0-3-3v-3c0-2.9-2.35-5.25-5.25-5.25Zm3.75 8.25v-3a3.75 3.75 0 1 0-7.5 0v3h7.5Z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <?php
                if (isset($_SESSION['email_error'])) {
                    echo '<p class="text-danger">' . $_SESSION['email_error'] . '</p>';
                    unset($_SESSION['email_error']);
                }

                ?>

                <button type="submit" class="btn btn-primary w-100 mt-3">Login</button>

            </form>

            <div class="text-center mt-3">
                <a href="/register" class="text-decoration-none">Don't have an account? Register</a>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
