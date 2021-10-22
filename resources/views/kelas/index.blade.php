@extends('layouts.app')
@section('active_kelas','active')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Data Kelas') }}</div>

                <div class="card-body">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalTambah">
                      Tambah Kelas
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header bg-primary">
                                    <h5 class="modal-title">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{route('store.kelas')}}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label for="kelas">Kelas</label>
                                            <input class="form-control" type="text" name="nama" id="kelas">
                                        </div>
                                        <div class="form-group">
                                            <label for="jurusan">Jurusan</label>
                                            <input class="form-control" type="text" name="jurusan" id="jurusan">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kelas</th>
                                <th>Jurusan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kelas as $k)
                            <tr>
                                <td scope="row">{{$loop->iteration}}</td>
                                <td>{{$k->nama}}</td>
                                <td>{{$k->jurusan}}</td>
                                <td>
                                    <!-- Button Modal Edit -->
                                    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modaledit-{{$k->id}}">
                                      Edit
                                    </button>
                                    <!-- Modal Edit -->
                                    <div class="modal fade" id="modaledit-{{$k->id}}" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header bg-warning">
                                                    <h5 class="modal-title">Edit Kelas</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{route('update.kelas')}}" method="post">
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{$k->id}}">
                                                        <div class="form-group">
                                                            <label for="kelas">Kelas</label>
                                                            <input class="form-control" type="text" value="{{$k->nama}}" name="nama" id="kelas">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="jurusan">Jurusan</label>
                                                            <input class="form-control" type="text" value="{{$k->jurusan}}" name="jurusan" id="jurusan">
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-warning">Edit</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Button Modal Delete -->
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modaldelete-{{$k->id}}">
                                      Hapus
                                    </button>
                                    
                                    <!-- Modal Delete -->
                                    <div class="modal fade" id="modaldelete-{{$k->id}}" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header bg-danger">
                                                    <h5 class="modal-title">Hapus Kelas</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                </div>
                                                <div class="modal-body">
                                                    Ingin Menghapus Kelas {{$k->nama}} {{$k->jurusan}}
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <form action="{{route('destroy.kelas',$k->id)}}" method="post">
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
