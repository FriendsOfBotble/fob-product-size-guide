<?php

namespace FriendsOfBotble\ProductSizeGuide\Tables;

use Botble\Table\Abstracts\TableAbstract;
use Botble\Table\Actions\DeleteAction;
use Botble\Table\Actions\EditAction;
use Botble\Table\BulkActions\DeleteBulkAction;
use Botble\Table\BulkChanges\CreatedAtBulkChange;
use Botble\Table\BulkChanges\NameBulkChange;
use Botble\Table\BulkChanges\StatusBulkChange;
use Botble\Table\Columns\Column;
use Botble\Table\Columns\CreatedAtColumn;
use Botble\Table\Columns\IdColumn;
use Botble\Table\Columns\NameColumn;
use Botble\Table\Columns\StatusColumn;
use Botble\Table\HeaderActions\CreateHeaderAction;
use FriendsOfBotble\ProductSizeGuide\Models\SizeGuideHeader;
use Illuminate\Database\Eloquent\Builder;

class SizeGuideHeaderTable extends TableAbstract
{
    public function setup(): void
    {
        $this
            ->model(SizeGuideHeader::class)
            ->addHeaderAction(CreateHeaderAction::make()->route('size-guide-headers.create'))
            ->addActions([
                EditAction::make()->route('size-guide-headers.edit'),
                DeleteAction::make()->route('size-guide-headers.destroy'),
            ])
            ->addColumns([
                IdColumn::make(),
                NameColumn::make()->route('size-guide-headers.edit'),
                Column::make('slug')
                    ->title(trans('core/base::forms.slug')),
                Column::make('category')
                    ->title(trans('plugins/fob-product-size-guide::size-guide.headers.category'))
                    ->alignCenter(),
                Column::make('order')
                    ->title(trans('core/base::forms.order'))
                    ->alignCenter()
                    ->width(100),
                StatusColumn::make(),
                CreatedAtColumn::make(),
            ])
            ->addBulkChanges([
                NameBulkChange::make(),
                StatusBulkChange::make(),
                CreatedAtBulkChange::make(),
            ])
            ->addBulkAction(DeleteBulkAction::make()->permission('size-guide-headers.destroy'))
            ->queryUsing(function (Builder $query): void {
                $query->select([
                    'id',
                    'name',
                    'slug',
                    'category',
                    'order',
                    'status',
                    'created_at',
                ]);
            });
    }
}
