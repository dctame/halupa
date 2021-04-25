@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="title">
                    <div class="card-header">{{ $name }}</div>
                </div>
                <div class="descripption">
                    <div class="card-header">{{ $description }}</div>
                </div>
                <div class="card">
                    Хождения:
                <ul>
                    @foreach ($pathes as $path)
                        <li><button type="button" onclick="window.location='{{ route("location", [$path['id']] ) }}'">переместиться к {{ $path['name'] }}</button></li>
                    @endforeach
                </ul>
                </div>

                @if(count($items))
                    <div class="card">
                        Вещи:
                        <ul>
                            @foreach ($items as $item)
                                <li>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                        {{ $item->name }}
                                    </button>
                                </li>
                                <!-- Modal -->
                                <div class="modal fade" style="z-index: 500;" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">  {{ $item->name }}</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                {{ $item->description }}
                                            </div>
                                            <div class="modal-footer">
                                                <form method="post" action="{{ route('Inventory', ['id' => $item->id])}}">
                                                    @csrf
                                                    <button class="btn btn-primary" >Взять</button>
                                                </form>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">ясно</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card">
                    Инвентарь:
                    <ul class="inventory">
                        @foreach ($inventory as $item)
                            <li> <img src="{{$item['img']}}" alt="Image"/></li>
                        @endforeach
                    </ul>
            </div>
        </div>
    </div>


@endsection
