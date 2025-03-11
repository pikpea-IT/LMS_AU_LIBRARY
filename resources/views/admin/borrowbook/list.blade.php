<table id="datatable" class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>{{ trans('ID') }}</th>
            <th>{{ trans('Title') }}</th>
            <th>{{ trans('Description') }}</th>
            <th>{{ trans('Image') }}</th>
            <th>{{ trans('Status') }}</th>
            <th>{{ trans('Action') }}</th>
        </tr>
    </thead>
    <tbody id="objectList">
        <tr id="record">
            <td></td>
            <td>
                <br>
                <span class="text-primary badge rounded-pill"></span>
            </td>
            <td>

            </td>
            <td>
                <a class="photoswipe" href="" data-width="165" data-height="165" data-caption="">
                    <img onerror="this.src='{{ asset('images/place_holder.png') }}'" width="48" height="48"
                        src="{{ asset('storage/category_blogs/') }}" class="rounded"
                        style="object-fit:cover;width:48px">
                </a>
            </td>
            <td>
                <input id="status" name="status" data-id="" title="Status" type="checkbox"
                    class="ace-switch input-lg ace-switch-yesno bgc-green-d2 text-grey-m2" />
            </td>
            <td>

                <a href="#" class="btn btn-primary btn-sm" x-on:click='data_record' onclick=""><i
                        class="fa fa-edit"></i></a>

                <a href="#" class="btn btn-danger btn-sm bg-danger-danger text-white" onclick="">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
        <tr>
            <td colspan="6" alignt="center">
                {{ trans('No Data Found') }}
            </td>
        </tr>
    </tbody>
    <tfoot>
        <tr>
            <th>{{ trans('ID') }}</th>
            <th>{{ trans('Title') }}</th>
            <th>{{ trans('Description') }}</th>
            <th>{{ trans('Image') }}</th>
            <th>{{ trans('Status') }}</th>
            <th>{{ trans('Action') }}</th>
        </tr>
    </tfoot>
</table>
