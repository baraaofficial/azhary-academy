@extends('admin-panel.layouts.app')

@section('content')
    <!-- Content area -->
    <div class="content">

        <!-- Basic tables title -->
        <div class="mb-3">
            <h6 class="mb-0 font-weight-semibold">
                Basic tables
            </h6>
            <span class="text-muted d-block">Tables with default <code>Bootstrap</code> styling</span>
        </div>
        <!-- /basic tables title -->


        <!-- Basic table -->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">Basic table</h5>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="reload"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                Example of a <code>basic</code> table. For basic styling (light padding and only horizontal dividers) add the base class <code>.table</code> to any <code>&lt;table&gt;</code>. It may seem super redundant, but given the widespread use of tables for other plugins like calendars and date pickers, we've opted to isolate our custom table styles.
            </div>

            <div class="table-responsive">
                <table class="table">
                    <tbody>
                    @if(Auth::user()->isAdmin())
                     <tr>
                        <td>1</td>
                        <td>الأسم </td>
                        <td>{{ $test->user->name or '' }} ({{ $test->user->email or '' }})</td>
                    </tr>
                     @endif
                    <tr>
                        <td>2</td>
                        <td>Victoria</td>
                        <td>Baker</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>James</td>
                        <td>Alexander</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Franklin</td>
                        <td>Morrison</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /basic table -->
@stop
