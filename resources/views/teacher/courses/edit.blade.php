@extends('baseUser.master')

@section('pagecontent')
<div class="container-fluid" style="margin-bottom: 10px">
    <div class="col-12" style="margin-top: 10px">
        <h1>@lang('edu.lbl-editcourse')</h1>
        <form action="{{ route('teacher.courses.update', $course->id) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="form-group" style="margin-top: 10px">
                <label for="name">@lang('edu.lbl-cname')</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $course->name }}" required>
            </div>

            <div class="form-group" style="margin-top: 10px">
                <label for="description">@lang('edu.lbl-cdesc')</label>
                <textarea name="description" id="description" class="form-control" rows="4" required>{{ $course->description }}</textarea>
            </div>

            <h3 style="margin-top: 10px">@lang('edu.lbl-cmaterial')</h3>
            <div id="materials">
                @foreach($course->materials as $index => $material)
                    <div class="form-group" style="margin-top: 10px; margin-bottom: 10px">
                        <label for="material_name">@lang('edu.lbl-cmname')</label>
                        <input type="text" name="materials[{{ $index }}][name]" class="form-control" value="{{ $material->name }}">
                        <label for="material_link">@lang('edu.lbl-cmlink')</label>
                        <input type="url" name="materials[{{ $index }}][link]" class="form-control" value="{{ $material->link }}">
                    </div>
                @endforeach
            </div>
            <br>

            <button type="button" id="add-material" class="btn btn-success">@lang('edu.btn-addmaterial')</button>
            
            <button type="submit" class="btn btn-success">@lang('edu.btn-updatecourse')</button>
        </form>
    </div>
</div>


<script>
    let materialIndex = {{ $course->materials->count() }};
    document.getElementById('add-material').addEventListener('click', function() {
        const materialsDiv = document.getElementById('materials');
        const newMaterial = `
            <div class="form-group">
                <label for="material_name">Material Name</label>
                <input type="text" name="materials[${materialIndex}][name]" class="form-control">
                <label for="material_link">Material Link</label>
                <input type="url" name="materials[${materialIndex}][link]" class="form-control">
            </div>
        `;
        materialsDiv.insertAdjacentHTML('beforeend', newMaterial);
        materialIndex++;
    });
</script>
@endsection