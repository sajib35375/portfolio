<?php

use Illuminate\Support\Facades\Route;



Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('dashboard');
//slider
Route::get('slider/view',[App\Http\Controllers\Admin\SliderController::class,'sliderView'])->name('slider.view');
Route::post('slider/store',[App\Http\Controllers\Admin\SliderController::class,'sliderStore'])->name('slider.store');
Route::get('slider/edit/{id}',[App\Http\Controllers\Admin\SliderController::class,'EditSlider'])->name('edit.slider');
Route::post('slider/update/{id}',[App\Http\Controllers\Admin\SliderController::class,'UpdateSlider'])->name('update.slider');
Route::get('slider/delete/{id}',[App\Http\Controllers\Admin\SliderController::class,'DeleteSlider'])->name('delete.slider');
//what to do
Route::get('todo/view',[App\Http\Controllers\Admin\ToDoController::class,'toDoView'])->name('todo.view');
Route::get('todo/add',[App\Http\Controllers\Admin\ToDoController::class,'toDoAdd'])->name('todo.add');
Route::post('todo/store',[App\Http\Controllers\Admin\ToDoController::class,'toDoStore'])->name('todo.store');
Route::get('todo/edit/{id}',[App\Http\Controllers\Admin\ToDoController::class,'toDoEdit'])->name('todo.edit');
Route::post('todo/update/{id}',[App\Http\Controllers\Admin\ToDoController::class,'toDoUpdate'])->name('todo.update');
Route::get('todo/delete/{id}',[App\Http\Controllers\Admin\ToDoController::class,'toDoDelete'])->name('todo.delete');
Route::get('todo/header/image',[App\Http\Controllers\Admin\ToDoController::class,'toDoHeaderImage'])->name('todo.header.image');
Route::post('todo/header/image',[App\Http\Controllers\Admin\ToDoController::class,'toDoHeaderImageUpdate'])->name('todo.header.image.update');
//logout
Route::get('logout',[App\Http\Controllers\HomeController::class,'logout'])->name('logout');
//global network
Route::get('global/net/view',[App\Http\Controllers\Admin\OtherController::class,'GlobalNet'])->name('global.net');
Route::post('global/net/update',[App\Http\Controllers\Admin\OtherController::class,'GlobalNetUpdate'])->name('global.net.update');
//experience
Route::get('exp/view',[App\Http\Controllers\Admin\ExpController::class,'expView'])->name('exp.view');
Route::get('update/exp/view',[App\Http\Controllers\Admin\ExpController::class,'UpdateExpView'])->name('update.exp.view');
Route::post('update/exp/store',[App\Http\Controllers\Admin\ExpController::class,'UpdateExpStore'])->name('update.exp.store');
//testimonial
Route::get('client/testimonial',[App\Http\Controllers\Admin\TestimonialController::class,'clientTest'])->name('client.test');
Route::get('add/new/test',[App\Http\Controllers\Admin\TestimonialController::class,'addNewTest'])->name('add.new.test');
Route::post('testimonial/store',[App\Http\Controllers\Admin\TestimonialController::class,'TestStore'])->name('test.store');
Route::get('testimonial/edit/{id}',[App\Http\Controllers\Admin\TestimonialController::class,'TestEdit'])->name('test.edit');
Route::post('testimonial/update/{id}',[App\Http\Controllers\Admin\TestimonialController::class,'TestUpdate'])->name('test.update');
Route::get('testimonial/delete/{id}',[App\Http\Controllers\Admin\TestimonialController::class,'TestDelete'])->name('test.delete');
//pricing plan for products
Route::get('pricing/products',[App\Http\Controllers\Admin\PricingPlanController::class,'pricingProduct'])->name('pricing.product');
Route::get('pricing/products/show',[App\Http\Controllers\Admin\PricingPlanController::class,'pricingProductShow'])->name('pricing.product.show');
Route::post('pricing/products/store',[App\Http\Controllers\Admin\PricingPlanController::class,'pricingProductStore'])->name('pricing.product.store');
Route::get('pricing/product/edit/{id}',[App\Http\Controllers\Admin\PricingPlanController::class,'EditPricingProduct'])->name('pricing.product.edit');
Route::post('pricing/product/update/{id}',[App\Http\Controllers\Admin\PricingPlanController::class,'UpdatePricingProduct'])->name('pricing.product.update');
Route::get('pricing/product/delete/{id}',[App\Http\Controllers\Admin\PricingPlanController::class,'DeletePricingProduct'])->name('pricing.product.delete');
//pricing plan for services
Route::get('pricing/services/show',[App\Http\Controllers\Admin\PricingPlanController::class,'serviceShow'])->name('service.show');
Route::get('pricing/services/add',[App\Http\Controllers\Admin\PricingPlanController::class,'serviceAdd'])->name('service.add');
Route::post('pricing/services/store',[App\Http\Controllers\Admin\PricingPlanController::class,'serviceStore'])->name('service.store');
Route::get('pricing/services/edit/{id}',[App\Http\Controllers\Admin\PricingPlanController::class,'serviceEdit'])->name('service.edit');
Route::post('pricing/services/update/{id}',[App\Http\Controllers\Admin\PricingPlanController::class,'serviceUpdate'])->name('service.update');
Route::get('pricing/services/delete/{id}',[App\Http\Controllers\Admin\PricingPlanController::class,'serviceDelete'])->name('service.delete');
//case studies
Route::get('case/study',[App\Http\Controllers\Admin\CaseStudiesController::class,'caseStudy'])->name('case.study');
Route::get('add/case/study',[App\Http\Controllers\Admin\CaseStudiesController::class,'AddCaseStudy'])->name('add.case.study');
Route::post('case/study/store',[App\Http\Controllers\Admin\CaseStudiesController::class,'caseStudyStore'])->name('case.study.store');
Route::get('case/study/edit/{id}',[App\Http\Controllers\Admin\CaseStudiesController::class,'caseStudyEdit'])->name('case.study.edit');
Route::post('case/study/update/{id}',[App\Http\Controllers\Admin\CaseStudiesController::class,'caseStudyUpdate'])->name('case.study.update');
Route::get('case/study/delete/{id}',[App\Http\Controllers\Admin\CaseStudiesController::class,'caseStudyDelete'])->name('case.study.delete');
Route::get('case/study/header/image/{id}',[App\Http\Controllers\Admin\CaseStudiesController::class,'caseStudyImage'])->name('case.study.image');
Route::get('case/study/header/image',[App\Http\Controllers\Admin\CaseStudiesController::class,'caseStudyImage'])->name('case.study.image');
Route::post('case/study/header/image/update',[App\Http\Controllers\Admin\CaseStudiesController::class,'caseStudyImageUpdate'])->name('case.study.image.update');
//our team
Route::get('team/view',[App\Http\Controllers\TeamController::class,'teamView'])->name('team.view');
Route::post('add/team/member',[App\Http\Controllers\TeamController::class,'teamAdd'])->name('team.add');
Route::get('edit/team/member/{id}',[App\Http\Controllers\TeamController::class,'teamEdit'])->name('team.edit');
Route::post('update/team/member/{id}',[App\Http\Controllers\TeamController::class,'teamUpdate'])->name('team.update');
Route::get('delete/team/member/{id}',[App\Http\Controllers\TeamController::class,'teamDelete'])->name('team.delete');
//map
Route::get('map/view',[App\Http\Controllers\Admin\MapController::class,'mapView'])->name('map.view');
Route::post('map/update',[App\Http\Controllers\Admin\MapController::class,'mapUpdate'])->name('map.update');
//about
Route::get('about-us/view',[App\Http\Controllers\AboutController::class,'aboutView'])->name('about.view');
Route::post('about-us/update',[App\Http\Controllers\AboutController::class,'aboutUpdate'])->name('about.update');
Route::get('about/testimonial',[App\Http\Controllers\AboutController::class,'aboutTestimonial'])->name('about.testimonials');
Route::post('about/testimonial/store',[App\Http\Controllers\AboutController::class,'aboutTestimonialStore'])->name('about.testimonials.store');
Route::get('about/testimonial/edit/{id}',[App\Http\Controllers\AboutController::class,'aboutTestimonialEdit'])->name('about.testimonials.edit');
Route::post('about/testimonial/update/{id}',[App\Http\Controllers\AboutController::class,'aboutTestimonialUpdate'])->name('about.testimonials.update');
//case study header image
Route::get('caseStudy/header-image/view',[App\Http\Controllers\Admin\CaseStudiesController::class,'headerImageView'])->name('header.image.view');
Route::post('caseStudy/header-image',[App\Http\Controllers\Admin\CaseStudiesController::class,'headerImage'])->name('header.image');
//contact us
Route::get('update/contact/view',[App\Http\Controllers\ContactController::class,'updateContactView'])->name('update.contact.view');
Route::post('update/contact/info',[App\Http\Controllers\ContactController::class,'updateContactInfo'])->name('update.contact.info');
//site setting
Route::get('site/setting',[App\Http\Controllers\Admin\SiteSettingController::class,'siteSetting'])->name('site.setting');
Route::post('site/setting/update',[App\Http\Controllers\Admin\SiteSettingController::class,'siteSettingUpdate'])->name('site.setting.update');
//contact mail
Route::get('contact/mail/info',[App\Http\Controllers\Admin\EmailController::class,'ContactMail'])->name('contact.mail');
Route::get('appointment/mail/info',[App\Http\Controllers\Admin\EmailController::class,'AppointMail'])->name('appoint.mail');
//profile update
Route::get('profile/view',[App\Http\Controllers\Admin\ProfileController::class,'profileView'])->name('profile.view');
Route::get('profile/edit',[App\Http\Controllers\Admin\ProfileController::class,'profileEdit'])->name('profile.edit');
Route::post('profile/update',[App\Http\Controllers\Admin\ProfileController::class,'profileUpdate'])->name('profile.update');
//change password
Route::get('change/password/view',[App\Http\Controllers\Admin\ProfileController::class, 'changePassword'])->name('change.pass');
Route::post('change/password/update',[App\Http\Controllers\Admin\ProfileController::class, 'changePassUpdate'])->name('change.pass.update');
//delete contact and appointment
Route::get('Appointment/delete/{id}',[App\Http\Controllers\ContactController::class,'AppointmentDelete'])->name('appoint.delete');
Route::get('contact/delete/{id}',[App\Http\Controllers\ContactController::class,'ContactDelete'])->name('contact.delete');
});

