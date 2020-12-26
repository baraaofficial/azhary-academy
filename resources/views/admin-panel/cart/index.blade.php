@extends('admin-panel.layouts.app')

@section('title')
    - جميع الفواتير
@endsection

@section('css')
    <!-- Theme JS files -->
    <script src="{{asset('admin-panel/global_assets/js/plugins/forms/selects/select2.min.js')}}"></script>
    <script src="{{asset('admin-panel/global_assets/js/demo_pages/invoice_archive.js')}}"></script>
    <script src="{{asset('admin-panel/global_assets/js/demo_pages/widgets_stats.js')}}"></script>
    <!-- Theme JS files -->
    <script src="{{asset('admin-panel/global_assets/js/plugins/visualization/d3/d3.min.js')}}"></script>
    <script src="{{asset('admin-panel/global_assets/js/plugins/visualization/d3/d3_tooltip.js')}}"></script>
@endsection
@section('content')

    <div class="content-wrapper">

        <!-- Page header -->
        <div class="page-header page-header-light">
            <div class="page-header-content header-elements-md-inline">
                <div class="page-title d-flex">
                    <h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">الفواتير</span> - لوحة التحكم</h4>
                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                </div>

            </div>

            <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                <div class="d-flex">
                    <div class="breadcrumb">
                        <a href="{{url('/dashboard')}}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> لوحة التحكم</a>
                        <span class="breadcrumb-item active">جميع الفواتير</span>
                    </div>

                </div>

            </div>
        </div>
        <!-- /page header -->
        @if(session('message') ?? '' )
            <div class="alert alert-success alert-styled-left alert-arrow-left alert-dismissible">
                <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
                {{session('message') ?? ''}}
            </div>
        @elseif(session('delete') ?? '' )
            <div class="alert alert-danger alert-styled-left alert-dismissible">
                <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
                {{session('delete') ?? ''}}
            </div>
         @endif

        <!-- Content area -->
        <div class="content">

            <!-- Simple statistics -->
            <div class="mb-3">
                <h6 class="mb-0 font-weight-semibold">
                    عدد فواتير الدورات
                </h6>
                <span class="text-muted d-block">الدورات التي اشترك فيها الطلاب </span>
            </div>

            <div class="row">
                @foreach($invoices as $invoice)
                    <div class="col-sm-6 col-xl-3">
                        <div class="card card-body bg-danger-400 has-bg-image">
                            <div class="media">
                                <div class="media-body">

                                    <h5 class="mb-0">الدورة: <abbr>{{$invoice->name}}</abbr></h5><br>
                                    <span class="mb-0">المدرس: {{optional($invoice->teacher)->name}}</span>
                                    <br>
                                    <br>
                                    <h3 class="text-uppercase font-size-xs">السعر: <abbr>{{$invoice->price}}</abbr> <br> الطلاب: {{$invoice->cartCourse->count()}} </h3>
                                    <span class="text-uppercase font-size-xs">اجمالى المبيعات: {{($invoice->price) * ($invoice->cartCourse->count())}} </span>
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- /simple statistics -->
            <!-- Invoice archive -->
            <div class="card">
                <div class="card-header bg-transparent header-elements-inline">
                    <h6 class="card-title">الفواتير المدفوعة</h6>
                    <div class="header-elements">
                        <div class="list-icons">
                            <a class="list-icons-item" data-action="collapse"></a>
                        </div>
                    </div>
                </div>

                <table class="table table-lg invoice-archive">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>الدورة</th>
                        <th>معلومات الطالب</th>
                        <th>التاريخ</th>
                        <th>السعر</th>
                        <th class="text-center">اجراءات</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($carts as $cart)
                    <tr>
                        <td>#{{$loop->iteration}}</td>
                        <td>{{optional($cart->course)->name}}</td>
                        <td>
                            <h6 class="mb-0">
                                <a href="#">{{$cart->user_name}}</a>
                                <span class="d-block font-size-sm text-muted">البريد الألكتروني: {{$cart->user_email}}</span>
                                <span class="d-block font-size-sm text-muted">الموبايل: {{$cart->user_phone}}</span>
                            </h6>
                        </td>
                        <td title="{{$cart->updated_at}}">
                            {{$cart->updated_at->isoFormat('Do MMMM YYYY', 'MMMM YYYY')}}
                        </td>
                        <td>
                            <h6 class="mb-0 font-weight-bold">{{$cart->total}}<span class="d-block font-size-sm text-muted font-weight-normal">جنيها</span></h6>
                        </td>
                        <td class="text-center">
                            <div class="list-icons">
                                <div class="dropdown">
                                    <a href="#" class="list-icons-item" data-toggle="dropdown">
                                        <i class="icon-menu9"></i>
                                    </a>

                                    <div class="dropdown-menu">
                                        <a href="{{route('invoices.edit',$cart->id)}}" class="dropdown-item"><i class="icon-pencil7"></i>تعديل</a>
                                        {!! Form::open(array(

                                                 'style' => 'display: inline-block;',
                                                 'method' => 'DELETE',
                                                 'onsubmit' => "return confirm('".trans("هل انت متأكد من حذف هذه الفاتورة ؟")."');",
                                                 'route' => ['invoices.destroy', $cart->id])) !!}

                                        <button class="dropdown-item"><i class="icon-x"></i> حذف</button>

                                        {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
            <!-- /invoice archive -->

            <!-- Invoice archive -->
            <div class="card">
                <div class="card-header bg-transparent header-elements-inline">
                    <h6 class="card-title"> الفواتير المعلقة</h6>
                    <div class="header-elements">
                        <div class="list-icons">
                            <a class="list-icons-item" data-action="collapse"></a>
                        </div>
                    </div>
                </div>

                <table class="table table-lg invoice-archive">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>الدورة</th>
                        <th>معلومات الطالب</th>
                        <th>التاريخ</th>
                        <th>السعر</th>
                        <th class="text-center">اجراءات</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($PaidInvoices as $cart)
                        <tr>
                            <td>#{{$loop->iteration}}</td>
                            <td>{{optional($cart->course)->name}}</td>
                            <td>
                                <h6 class="mb-0">
                                    <a href="#">{{$cart->user_name}}</a>
                                    <span class="d-block font-size-sm text-muted">البريد الألكتروني: {{$cart->user_email}}</span>
                                    <span class="d-block font-size-sm text-muted">الموبايل: {{$cart->user_phone}}</span>
                                </h6>
                            </td>
                            <td title="{{$cart->updated_at}}">
                                {{$cart->updated_at->isoFormat('Do MMMM YYYY', 'MMMM YYYY')}}
                            </td>
                            <td>
                                <h6 class="mb-0 font-weight-bold">{{$cart->total}}<span class="d-block font-size-sm text-muted font-weight-normal">جنيها</span></h6>
                            </td>
                            <td class="text-center">
                                <div class="list-icons">
                                    <div class="dropdown">
                                        <a href="#" class="list-icons-item" data-toggle="dropdown">
                                            <i class="icon-menu9"></i>
                                        </a>

                                        <div class="dropdown-menu">
                                            <a href="{{route('invoices.edit',$cart->id)}}" class="dropdown-item"><i class="icon-pencil7"></i>تعديل</a>
                                            {!! Form::open(array(

                                                     'style' => 'display: inline-block;',
                                                     'method' => 'DELETE',
                                                     'onsubmit' => "return confirm('".trans("هل انت متأكد من حذف هذه الفاتورة ؟")."');",
                                                     'route' => ['invoices.destroy', $cart->id])) !!}

                                            <button class="dropdown-item"><i class="icon-x"></i> حذف</button>

                                            {!! Form::close() !!}
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
            <!-- /invoice archive -->
@endsection
