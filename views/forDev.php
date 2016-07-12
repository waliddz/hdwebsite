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

      <h1>تضمين كلاساتك الخاصة :</h1>
      <br/>
      <h4>
        <p>
          اطار عمل هيدروجين اطار عمل يتيح لك التعديل او اضافة كلاساتك الخاصة و تضمينها في المتحكمات , وهذا با كل سهولة مع هذا الشرح.        </p>
        <br/>
    </h4>
    </div>

        <div class="code" style=" direction:ltr; max-width:60%; padding-left:20%; padding-right:20%;">

          <pre>
            <code class="php">

/*
  Our testclass
  fileName : Myclass.php
*/
class Myclass {

  public function printName($name) {
    return $name;
  }

}

            </code>
          </pre>

        </div>
        <div class="body">
          <center>
            <h4>
              نتوجه الى مجلد KERNEL/classes , و نقوم با انشاء مجلد له نفس اسم الكلاس .
              <br/>
              في حالتنا : Kernel/classes/Myclass/Myclass.php
              <br/>
              و نقوم با عمل Namespace للكلاس :
            </h4>
          </center>
        </div>

        <div class="code" style=" direction:ltr; max-width:60%; padding-left:20%; padding-right:20%;">

          <pre>
            <code class="php">

namespace Kernel\classes\Myclass;
/*
  Our testclass
  fileName : Myclass.php
*/
class Myclass {

  public function printName($name) {
    return $name;
  }

}
<br/>
<br/>

/* Kernel/classes/controllers/BaseController.php */

namespace Kernel\Controllers;
use Kernel\classes\View\View as View;
use Kernel\classes\Session\Session  as Session;
use Kernel\classes\Database\Database as Database;
/* add this line */
use Kernel\classes\Myclass\Myclass as Myclass; /* This to use our class in BaseController */

class BaseController {


	public $Session;
	public $View;
	public $Database;

	public $Myclass; /* This variable to store our Object. */

	public function __construct() {
		$this->Session 	= new Session();
		$this->View 		= new View();
		$this->Database = new Database();

		$this->Myclass 	= new Myclass(); /* Inject our class in our variable */
	}




            </code>
          </pre>

        </div>
        <div class="body">
          <center>
            <h4>
              الان اصبح با امكاننا استخدام الكلاس في  جميع المتحكمات عن طريق هذا الشكل .
            </h4>
          </center>
        </div>
        <div class="code" style=" direction:ltr; max-width:60%; padding-left:20%; padding-right:20%;">

          <pre>
            <code class="php">

use Kernel\controllers\BaseController;

class HomeController extends BaseController {


  public function index() {
    echo $this->Myclass->printName("myname");
  }

}

            </code>
          </pre>

        </div>
        <div class="body">
          <center>
            <h4>
              للتعديل على دوال وكلاسات الفرمورك كل ماعليك هو التوجه الى KERNEL/Interfaces . ثم اختيار الكلاس الذي تريد التعديل عليه , و تضيف الدالة التي تريدها مع تحديد المتغيرات التي سا تسقبلها .
              <br/>
              بعدها توجه الى المسار KERNEL/classes/ , ثم اختيار الكلاس الذي تريد ان تضيف دالة اليه و تضيفها مع تحديد المتغيرات التي سا تستقبلها .
              <br/>
              <br/>
              اذا لم تقم با الخطوة الاولى سا يضهر لك خطأ , او اذا لم تقم با الخطوة الثانية سا يضهر لك خطأ لذا عليك القيام بهم الاثنين
            </h4>
          </center>
        </div>

  </body>
</html>
