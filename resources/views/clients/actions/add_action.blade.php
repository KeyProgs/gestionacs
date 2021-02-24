@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Actions Liste</h1>
@stop


@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <p class="mb-0"><h1>Liste Des Tâches</h1>

                    <table class="table table-hover">
                        <thead  class="thead-light ">
                        <tr>
                            <th  scope="col" >#</th>
                            <th  scope="col" >Titre</th>
                            <th  scope="col" >Date début</th>
                            <th  scope="col" >date Fin</th>
                            <th  scope="col" >Rapporteur</th>
                            <th  scope="col" >Action Type</th>
                            <th  scope="col" >Etat</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($actions as $action)
                            <tr  style='cursor: pointer; cursor: hand;' onclick="window.location='/client/c-{{$action['id']}}';" >
                                <th scope="row">{{$action['id']}}</th>
                                <td>{{$action['titre']}}</td>
                                <td>{{$action['dd']}}</td>
                                <td>{{$action['df']}}</td>
                                <td>{{$action->getRapporteur->name}}</td>
                                <td>{{$action->typeaction->titre}}</td>
                                <td>{{$action->getActionEtat->titre}}</td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                    <span>
                        {{$actions->appends(array('sort' => 'votes'))->links()}}
                    </span>

                    </p>
                    <div class="col-3 mt-1">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal">
                            + Action
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .w-5{
            display: none;
        }
    </style>

@stop

<script>
    jQuery( document ).ready(function() {
        $("#container").on('click-row.bs.table', function (e, row, $element) {
            window.location = $element.data('href');
        });
    });


</script>
