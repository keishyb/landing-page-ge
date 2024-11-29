<?php

namespace App\Livewire;

use App\Models\Branch;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\ButtonGroupColumn;

class BranchDataTable extends DataTableComponent
{
    protected $model = Branch::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setTheadAttributes([
            'class' => 'bg-gradient-to-r from-yellow-500 to-yellow-600 text-white',
          ]);
        $this->setTbodyAttributes([
            'class' => 'bg-white lg:hover:bg-gray-100  mb-10 lg:mb-0',
          ]);
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->searchable(),
            Column::make("Nama", "nama")
                ->searchable(),
            Column::make("Alamat", "alamat")
                ->searchable(),
            Column::make("weekdays", "hari1")
                ->searchable(),
            Column::make("Jam", "jam1")
                ->searchable(),
            Column::make("weekend", "hari2")
                ->searchable(),
            Column::make("Jam", "jam2")
                ->searchable(),
            ButtonGroupColumn::make('aksi')
    ->attributes(function($row) {
        return [
            'class' => 'space-x-3',
        ];
    })
    ->buttons([
        LinkColumn::make('edit') // make() has no effect in this case but needs to be set anyway
            ->title(fn($row) => 'edit ' . $row->edit)
            ->location(fn($row) => route('edit-cabang', $row))
            ->attributes(function($row) {
                return [
                    'class' => 'my-2 border px-3 py-2 rounded-lg font-mont text-white text-sm bg-yellow-600',
                ];
            }),
        LinkColumn::make('delete')
            ->title(fn($row) => 'delete ' . $row->delete)
            ->location(fn($row) => route('delete-branch', $row))
            ->attributes(function($row) {
                return [
                    'target' => '_blank',
                    'class' => 'my-2 border px-3 py-2 rounded-lg font-mont text-white text-sm bg-red-600',
                ];
            }),
    ]),
        ];
    }
}
