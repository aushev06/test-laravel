<?php
/**
 * @var \App\Models\Car $model
 */

$transmissions = [
    'mechanics' => 'Механическая',
    'auto' => 'Автоматическая'
]
?>
@extends('admin.layout.main')

@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{route('cars.index')}}">Автомобили</a>
                </li>

                <li class="breadcrumb-item active">{{$model->name}}</li>
            </ol>

            <!-- /cards -->
            <h2></h2>

            <div class="box_general padding_bottom">
                <div class="header_box version_2">
                    <h2><i class="fa fa-book"></i>Детали</h2>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label>Изображение</label>
                        <div>
                            <img src="/storage/{{$model->img}}" class="img-thumbnail">
                        </div>
                    </div>

                    <div class="col-md-8 add_top_30">
                        <table class="table">
                            <tr>
                                <th>Модель</th>
                                <td>{{$model->model->name}}</td>
                            </tr>

                            <tr>
                                <th>Год выпуска</th>
                                <td>{{$model->release_year}}</td>
                            </tr>

                            <tr>
                                <th>Коробка передач</th>
                                <td>{{$transmissions[$model->transmission]}}</td>
                            </tr>

                            <tr>
                                <th>Цена за аренду в сутки</th>
                                <td>{{$model->rental_price}}</td>
                            </tr>

                            <tr>
                                <th>Цвет</th>
                                <td>{{$model->color}}</td>
                            </tr>

                            <tr>
                                <th>Гос номер</th>
                                <td>{{$model->state_number}}</td>
                            </tr>

                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid-->
    </div>
@endsection



