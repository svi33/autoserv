@extends('layouts/app')
@section('css')

@endsection

@section('content')
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>


<div class="flex-center position-ref full-height">

        <div class="">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
            @foreach($categories as $cat)
                    <li class="nav-item"> <a class="nav-link " id="category_{{$cat->id}}-tab" data-toggle="tab" href="#category_{{$cat->id}}" role="tab" aria-controls="category_{{$cat->id}}" aria-selected="true">{{$cat->name}}</a> </li>
                @endforeach
            </ul>
            <div class="tab-content" id="myTabContent">
                @foreach($categories as $cat)
                    <div class="tab-pane fade show" id="category_{{$cat->id}}" role="tabpanel" aria-labelledby="category_{{$cat->id}}-tab">
                        <table>
                            @foreach($cat->service as $service)
                                <tr>
                                    <td>{{ $service->name }}</td>
                                    {{--<td>{{ $service->category->name }}</td>--}}
                                    {{--<td>{{ $service->description }}</td>--}}
                                    <td>займет времени {{ $service->worktime}} ч</td>
                                    <td>цена от {{ $service->price }} грн</td>
                                    <td>
                                        <a type="button" class="btn btn-default" href="{{ route('boking.show', $service->id) }}">Записаться на сервис</a>

                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                @endforeach
            </div>
        </div>

</div>

@endsection
