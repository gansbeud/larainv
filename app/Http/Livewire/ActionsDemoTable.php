<?php

namespace App\Http\Livewire;
use Livewire\Component;
use App\Models\Item;
use App\Http\Livewire\Items;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class ActionsDemoTable extends LivewireDatatable
{
    public $model = Item::class;

    public function columns()
    {
        return [
            NumberColumn::name('id'),
            Column::name('sku'),
            Column::name('category'),
            Column::name('name'),
            Column::name('brandname'),
            Column::name('price'),
            Column::name('qty'),


            Column::callback(['id', 'name'], function ($id, $name) {
                return view('table-actions', ['id' => $id, 'name' => $name]);
            })
        ];
    }



}