@extends('layout.main')
@section('content')

<div class="content">
    <div class="d-flex justify-content-between mx-5 mt-5">
        <div class="w-100 me-4">
        <h5> 
            <div class="">
                <i class="fas fa-arrow-left me-2"></i>
                DAFTAR LOWONGAN PEKERJAAN
            </div>
        </h5>
        <div class="row">
            <div class="col-4">
            <!-- form pencarian -->
            <div class="form-group mb-4">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari Pekerjaan Di sini">
                    <span class="input-group-text"><i class="fas fa-magnifying-glass"></i></span>
                </div>
            </div>
            <!-- end form pencarian  -->
        
            </div>
            <div class="col-6">
                <button class="btn btn-light"><i class="fas fa-filter"></i>Filter</button>
                <button class="btn btn-light"><i class="fas fa-trash"></i></button>
            </div>
            <div class="col-2 justify-content-end">
                <button class="btn btn-dark"><i class="fas fa-add"></i>Tambah Aset</button>
            </div>
        </div>

       
        <div>
            <table class="table table-striped table-hover">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Aset</th>
                <th scope="col">Jenis Aset </th>
                <th scope="col">Harga Satuan (IDR.)</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row"><input class="form-check-input mt-0" type="checbox"></th>
                <td>Mark</td>
                <td>Otto</td>
                <td>50000</td>
                <td><span class="btn btn-outline-success">Aktif</span></td>
                <td><a href="" btn-sm class="btn btn-success"><i class="fas fa-pencil"></i></a>
                <a href="" btn-sm class="btn btn-danger"><i class="fas fa-trash"></i></a></td>
                </tr>
            
                <tr>
                <th scope="row">2</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>1.000.000</td>
                <td><span class="btn btn-outline-success">Aktif</span></td>
                <td><a href="" btn-sm class="btn btn-success"><i class="fas fa-pencil"></i></a>
                <a href="" btn-sm class="btn btn-danger"><i class="fas fa-trash"></i></a></td>
                </tr>

                <tr>
                <th scope="row">3</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>50000</td>
                <td><span class="btn btn-outline-success">Aktif</span></td>
                <td><a href="" btn-sm class="btn btn-success"><i class="fas fa-pencil"></i></a>
                <a href="" btn-sm class="btn btn-danger"><i class="fas fa-trash"></i></a></td>
                </tr>
            </tbody>
            </table>
        </div>
    </div>
</div>
@endsection