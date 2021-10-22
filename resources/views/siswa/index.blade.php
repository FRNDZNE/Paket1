@extends('layouts.app')
@section('active_siswa' , 'active')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Data Siswa') }}</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modeltambah">
                              Tambah Siswa
                            </button>
                            
                            <!-- Modal -->
                            <div class="modal fade" id="modeltambah" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Tambah Siswa</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                        </div>
                                        <div class="modal-body">
                                            Body
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- Fitur Upload Siswa with excel --}}
                        {{-- <div class="col-md-6">
                            <form action="">
                                <div class="row">
                                    <div class="col-md-9">
                                        <input type="file" name="" id="" class="form-control" accept=".xlsx">      
                                    </div>
                                    <div class="col-md-3">
                                        <button type="submit" class="btn btn-success">Upload</button>
                                    </div>
                                </div>
                            </form>
                        </div> --}}
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table">
                                <thead>
                                    <th>No</th>
                                    <th>Nisn</th>
                                    <th>Nama</th>
                                    <th>Aksi</th>
                                </thead>
                                <tbody>
                                    <td>1</td>
                                    <td>1234567890</td>
                                    <td>Budi</td>
                                    <td>
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modeledit">
                                            Edit
                                        </button>
                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modeldelete">
                                            Hapus
                                        </button>
                                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modeldetail">
                                            Detail
                                        </button>
                                        
                                        
                                        <!-- Modal edit -->
                                        <div class="modal fade" id="modeledit" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-warning">
                                                        <h5 class="modal-title">Edit Data Siswa</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Body
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Save</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- End Modal edit --}}
                                    </td>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
