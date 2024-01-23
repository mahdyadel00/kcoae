<!--  BEGIN SIDEBAR  -->
<div class="sidebar-wrapper sidebar-theme">

    <nav id="sidebar">

        <div class="shadow-bottom"></div>
        <ul class="list-unstyled menu-categories" id="accordionExample">

            <li class="menu {{ ( (request()->is('*/about*'))|| (request()->is('*/employees*')) )? 'active' : '' }}">
                <a href="#office" data-bs-toggle="collapse" aria-expanded="{{(  (request()->is('*/about*'))|| (request()->is('*/employees*'))  ) ? 'true' : 'false' }}" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-server"><rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect><rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect><line x1="6" y1="6" x2="6.01" y2="6"></line><line x1="6" y1="18" x2="6.01" y2="18"></line></svg>
                        <span>عن المكتب </span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/.svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled {{  ( (request()->is('*/about*'))  || (request()->is('*/employees*')) ) ? 'show' : ''}}" id="office" data-bs-parent="#accordionExample">
                    <li class="{{ (request()->is('*/about*')) ? 'active' : '' }}">
                        <a href="{{route('admin_panel.about.index')}}"> نبذة تعريفية </a>
                    </li>
                </ul>
                <ul class="collapse submenu list-unstyled {{ ( (request()->is('*/about*')) || (request()->is('*/employees*'))  ) ? 'show' : ''}}" id="office" data-bs-parent="#accordionExample">
                    <li class="{{  (request()->is('*/employees*')) ? 'active' : '' }}">
                        <a href="{{route('admin_panel.employees.index')}}"> العاملون  </a>
                    </li>
                </ul>
            </li>

            <li class="menu {{ ( (request()->is('*/government_contacts*'))|| (request()->is('*/higher_education*'))|| (request()->is('*/financial_dues*'))|| (request()->is('*/health_insurance*'))|| (request()->is('*/technical_support*'))|| (request()->is('*/student_guide*'))|| (request()->is('*/application_form*'))|| (request()->is('*/instructions*'))|| (request()->is('*/circulars*'))|| (request()->is('*/calendar*'))|| (request()->is('*/useful_links*'))|| (request()->is('*/short_news*'))|| (request()->is('*/sliders*')) )? 'active' : '' }}">
                <a href="#main" data-bs-toggle="collapse" aria-expanded="{{(  (request()->is('*/government_contacts*'))|| (request()->is('*/higher_education*'))|| (request()->is('*/financial_dues*'))|| (request()->is('*/health_insurance*'))|| (request()->is('*/technical_support*'))|| (request()->is('*/student_guide*'))|| (request()->is('*/application_form*'))|| (request()->is('*/instructions*'))|| (request()->is('*/circulars*'))|| (request()->is('*/calendar*'))|| (request()->is('*/useful_links*')) || (request()->is('*/short_news*'))|| (request()->is('*/sliders*')) ) ? 'true' : 'false' }}" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                        <span>الصفحة الرئيسية </span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/.svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled {{ ( (request()->is('*/government_contacts*')) || (request()->is('*/higher_education*'))|| (request()->is('*/financial_dues*'))|| (request()->is('*/health_insurance*'))|| (request()->is('*/technical_support*'))|| (request()->is('*/student_guide*'))|| (request()->is('*/application_form*'))|| (request()->is('*/instructions*'))|| (request()->is('*/circulars*'))|| (request()->is('*/calendar*'))|| (request()->is('*/useful_links*'))|| (request()->is('*/short_news*'))|| (request()->is('*/sliders*'))  ) ? 'show' : ''}}" id="main" data-bs-parent="#accordionExample">
                    <li class="{{  (request()->is('*/higher_education*')) ? 'active' : '' }}">
                        <a style="white-space: normal;" href="{{route('admin_panel.higher_education.index')}}"> مميزات التعليم العالي في دولة الإمارات العربية المتحدة و دولة قطر و سلطنة عمان  </a>
                    </li>
                </ul>
                <ul class="collapse submenu list-unstyled {{  ( (request()->is('*/government_contacts*'))  || (request()->is('*/higher_education*'))|| (request()->is('*/financial_dues*'))|| (request()->is('*/health_insurance*'))|| (request()->is('*/technical_support*'))|| (request()->is('*/student_guide*'))|| (request()->is('*/application_form*'))|| (request()->is('*/instructions*'))|| (request()->is('*/circulars*'))|| (request()->is('*/calendar*'))|| (request()->is('*/useful_links*'))|| (request()->is('*/short_news*'))|| (request()->is('*/sliders*')) ) ? 'show' : ''}}" id="main" data-bs-parent="#accordionExample">
                    <li class="{{ (request()->is('*/government_contacts*')) ? 'active' : '' }}">
                        <a style="white-space: normal;" href="{{route('admin_panel.government_contacts.index')}}">جهات التواصل الحكومية في الإمارات</a>
                    </li>
                </ul>
                <ul class="collapse submenu list-unstyled {{  ( (request()->is('*/government_contacts*'))  || (request()->is('*/higher_education*'))|| (request()->is('*/financial_dues*'))|| (request()->is('*/health_insurance*'))|| (request()->is('*/technical_support*'))|| (request()->is('*/student_guide*'))|| (request()->is('*/application_form*'))|| (request()->is('*/instructions*'))|| (request()->is('*/circulars*'))|| (request()->is('*/calendar*'))|| (request()->is('*/useful_links*'))|| (request()->is('*/short_news*'))|| (request()->is('*/sliders*')) ) ? 'show' : ''}}" id="main" data-bs-parent="#accordionExample">
                    <li class="{{ (request()->is('*/calendar*')) ? 'active' : '' }}">
                        <a style="white-space: normal;" href="{{route('admin_panel.calendar.index')}}">التقويم</a>
                    </li>
                </ul>

                <ul class="collapse submenu list-unstyled {{  ( (request()->is('*/government_contacts*'))  || (request()->is('*/higher_education*'))|| (request()->is('*/financial_dues*'))|| (request()->is('*/health_insurance*'))|| (request()->is('*/technical_support*'))|| (request()->is('*/student_guide*'))|| (request()->is('*/application_form*'))|| (request()->is('*/instructions*'))|| (request()->is('*/circulars*'))|| (request()->is('*/calendar*'))|| (request()->is('*/useful_links*'))|| (request()->is('*/short_news*'))|| (request()->is('*/sliders*')) ) ? 'show' : ''}}" id="main" data-bs-parent="#accordionExample">
                    <li class="{{ (request()->is('*/financial_dues*')) ? 'active' : '' }}">
                        <a style="white-space: normal;" href="{{route('admin_panel.financial_dues.index')}}">المستحقات المالية</a>
                    </li>
                </ul>

                <ul class="collapse submenu list-unstyled {{  ( (request()->is('*/government_contacts*'))  || (request()->is('*/higher_education*'))|| (request()->is('*/financial_dues*'))|| (request()->is('*/health_insurance*'))|| (request()->is('*/technical_support*'))|| (request()->is('*/student_guide*'))|| (request()->is('*/application_form*'))|| (request()->is('*/instructions*'))|| (request()->is('*/circulars*'))|| (request()->is('*/calendar*'))|| (request()->is('*/useful_links*'))|| (request()->is('*/short_news*'))|| (request()->is('*/sliders*')) ) ? 'show' : ''}}" id="main" data-bs-parent="#accordionExample">
                    <li class="{{ (request()->is('*/health_insurance*')) ? 'active' : '' }}">
                        <a style="white-space: normal;" href="{{route('admin_panel.health_insurance.index')}}">التأمين الصحي</a>
                    </li>
                </ul>

                <ul class="collapse submenu list-unstyled {{  ( (request()->is('*/government_contacts*'))  || (request()->is('*/higher_education*'))|| (request()->is('*/financial_dues*'))|| (request()->is('*/health_insurance*'))|| (request()->is('*/technical_support*'))|| (request()->is('*/student_guide*'))|| (request()->is('*/application_form*'))|| (request()->is('*/instructions*'))|| (request()->is('*/circulars*'))|| (request()->is('*/calendar*'))|| (request()->is('*/useful_links*'))|| (request()->is('*/short_news*'))|| (request()->is('*/sliders*')) ) ? 'show' : ''}}" id="main" data-bs-parent="#accordionExample">
                    <li class="{{ (request()->is('*/technical_support*')) ? 'active' : '' }}">
                        <a style="white-space: normal;" href="{{route('admin_panel.technical_support.index')}}">الدعم الفني </a>
                    </li>
                </ul>

                <ul class="collapse submenu list-unstyled {{  ( (request()->is('*/government_contacts*'))  || (request()->is('*/higher_education*'))|| (request()->is('*/financial_dues*'))|| (request()->is('*/health_insurance*'))|| (request()->is('*/technical_support*'))|| (request()->is('*/student_guide*'))|| (request()->is('*/application_form*'))|| (request()->is('*/instructions*'))|| (request()->is('*/circulars*'))|| (request()->is('*/calendar*'))|| (request()->is('*/useful_links*'))|| (request()->is('*/short_news*'))|| (request()->is('*/sliders*')) ) ? 'show' : ''}}" id="main" data-bs-parent="#accordionExample">
                    <li class="{{ (request()->is('*/student_guide*')) ? 'active' : '' }}">
                        <a style="white-space: normal;" href="{{route('admin_panel.student_guide.index')}}">دليل الطالب </a>
                    </li>
                </ul>
