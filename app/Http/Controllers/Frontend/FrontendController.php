<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Model\Blog;
use App\Model\Job;
use App\Model\Content;

class FrontendController extends Controller
{
    public $defaultData = array();
    public function __construct()
    {
    }
    public function defaultData()
    {
    }
}
