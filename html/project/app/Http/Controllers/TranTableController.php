<?php

namespace App\Http\Controllers;

use App\Models\TranTable;
use Illuminate\Http\Request;

class TranTableController extends Controller
{
        /**
    * Display a listing of the resource.
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function index(Request $request){
        switch($request['axreq']){
        case 'All':
            $TranTableData = TranTable::all();
        break;

        case 'Single':
            $id = $request['id'];
            $TranTableData = TranTable::where('id',$id)->first(); 
        break;

        case 'Update':
            $TranTableData = TranTable::find($request['id']);

            //更新データ
            $TranTableData->id = $request['id'];
            $TranTableData->member_id = $request['member_id'];
            $TranTableData->product_name = $request['product_name'];
            $TranTableData->buy_date = $request['buy_date'];
            $TranTableData->quantity = $request['quantity'];
            $TranTableData->member_id = $request['member_id'];
            $TranTableData->save();
        break;

        case 'AddSingle':
            $TranTableData = new TranTable();

            //新規データ
            $TranTableData->id = $request['id'];
            $TranTableData->member_id = $request['member_id'];
            $TranTableData->product_name = $request['product_name'];
            $TranTableData->buy_date = $request['buy_date'];
            $TranTableData->quantity = $request['quantity'];
            $TranTableData->member_id = $request['member_id'];
            $TranTableData->save();
        break;

        //複数レコード更新【未実装】
        case 'UpdateMulti':
        //$TranTableData= TranTable::all();::where('id',8)->get();
        break;

        //複数レコード追加【未実装】
        case 'AddMulti':
        //$TranTableData= TranTable::all();::where('id',8)->get();
        break;

        //検索
        case 'Search':
            $TranTableQuery = TranTable::query();
            $search_request_datas = json_decode( $request->search_data , true ) ;

        foreach($search_request_datas as $search_data){
            if(strcmp($search_data['orand'], "or") == 0){
                $TranTableQuery = $TranTableQuery->orWhere($search_data['column'],$search_data['sign'] ,$search_data['value']);
            }else{
                $TranTableQuery = $TranTableQuery->Where($search_data['column'],$search_data['sign'] ,$search_data['value']);
            }
        }
        $TranTableData = $TranTableQuery->get();
        break;

        //削除フラグ更新【未実装】
        case 'DelFlg':
        //$TranTableData= TranTable::all();::where('id',8)->get();
        break;

        //削除【未実装】
        case 'Delete':
        //$TranTableData= TranTable::all();::where('id',8)->get();
        break;

        default:
            $TranTableData = TranTable::all();
        break;
        }
        
    return $TranTableData;
    }

}
