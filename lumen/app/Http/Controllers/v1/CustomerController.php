<?php

namespace App\Http\Controllers\v1;

use App\Models\v1\Customer;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CustomerController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        try {
        $this->result->data = Customer::all();        
        return response()->json($this->result, Response::HTTP_OK);

        }catch(Exception $e) {
            $this->result->addException($e);
            return response()->json($this->result, Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function create(Request $request)
    {
        try {
            $customer = Customer::create($request->all());
            $customer->save();
            $this->result->data = $customer;

            return response()->json($this->result, Response::HTTP_CREATED);
        }catch(Exception $e) {
            $this->result->addException($e);
            return response()->json($this->result, Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function edit (Request $request)
    {
        try{
            
        }catch(Exception $e)
        {
            $this->result->addException($e);
            return response()->json($this->result, Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function delete(string $id)
    {
    }
}
