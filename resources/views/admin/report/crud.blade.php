 @can($prefix . 'create')
     <div class="col-md-12 mb-12">
         <section class="content">

             <!-- Default box -->
             <div class="card">
                 <div class="card-header">
                     <div class="card-tools">
                         <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                             <i class="fas fa-minus"></i>
                         </button>
                         <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                             <i class="fas fa-times"></i>
                         </button>
                     </div>
                 </div>
                 <div class="card-body p-0">
                     <table class="table table-striped projects">
                         <thead>
                             <tr>
                                 <th style="width: 8%">
                                     ID <span class="text-danger">*</span>
                                 </th>
                                 <th style="width: 20%">
                                     Name <span class="text-danger">*</span>
                                 </th>
                                 <th style="width: 30%">
                                     Team Members <span class="text-danger">*</span>
                                 </th>
                                 <th>
                                     Progress <span class="text-danger">*</span>
                                 </th>
                                 <th style="width: 8%" class="text-center">
                                     Status <span class="text-danger">*</span>
                                 </th>
                                 <th style="width: 20%" class="text-center">
                                     Action <span class="text-danger">*</span>
                                 </th>
                             </tr>
                         </thead>
                         <tbody>
                             <tr>
                                 <td>
                                     001
                                 </td>
                                 <td>
                                     <a>
                                         Sdaj Kjil
                                     </a>
                                     <br>
                                     <small>
                                         Created 26.01.2025
                                     </small>
                                 </td>
                                 <td>
                                     <ul class="list-inline">
                                         <li class="list-inline-item">
                                             <img alt="Avatar" class="table-avatar"
                                                 src="{{ asset('backend') }}/dist/img/avatapic.jpg">
                                         </li>
                                         <li class="list-inline-item">
                                             <img alt="Avatar" class="table-avatar"
                                                 src="{{ asset('backend') }}/dist/img/a1.jpg">
                                         </li>
                                         <li class="list-inline-item">
                                             <img alt="Avatar" class="table-avatar"
                                                 src="{{ asset('backend') }}/dist/img/a2.jpg">
                                         </li>
                                         <li class="list-inline-item">
                                             <img alt="Avatar" class="table-avatar"
                                                 src="{{ asset('backend') }}/dist/img/a3.jpg">
                                         </li>
                                     </ul>
                                 </td>
                                 <td class="project_progress">
                                     <div class="progress progress-sm">
                                         <div class="progress-bar bg-green" role="progressbar" aria-valuenow="100"
                                             aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                         </div>
                                     </div>
                                     <small>
                                         100% Complete
                                     </small>
                                 </td>
                                 <td class="project-state">
                                     <span class="badge badge-success">Success</span>
                                 </td>
                                 <td class="project-actions text-right">
                                     <a class="btn btn-primary btn-sm" href="#">
                                         <i class="fas fa-folder">
                                         </i>
                                         View
                                     </a>
                                     <a class="btn btn-info btn-sm" href="#">
                                         <i class="fas fa-pencil-alt">
                                         </i>
                                         Edit
                                     </a>
                                     <a class="btn btn-danger btn-sm" href="#">
                                         <i class="fas fa-trash">
                                         </i>
                                         Delete
                                     </a>
                                 </td>
                             </tr>
                             <tr>
                                 <td>
                                     002
                                 </td>
                                 <td>
                                     <a>
                                         Admin Au
                                     </a>
                                     <br>
                                     <small>
                                         Created 01.01.2025
                                     </small>
                                 </td>
                                 <td>
                                     <ul class="list-inline">
                                         <li class="list-inline-item">
                                             <img alt="Avatar" class="table-avatar"
                                                 src="{{ asset('backend') }}/dist/img/AdminLTELogo.png">
                                         </li>
                                     </ul>
                                 </td>
                                 <td class="project_progress">
                                     <div class="progress progress-sm">
                                         <div class="progress-bar bg-green" role="progressbar" aria-valuenow="47"
                                             aria-valuemin="0" aria-valuemax="100" style="width: 47%">
                                         </div>
                                     </div>
                                     <small>
                                         47% Complete
                                     </small>
                                 </td>
                                 <td class="project-state">
                                     <span class="badge badge-success">Success</span>
                                 </td>
                                 <td class="project-actions text-right">
                                     <a class="btn btn-primary btn-sm" href="#">
                                         <i class="fas fa-folder">
                                         </i>
                                         View
                                     </a>
                                     <a class="btn btn-info btn-sm" href="#">
                                         <i class="fas fa-pencil-alt">
                                         </i>
                                         Edit
                                     </a>
                                     <a class="btn btn-danger btn-sm" href="#">
                                         <i class="fas fa-trash">
                                         </i>
                                         Delete
                                     </a>
                                 </td>
                             </tr>
                             <tr>
                                 <td>
                                     003
                                 </td>
                                 <td>
                                     <a>
                                         University
                                     </a>
                                     <br>
                                     <small>
                                         Created 01.01.2025
                                     </small>
                                 </td>
                                 <td>
                                     <ul class="list-inline">
                                         <li class="list-inline-item">
                                             <img alt="Avatar" class="table-avatar"
                                                 src="{{ asset('backend') }}/dist/img/AdminLTELogo.png">
                                         </li>
                                         <li class="list-inline-item">
                                             <img alt="Avatar" class="table-avatar"
                                                 src="{{ asset('backend') }}/dist/img/AdminLTELogo.png">
                                         </li>
                                         <li class="list-inline-item">
                                             <img alt="Avatar" class="table-avatar"
                                                 src="{{ asset('backend') }}/dist/img/AdminLTELogo.png">
                                         </li>
                                     </ul>
                                 </td>
                                 <td class="project_progress">
                                     <div class="progress progress-sm">
                                         <div class="progress-bar bg-green" role="progressbar" aria-valuenow="77"
                                             aria-valuemin="0" aria-valuemax="100" style="width: 77%">
                                         </div>
                                     </div>
                                     <small>
                                         77% Complete
                                     </small>
                                 </td>
                                 <td class="project-state">
                                     <span class="badge badge-success">Success</span>
                                 </td>
                                 <td class="project-actions text-right">
                                     <a class="btn btn-primary btn-sm" href="#">
                                         <i class="fas fa-folder">
                                         </i>
                                         View
                                     </a>
                                     <a class="btn btn-info btn-sm" href="#">
                                         <i class="fas fa-pencil-alt">
                                         </i>
                                         Edit
                                     </a>
                                     <a class="btn btn-danger btn-sm" href="#">
                                         <i class="fas fa-trash">
                                         </i>
                                         Delete
                                     </a>
                                 </td>
                             </tr>
                         </tbody>
                     </table>
                 </div>
             </div>
         </section>
     </div>
 @endcan
