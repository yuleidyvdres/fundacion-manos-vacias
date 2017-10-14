@extends('layouts.app')

@section('styles')
    <link href="{{ asset('css/admin/tipo-cancer.css') }}" rel="stylesheet">
    <link href="{{ asset('css/common.css') }}" rel="stylesheet">
@endsection
@section('content')
    @include('admin.common.navbar')
    <section class="row">
        <div class="col-xs-12 col-sm-12" id="title">
            <h2 id="title-pag">Lista de Tipo de Cáncer</h2>
        </div>
    </section>
    <section class="row">
        <div class="col-xs-12 col-sm-12">
            <center>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tipo de Cáncer</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead> 
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Leucemia</td>
                            <td>
                                <button class="btn btn-danger btn-sm"><i class="fa fa-times" aria-hidden="true"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Leucemia</td>
                            <td>
                                <button class="btn btn-danger btn-sm"><i class="fa fa-times" aria-hidden="true"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Leucemia</td>
                            <td>
                                <button class="btn btn-danger btn-sm"><i class="fa fa-times" aria-hidden="true"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Leucemia</td>
                            <td>
                                <button class="btn btn-danger btn-sm"><i class="fa fa-times" aria-hidden="true"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Leucemia</td>
                            <td>
                                <button class="btn btn-danger btn-sm"><i class="fa fa-times" aria-hidden="true"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Leucemia</td>
                            <td>
                                <button class="btn btn-danger btn-sm"><i class="fa fa-times" aria-hidden="true"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </center>
        </div>
    </section>
@endsection