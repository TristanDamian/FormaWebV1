<table class="table table-bordered table-striped">
    <thead>
        <th>Id</th>
        <th>Description</th>
        <th>Intitulé</th>
    </thead>
    @foreach($lesConferences as $conference)
        <tr>
            <td>{{$conference->idConf}}</td>
            <td>{{$conference->descriptionConf}}</td>
            <td>{{$conference->intituleConf}}</td>
        </tr>
        @endforeach

</table>