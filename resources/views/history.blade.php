
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<br>
<div class="container">
    <h2>История {{$histories[0]->name}}</h2>
    <br>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Курс</th>
            <th scope="col">Дата</th>

        </tr>
        </thead>
        <tbody>
        @foreach($histories as $history)
            <tr>
                <th scope="row">{{$history->rate}}</th>
                <td>{{$history->created_at}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
