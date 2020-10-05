<ul>
    @foreach ($products as $item)
    <li>{{$item->name}} - <b>{{$item->getCateName()}}</b></li>
    @endforeach
</ul>