@extends('baseUser.master')

@section('pagecontent')
<div class="container-fluid" style="margin-bottom: 10px">
    <div class="col-12" style="margin-top: 10px">
        <h1>@lang('edu.lbl-newcourse')</h1>
        <form action="{{ route('teacher.courses.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">@lang('edu.lbl-cname')</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="description">@lang('edu.lbl-cdesc')</label>
                <textarea name="description" id="description" class="form-control" rows="4" required></textarea>
            </div>

            <h3>@lang('edu.lbl-cmaterial')</h3>
            <div id="materials">
                <div class="form-group">
                    <label for="material_name">@lang('edu.lbl-cmname')</label>
                    <input type="text" name="materials[0][name]" class="form-control">
                    <label for="material_link">@lang('edu.lbl-cmlink')</label>
                    <input type="url" name="materials[0][link]" class="form-control">
                </div>
            </div>

            <br>

            <button type="button" id="add-material" class="btn btn-success">@lang('edu.btn-addmaterial')</button>

            <button type="submit" class="btn btn-success">@lang('edu.btn-createcourse')</button>
        </form>
    </div>
</div>


<script>
    let materialIndex = 1;
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