<tr>
    <th scope="row">{{$event->id}}</th>
    <td>{{$event->description}}</td>
    <td><a href="{{route('event.item', ['id' => $event->id])}}">Detail</a></td>
</tr>