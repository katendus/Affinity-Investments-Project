<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PpgGrid2;
use Image;
use Illuminate\Support\Carbon;

class GridController extends Controller
{

    public function GridView(){

        // $grids = PpgGrid2::latest()->get();
        $grids = PpgGrid2::orderBy('id')->get();        
        return view('data.grid_view',compact('grids'));

    }


    public function AddGrid(){

        return view('data.add_record');

    }


    public function GridStore(Request $request){

        // APPLY FORM VALIDATION - ADDED BY KATO
        $request->validate([
            'First_Name' => 'required',
            'Last_Name' => 'required',
            'Phone_Number' => 'required',
        // CUSTOMIZE FORM VALIDATION MESSAGE - ADDED BY KATO
        ],[
            'First_Name.required' => 'Input First Name',
            'Last_Name.required' => 'Input Last Name',
            'Phone_Number.required' => 'Input Phone Number',
        ]);
        
        PpgGrid2::insert([

            'First_Name' => $request->First_Name,
            'Last_Name' => $request->Last_Name,
            'Phone_Number' => $request->Phone_Number,
            'Amount_Invested' => $request->Amount_Invested,
            'Profit_Amount' => $request->Profit_Amount,
            'Gross_Amount' => $request->Gross_Amount,
            'Days_Profit' => $request->Days_Profit,
            'Current_Profit_Amount' => $request->Current_Profit_Amount,
            'Withdrawable_Amount' => $request->Withdrawable_Amount,
            'Membership_Amount' => $request->Membership_Amount,
            'Date_Invested' => $request->Date_Invested,
            'Contract_Expire' => $request->Contract_Expire,
            'Bank_Name' => $request->Bank_Name,
            'Account_Name' => $request->Account_Name,
            'Bank_Account' => $request->Bank_Account,
            'Email_Address' => $request->Email_Address,
            'Password' => $request->Password,
            'Next_of_Keen' => $request->Next_of_Keen,
            'Phone_Number_Next_Of_Kin' => $request->Phone_Number_Next_Of_Kin,
            'Client_Agent' => $request->Client_Agent,
            'Client_Manager' => $request->Client_Manager,
            'Modified_By' => $request->Modified_By,
            'Modified_Date' => $request->Modified_Date,
            'Bitcoin_Crypto' => $request->Bitcoin_Crypto,
            'OneCoin_Crypto' => $request->OneCoin_Crypto,
            'OneCoin_Amount' => $request->OneCoin_Amount,
            'Ethereum_Crypto' => $request->Ethereum_Crypto,
            'Paxos_Crypto' => $request->Paxos_Crypto,
            'Amount_Converted' => $request->Amount_Converted,
            'Coins_Received' => $request->Coins_Received,
            'Date_Converted' => $request->Date_Converted,
            'Account_Status' => $request->Account_Status,
            'Special_Notes' => $request->Special_Notes,
            'Stanbic_Tran_ID' => $request->Stanbic_Tran_ID,
            'Stanbic_Tran_Date' => $request->Stanbic_Tran_Date,

            'created_at' => Carbon::now()
        ]);

        // SHOW NOTIFICATION MESSAGE - ADDED BY KATO
        $notification = array(
            'message' => 'Record Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }


        public function GridEdit($id){
        $grid = PpgGrid2::findOrFail($id);
        return view('data.grid_edit',compact('grid'));

    }


    public function GridUpdate(Request $request){

        $grid_id = $request->id;

        PpgGrid2::findOrFail($grid_id)->update([

            'First_Name' => $request->First_Name,
            'Last_Name' => $request->Last_Name,
            'Phone_Number' => $request->Phone_Number,
            'Amount_Invested' => $request->Amount_Invested,
            'Profit_Amount' => $request->Profit_Amount,
            'Gross_Amount' => $request->Gross_Amount,
            'Days_Profit' => $request->Days_Profit,
            'Current_Profit_Amount' => $request->Current_Profit_Amount,
            'Withdrawable_Amount' => $request->Withdrawable_Amount,
            'Membership_Amount' => $request->Membership_Amount,
            'Date_Invested' => $request->Date_Invested,
            'Contract_Expire' => $request->Contract_Expire,
            'Bank_Name' => $request->Bank_Name,
            'Account_Name' => $request->Account_Name,
            'Bank_Account' => $request->Bank_Account,
            'Email_Address' => $request->Email_Address,
            'Password' => $request->Password,
            'Next_of_Keen' => $request->Next_of_Keen,
            'Phone_Number_Next_Of_Kin' => $request->Phone_Number_Next_Of_Kin,
            'Client_Agent' => $request->Client_Agent,
            'Client_Manager' => $request->Client_Manager,
            'Modified_By' => $request->Modified_By,
            'Modified_Date' => $request->Modified_Date,
            'Bitcoin_Crypto' => $request->Bitcoin_Crypto,
            'OneCoin_Crypto' => $request->OneCoin_Crypto,
            'OneCoin_Amount' => $request->OneCoin_Amount,
            'Ethereum_Crypto' => $request->Ethereum_Crypto,
            'Paxos_Crypto' => $request->Paxos_Crypto,
            'Amount_Converted' => $request->Amount_Converted,
            'Coins_Received' => $request->Coins_Received,
            'Date_Converted' => $request->Date_Converted,
            'Account_Status' => $request->Account_Status,
            'Special_Notes' => $request->Special_Notes,
            'Stanbic_Tran_ID' => $request->Stanbic_Tran_ID,
            'Stanbic_Tran_Date' => $request->Stanbic_Tran_Date,

        ]);

        $notification = array(
            'message' => 'Record Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('ppg.grid')->with($notification);

    }




    public function GridDelete($id){

        $grid = PpgGrid2::findOrFail($id);

        PpgGrid2::findOrFail($id)->delete();

         $notification = array(
            'message' => 'Record Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }
}
