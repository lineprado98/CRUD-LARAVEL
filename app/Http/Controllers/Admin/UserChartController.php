<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Charts\UserChart;
use Illuminate\Http\Request;
use App\Models\User;
 use Carbon\Carbon;

class UserChartController extends Controller
{

    public function index()
    {
        $usuarios = User::all();
        $collection = collect();

        foreach ($usuarios as $mes =>$item) {
            $collection->push(['name'=>$item->name, 'mes'=>($item->created_at)->month]);
        }
        $usersBymes = $collection->groupBy('mes');


        return view('home', [ 'usersBymes' => $usersBymes ] );

    }


}
