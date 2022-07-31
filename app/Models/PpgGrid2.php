<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PpgGrid2 extends Model
{
    use HasFactory;
    protected $fillable = [
        'First_Name',
        'Last_Name',
        'Phone_Number',
        'Amount_Invested',
        'Profit_Amount',
        'Gross_Amount',
        'Days_Profit',
        'Current_Profit_Amount',
        'Withdrawable_Amount',
        'Membership_Amount',
        'Date_Invested',
        'Contract_Expire',
        'Bank_Name',
        'Account_Name',
        'Bank_Account',
        'Email_Address',
        'Password',
        'Next_of_Keen',
        'Phone_Number_Next_Of_Kin',
        'Client_Agent',
        'Client_Manager',
        'Modified_By',
        'Modified_Date',
        'Bitcoin_Crypto',
        'OneCoin_Crypto',
        'OneCoin_Amount',
        'Ethereum_Crypto',
        'Paxos_Crypto',
        'Amount_Converted',
        'Coins_Received',
        'Date_Converted',
        'Account_Status',
        'Special_Notes',
        'Stanbic_Tran_ID',
        'Stanbic_Tran_Date',

    ];
}
