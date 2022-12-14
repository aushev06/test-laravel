<?php
/**
 * @var \App\Models\CarModel $model
 */

?>

@extends('admin.layout.main')

@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{route('car-models.index')}}">Модели</a>
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
                    <div class="col-md-8 add_top_30">
                        <table class="table">
                            <tr>
                                <th>Название</th>
                                <td>{{$model->name}}</td>
                            </tr>

                            <tr>
                                <th>Марка</th>
                                <td>{{$model->brand->name}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid-->
    </div>
@endsection



