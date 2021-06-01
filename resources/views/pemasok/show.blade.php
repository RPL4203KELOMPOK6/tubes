@extends('home.pemasok')

@section('content')
<div class="card-header">
    <h3 class="card-title">Input Pemasok</h3>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th style="text-align: center">ID</th>
                        <th style="width: 35%; text-align: center">Nama</th>
                        <th style="text-align: center">Email</th>
                        <th style="text-align: center">No. Handphone</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> {{ $pemasok -> id }} </td>
                            <td> {{ $pemasok -> nama }} </td>
                            <td> {{ $pemasok -> email }} </td>
                            <td> {{ $pemasok -> phone }} </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>
</div>
@endsection       