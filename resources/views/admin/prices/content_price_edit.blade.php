<div id="page-wrapper" style="padding: 20px;">

    {!! Form::open(['url'=>route('priceEdit',['price'=>$data['id']]), 'class'=>'form-horisontal', 'method'=>'post', 'enctype'=>'multipart/form-data']) !!}




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
        {!! Form::label('price','Фильтр', ['class'=> 'col-xs-2 control-label']) !!}
        <div class="col-xs-10">
            {!! Form::text('price', $data['price'], ['class'=>'form-control', 'placeholder'=>'Введите цену'])!!}
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