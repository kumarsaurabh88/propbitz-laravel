<?php

  
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\Admin\SeoController;
use App\Http\Controllers\Admin\blogController;
use App\Http\Controllers\Admin\newsController;
use App\Http\Controllers\Admin\TagsController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\Admin\AuthorController;
use App\Http\Controllers\Admin\PatnerController;
use App\Http\Controllers\Admin\sliderController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\GeneralController;
use App\Http\Controllers\Admin\projectController;
use App\Http\Controllers\Admin\SectionController;
use App\Http\Controllers\Admin\HospitalController;
use App\Http\Controllers\Admin\GalleriesController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\communitiesController;
use App\Http\Controllers\Admin\PermissionsController;
use App\Http\Controllers\Admin\testimonialsController;
use App\Http\Controllers\Auth\ChangePasswordController;
use App\Http\Controllers\Admin\PropertyController;
use App\Http\Controllers\Admin\PropertyCategoryController;
use App\Http\Controllers\Admin\TenantBackgroundController;
use App\Http\Controllers\Admin\AmenityController;
use App\Http\Controllers\Admin\AccessibilityController;
use App\Http\Controllers\Admin\PropertyTypeController;



// Route::get('/', function () {
//     return view('welcome');
// });

Route::redirect('/admin/login', '/admin/home');

// Route::get('/', 'WebsiteController@index');
Route::get('/', [WebsiteController::class, 'index']);
Route::get('/about-us', [WebsiteController::class, 'about_us']);
Route::get('/bgm', [WebsiteController::class, 'bgm']);
Route::get('/career', [WebsiteController::class, 'career']);
Route::get('company-overview', [WebsiteController::class, 'company_overview']);
Route::get('/contact-us', [WebsiteController::class, 'contact_us']);
Route::get('/faq', [WebsiteController::class, 'faq']);
Route::get('/news', [WebsiteController::class, 'news']);
Route::get('/our-team', [WebsiteController::class, 'our_team']);
Route::get('/pocket-dam', [WebsiteController::class, 'pocket_dam']);
Route::get('/privacy-policy', [WebsiteController::class, 'privacy_policy']);
Route::get('/project-old', [WebsiteController::class, 'project_listing']);
Route::get('/rubber-dam', [WebsiteController::class, 'rubber_dam']);
Route::get('/terms-and-conditions', [WebsiteController::class, 'terms']);
Route::get('/thankyou', [WebsiteController::class, 'thankyou']);
Route::get('/thank-you', [WebsiteController::class, 'thank_you']);
// Route::get('/blog', [WebsiteController::class, 'blog']);
Route::get('/download', [WebsiteController::class, 'download']);
Route::get('/hybrid-steel-gates', [WebsiteController::class, 'hybrid_steel_gates']);
Route::get('/project', [WebsiteController::class, 'project']);
Route::get('/project/{slug}', [WebsiteController::class, 'category_project']);
Route::get('/mining', [WebsiteController::class, 'mining']);
Route::get('/urban', [WebsiteController::class, 'urban']);
Route::get('/energy', [WebsiteController::class, 'energy']);
Route::get('/water-resources-and-irrigation', [WebsiteController::class, 'water_resources_and_irrigation']);
Route::get('/events', [WebsiteController::class, 'events']);
Route::get('/blog', [WebsiteController::class, 'blog_listing']);
Route::get('/blog/{slug}', [WebsiteController::class, 'blog_detail']);
//data - 27-5-2024
Route::get('/blog-listing', [WebsiteController::class, 'blogList']);
//date 12-6-2024
Route::get('/error-page',[WebsiteController::class,'error_page']);
Route::get('/login',[WebsiteController::class,'Login']);
Route::get('/otp-varification',[WebsiteController::class,'otp_varification']); 
Route::get('/property-details',[WebsiteController::class,'property_details']);
Route::get('/property-listing',[WebsiteController::class,'property_listing']);
Route::get('/signup',[WebsiteController::class,'Signup']);



//using another method
// Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('auth.logout');
Route::get('/logout', [LoginController::class, 'logout'])->name('auth.logout');
//solve later
Route::post('/general-form-save', [WebsiteController::class, 'general_form_save']);
//solve later
Route::post('/submitpop', [WebsiteController::class, 'submitpop']);
//solve later
Route::post('/contact-save', [WebsiteController::class, 'contactsave']);
//solve later
Route::post('/career-save', [WebsiteController::class, 'careersave']);

//addmission

Auth::routes(['register' => false]);
// Change Password Routes...
Route::get('change_password', [ChangePasswordController::class, 'showChangePasswordForm'])->name('auth.change_password');
Route::patch('change_password', [ChangePasswordController::class, 'changePassword'])->name('auth.change_password');

