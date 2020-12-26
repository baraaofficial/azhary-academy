@extends('layouts.app')

@section('title')
- الشروط والأحكام
@endsection

@section('css')
    <meta name="description" content="أكاديمية أزهري  - الشروط والأحكام" />
    <meta name="keywords" content=" الشروط والأحكام الخاصه بالأكاديمية " />
@endsection
@section('content')

    <!-- Page Title
		============================================= -->
    <section id="page-title">

        <div class="container clearfix">
            <h1>الشروط &amp; الأحكام </h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/')}}">الرئيسية</a></li>
                <li class="breadcrumb-item active" aria-current="page">الشروط &amp; الأحكام</li>
            </ol>
        </div>

    </section><!-- #page-title end -->

    <!-- Content
    ============================================= -->
    <section id="content">

        <div class="content-wrap">

            <div class="container clearfix">

                <h3>مقدمة </h3>

                <p><span class="dropcap">م</span>مهمة أكاديمية أزهري  هي تحسين جودة التعليم، لأننا نمكن أي شخص في أي مكان في أي وقت من التسجيل في الدورات التعليمية المقدمة من أكاديمية أزهري لذلك نحتاج إلى
                    قواعد للحفاظ على نظامنا الأساسي وخدماتنا الآمنة ومجتمع الطلاب والمحاضرين لدينا، وتنطبق هذه الشروط على جميع أنشطتك على موقع أكاديمية أزهري  الإلكتروني

                    وتطبيق أكاديمية أزهري  للأجهزة المحمولة الأندرويد </p>
                <div class="divider"><i class="icon-circle"></i></div>

                <!-- Post Content
                ============================================= -->
                <div class="postcontent nobottommargin clearfix">
                    <h4>البند الأول <span>الحسابات</span></h4>

                    <div class="toggle toggle-border">
                        <div class="togglet"><i class="toggle-closed icon-ok-circle"></i><i class="toggle-open icon-remove-circle"></i>الشرط الأول #1</div>
                        <div class="togglec"> أنت بحاجة إلى حساب لكل الأنشطة على منصة أكاديمية أزهري وأنت مسؤول عن كل نشاط مرتبط بحسابك . </div>
                    </div>

                    <div class="toggle toggle-border">
                        <div class="togglet"><i class="toggle-closed icon-ok-circle"></i><i class="toggle-open icon-remove-circle"></i>الشرط الثاني #2</div>
                        <div class="togglec">عند إعداد حسابك وصيانته يجب عليك متابعة تقديم معلومات دقيقة وكاملة، بما في ذلك عنوان بريد إلكتروني صالح وفعال .</div>
                    </div>

                    <div class="toggle toggle-border">
                        <div class="togglet"><i class="toggle-closed icon-ok-circle"></i><i class="toggle-open icon-remove-circle"></i>الشرط الثالث #3</div>
                        <div class="togglec">تتحمل المسؤولية الكاملة عن حسابك وكل ما يحدث في حسابك، بما في ذلك أي ضرر لنا أو لأي شخص آخر بسبب شخص يستخدم حسابك دون إذن .
                        </div>
                    </div>

                    <div class="divider"><i class="icon-circle"></i></div>


                    <h4>البند الثاني <span>الالتحاق بالدورات</span></h4>

                    <div class="toggle toggle-border">
                        <div class="togglet"><i class="toggle-closed icon-ok-circle"></i><i class="toggle-open icon-remove-circle"></i>الشرط الأول #1</div>
                        <div class="togglec">عند التسجيل في دورة تدريبية تحصل على ترخيص منا لمشاهدتها  وذلك فقط  من خلال موقع أكاديمية أزهري  على الويب أو تطبيق أكاديمية أزهري  للهواتف المحمولة الأندرويد  وليس لأي استخدام اخر .
                        </div>
                    </div>

                    <div class="toggle toggle-border">
                        <div class="togglet"><i class="toggle-closed icon-ok-circle"></i><i class="toggle-open icon-remove-circle"></i>الشرط الثاني #2</div>
                        <div class="togglec">لا تحاول نقل أو إعادة بيع الدورات او نشرها بأي شكل من الأشكال، وإلا فسوف تعرض نفسك للمساءلة القانونية . </div>
                    </div>

                    <div class="toggle toggle-border">
                        <div class="togglet"><i class="toggle-closed icon-ok-circle"></i><i class="toggle-open icon-remove-circle"></i>الشرط الثالث #3</div>
                        <div class="togglec">كطالب، عندما تقوم بالتسجيل في دورة تدريبية سواء كانت دورة مجانية أو مدفوعة، فإنك تحصل على ترخيص منا لمشاهدة الدورة التدريبية من خلال منصة أكاديمية أزهري و  هو الوحيد  مالك التراخيص للدورات وهذه الدورات
                            مرخصة وليست مباعة لك.
                        </div>
                    </div>

                    <div class="toggle toggle-border">
                        <div class="togglet"><i class="toggle-closed icon-ok-circle"></i><i class="toggle-open icon-remove-circle"></i>الشرط الرابع #4</div>
                        <div class="togglec">يمنح هذا الترخيص الحق في اي اسئلة او استفسارات للمحاضر الناشر المحتوى الذي قمت بشرائه وتحاول الرد على هذه الاسئلة والاستفسارات في أقرب وقت ممكن.
                        </div>
                    </div>

                    <div class="toggle toggle-border">
                        <div class="togglet"><i class="toggle-closed icon-ok-circle"></i><i class="toggle-open icon-remove-circle"></i>الشرط الخامس #5</div>
                        <div class="togglec"> لا يمنحك هذا الترخيص أي حق في إعادة بيع الدورة التدريبية بأي طريقة بما في ذلك مشاركة معلومات الحساب مع المشتري أو تنزيل الدورة التدريبية بطريقة غير قانونية ومشاركتها بأي طريقة  و لا يجوز لك إعادة إنتاج أو إعادة توزيع أو إرسال أو تخصيص أو بيع أو بث أو تأجير أو مشاركة أو إقراض أو تعديل
                            أو تكييف أو تعطيل أو إنشاء أعمال مشتقة من أي من البرامج الفرعية لاستخدام أي دورة
                            من الباطن أو نقلها .
                        </div>
                    </div>
                    <div class="divider"><i class="icon-circle"></i></div>


                    <h4>البند الثالث <span>فترة الاشتراك</span></h4>

                    <div class="toggle toggle-border">
                        <div class="togglet"><i class="toggle-closed icon-ok-circle"></i><i class="toggle-open icon-remove-circle"></i>الشرط الأول #1</div>
                        <div class="togglec">
                            الاشتراك  في دوراتنا لفصل  دراسي كامل الذي تم إجراء عملية الشراء فيه وينتهي

                            الاشتراك بنهاية هذا الفصل الدراسي
                            وبعد نهاية فترة الاشتراك لن تتمكن من الوصول إلى أي فيديو.
                        </div>
                    </div>

                    <div class="toggle toggle-border">
                        <div class="togglet"><i class="toggle-closed icon-ok-circle"></i><i class="toggle-open icon-remove-circle"></i>الشرط الثاني #2</div>
                        <div class="togglec"> المبالغ المدفوعة لشراء الدورات غير قابلة للاسترداد لأي سبب كان.
                        </div>
                    </div>

                    <div class="divider"><i class="icon-circle"></i></div>


                    <h4>البند الرابع <span>قواعد المحتوى والسلوك </span></h4>

                    <div class="toggle toggle-border">
                        <div class="togglet"><i class="toggle-closed icon-ok-circle"></i><i class="toggle-open icon-remove-circle"></i>الشرط الأول #1</div>
                        <div class="togglec">
                            يمكنك فقط استخدام أكاديمية أزهري  لأغراض مشروعة.

                        </div>
                    </div>

                    <div class="toggle toggle-border">
                        <div class="togglet"><i class="toggle-closed icon-ok-circle"></i><i class="toggle-open icon-remove-circle"></i>الشرط الثاني #2</div>
                        <div class="togglec">

                            أنت مسؤول عن كل المحتوى الذي تنشره على نظامنا الأساسي ويجب عليك الحفاظ على الأسئلة والرسائل الصوتية والصور

                            وفقا للقانون في بلدك واحترام حقوق الملكية الفكرية للآخرين ويمكننا حظر حسابك بسبب المخالفات المتكررة أو الرئيسية.
                        </div>
                    </div>

                    <div class="toggle toggle-border">
                        <div class="togglet"><i class="toggle-closed icon-ok-circle"></i><i class="toggle-open icon-remove-circle"></i>الشرط الثالث #3</div>
                        <div class="togglec">

                            إذا كنت تعتقد أن شخص ما ينتهك حقوق الطبع والنشر الخاصة بك على نظامنا الأساسي، فأخبرنا على الفور.
                         </div>
                    </div>

                    <div class="divider"><i class="icon-circle"></i></div>


                    <h4>البند الخامس <span> الحقوق والملكية </span></h4>

                    <div class="toggle toggle-border">
                        <div class="togglet"><i class="toggle-closed icon-ok-circle"></i><i class="toggle-open icon-remove-circle"></i>الشرط الأول #1</div>
                        <div class="togglec">
                            نحن نملك حقوق  منصة أكاديمية أزهري  بما في ذلك موقع الويب وتطبيقات الأجهزة المحمولة الاندرويد  والاشعارات. لا يمكنك العبث بها أو استخدامها
                            دون إذن.

                        </div>
                    </div>

                    <div class="toggle toggle-border">
                        <div class="togglet"><i class="toggle-closed icon-ok-circle"></i><i class="toggle-open icon-remove-circle"></i>الشرط الثاني #2</div>
                        <div class="togglec">

                            نحن نملك جميع المحتويات التي يتم عرضها على النظام الأساسي أكاديمية أزهري  مثل ملفات الفيديو -ملفات PDF ( وأي محتويات أخرى. - وتقر بأنك  لن تفعل أي شيء ضار أو ضرر لمنصة أكاديمية أزهري بما في ذلك، على سبيل المثال لا الحصر إرسال فيروس، او  أي ملفات برامج للضرر باي ملحقات منصة أكاديمية أزهري عن طريق  بريد عشوائي .
                        </div>
                    </div>

                    <div class="divider"><i class="icon-circle"></i></div>



                    <h4>البند السادس <span> عدم المسؤولية </span></h4>

                    <div class="toggle toggle-border">
                        <div class="togglet"><i class="toggle-closed icon-ok-circle"></i><i class="toggle-open icon-remove-circle"></i>الشرط الأول #1</div>
                        <div class="togglec">

                            قد يحدث تعطل لنظامنا الأساسي، إما للصيانة المخططة أو بسبب حدوث شيء ما في الموقع. قد يحدث أن يقوم أحد مدربينا بإلقاء بيانات مضللة عن مساره. قد يحدث أيضا

                            أن نواجه مشكلات أمنية، هذه أمثلة. أنت توافق على أنك لن تقوم باي اجراء قانوني ضدنا في أي من مثل هذه الحالات السابقة الذكر .
                        </div>
                    </div>
                    <div class="toggle toggle-border">
                        <div class="togglet"><i class="toggle-closed icon-ok-circle"></i><i class="toggle-open icon-remove-circle"></i>الشرط الثاني #2</div>
                        <div class="togglec">

                            قد نقرر التوقف عن إتاحة بعض ميزات الخدمات في أي وقت ولأي سبب، لن تتحمل أكاديمية أزهري  تحت أي ظرف من الظروف المسؤولية عن أي أضرار ناتجة عن هذه الانقطاعات أو عدم توفر هذه الميزات.
                        </div>
                    </div>

                    <div class="toggle toggle-border">
                        <div class="togglet"><i class="toggle-closed icon-ok-circle"></i><i class="toggle-open icon-remove-circle"></i>الشرط الثالث #3</div>
                        <div class="togglec">

                            نحن لسنا مسؤولين عن تأخير أو فشل أدائنا بسبب انقطاع التيار الكهربائي أو الإنترنت أو الاتصالات عن بعد؛ أو قيود

                            أي من الخدمات التي تسببها أحداث خارجة عن السيطرة المعقولة، مثل عمل من أعمال الحرب أو العداء أو التخريب أو كارثة أو اجراءات من جهة الحكومة.
                        </div>
                    </div>

                    <div class="divider"><i class="icon-circle"></i></div>




                    <h4>البند السابع <span> حديث هذه الشروط  </span></h4>

                    <div class="toggle toggle-border">
                        <div class="togglet"><i class="toggle-closed icon-ok-circle"></i><i class="toggle-open icon-remove-circle"></i>الشرط الأول #1</div>
                        <div class="togglec">

                            من وقت لآخر قد نقوم بتحديث هذه الشروط لتوضيح ممارساتنا أو لتعكس ممارسات جديدة أو مختلفة مثل عندما نضيف ميزات جديدة ويحتفظ أكاديمية أزهري  بالحق وفقا لتقديره الخاص في تعديل / أو إجراء تغييرات على هذه الشروط

                             في أي وقت. إذا قمنا بإجراء أي تغيير، سوف نعلمك باستخدام وسائل بارزة مثل إرسال إشعار عبر البريد الإلكتروني الي عنوان البريد الإلكتروني المحدد في حسابك  أو عن طريق نشر إشعار من خلال خدماتنا، وستصبح التعديلات سارية المفعول في يوم نشرها ما لم ينص على خلاف ذلك.
                        </div>
                    </div>
                    <div class="toggle toggle-border">
                        <div class="togglet"><i class="toggle-closed icon-ok-circle"></i><i class="toggle-open icon-remove-circle"></i>الشرط الثاني #2</div>
                        <div class="togglec">
                            بمجرد تسجيلك وإشتراكك فى خدماتنا يعد موافقة صريحة على كافة الشروط والأحكام وكذلك استمرار استخدامك لخدماتنا بعد سريان التغييرات يعني قبولك لهذه التغيرات علي أى شروط معدلة أو مضافة إلى الشروط السابقة .
                            </div>
                    </div>

                    <div class="divider"><i class="icon-circle"></i></div>
                </div><!-- .postcontent end -->


            </div>

        </div>

    </section><!-- #content end -->

@stop
