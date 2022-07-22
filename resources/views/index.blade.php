@extends('layouts.main')
{{-- css --}}
<link rel="stylesheet" href="css/style.css">

@section('body')
    <div class="container">

        {{-- carousel --}}
        <div id="myCarousel" class="carousel slide mb-5" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
                    aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="http://source.unsplash.com/1600x500?safety" alt="">
                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1>Discount 15%.</h1>
                            <img src="" alt="">
                            <p>Contact admin for more info.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="http://source.unsplash.com/1600x500?bus" alt="">

                    <div class="container">
                        <div class="carousel-caption">
                            <h1>More Giveaway.</h1>
                            <p>Contact admin for more info.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="http://source.unsplash.com/1600x500?pillow" alt="">

                    <div class="container">
                        <div class="carousel-caption text-end">
                            <h1>Free Merchendise.</h1>
                            <p>Only for executive.</p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>


        {{-- category --}}
        <div class="container marketing" id="services">
            <h2 class="mt-4">Our Class</h2>
            <div class="row">
                @foreach ($category as $row)
                    <div class="col-md-4">
                        <a href="/category/{{ $row['slug'] }}">
                            <div class="card bg-dark text-white">
                                <img src="img/{{ $row->slug }}.jpg" class="card-img" alt="{{ $row->name }}">
                                <div class="card-img-overlay d-flex align-items-center p-0">
                                    <h5 class="card-title text-center flex-fill p-4 fs-3"
                                        style="background-color: rgba(0,0,0,0.7)">{{ $row->name }}</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- why us? --}}

        <hr class="featurette-divider">
        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading fw-normal lh-1">Safe.
                    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto iusto sequi
                        perferendis accusamus ut nam expedita dolorem provident ab facere vero unde porro et quibusdam fugit
                        earum eaque similique, aut ea aspernatur impedit error sit quod? Iste minima, nemo, nobis asperiores
                        at porro consequuntur in et laborum quo tempore praesentium itaque pariatur qui nesciunt nisi
                        dolorum quas numquam. Error laboriosam natus debitis voluptatem nisi dolore nihil deserunt saepe.
                        Nihil assumenda similique quaerat praesentium velit odit asperiores atque minima perspiciatis fugit
                        temporibus voluptate, ea quidem ipsam provident iste obcaecati doloribus. Neque est odit saepe
                        inventore minima atque. Quibusdam, ipsam totam. Expedita.</p>
            </div>
            <div class="col-md-5">
                <img src="http://source.unsplash.com/400x400?safe" alt="">

            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading fw-normal lh-1">Fast</h2>
                <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam beatae perferendis velit
                    suscipit excepturi sint consequuntur facere, quaerat consectetur quos iure ab eligendi repudiandae neque
                    vitae quidem tempora dicta. Consequuntur ipsam quam obcaecati mollitia nobis maiores error expedita
                    earum qui. Possimus soluta voluptatum tenetur! Corporis similique laboriosam ea consequatur dolor. Odio
                    sed nihil provident vel repellat quia sapiente perferendis vitae fuga nisi, ab fugiat. Quisquam, ipsam
                    id. Blanditiis maiores magni aperiam sunt commodi, eveniet cumque ut? Consequatur qui pariatur ipsa
                    eligendi officiis aliquam voluptas, architecto nisi esse excepturi temporibus? Ex deserunt velit quidem
                    quos dignissimos voluptates itaque voluptatem delectus ut.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <img src="http://source.unsplash.com/400x400?fast" alt="">

            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading fw-normal lh-1">Comfy</h2>
                <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis odio necessitatibus
                    magnam, qui voluptate quam vero a at, rerum esse voluptas tenetur autem. Quos porro earum amet dolorum,
                    officiis corrupti? Aliquid itaque laudantium voluptas pariatur reprehenderit quibusdam non suscipit
                    perspiciatis ullam, hic saepe consequatur excepturi, sequi cum nostrum animi in? Nisi tempora error
                    libero, ducimus provident natus quo tenetur laudantium blanditiis fugiat vero quidem placeat aspernatur
                    eveniet eligendi ex quis expedita laborum assumenda officiis magni explicabo debitis voluptatibus!
                    Facilis voluptatibus, pariatur in aliquam asperiores modi eos reprehenderit blanditiis saepe qui
                    expedita consequuntur impedit veniam temporibus fugiat. Provident voluptatem quisquam eum.</p>
            </div>
            <div class="col-md-5">
                <img src="http://source.unsplash.com/400x400?comfort" alt="">

            </div>
        </div>

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->


    <!-- FOOTER -->
    <footer class="container">
        <p class="float-end"><a href="#">Back to top</a></p>
        <p>&copy; Tiket BUS AKAP &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a>
        </p>
    </footer>
    </main>
    </div>
@endsection
