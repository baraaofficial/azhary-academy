@include('layouts.header')
<div class="container">
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="row justify-content-center" data-animate="wobble">

        <div class="col-md-8">

            <div class="card">

                <div class="card-header">{{ __('تحقق من عنوان بريدك الإلكتروني') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert" data-animate="tada">
                            {{ __('تم إرسال رابط تحقق جديد إلى عنوان بريدك الإلكتروني.') }}
                        </div>
                    @endif

                    {{ __('قبل المتابعة، يرجى التحقق من بريدك الإلكتروني للحصول على رابط التحقق.') }}
                    {{ __('إذا لم تستلم البريد الإلكتروني') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('انقر هنا لطلب آخر') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@include('layouts.footer')
