@extends('cultural_center.home')

@section('cultural')

<main>
    <div class="text">
      <h1>حسابي</h1>
      <p>حسابك غير مفعل للتقدم للخدمات الإلكترونية، سوف يتم تفعيل حسابك قريبا عن طريق المكتب الثقافي الكويتي </p>
    </div>
    <div class="main">
      <div class="boxing">
        <div class="content" style="width:100%;">
          <form action="{{route('edit_profile')}} " method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="user-details">
              <div class="input-box">
                <label class="details required">الإسم الأول </label>
                <input name="first_name_ar" type="text" placeholder="الإسم الأول " value="{{ $client->first_name_ar }}">
              </div>
              <div class="input-box">
                <label class="details required">الإسم الثاني </label>
                <input name="second_name_ar" type="text" placeholder="الإسم الثاني " value="{{ $client->second_name_ar }}">
              </div>
              <div class="input-box">
                <label class="details required">الإسم الثالث </label>
                <input name="third_name_ar" type="text" placeholder="الإسم الثالث " value="{{ $client->third_name_ar }}">
              </div>
              <div class="input-box">
                <label class="details required">الإسم الرابع </label>
                <input name="fourth_name_ar" type="text" placeholder="الإسم الرابع " value="{{ $client->fourth_name_ar }}">
              </div>
              <div class="input-box">
                <label class="details required">الإسم الأول (انجليزي) </label>
                <input name="first_name_en" type="text" placeholder="الإسم الأول (انجليزي) " value="{{ $client->first_name_en }}">
              </div>
              <div class="input-box">
                <label class="details required">الإسم الثاني (انجليزي) </label>
                <input name="second_name_en" type="text" placeholder="الإسم الثاني (انجليزي) " value="{{ $client->second_name_en }}">
              </div>
              <div class="input-box">
                <label class="details required">الإسم الثالث (انجليزي) </label>
                <input name="third_name_en" type="text" placeholder="الإسم الثالث (انجليزي) " value="{{ $client->third_name_en }}">
              </div>
              <div class="input-box">
                <label class="details required">الإسم الرابع (انجليزي) </label>
                <input name="fourth_name_en" type="text" placeholder="الإسم الرابع (انجليزي)" value="{{ $client->fourth_name_en }}">
              </div>
              <div class="input-box">
                <label class="details required">رقم جواز السفر </label>
                <input name="passport_number" type="text" placeholder="رقم جواز السفر " value="{{ $client->passport_number }}">
              </div>
              <div class="input-box">
                <label class="details required">تاريخ انتهاء جواز السفر </label>
                <input name="passport_expire_date" type="date" placeholder="تاريخ انتهاء جواز السفر " value="{{ $client->passport_expire_date }}">
              </div>
              <div class="input-box">
                <label class="details required">رقم الهاتف الإماراتي </label>
                <input name="phone_united_emirates" type="text" placeholder="رقم الهاتف الإماراتي " value="{{ $client->phone_united_emirates }}">
              </div>
              <div class="input-box">
                <label class="details required">رقم الهاتف الكويتي </label>
                <input name="phone_kuwait" type="text" placeholder="رقم الهاتف الكويتي " value="{{ $client->phone_kuwait }}">
              </div>
              <div class="input-box">
                <label class="details required">رقم الواتس اب </label>
                <input name="mobile" type="text" placeholder="رقم الواتس اب " value="{{ $client->mobile }}">
              </div>
              <div class="input-box">
                <label class="details required">رقم الطوارئ وصلة القرابة </label>
                <input name="emergency_phone" type="text" placeholder="رقم الطوارئ وصلة القرابة " value="{{ $client->emergency_phone }}">
              </div>
              <div class="input-box">
                <label class="details required">البريد الإلكتروني </label>
                <input name="address_united_emirates" type="text" placeholder="البريد الإلكتروني " value="{{ $client->email }}">
              </div>
              <div class="input-box">
                <label class="details required">العنوان في الإمارات </label>
                <input name="name" type="text" placeholder="العنوان في الإمارات " value="{{ $client->address_united_emirates }}">
              </div>
              <div class="input-box">
                <label class="details required">العنوان في الكويت </label>
                <input name="address_kuwait" type="text" placeholder="العنوان في الكويت" value="{{ $client->address_kuwait }}">
              </div>
              <div class="input-box">
                <label class="details required">تاريخ الميلاد </label>
                <input name="date_of_birth" type="date" placeholder="تاريخ الميلاد " value="{{ $client->date_of_birth }}">
              </div>
              <div class="input-box">
                <label class="details required">الجنس</label>
                <select name="gender" class="form-control" style="padding: 5px; width: 100%;">
                  <option disabled selected>الجنس</option>
                  <option value="male" {{ $client->gender == 'male' ? 'selected' : '' }}>ذكر</option>
                  <option value="female" {{ $client->gender == 'female' ? 'selected' : '' }}>أنثى</option>
                </select>

              </div>
              <div class="input-box">
                <label class="details required">جهة العمل </label>
                <input name="work_place" type="text" placeholder="جهة العمل" value="{{ $client->work_place }}">
              </div>
              <div class="input-box">
                <label class="details required">الحالة الإجتماعية </label>
                <select name="material_status" class="form-control" style="padding: 5px; width: 100%;">
                  <option disabled selected>الحالة الإجتماعية</option>
                  <option value="single" {{ $client->material_status == 'single' ? 'selected' : '' }}>أعزب</option>
                  <option value="married" {{ $client->material_status == 'married' ? 'selected' : '' }}>متزوج</option>
                  <option value="divorced" {{ $client->material_status == 'divorced' ? 'selected' : '' }}>مطلق</option>
                  <option value="widow" {{ $client->material_status == 'widow' ? 'selected' : '' }}>أرمل</option>
                </select>
              </div>
              <div class="input-box" style="width: 280px;">
                <label class="details required" style="font-size: 16px;">صورة جواز السفر (تحميل صور فقط) </label>
                <input name="passport_image" type="file" placeholder="صورة جواز السفر (تحميل صور فقط)"  style="padding: 3px">
              </div>
            </div>
            <div class="main">
                  <div class="boxing">
                      <h2 style="color: #143665;">تغيير كلمة السر
                      </h2>
                      <div class="content" style="width:100%;">
                          <div class="user-details">
                              <div class="input-box" style="width: 100%;">
                                  <label class="details required"> تغيير كلمة السر </label>
                                  <input name="password" type="password" placeholder="ادخل كلمه السر الجديده"  style="width: 100%;">
                              </div>
                          </div>
                          <div class="input-box">
                              <button class="btn" type="submit">حفظ</button>
                          </div>
                      </div>
                  </div>
              </div>
          </form>
        </div>
      </div>
    </div>
</main>
@endsection

