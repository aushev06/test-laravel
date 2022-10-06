<?php
/**
 * @var \App\Models\Brand $model
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
        <div class="form-group">
            <label>Введите название</label>
            <input type="text" name="name" class="form-control" placeholder="Введите название"
                   value="{{old('name', $model->name ?? '')}}">
        </div>
    </div>
</div>
