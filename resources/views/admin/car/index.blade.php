<?php
/**
 * @var \App\Models\Coupon\Coupon[] $coupons
 */

use App\Http\Controllers\Admin\OrderController as Controller;
?>

@extends('admin.layout.main')

@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{route('admin.index')}}">Доска</a>
                </li>
                <li class="breadcrumb-item active">Автомобили</li>
            </ol>

            <!-- /cards -->
            <h2></h2>
            <div class="box_general padding_bottom">
                <div class="header_box version_2">
                    <h2><i class="fa fa-fw fa-list"></i>Автомобили</h2>

                    <div class="pull-right">
                        <a href="{{route('cars.create')}}" class="btn badge-primary">Добавить</a>
                    </div>
                </div>

                <div class="list_general">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Модель</th>
                            <th>Цвет</th>
                            <th>Дата</th>
                            <th>Фильтр</th>
                        </tr>
                        <tr>
                            <form action="" method="get">
                                <td>
                                    <select name="car_model_id" class="form-control">
                                        <option value=""></option>
                                        @foreach($models as $carModel)
                                            <option
                                                value="{{$carModel->id}}">{{$carModel->name}}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td>
                                    <input type="text" class="form-control" name="color" value="{{request('color')}}">
                                </td>
                                <td>
                                    <input type="date" class="form-control" name="date" value="{{request('date')}}">
                                </td>
                                <td>
                                    <button class="btn badge-primary">Применить</button>
                                </td>
                            </form>
                        </tr>
                        </thead>
                    </table>

                    <ul>
                        @foreach($cars as $car)
                            @component('admin.car.components.cardCar', ['model' => $car])@endcomponent
                        @endforeach

                    </ul>

                </div>

                <div class="mt-2">
                    {{$cars->links()}}
                </div>

            </div>
        </div>
        <!-- /.container-fluid-->
    </div>
@endsection



