<table id="datatable" class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>{{ trans('ID') }}</th>
            <th>{{ trans('Name') }}</th>
            <th>{{ trans('Status') }}</th>
            <th>{{ trans('Image') }}</th>

            <th>{{ trans('Action') }}</th>
        </tr>
    </thead>
    <tbody id="objectList">
        @if (count($CategoryBlogs) > 0)
            @foreach ($CategoryBlogs as $row)
                <tr id="record-{{ $row->id }}">
                    <td>{{ $row->id }}</td>
                    <td>
                        {{ $row->cat_name }} <br>
                        <span class="text-primary badge rounded-pill">{{ $row->cat_slug }}</span>
                    </td>
                    <td>
                        {{-- {{$row->status==1? "On":"OFF"}} --}}
                        <input id="status" name="status" data-id="{{ $row->id }}"
                            {{ $row->status ? 'checked' : '' }} title="Status" type="checkbox"
                            class="ace-switch input-lg ace-switch-yesno bgc-green-d2 text-grey-m2" />
                    </td>
                    <td>
                        <a class="photoswipe" href="{{ $row->cat_img }}" data-width="165" data-height="165"
                            data-caption="  {{ $row->cat_name }}">
                            <img onerror="this.src='{{ asset('images/place_holder.png') }}'" width="48"
                                height="48" src="{{ asset('storage/category_blogs/' . $row->cat_img) }}"
                                class="rounded" style="object-fit:cover;width:48px">
                        </a>
                    </td>
                    <td>

                        <a href="#" class="btn btn-primary btn-sm"
                            x-on:click='data_record = @json($row)'
                            onclick="edit({{ collect($row) }})"><i class="fa fa-edit"></i></a>

                        <a href="#" class="btn btn-danger btn-sm bg-danger-danger text-white"
                            onclick="formAlertDelete('{{ route('admin.category-blogs.destroy', $row->id) }}','#record-{{ $row->id }}')">
                            <i class="fa fa-trash"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="6" alignt="center">
                    {{ trans('No Data Found') }}
                </td>
            </tr>
        @endif
    </tbody>
    <tfoot>
        <tr>
            <th>{{ trans('ID') }}</th>
            <th>{{ trans('Name') }}</th>
            <th>{{ trans('Status') }}</th>
            <th>{{ trans('Image') }}</th>
            <th>{{ trans('Action') }}</th>
        </tr>
    </tfoot>
</table>
