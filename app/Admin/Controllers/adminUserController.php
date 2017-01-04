<?php

namespace App\Admin\Controllers;

use App\adminUser;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class adminUserController extends Controller
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

            $content->header('管理员');
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

            $content->header('密码修改');
            $content->description('');

            $content->body($this->form()->edit($id));
        });
    }

    /**
     * Create interface.
     *
     * @return Content
     */
   /* public function create()
    {
        return Admin::content(function (Content $content) {

            $content->header('header');
            $content->description('description');

            $content->body($this->form());
        });
    }*/

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Admin::grid(adminUser::class, function (Grid $grid) {
            $grid->disableCreation();
            $grid->disablePerPageSelector();
            $grid->disableBatchDeletion();
            $grid->disableFilter();
            $grid->disableExport();
            $grid->id('ID')->sortable();
            $grid->name('管理员');
            $grid->username('用户名');
            $grid->created_at('创建时间');
            $grid->updated_at('更新时间');
            $grid->rows(function($row){
            	if($row->id % 3) {
                    $row->actions('edit');
               }
            });
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(adminUser::class, function (Form $form) {

            $form->disableDeletion();
            $form->display('id', 'ID');
            $form->text('username');
            $form->password('password');
            $form->saving(function(Form $form) {
              if($form->password && $form->model()->password != $form->password){
                   $form->password = bcrypt($form->password);
                }
             });
            $form->disableDeletion();
        });
    }
}
