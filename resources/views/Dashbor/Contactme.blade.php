<!-- resources/views/Dashbor/contact.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Me</title>
    <link rel ="stylesheet" href="css/bootstrap.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top border-bottom">
    <div class="container">
        <a class="navbar-brand d-md-none" href="#">
            <svg class="bi" width="20" height="20"><use xlink:href="#aperture"></use></svg>.C-nau
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas" aria-controls="offcanvas" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvas" aria-labelledby="offcanvasLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasLabel">.C-nau</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav flex-grow-1 justify-content-between">
                    <li class="nav-item"><a class="nav-link" href="#"><svg class="bi" width="20" height="20"><use xlink:href="#aperture"></use></svg></a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/home') }}" >Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/Aboutme') }}">About me</a></li>
                    <li class="nav-item"><a class="nav-link"href="{{ url('/Example') }}">Example</a></li>
                    <li class="nav-item"><a class="nav-link"  href="{{ url('/Contactme') }}">Contact me</a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><svg class="bi" width="20" height="20"><use xlink:href="#cart"></use></svg></a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<div class="container mt-5">
    <h1 class="text-center">Contact Me</h1>
    <form action="#" method="post" class="contact-form">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="message">Message:</label>
            <textarea id="message" name="message" class="form-control" rows="5" required></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Send Message</button>
        </div>
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-1fFtMqd8GkCTIN3+EtlEws/sx3O40tBOu9jqvAK5+QuDrNJq8zgBQLB2iv+/vwJ9" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
</body>
</html>
