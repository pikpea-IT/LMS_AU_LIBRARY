 @can($prefix . 'create')
     <div class="col-md-4 mb-2">
         <div class="card">
             <div class="card-body">

                 <form id="my-form" action="" method="POST" enctype="multipart/form-data">
                     @csrf
                     <div class="form-group">
                         <div data-mdb-input-init class="form-outline">
                             <label class="form-label" for="id">Title <span class="text-danger">*</span></label>
                             <input type="text" id="title" class="form-control form-control-lg" />
                         </div>
                     </div>
                     <div class="form-group">
                         <div data-mdb-input-init class="form-outline">
                             <label class="form-label" for="id">ID <span class="text-danger">*</span></label>
                             <input type="text" id="id" class="form-control form-control-lg" />
                         </div>
                     </div>
                     <div class="form-group">
                         <div data-mdb-input-init class="form-outline">
                             <label class="form-label" for="lastName">ISBN <span class="text-danger">*</span></label>
                             <input type="text" id="sibn" class="form-control form-control-lg" />
                         </div>
                     </div>
                     <div class="form-group">
                         <label for="" class="form-control-label">
                             Dob <span class="text-danger">*</span>
                         </label>
                         <input type="date" class="date form-control" :value="data_record.date" name="cat_date"
                             id="date">
                     </div>
                     <div class="form-group">
                         <label for="" class="form-control-label">
                             MemberID <span class="text-danger">*</span>
                         </label>
                         <input type="text" class="name form-control" :value="data_record.name" name="mem_name"
                             id="member">
                     </div>
                     <div class="form-group">
                         <label for="" class="form-control-label">
                             StaffID <span class="text-danger">*</span>
                         </label>
                         <input type="text" class="name form-control" :value="data_record.name" name="staff_name"
                             id="staff">
                     </div>
                     <div class="form-group">
                         <label for="inputStatus">Genre <span class="text-danger">*</span></label>
                         <select id="inputStatus" class="form-control custom-select">
                             <option selected="">Select one</option>
                             <option>A</option>
                             <option>B</option>
                             <option>C</option>
                         </select>
                     </div>
                     <div class="form-group">
                         <label for="inputDescription">Description <span class="text-danger">*</span></label>
                         <textarea id="inputDescription" class="form-control" rows="5"></textarea>
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
                                 src="{{ old('image_url', asset('images/place_holder.png')) }}" alt=""
                                 class="w-100" style="height: 200px;object-fit:contain" id="viewer1">
                             <input type="file" name="image" class="w-100" id="file-input"
                                 style="position: absolute; left: 0; height: 100px; opacity: 0;" accept=".jpg, .jpeg, .png">
                             <input type="hidden" name="image_url" value="{{ old('image_url') }}"
                                 :value="data_record.image">
                         </div>
                     </div>

                     <div class="d-grid gap-2">
                         <button wire:click.prevent="store()"
                             class="btn btn-success btn-block">{{ trans('Save') }}</button>
                         <input class="btn btn-danger btn-block mt-2 d-none" id="cancel-btn" type="button"
                             value={{ __('cancel') }} onclick="cancel()">
                     </div>
                 </form>
             </div>
         </div>
     </div>
 @endcan