//now use
// Route::get('image-upload', 'index');
//     Route::post('image-upload', 'store')->name('image.store');

Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    
    Route::resource('blog', blogController::class);
    Route::delete('blog_mass_destroy', [blogController::class, 'massDestroy'])->name('blog.mass_destroy');

    Route::resource('community', communitiesController::class);
    Route::delete('community_mass_destroy', [communitiesController::class, 'massDestroy'])->name('community.mass_destroy');

    Route::resource('sectioncontent', SectionController::class);
    Route::delete('sectioncontent_mass_destroy', [SectionController::class, 'massDestroy'])->name('sectioncontent.mass_destroy');

    Route::resource('hospital', HospitalController::class);
    Route::delete('hospital_mass_destroy', [HospitalController::class, 'massDestroy'])->name('hospital.mass_destroy');

    Route::resource('patner', PatnerController::class);
    Route::delete('patner_mass_destroy', [PatnerController::class, 'massDestroy'])->name('patner.mass_destroy');

    Route::resource('author', AuthorController::class);
    Route::delete('author_mass_destroy', [AuthorController::class, 'massDestroy'])->name('author.mass_destroy');

    Route::resource('tags', TagsController::class);
    Route::delete('tags_mass_destroy', [TagsController::class, 'massDestroy'])->name('tags.mass_destroy');

    Route::resource('news', newsController::class);
    Route::delete('news_mass_destroy', [newsController::class, 'massDestroy'])->name('news.mass_destroy');

    Route::resource('seos', SeoController::class);
    Route::delete('seos_mass_destroy', [SeoController::class, 'massDestroy'])->name('seos.mass_destroy');

    Route::resource('contact', ContactController::class);
    Route::delete('contact_mass_destroy', [ContactController::class, 'massDestroy'])->name('contact.mass_destroy');

    Route::resource('project', projectController::class);
    Route::delete('project_mass_destroy', [projectController::class, 'massDestroy'])->name('project.mass_destroy');

    Route::resource('enquiry', GeneralController::class);
    Route::delete('enquiry_mass_destroy', [GeneralController::class, 'massDestroy'])->name('enquiry.mass_destroy');

    Route::resource('testimonials', testimonialsController::class);
    Route::delete('testimonials_mass_destroy', [testimonialsController::class, 'massDestroy'])->name('testimonials.mass_destroy');

    Route::resource('categories', CategoriesController::class);
    Route::delete('categories_mass_destroy', [CategoriesController::class, 'massDestroy'])->name('categories.mass_destroy');

    Route::resource('slider', sliderController::class);
    Route::delete('slider_mass_destroy', [sliderController::class, 'massDestroy'])->name('slider.mass_destroy');

    Route::resource('galleries', GalleriesController::class);
    Route::delete('galleries_mass_destroy', [GalleriesController::class, 'massDestroy'])->name('galleries.mass_destroy');

    Route::resource('team', TeamController::class);
    Route::delete('team_mass_destroy', [TeamController::class, 'massDestroy'])->name('team.mass_destroy');

    Route::resource('video', VideoController::class);
    Route::delete('video_mass_destroy', [VideoController::class, 'massDestroy'])->name('video.mass_destroy');

    Route::resource('permissions', PermissionsController::class);
    Route::delete('permissions_mass_destroy', [PermissionsController::class, 'massDestroy'])->name('permissions.mass_destroy');

    Route::resource('roles', RolesController::class);
    Route::delete('roles_mass_destroy', [RolesController::class, 'massDestroy'])->name('roles.mass_destroy');

    Route::resource('users', UsersController::class);
    Route::delete('users_mass_destroy', [UsersController::class, 'massDestroy'])->name('users.mass_destroy');

    Route::resource('propertycategory', PropertyCategoryController::class);
    Route::delete('propertycategory_mass_destroy', [PropertyCategoryController::class, 'massDestroy'])->name('propertycategory.mass_destroy');

    Route::resource('property', PropertyController::class);
    Route::delete('property_mass_destroy', [PropertyController::class, 'massDestroy'])->name('property.mass_destroy');

    Route::resource('tenantbackground', TenantBackgroundController::class);
    Route::delete('tenantbackground_mass_destroy', [TenantBackgroundController::class, 'massDestroy'])->name('tenantbackground.mass_destroy');

    Route::resource('amenities', AmenityController::class);
    Route::delete('amenities_mass_destroy', [AmenityController::class, 'massDestroy'])->name('amenities.mass_destroy');

    Route::resource('accessibility', AccessibilityController::class);
    Route::delete('accessibility_mass_destroy', [AccessibilityController::class, 'massDestroy'])->name('accessibility.mass_destroy');

    Route::resource('propertytype', PropertyTypeController::class);
    Route::delete('propertytype_mass_destroy', [PropertyTypeController::class, 'massDestroy'])->name('propertytype.mass_destroy');
});