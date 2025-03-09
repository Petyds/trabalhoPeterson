<?php include '../templates-parts/header-admin.php'; ?>


<!-- Error Page -->

<!--/ End Error Page -->
<div class="formbold-main-wrapper">
        <!-- Author: FormBold Team -->
        <!-- Learn More: https://formbold.com -->
        <div class="formbold-form-wrapper">
          <form action="envio.php" method="POST">
              <div class="formbold-steps">
                  <ul>
                      <li class="formbold-step-menu1 active">
                          <span>1</span>
                          Inicio
                      </li>
                      <li class="formbold-step-menu2">
                          <span>2</span>
                          Dados
                      </li>
                      <li class="formbold-step-menu3">
                          <span>3</span>
                          Envio
                      </li>
                  </ul>
              </div>
      
              <div class="formbold-form-step-1 active">
                <div class="formbold-input-flex">
                  <div>
                      <label for="nome" class="formbold-form-label"> Nome </label>
                      <input type="text" name="nome" placeholder="Nome Completo" id="nome" class="formbold-form-input" />
                  </div>
                  <div>
                      <label for="sobrenome" class="formbold-form-label">Sobrenome</label>
                      <input  type="text" name="sobrenome" placeholder="Informar Sobrenome" id="sobrenome" class="formbold-form-input" />
                  </div>
                </div>
               
                <div>
                    <label for="email" class="formbold-form-label">Email</label>
                    <input type="email" name="email" placeholder="example@mail.com" id="email" class="formbold-form-input" />
                </div>
        
                <div class="formbold-input-flex">
                    <!-- <div>
                        <label for="password" class="formbold-form-label">Senha</label>
                        <input type="password" name="password" id="password" placeholder="informe sua senha" class="formbold-form-input" />
                    </div>
                    <div>
                        <label for="password-conf" class="formbold-form-label">Confirmar Senha</label>
                        <input type="password" name="password-conf" id="password-conf" placeholder="Confirmar senha" class="formbold-form-input" />
                    </div> -->
                </div>

                <div class="formbold-input-flex">
                  <div>
                      <label for="senha" class="formbold-form-label"> Senha </label>
                      <input type="password" name="senha" placeholder="Informar senha" id="password" class="formbold-form-input" />
                  </div>
                  <div>
                      <label for="conf-senha" class="formbold-form-label">Confirmar senha</label>
                      <input  type="password" name="conf-senha" placeholder="Confirmar senha" id="conf-senha" class="formbold-form-input" />
                  </div>
                </div>

                <div>
                    <label for="address" class="formbold-form-label"> Address </label>
                    <input type="text" name="address" id="address" placeholder="Flat 4, 24 Castle Street, Perth, PH1 3JY" class="formbold-form-input" />
                </div>
              </div>
      
              <div class="formbold-form-step-2">
                <div>
                  <label for="message" class="formbold-form-label"> Message </label>
                  <textarea rows="6" name="message" id="message" placeholder="Type your message" class="formbold-form-input"></textarea>
                </div>
              </div>
      
              <div class="formbold-form-step-3">
                <div class="formbold-form-confirm">
                    <h3>ola</h3>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
                    </p>
                  <!-- <div>
                    
                  </div> -->
                </div>
              </div>
      
              <div class="formbold-form-btn-wrapper">
                <button class="formbold-back-btn">
                  Back
                </button>
      
                <button class="formbold-btn">
                    Próxima 
                    <!-- <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_1675_1807)">
                    <path d="M10.7814 7.33312L7.20541 3.75712L8.14808 2.81445L13.3334 7.99979L8.14808 13.1851L7.20541 12.2425L10.7814 8.66645H2.66675V7.33312H10.7814Z" fill="white"/>
                    </g>
                    <defs>
                    <clipPath id="clip0_1675_1807">
                    <rect width="16" height="16" fill="white"/>
                    </clipPath>
                    </defs>
                    </svg> -->
                </button>
              </div>
          </form>
        </div>
      </div>

<?php include '../templates-parts/footer-admin.php'; ?>