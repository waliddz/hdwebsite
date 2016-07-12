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
           <br/>
           تخصيص او تعديل الفريمورك :
           <br/>
           <a href="<? echo $this->add("forDev"); ?>">تضمين او تطوير كلاساتك الخاصة</a>

         </td>
       </tr>
      </table>
      <br/>
      <br/>
      <br/>

      <h1>اعدادات قواعد البيانات :</h1>
      <br/>
      <h4>
        مسار ملف التعامل مع قواعد البيانات :
        <br/>
        Kernel/classes/Database/Database.php
        <br/>
        <br/>

      ذكرنا في الشرح السابق عن اعدادت الاتصال با قاعدة البيانات
        <br/>
        سا نأخذ هذا المثال :
        <br/>
        <strong>و هذا بعد ضبط اعدادت الاتصال</strong>
      </div>
      <br/>
      <div class="code" style=" direction:ltr; max-width:60%; padding-left:20%; padding-right:20%;">

        <pre>
          <code class="php">
/*
  HomeController.php
  Database: users
  table   : users
*/
use Kernel\controllers\BaseController;

class HomeController extends BaseController {


	public function allUsers() {
		print_r($this->Database->get("users")->all());
	}

}

/* Resutls */
Array
(
    [0] => stdClass Object
        (
            [id] => 1
            [name] => walid
        )

    [1] => stdClass Object
        (
            [id] => 2
            [name] => iimad
        )

    [2] => stdClass Object
        (
            [id] => 3
            [name] => walid
        )

)

        </code>
        </pre>

      </div>
      <div class="body">
        <h4>
          <center>
          المعامل الاول من دالة get هو اسم الجدول .
          <br/>
          <br/>
          <br/>
          الاستخراج مع تحديد قيم محددة
        </center>
        </h4>
      </div>
      <div class="code" style=" direction:ltr; max-width:60%; padding-left:20%; padding-right:20%;">

        <pre>
          <code class="php">
/*
  HomeController.php
  Database: users
  table   : users
*/
use Kernel\controllers\BaseController;

class HomeController extends BaseController {


  public function allUsers() {
    print_r($this->Database->from("users")->where("name","=","iimad")->all());
                                                /* id","=",1 ... */
  }

}

/* Resutls */
Array
(
    [0] => stdClass Object
        (
            [id] => 2
            [name] => iimad
        )

)


        </code>
        </pre>
    </div>
<br/>
<br/>
    <div class="body">
      <center>
        المعامل الاول من دالة from هو اسم الجدول
        <br/>
        دالة from تعمل مع دالة where حيث ال المعامل الاول هو اسم الحقل و المعامل الثاني هو معامل الاستخراج و المعامل  الثالث هي القيمة التي تريد مطابقتها مع الاستخراج
        <br/>
        <br/>
        <br/>
        <strong>ORDER BY</strong>
      </center>
    </div>
    <br/>
    <div class="code" style=" direction:ltr; max-width:60%; padding-left:20%; padding-right:20%;">

      <pre>
        <code class="php">
/*
HomeController.php
Database: users
table   : users
*/
use Kernel\controllers\BaseController;

class HomeController extends BaseController {


public function allUsers() {
  print_r($this->Database->from("users")->where("name","=","walid")->orderByDesc()->all());
                                              /* id","=",1 ... */
}

}

/* Resutls */
Array
(
    [0] => stdClass Object
        (
            [id] => 3
            [name] => walid
        )

    [1] => stdClass Object
        (
            [id] => 1
            [name] => walid
        )

)



      </code>
      </pre>
  </div>
  <br/>
  <div class="code" style=" direction:ltr; max-width:60%; padding-left:20%; padding-right:20%;">

    <pre>
      <code class="php">
/*
HomeController.php
Database: users
table   : users
*/
use Kernel\controllers\BaseController;

class HomeController extends BaseController {


public function allUsers() {
  print_r($this->Database->get->("users")->orderByDesc()->all());
}

}

/* Resutls */
Array
(
    [0] => stdClass Object
        (
            [id] => 3
            [name] => walid
        )

    [1] => stdClass Object
        (
            [id] => 2
            [name] => iimad
        )

    [2] => stdClass Object
        (
            [id] => 1
            [name] => walid
        )

)

    </code>
    </pre>
</div>
<br/>
<br/>
<div class="body">
  <h4>
    <center>
      يمكن ارسال هذه البيانات المستخرجة الى المستعرض و تطرقنا الى هذا الشرح في
      <strong>ربط المستعرض مع المتحكم .</strong>
    </center>
  </h4>
</div>
  </body>
</html>
