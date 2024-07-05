@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">{{$title}}</div>
    <div class="card-body">
        <div align="right" class="mb-3">
        <a href="{{route('about.create')}}" class="btn btn-primary">Tambah </a>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>deskripsi</th>
                        <th>kotak_putih</th>
                        <th>kotak_kuning</th>
                        <th>nama</th>

                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no=1; @endphp
                    @foreach ($datas as $data )
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$data->judul}}</td>
                        <td>{{$data->deskripsi}}</td>
                        <td>{{$data->kotak_putih}}</td>
                        <td>{{$data->kotak_kuning}}</td>
                        <td>
                            <a href="{{route('about.edit', $data->id)}}" class="btn btn-success btn-sm">Edit</a> |

                            <form method="POST" action="{{route('about.destroy', $data->id)}}" class="d-inline">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="btn btn-danger btn-sm" type="submit">Delete</button>

                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>
@endsection
