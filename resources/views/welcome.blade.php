<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile - Bima</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <link rel="shortcut icon" href="https://anugrahbimantara.my.id/IMG_20220928_063400%20(1).jpg" type="image/x-icon">

    <!-- CSS -->
    <style>
        body {
            min-height: 3000px;
        }

        .jumbotron {
        padding-top: 6rem;
        background-color: #e2edff;
        }
        .card-link, .card-link:hover, .card-link:focus {
        text-decoration: none;
        outline: none;
        }
        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: none;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }
        #projects {
            background-color: #e2edff;
        }
        section {
            scroll-margin-top: 60px;
        }
    </style>
  </head>
  <body id="home">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#home">Bima</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#projects">Project</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->

    <!-- Jumbotron -->
    <section class="jumbotron text-center">
        <img src="https://anugrahbimantara.my.id/IMG_20220928_063400%20(1).jpg" alt="Foto Profile" width="200" class="rounded-circle img-thumbnail">
      <h1 class="display-4">Anugrah Bimantara</h1>
      <p class="lead">All Things</p>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,160L30,160C60,160,120,160,180,170.7C240,181,300,203,360,224C420,245,480,267,540,256C600,245,660,203,720,170.7C780,139,840,117,900,101.3C960,85,1020,75,1080,80C1140,85,1200,107,1260,112C1320,117,1380,107,1410,101.3L1440,96L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path></svg>
    </section>
    <!-- End Jumbotron -->

    <!-- About -->
    <section id="about">
        <div class="container">
            <div class="row text-center mb-3">
                <div class="col">
                    <h2>About Me</h2>
                </div>
            </div>
            <div class="row justify-content-center fs-5 text-center">
                <div class="col-md-4 mb-3">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum beatae facere magnam quisquam obcaecati omnis reiciendis velit dolorum, vitae libero!</p>
                </div>
                <div class="col-md-4 mb-3">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi velit sunt molestiae odit. Similique non id ea veritatis iusto mollitia.</p>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e2edff" fill-opacity="1" d="M0,128L40,149.3C80,171,160,213,240,202.7C320,192,400,128,480,122.7C560,117,640,171,720,213.3C800,256,880,288,960,288C1040,288,1120,256,1200,208C1280,160,1360,96,1400,64L1440,32L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
    </section>
    <!-- End About -->

    <!-- Projects -->
    <section id="projects">
        <div class="container">
            <div class="row text-center mb-3">
                <div class="col">
                    <h2>My  Projects</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4 mb-3">
                    <a href="#projects-link" class="card-link">
                      <div class="card">
                        <img src="https://anugrahbimantara.my.id/project.jpg" class="card-img-top" alt="Gambar Project">
                        <div class="card-body">
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                      </div>
                    </a>
                </div>
                <div class="col-md-4 mb-3">
                    <a href="#projects-link" class="card-link">
                    <div class="card">
                        <img src="https://anugrahbimantara.my.id/project.jpg" class="card-img-top" alt="Gambar Project">
                        <div class="card-body">
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                      </div>
                      </a>
                </div>
                <div class="col-md-4 mb-3">
                    <a href="#projects-link" class="card-link">
                    <div class="card">
                        <img src="https://anugrahbimantara.my.id/project.jpg" class="card-img-top" alt="Gambar Project">
                        <div class="card-body">
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                      </div>
                    </a>
                </div>
                <div class="col-md-4 mb-3">
                    <a href="#projects-link" class="card-link">
                    <div class="card">
                        <img src="https://anugrahbimantara.my.id/project.jpg" class="card-img-top" alt="Gambar Project">
                        <div class="card-body">
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                      </div>
                    </a>
                </div>
                <div class="col-md-4 mb-3">
                    <a href="#projects-link" class="card-link">
                    <div class="card">
                        <img src="https://anugrahbimantara.my.id/project.jpg" class="card-img-top" alt="Gambar Project">
                        <div class="card-body">
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                      </div>
                    </a>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,192L40,208C80,224,160,256,240,224C320,192,400,96,480,74.7C560,53,640,107,720,160C800,213,880,267,960,256C1040,245,1120,171,1200,165.3C1280,160,1360,224,1400,256L1440,288L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
    </section>
    <!-- End Projects -->

    <!-- Contact -->
    <section id="contact">
        <div class="container">
            <div class="row text-center mb-3">
                <div class="col">
                    <h2>Contact Me</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-5">
                   <div class="alert alert-success alert-dismissible fade show d-none my-alert" role="alert">
                     <strong>Makasih!</strong> Pesan anda sudah terkirim.
                     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                   </div>
                    <form name="submit-to-google-sheet">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" placeholder="Masukan Nama" name="nama" id="name" aria-describedby="name">
                          </div>
                        <div class="mb-3">
                          <label for="email" class="form-label">Email address</label>
                          <input type="email" class="form-control" placeholder="Masukan Email" name="email" id="email" aria-describedby="email">
                        </div>
                        <div class="mb-3">
                            <label for="pesan" class="form-label">Pesan</label>
                            <textarea class="form-control" placeholder="Pesan Anda" id="pesan" name="pesan" rows="3"></textarea>
                          </div>
                        <button type="submit" class="btn btn-primary btn-kirim">Kirim</button>
                        <button class="btn btn-primary btn-loading d-none" type="button" disabled>
                          <span class="spinner-border spinner-border-sm" aria-hidden="true"></span>
                          <span role="status">Loading...</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0d6efd" fill-opacity="1" d="M0,160L40,181.3C80,203,160,245,240,256C320,267,400,245,480,202.7C560,160,640,96,720,101.3C800,107,880,181,960,208C1040,235,1120,213,1200,208C1280,203,1360,213,1400,218.7L1440,224L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
    </section>
    <!-- End Contact -->

    <!-- Footer -->
    <footer class="bg-primary text-white text-center pb-5">
        <p>Created by <a target="_blank" href="https://www.instagram.com/angrh_bima/" class="text-white fw-bold">Anugrah Bimantara</a></p>
    </footer>
    <!-- End Footer -->

    <!-- Agar form tersimpan di google sheet -->
   <script>
     const scriptURL = 'https://script.google.com/macros/s/AKfycbzwj223RNSNcKYHXZGYsM18ZiFJQM8A0YBQ24t56I0IPeO83nK5q3y_-wOjFvCO8ZLCdw/exec' // link ke google sheet
     const form = document.forms['submit-to-google-sheet'] // nama form
     const btnKirim = document.querySelector('.btn-kirim'); // tombol kirim
     const btnLoading = document.querySelector('.btn-loading'); // tombol loading
     const myalert = document.querySelector('.my-alert'); // notif berhasil terkirim

     form.addEventListener('submit', e => {
       e.preventDefault()
       // Menampilkan tombol loading, Menghilangkan tombol kirim
       btnLoading.classList.toggle('d-none');
       btnKirim.classList.toggle('d-none');

        // Mengirimkan pesan ke google sheet
       fetch(scriptURL, { method: 'POST', body: new FormData(form)})
         .then(response => {
          // Menampilkan tombol kirim, Menghilangkan tombol loading
          btnLoading.classList.toggle('d-none');
          btnKirim.classList.toggle('d-none');
          // Menampilkan alert
          myalert.classList.toggle('d-none');
          // reset form
          form.reset();
          // Pesan berhasil dikirim
          console.log('Success!', response)
         })
         .catch(error => console.error('Error!', error.message))
     })
   </script>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>
