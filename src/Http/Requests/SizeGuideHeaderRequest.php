<?php

namespace FriendsOfBotble\ProductSizeGuide\Http\Requests;

use Botble\Base\Enums\BaseStatusEnum;
use Botble\Support\Http\Requests\Request;
use Illuminate\Validation\Rule;

class SizeGuideHeaderRequest extends Request
{
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:250'],
            'slug' => ['required', 'string', 'max:120', Rule::unique('fob_size_guide_headers', 'slug')->ignore($this->route('size-guide-header'))],
            'category' => ['required', 'string', Rule::in(['general', 'size', 'measurement', 'unit'])],
            'status' => [Rule::in(BaseStatusEnum::values())],
            'order' => ['nullable', 'integer', 'min:0'],
        ];
    }
}
