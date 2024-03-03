@extends('cultural_center.home')

@section('cultural')

<main>

    <div class="comment-area mb-5">
                        <div class="comment-respond">
                        <div class="text">
                          <h1>تعديل معلومات  ملفك الشخصي</h1>
                          </div>
                            <div class="respons-box pt-4">
                                <div class="form">
                                    <form action="{{ route('edit_profile') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="name">اسم المستخدم</label>
                                                    <input id="name" class="form-control form-mane" type="text" value="{{$client->name}}" name="name">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="name">الرقم الوطني</label>
                                                    <input id="name" class="form-control form-mane"  type="text" value="{{$client->ID_number}}" name="ID_number">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="email">البريد الألكتروني</label>
                                                    <input id="email" class="form-control form-email"  type="email" value="{{$client->email}}" name="email">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="name">رقم الهاتف</label>
                                                    <input id="name" class="form-control form-mane"  type="text" value="{{$client->mobile}}" name="mobile">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buttons pt-4">
                                            <button type="submit" class="btn btn-button btn-button-1 blue-bg">تعديل </button>
                                        </div>
                                    </form>
                                    <div class="main mt-3">
                                    <div class="boxing">
                                        <h2 style="color: #143665;padding:10px 0;">تغيير كلمة السر</h2>
                                        <div class="content" style="width:100%;">
                                            <div class="user-details">
                                                <div class="input-box" style="width: 100%;padding:10px 0;">
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
                                    </div>
                            </div>
                        </div>
</main>
@endsection

