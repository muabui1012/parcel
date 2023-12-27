<?php

namespace App\Http\Controllers\api;

use App\Models\Parcel;
use App\Models\Warehouse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class WarehouseController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => []]);


    }

    //get all
    public function index(Request $request) {
        $wh = Warehouse::all();
        if ($wh->count() > 0) {
            return response()->json([
                'status' => 200,
                'warehouse' => $wh
            ], 200);
        } else {
            return response()->json([
                'status' => 404,
                'message' => "Not found any wh"
            ], 404);
        }
    }

    //get by id
    public function show(Request $request) {
        $id = $request->id;
        $wh = Warehouse::find($id);
        if ($wh->count() > 0) {
            return response()->json([
                'status' => 200,
                'parcel' => $wh
            ], 200);
        } else {
            return response()->json([
                'status' => 404,
                'message' => "Not found any office"
            ], 404);
        }
    }

    //create new
    public function store(Request $request) {
        $validator = Validator::make($request->all(),[
            'name' => 'required', 
            
        ]);
        if ($validator->fails()) {
            return response()->json([
                'error' => $validator->errors(),
            ], 400);
        } else {
            $wh = Warehouse::create(array_merge(
                $validator->validated(), 
            ));
        }
        return response()->json([
            'message' => "created successfully", 
            'office' => $wh
        ], 201);
        
    }


    //delete
    public function destroy(Request $request, int $id) {
        //$id = $request->id;
        $wh = Warehouse::find($id);
        if ($wh){
            $wh->delete();
            return response()->json([
                'status' => 200, 
                'message' => "Warehouse deleted successfully"
            ], 200);
        } else {
            return response()->json([
                'status' => 404, 
                'message' => "Smth went wrong"
            ], 404);
        }

    }

    //update
    public function update(Request $request, $id) {
        //$id = $request->id;
        $validator = Validator::make($request->all(), [
            // 'name' => 'required|string'
        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'errors' => $validator->messages()
            ], 422);
        } else {
            $warehouse = Warehouse::find($id);
            $warehouse -> update([
                'name' => $request->name,
                'managerid' => $request->managerid
            ]);
                
        }
        if ($warehouse) {
            return response()->json([
                'message' => "OK"
            ]);
        }
    }

    public function addIncomingFromOffice($officeID, $parcelID) {
        //$parcel = Parcel::where('id', $parcelID);
        $this_wh = Warehouse::where('officeID', $officeID);
        $jsonlist = $this_wh->incomingFromWarehouse;
        $arr = json_decode($jsonlist);
        array_push($arr, $parcelID);
        $jsonarr = json_encode($arr);
        $this_wh->update([
            'incomingFromOffice' => $jsonarr
        ]);
    }
}