Route::middleware('speed_up')->group(function (){
    //frontend home page view
Route::get('/',[App\Http\Controllers\HomeController::class,'homeView'])->name('home.view');
Route::get('case/study/single/{id}',[App\Http\Controllers\HomeController::class,'caseStudySingle'])->name('case.study.single');

//about us
Route::get('about-us',[App\Http\Controllers\AboutController::class,'aboutUs'])->name('about.us');
//case-study-page
Route::get('case-study/page',[App\Http\Controllers\HomeController::class,'caseStudyPage'])->name('case.study.page');

//todo or services
Route::get('todo/services',[App\Http\Controllers\HomeController::class,'todoServices'])->name('todo.services');
Route::get('todo/services/single/{id}',[App\Http\Controllers\HomeController::class,'todoServicesSingle'])->name('todo.services.single');
//contact us page
Route::get('contact/us',[App\Http\Controllers\ContactController::class,'contactUsPage'])->name('contact.us.page');

});

//contact us
Route::post('contact-us',[App\Http\Controllers\ContactController::class,'contactUs'])->name('contact.us');
//appointment
Route::post('appointment/place',[App\Http\Controllers\ContactController::class,'appointmentPlace'])->name('appointment.place');
//search
Route::post('search/data',[App\Http\Controllers\SearchController::class,'searchData'])->name('search.data');















