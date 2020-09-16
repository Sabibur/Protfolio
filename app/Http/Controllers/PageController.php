<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Header;
use App\About;
use App\Education;
use App\Employment;
use App\Skill;
use App\Protfolio;
use App\Social;
use App\Message;
use Carbon\Carbon;

class PageController extends Controller
{
  //header Section
  function index()
  {
    $headerinfo = Header::where('id', 1)->first();
    $aboutinfo = About::where('id', 1)->first();
    $eduinfos = Education::orderBy('id', 'DESC')->get();
    $empinfos = Employment::orderBy('id', 'DESC')->get();
    $skills = Skill::all();
    $protfolios = Protfolio::all();
    $socials = Social::all();

    return view('welcome', compact('headerinfo', 'aboutinfo', 'eduinfos', 'empinfos', 'skills', 'protfolios', 'socials'));
  }

  function messagepost(Request $request)
  {
    $request->validate(
      [
        'name' => 'required',
        'email' => 'required|email',
        'subject' => 'required',
        'message' => 'required',

      ]

    );
    Message::insert([
      'name' => $request->name,
      'email' => $request->email,
      'subject' => $request->subject,
      'message' => $request->message,
      'created_at' => Carbon::now(),
    ]);

    return back()->with('status', 'Your Message Sent Successfully, Thank You!');
  }
}
