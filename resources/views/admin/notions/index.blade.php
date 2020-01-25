@extends('layouts.admin')


@section('content')


<h3 class="page-title">Notions</h3>

<p>
    <a href="{{url('/createnotion') }}" class="btn btn-success">Ajouter</a>
</p>

<div class="panel panel-default">
    <div class="panel-heading">
        List
    </div>

    <div class="panel-body">
        <table class="table table-bordered table-striped {{ count($notions) > 0 ? 'datatable' : '' }} dt-select">
            <thead>
                <tr>
                    <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                    <th>Titre</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                @if (count($notions) > 0)
                    @foreach ($notions as $notion)
                        <tr data-entry-id="{{ $notion->id }}">
                            <td></td>
                            <td>{{ $notion->title }}</td>
                            <td>
                                <a href="{{-- route('topics.show',[$topic->id]) --}}" class="btn btn-xs btn-primary">vusialiser</a>
                                <a href="{{-- route('topics.edit',[$topic->id]) --}}" class="btn btn-xs btn-info">modifier</a>
                                {!! Form::open(array(
                                    'style' => 'display: inline-block;',
                                    'method' => 'DELETE',
                                    'onsubmit' => "return confirm('".trans("Vous êtes sûre")."');"
                                    )) !!}
                                {!! Form::submit(trans('supprimer'), array('class' => 'btn btn-xs btn-danger')) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="3">@lang('quickadmin.no_entries_in_table')</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('javascript')
<script>
    window.route_mass_crud_entries_destroy = '';
</script>
@endsection




