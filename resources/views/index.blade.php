 @extends('layouts.master')
 @section('title-page', 'Project Final | Dasboard')
 @section('title', 'Dashboard')
 @section('breadcumb', 'Dashboard')
 @section('index')
 <div class="card">
     <div class="card-header">
         <h3 class="card-title">DataTable Pertanyaan</h3>
     </div>
     <!-- /.card-header -->
     <div class="card-body">
         <table id="example1" class="table table-bordered table-striped">
             <thead>
                 <tr>
                     <th>#</th>
                     <th>Judul Pertanyaan</th>
                     <th>Isi Pertanyaan</th>
                     <th>Vote</th>
                     <th>Tag</th>
                 </tr>
             </thead>
             <tbody>
                 @forelse($data as $i => $info)
                    <tr>
                        <td> {{$i + 1}} </td>
                        <td> {{$info->title}} </td>
                        <td> {{$info->content}} </td>
                        <td>1.8</td>
                        <td> {{$info->tag}} </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" align="center">No Posts!</td>
                    </tr>
                @endforelse
             </tbody>
         </table>
     </div>
     <!-- /.card-body -->
 </div>
 @endsection

 @push('scripts')
 <script src="{{asset('plugins/datatables/jquery.dataTables.js')}}"></script>
 <script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
 <script>
     $(function() {
         $("#example1").DataTable();
     });

 </script>
 @endpush
