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
/**
 * @OA\Get(
 *     path="/api/{name}",
 *     summary="Get multilingual portfolio data for a user",
 *     description="Fetches user's public portfolio information including settings, services, skills, education, etc. in one or two languages (FA/EN).",
 *     operationId="getUserPage",
 *     tags={"User Portfolio"},
 *     @OA\Parameter(
 *         name="name",
 *         in="path",
 *         description="The username of the user (e.g., 'john_doe')",
 *         required=true,
 *         @OA\Schema(type="string")
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Successful response with user's portfolio data",
 *         @OA\JsonContent(
 *             @OA\Property(property="setting", type="object"),
 *             @OA\Property(property="fa", type="object", description="Data in Persian (if available)"),
 *             @OA\Property(property="en", type="object", description="Data in English (if available)")
 *         )
 *     ),
 *     @OA\Response(
 *         response=404,
 *         description="User not found",
 *         @OA\JsonContent(
 *             @OA\Property(property="Error", type="string", example="Page john_doe Not Found")
 *         )
 *     )
 * )
 */


    function index($name) {
        try {
            $User = User::where('user', $name)->firstOrFail()->user;
            $Setting = Setting::where('user', $User)->firstOrFail();
            $Setting->makeHidden(['id', 'bot-token', 'bot-id', 'created_at', 'updated_at']);

            $data = [];
            $langs = [];

            if ($Setting['bilingual'] == 'true' || $Setting['def-lang'] == 'fa') {
                $langs[] = 'fa';
            }
            if ($Setting['bilingual'] == 'true' || $Setting['def-lang'] == 'en') {
                $langs[] = 'en';
            }

            foreach ($langs as $lang) {
                $infoClass = $lang == 'fa' ? Information::class : InformationEn::class;
                $servicesClass = $lang == 'fa' ? Services::class : ServicesEn::class;
                $resomesClass = $lang == 'fa' ? Resomes::class : ResomesEn::class;
                $educationClass = $lang == 'fa' ? Education::class : EducationEn::class;
                $projectsClass = $lang == 'fa' ? Projects::class : ProjectsEn::class;
                $commentsClass = $lang == 'fa' ? Comments::class : CommentsEn::class;

                $data[$lang] = [
                    "information" => $infoClass::where('user', $User)->firstOrFail()->makeHidden(['id', 'created_at', 'updated_at']),
                    "links" => Links::where('user', $User)->first(['resome', 'telegram', 'instagram', 'linkedin', 'github']),
                    "counters" => Counters::where('user', $User)->first(['history', 'completion', 'satisfied', 'experience']),
                    "services" => $servicesClass::where('user', $User)->get(),
                    "skills" => Skills::where('user', $User)->get(['image', 'name', 'percentage']),
                    "resomes" => $resomesClass::where('user', $User)->get(['time', 'title', 'institute']),
                    "education" => $educationClass::where('user', $User)->get(['time', 'title', 'institute']),
                    "projects" => $projectsClass::where('user', $User)->get(),
                    "comments" => $commentsClass::where('user', $User)->get(),
                ];
            }

            return response()->json(["setting" => $Setting] + $data, 200);

        } catch (ModelNotFoundException $e) {
            return response()->json(['Error' => 'Page ' . $name . ' Not Found'], 404);
        }
    }
  





/**
 * @OA\Post(
 *     path="/api/contact/send",
 *     summary="Send contact message",
 *     tags={"Contact"},
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\JsonContent(
 *             required={"Reco","conName","conLName","conEmail","conPhone","conService","conMessage"},
 *             @OA\Property(property="Reco", type="string", example="john_doe"),
 *             @OA\Property(property="conName", type="string", example="Ali"),
 *             @OA\Property(property="conLName", type="string", example="Rezaei"),
 *             @OA\Property(property="conEmail", type="string", format="email", example="ali@example.com"),
 *             @OA\Property(property="conPhone", type="string", example="+989123456789"),
 *             @OA\Property(property="conService", type="string", example="Web Design"),
 *             @OA\Property(property="conMessage", type="string", example="I'd like a website.")
 *         )
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Success"
 *     ),
 *     @OA\Response(
 *         response=422,
 *         description="Validation error"
 *     )
 * )
 */





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
