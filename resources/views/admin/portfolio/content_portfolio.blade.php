<div  id="page-wrapper">
    <div style="margin: 10px 0">{!! Html::link(route('portfolioAdd'),'Добавить проект',['class'=>'btn btn-primary']) !!}</div>


    @if($portfolios)
        <table class="table table-hover table-striped">
            <thead>
            <tr>
                <th>id</th>
                <th>Название</th>
                <th>Текст</th>
                <th>Картинка</th>
                <th>Алиас</th>
                <th>Фильтр</th>
                <th>Удалить</th>
            </tr>
            </thead>
            <tbody>
            @foreach($portfolios as $k=>$portfolio)
                <tr>
                    <td>{{$portfolio->id}}</td>
                    <td>{!! Html::link(route('portfolioEdit',['portfolio'=>$portfolio->id]),$portfolio->name,['alt'=>$portfolio->name]) !!}</td>

                    <td>{{$portfolio->text}}</td>
                    <td>{!! Html::image('images/'.$portfolio['img'],'',['class'=>'img-circle','style'=>'width:100px;']) !!}</td>

                    <td>{{$portfolio->alias}}</td>
                    <td>{{$portfolio->filter}}</td>
                    <td>
                        {!! Form::open(['url'=>route('portfolioEdit',['portfolio'=>$portfolio->id]),'class'=>'form-horisontal','mathod'=>'POST']) !!}

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