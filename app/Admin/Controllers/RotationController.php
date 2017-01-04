<?php

namespace App\Admin\Controllers;

use App\Rotation;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class RotationController extends Controller
{
    use ModelForm;

    /**
     * Index interface.
     *
     * @return Content
     */
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('轮播图');
            $content->description('轮播图管理');

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

            $content->header('修改轮播图');
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

            $content->header('上传轮播图');
            $content->description('');

            $content->body($this->form());
        });
    }

    public function destroy($id)
    {
        $ids = explode(',', $id);

        if (Rotation::destroy(array_filter($ids))) {
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

    public function update($id)
    {
        return $this->form()->update($id);
    }


    public function store()
    {
        return $this->form()->store();
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Admin::grid(Rotation::class, function (Grid $grid) {

            $grid->model()->orderBy('id', 'desc');

            $grid->id('分类ID')->sortable();

            $grid->thumb('轮播图');

            $grid->is_display('显示')->value(function ($is_display) {
                return $is_display ? '是' : '否';
            });
            $grid->released_at('发布时间');
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
        return Admin::form(Rotation::class, function (Form $form) {

            $filename = time().rand(000000,999999);
            $form->image('thumb','轮播图上传')->name(function ($file) use($filename) {
                return  $filename.'.'.$file->guessExtension();
            });
            $form->time('released_at', '发布时间')->format('YYYY-MM-DD HH:mm:ss');
            $form->radio('is_display','是否显示')->values([1 => '是', 0=> '否'])->default(1);
        });
    }
}
