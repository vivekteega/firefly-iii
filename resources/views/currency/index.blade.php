@extends('layouts.default')
@section('content')
    {!! Breadcrumbs::renderIfExists(Route::getCurrentRoute()->getName()) !!}

    <div class="row">
        <div class="col-lg-12 col-sm-12 col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Currencies
                </div>
                <div class="panel-body">
                    <p class="text-info">
                        Firefly III supports various currencies which you can set and enable here.
                    </p>
                    <ul>
                        @if(count($currencies) > 0)
                            <table class="table table-striped table-bordered">
                                <tr>
                                    <th>&nbsp;</th>
                                    <th colspan="2">Currency</th>
                                </tr>
                            @foreach($currencies as $currency)
                                    <tr>
                                        <td>
                                            <div class="btn-group btn-group-sm">
                                                <a class="btn btn-default" href="{{route('currency.edit',$currency->id)}}"><i class="fa fa-fw fa-pencil"></i></a>
                                                <a class="btn btn-default" href="{{route('currency.delete',$currency->id)}}"><i class="fa fa-fw fa-trash"></i></a>
                                            </div>
                                        </td>
                                        <td>{{{$currency->name}}} ({{{$currency->code}}}) ({{{$currency->symbol}}})</td>
                                        <td>
                                        @if($currency->id == $defaultCurrency->id)
                                            <span class="label label-success">default</span>
                                        @else
                                            <a class="btn btn-info" href="{{route('currency.default',$currency->id)}}">make default</a>
                                        @endif
                                        </td>
                                    </tr>

                            @endforeach
                            </table>
                        @endif
                        <p><a class="btn btn-success" href="{{route('currency.create')}}"><i class="fa fa-fw fa-plus-circle"></i> Add another currency</a></p>

                </div>
            </div>
        </div>
    </div>
@stop