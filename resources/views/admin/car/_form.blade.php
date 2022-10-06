<?php
/**
 * @var \App\Models\Car $model
 */

$transmissions = [
    'mechanics' => 'Механическая',
    'auto' => 'Автоматическая',
];

?>
<div class="row">
    <div class="col-md-12">
        @if ($errors->any())

            <div class="alert alert-danger">

                <ul>

                    @foreach ($errors->all() as $error)

                        <li>{{ $error }}</li>

                    @endforeach

                </ul>

            </div>

        @endif
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label>Выбрать фото</label>
            <input id="input-b1" name="img" type="file" class="file" data-browse-on-zone-click="true">
        </div>
    </div>

    <div class="col-md-8 add_top_30">
        <div class="form-group">
            <label>Марка</label>
            <select name="car_model_id" class="form-control">
                @foreach($models as $carModel)
                    <option
                        value="{{$carModel->id}}" {{isset($model) && $model->car_model_id == $carModel->id ? 'selected' : ''}}>{{$carModel->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>Год выпуска</label>
            <input type="date" name="release_year" class="form-control" placeholder="Введите год выпуска"
                   value="{{old('release_year', $model->release_year ?? '')}}">
        </div>

        <div class="form-group">
            <label>Гоcномер</label>
            <input type="text" name="state_number" class="form-control" placeholder="Введите гос номер"
                   value="{{old('state_number', $model->state_number ?? '')}}">
        </div>

        <div class="form-group">
            <label>Цвет</label>
            <input type="text" name="color" class="form-control" placeholder="Введите цвет"
                   value="{{old('color', $model->color ?? '')}}">
        </div>

        <div class="form-group">
            <label>Коробка передач</label>
            <select name="transmission" class="form-control">
                @foreach($transmissions as $key => $transmission)
                    <option
                        value="{{$key}}" {{isset($model) && $model->transmission === $key ? 'selected' : ''}}>{{$transmission}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>Цена аренды в сутки</label>
            <input type="number" name="rental_price" class="form-control" placeholder="Введите цену"
                   value="{{old('rental_price', $model->rental_price ?? '')}}">
        </div>

    </div>
</div>
