<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered ">
      <div class="modal-content">
        <div class="modal-header">
            <div class="container">
                <div class="row text-center">
                    <h3>Авторизация</h3>
                    <span>Авторизация для входа в кабинет</span>
                </div>
            </div>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="container">
                <form>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Email</label>
                        <input type="text" class="form-control" id="login-email" placeholder="">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Пароль</label>
                        <input type="password" class="form-control" id="login-pass" placeholder="***********">
                        <div id="validationServer05Feedback" class="invalid-feedback">
                            Не верный логин или пароль !
                        </div>
                    </div>
                </form>
                <br>
                <div class="row">
                    <button type="button" class="btn btn-primary" id="login-send">Войти</button>
                </div>
                <br>
                <div class="row text-center">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#registerModal">Ещё нет аккаунта? Регистрация</a>
                </div>
            </div>
        </div>

      </div>
    </div>
  </div>