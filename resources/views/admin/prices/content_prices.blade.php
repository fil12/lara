<div  id="page-wrapper">



    @if($prices)
        <table class="table table-hover table-striped">
            <thead>
            <tr>
                <th>id</th>
                <th>Название</th>
                <th>Цена</th>
                <th>Текст</th>
                <th>Алиас</th>
            </tr>
            </thead>
            <tbody>
            @foreach($prices as $k=>$price)
                <tr>
                    <td>{{$price->id}}</td>
                    <td>{!! Html::link(route('priceEdit',['prices'=>$price->id]),$price->name,['alt'=>$price->name]) !!}</td>
                    <td>${{$price->price}}</td>
                    <td>{!! strip_tags($price->text)  !!}</td>
                    <td>{{$price->alias}}</td>

                </tr>

            @endforeach
            </tbody>

        </table>

    @endif
</div>