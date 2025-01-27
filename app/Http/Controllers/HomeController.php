<?php

namespace App\Http\Controllers;
use function PHPSTORM_META\type;

use App\Models\Bot;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;
use App\Models\Comments;
use App\Models\Counters;
use App\Models\Education;
use App\Models\Information;
use App\Models\Links;
use App\Models\Projects;
use App\Models\Resomes;
use App\Models\Services;
use App\Models\Skills;
use GuzzleHttp\Psr7\Header;

class HomeController extends Controller
{
    function abol_fa() {
       

        $Information = Information::find(1);
        $Links = Links::find(1);
        $Counters = Counters::find(1);
        $Services = Services::where('user','abol')->get();
        $Skills = Skills::where('user','abol')->get()->select('image' , 'name','percentage');
        $Resomes = Resomes::where('user','abol')->get()->select('time','title','institute');
        $Resomes = Resomes::where('user','abol')->get()->select('time','title','institute');
        $Education = Education::where('user','abol')->get()->select('time','title','institute');
        $Projects = Projects::where('user','abol')->get();
        $Comments = Comments::where('user','abol')->get();

        return view('Home-fa',[
                "title"=>  $Information->title ,
                "email"=>$Information->email,
                "name"=> $Information->name,
                "job1"=> $Information->job1,
                "job2"=>$Information->job2,
                "aboutmy"=> $Information->aboutmy,
                "address"=> $Information->Address,
                "number"=> $Information->number,

            "links"=>[
                "resome"=> $Links->resome,
                "telegram"=>$Links->telegram,
                "instagram"=>$Links->instagram,
                "linkedin"=>$Links->linkedin,
                "github"=>$Links->github,
            ],
            "counters"=>[
                "hostory"=>$Counters->history,
                "completion"=>$Counters->completion,
                "satisfied"=>$Counters->satisfied,
                "experience"=>$Counters->experience,
            ],
            "Services"=>$Services,
            "Skills"=> $Skills ,
            "Resomes"=> $Resomes ,
            "Education"=> $Education ,
            "Projects"=> $Projects ,
            "Comments"=> $Comments ,
        ]);
    }
    function mehran_fa() {

        $Information = Information::find(2);
        $Links = Links::find(2);
        $Counters = Counters::find(2);
        $Services = Services::where('user','mehran')->get();
        $Skills = Skills::where('user','mehran')->get()->select('image' , 'name','percentage');
        $Resomes = Resomes::where('user','mehran')->get()->select('time','title','institute');
        $Resomes = Resomes::where('user','mehran')->get()->select('time','title','institute');
        $Education = Education::where('user','mehran')->get()->select('time','title','institute');
        $Projects = Projects::where('user','mehran')->get();
        $Comments = Comments::where('user','mehran')->get();

        return view('Home-fa',[
                "title"=>  $Information->title ,
                "email"=>$Information->email,
                "name"=> $Information->name,
                "job1"=> $Information->job1,
                "job2"=>$Information->job2,
                "aboutmy"=> $Information->aboutmy,
                "address"=> $Information->Address,
                "number"=> $Information->number,

            "links"=>[
                "resome"=> $Links->resome,
                "telegram"=>$Links->telegram,
                "instagram"=>$Links->instagram,
                "linkedin"=>$Links->linkedin,
                "github"=>$Links->github,
            ],
            "counters"=>[
                "hostory"=>$Counters->history,
                "completion"=>$Counters->completion,
                "satisfied"=>$Counters->satisfied,
                "experience"=>$Counters->experience,
            ],
            "Services"=>$Services,
            "Skills"=> $Skills ,
            "Resomes"=> $Resomes ,
            "Education"=> $Education ,
            "Projects"=> $Projects ,
            "Comments"=> $Comments ,
        ]);




    }

    function amin_fa() {





    }











    function sendmesage(Request $request) {

    $request->validate([

        'Reco' => 'required|string|max:255',
        'ResomeUser' => 'required|string|max:255',
        'conName' => 'required|string|max:255',
        'conLName' => 'required|string|max:255',
        'conEmail' => 'required|email|max:255',
        'conPhone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
        'conService' => 'required|string|max:255',
        'conMessage' => 'required|string|max:1000',
    ]);

    // دریافت مقادیر ورودی بعد از ولیدیشن
    $ResomeUser = $request->input('ResomeUser');
    $name = $request->input('conName');
    $nameL = $request->input('conLName');
    $email = $request->input('conEmail');
    $phone = $request->input('conPhone');
    $service = $request->input('conService');
    $message = $request->input('conMessage');
    $UserName = $request->input('Reco');


    $User = Bot::where('user', $ResomeUser )->get()->select('userid' , 'token');

      $botToken = $User[0]['token']; // جایگزین کنید با توکن ربات شما
      $chatId = $User[0]['userid']; // جایگزین کنید با آیدی چت شما
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


       return redirect('/'.$UserName);



    }
}
