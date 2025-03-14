<?php

namespace App\Http\Controllers;

use function Laravel\Prompts\error;
use function PHPSTORM_META\type;
use App\Models\Bot;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;
use App\Models\Comments;
use App\Models\CommentsEn;
use App\Models\Counters;
use App\Models\Education;
use App\Models\EducationEn;
use App\Models\Information;
use App\Models\InformationEn;
use App\Models\Links;
use App\Models\Projects;
use App\Models\ProjectsEn;
use App\Models\Resomes;
use App\Models\ResomesEn;
use App\Models\Services;
use App\Models\ServicesEn;
use App\Models\Setting;
use App\Models\Skills;
use App\Models\User;
use GuzzleHttp\Psr7\Header;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class APIController extends Controller
{

    function index($name) {

          try {
            $Setting = Setting::where('user' , $name)->firstOrFail();

            if ($Setting['def-lang'] == 'fa') {
            $User = User::where('user' , $name)->firstOrFail();
            $User = $User->user;
            $Information = Information::where('user',$User)->firstOrFail();
            $Links = Links::where('user',$User)->get(); 
            $Counters = Counters::where('user',$User)->get();
            $Services = Services::where('user',$User)->get();
            $Skills = Skills::where('user',$User)->get()->select('image' , 'name','percentage');
            $Resomes = Resomes::where('user',$User)->get()->select('time','title','institute');
            $Education = Education::where('user',$User)->get()->select('time','title','institute');
            $Projects = Projects::where('user',$User)->get();
            $Comments = Comments::where('user',$User)->get();   
            }else{

            $User = User::where('user' , $name)->firstOrFail();
            $User = $User->user;
            $Information = InformationEn::where('user',$User)->firstOrFail();
            $Links = Links::where('user',$User)->get(); 
            $Counters = Counters::where('user',$User)->get();
            $Services = ServicesEn::where('user',$User)->get();
            $Skills = Skills::where('user',$User)->get()->select('image' , 'name','percentage');
            $Resomes = ResomesEn::where('user',$User)->get()->select('time','title','institute');
            $Education = EducationEn::where('user',$User)->get()->select('time','title','institute');
            $Projects = ProjectsEn::where('user',$User)->get();
            $Comments = CommentsEn::where('user',$User)->get();  
            }

            // Hidden
            $Setting->makeHidden(['id' ,'bot-token', 'bot-id', 'created_at' , 'updated_at']);
            $Information->makeHidden(['id' , 'created_at' , 'updated_at']);

            // start response

            return response()->json([
                            "setting"=> $Setting,
                            'information'=>$Information,

                        "links"=>[
                            "resome"=> $Links[0]['resome'],
                            "telegram"=>$Links[0]['telegram'],
                            "instagram"=>$Links[0]['instagram'],
                            "linkedin"=>$Links[0]['linkedin'],
                            "github"=>$Links[0]['github'],
                        ],
                        "counters"=>[
                            "hostory"=>$Counters[0]['history'],
                            "completion"=>$Counters[0]['completion'],
                            "satisfied"=>$Counters[0]['satisfied'],
                            "experience"=>$Counters[0]['experience'],
                        ],
                        "services"=>$Services,
                        "skills"=> $Skills ,
                        "resomes"=> $Resomes ,
                        "education"=> $Education ,
                        "projects"=> $Projects ,
                        "comments"=> $Comments ,
                    ],200);

            // end response

            } catch (ModelNotFoundException $e) {
            return response()->json( ['Eror'=>'Page '. $name .' Not Found'] ,404);
        }
        
    }
































    function sendmesage(Request $request) {

    $request->validate([

        'Reco' => 'required|string|max:255',
        'conName' => 'required|string|max:255',
        'conLName' => 'required|string|max:255',
        'conEmail' => 'required|email|max:255',
        'conPhone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
        'conService' => 'required|string|max:255',
        'conMessage' => 'required|string|max:1000',

    ]);

    // دریافت مقادیر ورودی بعد از ولیدیشن
    $name = $request->input('conName');
    $nameL = $request->input('conLName');
    $email = $request->input('conEmail');
    $phone = $request->input('conPhone');
    $service = $request->input('conService');
    $message = $request->input('conMessage');
    $UserName = $request->input('Reco');

    $User = Bot::where('user', $UserName )->get()->select('userid' , 'token');
      $botToken = $User[0]['token'];
      $chatId = $User[0]['userid'];
      $text = "
📩 New Message  $name

👤 User : $name $nameL
⚙ Services : $service
✉️ Messag :
➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖
$message
➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖

📞 Number : $phone 
📬 Email : $email


🏛 𝘊𝘳 : @abolnoori✨️♥️";

      $url = "https://api.telegram.org/bot$botToken/sendMessage";
      $data = array(
          'chat_id' => $chatId,
          'text' => $text
      );
      $options = array(
          'http' => array(
              'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
              'method'  => 'POST',
              'content' => http_build_query($data),
          ),
      );
      $context  = stream_context_create($options);
      $result = file_get_contents($url, false, $context);



    }


}
