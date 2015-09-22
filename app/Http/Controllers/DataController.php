<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\DataHistoris;
use App\DataTwitter;
use App\SMA;
use App\SentiAnal;
use App\SVM;
use App\SVMuji;

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

	public function svmTable()
	{
		$SVMs = SVM::select(['id', 'SMA520', 'SMA550', 'SMA1020', 'SMA1050', 'SMA520P', 'SMA550P', 'SMA1020P', 'SMA1050P', 'pos', 'neg', 'label']);
		return Datatables::of($SVMs)->make();
	}

	public function svmujiTable()
	{
		$SVMujis = SVMuji::select(['id', 'SMA520', 'SMA550', 'SMA1020', 'SMA1050', 'SMA520P', 'SMA550P', 'SMA1020P', 'SMA1050P', 'pos', 'neg', 'label']);
		return Datatables::of($SVMujis)->make();
	}

	public function svmModel()
	{
		$str = "java -jar " . public_path() . "/aset/jar/SVM.jar";
		exec($str);
	}

	public function svmTrain($t, $c, $g)
	{
		$str = "java -jar " . public_path() . "/aset/jar/svmtrain.jar -t " . $t . " -c " . $c . " -g " . $g . " SVMData.data";
		exec($str);
	}

	public function svmPredict() 
	{
		$str = "java -jar " . public_path() . "/aset/jar/svmpredict.jar SVMdataTest.data SVMData.data.model output";
		return (exec($str));
	}

	public function updateOutput()
	{
		$str = "java -jar " . public_path() . "/aset/jar/JSON.jar";
		exec($str);
	}

}
