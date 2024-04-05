<?php
namespace App\Http\Controllers;


use App\Models\Books;
use App\katalog;
use App\Models\Member;
use App\Models\Publisher;
use App\Pengarang;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;

class HomeController extends Controller
{
    public function home()
    {
    //     $total_anggota = Member::count();
    //     $total_buku = Books::count();
    //     $total_peminjaman = Transaction::whereMonth('date_start', date('m'))->count();
    //     $total_penerbit =  Publisher::count();

    //     $data_donut = Books::select(DB::raw("COUNT(publisher_id)as total"))->groupBy('publisher_id')->orderBy('publisher_id','asc')->pluck('total');
    //     $label_donut = Publisher::orderBy('publisher_id','asc')->join('books', 'books.publisher_id', '=', 'publishers.id')->groupBy('name', 'publisher.id')->pluck('name');
    //     $label_bar = ['Peminjaman'];
    //     $data_bar = [];

    //     foreach($label_bar as $key => $value) {
    //         $data_bar[$key]['label']=$label_bar[$key];
    //         $data_bar[$key]['backgroundColor']= 'rgba(60, 141, 188, 0.9)';
    //         $data_month = [];

    //         foreach(range(1,12) as $month) {
    //             $data_month[]= Transaction::select(DB::raw("COUNT(*) as total"))->whereMonth('date_start', $month)->first()->total;
    //     }
    //     $data_bar[$key]['data']=$data_month;
    // }
    // return view('home', compact('total_buku', 'total_anggota', 'total_peminjaman', 'total_penerbit', 'data_donut', 'label_donut'));

}

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $total_anggota = Member::count();
        $total_buku = Books::count();
        $total_peminjaman = Transaction::whereMonth('date_start', date('m'))->count();
        $total_penerbit =  Publisher::count();

        $data_donut = Books::select(DB::raw("COUNT(publisher_id)as total"))->groupBy('publisher_id')->orderBy('publisher_id','asc')->pluck('total');
        $label_donut = Publisher::orderBy('publisher_id','asc')->join('books', 'books.publisher_id', '=', 'publishers.id')->groupBy('name')->pluck('name');
        $label_bar = ['Peminjaman'];
        $data_bar = [];

        foreach($label_bar as $key => $value) {
            $data_bar[$key]['label']=$label_bar[$key];
            $data_bar[$key]['backgroundColor']= 'rgba(60, 141, 188, 0.9)';
            $data_month = [];

            foreach(range(1,12) as $month) {
                $data_month[]= Transaction::select(DB::raw("COUNT(*) as total"))->whereMonth('date_start', $month)->first()->total;
        }
        $data_bar[$key]['data']=$data_month;
    }
    return view('home', compact('total_buku', 'total_anggota', 'total_peminjaman', 'total_penerbit', 'data_donut', 'label_donut'));

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
        // return view('home');
    }
}
