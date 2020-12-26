@extends('layouts.app')

@section('title')
    -  نتائج البحث
@endsection

@section('css')
    <meta name="description" content="أكاديمية أزهري  - البحث" />
    <meta name="keywords" content=" هنا جميع الدورات التي قام العضو بالبحث عنها " />
@endsection
@section('content')
    @if(count($courses))

    <!-- Page Title
		============================================= -->
    <section id="page-title">

        <div class="container clearfix">
            <h1 title=" نتائج البحث في أكاديمية أزهري"> نتائج البحث</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/')}}" title="أكاديمية أزهري - الرئيسية">الرئيسيه</a></li>
                <li class="breadcrumb-item active" aria-current="page" title="أكاديمية أزهري - البحث في الموقع">البحث</li>
            </ol>
        </div>

    </section><!-- #page-title end -->

    <!-- Content
    ============================================= -->
    <section id="content">

        <div class="content-wrap">
            <div class="container clearfix">

                <gcse:searchresults-only></gcse:searchresults-only>
                <div class="gsc-resultsbox-visible">
                    <div class="gsc-resultsRoot gsc-tabData gsc-tabdActive">
                        <div class="gsc-results gsc-webResult">
                            <div class="gsc-expansionArea">
                                <div class="gsc-webResult gsc-result">
                                    @foreach($courses as $course)
                                        <div class="fancy-title title-bottom-border">
                                           <a href="{{route('course.list',$course->id)}}">
                                               <h1 title="{{$course->name}}">{{$course->name}}</h1>
                                           </a>
                                        </div>
                                        <p title="{!! Illuminate\Support\Str::limit($course->description , $limit = 150, $end = '...' )!!}">{!! Illuminate\Support\Str::limit($course->description , $limit = 150, $end = '...' )!!}</p>
                                        <div class="card-footer py-3 d-flex justify-content-between align-items-center bg-white text-muted">
                                            <div class="badge alert-primary" title="{{$course->price}} جنيهاً ">{{$course->price}} جنيهاً </div>
                                            <a href="javascript: void(0);" onclick="return add_to_cart({{$course->id}})" title="أضف إلي سلتك" class="text-dark position-relative"><i class="icon-cart-plus"></i> أضف إلى السلة</a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @else
            <div class="container clearfix">

                <div class="heading-block">
                    <br>
                    <h2 title="لم يتطابق بحثك مع أية مستندات">لم يتطابق بحثك مع أية مستندات</h2>
                    <br>
                    <h3 title="اقتراحات :">اقتراحات :</h3>
                    <span title="تأكد من كتابة الكلمات بشكل صحيح.">تأكد من كتابة الكلمات بشكل صحيح.</span>
                    <span title=" جرب كلمات مختلفة مثل " كتابة اسم أي مادة "."> جرب كلمات مختلفة مثل " كتابة اسم أي مادة ".</span>
                    <span title=" جرب كلمات متعارف عليها اكثر."> جرب كلمات متعارف عليها اكثر.</span>
                </div>

                <p title="كتابة البحث يحتاج إلى دقة، دقق كلماتك واترك بحثك؛ ونبذل كل جهدنا في تحسين بحثنا لراحتكم">كتابة البحث يحتاج إلى دقة، دقق كلماتك واترك بحثك؛ ونبذل كل جهدنا في تحسين بحثنا لراحتكم</p>

            </div>
        @endif
    </section><!-- #content end -->

@endsection
