<!DOCTYPE html>
<html lang="ar">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <style>
      @font-face {
        font-family: "CairoFont";
        src: url("/assets/fonts/Cairo-Regular.ttf");
        font-weight: 400;
      }
      @font-face {
        font-family: "CairoFont";
        src: url("/assets/fonts/Cairo-SemiBold.ttf");
        font-weight: 600;
      }
      @font-face {
        font-family: "CairoFont";
        src: url("/assets/fonts/Cairo-Bold.ttf");
        font-weight: 700;
      }
      * {
        padding: 0;
        margin: 0;
      }
      body {
        direction: rtl;
        font-family: 'CairoFont' !important;
        font-size: 12px;
        margin: 0;
        background: #fff;
        color: #000;
        line-height: 22px;
      }
      .doc-container {
        max-width: 600px;
        margin: auto;
        aspect-ratio: 1/1.294;
        background: #fff;
        padding: 16px;
        position: relative;
      }
      .header {
        display: flex;
        gap: 16px;
        justify-content: space-between;
        align-items: center;
        width: fit-content;
        margin: auto;
      }
      .logo {
        width: 66px;
        height: 66px;
        z-index: 1;
        background: #fff;
      }
      .head-title {
        font-weight: 600;
        font-size: 16px;
      }
      .header-content {
        display: flex;
        text-align: center;
        flex-direction: column;
        flex-shrink: 0;
        gap: 10px;
      }
      .doc-body {
        height: 100%;
        border-radius: 16px;
        border: 0.5px solid #000;
        margin-top: -4px;
        padding: 24px;
      }
      .sec-1 {
        font-weight: 600;
        display: grid;
        gap: 14px;
      }
      .sec-2 {
        margin-top: 30px;
        font-weight: 700;
        display: grid;
        gap: 14px;
      }
      .subject {
        display: flex;
        flex-direction: column;
        gap: 16px;
        align-items: center;
        margin-top: 6px;
      }
      .sec-3 {
        display: grid;
        font-weight: 400;
        color: #454545;
        gap: 16px;
        margin-top: 20px;
      }
      .sec-4 {
        margin-top: 64px;
        font-weight: 700;
        display: flex;
        justify-content: end;
        font-size: 11px;
      }
      .footer {
        text-align: center;
        margin-top: 12px;
        display: grid;
        gap: 4px;
        font-size: 11px;
      }
    </style>
  </head>

  <body>
    <div class="doc-container">
      <div class="header">
        <img
          src="/assets/images/logo-new-removebg-preview.png"
          alt="logo"
          class="logo"
        />
        <div class="header-content">
          <p class="head-title">
            القنصلية العامة لدولة الكويت في دبي - المكتب الثقافي
          </p>
          <img src="/assets/images/signature.png" alt="logo" />
        </div>

        <img src="/assets/images/new-kuwait-logo.png" alt="logo" class="logo" />
      </div>
      <div class="doc-body">
        <div class="sec-1">
          <p>23/20/2024</p>
          <p style="margin-top: 6px">السادة إدارة {{$orderUniversity->name}} المحترمين</p>
          <p>إدارة القبول</p>
        </div>
        <div class="sec-2">
          <p>تحية طيبة و بعد...</p>
          <div class="subject">
            <p>الموضوع:قبول الطالبة/ {{ $orderUniversity->client->name }}</p>
            <p>التخصص:( {{ $orderUniversity->specialty->name }} )</p>
          </div>
        </div>
        <div class="sec-3">
          <p>
            نفيدكم علما بأنن لا مانع لدى المكتب الثقافي بالقنصلية العامة لدولة
            الكويت في دبي من قبول طلب اللإلتحاق الطالبة المذكورة ‘لاه بتخصص ( {{ $orderUniversity->specialty->name }} )
            وذلك بالفصل الدراسي ( ) من العام الجامعي ( ) بجامعتكم الموقرة.
          </p>
          <p>
            لذا يرجى التكرم بقبول الطلب حسب النظم واللوائح الخاصة بجامعتكم
            الموقرة.
          </p>
          <p>الرسالة صالحة لمدة شهر من تاريخه.</p>
          <p style="font-weight: 600; color: #000; text-align: center">
            وتفضلوا بقبول فائق الاحترام والتقدير،،
          </p>
        </div>
        <div class="sec-4">
          <div style="display: grid; gap: 8px">
            <p>المستشار ورئيس المكتب الثقافي</p>
            <p>الأستاذ الدكتور / مشتري عبيد الهاجري</p>
          </div>
        </div>
      </div>
      <div class="footer">
        <p>
          الإمارات العربية المتحدة - بر دبي - ص. ب: 8.6، هاتف : 3979768/9+. فاكس
          :+971 4 3949750
        </p>
        <p>
          United Arab Emirates, Bur Dubai, P.O. Box: 806, Tel: +971 4 3979768/9,
          Fax: +971 4 3979750
        </p>
        <p>
          البريد الإلكتروني : info@Kuwaitculture.ae , الموقع الإلكتروني :
          www.kuwaitculture.ae
        </p>
      </div>
    </div>
  </body>
</html>
