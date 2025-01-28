<?php

namespace App\Http\Controllers;

use function Laravel\Prompts\error;
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
use App\Models\User;
use GuzzleHttp\Psr7\Header;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class HomeController extends Controller
{
    function index( $name) {
        try {
            $User = User::where('user' , $name)->firstOrFail();
            $User = $User->user;
            $Information = Information::where('user',$User)->get();
            $Links = Links::where('user',$User)->get(); 
            $Counters = Counters::where('user',$User)->get();
            $Services = Services::where('user',$User)->get();
            
          
            $Skills = Skills::where('user',$User)->get()->select('image' , 'name','percentage');
            
            $Resomes = Resomes::where('user',$User)->get()->select('time','title','institute');
          
            $Education = Education::where('user',$User)->get()->select('time','title','institute');
            $Projects = Projects::where('user',$User)->get();
            $Comments = Comments::where('user',$User)->get();

            return view('Home-fa',[
                    "title"=>  $Information[0]['title'],
                    "email"=>$Information[0]['email'],
                    "name"=> $Information[0]['name'],
                    "job1"=> $Information[0]['job1'],
                    "job2"=>$Information[0]['job2'],
                    "aboutmy"=> $Information[0]['aboutmy'],
                    "address"=> $Information[0]['Address'],
                    "number"=> $Information[0]['number'],

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
                "Services"=>$Services,
                "Skills"=> $Skills ,
                "Resomes"=> $Resomes ,
                "Education"=> $Education ,
                "Projects"=> $Projects ,
                "Comments"=> $Comments ,
            ]);


        } catch (ModelNotFoundException $e) {
           abort(404);
        }
        
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
