<div class="modal fade modalAgregar" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="panel panel-default">
              <div class="panel-heading">
                <div id="tituloModalAgregar"><i class="fa fa-plus"></i> AGREGAR USUARIO
                <div class="pull-right">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
               </div>
              </div>
              <div class="panel-body" style="padding: 15px;">
                <form method="POST" action="{{ route('users.store') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" name="name" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Apellido</label>
                        <input type="text" name="lastName" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Estado</label>
                        <select class="form-control select2" name="state" style="width: 100%;">
                          <option value="1">Habilitado</option>
                          <option value="2">Deshabilitado</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Perfil</label>
                        <select class="form-control select2" name="profile" style="width: 100%;">
                          @foreach($profiles as $profile)
                            <option value="{{$profile->id}}">{{$profile->name}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <label>Foto</label>
                      <input type="file" name="photo" style="color: transparent;">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Contraseña</label>
                        <input type="password" name="password" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Confirmar contraseña</label>
                        <input type="password" name="password2" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group text-center">
                       <button type="submit" class="btn btn-primary" style="padding:8px 50px;margin-top:25px;">
                           Agregar Usuario
                       </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
        </div>
    </div>
</div>