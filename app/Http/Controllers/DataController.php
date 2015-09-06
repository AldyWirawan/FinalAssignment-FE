<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\DataHistoris;
use App\DataTwitter;
use App\SMA;
use App\SentiAnal;
use App\SVM;

use Illuminate\Http\Request;

use Datatables;

class DataController extends Controller {

	public function historisTable()
	{
		$DataHistoris = DataHistoris::select(['time', 'closeprice']);
        return Datatables::of($DataHistoris)->make();
	}

	public function smaTable()
	{
		$SMAs = SMA::select(['time', 'closeprice', 'sma5', 'sma10', 'sma20', 'sma50']);
        return Datatables::of($SMAs)->make();
	}

	public function tweetTable()
	{
		$rawtweets = DataTwitter::select(['date', 'text']);
		return Datatables::of($rawtweets)->make();
	}

	public function sentianalTable()
	{
		$sentianals = SentiAnal::select(['id', 'date', 'seg', 'pos', 'neg']);
		return Datatables::of($sentianals)->make();
	}

	public function paramTable()
	{

	}

	public function svmTable()
	{
		$SVMs = SVM::select(['id', 'SMA520', 'SMA550', 'SMA1020', 'SMA1050', 'SMA520P', 'SMA550P', 'SMA1020P', 'SMA1050P', 'pos', 'neg', 'label']);
		return Datatables::of($SVMs)->make();
	}

	public function svmModel()
	{
		$str = "java -jar " . public_path() . "/aset/jar/SVM.jar";
		exec($str);
	}

		public function svmTrain()
	{
		$str = "java -jar " . public_path() . "/aset/jar/svmtrain.jar SVMData.data";
		exec($str);
	}

}
