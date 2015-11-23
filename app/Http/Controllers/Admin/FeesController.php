<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\Admin\FeesRequest;
use App\Http\Controllers\Controller;
use App\Fees;

class FeesController extends Controller
{
    public function listAll()
    {
        $fees = Fees::all();
        $dataView   = [
            'fees' =>   $fees
        ];

        return view('admin.fees.list', $dataView);
    }

    public function add()
    {
        return view('admin.fees.add');
    }

    public function doAdd(FeesRequest $request)
    {
        $name       = $request->name;
        $type       = $request->type;
        $amount     = $request->amount;

        try {
            $fees = Fees::create(['name'=> $name, 'type'=> $type, 'amount'=> $amount]);
            return redirect()->back()->with('message','Fee has been added successfully !');
        } catch (ParseException $ex) {
            echo 'Failed to create new fee , with error message: ' . $ex->getMessage();
        }
    }

    public function edit($id)
    {
        $fee = Fees::findOrFail($id);
        $dataView   = [
            'fee' =>   $fee
        ];
        return view('admin.fees.edit', $dataView);
    }

    public function doEdit(FeesRequest $request, $id)
    {
        $name   = $request->name;
        $type   = $request->type;
        $amount = $request->amount;
        try {
            $editFee = Fees::findOrFail($id)->update(['name' => $name, 'type'=>$type, 'amount'=> $amount]);
            return redirect()->route('fees')->with('message','Fee has been updated successfully !');
        } catch (ParseException $ex) {
            echo 'Failed to create update this fee , with error message: ' . $ex->getMessage();
        }
    }

    public function doDelete($id)
    {
        $fee  =   Fees::findOrFail($id);

        try {
            $fee->delete();
            return redirect()->back()->with('message','Fee has been deleted successfully !');
        } catch (ParseException $ex) {
            echo 'Failed to delete this fee , with error message: ' . $ex->getMessage();
        }
    }
}