<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .bg-image {
            background-image: url("https://constructive-voices.com/wp-content/uploads/2024/04/Cardamom-Mountains-1170x669.jpg"); /* Use the path to your background image */
            background-size: cover;
            background-position: center;
        }

        .card {
            max-width: 400px;
            border-radius: 15px;
            backdrop-filter: blur(10px);
        }

        .custom-input {
            width: 100%;
            height: 38px;
            box-sizing: border-box;
        }
    </style>

</head>
<body>
<div class="container-fluid d-flex justify-content-center align-items-center vh-100 bg-image">
    <div class="card p-4 shadow-lg bg-light bg-opacity-75">
        <div class="card-body">
            <h2 class="text-center mb-4">Register</h2>
            <form action="/register" method="POST">
                <!-- Existing form content -->

                <!-- Email Field -->
                <div>
                    <label for="email" class="form-label me-2">Email</label>
                </div>
                <div class="d-flex align-items-center">
                    <input type="email" class="form-control custom-input" id="email" name="email"
                           placeholder="Enter your email" style="width: 100%;" required>
                </div>
                <?php
                session_start();
                if (isset($_SESSION['email_error'])) {
                    echo '<p class="text-danger">' . $_SESSION['email_error'] . '</p>';
                    unset($_SESSION['email_error']);

                }
                ?>

                <!-- Name Field -->
                <div>
                    <label for="name" class="form-label me-2">Name</label>
                </div>
                <div class="d-flex align-items-center">
                    <input type="text" class="form-control custom-input" id="name" name="name"
                           placeholder="Enter your name" style="width: 100%;" required>
                </div>

                <!-- Phone Number Field -->
                <div>
                    <label for="phone_number" class="form-label me-2">Phone Number</label>
                </div>
                <div class="d-flex align-items-center">
                    <span class="input-group-text">+998🇺🇿</span>
                    <input type="number" class="form-control custom-input" id="phone_number" name="phone_number"
                           placeholder="XX XXX XX XX" style="width: 100%;"
                           oninput="this.value = this.value.replace(/[^\d]/g, '');" required>
                </div>
                <?php
                session_start();
                if (isset($_SESSION['phone_error'])) {
                    echo '<p class="text-danger">' . $_SESSION['phone_error'] . '</p>';
                    unset($_SESSION['phone_error']);
                }
                ?>

                <!-- Position Field -->
                <div>
                    <label for="position" class="form-label me-2">Position</label>
                </div>
                <div class="d-flex align-items-center">
                    <input type="text" class="form-control custom-input" id="position" name="position"
                           placeholder="Enter your position" style="width: 100%;" required>
                </div>

                <!-- Password Field -->
                <div>
                    <label for="password" class="form-label me-2">Password</label>
                </div>
                <div class="d-flex align-items-center">
                    <input type="password" class="form-control custom-input" id="password" name="password"
                           placeholder="Enter your password" style="width: 100%;" required>
                </div>
                <?php
                session_start();
                if (isset($_SESSION['password_error'])) {
                    echo '<p class="text-danger">' . $_SESSION['password_error'] . '</p>';
                    unset($_SESSION['password_error']);
                }
                ?>

                <!-- Gender Field -->
                <div class="md:col-span-4 col-span-12">
                    <label for="status" class="font-medium">Gender</label>
                    <div class="form-icon relative mt-2">
                        <select name="gender" id="status" class="form-input ps-11" style="width: 100%;" required>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary w-100 mt-3">Register</button>
            </form>


            <div class="text-center mt-3">
                <a href="/login" class="text-decoration-none">Already have an account? Login</a>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
