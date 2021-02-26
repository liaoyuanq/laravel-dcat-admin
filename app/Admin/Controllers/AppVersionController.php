<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\AppVersion;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class AppVersionController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new AppVersion(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('name');
            $grid->column('version');
            $grid->column('admin_uid');
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();

            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');

            });
        });
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     *
     * @return Show
     */
    protected function detail($id)
    {
        return Show::make($id, new AppVersion(), function (Show $show) {
            $show->field('id');
            $show->field('name');
            $show->field('version');
            $show->field('admin_uid');
            $show->field('created_at');
            $show->field('updated_at');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new AppVersion(), function (Form $form) {
            $form->display('id');
            $form->text('name');
            $form->text('version');
            $form->text('admin_uid');

            $form->saving(function (Form $form) {
                $form->input('iconv', 'Marry');
            });

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
