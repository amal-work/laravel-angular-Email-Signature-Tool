<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use App\SignMethodList;

class InstructionEmailController extends Controller
{
    /**
     * Show all email signature list.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
       $signature_windows = SignMethodList::where('category_name', 'Alllist')->get();
      /* $signature_macoxs = SignMethodList::where('category_name', 'MacOS')->get();
       $signature_androids = SignMethodList::where('category_name', 'Android')->get();
       $signature_webmails = SignMethodList::where('category_name', 'Webmail')->get();
       $signature_iphones = SignMethodList::where('category_name', 'iPhone (iOS)')->get();
       $signature_crms = SignMethodList::where('category_name', 'CRM')->get();*/

       return view('htmlsig_list-all-instructions', compact('signature_windows'));   
       
    }

     /**
     * show each email signature method in detail.
     *
     * @return \Illuminate\Http\Response
     */
    public function detailView($signature_name)
    {
      
      switch ($signature_name) {
        case 'google_mail':
                $signature_window = SignMethodList::where('category_name', 'Alllist')
                            ->where('sign_method_link', $signature_name)->first();

                return view('signature_introduction.google_mail', compact('signature_window'));     
              break;

        case 'outlook_2013':
                $signature_window = SignMethodList::where('category_name', 'Alllist')
                            ->where('sign_method_link', $signature_name)->first();

                return view('signature_introduction.outlook2013', compact('signature_window'));     
              break;

        case 'windows_mail_app':
                $signature_window = SignMethodList::where('category_name', 'Alllist')
                            ->where('sign_method_link', $signature_name)->first();

                return view('signature_introduction.window_mail', compact('signature_window'));     
              break;

        case 'ios_default_mail_app':
                $signature_window = SignMethodList::where('category_name', 'Alllist')
                            ->where('sign_method_link', $signature_name)->first();

                return view('signature_introduction.ios_default_mail', compact('signature_window'));     
              break;

        case 'yahoo_mail':
                $signature_window = SignMethodList::where('category_name', 'Alllist')
                            ->where('sign_method_link', $signature_name)->first();

                return view('signature_introduction.yahoo_mail', compact('signature_window'));     
              break;

        case 'outlook_2016':
                $signature_window = SignMethodList::where('category_name', 'Alllist')
                            ->where('sign_method_link', $signature_name)->first();

                return view('signature_introduction.outlook2016', compact('signature_window'));     
              break;

        case 'mac_os_mail_app':
                $signature_window = SignMethodList::where('category_name', 'Alllist')
                            ->where('sign_method_link', $signature_name)->first();

                return view('signature_introduction.mac_os_mail_app', compact('signature_window'));     
              break;

        case 'aol_mail':
                $signature_window = SignMethodList::where('category_name', 'Alllist')
                            ->where('sign_method_link', $signature_name)->first();

                return view('signature_introduction.aol', compact('signature_window'));     
              break;

        case 'outlook_2017':
                $signature_window = SignMethodList::where('category_name', 'Alllist')
                            ->where('sign_method_link', $signature_name)->first();

                return view('signature_introduction.outlook2017', compact('signature_window'));     
              break;

        case 'android_mail_app':
                $signature_window = SignMethodList::where('category_name', 'Alllist')
                            ->where('sign_method_link', $signature_name)->first();

                return view('signature_introduction.android_mail_app', compact('signature_window'));     
              break;

        case 'other':
                $signature_window = SignMethodList::where('category_name', 'Alllist')
                            ->where('sign_method_link', $signature_name)->first();

                return view('signature_introduction.other', compact('signature_window'));     
              break;
        default:
              return 'there is no email signature';
              break;
      }
            
    }    
}
