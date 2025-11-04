<?php

namespace FriendsOfBotble\ProductSizeGuide\Tables;

use Botble\Base\Facades\Html;
use Botble\Table\Abstracts\TableAbstract;
use Botble\Table\Actions\DeleteAction;
use Botble\Table\Actions\EditAction;
use Botble\Table\BulkActions\DeleteBulkAction;
use Botble\Table\BulkChanges\CreatedAtBulkChange;
use Botble\Table\BulkChanges\NameBulkChange;
use Botble\Table\BulkChanges\StatusBulkChange;
use Botble\Table\Columns\CreatedAtColumn;
use Botble\Table\Columns\FormattedColumn;
use Botble\Table\Columns\IdColumn;
use Botble\Table\Columns\ImageColumn;
use Botble\Table\Columns\NameColumn;
use Botble\Table\Columns\StatusColumn;
use Botble\Table\HeaderActions\CreateHeaderAction;
use FriendsOfBotble\ProductSizeGuide\Models\SizeGuide;
use Illuminate\Database\Eloquent\Builder;

class SizeGuideTable extends TableAbstract
{
    public function setup(): void
    {
        $this
            ->model(SizeGuide::class)
            ->addHeaderAction(CreateHeaderAction::make()->route('product-size-guide.create'))
            ->addActions([
                EditAction::make()->route('product-size-guide.edit'),
                DeleteAction::make()->route('product-size-guide.destroy'),
            ])
            ->addColumns([
                IdColumn::make(),
                ImageColumn::make(),
                NameColumn::make()->route('product-size-guide.edit'),
                FormattedColumn::make('table_rows')
                    ->title(trans('plugins/fob-product-size-guide::size-guide.table.rows_count'))
                    ->alignCenter()
                    ->width(100)
                    ->renderUsing(function (FormattedColumn $column) {
                        $item = $column->getItem();

                        $rowsCount = is_array($item->table_rows) ? count($item->table_rows) : 0;

                        return Html::tag('span', $rowsCount, ['class' => 'badge bg-blue text-white']);
                    }),
                StatusColumn::make(),
                CreatedAtColumn::make(),
            ])
            ->addBulkChanges([
                NameBulkChange::make(),
                StatusBulkChange::make(),
                CreatedAtBulkChange::make(),
            ])
            ->addBulkAction(DeleteBulkAction::make()->permission('product-size-guide.destroy'))
            ->queryUsing(function (Builder $query): void {
                $query->select([
                    'id',
                    'name',
                    'image',
                    'table_rows',
                    'status',
                    'created_at',
                ]);
            });
    }
}
