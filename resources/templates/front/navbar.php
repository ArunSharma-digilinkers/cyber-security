<nav class="navbar navbar-expand-lg navbar-light" id="navbar">
    <div class="container">
        <a class="navbar-brand" href="<?php echo $path; ?>">
            <img src="<?php echo $path; ?>img/logo.png" alt="" class="img-fluid logo-img">
            <img src="<?php echo $path; ?>img/logo-white.png" alt="" class="img-fluid logo-img dark-mode">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
                <img src="<?php echo $path; ?>img/toggler.png" alt="" class="img-fluid">
            </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Home</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?php echo $path; ?>index">Home 1</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="index-2">Home 2</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="index-3">Home 3</a></li>
                        
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">About Us</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?php echo $path; ?>about-us">About 1</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="about-us2">About 2</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="about-us3">About 3</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Our services</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?php echo $path; ?>website-scanning">Website Scanning</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="malware-removal">Malware Removal</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="cyber-security">Cyber Security</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="data-protection">Data Protection</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Contact Us</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?php echo $path; ?>contact-us">contact 1</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="contact-us2">contact 2</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <!-- <li><a class="dropdown-item" href="about-us3">About 3</a></li> -->
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="scroll-point"></div>