<select name="perPage" id="perPage" class="form-control" onchange="window.location.href = '?perPage=' + this.value"
    style="width: 100px;">
    <option value="">Per Page</option>
    @foreach ($options as $option)
        <option value="{{ $option }}">{{ $option }}</option>
    @endforeach
</select>
