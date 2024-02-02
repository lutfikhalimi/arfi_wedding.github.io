<?php
namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\Member;
use App\Models\Author;
use App\Models\Catalog;
use App\Models\Publisher;
use App\Models\Transaction;
use App\Models\TransactionDetail;
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
        //$members = Member::all();
        //$members = Member::with('user')->get();
        //$books = Books::with('publisher')->get();
        //$publishers = Publisher::with('books')->get();
        //$authors = Author::with('books')->get();
        //$catalogs = Catalog::with('books')->get();
        //$transactions = Transaction::with('member')->get();
        //$transactions_details = TransactionDetail::with('member')->get();

        //no 1
        /*$data = Member::select('*')
            ->join('users', 'users.members_id', '=', 'members.id')
            ->get();

        //no2
        $data2 = Member::select('*')
            ->leftjoin('users', 'users.member_id', '=', 'members.id')
            ->where('users.id', null)
            ->get();

        //no3
        $data3 = Transaction::select('members.id', 'members.name')
            ->rightjoin('members', 'members_id', '=', 'transactions.members_id')
            ->where('transactions.member_id', null)
            ->get();

        //no4
        $data4 = Member::select(
            'members.id',
            'members.name',
            'members.phone_number'
        )
            ->join('transactions', 'transactions.members_id', '=', 'members_id')
            ->orderBy('members_id', 'asc')
            ->get(); */

        //return $data2;
        return view('home');
    }
}
