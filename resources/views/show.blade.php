<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<br>
<div class="container">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Валюта</th>
            <th scope="col">Курс</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{$currency->name}}</td>
            <td>{{$currency->rate}}</td>
        </tr>
        </tbody>
    </table>
</div>
