@extends('dashboard.layouts.main')

@section('body')
    <h2>All Order</h2>
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if (session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search..." aria-label="Search" id="myInput"
            onkeyup="myFunction()" aria-describedby="button-addon2">
    </div>
    <table class="table" id="myTable">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Identity</th>
                <th scope="col">Number</th>
                <th scope="col">Class</th>
                <th scope="col">Date</th>
                <th scope="col">
                    <60 </th>
                <th scope="col"> >60 </th>
                <th scope="col"> Price </th>
                <th scope="col"> Total </th>
                <th scope="col"> Action </th>
            </tr>
        </thead>
        @foreach ($data as $row)
            <tbody>
                <tr>
                    <th scope="row">{{ $row->id }}</th>
                    <td>{{ $row->nama }}</td>
                    <td>{{ $row->identitas }}</td>
                    <td>{{ $row->nomor }}</td>
                    <td>{{ $row->category_id }}</td>
                    <td>{{ $row->jadwal }}</td>
                    <td>{{ $row->penumpangdibawah60 }}</td>
                    <td>{{ $row->penumpangdiatas60 }}</td>
                    <td>{{ $row->harga }}</td>
                    <td>{{ $row->total }}</td>
                    <td>
                        @if ($row->payment === 1)
                            <button type="submit" disabled class="btn btn-success btn-sm">Payment Validated</button>
                        @else
                            <form action="/validating/{{ $row->id }}" method="POST">
                                @csrf
                                <button type="submit" onclick="return alert('Validate payment?')"
                                    class="btn btn-warning btn-sm">Validate Payment</button>
                            </form>
                        @endif
                    </td>
                </tr>
            </tbody>
        @endforeach
    </table>
@endsection

<script>
    function myFunction() {
        // Declare variables
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");

        // Loop through all table rows, and hide those who don't match the search query
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
</script>
