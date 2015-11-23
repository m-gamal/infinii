<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Members;

class MembersController extends Controller
{
    public function listAllPublishers()
    {
        $publishers = Members::publishers();
        $dataView   = [
            'publishers' =>   $publishers
        ];

        return view('admin.publishers.list', $dataView);   
    }

    public function listAllPartners()
    {
        $partners = Members::partners();
        $dataView   = [
            'partners' =>   $partners
        ];

        return view('admin.partners.list', $dataView);
    }

    public function listAllCustomers()
    {
        $customers = Members::customers();
        $dataView   = [
            'customers' =>   $customers
        ];

        return view('admin.customers.list', $dataView);
    }

    public function listAllAffiliates()
    {
        $affiliates = Members::affiliates();
        $dataView   = [
            'affiliates' =>   $affiliates
        ];

        return view('admin.affiliates.list', $dataView);
    }

    public function listAllReferrers()
    {
        $referrers = Members::referrers();
        $dataView   = [
            'referrers' =>   $referrers
        ];

        return view('admin.referrers.list', $dataView);
    }

    public function doDelete($id)
    {
        $member  =   Members::findOrFail($id);

        try {
            $member->delete();
            return redirect()->back()->with('message','Member has been deleted successfully !');
        } catch (ParseException $ex) {
            echo 'Failed to delete this member , with error message: ' . $ex->getMessage();
        }
    }
}