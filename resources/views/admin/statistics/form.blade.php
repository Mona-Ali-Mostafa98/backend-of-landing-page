<div class="row mb-4">
    <label for="title" class="col-sm-2 col-form-label">العنوان</label>
    <div class="col-sm-10">
        <input name="title" type="text" id="title" placeholder="ادخل عنوان للاحصائيه"
            value="{{ old('title', $statistic->title) }}" class="form-control @error('title') is-invalid @enderror">
        @error('title')
            <p class="invalid-feedback">{{ $message }}</p>
        @enderror
    </div>
</div>

<div class="row mb-4">
    <label for="counter" class="col-sm-2 col-form-label">العداد</label>
    <div class="col-sm-10">
        <input name="counter" type="text" id="counter" placeholder="ادخل العداد الخاص بالاحصائيه"
            value="{{ old('counter', $statistic->counter) }}"
            class="form-control @error('counter') is-invalid @enderror">
        @error('counter')
            <p class="invalid-feedback">{{ $message }}</p>
        @enderror
    </div>
</div>

<div class="row mb-4">
    <label for="status" class="col-sm-2 col-form-label">الحاله</label>
    <div class="col-sm-10">
        <select name="status" id="status" class="form-select @error('status') is-invalid @enderror">
            <option value="show" @if ($statistic->status == 'show' or old('status') == 'show') selected @endif>Show
            </option>
            <option value="hide" @if ($statistic->status == 'hide' or old('status') == 'hide') selected @endif>Hide
            </option>
        </select>
        @error('status')
            <p class="invalid-feedback">{{ $message }}</p>
        @enderror
    </div>
</div>
<div class="text-center">
    <button type="submit" class="btn btn-primary">حفظ</button>
</div>
