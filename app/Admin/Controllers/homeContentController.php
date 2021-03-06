<?php

namespace App\Admin\Controllers;

use App\homeContent;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class homeContentController extends Controller
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

            $content->header('首页内容');
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

            $content->header('首页内容修改');
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

            $content->header('header');
            $content->description('');

            $content->body($this->form());
        });
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
        return Admin::grid(homeContent::class, function (Grid $grid) {
            $grid->disableCreation();
            $grid->disablePerPageSelector();
            $grid->disableBatchDeletion();
            $grid->disableFilter();
            $grid->disableExport();

            $grid->rows(function($row){
                if($row->id < 7) {
                    $row->actions('edit');
                }
            });
            $grid->id('ID')->sortable();
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
        return Admin::form(homeContent::class, function (Form $form) {

            $form->disableDeletion();
            $form->text('title','首页内容标题');
            $filename = time().rand(000000,999999);
            $form->image('thumb','缩略图上传')->name(function ($file) use($filename) {
                return  $filename.'.'.$file->guessExtension();
            });
            $form->editor('content', '正文');
        });
    }
}
