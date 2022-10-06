<?php
/**
 * @var \App\Models\Car $model
 */
$transmissions = [
    'mechanics' => 'Механическая',
    'auto' => 'Автоматическая'
]
?>

<li>
    <figure><img src="/storage/{{$model->img}}" alt=""></figure>
    <h4>{{$model->model->name}} # {{$model->id}}</h4>
    <ul class="booking_list">

        <li><strong style="font-weight: bold;">Год выпуска:</strong>{{$model->release_year}}</li>
        <li><strong style="font-weight: bold;">Гос номер:</strong>{{$model->state_number}}</li>
        <li><strong style="font-weight: bold;">Цвет:</strong>{{$model->color}}</li>
        <li><strong style="font-weight: bold;">Трансмиссия:</strong>{{$transmissions[$model->transmission]}}</li>
        <li><strong style="font-weight: bold;">Цена аренды в день:</strong>{{$model->rental_price}}</li>


    </ul>
    <p>
    </p>
    <ul class="buttons">
        <li><a href="{{route('cars.show', $model->id)}}" class="btn_1 gray"><i class="fa fa-fw fa-eye"></i> Посмотреть</a></li>
        <li><a href="{{route('cars.edit', $model->id)}}" class="btn_1 gray"><i class="fa fa-fw fa-edit"></i>Изменить</a></li>
        <li>
            <a class="btn_1 gray" href="{{route('cars.destroy', $model->id)}}" title="Удалить"
               aria-label="Удалить"
               data-confirm="Вы уверены, что хотите удалить этот элемент?" data-method="delete"
               data-redirect="{{route('cars.index')}}">
                <i class="fa fa-trash"></i> Удалить
            </a>
        </li>
    </ul>
</li>
