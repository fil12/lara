<div id="page-wrapper" style="padding: 20px;">

    {!! Form::open(['url'=>route('peopleEdit',['peoples'=>$data['id']]), 'class'=>'form-horisontal', 'method'=>'post', 'enctype'=>'multipart/form-data']) !!}




    <div class="form-group col-xs-8">
        {!! Form::hidden('id',$data['id'] ) !!}
        {!! Form::label('name','Имя', ['class'=> 'col-xs-2 control-label']) !!}
        <div class="col-xs-10">
            {!! Form::text('name', $data['name'], ['class'=>'form-control', 'placeholder'=>'Введите название страницы'])!!}
        </div>
    </div>
    <br><br>
    <div class="form-group col-xs-8">
        {!! Form::label('lastname','Фамилия', ['class'=> 'col-xs-2 control-label']) !!}
        <div class="col-xs-10">
            {!! Form::text('lastname', $data['lastname'], ['class'=>'form-control', 'placeholder'=>'Введите фамилию '])!!}
        </div>
    </div>
    <br>
    <div class="form-group col-xs-8">
        {!! Form::label('position','Должность', ['class'=> 'col-xs-2 control-label']) !!}
        <div class="col-xs-10">
            {!! Form::text('position', $data['position'], ['class'=>'form-control', 'placeholder'=>'Введите должность '])!!}
        </div>
    </div>
    <br>
    <div class="form-group col-xs-8">
        {!! Form::label('old_img','Картинка', ['class'=> 'col-xs-2 control-label']) !!}
        <div class="col-xs-10">
            {!! Html::image('images/'.$data['img'],'',['class'=>'img-circle','style'=>'width:70px;']) !!}
            {!! Form::hidden('old_img',$data['img'])!!}
        </div>
    </div>
    <br>
    <div class="form-group col-xs-8">
        {!! Form::label('img','Картинка', ['class'=> 'col-xs-2 control-label']) !!}
        <div class="col-xs-10">
            {!! Form::file('img',  ['class'=>'filestyle', 'data-buttonText'=>'Выберите изображение','data-buttonName'=>'btn-primary', 'data-placeholder'=>'Файла нет'])!!}
        </div>
    </div>
    <br>
    <div class="form-group col-xs-8">
        {!! Form::label('skills','Навыки', ['class'=> 'col-xs-2 control-label']) !!}
        <div class="col-xs-10">
            {!! Form::text('skills',$data['skills'], ['class'=>'form-control', 'placeholder'=>'Введите навыки'])!!}
        </div>
    </div>
    <br>
    <div class="form-group col-xs-8">
        {!! Form::label('alais','Алиас', ['class'=> 'col-xs-2 control-label']) !!}
        <div class="col-xs-10">
            {!! Form::text('alias', $data['alias'], ['class'=>'form-control', 'placeholder'=>'Введите alias страницы'])!!}
        </div>
    </div>
    <br>
    <div class="form-group col-xs-8">

        <div class="col-xs-offset-2 col-xs-10">
            {!! Form::button('Сохранить', ['class'=>'btn btn-primary', 'type'=>'submit'])!!}
        </div>
    </div>


    {!! Form::close() !!}




</div>