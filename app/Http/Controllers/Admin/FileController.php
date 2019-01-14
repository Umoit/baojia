<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facedes\Storage;
class FileController extends Controller
{
	//图片储存
    public function imageUpload(Request $request){
    	//后台PHP处理上传的文件 （laravel5.*）

       // $path =  $request->file('image_data')->store('uoloads');
        //$path =  Storage::disk('uploads')->put()$request->file('image_data')->store('uoloads');
        //$path = Storage::putFile('uploads', new File('/product/'),$request->file('image_data'));
       //        1.首先检查文件是否存在


        $this->validate($request, [
            'image_data' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $image = $request->file('image_data');
        $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/uploads');
        $image->move($destinationPath, $input['imagename']);

        $path = '/uploads/'.$input['imagename'];

        return (['code' => 0,'path' => $path]);

        //return ('http://esphots.test/uploads/1543916481.jpg');

    }

    // 上传图片
    public function imgUpload(Request $request) {


            $image = $request->file('file');
            $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads');
            $image->move($destinationPath, $input['imagename']);

            $path = route('home').'/uploads/'.$input['imagename'];

            



        exit();
        // 接收数据
        $file = $request->file('imageData');
        // 判断是否上传成功
        if (!$file->isValid() ) {
            return json_encode(['status' => 0,'message' => '文件上传失败']);
        }
        // 获取文件扩展名
        $ext = $file->getClientOriginalExtension();

        // 判断文件类型是否允许
        if (! in_array($ext,['jpg','png','gif'])) {
            return json_encode(['status' => 0,'message' => '文件类型不允许']);
        }

        // 为避免一个文件夹中的文件过多和文件名重复,所以需要设置上传文件夹和文件名
        $fileName = $this->setFilePath(_UPLOADS_.'/'.date('Y_m_d'),$ext);

        // 上传文件并判断
        if ( move_uploaded_file($file->getRealPath(),$fileName) ) {
            return json_encode([
                'status'  => 1,
                'message' => '文件上传成功',
                'img'     => $fileName
            ]);
        }
    }





}
