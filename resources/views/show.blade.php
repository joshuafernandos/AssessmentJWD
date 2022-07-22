<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>

    {{-- bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    {{-- main --}}
    <div class="container" id="product-section">
        <div class="row">
            <div class="col-md-6">
                <img src="../img/{{ $category->slug }}.jpg" class="border border-primary mt-5">
            </div>
            <div class="col-md-6" style="margin-top:20vh">
                {{-- flasher --}}
                <div class="card-body p-4 p-lg-5 text-black">
                    @if (session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endif
                    @if (session()->has('loginError'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('loginError') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endif

                    <h1 class="fw-bold">{{ $category->name }} Class</h1>
                    <p class="fs-5">Facilities:</p>

                    @if ('ekonomi' === $category->slug)
                        <p>Air Conditioner, 
                        2-3 Seat,
                        Toilet,
                        Snack,
                        Maximum Capacity 59 Person</p>
                        <p class="fw-bold">Rp.100.000,-</p>
                    @elseif('bisnis' === $category->slug)
                        <p>Air Conditioner,
                        2-2 Seat,
                        Toilet,
                        Snack,
                        Maximum Capacity 40 Person,
                        Headrest,
                        Pillow,
                        Free Food</p>
                        <p class="fw-bold">Rp.200.000,-</p>
                    @elseif('eksekutif' === $category->slug)
                        <p>Air Conditioner,
                        1-1 Seat,
                        Toilet,
                        Snack,
                        Maximum Capacity 30 Person,
                        Headrest,
                        Pillow,
                        Free Food,
                        Sleepper</p>
                        <p class="fw-bold">Rp.300.000,-</p>
                    @endif
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop">
                        Book Now
                    </button>

                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Booking Form</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="/order" method="POST">
                        <div class="modal-body">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputNama" class="form-label">Name</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" name="nama" required>
                                <div id="emailHelp" class="form-text">Input your name</div>
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputidentitas1" class="form-label">Identity</label>
                                <input type="text" class="form-control" id="exampleInputidentitas1" name="identitas"
                                    required>
                                <div id="emailHelp" class="form-text">Input your identity number</div>
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputtelp1" class="form-label">Phone</label>
                                <input type="text" class="form-control" id="exampleInputtelp1" name="nomor"
                                    required>
                                <div id="emailHelp" class="form-text">Input your phone number</div>
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputKategori1" class="form-label">Category</label>
                                <select name="kelas" id="" readonly>
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="examplejadwallp1" class="form-label">Date</label>
                                <input type="date" class="form-control" id="exampleInputtelp1" name="jadwal"
                                    required>
                                <div id="emailHelp" class="form-text">Chosee the date</div>
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputtelp1" class="form-label">Under 60 years old</label>
                                <input type="number" class="form-control" id="under60" name="penumpangdibawah60"
                                    value="0" min="0" required>
                                <div id="emailHelp" class="form-text">Number of people under 60 years old</div>
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputtelp1" class="form-label">Upper 60 years old</label>
                                <input type="number" class="form-control" id="upper60" name="penumpangdiatas60"
                                    value="0" min="0" required>
                                <div id="emailHelp" class="form-text">Number of people upper 60 years old</div>
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputtelp1" class="form-label">Price</label>
                                <input type="text" class="form-control" id="harga" name="harga"
                                    value="{{ $category->price }}" readonly>
                                <div id="emailHelp" class="form-text">Price per pax (Rupiah)</div>
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputtelp1" class="form-label">Total</label> <button
                                    type="button" onclick="myFunction()"
                                    class="btn btn-primary btn-sm">Calculate</button>
                                <input type="text" class="form-control" id="total" name="total" required
                                    readonly>
                                <div id="emailHelp" class="form-text">Total should be paid (Rupiah)</div>
                            </div>

                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                                <small class="form-check-label" for="exampleCheck1">Saya dan rombongan telah membaca
                                    dan
                                    menyetujui persyaratan yang diperlukan</small>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Book</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {{-- javascript --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
        </script>

        <script>
            function myFunction() {
                var under = document.getElementById('under60').value;
                var upper = document.getElementById('upper60').value;
                var harga = document.getElementById('harga').value;
                var intunder = parseInt(under);
                var intupper = parseInt(upper);
                var intharga = parseInt(harga);

                document.getElementById('total').value = (intunder * intharga) + (intupper * intharga - intharga * intupper *
                    0.01);
            }
        </script>
</body>

</html>
