<div class="form-group mb-3">
    <label class="form-label" for="size_guide_id">
        {{ trans('plugins/fob-product-size-guide::size-guide.metabox.select_size_guide') }}
    </label>
    <select name="size_guide_id" id="size_guide_id" class="form-control select-search-full">
        <option value="">{{ trans('plugins/fob-product-size-guide::size-guide.metabox.select_size_guide_placeholder') }}</option>
        @foreach($sizeGuides as $id => $name)
            <option value="{{ $id }}" {{ $selectedSizeGuideId == $id ? 'selected' : '' }}>
                {{ $name }}
            </option>
        @endforeach
    </select>
    @if(!empty($helpText))
        <div class="form-text">{{ $helpText }}</div>
    @endif
</div>
