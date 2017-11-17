<div id="page-wrapper" style="padding: 20px;">

    {!! Form::open(['url'=>route('userEdit',['user'=>$data['id']]), 'class'=>'form-horisontal', 'method'=>'post']) !!}




    <div class="form-group col-xs-8">
        {!! Form::hidden('id',$data['id'] ) !!}
        {!! Form::label('name','Имя', ['class'=> 'col-xs-2 control-label']) !!}
        <div class="col-xs-10">
            {!! Form::text('name', $data['name'], ['class'=>'form-control', 'placeholder'=>'Введите логин пользователя'])!!}
        </div>
    </div>
    <br>
    <div class="form-group col-xs-8">
        {!! Form::label('email','Email', ['class'=> 'col-xs-2 control-label']) !!}
        <div class="col-xs-10">
            {!! Form::text('email', $data['email'], ['class'=>'form-control', 'placeholder'=>'Введите email пользователя'])!!}
        </div>
    </div>
    <br>
    <div class="form-group col-xs-8">
        {!! Form::label('password','Пароль', ['class'=> 'col-xs-2 control-label']) !!}
        <div class="col-xs-10">
            {!! Form::password('password', ['class'=>'form-control'])!!}
        </div>
    </div>
    <br>
    <div class="form-group col-xs-8">
        {!! Form::label('rool','Права', ['class'=> 'col-xs-2 control-label']) !!}
        <div class="col-xs-10">
            {!! Form::text('rool', $data['rool'], ['class'=>'form-control', 'placeholder'=>'Введите права пользователя'])!!}
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