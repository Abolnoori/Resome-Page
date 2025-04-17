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
use OpenApi\Annotations as OA;
class HomeController extends Controller
{

}