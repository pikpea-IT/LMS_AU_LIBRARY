 @can($prefix . 'create')
     <div class="col-md-12 mb-2">
         <div class="card">
             <section class="content">
                 <div class="row">
                     <div class="col-md-6">
                         <div class="card card-primary">
                             <div class="card-header">
                                 <h3 class="card-title">Book Issue</h3>

                                 <div class="card-tools">
                                     <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                         title="Collapse">
                                         <i class="fas fa-minus"></i>
                                     </button>
                                 </div>
                             </div>
                             <div class="card-body">
                                 <div class="form-group">
                                     <label for="inputName">ID <span class="text-danger">*</span></label>
                                     <input type="text" id="inputName" class="form-control" value="">
                                 </div>
                                 <div class="form-group">
                                     <label for="inputName">ISBN <span class="text-danger">*</span></label>
                                     <input type="text" id="inputName" class="form-control" value="">
                                 </div>
                                 <div class="form-group">
                                     <label for="inputSpentBudget">Author <span class="text-danger">*</span></label>
                                     <input type="text" id="inputSpentBudget" class="form-control" value="">
                                 </div>
                                 <div class="form-group">
                                     <label for="inputSpentBudget">Publisher <span class="text-danger">*</span></label>
                                     <input type="text" id="inputSpentBudget" class="form-control" value="">
                                 </div>
                                 <div class="form-group">
                                     <label for="inputName">Title <span class="text-danger">*</span></label>
                                     <input type="text" id="inputName" class="form-control" value="">
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
                                 <div class="form-group mb-3">
                                     <div class="form-group">
                                         <div class="form-group">
                                             <label for="status">
                                                 Status <span class="text-danger">*</span>
                                             </label>
                                             <div class="form-group clearfix">

                                                 <input id="status" name="status" data-id="" value=""
                                                     title="Status" type="checkbox"
                                                     class="ace-switch input-lg ace-switch-yesno bgc-green-d2 text-grey-m2" />

                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <!-- /.card-body -->
                         </div>
                         <!-- /.card -->
                     </div>
                     <div class="col-md-6">
                         <div class="card card-secondary">
                             <div class="card-header">
                                 <h3 class="card-title">Book Issue</h3>

                                 <div class="card-tools">
                                     <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                         title="Collapse">
                                         <i class="fas fa-minus"></i>
                                     </button>
                                 </div>
                             </div>
                             <div class="card-body">
                                 <div class="form-group">
                                     <label for="inputEstimatedBudget">Date <span class="text-danger">*</span></label>
                                     <input type="date" id="inputEstimatedBudget" class="form-control" value="">
                                 </div>

                                 <label for="file-input" class="form-control-label mb-1">Image
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
                                 <div class="form-group">
                                     <label for="inputDescription">Description</label>
                                     <textarea id="inputDescription" class="form-control" rows="5"></textarea>
                                 </div>
                             </div>
                         </div>
                         <div class="row">
                             <div class="col-12">
                                 <a href="#" class="btn btn-secondary float-right">Cancel</a>
                                 <input type="submit" value="Save" class="btn btn-success float-right">
                             </div>
                         </div>
             </section>
         </div>
     </div>
 @endcan
