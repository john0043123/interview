<?php

namespace App\Admin\Controllers;

use App\Enums\PortfolioCategories;
use App\Models\Portfolio;
use App\Models\PortfolioCategory;
use App\Models\PortfolioDetail;
use App\Models\PortfolioLang;
use App\Models\PortfolioType;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class PortfolioController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Portfolio';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Portfolio());

        $grid->column('id', __('Id'))->sortable();

        $grid->column('detail.name', __('Name'));

        $grid->column('detail.created_at', __('Created at'))->sortable();
        $grid->column('detail.updated_at', __('Updated at'));

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
        $show = new Show(Portfolio::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('type', __('Type'));
        $show->field('year', __('Year'));
        $show->field('category.name', __('Category'));
//        $show->field('lang.display_name', __('Lang'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Portfolio());

        $form->text('detail.name', __('Name'));
        $form->text('detail.type', __('Type'));
        $form->text('detail.year', __('Year'));
        $form->select('detail.category', __('Category'))->options(PortfolioCategories::toArray());

        $form->hidden('detail.locale')->default(app()->getLocale() ?? 'en');

        $form->multipleImage('images','Images')->pathColumn('path')->removable()->sortable()->uniqueName();

        return $form;
    }
}
