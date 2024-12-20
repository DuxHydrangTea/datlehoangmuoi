<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Repositories\PostRepositoryInterface;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    protected $postRepositoryInterface;
    public function __construct(PostRepositoryInterface $postRepositoryInterface)
    {
        $this->postRepositoryInterface = $postRepositoryInterface;
    }

    public function index()
    {
        
        return view('client.index');
    }

}