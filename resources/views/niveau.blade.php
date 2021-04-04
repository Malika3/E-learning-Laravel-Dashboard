@extends('layouts.app')
@section('content')

  <div class="wrapper ">
    <div class="sidebar" data-color="orange">
      <!-- Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow -->
      <div class="logo">
       
        <h5 style="color:white">E-learn Dashboard</h5>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
        <li >
            <a href="/getadmins">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Admins</p>
            </a>
          </li>
          <li>
          <li >
            <a href="/getens">
              <i class="now-ui-icons users_single-02"></i>
              <p>Enseignants</p>
            </a>
          </li>
          <li >
            <a href="/getmodules">
              <i class="now-ui-icons files_paper"></i>
              <p>Modules</p>
            </a>
          </li>
          <li class="active ">
            <a href="/getniveaux">
              <i class="now-ui-icons education_hat"></i>
              <p>Niveaux</p>
            </a>
          </li> 
          <li>
            <a href="/getgroupes">
              <i class="now-ui-icons design_vector"></i>
              <p>Groupes</p>
            </a>
          </li>
          
          <li >
            <a href="/getsalles">
              <i class="now-ui-icons design_app"></i>
              <p>Salles</p>
            </a>
          </li>
          
          
          <li>
            <a href="/getseances">
              <i class="now-ui-icons ui-2_time-alarm"></i>
              <p>Seances</p>
            </a>
          </li>
          <li>
            <a href="/getempt">
              <i class="now-ui-icons ui-1_calendar-60"></i>
              <p>Emploi du temps</p>
            </a>
          </li>
          
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <div class="content">
      <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Les niveaux</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        ID
                      </th>
                      <th>
                        Niveau
                      </th>  
                        
                    </thead>
                    <tbody>
                 
                    @foreach ($niveaux as $n)
                      <tr>
                        <td>
                        {{$n->id}}
                        </td>
                        <td>
                        {{$n->NiveauName}}

                        </td>
                       
                        
                        <td class="text-right">
                        <a href="{{url('getniveaux/'.$n->id.'/edit')}}" class='btn btn-success'>Modifier</a>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter">
                          Supprimer
                        </button>

                           <div class="modal" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                             <div class="modal-dialog modal-dialog-centered" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                    <h6 class="modal-title" id="exampleModalLongTitle">Etes-vous sur de supprimer ce niveau?</h6>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                 </div>
                                 <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                    <form method="post" action="{{url('getniveaux/'.$n->id)}}" >
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                      <input type="submit" value="Oui" class="btn btn-danger" />
                                     </form>
                                </div>
                              </div>
                             </div>
                          </div>
                        
                        </td>
                      </tr>
        
                  @endforeach

                    </tbody>

                  </table>
                  <button type="submit" class="btn btn-warning" style="position:relative;left:500px"><a href="/insnivform" style="color:white;">Ajouter un niveau</a></button>
                </div>
              </div>
            </div>
          </div> 
      </div>
      <footer class="footer">
       
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  @yield('scripts')
 @endsection