<!--
                <ul class="collapse submenu list-unstyled {{  ( (request()->is('*/government_contacts*'))  || (request()->is('*/higher_education*'))|| (request()->is('*/financial_dues*'))|| (request()->is('*/health_insurance*'))|| (request()->is('*/technical_support*'))|| (request()->is('*/student_guide*'))|| (request()->is('*/application_form*'))|| (request()->is('*/instructions*'))|| (request()->is('*/circulars*'))|| (request()->is('*/calendar*'))|| (request()->is('*/useful_links*'))|| (request()->is('*/short_news*'))|| (request()->is('*/sliders*')) ) ? 'show' : ''}}" id="main" data-bs-parent="#accordionExample">
                    <li class="{{ (request()->is('*/application_form*')) ? 'active' : '' }}">
                        <a style="white-space: normal;" href="{{route('admin_panel.application_form.index')}}">نموذج تقديم الطلبات  </a>
                    </li>
                </ul>
-->
                <ul class="collapse submenu list-unstyled {{  ( (request()->is('*/government_contacts*'))  || (request()->is('*/higher_education*'))|| (request()->is('*/financial_dues*'))|| (request()->is('*/health_insurance*'))|| (request()->is('*/technical_support*'))|| (request()->is('*/student_guide*'))|| (request()->is('*/application_form*'))|| (request()->is('*/instructions*'))|| (request()->is('*/circulars*'))|| (request()->is('*/calendar*'))|| (request()->is('*/useful_links*')) || (request()->is('*/short_news*'))|| (request()->is('*/sliders*'))) ? 'show' : ''}}" id="main" data-bs-parent="#accordionExample">
                    <li class="{{ (request()->is('*/instructions*')) ? 'active' : '' }}">
                        <a style="white-space: normal;" href="{{route('admin_panel.instructions.index')}}">اللوائح و التعليمات  </a>
                    </li>
                </ul>

                <ul class="collapse submenu list-unstyled {{  ( (request()->is('*/government_contacts*'))  || (request()->is('*/higher_education*'))|| (request()->is('*/financial_dues*'))|| (request()->is('*/health_insurance*'))|| (request()->is('*/technical_support*'))|| (request()->is('*/student_guide*'))|| (request()->is('*/application_form*'))|| (request()->is('*/instructions*'))|| (request()->is('*/circulars*'))|| (request()->is('*/calendar*'))|| (request()->is('*/useful_links*'))|| (request()->is('*/short_news*'))|| (request()->is('*/sliders*')) ) ? 'show' : ''}}" id="main" data-bs-parent="#accordionExample">
                    <li class="{{ (request()->is('*/circulars*')) ? 'active' : '' }}">
                        <a style="white-space: normal;" href="{{route('admin_panel.circulars.index')}}">التعاميم  </a>
                    </li>
                </ul>

                <ul class="collapse submenu list-unstyled {{  ( (request()->is('*/government_contacts*'))  || (request()->is('*/higher_education*'))|| (request()->is('*/financial_dues*'))|| (request()->is('*/health_insurance*'))|| (request()->is('*/technical_support*'))|| (request()->is('*/student_guide*'))|| (request()->is('*/application_form*'))|| (request()->is('*/instructions*'))|| (request()->is('*/circulars*'))|| (request()->is('*/calendar*'))|| (request()->is('*/useful_links*'))|| (request()->is('*/short_news*'))|| (request()->is('*/sliders*')) ) ? 'show' : ''}}" id="main" data-bs-parent="#accordionExample">
                    <li class="{{ (request()->is('*/useful_links*')) ? 'active' : '' }}">
                        <a style="white-space: normal;" href="{{route('admin_panel.useful_links.index')}}">روابط مفيدة  </a>
                    </li>
                </ul>

                <ul class="collapse submenu list-unstyled {{  ( (request()->is('*/government_contacts*'))  || (request()->is('*/higher_education*'))|| (request()->is('*/financial_dues*'))|| (request()->is('*/health_insurance*'))|| (request()->is('*/technical_support*'))|| (request()->is('*/student_guide*'))|| (request()->is('*/application_form*'))|| (request()->is('*/instructions*'))|| (request()->is('*/circulars*'))|| (request()->is('*/calendar*'))|| (request()->is('*/useful_links*'))|| (request()->is('*/short_news*'))|| (request()->is('*/short_news*'))|| (request()->is('*/sliders*')) ) ? 'show' : ''}}" id="main" data-bs-parent="#accordionExample">
                    <li class="{{ (request()->is('*/short_news*')) ? 'active' : '' }}">
                        <a style="white-space: normal;" href="{{route('admin_panel.short_news.index')}}"> الأخبار القصيرة  </a>
                    </li>
                </ul>

                <ul class="collapse submenu list-unstyled {{  ( (request()->is('*/government_contacts*'))  || (request()->is('*/higher_education*'))|| (request()->is('*/financial_dues*'))|| (request()->is('*/health_insurance*'))|| (request()->is('*/technical_support*'))|| (request()->is('*/student_guide*'))|| (request()->is('*/application_form*'))|| (request()->is('*/instructions*'))|| (request()->is('*/circulars*'))|| (request()->is('*/calendar*'))|| (request()->is('*/useful_links*'))|| (request()->is('*/short_news*'))|| (request()->is('*/sliders*')) ) ? 'show' : ''}}" id="main" data-bs-parent="#accordionExample">
                    <li class="{{ (request()->is('*/sliders*')) ? 'active' : '' }}">
                        <a style="white-space: normal;" href="{{route('admin_panel.sliders.index')}}"> البنرات</a>
                    </li>
                </ul>

            </li>

            <li class="menu {{ (request()->is('*/news*')) ? 'active' : '' }}">
                <a href="{{route('admin_panel.news.index')}}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                        <span>  الأخبار و الفعاليات  </span>
                    </div>
                </a>
            </li>


            <li class="menu {{ ( (request()->is('*/missions*'))|| (request()->is('*/certifications*')) )? 'active' : '' }}">
                <a href="#list" data-bs-toggle="collapse" aria-expanded="{{( (request()->is('*/missions*'))|| (request()->is('*/certifications*')) ) ? 'true' : 'false' }}" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-key"><path d="M21 2l-2 2m-7.61 7.61a5.5 5.5 0 1 1-7.778 7.778 5.5 5.5 0 0 1 7.777-7.777zm0 0L15.5 7.5m0 0l3 3L22 7l-3-3m-3.5 3.5L19 4"></path></svg>
                        <span>اللوائح و القرارات </span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/.svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled {{  ( (request()->is('*/missions*'))|| (request()->is('*/certifications*')) ) ? 'show' : ''}}" id="list" data-bs-parent="#accordionExample">
                    <li class="{{ (request()->is('*/missions*')) ? 'active' : '' }}">
                        <a href="{{route('admin_panel.missions.index')}}"> لائحة البعثات </a>
                    </li>
                </ul>
                <ul class="collapse submenu list-unstyled {{ ( (request()->is('*/missions*'))|| (request()->is('*/certifications*'))  ) ? 'show' : ''}}" id="list" data-bs-parent="#accordionExample">
                    <li class="{{  (request()->is('*/certifications*')) ? 'active' : '' }}">
                        <a href="{{route('admin_panel.certifications.index')}}">  لائحة الشهادات  </a>
                    </li>
                </ul>

            </li>

            <li class="menu {{ (request()->is('*/questions*')) ? 'active' : '' }}">
                <a href="{{route('admin_panel.questions.index')}}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                        <span> الأسئلة الشائعة  </span>
                    </div>
                </a>
            </li>



            <li class="menu {{ ( (request()->is('*/countries*'))|| (request()->is('*/specialties*'))|| (request()->is('*/sub_specialties*'))|| (request()->is('*/notes*'))|| (request()->is('*/universities*')) )? 'active' : '' }}">
                <a href="#cultural" data-bs-toggle="collapse" aria-expanded="{{( (request()->is('*/countries*'))|| (request()->is('*/specialties*'))|| (request()->is('*/sub_specialties*'))|| (request()->is('*/notes*'))|| (request()->is('*/universities*')) ) ? 'true' : 'false' }}" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
                        <span>الجامعات المعتمدة </span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/.svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled {{  ( (request()->is('*/countries*'))|| (request()->is('*/specialties*'))|| (request()->is('*/sub_specialties*'))|| (request()->is('*/notes*'))|| (request()->is('*/universities*')) ) ? 'show' : ''}}" id="cultural" data-bs-parent="#accordionExample">
                    <li class="{{ (request()->is('*/countries*')) ? 'active' : '' }}">
                        <a href="{{route('admin_panel.countries.index')}}">الدول </a>
                    </li>
                </ul>
                <ul class="collapse submenu list-unstyled {{ ( (request()->is('*/countries*'))|| (request()->is('*/specialties*'))|| (request()->is('*/sub_specialties*'))|| (request()->is('*/notes*'))|| (request()->is('*/universities*'))   ) ? 'show' : ''}}" id="cultural" data-bs-parent="#accordionExample">
                    <li class="{{  (request()->is('*/specialties*')) ? 'active' : '' }}">
                        <a href="{{route('admin_panel.specialties.index')}}">  التخصصات الرئيسية </a>
                    </li>
                </ul>

                <ul class="collapse submenu list-unstyled {{ ( (request()->is('*/countries*'))|| (request()->is('*/specialties*'))|| (request()->is('*/sub_specialties*'))|| (request()->is('*/notes*'))|| (request()->is('*/universities*'))  ) ? 'show' : ''}}" id="cultural" data-bs-parent="#accordionExample">
                    <li class="{{  (request()->is('*/sub_specialties*')) ? 'active' : '' }}">
                        <a href="{{route('admin_panel.sub_specialties.index')}}">  التخصصات الفرعية </a>
                    </li>
                </ul>
                <ul class="collapse submenu list-unstyled {{ ( (request()->is('*/countries*'))|| (request()->is('*/specialties*'))|| (request()->is('*/sub_specialties*'))|| (request()->is('*/notes*'))|| (request()->is('*/universities*'))   ) ? 'show' : ''}}" id="cultural" data-bs-parent="#accordionExample">
                    <li class="{{  (request()->is('*/notes*')) ? 'active' : '' }}">
                        <a href="{{route('admin_panel.notes.index')}}"> الملاحظات </a>
                    </li>
                </ul>
                <ul class="collapse submenu list-unstyled {{ ( (request()->is('*/countries*'))|| (request()->is('*/specialties*'))|| (request()->is('*/sub_specialties*'))|| (request()->is('*/notes*'))|| (request()->is('*/universities*'))  ) ? 'show' : ''}}" id="cultural" data-bs-parent="#accordionExample">
                    <li class="{{  (request()->is('*/universities*')) ? 'active' : '' }}">
                        <a href="{{route('admin_panel.universities.index')}}"> الجامعات </a>
                    </li>
                </ul>

            </li>


            <li class="menu {{ ( (request()->is('*/orders*'))|| (request()->is('*/certifications*')) )? 'active' : '' }}">
                <a href="#gate" data-bs-toggle="collapse" aria-expanded="{{( (request()->is('*/orders*'))|| (request()->is('*/certifications*')) ) ? 'true' : 'false' }}" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-cpu"><rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect><rect x="9" y="9" width="6" height="6"></rect><line x1="9" y1="1" x2="9" y2="4"></line><line x1="15" y1="1" x2="15" y2="4"></line><line x1="9" y1="20" x2="9" y2="23"></line><line x1="15" y1="20" x2="15" y2="23"></line><line x1="20" y1="9" x2="23" y2="9"></line><line x1="20" y1="14" x2="23" y2="14"></line><line x1="1" y1="9" x2="4" y2="9"></line><line x1="1" y1="14" x2="4" y2="14"></line></svg>
                        <span>البوابة الالكترونية </span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/.svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled {{  ( (request()->is('*/orders*'))|| (request()->is('*/certifications*')) ) ? 'show' : ''}}" id="gate" data-bs-parent="#accordionExample">
                    <li class="{{ (request()->is('*/orders*')) ? 'active' : '' }}">
                        <a href="{{route('admin_panel.orders.index')}}">  كتاب الى من يهمه الأمر  </a>
                    </li>
                </ul>
{{--                <ul class="collapse submenu list-unstyled {{ ( (request()->is('*/missions*'))|| (request()->is('*/certifications*'))  ) ? 'show' : ''}}" id="gate" data-bs-parent="#accordionExample">--}}
{{--                    <li class="{{  (request()->is('*/certifications*')) ? 'active' : '' }}">--}}
{{--                        <a href="{{route('admin_panel.certifications.index')}}">   تصديق وثائق رسمية  </a>--}}
{{--                    </li>--}}
{{--                </ul>--}}

            </li>
            <li class="menu {{ (request()->is('*/social*')) ? 'active' : '' }}">
                <a href="{{route('admin_panel.social.index')}}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tv"><rect x="2" y="7" width="20" height="15" rx="2" ry="2"></rect><polyline points="17 2 12 7 7 2"></polyline></svg>
                        <span>  التواصل الاجتماعي  </span>
                    </div>
                </a>
            </li>

            <li class="menu {{ (request()->is('*/edit_whatsapp*')) ? 'active' : '' }}">
                <a href="/admin_panel/edit_whatsapp" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                        <span>  WhatsApp </span>
                    </div>
                </a>
            </li>

            <li class="menu {{ (request()->is('*/edit_mail*')) ? 'active' : '' }}">
                <a href="/admin_panel/edit_mail" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-at-sign"><circle cx="12" cy="12" r="4"></circle><path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"></path></svg>
                        <span>  Mail </span>
                    </div>
                </a>
            </li>

            <li class="menu {{ (request()->is('*/edit_call*')) ? 'active' : '' }}">
                <a href="/admin_panel/edit_call" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone-call"><path d="M15.05 5A5 5 0 0 1 19 8.95M15.05 1A9 9 0 0 1 23 8.94m-1 7.98v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                        <span>  رقم الاتصال </span>
                    </div>
                </a>
            </li>


            <li class="menu {{ (request()->is('*/metas*')) ? 'active' : '' }}">
                <a href="{{route('admin_panel.metas.index')}}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
                        <span>  الإعدادات </span>
                    </div>
                </a>
            </li>





            <li class="menu {{ (request()->is('*/clients*')) ? 'active' : '' }}">
                <a href="{{route('admin_panel.clients.index')}}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                        <span>  المستخدمون </span>
                    </div>
                </a>
            </li>

            <li class="menu {{ (request()->is('*/contact_us*')) ? 'active' : '' }}">
                <a href="{{route('admin_panel.contact_us.index')}}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tag"><path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path><line x1="7" y1="7" x2="7.01" y2="7"></line></svg>
                        <span>  اتصل بنا  </span>
                    </div>
                </a>
            </li>

        </ul>

    </nav>

</div>
<!--  END SIDEBAR  -->
