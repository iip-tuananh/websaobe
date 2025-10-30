<?php

namespace App\Http\Controllers\Admin;
use App\Helpers\FileHelper;
use App\Http\Controllers\Controller;
use App\Model\Admin\Block;
use App\Model\Admin\Purpose as ThisModel;
use App\Model\Admin\PurposeProduct;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Yajra\DataTables\DataTables;
use Illuminate\Http\Request;
use \stdClass;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;


class PurposeController extends Controller
{
    protected $view = 'admin.purposes';
    protected $route = 'purposes';

    public function index()
    {
        return view($this->view.'.index');
    }

    // Hàm lấy data cho bảng list
    public function searchData(Request $request)
    {
        $objects = ThisModel::searchByFilter($request);
        return Datatables::of($objects)
            ->editColumn('updated_at', function ($object) {
                return formatDate($object->updated_at);
            })
            ->addColumn('count_products', function ($object) {
                $count = $object->products()->count();
                $url = route('purposes.addProducts', $object->id);

                return '<a href="' . $url . '"'
                    .  ' class="badge badge-warning square-badge"'
                    .  ' target="_blank"'
                    .  ' title="Xem ' . $count . ' sản phẩm">'
                    .  $count
                    .  '</a>';
            })
            ->addColumn('action', function ($object) {
                $result = '';
                $result .= '<a href="javascript:void(0)" title="Sửa" class="btn btn-sm btn-primary edit"><i class="fas fa-pencil-alt"></i></a> ';
                $result .= '<a href="'.route('purposes.delete', $object->id).'" title="Xóa" class="btn btn-sm btn-danger remove-att"><i class="fas fa-times"></i></a>';
                return $result;
            })
            ->addIndexColumn()
            ->rawColumns(['name','action','products','count_products', 'url'])
            ->make(true);
    }

    public function create()
    {
        return view($this->view.'.create');
    }

    public function store(Request $request)
    {
        $json = new stdClass();

        $validate = Validator::make(
            $request->all(),
            [
                'name' => 'required|max:255',
            ]
        );

        if ($validate->fails()) {
            $json->success = false;
            $json->errors = $validate->errors();
            $json->message = "Thao tác thất bại!";
            return Response::json($json);
        }

        DB::beginTransaction();
        try {
            $object = new ThisModel();
            $object->name = $request->name;

            $object->save();

            DB::commit();
            $json->success = true;
            $json->message = "Thao tác thành công!";
            $json->data = $object;
            return Response::json($json);
        } catch (\Exception $e) {
            DB::rollBack();
            throw new \Exception($e->getMessage());
        }
    }

    public function show(Request $request,$id)
    {
        $object = ThisModel::findOrFail($id);
        if (!$object->canview()) return view('not_found');
        $object = ThisModel::getDataForShow($id);
        return view($this->view.'.show', compact('object'));
    }

    public function addProducts(Request $request,$id)
    {
        $object = ThisModel::getDataForEdit($id);

        foreach ($object->products as $product) {
            $product->cate_id = $product->category ? $product->category->name : '';
        }

        return view($this->view.'.add_product', compact('object'));
    }

    public function submitAddProducts(Request $request)
    {
        $json = new stdClass();

        $object = ThisModel::getDataForEdit($request->purpose_id);
        DB::beginTransaction();
        try {
            $productIds = json_decode($request->productIds, true) ?: [];
            $object->products()->sync($productIds);

            $object->save();

            DB::commit();
            $json->success = true;
            $json->message = "Thao tác thành công!";
            return Response::json($json);
        } catch (Exception $e) {
            DB::rollBack();
            throw new Exception($e->getMessage());
        }
    }

    public function update(Request $request, $id)
    {
        $json = new stdClass();

        $validate = Validator::make(
            $request->all(),
            [
                'name' => 'required|max:255',
            ]
        );

        if ($validate->fails()) {
            $json->success = false;
            $json->errors = $validate->errors();
            $json->message = "Thao tác thất bại!";
            return Response::json($json);
        }

        DB::beginTransaction();
        try {
            $object = ThisModel::findOrFail($id);

            $object->name = $request->name;


            $object->save();

            DB::commit();
            $json->success = true;
            $json->message = "Thao tác thành công!";
            $json->data = $object;
            return Response::json($json);
        } catch (Exception $e) {
            DB::rollBack();
            throw new Exception($e->getMessage());
        }
    }

    public function delete($id)
    {
        $object = ThisModel::findOrFail($id);

        PurposeProduct::query()->where('purpose_id', $object->id)->delete();

        $object->delete();

        $message = array(
            "message" => "Thao tác thành công!",
            "alert-type" => "success"
        );

        return redirect()->route($this->route.'.index')->with($message);
    }

    public function getDataForEdit($id) {
        $json = new stdclass();
        $json->success = true;
        $json->data = ThisModel::getDataForEdit($id);
        return Response::json($json);
    }

    public function editBlock($id) {
        $json = new stdclass();
        $json->success = true;
        $json->data = Block::getDataForEdit($id);
        return Response::json($json);
    }

    public function updateBlock(Request $request, $id)
    {
        $validate = Validator::make(
            $request->all(),
            [
                'image' => 'nullable|file|mimes:jpg,jpeg,png,webp|max:3000',
            ]
        );

        $json = new stdClass();

        if ($validate->fails()) {
            $json->success = false;
            $json->errors = $validate->errors();
            $json->message = "Thao tác thất bại!";
            return Response::json($json);
        }


        DB::beginTransaction();
        try {
            $object = Block::findOrFail($id);

            if ($request->image) {
                if($object->image) {
                    FileHelper::deleteFileFromCloudflare($object->image, $object->id, Block::class, 'image');
                }
                FileHelper::uploadFileToCloudflare($request->image, $object->id, Block::class, 'image');
            }

            $object->save();

            DB::commit();
            $json->success = true;
            $json->message = "Thao tác thành công!";
            return Response::json($json);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error($e);
            throw new Exception($e);
        }
    }


}
