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
          <form action="" method="">
            <div class="user-details">
              <div class="input-box">
                <label class="details required">الإسم الأول </label>
                <input name="name" type="text" placeholder="" required>
              </div>
              <div class="input-box">
                <label class="details required">الإسم الثاني </label>
                <input name="name" type="text" placeholder="" required>
              </div>
              <div class="input-box">
                <label class="details required">الإسم الثالث </label>
                <input name="name" type="text" placeholder="" required>
              </div>
              <div class="input-box">
                <label class="details required">الإسم الرابع </label>
                <input name="name" type="text" placeholder="" required>
              </div>
              <div class="input-box">
                <label class="details required">الإسم الأول (انجليزي) </label>
                <input name="name" type="text" placeholder="" required>
              </div>
              <div class="input-box">
                <label class="details required">الإسم الثاني (انجليزي) </label>
                <input name="name" type="text" placeholder="" required>
              </div>
              <div class="input-box">
                <label class="details required">الإسم الثالث (انجليزي) </label>
                <input name="name" type="text" placeholder="" required>
              </div>
              <div class="input-box">
                <label class="details required">الإسم الرابع (انجليزي) </label>
                <input name="name" type="text" placeholder="" required>
              </div>
              <div class="input-box">
                <label class="details required">رقم جواز السفر </label>
                <input name="name" type="text" placeholder="" required>
              </div>
              <div class="input-box">
                <label class="details required">تاريخ انتهاء جواز السفر </label>
                <input name="name" type="text" placeholder="" required>
              </div>
              <div class="input-box">
                <label class="details required">رقم الهاتف الإماراتي </label>
                <input name="name" type="text" placeholder="" required>
              </div>
              <div class="input-box">
                <label class="details required">رقم الهاتف الكويتي </label>
                <input name="name" type="text" placeholder="" required>
              </div>
              <div class="input-box">
                <label class="details required">رقم الواتس اب </label>
                <input name="name" type="text" placeholder="" required>
              </div>
              <div class="input-box">
                <label class="details required">رقم الطوارئ وصلة القرابة </label>
                <input name="name" type="text" placeholder="" required>
              </div>
              <div class="input-box">
                <label class="details required">البريد الإلكتروني </label>
                <input name="name" type="text" placeholder="" required>
              </div>
              <div class="input-box">
                <label class="details required">العنوان في الإمارات </label>
                <input name="name" type="text" placeholder="" required>
              </div>
              <div class="input-box">
                <label class="details required">العنوان في الكويت </label>
                <input name="name" type="text" placeholder="" required>
              </div>
              <div class="input-box">
                <label class="details required">تاريخ الميلاد </label>
                <input name="name" type="text" placeholder="" required>
              </div>
              <div class="input-box">
                <label class="details required">الجنس</label>
                <input name="name" type="text" placeholder="" required>
              </div>
              <div class="input-box">
                <label class="details required">جهة العمل </label>
                <input name="name" type="text" placeholder="" required>
              </div>
              <div class="input-box">
                <label class="details required">الحالة الإجتماعية </label>
                <input name="name" type="text" placeholder="" required>
              </div>
              <div class="input-box" style="width: 280px;">
                <label class="details required" style="font-size: 16px;">صورة جواز السفر (تحميل صور فقط) </label>
                <input name="name" type="file" value="browse" placeholder="" required style="padding: 3px">
              </div>
            </div>
            <div class="input-box">
              <button class="btn">حفظ</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="main">
      <div class="boxing">
        <h2 style="color: #143665;">تغيير كلمة السر
        </h2>
        <div class="content" style="width:100%;">

          <form action="" method="">
            <div class="user-details">

              <div class="input-box" style="width: 100%;">
                <label class="details required"> تغيير كلمة السر </label>
                <input name="name" type="text" placeholder="ادخل كلمه السر الجديده" required style="width: 100%;">
              </div>
            </div>
            <div class="input-box">
              <button class="btn">تغيير</button>
            </div>
          </form>
        </div>
      </div>
    </div>

</main>
@endsection
