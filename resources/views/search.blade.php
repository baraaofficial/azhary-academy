@extends('layouts.app')

@section('content')
    @if(count($courses))

    <!-- Page Title
		============================================= -->
    <section id="page-title">

        <div class="container clearfix">
            <h1> نتائج البحث</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/')}}">الرئيسيه</a></li>
                <li class="breadcrumb-item active" aria-current="page">البحث</li>
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
                                            <h1>{{$course->name}}</h1>
                                        </div>
                                        <p>{!! Illuminate\Support\Str::limit($course->description , $limit = 150, $end = '...' )!!}</p>
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
                    <h2>لم يتطابق بحثك مع أية مستندات</h2>
                    <br>
                    <h3>اقتراحات :</h3>
                    <span>تأكد من كتابة الكلمات بشكل صحيح.</span>
                    <span> جرب كلمات مختلفة مثل " كتابة اسم أي مادة ".</span>
                    <span> جرب كلمات متعارف عليها اكثر.</span>
                </div>

                <p>كتابة البحث يحتاج إلى دقة، دقق كلماتك واترك بحثك؛ ونبذل كل جهدنا في تحسين بحثنا لراحتكم</p>

            </div>
        @endif
    </section><!-- #content end -->

@endsection
