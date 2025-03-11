 @can($prefix . 'create')
     <div class="col-md-4 mb-2">
         <div class="card">
             <div class="card-body">

                 <form id="my-form" action="" method="POST" enctype="multipart/form-data">
                     @csrf

                     <div class="form-group">
                         <label for="" class="form-control-label">
                             First Name <span class="text-danger">*</span>
                         </label>
                         <input type="text" class="name form-control" :value="data_record.name" name="cat_name"
                             id="name">
                     </div>
                     <div class="form-group">
                         <label for="" class="form-control-label">
                             Last Name <span class="text-danger">*</span>
                         </label>
                         <input type="text" class="name form-control" :value="data_record.name" name="cat_name"
                             id="name">
                     </div>
                     <div class="form-group">
                         <label for="" class="form-control-label">
                             Khmer Name <span class="text-danger">*</span>
                         </label>
                         <input type="text" class="name form-control" :value="data_record.name" name="cat_name"
                             id="name">
                     </div>
                     <div class="col-md-2">
                         <label for="" class="form-control-label">
                             Sex <span class="text-danger">*</span>
                         </label>
                     </div>
                     <div class="form-group">
                         <label for="" class="form-control-label">
                             <div class="form-check form-check-inline">
                                 <input class="form-check-input" type="radio" name="inlineRadioOptions" id="femaleGender"
                                     value="option1" checked />
                                 <label class="form-check-label" for="femaleGender">Female</label>
                             </div>
                             <div class="form-check form-check-inline">
                                 <input class="form-check-input" type="radio" name="inlineRadioOptions" id="maleGender"
                                     value="option2" />
                                 <label class="form-check-label" for="maleGender">Male</label>
                             </div>
                             <div class="form-check form-check-inline">
                                 <input class="form-check-input" type="radio" name="inlineRadioOptions" id="otherGender"
                                     value="option3" />
                                 <label class="form-check-label" for="otherGender">Other</label>
                             </div>
                         </label>
                     </div>
                     <div class="form-group">
                         <label for="" class="form-control-label">
                             Dob <span class="text-danger">*</span>
                         </label>
                         <input type="date" class="date form-control" :value="data_record.date" name="cat_date"
                             id="date">
                     </div>
                     <div class="form-group">
                         <label for="inputDescription">
                             Address <span class="text-danger">*</span>
                         </label>
                         <textarea id="inputDescription" class="form-control" rows="4"></textarea>
                     </div>
                     <div class="form-group">
                         <label for="" class="form-control-label">
                             Phone <span class="text-danger">*</span>
                         </label>
                         <input type="text" class="phone form-control" :value="data_record.phone" name="cat_phone"
                             id="phone" placeholder="Phone Number">
                     </div>
                     <div class="form-group">
                         <label for="" class="form-control-label">
                             Email <span class="text-danger">*</span>
                         </label>
                         <input type="text" class="email form-control" :value="data_record.email" name="cat_email"
                             id="email" placeholder="Enter Email">
                     </div>
                     <div class="form-group mb-3">
                         <div class="form-group">
                             <div class="form-group">
                                 <label for="status">
                                     Status <span class="text-danger">*</span>
                                 </label>
                                 <div class="form-group clearfix">

                                     <input id="status" name="status" data-id="" value="" title="Status"
                                         type="checkbox"
                                         class="ace-switch input-lg ace-switch-yesno bgc-green-d2 text-grey-m2" />

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
                                 style="position: absolute; left: 0; height: 100px; opacity: 0;"
                                 accept=".jpg, .jpeg, .png">
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
