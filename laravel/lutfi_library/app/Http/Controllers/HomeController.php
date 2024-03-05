<?php
namespace App\Http\Controllers;

use DB;
use App\Models\Books;
use App\katalog;
use App\Models\Member;
use App\Models\Publisher;
use App\Pengarang;
use App\Models\Transaction;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $total_anggota = Member::count();
        $total_buku = Books::count();
        $total_peminjaman = Transaction::whereMonth('tgl_pinjam', date('m'))->count();
        $total_penerbit =  Publisher::count();

        $data_donut = Books::select(DB::raw("COUNT(id_penerbit)as total"))->groupBy('id_penerbit')->orderBy('id_penerbit','asc')->pluck('total');
        $label_donut = Publisher::orderBy('id_penerbit','asc')->join('bukus', 'bukus.id_penerbit', '=', 'penerbits.id')->groupBy('nama_penerbit')->pluck('nama_penerbit');
        $label_bar = ['Peminjaman'];
        $data_bar = [];

        foreach($label_bar as $key => $value) {
            $data_bar[$key]['label']=$label_bar[$key];
            $data_bar[$key]['backgroundColor']= 'rgba(60, 141, 188, 0.9)';
            $data_month = [];

            foreach(range(1,12) as $month) {
                $data_month[]= Transaction::select(DB::raw("COUNT(*) as total"))->whereMonth('tgl_pinjam', $month)->first()->total;
        }
        $data_bar[$key]['data']=$data_month;
    }
    return view('admin.home', compact('total_buku', 'total_anggota', 'total_peminjaman', 'total_penerbit', 'data_donut', 'label_donut'));

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
        // return view('home');
    }
}
