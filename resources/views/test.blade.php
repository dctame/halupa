@extends('layouts.game')

@section('content')
    <div class="container_game">

        <div class="block upper-container">
            <div class="inventory">
                @foreach ($inventory as $item)
                    <div class="inventory-item">
                        <img class="inventory_img" src="{{$item['img']}}" alt="inventory img"/>
                    </div>
                @endforeach
            </div>
            <div class="location">
                <img class="location_img" src="{{$picture}}" alt="loca Pic">
            </div>
            <div class="description">
                {{ $description }}
            </div>
        </div>
        <div class="block bottom-container">
            <div class="avatar">
                <img src="{{URL::asset('storage/img/avatar/pixelfrog1.jpg')}}" alt="profile Pic">
            </div>
            <div class="location-options buttons">
                <div class="options">
                    @foreach ($pathes as $path)
                        <button type="button" onclick="window.location='{{ route("location", [$path['id']] ) }}'">
                            переместиться к {{ $path['name'] }}</button>
                    @endforeach
                </div>
                <div class="items">
                    @if(count($items))
                        <p>
                            Вещи:
                        </p>
                        @foreach ($items as $item)
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#exampleModal">
                                {{ $item->name }}
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title"
                                                id="exampleModalLabel">  {{ $item->name }}</h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            {{ $item->description }}
                                        </div>
                                        <div class="modal-footer">
                                            <form method="post"
                                                  action="{{ route('Inventory', ['id' => $item->id])}}">
                                                @csrf
                                                <button class="btn btn-primary">Взять</button>
                                            </form>
                                            <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">ясно
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                </div>
            </div>
            @endif

        </div>
        <div></div>
    </div>

    {{--    <div class="upperContainer">--}}
    {{--        <div class="inventory">--}}
    {{--            <ul class="inventory">--}}
    {{--                @foreach ($inventory as $item)--}}
    {{--                    <li> <img class="inventory_img" src="{{$item['img']}}" alt="Image"/></li>--}}
    {{--                @endforeach--}}
    {{--            </ul>--}}
    {{--        </div>--}}
    {{--        <div class="locationImage">--}}
    {{--            <img class="location_img" src="{{$picture}}" alt="loca Pic">--}}
    {{--        </div>--}}
    {{--        <div class="textWall"><div class="title">--}}
    {{--                <div class="card-header">{{ $name }}</div>--}}
    {{--            </div>--}}
    {{--            <div class="descripption">--}}
    {{--                <div class="card-header">{{ $description }}</div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}

    {{--    <div class="bottomContainer">--}}

    {{--        <div class="avatar">--}}
    {{--            <img src="{{URL::asset('storage/img/avatar/pixelfrog1.jpg')}}" alt="profile Pic" height="150" width="150">--}}
    {{--        </div>--}}

    {{--        <div class="buttons_game">--}}
    {{--            <ul>--}}
    {{--                @foreach ($pathes as $path)--}}
    {{--                    <li><button type="button" onclick="window.location='{{ route("location", [$path['id']] ) }}'">переместиться к {{ $path['name'] }}</button></li>--}}
    {{--                @endforeach--}}
    {{--            </ul>--}}
    {{--            @if(count($items))--}}
    {{--                <div >--}}
    {{--                    Вещи:--}}
    {{--                    <ul>--}}
    {{--                        @foreach ($items as $item)--}}
    {{--                            <li>--}}
    {{--                                <!-- Button trigger modal -->--}}
    {{--                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">--}}
    {{--                                    {{ $item->name }}--}}
    {{--                                </button>--}}
    {{--                            </li>--}}
    {{--                            <!-- Modal -->--}}
    {{--                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
    {{--                                <div class="modal-dialog" role="document">--}}
    {{--                                    <div class="modal-content">--}}
    {{--                                        <div class="modal-header">--}}
    {{--                                            <h5 class="modal-title" id="exampleModalLabel">  {{ $item->name }}</h5>--}}
    {{--                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
    {{--                                                <span aria-hidden="true">&times;</span>--}}
    {{--                                            </button>--}}
    {{--                                        </div>--}}
    {{--                                        <div class="modal-body">--}}
    {{--                                            {{ $item->description }}--}}
    {{--                                        </div>--}}
    {{--                                        <div class="modal-footer">--}}
    {{--                                            <form method="post" action="{{ route('Inventory', ['id' => $item->id])}}">--}}
    {{--                                                @csrf--}}
    {{--                                                <button class="btn btn-primary" >Взять</button>--}}
    {{--                                            </form>--}}
    {{--                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">ясно</button>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        @endforeach--}}
    {{--                    </ul>--}}
    {{--                </div>--}}
    {{--            @endif--}}
    {{--        </div>--}}

    {{--    </div>--}}
    </div>
@endsection
