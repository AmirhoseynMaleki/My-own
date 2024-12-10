<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Personal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/custom.css">
</head>

<body>
    <div class="container" id="Home">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-evenly py-3 mb-4">
            <div class="col-md-3 mb-2 mb-md-0">
                <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
                    <img src="images/amir_transparent.png" class="logo">
                </a>
            </div>
            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0 fw-semibold head">
                <li><a href="#" class="nav-link hd1 hover-underline">Home</a></li>
                <li><a href="#works" class="nav-link hd1 hover-underline">Works</a></li>
                <li><a href="#Skill" class="nav-link hd1 hover-underline">Skills</a></li>
                <li><a href="#About" class="nav-link hd1 hover-underline">About</a></li>
            </ul>

            <div class="col-md-3 text-end">
                <a type="button" href="#Contact" class="btn fw-semibold button">Contact</a>
            </div>
        </header>
    </div>

    <!-- headerbottom -->
    <main>
        <div class="container cstm">
            <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center">
                <div class="col-12 col-sm-6 p-3 p-lg-5 pt-lg-3 text-center text-sm-start hero">
                    <h1 class="display-4 fw-bold text-body-emphasis">
                        Hello, I'm <br>
                        <span>
                            Amirhoseyn
                        </span>
                    </h1>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugit quos, perferendis molestiae
                        tenetur illo, magnam, rerum soluta voluptas corrupti minima quod voluptatum ea consectetur
                        eveniet. Corporis quam ad amet omnis.
                    </p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
                        <button type="button" class="btn btn-lg px-4 me-md-2 fw-semibold story">My story</button>
                        <button type="button" class="btn btn-lg fw-semibold px-4 resume">Resume</button>
                    </div>
                </div>
                <div class="col-12 col-sm-6 text-center pe-sm-4 justify-content-center">
                    <div class="offset-lg-1 p-0 overflow-hidden float-sm-end right-pic">
                        <img class="rounded-lg-3" src="images/design.png">
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-5 cstm line"></div>

        <div class="container my-5 custom-bg rounded-5" id="About">
            <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center text-center">
                <div class="col-lg-7 p-3 p-lg-5 pt-lg-3 txt-color2 text-lg-start">
                    <h1 class="display-5 fw-bold">
                        About Me
                    </h1>
                    <p class="fs-5">
                        Hi there! I'm Amirhoseyn Maleki, a passionate developer with a keen interest in building
                        innovative and user-friendly web applications. This is my very first website, and I’m
                        excited to
                        share my journey with you.I love turning ideas into reality and solving complex
                        problems
                        with clean, efficient code.
                        Whether
                        you’re
                        here to explore my work, connect with me, or simply learn more about what I do Thank you for
                        visiting, and I look forward to sharing more with you as I continue to develop
                        and
                        grow in this exciting field.
                    </p>
                </div>
                <div class="col-lg-4 offset-lg-1 mb-3 overflow-hidden">
                    <img class="rounded" src="images/self.jpg" alt="Me" width="350">
                </div>
            </div>
        </div>


        <div class="pt-5 skills">

            <!-- Works intro -->

            <div class="container" id="works">
                <div class="row text-center text-sm-start">
                    <div class="col-12 col-sm-6 text-dark ms-sm-3">
                        <h2 class="fw-bold custom-heading hd">
                            My Works
                        </h2>
                        <p class="fw-medium hd">
                            Here are some works of mine as you can see.
                        </p>
                    </div>
                    <div>

                    </div>
                </div>
            </div>

            <!-- carousel -->

            <div class="container pt-1">
                <div id="carouselExample" class="carousel slide pt-1">
                    <div class="carousel-inner pt-3 px-3">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card custom-card rounded-4">
                                        <img src="images/1.png" class="card-img-top" alt="Card 1">
                                        <div class="card-body">
                                            <h5 class="card-title">Project One</h5>
                                            <p class="card-text">This is Project 1.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card custom-card rounded-4">
                                        <img src="images/2(1).png" class="card-img-top" alt="Card 2">
                                        <div class="card-body">
                                            <h5 class="card-title">Project Two</h5>
                                            <p class="card-text">This is Project 2.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card custom-card rounded-4">
                                        <img src="images/3.png" class="card-img-top" alt="Card 3">
                                        <div class="card-body">
                                            <h5 class="card-title">Project Three</h5>
                                            <p class="card-text">This is Project 3.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card custom-card rounded-4">
                                        <img src="images/1(1).png" class="" alt="Card 4">
                                        <div class="card-body">
                                            <h5 class="card-title">Project Four</h5>
                                            <p class="card-text">This is Project 4.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card custom-card rounded-4">
                                        <img src="images/2.png" class="card-img-top" alt="Card 5">
                                        <div class="card-body">
                                            <h5 class="card-title">Project Five</h5>
                                            <p class="card-text">This is Project 5.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card custom-card rounded-4">
                                        <img src="images/3(1).png" class="card-img-top" alt="Card 6">
                                        <div class="card-body">
                                            <h5 class="card-title">Project Six</h5>
                                            <p class="card-text">This is Project 6.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-dark ms-3 btn-color" data-bs-target="#carouselExample"
                        data-bs-slide="prev">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                            <path
                                d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0m3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z">
                            </path>
                        </svg>
                    </button>
                    <button type="button" class="btn btn-dark btn-color" data-bs-target="#carouselExample"
                        data-bs-slide="next">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                            <path
                                d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z">
                            </path>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="container skills" id="Skill">
                <div class="text-center">
                    <h1 class="heading-bg rounded-5 px-2 d-inline">
                        Skills
                    </h1>
                </div>
            </div>
            <div class="container mt-4">
                <div class="row">
                    <div class="col-12 col-xl-3 mb-2 mb-xl-0">
                        <div class="h-100 p-5 rounded-3 custom-card2 txt-color">
                            <h2>Html</h2>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque expedita a cumque, sunt
                                fugit nam veritatis. Quos illo corporis suscipit nihil, necessitatibus doloremque ea
                                vero mollitia veniam provident earum deserunt!.</p>
                        </div>
                    </div>
                    <div class="col-12 col-xl-3 mb-2 mb-xl-0">
                        <div class="h-100 p-5 rounded-3 custom-card2 txt-color">
                            <h2>Css</h2>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque expedita a cumque, sunt
                                fugit nam veritatis. Quos illo corporis suscipit nihil, necessitatibus doloremque ea
                                vero mollitia veniam provident earum deserunt!.</p>
                        </div>
                    </div>
                    <div class="col-12 col-xl-3 mb-2 mb-xl-0">
                        <div class="h-100 p-5 rounded-3 custom-card2 txt-color">
                            <h2>Java Script</h2>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque expedita a cumque, sunt
                                fugit nam veritatis. Quos illo corporis suscipit nihil, necessitatibus doloremque ea
                                vero mollitia veniam provident earum deserunt!.</p>
                        </div>
                    </div>
                    <div class="col-12 col-xl-3 mb-2 mb-xl-0">
                        <div class="h-100 p-5 rounded-3 custom-card2 txt-color">
                            <h2>Figma</h2>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque expedita a cumque, sunt
                                fugit nam veritatis. Quos illo corporis suscipit nihil, necessitatibus doloremque ea
                                vero mollitia veniam provident earum deserunt!.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-5 cstm line2"></div>

        <div id="Contact" class="container d-flex justify-content-center align-items-center vh-100">
            <div class="col-md-6 col-lg-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h2 class="card-title text-center mb-4">Contact Me</h2>
                        <form>
                            <div class="mb-3">
                                <label for="firstName" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="firstName" name="firstName"
                                    placeholder="First Name" required>
                            </div>
                            <div class="mb-3">
                                <label for="lastName" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="lastName" name="lastName"
                                    placeholder="Last Name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="name@example.com" required>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-color fw-semibold">Contact</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- footer -->
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-5 border-top bg-brown txt-color">

        <p class="col col-md-6 mb-0 ps-5 text-center text-sm-start">© 2024 Company, Inc</p>

        <ul class="nav col col-md-6 justify-content-end pe-5 text-center text-sm-end">
            <li class="nav-item"><a href="#Home" class="nav-link px-2 mx-2 txt-color">Home</a></li>
            <li class="nav-item"><a href="#works" class="nav-link px-2 mx-2 txt-color">Works</a></li>
            <li class="nav-item"><a href="#Skill" class="nav-link px-2 mx-2 txt-color">Skills</a></li>
            <li class="nav-item"><a href="#About" class="nav-link px-2 mx-2 txt-color">About</a></li>
        </ul>
    </footer>

    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>