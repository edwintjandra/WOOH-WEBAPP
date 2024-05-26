<?php

namespace App\Admin\Controllers;

use App\Models\Order;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Encore\Admin\Layout\Content; 

class OrderController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Order';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Order());

        $grid->column('id', __('Id'));
        $grid->column('user_name', __('User name'));
        $grid->column('package_name', __('Package name'));
        $grid->column('address', __('Address'));
        $grid->column('status', __('Status'));
        $grid->column('total_price', __('Total price'));

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
        $show = new Show(Order::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('user_name', __('User name'));
        $show->field('package_name', __('Package name'));
        $show->field('address', __('Address'));
        $show->field('status', __('Status'));
        $show->field('total_price', __('Total price'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Order());

        $form->number('user_id', __('User id'));
        $form->number('water_package_id', __('Water package id'));
        $form->text('user_name', __('User name'));
        $form->text('package_name', __('Package name'));
        $form->text('address', __('Address'));
        $form->text('status', __('Status'))->default('pending');
        $form->decimal('total_price', __('Total price'));

        return $form;
    }

    
    public function create(Content $content)
    {
        abort(403, 'Creation of orders is not allowed.');
    }

   
    public function store()
    {
        abort(403, 'Creation of orders is not allowed.');
    }
}
