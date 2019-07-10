<?php

namespace App\Admin\Controllers;

use App\VideoModel;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class VideoController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\VideoModel';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new VideoModel);

        $grid->column('vid', __('Vid'));
        $grid->column('path', __('Path'));
        $grid->column('add_time', __('Add time'));
        $grid->column('title', __('Title'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(VideoModel::findOrFail($id));

        $show->field('vid', __('Vid'));
        $show->field('path', __('Path'));
        $show->field('add_time', __('Add time'));
        $show->field('title', __('Title'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new VideoModel);

        $form->number('vid', __('Vid'));
        $form->text('path', __('Path'));
        $form->number('add_time', __('Add time'));
        $form->text('title', __('Title'));

        return $form;
    }
}
