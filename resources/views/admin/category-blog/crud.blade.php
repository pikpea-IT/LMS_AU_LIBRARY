 @can($prefix . 'create')
 <div class="col-md-4 mb-2">
     <div class="card">
         <div class="card-body">

             <form id="my-form" action="{{ route('admin.category-blogs.store') }}" method="POST"
                 enctype="multipart/form-data">
                 @csrf
                 <input type="hidden" class="form-control" id="id" :value="data_record.id" name="id">
                 <div class="form-group">
                     <label for="" class="form-control-label">
                         Name
                     </label>
                     <input type="text" class="name form-control" :value="data_record.name" name="cat_name" id="name">
                 </div>
                 <div class="form-group">
                     <label for="" class="form-control-label">
                         Slug
                     </label>
                     <input type="text" class="slug form-control" :value="data_record.slug" name="cat_slug" id="slug">
                 </div>
                 <div class="form-group mb-3">
                     <div class="form-group">
                         <div class="form-group">

                             <div class="form-group clearfix">
                                 <div class="icheck-primary d-inline">
                                     <input type="checkbox" id="status" name="status" :checked="data_record.status">
                                     <label for="status">
                                         Status <span class="text-danger">*</span>
                                     </label>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>

                 <div class="form-group">
                     <label for="file-input" class="form-control-label mb-1">{{ __('image') }}
                         <span class="text-danger">*</span></label>
                     <div class="position-relative border rounded" style=" background: #e7e7e7b0; ">
                         <img onerror="this.src='{{ asset('images/place_holder.png') }}'"
                             src="{{  old('image_url',asset('images/place_holder.png')) }}" alt="" class="w-100"
                             style="height: 100px;object-fit:contain" id="viewer1">
                         <input type="file" name="image" class="w-100" id="file-input"
                             style="position: absolute; left: 0; height: 100px; opacity: 0;" accept=".jpg, .jpeg, .png">
                         <input type="hidden" name="image_url" value="{{ old('image_url') }}"
                             :value="data_record.image">

                     </div>
                 </div>

                 <div class="d-grid gap-2">
                     <button wire:click.prevent="store()" class="btn btn-success btn-block">{{trans('Save')}}</button>
                     <input class="btn btn-danger btn-block mt-2 d-none" id="cancel-btn" type="button"
                         value={{ __('cancel') }} onclick="cancel()">
                 </div>
             </form>
         </div>
     </div>
 </div>
 @endcan