@extends('_layouts.application')

@section('content')

    <br><br>
    <div class="row-fluid hideInIE8 circleStats">

        <div class="span2" onTablet="span4" onDesktop="span2">
            <div class="circleStatsItemBox red">
                <div class="header">Eigene Nodes</div>
                <span class="percent">Prozent online</span>
                <div class="circleStat">
                    <input type="text" value="{{$onlineprocent}}" class="whiteCircle" />
                </div>
                <div class="footer">
                                <span class="count">
                                    <span class="number"></span>
                                    <span class="unit">Nodes</span>
                                </span>
                    <span class="sep"> / </span>
                                <span class="value">
                                    <span class="number">{{$mynodes}}</span>
                                    <span class="unit">Nodes</span>
                                </span>
                </div>
            </div>
        </div>

    <br><br>
    <button id="filldb" class="btn btn-primary">Fill DB With JSON</button>
    <br><br>
    <button id="trigger" class="btn btn-primary">Trigger Alert Check</button>


    </div>
@endsection