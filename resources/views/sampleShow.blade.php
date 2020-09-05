@extends('layouts.basicForm')

@section('content')

    <style>
        h1 {
            color: black;
            padding: 20px;
        }
        div.container {
            border-color: #00cc00;
            border-style: solid;
            border-radius: 20px;
            height: auto;
            width: auto;
            margin-left: 25px;
            margin-right: 25px;
        }
        .pagination a {
            border-radius: 5px;
            transition: background-color .3s;
            text-align: center;
            font-size: 22px;
            color: #1d2124;
            width: auto;
            }

        .pagination a:hover:not(.active) {
            border-radius: 5px;
            background-color: #00cc00;
            font-size: 22px;
            color: #1d2124;
        }

        .page-item{
            border-radius: 5px;
            font-size: 22px;
            background-color: #00cc00;
        }

        .page-item.active{
            border-radius: 5px;
            background-color: #00cc00;
        }
    </style>

    <div class="bd-example bd-example-tabs" id="MyTab">
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Em Analíse</font></font></a>
                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Enviadas</font></font></a>
                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Resultados</font></font></a>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade in show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <h1>
                    Amostras em analíse
                </h1>
                <div class="container">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Cidade</th>
                            <th scope="col">Cidade de Residência</th>
                            <th scope="col">Confirmation</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach(\App\Sample::where('confirmation','=', 1)->paginate(10) as $sample)
                            <tr>
                                <th scope="row">{{$sample->id}}</th>
                                <td scope="row">{{$sample->name}}</td>
                                <td scope="row">{{$sample->city}}</td>
                                <td scope="row">{{$sample->residential_city}}</td>
                                <td scope="row">{{$sample->confirmation}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <p></p>
                <div id="pagination" class="span12" style="width: 430px; margin: 0 auto; float: none;">
                    <div class="pagination mx-5 align-content-center">
                        {{\App\Sample::where('confirmation','=', 1)->paginate(10)->links()}}
                    </div>
                </div>
                </p>
            </div>
            </div>
            <div class="tab-pane fade in" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <h1>
                    Amostras enviadas ao laboratório
                </h1>
                <div class="container">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Cidade</th>
                            <th scope="col">Cidade de Residência</th>
                            <th scope="col">Confirmation</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach(\App\Sample::where('confirmation','=', 0)->paginate(10) as $sample)
                            <tr>
                                <th scope="row">{{$sample->id}}</th>
                                <td scope="row">{{$sample->name}}</td>
                                <td scope="row">{{$sample->city}}</td>
                                <td scope="row">{{$sample->residential_city}}</td>
                                <td scope="row">{{$sample->confirmation}}</td>
                                <td>
                                    <button class="btn btn-danger">
                                        <a href="{{route('samples.edit', ['sample' => $sample->id])}}" class="text-light">
                                            Edit
                                        </a>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <p></p>
                <div id="pagination" class="span12" style="width: 430px; margin: 0 auto; float: none;">
                    <div class="pagination mx-5 align-content-center">
                        {{\App\Sample::where('confirmation','=', 0)->paginate(10)->links()}}
                    </div>
                </div>
                </p>
            </div>
            <div class="tab-pane fade in" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                <p>Sint sit mollit irure quis est nostrud cillum consequat Lorem esse do quis dolor esse fugiat sunt do. Eu ex commodo veniam Lorem aliquip laborum occaecat qui Lorem esse mollit dolore anim cupidatat. Deserunt officia id Lorem nostrud aute id commodo elit eiusmod enim irure amet eiusmod qui reprehenderit nostrud tempor. Fugiat ipsum excepteur in aliqua non et quis aliquip ad irure in labore cillum elit enim. Consequat aliquip incididunt ipsum et minim laborum laborum laborum et cillum labore. Deserunt adipisicing cillum id nulla minim nostrud labore eiusmod et amet. Laboris consequat consequat commodo non ut non aliquip reprehenderit nulla anim occaecat. Sunt sit ullamco reprehenderit irure ea ullamco Lorem aute nostrud magna.</p>
            </div>
        </div>
    </div>





    <div class="mt-5">
        <!--Space Footer-->
    </div>

@endsection
