<?php
/**
 * @var \App\Models\CarModel $model
 */

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
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Категория</label>
                    <select name="brand_id" class="form-control">
                        @foreach($brands as $brand)
                            <option
                                value="{{$brand->id}}" {{isset($model) && $model->brand_id == $brand->id ? 'selected' : ''}}>{{$brand->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label>Введите название</label>
            <input type="text" name="name" class="form-control" placeholder="Введите название"
                   value="{{old('name', $model->name ?? '')}}">
        </div>
    </div>
</div>
