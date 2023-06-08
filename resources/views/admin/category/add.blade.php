@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Adauga Categorie</h4>
        </div>
        <div class="card-body">
            <form action="{{ url('insert-category') }}" method="POST" enctype=multipart/form-data>
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="">Nume</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Slug</label>
                        <input type="text" class="form-control" name="slug">
                    </div>
                    <div class="col-mid-12 mb-3">
                        <label for="">Descriere</label>
                        <textarea name="description" row="3" class="form-control"></textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Ascuns</label>
                        <input type="checkbox" name="status">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Popular</label>
                        <input type="checkbox" name="popular">
                    </div>

                    <div class="col-mid-12 mb-3">
                        <label for="">Titlu Meta</label>
                        <textarea class="form-control" name="meta_title"></textarea>
                    </div>
                    <div class="col-mid-12 mb-3">
                        <label for="">Cuvinte Cheie</label>
                        <textarea name="meta_keywords" row="3" class="form-control"></textarea>
                    </div>

                    <div class="col-mid-12 mb-3">
                        <label for="">Descriere Meta</label>
                        <textarea name="meta_description" row="3" class="form-control"></textarea>
                    </div>
                    <div class="col-mid-12">
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="col-mid-12">
                        <button type="submit" class="btn bnt-primary">Submite</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection