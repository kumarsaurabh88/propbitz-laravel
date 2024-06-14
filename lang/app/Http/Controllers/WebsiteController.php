<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\PDFController;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use File;
use App\Mail\SendMail;
use Auth;
use PDF;
use Config;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;
use Response;
use App\Mail\SendEnquiry;
use DB;
use App\Subcategory;
use App\News;
use App\Blog;
use App\Tag;
use App\Author;
use App\Video;
use App\Inprojact;
use App\Seo;
use App\Career;
use App\Testimonials;
use App\Sectioncontent;
use App\Category;
use App\Case_study;
use App\Http\Controllers\Traits\MasterTrait;


class WebsiteController extends Controller
{
     use MasterTrait;

     public function index()
     {
          $seo = Seo::all();
          $slider = 'App\Slider'::orderBy('id', 'DESC')->get();
          $recent_blog = 'App\Blog'::orderBy('created_at', 'desc')->get()->take('3');
          $testimonials = 'App\Testimonials'::orderBy('id', 'DESC')->get();
          return view('website.index', compact('seo', 'slider', 'testimonials', 'recent_blog'));

     }



     public function about_us()
     {
          $seo = Seo::all();
          return view('website.about-us', compact('seo'));

     }
    
     public function bgm()
     {
          $seo = Seo::all();
          return view('website.bgm', compact('seo'));

     }
     public function career()
     {
          $seo = Seo::all();
          return view('website.career', compact('seo'));

     }
     public function company_overview()
     {
          $seo = Seo::all();
          return view('website.company-overview', compact('seo'));

     }
     public function contact_us()
     {
          $seo = Seo::all();
          return view('website.contact-us', compact('seo'));

     }
     public function faq()
     {
          $seo = Seo::all();
          return view('website.faq', compact('seo'));

     }
     public function news()
     {
          $seo = Seo::all();

          $news = 'App\News'::orderBy('created_at', 'desc')->get();
          return view('website.news', compact('news','seo'));

     }
     public function our_team()
     {
          $seo = Seo::all();
          return view('website.our-team', compact('seo'));

     }
     public function pocket_dam()
     {
          $seo = Seo::all();
          return view('website.pocket-dam', compact('seo'));

     }
     public function privacy_policy()
     {
          $seo = Seo::all();
          return view('website.privacy-policy', compact('seo'));

     }
     public function project_listing()
     {
          $seo = Seo::all();
          return view('website.project-listing', compact('seo'));

     }
     public function rubber_dam()
     {
          $seo = Seo::all();
          return view('website.rubber-dam', compact('seo'));

     }
     public function terms()
     {
          $seo = Seo::all();
          return view('website.terms-and-conditions', compact('seo'));

     }
     public function thankyou()
     {
          $seo = Seo::all();
          return view('website.thankyou', compact('seo'));

     }
     public function thank_you()
     {
          $seo = Seo::all();
          return view('website.thank-you', compact('seo'));

     }
     public function download()
     {
          $seo = Seo::all();
          return view('website.download', compact('seo'));

     }
     public function hybrid_steel_gates()
     {
          $seo = Seo::all();
          return view('website.hybrid-steel-gates', compact('seo'));

     }    
     public function mining()
     {
          $seo = Seo::all();
          return view('website.mining', compact('seo'));

     }

     public function urban()
     {
          $seo = Seo::all();
          return view('website.urban', compact('seo'));

     }
     public function energy()
     {
          $seo = Seo::all();
          return view('website.energy', compact('seo'));

     }
     public function water_resources_and_irrigation()
     {
          $seo = Seo::all();
          return view('website.water-resources-and-irrigation', compact('seo'));

     }
     public function events()
     {
          $seo = Seo::all();
          return view('website.events', compact('seo'));

     }


     public function blog_listing()
     {

          $seo = Seo::all();
         
          $tags = 'App\Tag'::get();
          $authors = 'App\Author'::get();

          $blogs = 'App\Blog'::orderBy('created_at', 'desc')->get();
          $blog_category = 'App\Category'::orderBy('id', 'desc')->get();

          $recent_blog = 'App\Blog'::orderBy('created_at', 'desc')->get()->take('4');
          return view('website.blog', compact('blogs', 'tags', 'authors', 'recent_blog', 'blog_category','seo'));

     }


     public function project()
     {

          $seo = Seo::all();

          $projects = 'App\Project'::orderBy('created_at', 'asc')->get();
          $project_category = 'App\Category'::orderBy('id', 'desc')->get();

          
          return view('website.project', compact('projects','project_category','seo'));

     }

     public function category_project($slug)
     {
          
         $seo = Seo::all();
         $project_cats = 'App\Category'::where('slug', $slug)->first();
         $project_category = 'App\Category'::orderBy('id', 'desc')->get();
         $projects = 'App\Project'::where('category_id', $project_cats->id)->orderBy('id', 'asc')->get();
         return view('website.project', compact('projects', 'project_category','seo','project_cats'));
     }




     public function blogcategory($slug){

          $seo=Seo::all();
          $category='App\Category'::where('slug',$slug)->pluck('id');
  
          if(!$category->count()) {
              abort(404);
          }
          else{
          $category_name='App\Category'::where('id',$category)->first();
          $blogs='App\Blog'::where('category_id',$category)->get();
         // dd($blog);
           return view('website.digital-marketing-blogs',compact('blogs','seo','category_name'));
          }
      }

     //   function blogtag($slug){

     //      $seo=Seo::all();
     //      $tag='App\Tag'::where('slug',$slug)->pluck('id');
  
     //      if(!$tag->count()) {
     //          abort(404);
     //      }
     //      else{
     //      $tag_name='App\Tag'::where('id',$tag)->first();
     //      $blogs='App\Blog'::wherein('tags',$tag)->get();
      
     //       return view('website.digital-marketing-blogs',compact('blogs','seo','tag_name'));
     //      }
     //  }


  public function blog_detail($slug){
    
     $seo=Seo::all();

     $blogs = 'App\Blog'::where('slug',$slug)->pluck('id');

        if(!$blogs ->count()) {
            abort(404);
        }
   //  dd($seo);
     $blog='App\Blog'::where('slug',$slug)->first();
     if($blog)
     {
         $p_blog= 'App\Blog'::where('id','>',$blog->id)->orderBy('id','desc')->first();
         $n_blog= 'App\Blog'::where('id','<',$blog->id)->orderBy('id','desc')->first();
     }
     $blog_category = 'App\Category'::orderBy('id', 'desc')->get();
     $related_blog = 'App\Blog'::where('category_id', $blog->category_id)->get();
     $authors = 'App\Author'::get();
     // $recent_blog='App\Blog'::where('id','!=', $blog->id)->orderBy('created_at', 'desc')->get()->take('6');
     $recent_blog = 'App\Blog'::orderBy('created_at', 'desc')->get()->take('4');
     return view('website.blog-detail',compact('blog','seo','blog_category','recent_blog','related_blog','authors'));
 }









     public function contactsave(Request $request)
     {
          $validator = Validator::make($request->all(), [

               'name' => 'required|max:50|min:3',
               'lastname' => 'required|max:50|min:3',
               'email' => 'required|email',
               'mobile' => 'required|max:10|min:10',
               'technology' => 'required',
               'industry' => 'required',
               'msg' => 'required',
          ]);
          if ($validator->fails()) {
               return redirect()->back()->withErrors($validator);

          }


          $ip_address=$request->ip();
          $name = $request->name;
          $lastname = $request->lastname;
          $email = $request->email;
          $phoneno = $request->mobile;
          $technology = $request->technology;
          //dd($technology);
          $industry = $request->industry;
          $messages = $request->msg;
          $source_url = $request->source_url;
          //dd($service);
          $data = ["name" => $name, "lastname" => $lastname, "email" => $email, "mobile" => $phoneno, "technology" => $technology, "industry" => $industry, "msg" => $messages, "source_url" => $source_url,"ip_address"=>$ip_address];

          \Mail::send('email.contact', $data, function ($message) use ($data) {
              
                //$message->to(['nitish.88gravity@gmail.com']);
             $message->to(['ajay.kumar@yooil.co.in']);
           $message->BCC(['depreet@88gravity.com','contact@88gravity.com'] );
               $message->from('envirotechyooil@gmail.com', 'Yooil Envirotech');
               $message->subject('Query Form Yooil Envirotech Website'); 
          });
          $this->createTable("\App\Contact", $data);

          // return response()->json(["status" => 200, "message" => "Enquiry Submit"]);
          return redirect()->away('/thankyou');



     }





     public function general_form_save(Request $request)
     {

          $validator = Validator::make($request->all(), [

               'name' => 'required|max:50|min:3',
               'email' => 'required|email',
               'mobile' => 'required|max:10|min:10',
               'message' => 'required',
               'gender' => 'required',
               'occupation' => 'required',


          ]);
          if ($validator->fails()) {
               return redirect()->back()->withErrors($validator);
          }


          $ip_address=$request->ip();
          $name = $request->name;
          $email = $request->email;
          $phoneno = $request->mobile;
          $messages = $request->message;
          $gender = $request->gender;
          $occupation = $request->occupation;
          $associated = $request->associated;
          $source_url = $request->source_url;


          $data = ["name" => $name, "email" => $email, "mobile" => $phoneno, "msg" => $messages, "gender" => $gender, "occupation" => $occupation, "associated" => $associated, "source_url" => $source_url,"ip_address"=>$ip_address];

          \Mail::send('email.General_form', $data, function ($message) {
               $message->to(['nitish.88gravity@gmail.com']);
               $message->BCC(['depreet@88gravity.com', 'contact@88gravity.com']);
               //$message->from('brij@88gravity.com', 'm3mluxury');
               $message->from('envirotechyooil@gmail.com', 'youwecan');
               $message->subject('Query Form youwecan.com Website');
          });
          $this->createTable("\App\General_form", $data);

          //return response()->json(["status" => 200, "message" => "Enquiry Submit"]);
          return redirect()->away('/thank-you');



     }




     //career
     public function careersave(Request $request)
     {
          $name = $request->name;
          $email = $request->email;
          $phoneno = $request->mobile;
          $applyfor = $request->applyfor;
          $resume = $request->resume;
          $messages = $request->message;

          $resume = $phoneno.'_'.time() . '.' . $request['resume']->getClientOriginalExtension();
          $imagesendbymailwithstore = new Career();
          $imagesendbymailwithstore->name = $request->name;
          $imagesendbymailwithstore->email = $request->email;
          $imagesendbymailwithstore->mobile = $request->mobile;
          $imagesendbymailwithstore->applyfor = $request->applyfor;
          $imagesendbymailwithstore->message = $request->message;
          $imagesendbymailwithstore->resume = $resume;
          $imagesendbymailwithstore->save();


          $imagesendbymailwithstore = array(
               'name' => $request->name,
               'email' => $request->email,
               'resume' => $request->resume,
               'mobile' => $request->mobile,
               'applyfor' => $request->applyfor,
               'message' => $request->message,

          );

          $admin_email = 'jaspal.negi@yooil.co.in';
          //$message->BCC(['depreet@88gravity.com','contact@88gravity.com'] );

          \Mail::to($admin_email)->send(new SendMail($imagesendbymailwithstore));
          $request['resume']->move(base_path() . '/public/uploads/resume', $resume);

      
       //return view('website.thankyou');
          return redirect()->away('/thank-you');
     }











     // public function news(Request $request)
     // {
     //      //return $request->all();
     //      $book = 'App\Newsletter'::create($request->all());
     //      $admin_email = Config::get('app.ADMIN_EMAIL');
     //      $body = '<p>Dear Admin,</p><p> You have a News Letter Subscription from ' . $request->email . ' </p> <p> Regards,<br>ilog solution</p>';
     //      $this->sendMail($admin_email, "NewsLetter Subscribe of iLog Solution ", $body);
     //      return redirect()->away('/thank-you');

     // }


}