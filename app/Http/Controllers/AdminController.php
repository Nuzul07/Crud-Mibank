<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;
use App\Usermibank;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
	{
		return view('admin.index');
	}

	public function indexusermibank()
	{
		return view('admin.usermibank.index');
	}

	public function addusermibank()
	{
		return view('admin.usermibank.add');
	}

	public function saveusermibank(Request $r)
	{
		$n = new Usermibank;
		$n->name = $r->input('name');
		$n->password = $r->input('password');
		$n->balance = $r->input('balance');
		$n->save();
		return redirect(url('admin/usermibank'));
	}

	public function editusermibank($id)
	{
		$usermibank = Usermibank::find($id);
		return view('admin.usermibank.edit')->with('usermibank',$usermibank);
	}

	public function updateusermibank(Request $r)
	{
		$u = Usermibank::find($r->input('id'));
		$u->name = $r->input('name');
		$u->password = $r->input('password');
		$u->balance = $r->input('balance');
		$u->save();
		return redirect(url('admin/usermibank'));
	}

	public function deleteusermibank($id)
	{
		$usermibank = Usermibank::find($id);
		$usermibank->delete();
		return redirect(url('admin/usermibank'));
	}

	public function indextransaction()
	{
		return view('admin.transaction.index');
	}

	public function addtransaction()
	{
		return view('admin.transaction.add');
	}

	public function savetransaction(Request $r)
	{
		$n = new Transaction;
		$n->id_mibanks = $r->input('id_mibanks');
		$n->amount = $r->input('amount');
		$n->save();
		return redirect(url('admin/transaction'));
	}

	public function edittransaction($id)
	{
		$transaction = Transaction::find($id);
		return view('admin.transaction.edit')->with('transaction',$transaction);
	}

	public function updatetransaction(Request $r)
	{
		$n = Transaction::find($r->input('id'));
		$n->amount = $r->input('nama_pemarkir');
		$n->save();
		return redirect(url('admin/transaction'));
	}

	public function deletetransaction($id)
	{
		$transaction = Transaction::find($id);
		$transaction->delete();
		return redirect(url('admin/transaction'));
	}
}
