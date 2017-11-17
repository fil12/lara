<div  id="page-wrapper">
    <div style="margin: 10px 0">{!! Html::link(route('peopleAdd'),'Добавить страницу',['class'=>'btn btn-primary']) !!}</div>


    @if($peoples)
        <table class="table table-hover table-striped">
            <thead>
            <tr>
                <th>id</th>
                <th>Имя</th>
                <th>Фамилия</th>
                <th>Должность</th>
                <th>Фото</th>
                <th>Навыки</th>
                <th>Алиас</th>
                <th>Удалить</th>
            </tr>
            </thead>
            <tbody>
            @foreach($peoples as $k=>$people)
                <tr>
                    <td>{{$people->id}}</td>
                    <td>{!! Html::link(route('peopleEdit',['people'=>$people->id]),$people->name,['alt'=>$people->name]) !!}</td>
                    <td>{{$people->lastname}}</td>
                    <td>{{$people->position}}</td>
                    <td>{!! Html::image('images/'.$people['img'],'',['class'=>'img-circle','style'=>'width:70px;']) !!}</td>
                    <td>{{$people->skills}}</td>
                    <td>{{$people->alias}}</td>
                    <td>
                        {!! Form::open(['url'=>route('peopleEdit',['people'=>$people->id]),'class'=>'form-horisontal','mathod'=>'POST']) !!}

                        {{ method_field('delete') }}
                        {!! Form::button('Удалить',['class'=>'btn btn-danger','type'=>'submit']) !!}


                        {!! Form::close() !!}
                    </td>
                </tr>

            @endforeach
            </tbody>

        </table>

    @endif
</div>