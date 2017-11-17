<div id="page-wrapper" style="padding: 20px;">

    {!! Form::open(['url'=>route('peopleAdd'), 'class'=>'form-horisontal', 'method'=>'post', 'enctype'=>'multipart/form-data']) !!}

    <div class="form-group col-xs-8">
        {!! Form::label('name','Имя', ['class'=> 'col-xs-2 control-label']) !!}
        <div class="col-xs-10">
            {!! Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Введите имя'])!!}
        </div>
    </div>
    <br>
    <div class="form-group col-xs-8">
        {!! Form::label('lastname','Фамилия', ['class'=> 'col-xs-2 control-label']) !!}
        <div class="col-xs-10">
            {!! Form::text('lastname', old('lastname'), ['class'=>'form-control', 'placeholder'=>'Введите фамилию '])!!}
        </div>
    </div>
    <br>
    <div class="form-group col-xs-8">
        {!! Form::label('position','Должность', ['class'=> 'col-xs-2 control-label']) !!}
        <div class="col-xs-10">
            {!! Form::text('position', old('position'), ['class'=>'form-control', 'placeholder'=>'Введите должность '])!!}
        </div>
    </div>
    <br>
    <div class="form-group col-xs-8">
        {!! Form::label('img','Фото', ['class'=> 'col-xs-2 control-label']) !!}
        <div class="col-xs-10">
            {!! Form::file('img',  ['class'=>'filestyle', 'data-buttonText'=>'Выберите фото','data-buttonName'=>'btn-primary', 'data-placeholder'=>'Файла нет'])!!}
        </div>
    </div>
    <br>
    <div class="form-group col-xs-8">
        {!! Form::label('skills','Навыки', ['class'=> 'col-xs-2 control-label']) !!}
        <div class="col-xs-10">
            {!! Form::text('skills', old('skills'), ['class'=>'form-control', 'placeholder'=>'Введите навыки'])!!}
        </div>
    </div>
    <br>
    <div class="form-group col-xs-8">
        {!! Form::label('alais','Алиас', ['class'=> 'col-xs-2 control-label']) !!}
        <div class="col-xs-10">
            {!! Form::text('alias', old('alias'), ['class'=>'form-control', 'placeholder'=>'Введите alias проекта'])!!}
        </div>
    </div>
    <br>
    <div class="form-group col-xs-8">
        <div class="col-xs-offset-2 col-xs-10">
            {!! Form::button('Сохранить', ['class'=>'btn btn-primary', 'type'=>'submit'])!!}
        </div>
    </div>


    {!! Form::close() !!}

    <script >
        CKEDITOR.replace('editor');
    </script>


</div>