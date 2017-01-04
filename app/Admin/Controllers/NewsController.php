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

use App\News;
use App\Category;

class NewsController extends Controller
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
    		$News = News::firstOrCreate(['title' => $request['title']]);
    		//print_r($request);
    	}*/

        return Admin::content(function (Content $content) {

            $content->header('新闻列表');
            $content->description('新闻列表管理');

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

            $content->header('编辑新闻');
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

            $content->header('添加新闻');
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

        if (News::destroy(array_filter($ids))) {
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
        return Admin::grid(News::class, function (Grid $grid) {

        	$grid->model()->orderBy('id', 'desc');

            $grid->id('分类ID')->sortable();

            $grid->title('新闻标题');

            $grid->column('category.name','新闻分类');

            $grid->author('作者');

            

            $grid->released_at('发布时间');
            $grid->is_display('显示?')->value(function ($is_display) {
                return $is_display ? '是' : '否';
            });
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
        return Admin::form(News::class, function (Form $form) {

            //$form->display('id', 'ID');
        	//$form->text('name', '分类名称');
            //$form->display('created_at', '创建时间');
            //$form->display('updated_at', '更新时间');

            // 显示记录id
    		//$form->display('id', 'ID');
    		$new_categories = array();
    		$categories = Category::all()->toArray();
    		foreach ($categories as $key => $value) {
    			$new_categories[$value['id']] = $value['name'];
    		}

            /*图片上传设置*/
            // 修改上传目录
            //$form->image('picture')->move('public/upload/news/');
            // 使用随机生成文件名 (md5(uniqid()).extension)
            //$form->image('picture')->uniqueName();

    		// 添加text类型的input框
    		$form->text('title', '新闻标题');
    		$form->select('category_id','分类')->options($new_categories);
    		$form->text('author', '作者');
            $filename = time().rand(000000,999999);
            $form->image('thumb','缩略图上传')->name(function ($file) use($filename) {
                return  $filename.'.'.$file->guessExtension();
            });
    		$form->time('released_at', '发布时间')->format('YYYY-MM-DD HH:mm:ss');
    		$form->editor('content', '正文');
    		$form->radio('is_display','是否显示')->values([1 => '是', 0=> '否'])->default(1);

    		/*$form->saving(function (Form $form) {

    			//dd($form->content);
    		    if ($form->content && $form->model()->content != $form->content) {
    		        $form->content = htmlspecialchars_decode($form->content);
    				dd($form->content);

    		    }
    		});*/

        });
    }

}
