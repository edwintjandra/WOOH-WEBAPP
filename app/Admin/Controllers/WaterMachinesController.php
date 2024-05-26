<?php

namespace App\Admin\Controllers;

use App\Models\WaterMachines;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class WaterMachinesController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'WaterMachines';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new WaterMachines());

        $grid->column('id', __('Id'));
        $grid->column('location_detail', __('Location detail'));
        $grid->column('picture_url', __('Picture url'));
        $grid->column('location_url', __('Location url'));

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
        $show = new Show(WaterMachines::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('location_detail', __('Location detail'));
        $show->field('picture_url', __('Picture url'));
        $show->field('location_url', __('Location url'));
        

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new WaterMachines());

        $form->text('location_detail', __('Location detail'));
        $form->text('picture_url', __('Picture url'));
        $form->text('location_url', __('Location url'));

        return $form;
    }
}
