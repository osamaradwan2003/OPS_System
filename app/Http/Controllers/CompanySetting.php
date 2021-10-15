<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\CompnanySetting;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use phpDocumentor\Reflection\Types\Mixed_;
use function PHPUnit\Framework\fileExists;

class CompanySetting extends BaseController
{

  /**
   * @var CompnanySetting
   */
  private CompnanySetting $settingModel;
  private mixed $settings;

  public function __construct()
    {
      parent::__construct();
      $this->settingModel = new CompnanySetting();
      $this->settings = $this->settingModel::find(1);
    }

    public function index()
    {
        return view('pages.setting', ['title'=>'Settings']);
    }

    public function saveInfo(Request $req): mixed
    {
      if(!$req->isMethod('POST')){
        redirect(route('company.settings'));
      }

      $validate = $req->validate(
        [
        'comp_name' => 'required',
        'comp_sh_name' => 'required',
        'comp_email' => 'required|email',
        'comp_phone_1' => 'required|numeric|min:10',
        'comp_logo' => 'required|file|image'
        ],
        [
        'comp_name.required'=> 'Company Name is Required',
        'comp_sh_name.required'=> 'Company Nice Name is Required',
        'comp_email.required'=> 'Company Email is Required',
        'comp_email.email'=> 'Not valid Email Address',
        'comp_phone_1.required'=> 'Company Phone is Required',
        'comp_phone_1.numeric'=> 'Company Phone Not Valid Number',
        'comp_phone_1.min'=> 'Company Phone length Not Valid',
        'comp_logo.required' => 'Please Add Company Logo',
        'comp_logo.file' => 'Not Valid File',
        'comp_logo.image' => 'Pleas Add Valid Image (jpg, jpeg, png, bmp, gif, svg,bp)'
      ]
      );

      $file = $req->file('comp_logo');
      $new_name = time() . "_" .$req->comp_name . '.' . $file->clientExtension();
      $file->storeAs('uploads/images/logos', $new_name, 'public');
      $filename = explode('/',$this->settings->company_logo);
      $filename = $filename[count($filename) - 1];
      $old_file =  Storage::path('public') . '/uploads/images/logos/' . $filename;
      $old_file = str_replace(["/", "\\"], DIRECTORY_SEPARATOR , $old_file);
      if(File::exists($old_file)){
        File::delete($old_file);
      }
      $this->settingModel::where('id', '=', 1)->update([
        'company_name' => $req->comp_name,
        'company_nice_name' => $req->comp_sh_name,
        "twitter" => $req->comp_twitter ,
        "facebook" => $req->comp_facebook ,
        "address" => $req->comp_addr ,
        "phones" => $req->comp_phone_1 ,
        "website" => $req->comp_web,
        "email" => $req->comp_email ,
        "company_logo" =>  'storage/uploads/images/logos/' . $new_name,
      ]);

      return \redirect()->route('company.setting')->with('status', ['code'=>200, 'msg'=>'success']);
    }

    public function taxSettings(Request $req)
    {

    }
}
