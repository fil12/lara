<div  id="page-wrapper">
    <div style="margin: 10px 0">{!! Html::link(route('userAdd'),'Добавить пользователя',['class'=>'btn btn-primary']) !!}</div>


    @if($users)
        <table class="table table-hover table-striped">
            <thead>
            <tr>
                <th>id</th>
                <th>Название</th>
                <th>Email</th>
                <th>Права</th>
                <th>Удалить</th>

            </tr>
            </thead>
            <tbody>
            @foreach($users as $k=>$user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{!! Html::link(route('userEdit',['$user'=>$user->id]),$user->name,['alt'=>$user->name]) !!}</td>
                    <td>${{$user->email}}</td>
                    <td>{{$user->rool}}</td>
                    <td>
                        {!! Form::open(['url'=>route('userEdit',['user'=>$user->id]),'class'=>'form-horisontal','mathod'=>'POST']) !!}

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