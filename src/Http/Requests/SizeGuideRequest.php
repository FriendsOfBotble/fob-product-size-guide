<?php

namespace FriendsOfBotble\ProductSizeGuide\Http\Requests;

use Botble\Base\Enums\BaseStatusEnum;
use Botble\Support\Http\Requests\Request;
use Illuminate\Validation\Rule;

class SizeGuideRequest extends Request
{
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:250'],
            'description' => ['nullable', 'string', 'max:1000'],
            'image' => ['nullable', 'string', 'max:250'],
            'table_headers' => ['nullable', 'array'],
            'table_headers.*' => ['nullable', 'string', 'max:250'],
            'table_rows' => ['nullable', 'array'],
            'table_rows.*' => ['nullable', 'array'],
            'table_rows.*.*' => ['nullable', 'string', 'max:500'],
            'status' => [Rule::in(BaseStatusEnum::values())],
            'order' => ['nullable', 'integer', 'min:0', 'max:99999'],
        ];
    }

    public function attributes(): array
    {
        return [
            'name' => trans('plugins/fob-product-size-guide::size-guide.form.name'),
            'description' => trans('plugins/fob-product-size-guide::size-guide.form.description'),
            'image' => trans('plugins/fob-product-size-guide::size-guide.form.image'),
            'status' => trans('plugins/fob-product-size-guide::size-guide.form.status'),
            'order' => trans('plugins/fob-product-size-guide::size-guide.form.order'),
        ];
    }
}
