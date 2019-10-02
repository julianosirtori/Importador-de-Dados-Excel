@extends('layout')
@section('content')
    <div class="row">
        <div class="col s12 m7">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">Importar Dados</span>
                    <div class="row">
                        <div class="col s12">
                            <form action="{{route('exibetabela')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="file-field input-field">
                                    <div class="btn">
                                        <span>File</span>
                                        <input type="file" name="file">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text">
                                    </div>
                                </div>
                                <div class="col s12 right">
                                    <button class="btn green right" type="submit">  <i class="material-icons left">cloud_upload</i>Importar Excel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
