<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Header;
use App\About;
use App\Education;
use App\Employment;
use App\Skill;
use App\Protfolio;
use App\Message;
use App\Social;
use App\Location;
use Image;

class HomeController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {

    $this->middleware('auth');
  }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */

  //header Section
  public function index()
  {

    return view('home');
  }

  public function header()
  {
    $informations = Header::all();
    return view('admin.header', compact('informations'));
  }

  public function headerEdit()
  {
    $information = Header::where('id', 1)->first();
    return view('admin.header_edit', compact('information'));
  }

  public function headerEditInsert(Request $request)
  {
    $request->validate(
      [
        'section1' => 'required',
        'section2' => 'required',
        'section3' => 'required',
        'section4' => 'required',

      ]

    );
    Header::where('id', 1)->first()->update([
      'section1' => $request->section1,
      'section2' => $request->section2,
      'section3' => $request->section3,
      'section4' => $request->section4,
    ]);

    return back()->with('status', 'Updated Successfully');
  }



  //About section
  public function about()
  {
    $infos = About::all();
    return view('admin.about', compact('infos'));
  }

  public function aboutEdit()
  {
    $info = About::where('id', 1)->first();
    return view('admin.about_edit', compact('info'));
  }

  public function aboutEditInsert(Request $request)
  {
    About::where('id', 1)->first()->update([
      'name' => $request->name,
      'title' => $request->title,
      'msg' => $request->msg,
    ]);
    if ($request->hasFile('img')) {

      $mainimage = $request->img;
      $imagename = 'avatar.' . $mainimage->getClientOriginalExtension();
      if ($mainimage->getClientOriginalExtension() == 'jpg') {
        unlink(base_path('public/assets/images/avatar.jpg'));


        Image::make($mainimage)->resize(512, 512)->save(base_path('public/assets/images/' . $imagename));
        About::where('id', 1)->first()->update([
          'product_image' => $imagename,
        ]);
      } else {
        return back()->with('wrong', 'Image Format wrong ');
      }
    }

    return back()->with('status', 'Updated Successfully');
  }


  //Resume section
  //Education
  function education()
  {
    $infos = Education::all();
    return view('admin.education', compact('infos'));
  }

  function educationAdd()
  {
    return view('admin.edu_add');
  }

  function educationAddPost(Request $request)
  {
    $request->validate(
      [
        'year' => 'required',
        'institute' => 'required',
        'subject' => 'required',
        'grade' => 'required',
        'description' => 'required',

      ]
    );
    Education::insert([
      'year' => $request->year,
      'institute' => $request->institute,
      'subject' => $request->subject,
      'grade' => $request->grade,
      'description' => $request->description,
    ]);
    return back()->with('status', "Information Added Successfully!");
  }

  function educationEdit($edu_id)
  {
    $eduinfo = Education::find($edu_id);
    return view('admin.edu_edit', compact('eduinfo'));
  }

  function educationEditPost(Request $request)
  {
    $request->validate(
      [
        'year' => 'required',
        'institute' => 'required',
        'subject' => 'required',
        'grade' => 'required',
        'description' => 'required',

      ]
    );
    Education::find($request->edu_id)->update([
      'year' => $request->year,
      'institute' => $request->institute,
      'subject' => $request->subject,
      'grade' => $request->grade,
      'description' => $request->description,
    ]);
    return back()->with('status', "Information Updated Successfully!");
  }
  function educationDelete($edu_id)
  {
    Education::find($edu_id)->delete();
    return back();
  }

  //Employment
  function employment()
  {
    $infos = Employment::all();
    return view('admin.employment', compact('infos'));
  }

  function employmentAdd()
  {
    return view('admin.emp_add');
  }

  function employmentAddPost(Request $request)
  {
    $request->validate(
      [
        'year' => 'required',
        'title' => 'required',
        'position' => 'required',
        'description' => 'required',

      ]
    );
    Employment::insert([
      'year' => $request->year,
      'title' => $request->title,
      'position' => $request->position,
      'description' => $request->description,
    ]);
    return back()->with('status', "Information Added Successfully!");
  }

  function employmentEdit($emp_id)
  {
    $empinfo = Employment::find($emp_id);
    return view('admin.emp_edit', compact('empinfo'));
  }

  function employmentEditPost(Request $request)
  {
    $request->validate(
      [
        'year' => 'required',
        'title' => 'required',
        'position' => 'required',
        'description' => 'required',

      ]
    );
    Employment::find($request->emp_id)->update([
      'year' => $request->year,
      'title' => $request->title,
      'position' => $request->position,
      'description' => $request->description,
    ]);
    return back()->with('status', "Information Updated Successfully!");
  }
  function employmentDelete($emp_id)
  {
    Employment::find($emp_id)->delete();
    return back();
  }


  //skills
  function skill()
  {
    $skills = Skill::all();
    return view('admin.skills', compact('skills'));
  }

  function addskill()
  {
    return view('admin.skill_add');
  }

  function addskillpost(Request $request)
  {
    $request->validate(
      [
        'name' => 'required',
        'bg_color' => 'required',
        'width' => 'required',
      ]
    );
    Skill::insert([
      'name' => $request->name,
      'bg_color' => $request->bg_color,
      'width' => $request->width,
    ]);
    return back()->with('status', "Skills Added Successfully!");
  }

  function skillDelete($skill_id)
  {
    Skill::find($skill_id)->delete();
    return back();
  }
  function skillEdit($skill_id)
  {
    $skill = Skill::find($skill_id);

    return view('admin.skill_edit', compact('skill'));
  }
  function skillEditPost(Request $request)
  {
    Skill::find($request->skill_id)->update([
      'name' => $request->name,
      'bg_color' => $request->bg_color,
      'width' => $request->width,
    ]);
    return back()->with('status', "Information Updated Successfully!");
  }




  //Protfolio
  function protfolioview()
  {
    $alls = Protfolio::all();
    return view('admin.protfolio_view', compact('alls'));
  }

  function addprotfolio()
  {
    return view('admin.protfolio_add');
  }

  function addprotfoliopost(Request $request)
  {
    $request->validate(
      [
        'title' => 'required',
        'description' => 'required',
        'subject' => 'required',
        'link' => 'required',
      ]
    );
    $lastinsertid = Protfolio::insertGetId([
      'title' => $request->title,
      'description' => $request->description,
      'subject' => $request->subject,
      'link' => $request->link,
    ]);
    if ($request->hasFile('image')) {
      $mainimage = $request->image;
      $imagename = $lastinsertid . '.' . $mainimage->getClientOriginalExtension();
      Image::make($mainimage)->resize(640, 427)->save(base_path('public/protfolio/' . $imagename));
      Protfolio::find($lastinsertid)->update([
        'image' => $imagename,
      ]);
    }
    return back()->with('status', "Portfolio Added Successfully!");
  }

  function protfolioDelete($protfolio_id)
  {
    Protfolio::find($protfolio_id)->delete();
    return back();
  }
  function protfolioEdit($protfolio_id)
  {
    $protfolio = Protfolio::find($protfolio_id);

    return view('admin.protfolio_edit', compact('protfolio'));
  }


  function protfolioEditPost(Request $request)
  {
    $request->validate(
      [
        'title' => 'required',
        'description' => 'required',
        'subject' => 'required',
        'link' => 'required',
      ]
    );
    Protfolio::find($request->id)->update([
      'title' => $request->title,
      'description' => $request->description,
      'subject' => $request->subject,
      'link' => $request->link,
    ]);
    if ($request->hasFile('image')) {
      $imagename = Protfolio::find($request->id)->image;
      if ($imagename != 'default.jpg') {
        unlink(base_path('public/protfolio/' . $imagename));
      }
      $mainimage = $request->image;
      $imagename = $request->id . '.' . $mainimage->getClientOriginalExtension();
      Image::make($mainimage)->resize(640, 427)->save(base_path('public/protfolio/' . $imagename));
      Protfolio::find($request->id)->update([
        'image' => $imagename,
      ]);
    }

    return back()->with('status', 'Updated Successfully');
  }


  //Social Link
  function socialview()
  {
    $alls = Social::all();
    return view('admin.social_view', compact('alls'));
  }

  function addsocial()
  {
    return view('admin.social_add');
  }

  function addsocialpost(Request $request)
  {
    $request->validate(
      [
        'title' => 'required',
        'icon' => 'required',
        'link' => 'required',
      ]
    );
    $lastinsertid = Social::insertGetId([
      'title' => $request->title,
      'icon' => $request->icon,
      'link' => $request->link,
    ]);

    return back()->with('status', "Social Link Added Successfully!");
  }

  function socialDelete($social_id)
  {
    Social::find($social_id)->delete();
    return back();
  }
  function socialEdit($social_id)
  {
    $social = Social::find($social_id);

    return view('admin.social_edit', compact('social'));
  }


  function socialEditPost(Request $request)
  {
    Social::find($request->id)->update([
      'title' => $request->title,
      'icon' => $request->icon,
     'link' => $request->link,
    ]);
    return back()->with('status', 'Updated Successfully');
  }


  //messeges
  function message()
  {
    $messages = Message::all();
    return view('admin.message', compact('messages'));
  }
  function messagedelete($msg_id)
  {
    Message::find($msg_id)->delete();
    return back();
  }
}
