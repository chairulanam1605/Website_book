@extends('main')

@section('title', 'Books')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Books</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Books</a></li>
                    <li class="active">Add</li>
                </ol>
            </div>
        </div>
    </div>        
</div>
@endsection

@section('content')
<div class="content mt-3">

    <div class="animated fadeIn">

        <div class="card">
            <div class="card-header">
                <div class="pull-left">
                    <strong>Edit Book</strong>
                </div>
                <div class="pull-right">
                    <a href="{{ url('books') }}" class="btn btn-secondary btn-sm">
                        <i class="fa fa-undo"></i> Back
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 offset-md-4">
                        <form action="{{ url('books/'.$book->id)}}" method="post" enctype="multipart/form-data">
                            @method('patch')
                            @csrf
                            <div class="form-group">
                                <label>Judul Buku</label>
                                <input type="text" name="judul" class="form-control" value="{{ $book->judul}}" autofocus required>
                            </div>
                            <div class="form-group">
                                <label>Pengarang Buku</label>
                                <input type="text" name="pengarang" class="form-control" value="{{ $book->pengarang}}" required>
                            </div>
                            <div class="form-group">
                                <label>Penerbit Buku</label>
                                <input type="text" name="penerbit" class="form-control" value="{{ $book->penerbit}}" required>
                            </div>
                            <div class="form-group">
                                <label>Gambar Buku</label>
                                <input type="file" name="gambar" class="form-control" value="{{ $book->gambar}}" required>
                            </div>
                            <button type="submit" class="btn btn-success">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        
    </div>

</div><!-- .content -->   
@endsection