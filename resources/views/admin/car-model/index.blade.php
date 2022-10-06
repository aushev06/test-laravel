<?php
/**
 * @var \App\Models\Category\Category $category
 */

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
                <li class="breadcrumb-item active">Модели</li>
            </ol>

            <!-- /cards -->
            <h2></h2>
            <div class="box_general padding_bottom">
                <div class="header_box version_2">
                    <h2><i class="fa fa-fw fa-list"></i>Модели</h2>
                    <div class="pull-right">
                        <a href="{{route('car-models.create')}}" class="btn badge-primary">Добавить</a>
                    </div>
                </div>

                <div class="categories">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Название</th>
                            <th>Действие</th>
                        </tr>

                        </thead>
                        <tbody id="sortable">
                        @foreach($models as $item)
                            <tr data-id="{{$item->id}}">
                                <td>
                                    {{$item->id}}
                                </td>
                                <td>
                                    {{$item->name}}
                                </td>
                                <td>
                                    <a href="{{route('car-models.show', $item->id)}}"><i
                                            class="fa fa-fw fa-eye"></i></a>
                                    <a href="{{route('car-models.edit', $item->id)}}"><i
                                            class="fa fa-fw fa-edit"></i></a>
                                    <form style="display: inline"
                                          action="{{ route('car-models.destroy' , $item->id)}}" method="POST"
                                          class="{{"form-" . $item->id}}">
                                        {!! method_field('DELETE') !!}
                                        @csrf
                                        <button style="border: none; background: none;" type="submit"
                                                onclick="return confirm('Вы уверены?')"><a
                                                href="javascript:void(0)"><i class="fa fa-trash"></i></a>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    {{$models->links()}}
                </div>

            </div>
        </div>
        <!-- /.container-fluid-->
    </div>
@endsection



