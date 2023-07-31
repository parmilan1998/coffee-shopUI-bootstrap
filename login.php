<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800&family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,300;1,400;1,600&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,500;1,700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="./index.css" rel="stylesheet" type="text/css">
    <title>Netlify</title>
</head>
<body>
    <main>
       <div class="d-flex font-popins justify-content-center align-items-center vh-100 bg-primary">
            <div class="form-container p-5 rounded bg-white">
                <form>
                    <h3 class="text-center">WELCOME</h3>
                    <div class="mb-3">
                        <label for="text">Username</label>
                        <input type="text" placeholder="Enter your email" class="form-control"/>
                    </div>
                    <div class="mb-3">
                        <label for="password">Password</label>
                        <input type="password" placeholder="Enter your password" class="form-control"/>
                    </div>
                    <div class="mb-3">
                        <label for="role" class="font-popins">User Role: </label>
                        <select class="rounded form-control p-1" name="role" id="role">
                            <option value="user">User</option>
                            <option value="admin">Admin</option>
                        </select>
                    </div> 
                    <div class="mb-3">
                        <input type="checkbox"  class="custom-control custom-checkbox" id="check"/>
                        <label for="check" class="custom-input-label">Remember me</label>
                    </div>
                    <div class="d-grid">
                        <button class="btn btn-success">Sign In</button>
                    </div>
                    <p class="text-end mt-2">
                        <a href="#" class="text-decoration-none">Forgot Password?</a><a href="register.php" class="ms-2 text-decoration-none">Sign Up</a>
                    </p>
                </form>
            </div>
       </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>