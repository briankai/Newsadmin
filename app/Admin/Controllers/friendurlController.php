<?php

namespace App\Admin\Controllers;

use Illuminate\Http\Request;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;
use Encore\Admin\Widgets\Box;

use App\friendurl;

class friendurlController extends Controller
{
    use ModelForm;

    /**
     * Index interface.
     *
     * @return Content
     */
    public function index(Request $request)
    {	
    	//新建表单数据处理
    	/*if(!empty($request['title'])){
    		//dd($request);
    		$friendurl = friendurl::firstOrCreate(['title' => $request['title']]);
    		//print_r($request);
    	}*/

        return Admin::content(function (Content $content) {

            $content->header('友情链接');
            $content->description('');

            $content->body($this->grid());
        });
    }


    /**
     * Edit interface.
     *
     * @param $id
     * @return Content
     */
    public function edit($id)
    {
        return Admin::content(function (Content $content) use ($id) {

            $content->header('编辑友情链接');
            $content->description('');

            $content->body($this->form()->edit($id));
        });
    }

    /**
     * Create interface.
     *
     * @return Content
     */
    public function create()
    {

        return Admin::content(function (Content $content) {

            $content->header('添加友情链接');
            $content->description('');

            $content->body($this->form());
        });
    }


    /**
     * @param $id
     *
     * @return $this|\Illuminate\Http\RedirectResponse
     */
    public function update($id)
    {
        return $this->form()->update($id);
    }


    public function store()
    {
        return $this->form()->store();
    }


    public function destroy($id)
    {                                                 
        $ids = explode(',', $id);

        if (friendurl::destroy(array_filter($ids))) {
            return response()->json([
                'status'  => true,
                'message' => trans('admin::lang.delete_succeeded'),
            ]);
        } else {
            return response()->json([
                'status'  => false,
                'message' => trans('admin::lang.delete_failed'),
            ]);
        }
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Admin::grid(friendurl::class, function (Grid $grid) {

            $grid->model()->orderBy('id', 'desc');

            $grid->id('ID')->sortable();

            $grid->name('名称')->editable();

            $grid->created_at('创建时间');
            $grid->updated_at('更新时间');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(friendurl::class, function (Form $form) {

            //$form->display('id', 'ID');
            $form->text('name', '链接名称');
            $form->text('url', '链接地址');
        	//$form->text('displayorder', '排序id');
            //$form->display('created_at', '创建时间');
            //$form->display('updated_at', '更新时间');

        });
    }

}
