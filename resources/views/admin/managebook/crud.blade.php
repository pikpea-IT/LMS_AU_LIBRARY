 @can($prefix . 'create')
     <div class="col-md-12 mb-2">
         <form id="my-form" action="#" method="POST" enctype="multipart/form-data">
             @csrf

             <div class="row">
                 <div class="col-md-6">
                     <input type="hidden" class="form-control" id="id" :value="data_record.id" name="id">
                     <div class="form-group">
                         <label for="" class="form-control-label">
                             ID <span class="text-danger">*</span>
                         </label>
                         <input type="text" class="name form-control" :value="data_record.name" name="cat_name"
                             id="name">
                     </div>
                     <div class="form-group">
                         <label for="" class="form-control-label">
                             SIBN <span class="text-danger">*</span>
                         </label>
                         <input type="text" class="slug form-control" :value="data_record.sibn" name="cat_sibn"
                             id="sibn">
                     </div>
                     <div class="form-group">
                         <label for="" class="form-control-label">
                             Title <span class="text-danger">*</span>
                         </label>
                         <input type="text" class="slug form-control" :value="data_record.title" name="cat_title"
                             id="title">
                     </div>
                     <div class="form-group">
                         <label for="" class="form-control-label">
                             Author <span class="text-danger">*</span>
                         </label>
                         <input type="text" class="slug form-control" :value="data_record.author" name="cat_author"
                             id="author">
                     </div>
                     <div class="form-group">
                         <label for="" class="form-control-label">
                             Genre <span class="text-danger">*</span>
                         </label>
                         <input type="text" class="slug form-control" :value="data_record.genre" name="cat_genre"
                             id="genre">
                     </div>
                     <div class="form-group">
                         <label for="inputEstimatedBudget">Quantity</label>
                         <input type="number" id="inputEstimatedBudget" class="form-control" value="" step="1">
                     </div>
                     <div class="form-group">
                         <label for="" class="form-control-label">
                             Price <span class="text-danger">*</span>
                         </label>
                         <input type="text" class="slug form-control" :value="data_record.price" name="cat_price"
                             id="price">
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
                 </div>

                 <div class="col-md-6">
                     <div class="form-group">
                         <div class="form-group">
                             <label for="" class="form-control-label">
                                 Publisher <span class="text-danger">*</span>
                             </label>
                             <input type="text" class="slug form-control" :value="data_record.publisher"
                                 name="cat_publisher" id="publisher">
                         </div>
                         <div class="form-group">
                             <label for="*" class="form-control-label">
                                 Date Recived
                             </label>
                             <input type="date" class="slug form-control" :value="data_record.date" name="cat_date"
                                 id="date">
                         </div>
                         <div class="form-group">
                             <label for="inputDescription">
                                 Description <span class="text-danger">*</span>
                             </label>
                             <textarea id="inputDescription" class="form-control" rows="4"></textarea>
                         </div>
                         <label for="file-input" class="form-control-label mb-1">{{ __('image') }}
                             <span class="text-danger">*</span></label>
                         <div class="position-relative border rounded" style=" background: #e7e7e7b0; ">
                             <img onerror="this.src='{{ asset('images/place_holder.png') }}'"
                                 src="{{ old('image_url', asset('images/place_holder.png')) }}" alt=""
                                 class="w-100" style="height: 228px;object-fit:contain" id="viewer1">
                             <input type="file" name="image" class="w-100" id="file-input"
                                 style="position: absolute; left: 0; height: 100px; opacity: 0;"
                                 accept=".jpg, .jpeg, .png">
                             <input type="hidden" name="image_url" value="{{ old('image_url') }}"
                                 :value="data_record.image">

                         </div>
                     </div>
                 </div>
                 <div class="col-lg-12">
                     <div class="btn-group w-100">
                         <span class="btn btn-success col fileinput-button dz-clickable">
                             <i class="fas fa-save"></i>
                             <span>Save</span>
                         </span>
                         <button type="reset" class="btn btn-warning col cancel">
                             <i class="fas fa-times-circle"></i>
                             <span>Cancel</span>
                         </button>
                     </div>
                 </div>
             </div>
         </form>
     </div>
 @endcan
