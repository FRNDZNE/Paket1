@extends('layouts.app')
@section('active_spp','active')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Data spp') }}</div>

                <div class="card-body">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalTambah">
                      Tambah Spp
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
                                    <form action="{{route('store.spp')}}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label for="tahun">Tahun</label>
                                            <input class="form-control" type="number" name="tahun" id="tahun">
                                        </div>
                                        <div class="form-group">
                                            <label for="nominal">Nominal</label>
                                            <input class="form-control" type="text" min="0" name="nominal" id="nominal">
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
                                <th>Tahun</th>
                                <th>Nominal</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($spp as $s)
                            <tr>
                                <td scope="row">{{$loop->iteration}}</td>
                                <td>{{$s->tahun}}</td>
                                <td>Rp. {{$s->nominal}}</td>
                                <td>
                                    <!-- Button Modal Edit -->
                                    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modaledit-{{$s->id}}">
                                      Edit
                                    </button>
                                    <!-- Modal Edit -->
                                    <div class="modal fade" id="modaledit-{{$s->id}}" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header bg-warning">
                                                    <h5 class="modal-title">Edit spp</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{route('update.spp')}}" method="post">
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{$s->id}}">
                                                        <div class="form-group">
                                                            <label for="spp">spp</label>
                                                            <input class="form-control" type="text" value="{{$s->tahun}}" name="tahun" id="spp">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="nominal">nominal</label>
                                                            <input class="form-control" type="text" value="{{$s->nominal}}" name="nominal" id="nominal">
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
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modaldelete-{{$s->id}}">
                                      Hapus
                                    </button>
                                    
                                    <!-- Modal Delete -->
                                    <div class="modal fade" id="modaldelete-{{$s->id}}" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header bg-danger">
                                                    <h5 class="modal-title">Hapus spp</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                </div>
                                                <div class="modal-body">
                                                    Ingin Menghapus spp {{$s->tahun}} {{$s->nominal}}
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <form action="{{route('destroy.spp',$s->id)}}" method="post">
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
