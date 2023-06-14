@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Detalii Utilizator
                        <a href="{{ url('users') }}" class="btn btn-primary btn-sm float-end">Back</a>
                    </h4>
                    <hr>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 mt-3">
                            <label for="">Rol</label>
                            <div class="p-2 border">{{ $users->role_as == '0'? 'User':'Admin' }}</div>
                        </div>
                        <div class="col-md-4 mt-3">
                            <label for="">Prenume</label>
                            <div class="p-2 border">{{ $users->name }}</div>
                        </div>
                        <div class="col-md-4 mt-3">
                            <label for="">Nume de familie</label>
                            <div class="p-2 border">{{ $users->lname }}</div>
                        </div>
                        <div class="col-md-4 mt-3">
                            <label for="">Email</label>
                            <div class="p-2 border">{{ $users->email }}</div>
                        </div>
                        <div class="col-md-4 mt-3">
                            <label for="">Numar telefon</label>
                            <div class="p-2 border">{{ $users->phone }}</div>
                        </div>
                        <div class="col-md-4 mt-3">
                            <label for="">Adresa 1</label>
                            <div class="p-2 border">{{ $users->address1 }}</div>
                        </div>
                        <div class="col-md-4 mt-3">
                            <label for="">Adresa 2</label>
                            <div class="p-2 border">{{ $users->address2 }}</div>
                        </div>
                        <div class="col-md-4 mt-3">
                            <label for="">Localitate</label>
                            <div class="p-2 border">{{ $users->city }}</div>
                        </div>
                        <div class="col-md-4 mt-3">
                            <label for="">Judet</label>
                            <div class="p-2 border">{{ $users->state }}</div>
                        </div>
                        <div class="col-md-4 mt-3">
                            <label for="">Tara</label>
                            <div class="p-2 border">{{ $users->country }}</div>
                        </div>
                        <div class="col-md-4 mt-3">
                            <label for="">Cod Postal</label>
                            <div class="p-2 border">{{ $users->pincode }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection
