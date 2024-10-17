<header>
    <nav class="navbar navbar-expand-lg fixed-top" id="navbar">
        <div class="container-fluid">
            <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarsExample11"
                    aria-controls="navbarsExample11"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>

            <div
                    class="collapse navbar-collapse d-lg-flex text-white"
                    id="navbarsExample11"
            >
                <a
                        class="navbar-brand col-lg-3 me-0 text-color text-color-start"
                        href="#"
                >Sabbir Hossain</a
                >
                <ul
                        class="navbar-nav col-lg-6 justify-content-lg-center column-gap-4"
                >
                    <li class="nav-item">
                        <a
                                class="nav-link active text-color"
                                aria-current="page"
                                href="#home"
                        >Home</a
                        >
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-color" href="#about_me">About Me</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-color" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-color" href="#portfolio">Portfolio</a>
                    </li>
                    <!-- <li class="nav-item">
                      <a class="nav-link text-color" href="#">Testimonial</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link text-color" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-color" href="">Blog</a>
                    </li>
                </ul>
                <div class="d-lg-flex col-lg-3 justify-content-lg-end">
                    <a href="{{$basicInfo->cv_link}}" target="_blank">
                        <button class="btn btn-success">My CV</button>
                    </a>
                </div>
            </div>
        </div>
    </nav>
</header>