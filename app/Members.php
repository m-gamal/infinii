<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\DB;

class Members extends Model
{
	public static function publishers()
    {
    	return \DB::table('members')->where('type', 'publisher')->get();
    }

	public static function partners()
    {
    	return \DB::table('members')->where('type', 'partner')->get();
    }

	public static function customers()
    {
    	return \DB::table('members')->where('type', 'customer')->get();
    }

	public static function affiliates()
    {
    	return \DB::table('members')->where('type', 'affiliate')->get();
    }


    public static function referrers()
    {
    	return \DB::table('members')->where('type', 'referrer')->get();
    }
}
