<?php
namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\Member;
use App\Models\Publisher;
use App\Models\Transaction;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //$books = Member::with('user')->get();
        //$books = Book::with('publisher')->get();
        //$publishers = Publisher::with('books')->get();

        //no 1
        $data = Member::select('*')
                    ->join('users','users.member_id','=','members.id')
                    ->get();

        //no2
        $data2 = Member::select('*')
                    ->leftjoin('users','users.member_id','=','members.id')
                    ->where('users.id', NULL)
                    ->get();

        //no3
        $data3 = Transaction::select('members.id', 'members.name')
                    ->rightjoin('members','members_id','=','transactions.members_id')
                    ->where('transactions.member_id', NULL)
                    ->get();

        //no4
        $data4 = Member::select('members.id', 'members.name', 'members.phone_number')
                    ->join('transactions','transactions.members_id','=','members_id')
                    ->orderBy('members_id', 'asc')
                    ->get();


        return $data4;
        return view('home');
    }
}
