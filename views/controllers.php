<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>توثيق هيدروجين</title>
    <link rel="icon" type="image/png" href="https://s3-eu-west-1.amazonaws.com/eurp/Graphics/Technohumanist/thlogo.png"/>
    <link rel="icon" type="image/png" href="https://s3-eu-west-1.amazonaws.com/eurp/Graphics/Technohumanist/thlogo.png"/>
    <link rel="stylesheet" type="text/css" href="views/style.css">
    <link rel="stylesheet" type="text/css" href="//www.fontstatic.com/f=elmessiri-light,cairo-bold,cairo-light" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.5.0/styles/default.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.5.0/highlight.min.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
    <style media="screen">
    </style>
  </head>
  <body>
    <div class="body">

  	<center>
      <ul class="ul">
  		  <li class="li"><a href="<? echo $this->add(""); ?>">الرئيسية</a></li>
  		  <li class="li"><a href="<? echo $this->add("blog"); ?>">المدونة</a></li>
  		  <li class="li"><a href="<? echo $this->add("docs"); ?>">التوثيق</a></li>
  		  <li class="li"><a href="<? echo $this->add("contact") ?>">تواصل معي</a></li>
  		</ul>
      <table style="position:absolute; width:20%; margin-left:82%; margin-right:2%; border-right:2px solid #B6B6B6;">
       <tr>
         <td></td>
       </tr>
       <tr>
         <td>
           الاساسيات
           <br/>
           <a href="<? echo $this->add("install"); ?>">التثبيت و ضبط الاعدادت</a>
           <br/>
           <a href="<? echo $this->add("routes"); ?>"> الموجهات </a>
           <br/>
           <a href="<? echo $this->add("controllers"); ?>"> انشاء المتحكم </a>
           <br/>
           <a href="<? echo $this->add("controllerAndView") ?>">ربط المتحكم مع المستعرض</a>
           <br/>
           <a href="<? echo $this->add("addStyles"); ?>">تضمين ملفات الستايل في المستعرض</a>
           <br/>
           <a href="<? echo $this->add("httpRedirect"); ?>">اعادة توجيه المستخدم</a>
           <br/>
           <a href="<? echo $this->add("urls"); ?>">العنواين و الروابط المتشعبة</a>
           <br/>
           <br/>
           التعامل مع قواعد بيانات مايسكول
           <br/>
           <a href="<? echo $this->add("config"); ?>">الاعدادت</a>
           <br/>
           <a href="<? echo $this->add("getDataFromDatabase"); ?>">اخراج البيانات</a>
           <br/>
           <a href="<? echo $this->add("insertToDatabase"); ?>">ادخال البيانات</a>
           <br/>
           <a href="<? echo $this->add("ownSql"); ?>">تخصيص</a>
           <br/>
           <br/>
           الجلسات
           <br/>
           <a href="<? echo $this->add("tokens"); ?>">انشاء التوكن و التحقق منه في عمليات الارسال</a>
           <br/>
           <a href="<? echo $this->add("addToSession") ?>">ادخال قيمة للجلسة</a>
           <br/>
           <a href="<? echo $this->add("has"); ?>">التحقق من وجود قيمة</a>
           <br/>
           <a href="<? echo $this->add("delete"); ?>">حذف قيمة </a>
           <br/>
           <a href="<? echo $this->add("get"); ?>">جلب قيمة</a>
           <br/>
           <a href="<? echo $this->add("getAll"); ?>">جلب كل القيم</a>
           <br/>
           <a href="<? echo $this->add("forDev"); ?>">تضمين او تطوير كلاساتك الخاصة</a>
           <br/>
           تخصيص او تعديل الفريمورك :
           <br/>
         </td>
       </tr>
      </table>
      <br/>
      <br/>
      <br/>

      <h1>المتحكمات :</h1>
      <br/>
      <h4>
        مسار المتحكمات في موقعك هو
        <br/>
        Kernel/controllers
        <br/>
        <br/>

        ذكرنا في الشرح السابق عن المتحكمات و تحديدها مع تحديد الدالة المسؤولة .
        <br/>
        سا نأخذ هذا المثال :
        <br/>
      </div>

      <div class="code" style=" direction:ltr; max-width:60%; padding-left:20%; padding-right:20%;">

        <pre>
          <code class="php">
return $this->add([
  "/home"      => "HomeController.index|GET",
]);
        </code>
        </pre>

      </div>

      <div class="body">
        <center>
          المتحكم يكون با داخل مجلد
          <br/>
          Kernel/controllers
          <br/>
          و يكون با نفس اسم كلاس المتحكم
          <br/>
          <strong>Kernel/controller/HomeController.php</strong>
        </center>
      </h4>
    </div>

    <div class="code" style=" direction:ltr; max-width:60%; padding-left:20%; padding-right:20%;">

      <pre>
        <code class="php">
use Kernel\controllers\BaseController;

class HomeController extends BaseController {


  public function index() {
      echo "Im home .";
  }

}
      </code>
      </pre>

    </div>

    <div class="body">

      <center>
        <h4>
          يمكن استقبال القيم من الرابط
        </h4>
      </center>

    </div>
    <div class="code" style=" direction:ltr; max-width:60%; padding-left:20%; padding-right:20%;">

      <pre>
        <code class="php">
return $this->add([
"/user/id"      => "UserController.getData|GET",
]);
      </code>
      </pre>

    </div>
    <div class="body">
      <center>
        <h4>
          نستطيع استقبالها في المتحكم
        </h4>
      </center>
    </div>

    <div class="code" style=" direction:ltr; max-width:60%; padding-left:20%; padding-right:20%;">

      <pre>
        <code class="php">
use Kernel\controllers\BaseController;

class UserController extends BaseController {


  public function getData($params) {
      echo "you are user";
      echo $params['id'];
  }

}
      </code>
      </pre>

    </div>

  </body>
</html>
