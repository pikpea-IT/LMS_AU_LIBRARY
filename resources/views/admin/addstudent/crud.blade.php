 @can($prefix . 'create')
     <div class="col-md-12 mb-12">
         <form id="my-form" action="#" method="POST" enctype="multipart/form-data">
             @csrf

             <div class="row">
                 <div class="col-md-6">
                     <div class="row">
                         <div class="col-md-6 mb-4">

                             <div data-mdb-input-init class="form-outline">
                                 <label class="form-label" for="firstName">First Name <span
                                         class="text-danger">*</span></label>
                                 <input type="text" id="firstName" class="form-control form-control-lg" />
                             </div>

                         </div>
                         <div class="col-md-6 mb-4">

                             <div data-mdb-input-init class="form-outline">
                                 <label class="form-label" for="lastName">Last Name <span
                                         class="text-danger">*</span></label>
                                 <input type="text" id="lastName" class="form-control form-control-lg" />
                             </div>

                         </div>
                         <div class="col-md-12 mb-4">

                             <div data-mdb-input-init class="form-outline">
                                 <label class="form-label" for="lastName">Khmer Name <span
                                         class="text-danger">*</span></label>
                                 <input type="text" id="lastName" class="form-control form-control-lg" />
                             </div>

                         </div>
                     </div>

                     <div class="row">
                         <div class="col-md-6 mb-4 d-flex align-items-center">

                             <div data-mdb-input-init class="form-outline datepicker w-100">
                                 <label for="birthdayDate" class="form-label">Birthday <span
                                         class="text-danger">*</span></label>
                                 <input type="date" class="form-control form-control-lg" id="birthdayDate" />

                             </div>

                         </div>
                         <div class="col-md-6 mb-4">

                             <h6 class="mb-2 pb-1">Gender: </h6>

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

                         </div>
                     </div>

                     <div class="row">

                         <div class="col-md-12 mb-2 pb-2">
                             <div data-mdb-input-init class="form-outline">
                                 <label class="form-label" for="emailAddress">Address <span
                                         class="text-danger">*</span></label>
                                 <textarea id="inputDescription" class="form-control" rows="4"></textarea>
                             </div>
                         </div>
                         <div class="col-md-12 mb-2 pb-2">
                             <div data-mdb-input-init class="form-outline">
                                 <label class="form-label" for="emailAddress">Email <span
                                         class="text-danger">*</span></label>
                                 <input type="email" id="emailAddress" placeholder="Enter Email"
                                     class="form-control form-control-lg" />
                             </div>
                         </div>
                         <div class="col-md-12 mb-4 pb-2">
                             <div data-mdb-input-init class="form-outline">
                                 <label class="form-label" for="phoneNumber">Phone
                                     Number <span class="text-danger">*</span></label>
                                 <input type="tel" id="phoneNumber" placeholder="Enter Phone Number"
                                     class="form-control form-control-lg" />
                             </div>
                         </div>
                         <div class="form-group clearfix">
                             <div class="col-md-12 pb-2">
                                 <input type="checkbox" id="status" name="status" :checked="data_record.status">
                                 <label for="status">
                                     Staff <span class="text-danger">*</span>
                                 </label>
                             </div>
                         </div>
                         <div class="form-group clearfix">
                             <div class="col-md-12 pb-2">
                                 <input type="checkbox" id="status" name="status" :checked="data_record.status">
                                 <label for="status">
                                     Teacher <span class="text-danger">*</span>
                                 </label>
                             </div>
                         </div>
                         <div class="form-group clearfix">
                             <div class="col-md-12 mb-0 pb-2">
                                 <input type="checkbox" id="status" name="status" :checked="data_record.status">
                                 <label for="status">
                                     Unit/Office <span class="text-danger">*</span>
                                 </label>
                             </div>
                         </div>
                         <div class="col-md-12 mb-4 pb-1">
                             <textarea id="inputDescription" class="form-control" placeholder="Enter Unit/Office" rows="6"></textarea>
                         </div>
                         <div class="form-group clearfix">
                             <div class="col-md-12 mb-0 pb-2">
                                 <input type="checkbox" id="status" name="status" :checked="data_record.status">
                                 <label for="status">
                                     Student In University <span class="text-danger">*</span>
                                 </label>
                             </div>
                         </div>
                         <div class="col-md-6 mb-2 pb-2">
                             <div data-mdb-input-init class="form-outline">
                                 <label class="form-label" for="emailAddress">University <span
                                         class="text-danger">*</span>
                                     <select id="inputStatus" class="form-control custom-select">
                                         <option selected>Select one</option>
                                         <option>Information Technology</option>
                                         <option>Engineering and Architechture</option>
                                         <option>Public Healt</option>
                                     </select>
                                 </label>
                             </div>
                         </div>
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
                 </div>

                 <div class="col-md-6">
                     <div class="form-group">

                         <label for="file-input" class="form-control-label mb-2">{{ __('image') }}
                             <span class="text-danger">*</span></label>
                         <div class="position-relative border rounded" style=" background: #e7e7e7b0; ">
                             <img onerror="this.src='{{ asset('images/place_holder.png') }}'"
                                 src="{{ old('image_url', asset('images/place_holder.png')) }}" alt=""
                                 class="w-100" style="height: 200px;object-fit:contain" id="viewer1">
                             <input type="file" name="image" class="w-100" id="file-input"
                                 style="position: absolute; left: 0; height: 200px; opacity: 0;"
                                 accept=".jpg, .jpeg, .png">
                             <input type="hidden" name="image_url" value="{{ old('image_url') }}"
                                 :value="data_record.image">

                         </div>
                         <div class="form-group">
                             <label for="inputDescription">
                                 Description <span class="text-danger">*</span>
                             </label>
                             <textarea id="inputDescription" class="form-control" rows="4"></textarea>
                         </div>
                     </div>

                     <div class="col-lg-12">
                         <div class="btn-group w-100">
                             <span class="btn btn-success col fileinput-button dz-clickable">
                                 <i class="fas fa-plus"></i>
                                 <span>Save</span>
                             </span>
                             <button type="reset" class="btn btn-warning col cancel">
                                 <i class="fas fa-times-circle"></i>
                                 <span>Cancel</span>
                             </button>
                         </div>
                     </div>
                 </div>
             </div>
         </form>
     </div>
 @endcan
