<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<br>
<div class="container">
    <h2>Курс валют</h2>
    <br>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Валюта</th>
            <th scope="col">Курс по отношению к USD</th>
            <th scope="col">Действия</th>
        </tr>
        </thead>
        <tbody>
        @foreach($currencies as $currency)
        <tr>
            <th scope="row">{{$currency->name}}</th>
            <td>{{$currency->rate}}</td>
            <td><a href="{{route('show', $currency->id)}}">Курс валюты</a>
                <a href="{{route('history', $currency->id)}}">История</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    {{$currencies->links()}}
</div>
