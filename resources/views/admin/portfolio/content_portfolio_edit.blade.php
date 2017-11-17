<div id="page-wrapper" style="padding: 20px;">

    {!! Form::open(['url'=>route('portfolioEdit',['portfolio'=>$data['id']]), 'class'=>'form-horisontal', 'method'=>'post', 'enctype'=>'multipart/form-data']) !!}




    <div class="form-group col-xs-8">
        {!! Form::hidden('id',$data['id'] ) !!}
        {!! Form::label('name','Название', ['class'=> 'col-xs-2 control-label']) !!}
        <div class="col-xs-10">
            {!! Form::text('name', $data['name'], ['class'=>'form-control', 'placeholder'=>'Введите название страницы'])!!}
        </div>
    </div>
    <br><br>
    <div class="form-group col-xs-8">
        {!! Form::label('text','Текст', ['class'=> 'col-xs-2 control-label']) !!}
        <div class="col-xs-10">
            {!! Form::textarea('text', $data['text'], ['id'=>'editor','class'=>'form-control', 'placeholder'=>'Введите текст страницы'])!!}
        </div>
    </div>
    <br>
    <div class="form-group col-xs-8">
        {!! Form::label('filter','Фильтр', ['class'=> 'col-xs-2 control-label']) !!}
        <div class="col-xs-10">
            {!! Form::text('filter', $data['filter'], ['class'=>'form-control', 'placeholder'=>'Введите фильтр страницы'])!!}
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
        {!! Form::label('old_img','Картинка', ['class'=> 'col-xs-2 control-label']) !!}
        <div class="col-xs-10">
            {!! Html::image('images/'.$data['img'],'',['class'=>'img-circle']) !!}
            {!! Form::hidden('old_img',$data['img'])!!}
        </div>
    </div>
    <div class="form-group col-xs-8">
        {!! Form::label('img','Картинка', ['class'=> 'col-xs-2 control-label']) !!}
        <div class="col-xs-10">
            {!! Form::file('img',  ['class'=>'filestyle', 'data-buttonText'=>'Выберите изображение','data-buttonName'=>'btn-primary', 'data-placeholder'=>'Файла нет'])!!}
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