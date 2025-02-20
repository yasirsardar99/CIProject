<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Add User</h1>
        <form action="/store-user" method="post" class="needs-validation" novalidate>
           <div class="jutify-content-center">
           <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
                <div class="invalid-feedback">
                    Please provide a name.
                </div>
            </div>

            <div class="mb-3">
                <label for="name" class="form-label">Email:</label>
                <input type="email" class="form-control" id="name" name="email" required>
                <div class="invalid-feedback">
                    Please provide a email.
                </div>
            </div>

            <div class="mb-3">
                <label for="name" class="form-label">Password:</label>
                <input type="password" class="form-control" id="name" name="password" required>
                <div class="invalid-feedback">
                    Please provide a password.
                </div>
            </div>

    
            
            <div class="col-md-12">

            <button type="submit" class="btn btn-primary">Save</button>

            </div>
           </div>
        </form>
    </div>

    <!-- Bootstrap 5 JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

    <!-- Optional: Form validation script -->
    
</body>
</html>