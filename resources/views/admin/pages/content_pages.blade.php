<div  id="page-wrapper">
    <div style="margin: 10px 0">{!! Html::link(route('pageAdd'),'Добавить страницу',['class'=>'btn btn-primary']) !!}</div>


    @if($pages)
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>id</th>
                <th>Название</th>
                <th>Алиас</th>
                <th>Дата создания</th>
                <th>Удалить</th>
            </tr>
        </thead>
        <tbody>
        @foreach($pages as $k=>$page)
            <tr>
                <td>{{$page->id}}</td>
                <td>{!! Html::link(route('pageEdit',['page'=>$page->id]),$page->name,['alt'=>$page->name]) !!}</td>
                <td>{{$page->alias}}</td>
                <td>{{$page->created_at}}</td>
                <td>
                    {!! Form::open(['url'=>route('pageEdit',['page'=>$page->id]),'class'=>'form-horisontal','mathod'=>'POST']) !!}

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