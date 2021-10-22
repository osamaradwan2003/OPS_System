<?php

namespace App\Http\Controllers;

use App\Models\EmptyModel;
use App\Rules\unique;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

abstract class BaseController extends Controller
{

    protected array $add_validation = [];
    protected array $add_columns = [];
    protected array $edit_columns = [];
    protected array $edit_validation = [];
    protected string $msg_attr = '';
    protected array $view = [];
    protected Model $model;

    public function getUnique($attr, $value): ?unique
    {
      if($attr != $value){
        return new unique();
      }
      return null;
    }

    public function add(Request $request) {
      if($request->isMethod('GET')){
        return view($this->view['name'], $this->view['data']);
      }elseif ($request->isMethod('POST')){
        $request->validate($this->add_validation[0],$this->add_validation[1]);
        $this->model::create($this->add_columns);
        return back()->with('status', ['code'=>200, 'msg'=>$this->msg_attr.' '. $request->name .' Added Successfully']);
      }else{
        http_response_code(404);
        return view('errors.404');
      }
    }

    public function edit(Request $request, $id){
      $data = $this->model::where('id', '=', $id)->first() ?? new EmptyModel();
      if($request->isMethod('get')){
        if(empty($data->toArray())){
          return back()->with('status', ['code'=>404, 'msg'=>'Ops '. $this->msg_attr .' not found!']);
        }
        return view($this->view['name'], $this->view['data']);
      }elseif($request->isMethod('post')){
        if(!empty($data->toArray())){
          $request->validate($this->edit_validation[0], $this->edit_validation[1]);
          $data->update($this->edit_columns);
          return back()->with('status', ['code'=>200, 'msg'=>$this->msg_attr . ' Updated Successfully']);
        }else{
          return back()->with('status', ['code'=>404, 'msg'=>'Ops '. $this->msg_attr .' not found!']);
        }

      }
      http_response_code(200);
      return view('errors.404');
    }

    abstract function all(Request $request);

    function getData(Request $request, $query = null): \Illuminate\Http\JsonResponse
    {
      $query = $query ?? $this->model::query();
      return DataTables::eloquent($query)
        ->toJson();
    }

    public function delete(Request $request, $id): \Illuminate\Http\RedirectResponse
    {
      $model = $this->model::where('id', '=', $id)->first() ?? new EmptyModel();
      if(!empty($model->toArray())){
        $model->delete();
        return back()->with('status', ['code'=>200, 'msg' => $this->msg_attr . ': ( ' . $model->name . ' ) was Deleted Successfully']);
      }
      return back()->with('status', ['code'=>400, 'msg' => 'Not Found Store with ID: ' . $id]);
    }

}
